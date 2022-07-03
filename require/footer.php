<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <footer class="footer" style="background-color: #FFFFFF;">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo"><a href="#"><img src="./images/footerimg.jpg" width="100%"></a></div>
                    <div class="blur">Boston Medical Center (BMC) is a 514-bed academic medical center located in
                        Boston's historic South End, providing medical care for infants, children, teens and adults.
                    </div>
                    <div class="address"><img
                            src="https://www.bmc.org/themes/custom/bmc_base_theme/assets/images/icons/icon-location-pin.svg"><br>
                        One Boston Medical Center Place<br>Boston, MA 02118<br>
                        <a href="tel:+617.638.8000">617.638.8000</a>
                    </div>
                    <ul class="inline">
                        <li class="social-link">
                            <a href="#"><img
                                    src="https://www.bmc.org/themes/custom/bmc_base_theme/assets/images/icons/icon-facebook.svg"></a>
                        </li>
                        <li class="social-link">
                            <a href="#"><img
                                    src="https://www.bmc.org/themes/custom/bmc_base_theme/assets/images/icons/icon-instagram.svg"></a>
                        </li>
                        <li class="social-link">
                            <a href="#"><img
                                    src="https://www.bmc.org/themes/custom/bmc_base_theme/assets/images/icons/icon-linkedin.svg"></a>
                        </li>
                        <li class="social-link">
                            <a href="#"><img
                                    src="https://www.bmc.org/themes/custom/bmc_base_theme/assets/images/icons/icon-twitter.svg"></a>
                        </li>
                        <li class="social-link">
                            <a href="#"><img
                                    src="https://www.bmc.org/themes/custom/bmc_base_theme/assets/images/icons/icon-youtube.svg"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="links">
                        <a href="http://" class="link">Accreditation Regulatory Compliance</a>
                        <a href="http://" class="link">Donate</a>
                        <a href="http://" class="link">Awards</a>
                        <a href="http://" class="link">Careers</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="links">
                        <a href="" class="link" data-bs-toggle="modal" data-bs-target="#exampleModal">Find A Doctor</a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Find a doctor</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <input type="text" name="search" id="search" onkeyup="showdoc(this.value)"
                                                placeholder="Search for a doctor..." style="width:100% ;">
                                            <p id="txtHint"></p>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="http://" class="link">ICU Nurse Ratios</a>
                        <a href="http://" class="link">Institutional Master Plan</a>
                        <a href="http://" class="link">Insurance Plans Accepted</a>
                        <a href="http://" class="link">Medical Records</a>
                        <a href="http://" class="link">Pricing and Estimates</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="links">
                        <a href="http://" class="link">Patient Financial Assistance
                        </a>
                        <a href="http://" class="link">Media Relations
                        </a>
                        <a href="http://" class="link">Residency
                        </a>
                        <a href="http://" class="link">Vendor Access
                        </a>
                        <a href="http://" class="link">Volunteer</a>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:30px;">
                <div class="col-md-4 images">
                    <a href="https://www.facebook.com/Flowmcenter/"><img src="./images/sponsor(1).png"></a>
                </div>
                <div class="col-md-4 images">
                    <a href="https://www.facebook.com/aamedicalcenter/"><img src="./images/sponsor(2).png"></a>
                </div>
                <div class="col-md-4 images">
                    <a href="https://www.facebook.com/American.European.MC/"><img src="./images/sponsor(3).png"></a>
                </div>

            </div>
            <div class="row">
                <div class="col-12" style="text-align:center;margin-top:20px">BMC Privacy Policy
                    Code of Conduct
                    Nondiscrimination Statement
                    Patient Privacy/HIPAA
                    Website Terms of Use
                    © 2022 Boston Medical Center. All rights reserved.</div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
    </script>
    <script>
    function showdoc(str) {
        if (str.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "search.php?search=" + str, true);
            xmlhttp.send();
        }
    }
    </script>
</body>

</html>