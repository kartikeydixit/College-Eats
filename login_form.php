<!DOCTYPE html>
<html>
<head>
<title>Feedback form</title>
<link rel="stylesheet" type="text/css" href="./registyle.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<head>
<body style="background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('./images/fruit.jpg');">

	<div class="form" style="background: rgb(58,180,164);
background: linear-gradient(90deg, rgba(58,180,164,1) 0%, rgba(238,215,215,1) 55%, rgba(208,252,69,1) 100%);  height:100vh; border-radius: 5px">


			<img class="image" src="./images/logo.png" alt=""><br><br>
<form action="login.php" method="POST" autocomplete="off">

<input class="input" type="text" name="name" placeholder="Name" required><br><br>

<input class="input" type="password" name="password" placeholder="please enter your password" required><br><br>


<select class="input" name="canteen" >
  <option value="chichi">chichi</option>
  <option value="bika">bika</option>
  <option value="yamuna">yamuna</option>
  <option value="raj">raj</option>
</select> <br><br>

<!-- <input class="input" type="text" name="canteen" placeholder="Canteen" required><br><br> -->

<select class="input" name="item" >
  <option value="samosa">samosa</option>
  <option value="aloo-paratha">Aloo paratha</option>
  <option value="cold-drink">cold drink</option>
  <option value="maggi">maggi</option>
  <option value="chai">chai</option>
  <option value="sandwich">sandwich</option>
  <option value="coffie">coffie</option>
</select> <br><br>

<textarea class="input" type="text" rows="5" cols="40" name="feedback" placeholder="enter your feedback here" required></textarea><br><br>

<input  class="input" style="border:none;  border-radius:25px; background:red;color:white" type="submit"  name="submit" value="Submit"> 
 <br><br>

<button class="input" style="border:none; background:blue; border-radius:25px; "><a style="color:white;text-decoration:none" href="registration_form.php">Register Here</a></button>
</form>
</div>
</body>
</head>