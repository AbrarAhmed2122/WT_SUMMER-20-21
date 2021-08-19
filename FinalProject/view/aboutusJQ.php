<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideDown("slow");
  });
});
</script>
<style> 
#panel, #flip {
  padding: 5px;
  text-align: center;
  background-color: #e5eecc;
  border: solid 1px #c3c3c3;
}

#panel {
  padding: 50px;
  display: none;
}
</style>
</head>
<body>
 
<div id="flip">Click to slide down panel</div>
<div id="panel">Hello user, this a website  where you are aligible to purchase Bus Tickets and it will be handed to you after you have ticket online. For now, we are only servicing for three differnt locatons 
     'Dhaka, Comilla and Narayangonj'. We are eager to enlarge our possibilities near future. Please follow the guideline and register to use this website and we are asking for NID information for security purposes.
      if there is any quereies u can mail this email "abrarahmed161120@gmail.com" to answer you questions. Hope, you enjoy our website and please feel to advise us how to make it more easier for you to use. 
</div>

</body>
</html>
