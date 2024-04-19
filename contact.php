<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $countries = $_POST['Countries'];
    $state = $_POST['state'];
    $email = $_POST['email'];
    $message = $_POST['message'];

   
//Load Composer's autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
 
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'rushikapanchal36@gmail.com';
    $mail->Password   = 'ynauukefqvadeeiq';                       
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
    $mail->Port       = 587;                                  

    //Recipients
    $mail->setFrom('rushikapanchal36@gmail.com', 'Lonix'); //sender
    $mail->addAddress('ayaman.leafway@gmail.com', 'Receiver');  //receiver   //Add a recipient
               
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTM
    $mail->Subject   = 'Lonix';
    $mail->Body = "Sender Name - $name  <br> Phone Number - $phone <br> E-mail - $email <br> Message - $message <br> State - $state<br> Country - $countries";
    $mail->send();
    echo '<script>alert("Your form has been submited.")</script>';
} catch (Exception $e) {
    echo "";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- Fevicon Icon -->
    <link rel="icon" type="image/x-icon" href="images/Lonix fav icon.png">
    <!-- Fevicon Icon -->

    <link rel="stylesheet" href="css/loader.css">
    <!-- Preloader Start -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            setTimeout(function () {
                document.body.classList.add("loaded");
            }, 2000);
        });
    </script>
    <!-- Preloader End -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<style>
        .success
        {
            width:400px;
            text-align: center;
            position: absolute;
            top: 30px;
            left: 50%;
            transform: translateX(-50%)
            color: whitesmoke;
            padding: 8px 0;
        }

        .alert{ background-color: rgb(252, 59, 59); }
        .success{ background-color: rgb(44, 158, 24); }
    </style>
