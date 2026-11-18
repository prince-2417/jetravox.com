<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<head>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TM43KFCZ');
    </script>
    <!-- End Google Tag Manager -->

    <script>
        gtag('config', 'AW-18036520657/VP2CCJTFmMIcENHtvZhD', {
            'phone_conversion_number': '1-844-915-5436'
        });
    </script>

    <meta charset="UTF-8">
    <title>Jetravox - Book Cheap Flights & International Airfare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Find the best flight deals on Jetravox. Search, compare, and book cheap airline tickets for domestic and international travel with ease. Your journey starts here.">
    <meta name="keywords" content="Flights, flight booking, cheap airfare, airline tickets, Jetravox, book flights online, travel deals, low cost carriers, international flights, domestic travel">
    <meta name="author" content="Jetravox">
    <meta name="website" content="https://jetravox.com/">
    <meta name="email" content="support@jetravox.com">
    <meta name="version" content="1.5.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Css -->
    <link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
    <link href="assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
    <!-- Main Css -->
    <link href="assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/tailwind.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/search-form.css">
    <link rel="stylesheet" href="assets/css/my-css.css">
    <link rel="stylesheet" href="assets/css/confirm-booking.css">
    <link rel="stylesheet" href="assets/css/mobile-pop.css">
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="dark:bg-slate-900">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TM43KFCZ"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- ====== Header Section Start ======= -->
    <?php include('include/header.php'); ?>
    <!-- ====== Header Section End ======= -->

    <?php include('include/mobile-pop.php'); ?>

    <!-- ======= Start Content ====== -->
    <section class="relative md:py-24 py-16 overflow-hidden">
        <div class="booking-list-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="barba-container">
                            <div class="booking-card card">
                                <div class="card-body" style="margin: 10px;">
                                    <div class="booking-card__title">
                                        <h2 style="margin-top: 50px;">Traveller Details</h2>
                                        <hr class="mb-4">
                                    </div>

                                    <form class="booking-card__form" action="thank-you" method="POST">

                                        <h4>Contact Details</h4>
                                        <div class="row pad-lg-20 responsive-contact">
                                            <div class="form-group flex-item">
                                                <label for="email">Enter Email Id</label>
                                                <input class="form-control" type="email" name="email" placeholder="Email" required />
                                            </div>
                                            <div class="form-group flex-item">
                                                <label for="phone">Enter Phone no.</label>
                                                <input class="form-control" type="tel" name="phone" placeholder="Phone" required />
                                            </div>
                                        </div>
                                        <p class="info-text">Your booking details will be sent to this email address and mobile number</p>

                                        <h4>Traveller Information</h4>
                                        <p><b>Important Note:</b> Please ensure that the names of the passengers on the travel documents is the same as on their passports</p>

                                        <div class="container mt-4">
                                            <h3>Adult Information</h3>
                                            <div id="adult-entries"></div>
                                        </div>

                                        <div class="adult-entry">
                                            <div class="adult-row">
                                                <div class="flex-item">
                                                    <label>First Name*</label>
                                                    <input class="form-control" type="text" name="adult_first_name[]" placeholder="First name" required />
                                                </div>
                                                <div class="flex-item">
                                                    <label>Middle Name</label>
                                                    <input class="form-control" type="text" name="adult_middle_name[]" placeholder="Middle name" />
                                                </div>
                                                <div class="flex-item">
                                                    <label>Last Name*</label>
                                                    <input class="form-control" type="text" name="adult_last_name[]" placeholder="Last name" required />
                                                </div>
                                                <div class="flex-item">
                                                    <label>Date of Birth*</label>
                                                    <input class="form-control" type="date" name="adult_dob[]" required />
                                                </div>
                                                <div class="flex-item">
                                                    <label>Gender*</label>
                                                    <select class="form-control" name="adult_gender[]" required>
                                                        <option value="">Select gender</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <h4 class="mt-4">Payment Info (Secure SSL Encrypted Transaction)</h4>
                                        <h6 style="color: #00a861;"><i class="icon icon-check-button"></i> SAFE AND SECURE BILLIING</h6>
                                        <p>Your credit card information is protected by Secure SSL Encrypted Transaction</p>

                                        <div class="my-card">
                                            <h5 class="mt-1">Card Details</h5>
                                        </div>
                                        <!-- Card Number & Type -->
                                        <div class="card-billing-row card-top">
                                            <div class="form-group">
                                                <label for="card_number">Card Number*</label>
                                                <input class="form-control" type="text" id="card_number" name="card_number" placeholder="Card Number" required />
                                                <img id="card_type_icon" src="" alt="Card Icon" style="display: none; width: 40px; margin-top: 10px;">
                                            </div>
                                            <div class="form-group">
                                                <label for="card_type">Payment Card Type*</label>
                                                <select class="form-control" name="card_type" required>
                                                    <option value="">Select Card Type</option>
                                                    <option value="visa">Visa</option>
                                                    <option value="mastercard">MasterCard</option>
                                                    <option value="amex">American Express</option>
                                                    <option value="discover">Discover</option>
                                                    <option value="diners_club">Diners Club</option>
                                                    <option value="jcb">JCB</option>
                                                    <option value="rupay">RuPay</option>
                                                    <option value="unionpay">UnionPay</option>
                                                    <option value="maestro">Maestro</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Card Holder + Expiry + CVV -->
                                        <div class="card-billing-row card-middle">
                                            <div class="form-group">
                                                <label for="card_holder">Card Holder's Name*</label>
                                                <input class="form-control" type="text" id="card_holder" name="card_holder" placeholder="Card Holder's Name" required />
                                            </div>
                                            <div class="form-group">
                                                <label for="exp_month">Exp. Month*</label>
                                                <select class="form-control" id="exp_month" name="exp_month" required>
                                                    <option value="">Month</option>
                                                    <option value="01">01 - January</option>
                                                    <option value="02">02 - February</option>
                                                    <option value="03">03 - March</option>
                                                    <option value="04">04 - April</option>
                                                    <option value="05">05 - May</option>
                                                    <option value="06">06 - June</option>
                                                    <option value="07">07 - July</option>
                                                    <option value="08">08 - August</option>
                                                    <option value="09">09 - September</option>
                                                    <option value="10">10 - October</option>
                                                    <option value="11">11 - November</option>
                                                    <option value="12">12 - December</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exp_year">Exp. Year*</label>
                                                <select class="form-control" id="exp_year" name="exp_year" required>
                                                    <option value="">Year</option>
                                                    <?php include('year.php') ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="cvv">CVV*</label>
                                                <input class="form-control" type="password" id="cvv" name="cvv" placeholder="CVV" required maxlength="4" pattern="\d{3,4}" />
                                            </div>
                                        </div>

                                        <!-- Billing Address -->
                                        <div class="card-billing-row billing-address">
                                            <div class="form-group">
                                                <label for="country">Country*</label>
                                                <select class="form-control" id="country" name="country" required>
                                                    <?php include('country-list.php'); ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="address_line_1">Address Line 1*</label>
                                                <input class="form-control" type="text" id="address_line_1" name="address_line_1" placeholder="Address Line 1" required />
                                            </div>
                                            <div class="form-group">
                                                <label for="address_line_2">Address Line 2*</label>
                                                <input class="form-control" type="text" id="address_line_2" name="address_line_2" placeholder="Address Line 2" required />
                                            </div>
                                            <div class="form-group">
                                                <label for="city">City*</label>
                                                <input class="form-control" type="text" id="city" name="city" placeholder="City" required />
                                            </div>
                                            <div class="form-group">
                                                <label for="state_code">State Code*</label>
                                                <input class="form-control" type="text" id="state_code" name="state_code" placeholder="State Code" required />
                                            </div>
                                            <div class="form-group">
                                                <label for="postal_code">Postal Code*</label>
                                                <input class="form-control" type="text" id="postal_code" name="postal_code" placeholder="Postal Code" required />
                                            </div>
                                            <div class="form-group">
                                                <label for="isd_code">ISD Code*</label>
                                                <select class="form-control" id="isd_code" name="isd_code" required>
                                                    <?php include('ids-code-list.php'); ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone_number">Phone Number*</label>
                                                <input class="form-control" type="tel" id="phone_number" name="phone_number" placeholder="Phone Number" required />
                                            </div>
                                        </div>

                                        <div class="ml-5">
                                            <h4>Policies & Review</h4>
                                            <p><b>Note:</b> Please confirm that the date(s) and time(s) of flights and name(s) of travelers are correct. Tickets are non-refundable 24 hours after booking and non-transferable. Total price includes all applicable taxes and our fees.</p>
                                            <div class="d-flex align-items-center">
                                                <input type="checkbox" class="me-2" id="terms_agreement" name="terms_agreement" required>
                                                <label for="terms_agreement" class="ml-3"><b>By clicking BOOK, I agree that I have read and accepted the above policies and Airounravel.com USA <a href="terms-and-conditions" target="_blank" style="color:#0071cc;">Terms & Conditions</a> and <a href="privacy-policy" target="_blank" style="color:#0071cc;">Privacy Policy</a>.</b></label>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center mt-4">
                                            <button class="btn btn--round search-btn1" type="submit">Book Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= End Content ======== -->


    <!-- ===== Footer Start ======== -->
    <?php include('include/footer.php'); ?>
    <!-- ===== Footer End ======== -->

    <!-- Jquery link -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="assets/js/mobile-pop.js"></script>
    <script src="assets/js/cardtype.js"></script>
    <!-- JAVASCRIPTS -->
    <script src="assets/libs/tobii/js/tobii.min.js"></script>
    <script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/plugins.init.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- JAVASCRIPTS -->
</body>

</html>