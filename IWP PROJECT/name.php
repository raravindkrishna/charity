<html>
<head>
  <title>Donate - Responsibility</title>
  <link rel="icon" type="image/x-icon" href="Images/favicon.webp">
  <link rel="stylesheet" href="CSS/donateform.css" />
  <script>function validateform(){

    // var cnamereg=/^[a-zA-Z\s]+$/g;
    var Cname=document.getElementById('Cname').value;
    if(Cname==""){
      alert('Kindly Enter a Charity Name');
      return false;
    }

    var purpose=document.getElementById('purp').value;
    if(purpose==""){
      alert('Kindly Enter the purpose of Charity');
      return false;
    }

    var jsfounder=document.getElementById('Founder').value;
    // var founderreg=/^[a-zA-Z\s]+$/g;
    if(jsfounder==""){
      alert('Kindly Enter Your Name');
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



  <style>
    body {
      background-color: #ecf4e9;
      margin: 0px;
    }

    .form11 {
      margin: 0 auto;
      width: 85%;
      position: relative;
      top: 150px;
      background-color: white;
      padding: 15px;
    }

    .s11 {
      position: relative;
      text-align: left;
      font-family: sans-serif;
    }

    .s12 {
      font-size: 20px;
      position: relative;
      right: 130px;
      top: 10px;
      font-family: sans-serif;
    }

    .t12 {
      position: relative;
      right: 60px;
      width: 50%;
      font-family: sans-serif;
    }

    .r12 {
      position: relative;
      right: 250px;
      font-family: sans-serif;
    }

    .r13 {
      position: relative;
      left: 140px;
    }

    .r14 {
      position: relative;
      left: 140px;
      text-align: left;
      font-family: sans-serif;
    }

    .b12 {
      font-family: sans-serif;
      width: 100px;
      font-weight: 700;
      color: white;
      background-color: black;
      position:relative;
      left:0;
    }

    .b11 {
      font-family: sans-serif;
      width: 150px;
      font-weight: 700;
      color: white;
      background-color: black;
      position:relative;
      left:0;
    }

    footer {
      position: relative;
      top: 220px;
    }

    legend {
      font-family: sans-serif;
    }

    #fd2 {
      margin-top: 30px;
      margin-bottom: 30px;
    }
  </style>

</head>

<body>
  <header>
    <nav class="n">
      <ul>
        <span>
          <li><img src="Images/favicon.webp" alt=""></li>
          <li class="l1"><a href="index.html"> &nbsp;&nbsp;Responsibility</a></li>
          <div>

          </div>
          <button class="b1" name="Hello">
            <a href="#login"> Login</a>
          </button>
        </span>
      </ul>
    </nav>
  </header>

  <div class="form11">
    <form action="RaiseCharityRedirect.php" enctype="multipart/form-data" name="f1" id="f1" method="POST" onsubmit="return validateform()">

      <fieldset>
        <legend>Raise Charity</legend>

        <label class="s11" for="">Name of the Charity</label>
        <input class="t12" type="text" id="Cname" name="Cname" placeholder="Enter Name of the Charity..." >
        <br>
        <label class="s11" for="">Purpose</label>
        <input class="t12" type="textarea" id="purp" name="purp" placeholder="Enter Purpose" >
        <br>

        <label class="s11" for="">Founder</label>
        <input class="t12" type="text" placeholder="Enter Your Name..." id="Founder"
          name="Founder">
        <br>
        <label class="s11">Charity Cover Image</label>
        <input type="file" id="cimg" name="image" value="" required>

      </fieldset>
        <br>
      <input class="b11" name="submitbut" type="submit" value="Create">

    </form>
  </div>





  <footer>
    <div class="part4-1">
      <img src="Images/favicon.webp" alt="">
      <span>&nbsp;&nbsp;Responsibility</span>
      <p>
        Responsibility is the community-focused nonprofit donor management software built to deliver a better giving
        experience and help organizations thrive.
      </p>
    </div>
    <div class="part4-2">
      <table border="0px" cellspacing="1px" align="right">
        <tr class="td2">
          <td><a href="#"><img style="padding-left:0px;" src="Images/l1.jpg" alt="Facebook"></a>
            <a href="#"><img style="padding-left:0px;" src="Images/l2.png" alt="Twitter"></a>
            <a href="#"><img style="padding-left:0px;" src="Images/l3.png" alt="Linked In">
          </td>
        </tr>
        <tr class="td1">
          <td><a href="#">Privacy Policy</a> <a href="#">Security Policy</a> <a href="#">Openness</a> <a
              href="#">GDPR</a></td>
        </tr>
        <tr class="td3">
          <td>Copyright © 2022 Responsibility® All Rights Reserved</td>
        </tr>
      </table>
    </div>

  </footer>
</body>

</html>
