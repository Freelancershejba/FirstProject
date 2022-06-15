<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">


  <title>Form Validation</title>
</head>

<body>
  <div class="form_section">
    <div class="container">
      <div class="row">

        <?php
          $studentName='';
          $userName='';
          $fatherName='';
          $motherName='';
          $email='';
          $number='';
          $date='';
          $inlineRadioOptions='';
          $password='';
          // $checkbox='0';

      if(isset($_POST['submit'])){
          $studentName=$_POST['studentName'];
          $userName=$_POST['userName'];
          $fatherName=$_POST['fatherName'];
          $motherName=$_POST['motherName'];
          $email=$_POST['email'];
          $number=$_POST['number'];
          $date=$_POST['date'];

          if(isset($_POST['inlineRadioOptions'])){
            $inlineRadioOptions = $_POST['inlineRadioOptions'];
          }
          
          $password=$_POST['password'];
          // $checkbox=$_POST['checkbox'];


          // if($studentName=='' || $fatherName=='' || $motherName='' || $userName='' || $email='' || $number='' || $date='' || $password=''){
          //   echo'<span class="Red_alert">Please Enter All Data!</span>';
          // }
          // else{
          //   echo '<span class="Green_alert">Data Insert Successfully!</span>';
          //     $studentName='';
          //     $userName='';
          //     $fatherName='';
          //     $motherName='';
          //     $email='';
          //     $number='';
          //     $date='';
          // }
          $e=0;
          if($studentName==''){
            $e++;
            echo'<span class="Red_alert">Please Enter Your Name"</span>';
          }
          if($userName==''){
            $e++;
            echo'<span class="Red_alert">Please Enter Your User Name"</span>';
          }
          if($fatherName==''){
            $e++;
            echo'<span class="Red_alert">Please Enter Your Father Name"</span>';
          }
          if($motherName==''){
            $e++;
            echo'<span class="Red_alert">Please Enter Your Mother Name"</span>';
          }
          if($email==''){
            $e++;
            echo'<span class="Red_alert">Please Enter Your Email"</span>';
          }
          if($number==''){
            $e++;
            echo'<span class="Red_alert">Please Enter Your Number"</span>';
          }
          if($date==''){
            $e++;
            echo'<span class="Red_alert">Please Enter Your Date of Birth"</span>';
          }
          if($inlineRadioOptions==''){
            $e++;
            echo'<span class="Red_alert">Select Your Gender!"</span>';
          }
          if($e==0){
            echo '<span class="Green_alert">Data Insert Successfully!</span>';
            $studentName='';
            $userName='';
            $fatherName='';
            $motherName='';
            $email='';
            $number='';
            $date='';
            $inlineRadioOptions='';
            $password='';
            // $checkbox='0';
          }
          
      }
      
          

?>

        <form class="form_stytle my-4 p-5" method="POST" action="">
          <div class="form_header text-center">
            <h1>Addmission Form</h1>
            <h3>Pitech It Training Center</h3>
            <h3>Besicnogori,Thakurgaon Sodor,Thakurgaon</h3>
          </div>
          <div class="mb-3 float-end" style="width:49%;">
            <label for="studentName" class="form-label">Student Name</label>
            <input type="name" name="studentName" value="<?php echo $studentName;?>" class="form-control"
              placeholder="Enter your name" id="studentName" aria-describedby="emailHelp">
          </div>
          <div class="mb-3 float-start" style="width:49%;">
            <label for="userName" class="form-label">Username</label>
            <input type="name" name="userName" value="<?php echo $userName;?>" class="form-control"
              placeholder="Enter your username" id="userName">
          </div>
          <div class="mb-3 float-end" style="width:49%;">
            <label for="fatherName" class="form-label">Father Name</label>
            <input type="name" name="fatherName" value="<?php echo $fatherName;?>" class="form-control"
              placeholder="Enter your father name" id="fatherName">
          </div>
          <div class="mb-3 float-start" style="width:49%;">
            <label for="motherName" class="form-label">Mother Name</label>
            <input type="name" name="motherName" value="<?php echo $motherName;?>" class="form-control"
              placeholder="Enter your mother name" id="motherName">
          </div>
          <div class="mb-3 float-end" style="width:49%;">
            <label for="emailAddress" class="form-label">Email Address</label>
            <input type="email" name="email" value="<?php echo $email;?>" class="form-control"
              placeholder="Enter your email" id="emailAddress">
          </div>
          <div class="mb-3 float-start" style="width:49%;">
            <label for="phoneNumber" class="form-label">Phone Number</label>
            <input type="number" name="number" value="<?php echo $number;?>" class="form-control"
              placeholder="Enter your number" id="phoneNumber">
          </div>
          <div class="mb-3" style="width:100%; display:flex;">
            <div class="mb-3" style="width:49%; margin-right:2%;">
              <label for="birthday" class="form-label">Birthday</label>
              <input style="color:#696969;" type="date" value="<?php echo $date;?>" name="date" class="form-control"
                id="birthday" name="birthday">
            </div>
            <div class="mb-3 " style="width:49%;">
              <label for="birthday" class="form-label d-block">Select your gender</label>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                  value="1">
                <label class="form-check-label sm2" for="inlineRadio1">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                  value="2">
                <label class="form-check-label sm2" for="inlineRadio2">Female</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                  value="3">
                <label class="form-check-label sm2" for="inlineRadio3">Custom</label>
              </div>
            </div>
          </div>

          <div class="mb-3 float-end" style="width:49%;">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" value="<?php echo $password;?>" class="form-control" id="password">
          </div>
          <div class="mb-3 float-start" style="width:49%;">
            <label for="password" class="form-label">Confirm Password</label>
            <input type="password" name="password" value="<?php echo $password;?>" class="form-control" id="password">
          </div>
          <div class="mb-3 form-check">
            <label class="form-check-label sm" for="exampleCheck1">Agree</label>
            <input type="checkbox" name="checkbox" class="form-check-input" id="exampleCheck1">
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>



  <!--Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
  </script>
</body>

</html>