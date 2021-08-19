function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username == "") {
      document.getElementById("mytext").innerHTML="Please enter username";
      return false;
    }
    if ( password == "") {
      document.getElementById("mytext").innerHTML="Please enter password";
      return false;
    }
    if ( password.length < 5) {
      document.getElementById("mytext").innerHTML="Password lenth should be more than 6";
      return false;
    }

  }