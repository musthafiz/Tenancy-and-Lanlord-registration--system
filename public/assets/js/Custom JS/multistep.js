var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByClassName("required");
  z =  x[currentTab].getElementsByClassName("required-num");
  a =  x[currentTab].getElementsByClassName("required-bdnum");
  b =  x[currentTab].getElementsByClassName("required-age");
  c =  x[currentTab].getElementsByClassName("required-emerage");
  d =  x[currentTab].getElementsByClassName("required-email");
  e =  x[currentTab].getElementsByClassName("required-eigttin");
  f =  x[currentTab].getElementsByClassName("required-img");

  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
    


      y[i].className += " is-invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }

  // A loop that checks every input field in the current tab:
  for (i = 0; i < f.length; i++) {
    // If a field is empty...
    if (f[i].value == "") {
      // add an "invalid" class to the field:
    

     alert("No image Was Selected");
      f[i].className += " is-invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }



  // A loop that checks every input field with number in the current tab:
  for (i = 0; i < z.length; i++) {
    // If a field is empty...
    if (isNaN(z[i].value) || z[i].value<1 || z[i].value>8) {
      // add an "invalid" class to the field:
      z[i].className += " is-invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }

//age validation
  for (i = 0; i < b.length; i++) {
    // If a field is empty...
    if (isNaN(b[i].value) || b[i].value<1 || b[i].value>105) {
      // add an "invalid" class to the field:
      b[i].className += " is-invalid";
      alert("Require age 18+!");

      // and set the current valid status to false:
      valid = false;
    }
  }
//age validation for emergency contact
  for (i = 0; i < c.length; i++) {
    // If a field is empty...
    if (isNaN(c[i].value) || c[i].value<18 || c[i].value>70) {
      // add an "invalid" class to the field:
      c[i].className += " is-invalid";
      alert("Require age 18+!");
      // and set the current valid status to false:
      valid = false;
    }
  }

  
//age validation for 18+
  for (i = 0; i < e.length; i++) {

  	var dob=e[i].value;
  	var year = Number(dob.substr(0, 4));
  	var date = Number(dob.substr(8, 6));
  	var month = Number(dob.substr(5, 2));
  	var today = new Date();
  	var age = today.getFullYear() - year;
	if (today.getMonth() < month || (today.getMonth() == month && today.getDate() < day)) 
	{
  	age--;
	}

	if(age<18){

	alert("Age should be 18+");
  	valid=false;

	}

  }


//mobile number validation
  var pattern = /(^(\+8801|8801|01|008801))[1|3-9]{1}(\d){8}$/;
  for (i = 0; i < a.length; i++) {

    // If a field is empty...
   if (!pattern.test(a[i].value) || a[i].value=="" ) {
      // add an "invalid" class to the field:
      alert("Invalid Phone Number");
      a[i].className += " is-invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }





//email validation
 var email =/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  for (i = 0; i < d.length; i++) {

    // If a field is empty...
   if (!email.test(d[i].value) || d[i].value=="" ) {
      // add an "invalid" class to the field:
      d[i].className += " is-invalid";
      alert("Invalid Email Address");
      // and set the current valid status to false:
      valid = false;
    }
  }
 
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("btn multisteps-form__progress-btn")[currentTab].className += " js-finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("btn multisteps-form__progress-btn");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" js-active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " js-active";
}

