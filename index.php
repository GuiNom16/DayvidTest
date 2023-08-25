<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shipping</title>
  <link rel="stylesheet" href="index.css" />
  <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/css/intlTelInput.css"/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://smtpjs.com/v3/smtp.js">
  </script>
  <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
  <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
  </script>
  <script type="text/javascript">
    (function(){
        emailjs.init("ptPify5pFW-i__kKn");
    })();
  </script>
</head>

<body>
  <ul id="navbar">
    <li style="float: left;">
      <div ><img src="./images/bestcargologo.jpg" alt="Best Cargo logo" id="logo"></div>
    </li>
    <li><a href="about.php">About</a></li>
    <li><a href="index.php">Home</a></li>
  </ul>


<!-- The Modal -->
<div id="myModal" class="modal" sytle="align-items: center;">

  <!-- Modal content -->
  <div class="modal-content">
    <img src="./images/accept.png" alt="Tick" id="acceptImg">
    <div class="loader"></div>
    <p style="text-align: center; color: #fffff" id="close-msg">Sending Request...</p>
    <button id="close" disabled>Close</button>
  </div>

</div>




  <form id="form" method="post">

    <div class="controls">
      <i class="fa fa-sort"></i>
      <select id="purpose" class="floatLabel">
        <option ></option>
        <option value="Yes">Individual</option>
        <option value="No" >Business</option>
      </select>
      <label  for="purpose"><i class="fa fa-male"></i>Individual or business</label>
    </div>
    <!--  General -->
    <div class="form-group">
      <h2 class="heading">Sender Details</br><span style="font-family: Arial, sans-serif; font-size: 0.6em; color: #6699CC">By filing out this form, the sender agree that all the listed content is form your own knowlodege and you acknowledge and accept the terms and conditions</span></h2>
      <div class="controls">
        <input type="text" id="name" class="floatLabel" name="name" required />
        <label for="name">Name</label>
      </div>
      <div class="controls">
        <input type="text" id="surname" class="floatLabel" name="surname" required />
        <label for="surname">Surname</label>
      </div>


      <div class="grid">
        <div class="col-2-3">
          <div class="controls">
            <input type="email" id="email" class="floatLabel" name="email" required />
            <label for="email">Email</label>
          </div>
        </div>
        <div class="col-1-3">
          <div class="controls" >
            <input type="phone" id="phone" class="floatLabel" name="phone" placeholder="Mobile Number" style="width: 100%;" required />
          </div>
        </div>
      </div>

      <div class="grid">
        <div class="col-2-3">
          <div class="controls">
            <input type="text" id="nic" class="floatLabel" name="nic" minlength="14" required />
            <label for="nic">NIC</label>
          </div>
        </div>
        <div class="col-1-3">
          <div class="controls">
            <input type="text" id="passport" class="floatLabel" name="passport" required />
            <label for="passport">Passport Number</label>
          </div>
        </div>
      </div>

      <!-- Address part -->
      <div class="grid">
      <p class="info-text">
          PICK UP ADDRESS
        </p>
        <br />
        <div class="controls">
          <input type="text" id="address-line-1" class="floatLabel" name="name" required />
          <label for="address-line-1">Address line 1</label>
        </div>

        <div class="controls">
            <input type="text" id="address-line-2" class="floatLabel" name="name" required />
            <label for="address-line-2">Address line 2</label>
        </div>
     

        <div class="col-2-3">
          <div class="controls">
            <input type="text" id="city" class="floatLabel" name="address" required />
            <label for="city">City/District</label>
          </div>
        </div>
        <div class="col-1-3">
          <div class="controls">
            <input type="text" id="state" class="floatLabel" name="floor-level" />
            <label for="state">State/Province</label>
          </div>
        </div>
      </div>

      <div class="col-2-3">
          <div class="controls">
          <select class="form-select" id="country" name="country">
            <option>Country</option>
            <option value="AF">Afghanistan</option>
            <option value="AX">Aland Islands</option>
            <option value="AL">Albania</option>
            <option value="DZ">Algeria</option>
            <option value="AS">American Samoa</option>
            <option value="AD">Andorra</option>
            <option value="AO">Angola</option>
            <option value="AI">Anguilla</option>
            <option value="AQ">Antarctica</option>
            <option value="AG">Antigua and Barbuda</option>
            <option value="AR">Argentina</option>
            <option value="AM">Armenia</option>
            <option value="AW">Aruba</option>
            <option value="AU">Australia</option>
            <option value="AT">Austria</option>
            <option value="AZ">Azerbaijan</option>
            <option value="BS">Bahamas</option>
            <option value="BH">Bahrain</option>
            <option value="BD">Bangladesh</option>
            <option value="BB">Barbados</option>
            <option value="BY">Belarus</option>
            <option value="BE">Belgium</option>
            <option value="BZ">Belize</option>
            <option value="BJ">Benin</option>
            <option value="BM">Bermuda</option>
            <option value="BT">Bhutan</option>
            <option value="BO">Bolivia</option>
            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
            <option value="BA">Bosnia and Herzegovina</option>
            <option value="BW">Botswana</option>
            <option value="BV">Bouvet Island</option>
            <option value="BR">Brazil</option>
            <option value="IO">British Indian Ocean Territory</option>
            <option value="BN">Brunei Darussalam</option>
            <option value="BG">Bulgaria</option>
            <option value="BF">Burkina Faso</option>
            <option value="BI">Burundi</option>
            <option value="KH">Cambodia</option>
            <option value="CM">Cameroon</option>
            <option value="CA">Canada</option>
            <option value="CV">Cape Verde</option>
            <option value="KY">Cayman Islands</option>
            <option value="CF">Central African Republic</option>
            <option value="TD">Chad</option>
            <option value="CL">Chile</option>
            <option value="CN">China</option>
            <option value="CX">Christmas Island</option>
            <option value="CC">Cocos (Keeling) Islands</option>
            <option value="CO">Colombia</option>
            <option value="KM">Comoros</option>
            <option value="CG">Congo</option>
            <option value="CD">Congo, Democratic Republic of the Congo</option>
            <option value="CK">Cook Islands</option>
            <option value="CR">Costa Rica</option>
            <option value="CI">Cote D'Ivoire</option>
            <option value="HR">Croatia</option>
            <option value="CU">Cuba</option>
            <option value="CW">Curacao</option>
            <option value="CY">Cyprus</option>
            <option value="CZ">Czech Republic</option>
            <option value="DK">Denmark</option>
            <option value="DJ">Djibouti</option>
            <option value="DM">Dominica</option>
            <option value="DO">Dominican Republic</option>
            <option value="EC">Ecuador</option>
            <option value="EG">Egypt</option>
            <option value="SV">El Salvador</option>
            <option value="GQ">Equatorial Guinea</option>
            <option value="ER">Eritrea</option>
            <option value="EE">Estonia</option>
            <option value="ET">Ethiopia</option>
            <option value="FK">Falkland Islands (Malvinas)</option>
            <option value="FO">Faroe Islands</option>
            <option value="FJ">Fiji</option>
            <option value="FI">Finland</option>
            <option value="FR">France</option>
            <option value="GF">French Guiana</option>
            <option value="PF">French Polynesia</option>
            <option value="TF">French Southern Territories</option>
            <option value="GA">Gabon</option>
            <option value="GM">Gambia</option>
            <option value="GE">Georgia</option>
            <option value="DE">Germany</option>
            <option value="GH">Ghana</option>
            <option value="GI">Gibraltar</option>
            <option value="GR">Greece</option>
            <option value="GL">Greenland</option>
            <option value="GD">Grenada</option>
            <option value="GP">Guadeloupe</option>
            <option value="GU">Guam</option>
            <option value="GT">Guatemala</option>
            <option value="GG">Guernsey</option>
            <option value="GN">Guinea</option>
            <option value="GW">Guinea-Bissau</option>
            <option value="GY">Guyana</option>
            <option value="HT">Haiti</option>
            <option value="HM">Heard Island and Mcdonald Islands</option>
            <option value="VA">Holy See (Vatican City State)</option>
            <option value="HN">Honduras</option>
            <option value="HK">Hong Kong</option>
            <option value="HU">Hungary</option>
            <option value="IS">Iceland</option>
            <option value="IN">India</option>
            <option value="ID">Indonesia</option>
            <option value="IR">Iran, Islamic Republic of</option>
            <option value="IQ">Iraq</option>
            <option value="IE">Ireland</option>
            <option value="IM">Isle of Man</option>
            <option value="IL">Israel</option>
            <option value="IT">Italy</option>
            <option value="JM">Jamaica</option>
            <option value="JP">Japan</option>
            <option value="JE">Jersey</option>
            <option value="JO">Jordan</option>
            <option value="KZ">Kazakhstan</option>
            <option value="KE">Kenya</option>
            <option value="KI">Kiribati</option>
            <option value="KP">Korea, Democratic People's Republic of</option>
            <option value="KR">Korea, Republic of</option>
            <option value="XK">Kosovo</option>
            <option value="KW">Kuwait</option>
            <option value="KG">Kyrgyzstan</option>
            <option value="LA">Lao People's Democratic Republic</option>
            <option value="LV">Latvia</option>
            <option value="LB">Lebanon</option>
            <option value="LS">Lesotho</option>
            <option value="LR">Liberia</option>
            <option value="LY">Libyan Arab Jamahiriya</option>
            <option value="LI">Liechtenstein</option>
            <option value="LT">Lithuania</option>
            <option value="LU">Luxembourg</option>
            <option value="MO">Macao</option>
            <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
            <option value="MG">Madagascar</option>
            <option value="MW">Malawi</option>
            <option value="MY">Malaysia</option>
            <option value="MV">Maldives</option>
            <option value="ML">Mali</option>
            <option value="MT">Malta</option>
            <option value="MH">Marshall Islands</option>
            <option value="MQ">Martinique</option>
            <option value="MR">Mauritania</option>
            <option value="MU">Mauritius</option>
            <option value="YT">Mayotte</option>
            <option value="MX">Mexico</option>
            <option value="FM">Micronesia, Federated States of</option>
            <option value="MD">Moldova, Republic of</option>
            <option value="MC">Monaco</option>
            <option value="MN">Mongolia</option>
            <option value="ME">Montenegro</option>
            <option value="MS">Montserrat</option>
            <option value="MA">Morocco</option>
            <option value="MZ">Mozambique</option>
            <option value="MM">Myanmar</option>
            <option value="NA">Namibia</option>
            <option value="NR">Nauru</option>
            <option value="NP">Nepal</option>
            <option value="NL">Netherlands</option>
            <option value="AN">Netherlands Antilles</option>
            <option value="NC">New Caledonia</option>
            <option value="NZ">New Zealand</option>
            <option value="NI">Nicaragua</option>
            <option value="NE">Niger</option>
            <option value="NG">Nigeria</option>
            <option value="NU">Niue</option>
            <option value="NF">Norfolk Island</option>
            <option value="MP">Northern Mariana Islands</option>
            <option value="NO">Norway</option>
            <option value="OM">Oman</option>
            <option value="PK">Pakistan</option>
            <option value="PW">Palau</option>
            <option value="PS">Palestinian Territory, Occupied</option>
            <option value="PA">Panama</option>
            <option value="PG">Papua New Guinea</option>
            <option value="PY">Paraguay</option>
            <option value="PE">Peru</option>
            <option value="PH">Philippines</option>
            <option value="PN">Pitcairn</option>
            <option value="PL">Poland</option>
            <option value="PT">Portugal</option>
            <option value="PR">Puerto Rico</option>
            <option value="QA">Qatar</option>
            <option value="RE">Reunion</option>
            <option value="RO">Romania</option>
            <option value="RU">Russian Federation</option>
            <option value="RW">Rwanda</option>
            <option value="BL">Saint Barthelemy</option>
            <option value="SH">Saint Helena</option>
            <option value="KN">Saint Kitts and Nevis</option>
            <option value="LC">Saint Lucia</option>
            <option value="MF">Saint Martin</option>
            <option value="PM">Saint Pierre and Miquelon</option>
            <option value="VC">Saint Vincent and the Grenadines</option>
            <option value="WS">Samoa</option>
            <option value="SM">San Marino</option>
            <option value="ST">Sao Tome and Principe</option>
            <option value="SA">Saudi Arabia</option>
            <option value="SN">Senegal</option>
            <option value="RS">Serbia</option>
            <option value="CS">Serbia and Montenegro</option>
            <option value="SC">Seychelles</option>
            <option value="SL">Sierra Leone</option>
            <option value="SG">Singapore</option>
            <option value="SX">Sint Maarten</option>
            <option value="SK">Slovakia</option>
            <option value="SI">Slovenia</option>
            <option value="SB">Solomon Islands</option>
            <option value="SO">Somalia</option>
            <option value="ZA">South Africa</option>
            <option value="GS">South Georgia and the South Sandwich Islands</option>
            <option value="SS">South Sudan</option>
            <option value="ES">Spain</option>
            <option value="LK">Sri Lanka</option>
            <option value="SD">Sudan</option>
            <option value="SR">Suriname</option>
            <option value="SJ">Svalbard and Jan Mayen</option>
            <option value="SZ">Swaziland</option>
            <option value="SE">Sweden</option>
            <option value="CH">Switzerland</option>
            <option value="SY">Syrian Arab Republic</option>
            <option value="TW">Taiwan, Province of China</option>
            <option value="TJ">Tajikistan</option>
            <option value="TZ">Tanzania, United Republic of</option>
            <option value="TH">Thailand</option>
            <option value="TL">Timor-Leste</option>
            <option value="TG">Togo</option>
            <option value="TK">Tokelau</option>
            <option value="TO">Tonga</option>
            <option value="TT">Trinidad and Tobago</option>
            <option value="TN">Tunisia</option>
            <option value="TR">Turkey</option>
            <option value="TM">Turkmenistan</option>
            <option value="TC">Turks and Caicos Islands</option>
            <option value="TV">Tuvalu</option>
            <option value="UG">Uganda</option>
            <option value="UA">Ukraine</option>
            <option value="AE">United Arab Emirates</option>
            <option value="GB">United Kingdom</option>
            <option value="US">United States</option>
            <option value="UM">United States Minor Outlying Islands</option>
            <option value="UY">Uruguay</option>
            <option value="UZ">Uzbekistan</option>
            <option value="VU">Vanuatu</option>
            <option value="VE">Venezuela</option>
            <option value="VN">Viet Nam</option>
            <option value="VG">Virgin Islands, British</option>
            <option value="VI">Virgin Islands, U.s.</option>
            <option value="WF">Wallis and Futuna</option>
            <option value="EH">Western Sahara</option>
            <option value="YE">Yemen</option>
            <option value="ZM">Zambia</option>
            <option value="ZW">Zimbabwe</option>
          </select>
          </div>
        </div>
        <div class="col-1-3">
          <div class="controls">
            <input type="text" id="postal-code" class="floatLabel" name="floor-level" />
            <label for="postal-code">Postal Code</label>
          </div>
        </div>
      </div>

      

      <div class="col-2-3 col-2-3-sm">
        <br/>
        <div class="controls">
          <i class="fa fa-sort"></i>
          <select id="gated" class="floatLabel">
            <option ></option>
            <option value="Yes">Yes</option>
            <option value="No" >No</option>
          </select>
          <label  for="gated"><i class="fa fa-male"></i>Gated Property</label>
        </div>
      </div>
      <div class="grid">
        <div class="col-1-3">
        <br/>
          <div class="controls">
            <input type="text" id="gate-code" class="floatLabel" name="gate-code" disabled/>
            <label style="background-color: #DFDFDF;" for="gate-code">Gate code</label>
          </div>
        </div>
      </div>


      <div class="col-2-3 col-2-3-sm">
        <div class="controls">
          <i class="fa fa-sort"></i>
          <select id="lift" class="floatLabel">
            <option ></option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
          <label for="lift"><i class="fa fa-male"></i>Lift</label>
        </div>
      </div>
      <div class="grid">
        <div class="col-1-3">
          <div class="controls">
            <input type="number" id="floor" class="floatLabel" name="floor"/>
            <label for="floor">Floor level</label>
          </div>
        </div>
      </div>


      <div class="grid">
        <p class="info-text">
          FLIGHT INFO
        </p>
        <br />
        <div class="grid">
        <div class="col-2-3">
          <div class="controls">
            <input type="text" id="flight-num" class="floatLabel" name="flight-num"  required />
            <label for="flight-num">Flight Number</label>
          </div>
        </div>
        <div class="col-1-3">
          <div class="controls">
            <input type="text" id="airline" class="floatLabel" name="airline" required />
            <label for="airline">Airline Name</label>
          </div>
        </div>
      
        <div class="grid">
        <div class="col-2-3">
          <div class="controls">
            <input type="text" id="ticket" class="floatLabel" name="ticket"  required />
            <label for="ticket">Electronic or Manual Ticket Number</label>
          </div>
        </div>
        <div class="col-1-3">
          <div class="controls">
            <input type="date" id="flight-date" class="floatLabel" name="flight-date" required />
            <label for="flight-date">Travel Date</label>
          </div>
        </div>
      </div>


      <div class="grid">
        <p class="info-text">
          PRODUCT INFO
        </p>
        <br />
        <div class="grid">
          <div class="col" >
            <div class="controls">
              <input type="number" min="1" max="20" id="pieces" class="floatLabel" value="1" name="pieces" />
              <label for="pieces">Total number of pieces</label>
            </div>
          </div>
          <!-- <div class="col" >
            <div class="controls">
              <input type="number" id="weight" class="floatLabel" name="weight" />
              <label for="weight">Total Weight (kg)</label>
            </div>
          </div> -->
        </div>
        

      <div class="grid dimensions">
        <p class="info-text">
          Dimensions
        </p>
        </br>
        <?php
          for ($x = 1; $x <= 20; $x++) { 
            echo "<div class='col' id='dimension$x' style='display: none;'>
            <div style='width: 100%; display: flex; justify-content: space-between; margin: 0 auto, padding: 10px 0'>
              <div class='controls'>
                <input type='number' id='height$x' value='0' placeholder='height' class='floatLabel measurements' name='$x' required />
                <label for='height$x'>Height (cm)</label>
              </div>
              </br>
              X
              <div class='controls'>
                <input type='number' id='width$x' value='0' placeholder='width' class='floatLabel measurements' name='$x'  required />
                <label for='width$x'>Width (cm)</label>
              </div>
              </br>
              X
              <div class='controls'>
                <input type='number' id='length$x' value='0' placeholder='length' class='floatLabel measurements' name='$x'  required />
                <label for='length$x'>Length (cm)</label>
              </div>
              </br>
              =
              <div class='controls'>
                <input type='number' id='metric$x' class='floatLabel measurements' name='metric$x' style='background-color: white;'' readonly disabled/>
                <label id='metric-label$x' for='metric$x' style='font-size: 14px'>Volumetric Weigth</label>
              </div>
            </div>
          </div>
          <div class='col' id='description$x' style='display: none;'>
            <div class='controls'>
              <input type='text' id='description_input$x' placeholder='Write box contents' class='floatLabel' name='description' >
              <label for='description_input$x'>$x/</label>
            </div>
          </div>
          <div class='col' id='deadweight$x' style='display: none; margin-bottom: 20px;'>
            <div class='controls'>
              <input type='number' id='deadweight_input$x' placeholder='Estimated weight' class='floatLabel' name='description' >
              <label for='deadweight_input$x'>Dead Weight (kg)</label>
            </div>
          </div>";}
          ?>
      </div>
        


      <div class="grid">
        <p class="info-text">
          INQUIRY TYPE
        </p>
        </br>
        <div class="col-1" style="width: 100%; margin-bottom: 20px">
          <div style="width: 100%; display: flex; justify-content: space-between; margin: 0 auto, padding: 10px 0">
            <button class="inquiry active" id="quote" type="button" onclick="setActive(1)" >Quote</button>
            <button class="inquiry" id="careers" type="button" onclick="setActive(2)">Careers</button>
            <button class="inquiry" id="general" type="button" onclick="setActive(3)">General</button>
          </div>
        </div>
      </div>
        

      </div>

    <!-- consignee form part -->
      <h2 class="heading">Consignee Details</h2>
      <div class="controls">
        <input type="text" id="c-name" class="floatLabel" name="name" required />
        <label for="c-name">Name</label>
      </div>
      <div class="controls">
        <input type="text" id="c-surname" class="floatLabel" name="surname" required />
        <label for="c-surname">Surname</label>
      </div>


      <div class="grid">
        <div class="col-2-3">
          <div class="controls">
            <input type="email" id="c-email" class="floatLabel" name="email" required />
            <label for="c-email">Email</label>
          </div>
        </div>
        <div class="col-1-3">
          <div class="controls" >
            <input type="phone" id="c-phone" class="floatLabel" name="phone" placeholder="Mobile Number" style="width: 100%;" required />
          </div>
        </div>
        </div>
      </div>
      <div class="grid">
        <div class="col-2-3">
          <div class="controls">
            <input type="text" id="c-nic" class="floatLabel" name="nic" minlength="14" required />
            <label for="c-nic">NIC</label>
          </div>
        </div>
        <div class="col-1-3">
          <div class="controls">
            <input type="text" id="c-passport" class="floatLabel" name="passport" required />
            <label for="c-passport">Passport Number</label>
          </div>
        </div>
      </div>

      <!-- Address part -->
      <div class="grid">
      <p class="info-text">
          DELIVERY ADDRESS
        </p>
        <br />
        <div class="controls">
          <input type="text" id="c-address-line-1" class="floatLabel" name="name" required />
          <label for="c-address-line-1">Address line 1</label>
        </div>

        <div class="controls">
            <input type="text" id="c-address-line-2" class="floatLabel" name="name" required />
            <label for="c-address-line-2">Address line 2</label>
        </div>
     

        <div class="col-2-3">
          <div class="controls">
            <input type="text" id="c-city" class="floatLabel" name="address" required />
            <label for="c-city">City/District</label>
          </div>
        </div>
        <div class="col-1-3">
          <div class="controls">
            <input type="text" id="c-state" class="floatLabel" name="floor-level" />
            <label for="c-state">State/Province</label>
          </div>
        </div>
      </div>

      <div class="col-2-3">
          <div class="controls">
          <select class="form-select" id="c-country" name="c-country">
            <option>Country</option>
            <option value="AF">Afghanistan</option>
            <option value="AX">Aland Islands</option>
            <option value="AL">Albania</option>
            <option value="DZ">Algeria</option>
            <option value="AS">American Samoa</option>
            <option value="AD">Andorra</option>
            <option value="AO">Angola</option>
            <option value="AI">Anguilla</option>
            <option value="AQ">Antarctica</option>
            <option value="AG">Antigua and Barbuda</option>
            <option value="AR">Argentina</option>
            <option value="AM">Armenia</option>
            <option value="AW">Aruba</option>
            <option value="AU">Australia</option>
            <option value="AT">Austria</option>
            <option value="AZ">Azerbaijan</option>
            <option value="BS">Bahamas</option>
            <option value="BH">Bahrain</option>
            <option value="BD">Bangladesh</option>
            <option value="BB">Barbados</option>
            <option value="BY">Belarus</option>
            <option value="BE">Belgium</option>
            <option value="BZ">Belize</option>
            <option value="BJ">Benin</option>
            <option value="BM">Bermuda</option>
            <option value="BT">Bhutan</option>
            <option value="BO">Bolivia</option>
            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
            <option value="BA">Bosnia and Herzegovina</option>
            <option value="BW">Botswana</option>
            <option value="BV">Bouvet Island</option>
            <option value="BR">Brazil</option>
            <option value="IO">British Indian Ocean Territory</option>
            <option value="BN">Brunei Darussalam</option>
            <option value="BG">Bulgaria</option>
            <option value="BF">Burkina Faso</option>
            <option value="BI">Burundi</option>
            <option value="KH">Cambodia</option>
            <option value="CM">Cameroon</option>
            <option value="CA">Canada</option>
            <option value="CV">Cape Verde</option>
            <option value="KY">Cayman Islands</option>
            <option value="CF">Central African Republic</option>
            <option value="TD">Chad</option>
            <option value="CL">Chile</option>
            <option value="CN">China</option>
            <option value="CX">Christmas Island</option>
            <option value="CC">Cocos (Keeling) Islands</option>
            <option value="CO">Colombia</option>
            <option value="KM">Comoros</option>
            <option value="CG">Congo</option>
            <option value="CD">Congo, Democratic Republic of the Congo</option>
            <option value="CK">Cook Islands</option>
            <option value="CR">Costa Rica</option>
            <option value="CI">Cote D'Ivoire</option>
            <option value="HR">Croatia</option>
            <option value="CU">Cuba</option>
            <option value="CW">Curacao</option>
            <option value="CY">Cyprus</option>
            <option value="CZ">Czech Republic</option>
            <option value="DK">Denmark</option>
            <option value="DJ">Djibouti</option>
            <option value="DM">Dominica</option>
            <option value="DO">Dominican Republic</option>
            <option value="EC">Ecuador</option>
            <option value="EG">Egypt</option>
            <option value="SV">El Salvador</option>
            <option value="GQ">Equatorial Guinea</option>
            <option value="ER">Eritrea</option>
            <option value="EE">Estonia</option>
            <option value="ET">Ethiopia</option>
            <option value="FK">Falkland Islands (Malvinas)</option>
            <option value="FO">Faroe Islands</option>
            <option value="FJ">Fiji</option>
            <option value="FI">Finland</option>
            <option value="FR">France</option>
            <option value="GF">French Guiana</option>
            <option value="PF">French Polynesia</option>
            <option value="TF">French Southern Territories</option>
            <option value="GA">Gabon</option>
            <option value="GM">Gambia</option>
            <option value="GE">Georgia</option>
            <option value="DE">Germany</option>
            <option value="GH">Ghana</option>
            <option value="GI">Gibraltar</option>
            <option value="GR">Greece</option>
            <option value="GL">Greenland</option>
            <option value="GD">Grenada</option>
            <option value="GP">Guadeloupe</option>
            <option value="GU">Guam</option>
            <option value="GT">Guatemala</option>
            <option value="GG">Guernsey</option>
            <option value="GN">Guinea</option>
            <option value="GW">Guinea-Bissau</option>
            <option value="GY">Guyana</option>
            <option value="HT">Haiti</option>
            <option value="HM">Heard Island and Mcdonald Islands</option>
            <option value="VA">Holy See (Vatican City State)</option>
            <option value="HN">Honduras</option>
            <option value="HK">Hong Kong</option>
            <option value="HU">Hungary</option>
            <option value="IS">Iceland</option>
            <option value="IN">India</option>
            <option value="ID">Indonesia</option>
            <option value="IR">Iran, Islamic Republic of</option>
            <option value="IQ">Iraq</option>
            <option value="IE">Ireland</option>
            <option value="IM">Isle of Man</option>
            <option value="IL">Israel</option>
            <option value="IT">Italy</option>
            <option value="JM">Jamaica</option>
            <option value="JP">Japan</option>
            <option value="JE">Jersey</option>
            <option value="JO">Jordan</option>
            <option value="KZ">Kazakhstan</option>
            <option value="KE">Kenya</option>
            <option value="KI">Kiribati</option>
            <option value="KP">Korea, Democratic People's Republic of</option>
            <option value="KR">Korea, Republic of</option>
            <option value="XK">Kosovo</option>
            <option value="KW">Kuwait</option>
            <option value="KG">Kyrgyzstan</option>
            <option value="LA">Lao People's Democratic Republic</option>
            <option value="LV">Latvia</option>
            <option value="LB">Lebanon</option>
            <option value="LS">Lesotho</option>
            <option value="LR">Liberia</option>
            <option value="LY">Libyan Arab Jamahiriya</option>
            <option value="LI">Liechtenstein</option>
            <option value="LT">Lithuania</option>
            <option value="LU">Luxembourg</option>
            <option value="MO">Macao</option>
            <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
            <option value="MG">Madagascar</option>
            <option value="MW">Malawi</option>
            <option value="MY">Malaysia</option>
            <option value="MV">Maldives</option>
            <option value="ML">Mali</option>
            <option value="MT">Malta</option>
            <option value="MH">Marshall Islands</option>
            <option value="MQ">Martinique</option>
            <option value="MR">Mauritania</option>
            <option value="MU">Mauritius</option>
            <option value="YT">Mayotte</option>
            <option value="MX">Mexico</option>
            <option value="FM">Micronesia, Federated States of</option>
            <option value="MD">Moldova, Republic of</option>
            <option value="MC">Monaco</option>
            <option value="MN">Mongolia</option>
            <option value="ME">Montenegro</option>
            <option value="MS">Montserrat</option>
            <option value="MA">Morocco</option>
            <option value="MZ">Mozambique</option>
            <option value="MM">Myanmar</option>
            <option value="NA">Namibia</option>
            <option value="NR">Nauru</option>
            <option value="NP">Nepal</option>
            <option value="NL">Netherlands</option>
            <option value="AN">Netherlands Antilles</option>
            <option value="NC">New Caledonia</option>
            <option value="NZ">New Zealand</option>
            <option value="NI">Nicaragua</option>
            <option value="NE">Niger</option>
            <option value="NG">Nigeria</option>
            <option value="NU">Niue</option>
            <option value="NF">Norfolk Island</option>
            <option value="MP">Northern Mariana Islands</option>
            <option value="NO">Norway</option>
            <option value="OM">Oman</option>
            <option value="PK">Pakistan</option>
            <option value="PW">Palau</option>
            <option value="PS">Palestinian Territory, Occupied</option>
            <option value="PA">Panama</option>
            <option value="PG">Papua New Guinea</option>
            <option value="PY">Paraguay</option>
            <option value="PE">Peru</option>
            <option value="PH">Philippines</option>
            <option value="PN">Pitcairn</option>
            <option value="PL">Poland</option>
            <option value="PT">Portugal</option>
            <option value="PR">Puerto Rico</option>
            <option value="QA">Qatar</option>
            <option value="RE">Reunion</option>
            <option value="RO">Romania</option>
            <option value="RU">Russian Federation</option>
            <option value="RW">Rwanda</option>
            <option value="BL">Saint Barthelemy</option>
            <option value="SH">Saint Helena</option>
            <option value="KN">Saint Kitts and Nevis</option>
            <option value="LC">Saint Lucia</option>
            <option value="MF">Saint Martin</option>
            <option value="PM">Saint Pierre and Miquelon</option>
            <option value="VC">Saint Vincent and the Grenadines</option>
            <option value="WS">Samoa</option>
            <option value="SM">San Marino</option>
            <option value="ST">Sao Tome and Principe</option>
            <option value="SA">Saudi Arabia</option>
            <option value="SN">Senegal</option>
            <option value="RS">Serbia</option>
            <option value="CS">Serbia and Montenegro</option>
            <option value="SC">Seychelles</option>
            <option value="SL">Sierra Leone</option>
            <option value="SG">Singapore</option>
            <option value="SX">Sint Maarten</option>
            <option value="SK">Slovakia</option>
            <option value="SI">Slovenia</option>
            <option value="SB">Solomon Islands</option>
            <option value="SO">Somalia</option>
            <option value="ZA">South Africa</option>
            <option value="GS">South Georgia and the South Sandwich Islands</option>
            <option value="SS">South Sudan</option>
            <option value="ES">Spain</option>
            <option value="LK">Sri Lanka</option>
            <option value="SD">Sudan</option>
            <option value="SR">Suriname</option>
            <option value="SJ">Svalbard and Jan Mayen</option>
            <option value="SZ">Swaziland</option>
            <option value="SE">Sweden</option>
            <option value="CH">Switzerland</option>
            <option value="SY">Syrian Arab Republic</option>
            <option value="TW">Taiwan, Province of China</option>
            <option value="TJ">Tajikistan</option>
            <option value="TZ">Tanzania, United Republic of</option>
            <option value="TH">Thailand</option>
            <option value="TL">Timor-Leste</option>
            <option value="TG">Togo</option>
            <option value="TK">Tokelau</option>
            <option value="TO">Tonga</option>
            <option value="TT">Trinidad and Tobago</option>
            <option value="TN">Tunisia</option>
            <option value="TR">Turkey</option>
            <option value="TM">Turkmenistan</option>
            <option value="TC">Turks and Caicos Islands</option>
            <option value="TV">Tuvalu</option>
            <option value="UG">Uganda</option>
            <option value="UA">Ukraine</option>
            <option value="AE">United Arab Emirates</option>
            <option value="GB">United Kingdom</option>
            <option value="US">United States</option>
            <option value="UM">United States Minor Outlying Islands</option>
            <option value="UY">Uruguay</option>
            <option value="UZ">Uzbekistan</option>
            <option value="VU">Vanuatu</option>
            <option value="VE">Venezuela</option>
            <option value="VN">Viet Nam</option>
            <option value="VG">Virgin Islands, British</option>
            <option value="VI">Virgin Islands, U.s.</option>
            <option value="WF">Wallis and Futuna</option>
            <option value="EH">Western Sahara</option>
            <option value="YE">Yemen</option>
            <option value="ZM">Zambia</option>
            <option value="ZW">Zimbabwe</option>
          </select>
          </div>
        </div>
        <div class="col-1-3">
          <div class="controls">
            <input type="text" id="c-postal-code" class="floatLabel" name="floor-level" />
            <label for="c-postal-code">Postal Code</label>
          </div>
        </div>
      </div>
      

      <div class="grid">
        <div class="col-2-3">
          <div class="controls">         
            <i class="fa fa-sort"></i>
            <select id="brokers" class="floatLabel">
              <option></option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
            <label for="brokers"><i class="fa fa-male"></i>Do you have any custom brokers?</label>
          </div>
        </div>
        <div class="col-1-3">
            <div class="controls">
              <input type="text" id="broker-name" class="floatLabel" name="broker-name" disabled/>
              <label style="background-color: #DFDFDF;" for="broker-name">Name of broker</label>
            </div>
          </div>
      </div>
      <div class="col">
        <div class="controls">
          <i class="fa fa-sort"></i>
          <select id="clearance" class="floatLabel">
            <option></option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
          <label for="clearance"><i class="fa fa-male"></i>Do you require custom clearance?</label>
        </div>
      </div>

      </div>
        <div class="controls" id="clearance-form" style="display: none; margin-top: -10px">
          <textarea  name="clearance-description" class="floatLabel" id="clearance-description" style="background-color: white; z-index: 0; color: red; margin-top: 20px" disabled readonly>"I/WE M/s, 
           ______________ (Name & Address) surname have authorized Best Cargo Ltd for filing of our Import Documents in our name & getting our cargo cleared as per the 
           documents and information provided to them by us.
           We hereby also declare that all the information submitted as per the Packing List & Invoice, is as per our 
           knowledge, true and correc and, if during custon examination contradictory / objectionable is found in the shipment neither Best Cargo Ltd nor the carrier would be held responsible.</textarea>
          <label style="display: none;" for="clearance-description"></label>
        </div>
      </div>
     
      <div style="text-align: left;" id="terms" class="col-1-2">
        <p style="display: inline-block; text-align: left; margin-right: 10px; justify-items: left;">I consent that all
          of the above listed items has been generated from my current Household & Personal Effects <br>I am declaring
          on honour, that all above listed items have been packed and counted myself: I, ........................
          bearing Passport Number ............................</p><p>By filling this form, the sender agree that all
             the listed content is from your own knowledge and you acknowledge and accept the terms and conditions</p>
             <label for="terms-check" style="margin-right: 10px; color: #0000FF">I agree</label><input id="terms-check" type="checkbox" required/>
      </div>

      <button type="submit" id="submit" value="Submit" style="border-radius: 5px;" class="col-1-2" >Submit</button>
      <button style="background-color: grey; border-radius: 5px; margin-top: 10px; height: 40px; width: 100px" onclick="reload()">clear form</button>
      <!-- <button type="button" onclick="retrieveProducts()">TEST</button> -->
    
  </form>
  <script src="index.js"></script>
</body>

</html>