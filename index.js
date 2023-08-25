(function ($) {
  function floatLabel(inputType) {
    $(inputType).each(function () {
      var $this = $(this);
      // on focus add cladd active to label
      $this.focus(function () {
        $this.next().addClass("active");
      });
      //on blur check field and remove class if needed
      $this.blur(function () {
        if ($this.val() === "" || $this.val() === "blank") {
          $this.next().removeClass();
        }
      });
    });
  }
  // just add a class of "floatLabel to the input field!"
  floatLabel(".floatLabel");
})(jQuery);

//preventing form from submitting the from on enter
$(document).ready(function () {
  $(window).keydown(function (event) {
    if (event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
});

var surname = "****";
var Name = "****";
var passportNum = "****";

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <button> element that closes the modal
var span = document.getElementById("close");

document.getElementById("surname").addEventListener("change", (e) => {
  surname = e.currentTarget.value;
  updateTermsAndConditions();
  updateCustomClearanceAct();
});

document.getElementById("name").addEventListener("change", (e) => {
  Name = e.currentTarget.value;
  updateTermsAndConditions();
  updateCustomClearanceAct();
});

document.getElementById("passport").addEventListener("change", (e) => {
  passportNum = e.currentTarget.value;
  updateTermsAndConditions();
});

document.getElementById("gated").addEventListener("change", (e) => {
  if (e.currentTarget.value == "Yes") {
    document.getElementById("gate-code").disabled = false;
    $('label[for="gate-code"').css("background-color", "#ffffff");
  } else {
    document.getElementById("gate-code").disabled = true;
    $('label[for="gate-code"').css("background-color", "#DfDfDf");
  }
});

document.getElementById("brokers").addEventListener("change", (e) => {
  if (e.currentTarget.value == "Yes") {
    document.getElementById("broker-name").disabled = false;
    $('label[for="broker-name"').css("background-color", "#ffffff");
  } else {
    document.getElementById("broker-name").disabled = true;
    $('label[for="broker-name"').css("background-color", "#DFDFDF");
  }
});

document.getElementById("clearance").addEventListener("change", (e) => {
  updateCustomClearanceAct();
  if (e.currentTarget.value == "Yes") {
    //document.getElementById("clearance-description").disabled = false;
    document.getElementById("clearance-form").style.display = "block";
  } else {
    document.getElementById("clearance-form").style.display = "none";
    //document.getElementById("clearance-description").disabled = true;
  }
});

function updateCustomClearanceAct() {
  let address =
    document.getElementById("address-line-1").value +
    " " +
    document.getElementById("address-line-2").value +
    " " +
    document.getElementById("city").value +
    " " +
    $("#country option:selected").text() +
    " " +
    document.getElementById("state").value; //verified

  document.getElementById("clearance-description").innerHTML =
    "I/WE M/s," +
    Name.toUpperCase() +
    " " +
    surname.toUpperCase() +
    " " +
    address.toUpperCase() +
    " ,have authorized Best Cargo Ltd for filing of our Import Documents in our name & getting our cargo cleared as per the documents and information provided to them by us.\nWe hereby also declare that all the information submitted as per the Packing List & Invoice, is as per our knowledge, true and correc and, if during custon examination contradictory / objectionable is found in the shipment neither Best Cargo Ltd nor the carrier would be held responsible.";
}

function updateTermsAndConditions() {
  document.getElementById("terms").innerHTML =
    "<p>I consent that all of the above listed items has been generated from my current Household & Personal Effects <br>I am declaring on honour, that all above listed items have been packed and counted myself:<br>I,<span style='font-weight: bold;'> " +
    surname +
    " " +
    Name +
    "</span> bearing Passport Number <span style='font-weight: bold;'> " +
    passportNum +
    "<p>By filling this form, the sender agree that all" +
    "the listed content is from your own knowledge and you acknowledge and accept the terms and conditions</p>" +
    "<label for='terms-check' style='margin-right: 10px;'>I agree</label><input id='terms-check' type='checkbox' />";
}

var btn = document.querySelector("form");
btn.addEventListener("submit", (event) => {
  event.preventDefault();
  if (document.querySelector("input#terms-check").checked == false) {
    alert("Please read consent form and tick checkbox to validate transaction");
    return false;
  } else {
    var products_list;
    var total_deadweight = 0;
    for (let i = 1; i <= 20; i++) {
      //console.log(document.getElementById("dimensions" + i));
      let ans = document.getElementById("dimension" + i).style.display;
      if (ans == "block") {
        total_deadweight += Number(
          document.getElementById("deadweight_input" + i).value
        );
        products_list +=
          "Product " +
          i +
          "\n" +
          "Description: " +
          document.getElementById("description_input" + i).value +
          "\n" +
          "Length: " +
          document.getElementById("length" + i).value +
          "CM X Width: " +
          document.getElementById("width" + i).value +
          "CM X Height: " +
          document.getElementById("height" + i).value +
          "CM\n" +
          "Dead Weight: " +
          document.getElementById("deadweight_input" + i).value +
          "Kgs\nVolumetric Weight (Sea Freight): " +
          document.getElementById("metric-label" + i).textContent +
          "\nVolumetric Weight (Air Freight): " +
          (document.getElementById("length" + i).value *
            document.getElementById("width" + i).value *
            document.getElementById("height" + i).value) /
            6000 +
          " Kgs\n\n";
      }
    }

    // creating uuid
    var id = uuidv4();
    var address =
      document.getElementById("address-line-1").value +
      "\n" +
      document.getElementById("address-line-2").value +
      "\n" +
      document.getElementById("city").value +
      "\n" +
      $("#country option:selected").text() +
      "\n" +
      document.getElementById("state").value; //verified

    var flight_info =
      "Flight Number: " +
      document.getElementById("flight-num").value +
      "\n" +
      "Airline: " +
      document.getElementById("airline").value +
      "\n" +
      "Flight Ticket: " +
      document.getElementById("ticket").value +
      "\n" +
      "Flight Date: " +
      document.getElementById("flight-date").value; //verified

    var delivery_address =
      document.getElementById("c-address-line-1").value +
      "\n" +
      document.getElementById("c-address-line-2").value +
      "\n" +
      document.getElementById("c-city").value +
      "\n" +
      $("#c-country option:selected").text() +
      "\n" +
      document.getElementById("c-state").value;

    //**********COMPLETE PARAMS AND MAKE THEM MATCH IDS FORM INDEX.PHP FILE */
    var params = {
      id: id,
      name:
        //sender info
        document.getElementById("name").value +
        " " +
        document.getElementById("surname").value,
      email: document.getElementById("email").value,
      NIC: document.getElementById("nic").value,
      phone:
        document.getElementsByClassName("iti__selected-dial-code")[0]
          .textContent +
        " " +
        document.getElementById("phone").value,
      address: address,
      zip: document.getElementById("postal-code").value,
      gated: document.getElementById("gated").value,
      gatecode: document.getElementById("gate-code").value,
      lift: document.getElementById("lift").value,
      floor: document.getElementById("floor").value,
      flight_info: flight_info,
      product_list: products_list.replace("undefined", ""),
      total_deadweight: total_deadweight,
      inquiry: document.getElementsByClassName("inquiry active")[0].textContent,

      //consignee info
      c_name:
        document.getElementById("c-name").value +
        " " +
        document.getElementById("c-surname").value,
      c_email: document.getElementById("c-email").value,
      c_NIC: document.getElementById("c-nic").value,
      c_phone:
        document.getElementsByClassName("iti__selected-dial-code")[1]
          .textContent +
        " " +
        document.getElementById("c-phone").value,
      delivery_address: delivery_address,
      c_zip: document.getElementById("c-postal-code").value,
      custom_brokers: document.getElementById("brokers").value,
      broker_name: document.getElementById("broker-name").value,
      clearance: document.getElementById("clearance").value,
    };

    const serviceID = "service_zfxuxii";
    //template ID - sent to Dayvid(Owner)
    const templateID = "template_quzagzl";
    //template ID - email sent to client
    const templateIDclient = "template_omwi5jo";

    modal.style.display = "block";
    //sending messages to both client and Dayvid
    emailjs
      .send(serviceID, templateIDclient, params)
      .then((res) => {
        console.log(res);
        validateEmails();
      })
      .catch((err) => {
        console.log(err);
      });
    emailjs
      .send(serviceID, templateID, params)
      .then((res) => {
        document.getElementById("name").value = "";
        console.log(res);
        validateEmails();
      })
      .catch((err) => console.log(err));
  }
});

//make sure that both email to sender and to owner
var sendEmail = 0;
function validateEmails() {
  sendEmail++;
  if (sendEmail == 2) msgSent();
}

//function to create uuid
function uuidv4() {
  return "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g, function (c) {
    const r = (Math.random() * 16) | 0,
      v = c == "x" ? r : (r & 0x3) | 0x8;
    return v.toString(16);
  });
}

function reload() {
  location.reload();
}

function msgSent() {
  $(".loader").remove();
  document.getElementById("acceptImg").style.display = "block";
  document.getElementById("close-msg").innerHTML =
    "Form Submitted! Check your Email to see Transaction Details.";
  span.disabled = false;
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
  location.reload();
};

//functions that run when page is load
window.onload = function () {
  updateDimensionSection(1);
};

//When total number of pieces changes the quantity of dimensions
document.getElementById("pieces").addEventListener("change", (num) => {
  updateDimensionSection(num.currentTarget.value);
});

function updateDimensionSection(num) {
  for (let x = 1; x <= num; x++) {
    //display all the sections for number of pieces
    document.getElementById("dimension" + x).style.display = "block";
    document.getElementById("description" + x).style.display = "block";
    document.getElementById("deadweight" + x).style.display = "block";
  }
  //make sure that sections not in the range do not appear
  for (let y = Number(num) + 1; y <= 20; y++) {
    //display all the sections for number of pieces
    document.getElementById("dimension" + y).style.display = "none";
    document.getElementById("description" + y).style.display = "none";
    document.getElementById("deadweight" + y).style.display = "none";
  }
}

//Using the phone script for country code
var input = document.querySelector("#phone");
window.intlTelInput(input, {
  separateDialCode: true,
});

var input2 = document.querySelector("#c-phone");
window.intlTelInput(input2, {
  separateDialCode: true,
});

//updating metric ton whenever a value is changed
var dimension_section = document.querySelectorAll(".measurements");
let length = 0;
let width = 0;
let height = 0;
dimension_section.forEach(function callback(section, i) {
  let index = Math.trunc((i + 1) / 4) + 1;

  //console.log(Math.trunc((i + 1) / 4));
  section.addEventListener("change", (section) => {
    //let metric_index = section.currentTarget.id;
    console.log(document.getElementById("length" + index).value);

    let num = section.currentTarget.value;
    // console.log(section.currentTarget);
    if (section.currentTarget.placeholder == "length") {
      length = document.getElementById("length" + index).value;
    } else if (section.currentTarget.placeholder == "width") {
      width = document.getElementById("width" + index).value;
    } else {
      height = document.getElementById("height" + index).value;
    }

    let metric = (length * width * height) / 5000;
    console.log(length, width, height);

    document.getElementById("metric-label" + index).textContent =
      metric + " Kgs (Sea freight)";
  });
});

//Inquiry selector function changing active class
function setActive(num) {
  document.getElementById("quote").classList = "inquiry";
  document.getElementById("careers").classList = "inquiry";
  document.getElementById("general").classList = "inquiry";
  if (num == 1) {
    document.getElementById("quote").classList = "inquiry active";
  } else if (num == 2) {
    document.getElementById("careers").classList = "inquiry active";
  } else if (num == 3) {
    document.getElementById("general").classList = "inquiry active";
  }
  console.log(document.getElementsByClassName("inquiry active")[0].textContent);
}
