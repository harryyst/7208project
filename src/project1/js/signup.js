var password1 = document.getElementById("password")
  , password2 = document.getElementById("password2");
message = document.getElementById('confirmMessage'),
  colors = {
    goodColor: "#fff",
    goodColored: "#087a08",
    badColor: "#fff",
    badColored: "#ed0b0b"
  },
  strings = {
    "confirmMessage": ["good", "Passwords Don't Match"]
  };


  $('#password, #password2').on('keyup', function () {
    if ($('#password').val() == $('#password2').val()) {
      password2.style.borderColor = colors["goodColored"];
    } else 
      password2.style.borderColor = colors["badColored"];
  });


function validatePassword1(password) {

  // Do not show anything when the length of password is zero.
  if (password.length === 0) {
    document.getElementById("msg").innerHTML = "";
    return;
  }
  if (password.length < 10) {
    strength = "at least 10 character";
    password1.style.borderColor = colors["badColored"];
    password1.setCustomValidity("Passwords must have at least 10 character");
    
  } else {
    strength = "";
    password1.style.borderColor = colors["goodColored"];
    password1.setCustomValidity('');
    
  }



  document.getElementById("msg").innerHTML = strength;
  document.getElementById("msg").style.color = color;
}
