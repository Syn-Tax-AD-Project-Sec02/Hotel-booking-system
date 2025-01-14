<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Receipt - Failed</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .receipt-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            padding: 25px;
            text-align: center;
            position: relative;
        }
        .receipt-header {
            background-color: #6f42c1;
            color: white;
            padding: 15px 0;
            font-size: 20px;
            font-weight: bold;
            border-radius: 8px 8px 0 0;
        }
        .receipt-content {
            margin: 20px 0;
            text-align: left;
        }
        .receipt-content p {
            margin: 12px 0;
            font-size: 14px;
            color: #333;
        }
        .receipt-content p span {
            font-weight: bold;
            color: #555;
        }
        .receipt-content p .failed {
            color: #d9534f;
        }
        .receipt-footer {
            margin-top: 20px;
            text-align: center;
        }
        .receipt-footer img {
            width: 100px;
            margin: 10px 0;
        }
        .thank-you {
            margin-top: 15px;
            font-size: 14px;
            color: #777;
        }
        .back-button {
            display: inline-block;
            padding: 12px 30px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            background: linear-gradient(135deg, #6f42c1, #5430a6);
            text-decoration: none;
            border-radius: 6px;
            box-shadow: 0px 4px 10px rgba(111, 66, 193, 0.4);
            transition: all 0.3s ease;
        }
        .back-button:hover {
            background: linear-gradient(135deg, #5430a6, #6f42c1);
            box-shadow: 0px 6px 12px rgba(111, 66, 193, 0.6);
            transform: translateY(-2px);
        }
        .divider {
            height: 1px;
            background: #ddd;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="receipt-container">
        <div class="receipt-header">PAYMENT RECEIPT</div>
        <div class="receipt-content">
            @if($transactionDetails)
            <p><strong>Bill Code:</strong> {{ $transactionDetails['BillCode'] }}</p>
            <p><strong>Reference No:</strong> {{ $transactionDetails['ReferenceNo'] }}</p>
            <p><strong>Date of Transaction:</strong> {{ $transactionDetails['DateOfTransaction'] }}</p>
            <p><strong>Total Payment:</strong> RM {{ $transactionDetails['TotalPayment'] }}</p>
            <p><strong>Status:</strong> Payment Failed</p>
        @endif
        </div>
        <div class="divider"></div>
       <a href="/" class="back-button">Back to Homepage</a>
        <div class="thank-you">Thank You</div>
    </div>
</body>
</html>
