<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 40px;
        }
        .invoice-container {
            max-width: 800px;
            margin: auto;
            border: 1px solid #ddd;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .header, .bill-to, .invoice-details, .payment-summary {
            margin-bottom: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
        }
        .header .company-info {
            line-height: 1.5;
        }
        .header .logo {
            text-align: right;
        }
        h1 {
            margin: 0;
        }
        .bill-to, .invoice-details {
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .totals-row {
            text-align: right;
        }
        .balance-due {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div id="invoice-output"></div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tableData = JSON.parse(localStorage.getItem('tableData'));
            if (tableData) {
                let invoiceHTML = '';

                tableData.forEach((data, index) => {
                    invoiceHTML += `
                        <div class="invoice-container">
                            <div class="header">
                                <div class="company-info">
                                    <h1>AMK Holidays Sdn Bhd</h1>
                                    <p>29-2, Jalan Pulau Lumut P U10/P<br>
                                       Alam Budiman<br>
                                       40170 Shah Alam<br>
                                       P: 0378310321<br>
                                       M: 0166777393<br>
                                       F: 0378310321<br>
                                       cuticutimalaysia@yahoo.com<br>
                                       www.cuticuti-malaysia.com</p>
                                </div>
                                <div class="logo">
                                    <img src="../../assets/images/LOGO-UTM.png" alt="Company Logo" width="150">
                                </div>
                            </div>

                            <div class="invoice-details">
                                <h2>Invoice INV-${1000 + index}</h2>
                                <p><strong>Date:</strong> ${new Date().toLocaleDateString()}</p>
                            </div>

                            <div class="bill-to">
                                <h3>Bill To:</h3>
                                <p>${data.name}</p>
                            </div>

                            <table>
                                <thead>
                                    <tr>
                                        <th>Description</th>
                                        <th>QTY</th>
                                        <th>Rate</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Stay from ${data.arrivalDate} to ${data.departureDate}<br>
                                            Room ID: ${data.roomId}</td>
                                        <td>1</td>
                                        <td>${data.amount}</td>
                                        <td>${data.amount}</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="payment-summary">
                                <p class="totals-row"><strong>Total:</strong> ${data.amount}</p>
                                <p class="totals-row"><strong>Paid:</strong> ${data.amount}</p>
                                <p class="totals-row balance-due"><strong>Balance Due:</strong> RM0.00</p>
                            </div>
                        </div>
                    `;
                });

                document.getElementById('invoice-output').innerHTML = invoiceHTML;
            } else {
                document.getElementById('invoice-output').innerText = 'No data available';
            }
        });
    </script>
</body>

</html>
