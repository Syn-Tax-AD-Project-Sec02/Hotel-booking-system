<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Transaction;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class ToyyibpayController extends Controller
{
    
    public function createBill(Request $request)
    {
        $totalCost = $request->session()->get('totalCost')*100;
        
        $option = array(
            'userSecretKey' => config('toyyibpay.key'),
            'categoryCode' => config('toyyibpay.category'),
            'billName' => 'Scholars In',
            'billDescription' => 'Booking Payment for ',
            'billPriceSetting' => 1,
            'billPayorInfo' => 1,
            'billAmount' => $totalCost,
            'billReturnUrl' => url('/payment-success/{billCode}'), // URL for success page
            'billFailedUrl' => url('/payment-failed'), 
            'billCallbackUrl' => url('payment-callback'),
            'billExternalReferenceNo' => 'Booking-' . time(),
            'billTo' => Auth::user()->name,
            'billEmail' => Auth::user()->email,
            'billPhone' => Auth::user()->phone,
            'billSplitPayment' => 0,
            'billSplitPaymentArgs' => '',
            'billPaymentChannel' => '0',
            'billChargeToCustomer' => 2,
        );

        $url = 'https://dev.toyyibpay.com/index.php/api/createBill';
        $response = Http::asForm()->post($url, $option);
    
        Log::info('ToyyibPay API Response', [$response->body()]);
    
        if ($response->ok()) {
            // If response is successful, parse the response
            $data = $response->json();
            Log::info('Parsed Response Data', [$data]);
    
            // Check if 'BillCode' exists in the response
            if (isset($data[0]['BillCode'])) {
                $billCode = $data[0]['BillCode'];
                $externalRef = $responseData[0]['billExternalReferenceNo'] ?? 'unknown-reference';

                // Save transaction details to the database
                Transaction::create([
                    'bill_code' => $billCode,
                    'external_reference_no' => $externalRef,
                    'user_name' => Auth::user()->name,
                    'user_email' => Auth::user()->email,
                    'user_phone' => Auth::user()->phone,
                    'amount' => $request->session()->get('totalCost'),
                    'status' => 'pending',
                    'transaction_date' => now(),
                ]);
                // Redirect the user to ToyyibPay payment page
                return redirect('https://dev.toyyibpay.com/' . $billCode);
            }
        }
        

        Log::info('ToyyibPay API Response Status', ['status' => $response->status()]);
        Log::info('ToyyibPay API Response Body', ['body' => $response->body()]);
        Log::info('ToyyibPay API Response JSON', ['json' => $response->json()]);

        return back()->withErrors('Failed to create the bill.');
    }



    public function paymentStatus() {
        $response = request()->all(['status_id', 'billcode', 'order_id']);
        Log::info($response);
    }

    public function paymentCallback(Request $request)
{
    $status = $request->status_id; // ToyyibPay returns the status in the callback
    $billCode = $request->billcode;

    if ($status == 1) { // 1 indicates successful payment
        return redirect('/payment-success');
    }  else {
        // In case of unknown status, handle gracefully or return to a default page
        return redirect('/payment-failed');
    }
}

public function paymentSuccess(Request $request)
{
    // You can retrieve the transaction details or other information based on $billCode
    \Log::info('Payment callback received:', $request->all());
        
        $status = $request->status_id;
        $billCode = $request->billcode;
        $orderId = $request->order_id;
        $transaction = Transaction::where('bill_code', $billCode)->first();
        $totalCost = $transaction->amount;  // A
        
        if ($status == '1') { // 1 indicates successful payment
            // Update transaction to completed
            $transaction = Transaction::where('bill_code', $billCode)->first();
            if ($transaction && $transaction->status === 'pending') {
                $transaction->status = 'completed';
                $transaction->save();
            }
    
            return view('payment-success', ['transactionDetails' => [
                'BillCode' => $billCode,
                'ReferenceNo' => $request->order_id,
                'DateOfTransaction' => now()->toDateTimeString(),
                'TotalPayment' => $totalCost,
            ]]);
        } elseif ($status == 3){
            // Update transaction to failed
            $transaction = Transaction::where('bill_code', $billCode)->first();
            if ($transaction && $transaction->status === 'pending') {
                $transaction->status = 'failed';
                $transaction->save();
            }
    
            return view('payment-failed', ['transactionDetails' => [
                'BillCode' => $billCode,
                'ReferenceNo' => $request->order_id,
                'DateOfTransaction' => now()->toDateTimeString(),
                'TotalPayment' => $totalCost,
            ]]);
        }

        
    
}


public function paymentFailed()
{
    return view('payment-failed');
}



}
