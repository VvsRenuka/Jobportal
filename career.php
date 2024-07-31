<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Career</title>
<style>
.main-section1{
background-image: url('bg2.jpg'); background-position: center; background-size: cover;
height: 300px;
}
.bg-opacity{
background:linear-gradient(90deg,rgba(0,0,0,0)); height: 300px;
}
.main-section1 h1{ color:white; font-size: 60px;
text-align:center;
font-family:Verdana, Geneva, Tahoma, sans-serif;
}
.main-section1 p{ color:white; font-size: 20px;
text-align:center;
font-family:Verdana, Geneva, Tahoma, sans-serif;
}
</style>
</head>
<body>
<div class="main-section1">
<div class="bg-opacity">
<h1>JOB PORTAL</h1>
<p>website shows the jobs related to our matching skills</p>
</div>
</div>
<div class="row">
<?php
$sql="SELECT cname,position,Jdesc,CTC,skills from jobs";
$result=mysqli_Query($conn,$sql); if($result->num_rows>0){
while($rows=$result->fetch_assoc()){ echo'
<div class="col-md-3">
<div class="jobs">
<h1 style= "text-align:left;">'.$rows['position'].'</h1>
<h5 style="text-align:left;">'.$rows['cname'].'</h5.
<p style="color:black;text-align:justify;">'.$rows['Jdesc'].'</p>
<p style="color:black;"><b>Skills required:</b>'.$rows['skills'].'</p>
<p style="color:black;"><b>CTC:</b>'.$rows['CTC'].'</p>
<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria- controls="collapseExample">
Apply Now
</button>
</div>
</div>';
}
}
?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria- labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h1 class="modal-title fs-5" id="exampleModalLabel">Apply Job</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria- label="Close"></button>
</div>
<div class="modal-body">
<form method="POST">
<div class="mb-3">
<label for="recipient-name" class="col-form-label">Name:</label>
<input type="text" class="form-control" name="name">
</div>
<div class="mb-3">
<label for="message-text" class="col-form-label">Applying for:</label>
<input type="text" class="form-control" name="apply">
</div>
<div class="mb-3">
<label for="recipient-name" class="col-form- label">Qualification:</label>
<input type="text" class="form-control" name="qual">
</div>
<div class="mb-3">
<label for="recipient-name" class="col-form-label">Year passout:</label>
<input type="text" class="form-control" name="year">
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs- dismiss="modal">Close</button>
<button type="submit" name="submit" class="btn btn- primary">Apply</button>
</form>
</div>
</div>
</div>
</div>
</body>
</html>
