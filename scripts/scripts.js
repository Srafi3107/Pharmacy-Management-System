"use strict";
//*****************Log IN *************************
function userValidate() {
  var submit = document.getElementById("submit").value;

  var username = document.getElementById("username").value;

  var password = document.getElementById("password").value;

  if (username == "" || password == "") {
    document.getElementById("response").innerHTML =
      "Please Fill all the information";
  } else {
    //ajax start
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controller/loginCheck.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        if (this.responseText.trim() == "success") {
          window.location.href = "../view/dashboard.php";
        }
        if (this.responseText.trim() == "failed") {
          document.getElementById("response").innerHTML =
            "Invalid Username or Password";
        }
      }
    };

    xhttp.send(
      "submit=" + submit + "&username=" + username + "&password=" + password
    );
    //ajax end
  }
}
