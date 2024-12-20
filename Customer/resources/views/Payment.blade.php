<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholars Inn Booking</title>
    <style>
        /* General Reset */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('image.png') no-repeat center center fixed;
            background-size: cover;
            color: #333;
        }

        /* Header */
        .header {
            background-color: maroon;
            color: white;
            display: flex;
            align-items: center;
            padding: 10px 20px;
        }

        .header img {
            height: 50px;
            margin-right: 15px;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        /* Main container */
        .container {
            display: flex;
            justify-content: space-around;
            margin: 20px;
        }

        /* Left section: Booking Details */
        .left-section, .right-section {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            width: 45%;
        }

        .left-section h2, .right-section h2 {
            color: maroon;
            border-bottom: 2px solid maroon;
            padding-bottom: 10px;
        }

        .details p, .good-to-know p {
            margin: 10px 0;
            line-height: 1.5;
        }

        .highlight {
            font-weight: bold;
            color: maroon;
        }

        .price-summary {
            margin: 20px 0;
            background-color: #f8f8f8;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .price-summary p {
            margin: 5px 0;
        }

        .price-summary .total {
            font-size: 20px;
            color: maroon;
            font-weight: bold;
        }

        /* Form Styling */
        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: maroon;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <img src="LOGO UTM REVERSE (putih).png" alt="UTM Logo">
        <h1>Scholars Inn Booking</h1>
    </header>

    <!-- Main Content -->
    <div class="container">
        <!-- Left Section: Booking Details -->
        <div class="left-section">
            <h2>Your Booking Details</h2>
            <div class="details">
                <p><strong>Check-in:</strong> <span class="highlight">Sat, Dec 21, 2024</span></p>
                <p><strong>Check-out:</strong> <span class="highlight">Thu, Dec 26, 2024</span></p>
                <p><strong>Total length of stay:</strong> 5 nights</p>
                <p><strong>Guests:</strong> 2 adults</p>
            </div>
            <div class="price-summary">
                <p>Original Price: <del>MYR 7,000</del></p>
                <p>Limited-time Deal: <span class="highlight">MYR 3,430</span></p>
                <p>Includes: <br>
                    - Taxes: MYR 274.40 <br>
                    - Property Service: MYR 215 <br>
                    - Refundable Deposit: MYR 200</p>
                <p class="total">Total Price: MYR 3,430</p>
            </div>
        </div>

        <!-- Right Section: Form and Information -->
        <div class="right-section">
            <h2>Enter Your Details</h2>
            <form>
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" placeholder="Enter your first name" required>
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" placeholder="Enter your last name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" placeholder="Enter your phone number" required>
                </div>
                <button type="submit">Confirm Booking</button>
            </form>
            <div class="good-to-know">
                <h2>Good to Know</h2>
                <p>&#10003; <strong>No credit card needed</strong></p>
                <p>&#10003; Stay flexible: Cancel for free before <strong>Dec 21, 2024</strong></p>
                <p>&#10003; <strong>No payment today</strong>. Pay when you stay.</p>
                <p>&#10003; Earn a <strong>free private airport taxi</strong></p>
            </div>
        </div>
    </div>
</body>
</html>
