<?php
 session_start();
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Raise - Responsibility</title>
    <link rel="icon" type="image/x-icon" href="Images/favicon.webp">
    <link rel="stylesheet" href="raiseCharityForm.css" />
  <body>

  <header>
    <nav class="n">
      <ul>
        <span>
          <li><img src="Images/favicon.webp" alt=""></li>
          <li class="l1"><a href="index.html"> &nbsp;&nbsp;Responsibility</a></li>
          <div>
            <li><a href="RaiseCharityForm.php">Raise New Charity</a></li>
            <li><a href="viewcharitydet.php">View Donations for my charity</a></li>
            <li><a href="#View charities">View charities</a></li>
          </div>
          <button class="b1" name="Hello">
            <a href="#login">Log Out</a>
          </button>
        </span>
      </ul>
    </nav>
  </header> <br><br><br><br><br><br><br><br>
  <div class="formdiv">
      <form method="POST" enctype="multipart/form-data" onsubmit="return validateform()">
        <label for="Cname">Name of the charity :</label>
        <input
          type="text"
          id="Cname"
          name="Cname"
          size="90px"
          placeholder="Charity Name"
        /><br />
        <label for="Founder">Charity Founder :</label>
        <input
          type="text"
          id="Founder"
          name="Founder"
          size="90px"
          placeholder="Charity Founder"
        /><br />
        <p class="parz">Purpose :</p>
        <textarea rows="4" cols="50" id="purp" name="purp" size="90px" Placeholder="Write Here..." ></textarea><br /><br>
        <label >Charity Cover Image :</label>
        <input
          type="file"
          
          name="image"
          
        /><br />
        <button name="submitbut" type="submit" class="subbutton">  Submit</button><br /><br>
      </form>
      
    </div> 
    
   <footer>
    <div class="part4-1">
      <img src="Images/favicon.webp" alt="">
      <span>&nbsp;&nbsp;Responsibility</span>
      <p>
          Responsibility is the community-focused nonprofit donor management software built to deliver a better giving experience and help organizations thrive.
      </p>
  </div>
  <div class="part4-2">
      <table border="0px" cellspacing="1px" align="right" >
          <tr class="td2">
              <td><a href="#"><img  style="padding-left:0px;" src="Images/l1.jpg" alt="Facebook"></a> 
                  <a href="#"><img  style="padding-left:0px;" src="Images/l2.png" alt="Twitter"></a>
                  <a href="#"><img  style="padding-left:0px;" src="Images/l3.png" alt="Linked In"></td>
          </tr>
          <tr class="td1">
              <td><a href="#">Privacy Policy</a> <a href="#">Security Policy</a> <a href="#">Openness</a> <a href="#">GDPR</a></td>
          </tr>
          <tr class="td3">
              <td>Copyright © 2022 Responsibility® All Rights Reserved</td>
          </tr>
      </table>
  </div>

  </footer>
  </body>
</html>
<script>function validateform(){

  var jscname=document.getElementById('Cname').value;
  var cnamereg=/^[a-zA-Z\s]+$/g;
  if(!jscname.match(cnamereg)){
    alert('Name can only have alphabets.');
    return false;
  }

  var jsfounder=document.getElementById('Founder').value;
  var founderreg=/^[a-zA-Z\s]+$/g;
  if(!jsfounder.match(founderreg)){
    alert('Charity Founder can only have alphabets.');
    return false;
  }

   // Purpose can have anything no need to validate

    var filepath=document.getElementById('cimg').value;

    var allowedextensions=/(\.jpg|\.jpeg|\.png|\.webp|\.gif)$/i;

    if(!allowedextensions.exec(filepath)){
      alert('Invalid File Type');
      return false;
    }

}
</script>
<?php
if(isset($_POST['submitbut'])){
 $con = mysqli_connect('localhost','root','','responsibility');
    if (!$con)
    {
        die('Could not connect: ' . mysqli_error());
    }
    
    else{
      $a=$_POST['Cname'];
    $b=$_POST['Founder'];
    $c=$_POST['purp'];

        $sql = "INSERT INTO raise (chName,fName,purpose) VALUES ('$a','$b','$c')";
        mysqli_query($con,$sql);
        
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        $image = $_FILES['image']['tmp_name']; 
        $imgContent = addslashes(file_get_contents($image)); 

        $sql2 = "UPDATE raise SET img='$imgContent' where chName='$a'";
        $insert= mysqli_query($con,$sql2);
         if($insert){ 
               // $_SESSION['charityname']=$a;
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            } 
            
}
 mysqli_close($con);
}
?>