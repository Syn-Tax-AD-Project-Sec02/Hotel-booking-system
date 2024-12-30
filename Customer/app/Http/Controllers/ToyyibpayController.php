<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ToyyibpayController extends Controller
{
    public function createBill()
    {
        $option = array(
            'userSecretKey' => config('toyyibpay.key'),
            'categoryCode' => config('toyyibpay.category'),
            'billName' => 'Scholars In',
            'billDescription' => 'Car Rental WXX123 On Sunday',
            'billPriceSetting' => 1,
            'billPayorInfo' => 1,
            'billAmount' => 1000,
            'billReturnUrl' => url('toyyibpay-status'),
            'billCallbackUrl' => url('toyyibpay-callback'),
            'billExternalReferenceNo' => 'Bill-0001',
            'billTo' => 'scholars',
            'billEmail' => 'scholars@gmail.com',
            'billPhone' => '0194342411',
            'billSplitPayment' => 0,
            'billSplitPaymentArgs' => '',
            'billPaymentChannel' => '0',
            'billContentEmail' => 'Thank you for purchasing our product!',
            'billChargeToCustomer' => 2,
        );

        $url = 'https://dev.toyyibpay.com/index.php/api/createBill';
        $response = Http::asForm()->post($url, $option);

        Log::info('ToyyibPay API Response', [$response->body()]);

        if ($response->ok()) {
            $data = $response->json();
            Log::info('Parsed Response Data', [$data]);

            // Check if 'BillCode' exists in the response
            if (isset($data[0]['BillCode'])) {
                $billCode = $data[0]['BillCode'];
                Log::info('BillCode:', [$billCode]);
                return redirect('https://dev.toyyibpay.com/' . $billCode);
            }
        }
        

        Log::info('ToyyibPay API Response Status', ['status' => $response->status()]);
        Log::info('ToyyibPay API Response Body', ['body' => $response->body()]);
        Log::info('ToyyibPay API Response JSON', ['json' => $response->json()]);

        return back()->withErrors('Failed to create the bill.');
    }



    public function paymentStatus(){
        $reponse = request()->all(['status_id','billcode','order_id']);
        return response;

    }

    public function callback(){
        $reponse = request()->all(['refno','status','reason', 'billcode', 'order_id', 'amount']);
        Log::info($response);
    }
}