<body>
    <!-- PreLoader -->
    <div class="preloader">
        <img src="images/PreloaderGif.gif" alt="Loading..." class="preloader-gif" loading="lazy">
    </div>
    <!-- PreLoader -->
    
    <!-- Whatsapp Sender Page Start -->    
    <div class="fixed-whatsapp">
        <a href="https://wa.me/+919537116933?text=hello+123" target=”_blank” class="whatsapp-btn text-decoration-none ">
        <i class="ri-whatsapp-line"></i>
          </a>
    </div>
    <!-- Whatsapp Sender Page Start -->
    
    <div id="contact">
        <!-- Navbar Start -->
        <div id="navbar">
            <nav class="navbar navbar-expand-lg navbar-default navbar-fixed-top">
                <div class="container-fluid ">
                    <a class="navbar-brand" href="index.html"><img src="images/WebsiteLogo.png"
                            alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon"><i class="ri-menu-3-line"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto justify-content-end mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="about.html">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="catalogue.html">Catalogue</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="expert.html">Export</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="blog.html">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

        <!-- Page-1 Start -->
        <div id="page1" class="position-relative">
            <div>
                <div class="page1-inner">
                    <h2 class="">Contact Us</h2>
                    <p>Tell us how we can improve. Give your valuable feedback here!</p>
                </div>
            </div>
        </div>
        <!-- Page-1 End -->

        <!-- Page-2 Start -->
        <div id="page2" class="my-lg-5 my-md-5 my-5 mx-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page2-inner d-flex flex-column gap-lg-3 gap-2">
                            <h2>Get In Touch</h2>
                            <h2>Tell us how we can improve. Give your valuable feedback here!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-2 End -->

        <!-- Page-3 start -->
        <div id="page3">
            <div class="container main-box  p-lg-5 p-5">
                <div class="row justify-content-between ">
                    <div class="col-lg-4 d-flex justify-content-center">
                        <div class="d-flex flex-column gap-lg-5 gap-4">
                            <div class="inner-icon-text  pb-lg-4 border-bottom border-3">
                                <div class="d-flex gap-lg-3 gap-4">
                                    <div class="contact-icon">
                                        <i class="ri-map-pin-line"></i>
                                    </div>
                                    <div class="contact-header">
                                        <h4>Address</h4>
                                        <address>
                                            At, Ratavirda Rd, Wankaner,<br>
                                            Gujarat 363621.
                                        </address>
                                    </div>
                                </div>
                            </div>
                            <div class="inner-icon-text pb-lg-4 pb-3 border-bottom border-3">
                                <div class="d-flex gap-lg-3 gap-4">
                                    <div class="contact-icon">
                                    <i class="ri-phone-line"></i>
                                    </div>
                                    <div class="contact-header">
                                        <h4>Telephone</h4>
                                        <a href="tel:+919974748777">+91 99747 48777</a>
                                    </div>
                                </div>
                            </div>
                            <div class="inner-icon-text">
                                <div class="d-flex gap-lg-3 gap-4">
                                    <div class="contact-icon">
                                    <i class="ri-mail-line"></i>
                                    </div>
                                    <div class="contact-header">
                                        <h4>E-Mail</h4>
                                        <a href="mailto:lonixceramica@gmail.com" type="email">
                                            lonixceramica@gmail.com</a>
                                        <a href="mailto:info@lonixceramica.in"  type="email">info@lonixceramica.in</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="mt-lg-0 mt-5">
                            <form action="" class="row g-lg-3 g-2" method="POST">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control p-2" id="inputEmail4" name="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="tel" class="form-control p-2" id="inputPassword4" name="phone" maxlength="12" 
                                        placeholder="Your Phone" required>
                                </div>
                                <div class="col-lg-6">
                                    <!-- <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" > -->
                                    <select id="inputState" class="form-select p-2" name="Countries" required>
                                        <option selected>Your Country</option>
                                        <option value="Afghanistan" name="Afghanistan">Afghanistan</option>
                                        <option value="Aland Islands" >Aland Islands</option>
                                        <option value="ALAlbania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="KY">Cayman Islands</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Congo, Democratic Republic of the Congo">Congo, Democratic Republic of the Congo</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Curacao">Curacao</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guernsey">Guernsey</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                        <option value="Kosovo">Kosovo</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macao">Macao</option>
                                        <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russian Federation">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Barthelemy">Saint Barthelemy</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Martin">Saint Martin</option>
                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Sint Maarten">Sint Maarten</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                        <option value="South Sudan">South Sudan</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-Leste">Timor-Leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="GBUnited Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="VUVanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Viet Nam">Viet Nam</option>
                                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                                        <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control p-2" id="inputAddress2" name="state"
                                        placeholder="Enter State" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="email" class="form-control p-2" id="inputCit" name="email"
                                     placeholder="Your Email" required>
                                </div>
                                <div class="col-lg-12">
                                    <textarea class="form-control rounded" id="exampleFormControlTextarea1" rows="6" name="message" placeholder="Enter Message" required></textarea>
                                </div>

                                <div class="col-12">
                                    <button type="submit" name="submit" value="submit" class="btn all-btn-1">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-3 End -->

        <!-- Page-4 Start -->
        <div id="page4" class="my-lg-5 my-md-5 my-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.913400294117!2d70.96866097530629!3d22.76859487935256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395991f62224f343%3A0x21aa3acdee788c60!2sLONIX%20CERAMIC%20LLP!5e0!3m2!1sen!2sin!4v1706342064794!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Page-4 End -->

        <!-- Footer Start -->
        <div id="footer" class="">
            <div class="container footer-position">
                <div class="row mt-lg-2 mt-md-4 mt-4">
                    <div class="col-md-12">
                        <div class="footer-logo d-flex justify-content-center">
                            <a href="index.html">
                                <img src="images/WebsiteLogo.png" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
                <!-- Footer Navbar -->
                <div class="footer-navbar mt-lg-3 mt-md-4 mt-4">
                    <nav class="navbar navbar-expand-lg d-flex">
                        <ul
                            class="navbar-nav mx-auto justify-content-center align-items-center gap-lg-5 gap-md-2 gap-1">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="catalogue.html">Catalogue</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="expert.html">Export</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="blog.html">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Footer Navbar -->
                <div class="row py-lg-0 mt-lg-2 mt-md-4 mt-4">
                    <div class="row mt-lg-4 mt-md-5 mt-4">
                        <div class="col-lg-4 col-12">
                            <div class="company-name-text d-flex flex-column gap-md-2">
                                <h4 class="">LONIX CERAMICA LLP</h4>
                                <p>The Lonix Ceramic Tile Company is dedicated to providing our customers with the
                                    highest quality, most fashionable tile options on the market. </p>
                            </div>
                        </div>
                        <div
                            class="col-lg-4 col-12 d-flex justify-content-center align-items-center mt-lg-0 mt-md-4 mt-4">
                            <div class="box-and-icon d-flex gap-4">
                                <div class="icon-box">
                                    <a href="https://www.linkedin.com/company/lonix-ceramica/" target="_blank"
                                        class="d-flex align-items-center justify-content-center text-decoration-none "><i class="ri-linkedin-fill"></i></a>
                                </div>
                                <div class="icon-box">
                                    <a href="https://www.instagram.com/lonix_ceramica_llp/" target="_blank"
                                        class="d-flex align-items-center justify-content-center text-decoration-none "><i class="ri-instagram-line"></i></a>
                                </div>
                                <div class="icon-box">
                                    <a href="https://www.facebook.com/dkLonix/" target="_blank"
                                        class="d-flex align-items-center justify-content-center text-decoration-none "><i class="ri-facebook-fill"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 mt-lg-0 mt-md-4 mt-4">
                            <div class="address-contact d-flex flex-column gap-lg-2 gap-2">
                                <div class="text-white d-flex gap-3">
                                    <i class="ri-map-pin-line"></i>
                                    <address class="text-white">
                                        Survey No. 161(1) & 161(3), Sartanpar Road, At,
                                        Ratavirda Road, Wankaner, Gujarat 363621
                                    </address>
                                </div>

                                <div class="text-white d-flex gap-3">
                                    <i class="ri-phone-line"></i>
                                    <div class="d-flex flex-column gap-1 mobile-email">
                                        <span>Kishan Dalsaniya : <a href="tel:+919974748777" class="text-white"> +91
                                                99747 48777</a></span>
                                        <span>Shyam Dalsaniya : <a href="tel:+919537116933" class="text-white"> +91
                                                95371
                                                16933</a> </span>
                                    </div>
                                </div>

                                <div class="text-white mobile-email d-flex gap-3">
                                    <i class="ri-mail-line"></i>
                                    <span>E-mail :</span>
                                    <div class="d-flex flex-column gap-1">
                                        <a href="mailto:lonixceramica@gmail.com" class="text-white" type="email">
                                            lonixceramica@gmail.com</a>
                                        <a href="mailto:info@lonixceramica.in" class="text-white" type="email">
                                            info@lonixceramica.in</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row mt-md-5 mt-4">
                        <div class="col-md-12">
                            <div class="text-white d-flex justify-content-center powered-by ">
                                <p>Copyright <span>&copy;</span> Lonix Ceramica | Powered by <a href="https://leafwayinfotech.com/" target="_blank" class="text-gray">Leafway Infotech</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>

    <!-- ************************************************* -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Language Button -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE }, 'google_translate_element');
        }
    </script>

    <script defer type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <!-- Language Button -->

</body>

</html>