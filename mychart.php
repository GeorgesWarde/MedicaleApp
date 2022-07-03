<?php
session_start();
$VIRTUAL_VISIT = 'See your provider without coming into the clinic.';
$COMMUNICATEWITHPROVIDERS = 'Get answers to your medical questions from the comfort of your own home.';
$REQUESTPRESCRIPTIONREFILLS = 'Request
prescription refills';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyChart</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/chart.css">
</head>

<body style="background-color: #f1f1f1;">
    <?php include_once './require/header.php'; ?>
    <div class="mychart">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-6 myCharte">
                    <h1>My chart</h1>
                </div>
                <div class="col-md-6">
                    <A href="#"><img src="./images/mychartlogin.jpg" alt="" width="100%"></A>
                </div>
            </div>
            <div class="row" style="margin-top:30px ;">
                <div class="col-md-6">
                    <div class="imgtext">
                        <img src="https://www.bmc.org/themes/custom/bmc_base_theme/assets/images/icons/icon-mychart.svg"
                            alt="">
                        <h3>My chart</h3>
                    </div>
                    <div class="text">
                        MyChart is the best way to receive care over the phone or your computer, including virtual
                        visits and messaging your provider.
                    </div>
                </div>
                <div class="col-md-6" style="text-align: center;">
                    <div><label for="accept">Accept Terms:</label>
                        <input type="checkbox" name="" id="accept" value="acceptTerms"
                            style="transform:translateY(2px) ;" onclick="cbb()">
                    </div>

                    <button disabled="disabled" class="btn btn-default btn-success" id="btn"
                        onclick="location.href='login.php'">Sign up for my Chart</button><br><br>
                    <a href="#">*Check the accept terms to signup</a>
                </div>
            </div>
            <div class="row" style="margin-top:30px ;">
                <div class="col-12">
                    <H3>With my chart you can</H3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 can">
                    <img src="./images/Online_Doctor_icon.webp" alt="">
                    <h5>Have a <br>Virtual Visit</h5>
                    <p><?= $VIRTUAL_VISIT ?></p>
                </div>
                <div class="col-md-4 can">
                    <img src="./images/Mobile_Consultant_icon.webp" alt="">
                    <h5>communicate with<br>providers</h5>
                    <p><?= $COMMUNICATEWITHPROVIDERS ?></p>
                </div>
                <div class="col-md-4 can">
                    <img src="./images/Pill_Timer_icon.webp" alt="">
                    <h5>Request prescription<br>refills</h5>
                    <p><?= $REQUESTPRESCRIPTIONREFILLS ?></p>
                </div>
            </div>
            <div class="row" style="padding-bottom:50px ;">
                <div class="col-12 box" style="margin-top:50px ;">
                    <div class="row">
                        <div class="col-md-4">
                            <h5>You can also take advantage of these services with MyChart</h5>
                        </div>
                        <div class="col-md-4">
                            <ul class="dashed">
                                <li><span>Pay your bill</span></li>
                                <li><span>View test results</span></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="dashed">
                                <li><span>Schedule an appointment and see upcoming appointments</span></li>
                                <li><span>Review your health summary and keep track of your health care</span></li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6 order-2">
                    <div id="qrcode">

                    </div>
                </div>
                <div class="col-md-6 order-1" style=" font-size:22px;font-weight:bold;">
                    Scan to login on your phone
                </div>
            </div>

        </div>
    </div>
    <?php include_once './require/footer.php'; ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.js"
    integrity="sha512-is1ls2rgwpFZyixqKFEExPHVUUL+pPkBEPw47s/6NDQ4n1m6T/ySeDW3p54jp45z2EJ0RSOgilqee1WhtelXfA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
qrc = new QRCode(document.getElementById("qrcode"), "login.php");
var btn = document.getElementById("btn");
const cb = document.querySelector('#accept');
console.log(cb.checked);


function cbb() {
    const cbb = document.querySelector('#accept');
    cbb.checked = true;
    if (cb.checked === true) {
        console.log(cb.checked);
        btn.disabled = false; //button is enabled
    }
}
</script>

</html>