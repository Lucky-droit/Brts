<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "mainpage.css"/>
    
</head>

<body>
    <div class="phonebody">
         <div class="firstrow">
             <div class="arrow"><img class = "fimg" src="arrow1.jpg"/></div>
             <div class="paytmlogo"><img class = "simg" src="paytm.jpg"/></div>
             <div class="help"><img class = "timg" src="help.jpg"/></div>
         </div>
         <div class="block">
             <div class="conimg" ><img class="fiimg" src="janmarg.jpg"/></div>
             <div class = "stcon">
             <div class = "stations" >
            <input type = "button"class = "srcbtn" id = "st1" value = "<?php echo $_POST['src'];?>" />
</div>
<div class = "siimg"><img class = "arrow1" src = "arrow2.png"/></div>
<div class = "stations2">
<input type = "button"class = "srcbtn"  id = "st2" value = "<?php echo $_POST['dst']; ?>"  />
</div>
</div>
<div class = "adultticket">
    <p class = "aadultticket">1 Adult Ticket</p>
    <br>
    <p class = "ac">AC</p>
</div>
<div class = "rupee">
    <img class = "seimg" src = "rupee.jpg"/>
    <input type = "button" class = "ambtn" value = "<?php echo $_POST['amt'];?>"/>
             <img class = "eiimg" src = "correct.jpg"/>
</div>
<div class = "tbs">
    TICKET BOOKED SUCCESSFULLY
</div>
<div class = "datetime">
<input type = "text" id = "date"/>
<input type = "text" id = "timeam"value  = "<?php echo $_POST['tm'];?>"/>
</div>
<div class = "timer">
    <div class = "yourticket">
        Your ticket is valid for
</div>
<div class = "validtimer">
    <p id = "clock"></p>
</div>
<div class= "hms">
    <p class= "hours">HOURS</p>
    <p class = "minutes">MINUTES</p>
    <p class = "seconds">SECONDS</p>
</div>
<div class = "viewyourticket">
    <input type = "button" class = "vbtn"value = "View your Tickets"/>
</div>
</div>
<div class = "lastlines">
    <div class = "firstline"></div>
    <div class ="secondline"></div>
</div>
<div class = "part2">
  <div class = "tripdetails">
      Trip Details
</div>    
<div class = "operator">
    <p class = "fo">OPERATOR</p>
    <p class = "fs">BRTS</p>
</div>
<div class = "busnumber">
    <p class = "bo">BUS NUMBER</p>
    <p class = "bs">BRTS</p>
</div>
<div class = "greyline">
</div>
<div class ="orderid">
   <div class = "oif"> Order ID: 18828584071 <span style = "color:blue";>copy</span></div>
   <div class = "ois">  For any queries regarding QR Ticket, please contact BRTS with Order Id. </div>

</div>

</div>
<div class = "part3">
    <div class = "paymentdetails">
        Payment Details
</div>
<div class = "farebreakup">
        FARE BREAKUP
</div>
<div class = "adult1">1 X Adult
   
</div>
<div class = "total">Total
</div>
<div class = "paymentmode">
    PAYMENT MODE
</div>
<div class ="statebankofindia">
    State Bank Of India UPI Linked Bank Account
</div>
<div class ="transactionid">
    Transaction ID: 222063871044
</div>
</div>
</div>

         
    </div>
    <script>
      


const starttime = 2 ;

let time = starttime*3600 ;
let time2 = time ;
countdown = document.getElementById('clock');


setInterval(updatecountdown,1000);

function updatecountdown()

{

let hours = Math.floor(time/3600);

time1 = time %3600;

let minuttes = Math.floor(time1/60);

time2 = time1%60;

let second = Math.floor(time2%60);

if( second <10) 

{

second = '0' + second; 

}

if(minuttes<10)

minuttes = '0' + minuttes; 

if (hours<10)

{

hours = "0" + hours;

}


countdown.innerHTML = `${hours}:${minuttes}:${second}`

time--;

}




var getdate = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31]
        var getmonth = 
[
    "January","February","March","April","May","June","July","August","September","Octomber","November","December"
];
var d  = new Date();
// var seconds  = addZero(d.getSeconds());
//  var minutes = addZero(d.getMinutes());
 var ddd = `${d.getDate()} ${getmonth[d.getMonth()]} ${d.getFullYear()},`;
document.getElementById('date').value = ddd ;

    </script>
</body>
</html>