function validateForm() {

    var ddate = document.getElementById("ddate").value;
    var num = document.getElementById("num").value;
    var temail = document.getElementById("temail").value;

    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(temail);
    
    //if (temail == "") {
    //  document.getElementById("mytext").innerHTML="Please enter email";
    //  return false;
    //}
    if(!res)
  {
    document.getElementById("mytext").innerHTML="Email format is not correct";
    return false; 
  }
    if (ddate == "") {
        document.getElementById("mytext").innerHTML="Please enter departure date";
        return false;
      }
  
      if (num == "" || num.length > 10) {
        document.getElementById("mytext").innerHTML="Please enter passenger number";
        return false;
      }

    if (document.getElementById("dhaka").checked == false &&  document.getElementById("cumilla").checked == false && document.getElementById("narayangonj").checked == false)
    {
      document.getElementById("mytext").innerHTML="Please select any radio button";
      return false;
    }

    if (document.getElementById("dhaka").checked == false &&  document.getElementById("cumilla").checked == false && document.getElementById("narayangonj").checked == false)
    {
      document.getElementById("mytext").innerHTML="Please select any radio button2";
      return false;
    }

    if (document.getElementById("non A/C").checked == false &&  document.getElementById("A/C").checked == false && document.getElementById("any").checked == false)
    {
      document.getElementById("mytext").innerHTML="Please select any radio button3";
      return false;
    }

    if (document.getElementById("vehicle1").checked == false &&  document.getElementById("vehicle2").checked == false && document.getElementById("vehicle3").checked == false)
    {
      document.getElementById("mytext").innerHTML="Please select any radio button4";
      return false;
    }

    
  
    
  }