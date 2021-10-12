<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Aelum Assignment</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

      <script type="text/javascript">
        function timeout(){
          var minute = Math.floor(timeLeft/60);
          var second = timeLeft%60;
          var mint = checktime(minute);
          var sec = checktime(second);
          if(timeLeft < 0){
            clearTimeout(tm);
            alert("Time is over refresh the page to fill the form again");
            location.reload();
          }
          else{
            document.getElementById("time").innerHTML=mint+":"+sec;
          }
          timeLeft--;
          var tm = setTimeout(function(){timeout()},1000);
        }
        function checktime(msg){
          if(msg<10){
            msg="0"+msg;
          }
          return msg;
        }
      </script>

   </head>
   <body onload = "timeout()" style="background:grey;">
      <div class="container">
         <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
               <h1>
                <u> Aelum Form</u>
                 <script>
                   var timeLeft=3*60;
                 </script>
                 <div id = "time" style = "float:right;color:red;"> 
                 </div>
                </h1><br/>
               <p style="color:orange;">Please fill this form within the time interval which are showing on above window unless form will refresh</p>
               <form method. = "post" id="frmCaptcha">
                  <div class="form-group">
                     <label>Name:</label>
                     <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
                  </div>
                  <div class="form-group">
                     <label>Email:</label>
                     <input type="text" class="form-control" id="email" placeholder="Enter your Email" name="email" required>
                  </div>
                  <div class="form-group">
                     <label>Date of Birth:</label>
                     <input type="text" class="form-control" id="dob" placeholder="dd-mm-yyyy" name="dob"required>
                  </div>
                  <div class="form-group">
                     <label>About Yourself:</label>
                     <textarea class="form-control" id="about" placeholder="About" name="about" required></textarea>
                  </div>
				  
				          <div class="form-group">
                    <div class="row">
                      <div class="col-lg-10">
                        <label>Captcha:</label>
                        <input type="text" class="form-control" id="captcha" placeholder="Enter captcha showing below" name="captcha" required>
                      </div>
                      <div class="col-lg-2" style="margin-top:25px;">
                        <img src="captcha.php"/>
                      </div>
                    </div>	
                  </div>
                  <button type="button" class="btn btn-default" onclick="submit_data()">Submit</button>
               </form>
            </div>
         </div>
      </div>
	  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	  <script>
	  function submit_data(){
      jQuery.ajax({
        url:'insert.php',
        type:'post',
        data:jQuery('#frmCaptcha').serialize(),
        success:function(data){
          alert(data);
        }
      });
	  }
	  </script>
   </body>
</html>