<!Doctype html>
<html lang="en">
<head>
<title>Register</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384- rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style type="text/css"> body{
margin:0px; padding:0px;
background-image: url('bg.jpg'); background-size: cover;
}
form{
background-color:beige; margin-top: 3cm; margin-left:20cm; margin-right:8cm; padding:30px;
box-shadow: 10px 10px 8px 10px #888888;

}
</style>
</head>
<body>
<div="container">
<form>
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label"><b>Email address</b></label>
<input type="email" class="form-control" id="exampleInputEmail1" aria- describedby="emailHelp">
<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form- label"><b>Password</b></label>
<input type="password" class="form-control" id="exampleInputPassword1">
</div>
<button type="submit" class="btn btn-primary" name="Login">Submit</button>
<p style="text-align:center;">New User?<br>Create Account<a href="register.php">Sign Up</p>
</form>

</div>
</body>
</html>
