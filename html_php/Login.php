<!--
Into this file, we create a layout for login page.
-->

<?php
include_once('header.php');
include_once('link.php');

?>
<!DOCTYPE html>
<html>
<head>
  <title>
    User login
  </title>
</head>
<style>
     @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}
body{
  background: #F2F3F4;
  padding: 0 10px;
}
.wrapper{
  max-width: 500px;
  width: 100%;
  background: #fff;
  margin: 20px auto;
  box-shadow: 1px 1px 2px rgba(0,0,0,0.125);
  padding: 30px;
}

.wrapper .title{
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 25px;
  color: #0D4779;
  text-transform: uppercase;
  text-align: center;
}

.wrapper .form{
  width: 100%;
}


.wrapper .form .inputfield{
  margin-bottom: 15px;
  display: flex;
  align-items: center;
}
.wrapper .form .inputfield .input{
  width: 100%;
  outline: none;
  border: 1px solid #d5dbd9;
  font-size: 15px;
  padding: 8px 10px;
  border-radius: 3px;
  transition: all 0.3s ease;
}


.wrapper .form .inputfield label{
   width: 200px;
   color: #757575;
   margin-right: 10px;
  font-size: 14px;
}

  .wrapper .form .inputfield .btn{
  width: 100%;
   padding: 8px 10px;
  font-size: 15px; 
  border: 0px;
  background:  #0D4779;
  color: #fff;
  cursor: pointer;
  border-radius: 3px;
  outline: none;
}

.wrapper .form .inputfield .btn:hover{
  background: #66ff58;
}

.wrapper .form .inputfield:last-child{
  margin-bottom: 0;
}

@media (max-width:420px) {
  .wrapper .form .inputfield{
    flex-direction: column;
    align-items: flex-start;
  }
  .wrapper .form .inputfield label{
    margin-bottom: 5px;
  }
  .wrapper .form .inputfield.terms{
    flex-direction: row;
  }
}
  
</style>
<body>
  <div class="wrapper">
    <div class="title">
     User login 
    </div>
    <div class="form">

<div id="frmRegistration">
<form class="form-horizontal" method="POST" action="login_code.php">
	
	
  <div class="inputfield">
          <label>Email Address</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
       </div> 
        <div class="inputfield">
          <label>Password</label>
          <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
       </div> 
 
<div class="inputfield">
        <input type="submit" value="Login" class="btn">
      </div>
</form>
</div>