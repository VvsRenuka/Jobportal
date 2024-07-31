!Doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-compatible" content="IE=edge">
<meta name="viewport" content="width-device-width,initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384- rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style> body{
background-image: url('bg.jpg'); background-size: cover;
}
form{
background-color: beige; margin-top: 3cm;
margin-left:20cm; margin-right:8cm; padding:30px;
box-shadow: 10px 10px 8px 10px #888888;
}
</style>
<title>Register</title>
</head>
<body>
<div="container">
<form action=""method="POST">
<div class="mb-3">
<label for="exampleInputName" class="form-label"><b>Full Name</b></label>
<input type="text" class="form-control" id="exampleInputName" name="name">
</div>
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label"><b>Email address</b></label>
<input type="email" class="form-control" id="exampleInputEmail1" aria-
describedby="emailHelp"name="email">
<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>
<div class="mb-3">
<label for="exampleInputNumber" class="form-label"><b>Phone number</b></label>
<input type="number" class="form-control" id="exampleInputName" name="phone_no">
</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form- label"><b>Password</b></label>
<input type="password" class="form-control" id="exampleInputPassword1" name="password">
</div>
<div class="mb-3">
<label for="exampleInputPassword2" class="form-label"><b>Confirm Password</b></label>
<input type="password" class="form-control" id="exampleInputPassword2">
</div>
<button type="submit" class="btn btn-primary"name="submit">Submit</button>
<br>
Already Registered? <a href="login.php">Login</a>
</form>
</div>
</body>
</html>
