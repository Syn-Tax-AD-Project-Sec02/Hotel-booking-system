<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Payment Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <!-- Progress Steps -->
        <div class="d-flex justify-content-between mb-4">
            <div class="step text-center">
                <span class="badge bg-success">1</span>
                <p class="mt-2">Dates & Rooms</p>
            </div>
            <div class="step text-center">
                <span class="badge bg-primary">2</span>
                <p class="mt-2">Extras</p>
            </div>
            <div class="step text-center">
                <span class="badge bg-secondary">3</span>
                <p class="mt-2">Payment</p>
            </div>
            <div class="step text-center">
                <span class="badge bg-secondary">4</span>
                <p class="mt-2">Confirmation</p>
            </div>
        </div>

        <!-- Booking Summary -->
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">King Bed Stylish Apartment with Loft Style Family Room</h5>
                        <p class="text-muted">4.87 stars | 202 reviews</p>
                        <p class="text-muted">Beds: 3 | Area: 60m<sup>2</sup> | Guests: 6 | Bathrooms: 1 | Floor: 4</p>
                        <p class="small text-muted">Free cancellation until 11:59 PM on May 21, 2022. Your account will be charged on Sunday, May 22, 2022.</p>
                    </div>
                </div>

                <!-- Customer Details -->
                <form>
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Enter your first name" required>
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
                    </div>

                    <!-- Extras -->
                    <div class="mt-4">
                        <h6>Add to your stay:</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="carPark" value="20">
                            <label class="form-check-label" for="carPark">
                                Car Park <span class="text-muted">(from $20/night)</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="wine" value="50">
                            <label class="form-check-label" for="wine">
                                Bottle of Wine <span class="text-muted">($50)</span>
                            </label>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Price Summary -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Reservation Summary</h6>
                        <p class="text-muted">Check-in: Sun, 22 May 2022 from 16:00</p>
                        <p class="text-muted">Check-out: Wed, 25 May 2022 by 11:00</p>
                        <p class="text-muted">Total Length of Stay: 3 nights</p>

                        <h6 class="mt-4">Your Price Summary</h6>
                        <p class="text-muted">Rooms and Offers: $625.43</p>
                        <p class="text-muted">8% VAT: $50.03</p>
                        <p class="text-muted">City Tax: $16.44</p>

                        <h5>Total Price: <strong>$698.87</strong></h5>
                        <button class="btn btn-primary w-100 mt-3">Request to Book</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
