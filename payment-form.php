<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="main.css" />
    <title><?= ucfirst(basename($_SERVER['PHP_SELF'], '.php')); ?> | Entak-Tech</title>
</head>

<body class="bg-dark">

    <div class="container my-2 pt-2">

        <!-- payment box start -->
        <div class="row " id="paymentBox">
            <div class="col-12 col-sm-12 col-md-7 mx-auto p-2">

                <div class="rounded-top p-2 d-flex justify-content-center align-items-center bg-info fw-bold">
                    <p class="mb-0">Testing mode <i class="fa-solid fa-circle-exclamation"></i></p>
                </div>

                <form action="#" method="post" id="momoPaymentForm" class="p-4 text-bg-secondary bg-opacity-25  rounded-bottom">

                    <div class="form-floating text-success mt-3 mb-4">
                        <p class="fs-4">
                            Pay Dstv Subscription
                            <i class="fa-solid fa-tv ms-md-2"></i>
                        </p>
                    </div>

                    <div class="row my-3">
                        <label for="smartCardNumber" class="col-sm-4 col-form-label">Smart Card</label>
                        <div class="col-sm-8">
                            <input type="text" name="smartCardNumber" class="form-control" id="smartCardNumber" placeholder="Smart Card Number" required maxlength="10" value="1212121212">
                            <div id="cardName" class="form-text">
                            </div>
                        </div>
                    </div>

                    <div class="row   mb-4 ">
                        <label for="bouquetPackage" class="col-sm-4 col-form-label">Bouquet</label>
                        <div class=" col-sm-8">
                            <select class="form-select" name="price" id="bouquetPackage" aria-label="bouquetPackageSelect">
                                <option value="25000">DSTV YANGA (NGN 25000)</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="duration" class="col-sm-4 col-form-label">Duration</label>
                        <div class=" col-sm-8">
                            <select class="form-select" id="duration" aria-label="durationSelect">
                                <option value="1" selected>1 month</option>
                                <option value="2">2 months</option>
                                <option value="3">3 months</option>
                                <option value="4">4 months</option>
                                <option value="5">5 months</option>
                                <option value="6">6 months</option>
                                <option value="7">7 months</option>
                                <option value="8">8 months</option>
                                <option value="9">9 months</option>
                                <option value="10">10 months</option>
                                <option value="11">11 months</option>
                                <option value="12">12 months</option>
                            </select>
                        </div>

                    </div>

                    <div class="row mb-4">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control" id="email" value="oganlamichael51@gmail.com" placeholder="example@gmail.com" required>
                        </div>
                    </div>

                    <fieldset class="row mb-4">
                        <legend class="col-form-label col-sm-4 pt-0">Payment Method</legend>
                        <div class="col-sm-8">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="paymentMethod2" value="MTN-MoMo">
                                <label class="form-check-label" for="paymentMethod2">
                                    <i class="fa-brands text-success fa-cc-visa"></i>
                                    MTN -MOMO
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <div class="row mb-4">
                        <label for="phone" class="col-sm-4 col-form-label">Phone Number</label>
                        <div class="col-sm-8">
                            <input type="number" name="phone" class="form-control" id="phone" value="09080234555" placeholder="090-xxx-xxx" required minlength="12" maxlength="12">
                        </div>
                    </div>

                    <div class="row mb-2 pt-2 d-flex flex-column justify-content-center">
                        <button type="submit" class="btn mb-2 btn-success mx-auto" id="paySubscription">Pay Subscription</button>
                        <p class="text-secondary ">By paying, you agree to our
                            <a href="" class="text-success">terms and privacy policy.</a>
                        </p>
                    </div>

                    <input type="hidden" name="first_name" value="" />
                    <input type="hidden" name="last_name" value="" />

                </form>
            </div>
            <div id="hiddenForm"></div>
        </div>
        <!-- payment box end -->

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="/entaktech/assets/js/script.js"></script>
    <script>
        $(function() {

            //process  payment
            $("#paySubscription").click(function(e) {
                e.preventDefault();
                let paymentForm = $("#momoPaymentForm");
                if (paymentForm[0].checkValidity()) {

                    $("#paySubscription").text("Please Wait...");

                    $.ajax({
                        type: "post",
                        url: location.origin + "/entaktech/momo/process-payment.php",
                        data: paymentForm.serialize() + "&action=momo_payment"
                    }).done(function(response) {
                        console.log(response);
                        $("#paySubscription").val("Pay Subscription");
                    }).fail(function(jqXHR, textStatus) {
                        console.log("Momo payment Request failed: " + textStatus);
                        $("#paySubscription").val("Pay Subscription");
                    });

                } else {
                    e.stopImmediatePropagation();
                }
            });

        });
    </script>
</body>

</html>