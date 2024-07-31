<?php include 'header.php'?>
<div>
<nav class="navbar navbar-expand-lg bg-light navbar=fixed">
<div class="container-fluid">

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="#"><h6>Admin dashboard</h6></a>
</li>
</ul>
</div>
</div>
</nav>
</div>
<div class="sidebar">
<a class="active" href="#home">Jobs</a>
<a href="#jobs">Candidates applied</a>
<a href="#contact">Contact</a>
<a href="#about">About</a>
</div>

<div class="content">
<table class="table">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Candidate name</th>
<th scope="col">Position</th>
<th scope="col">Year passout</th>
<th scope="col">Applied for</th>
</tr>
</thead>
<tbody>
<?php
$sql="Select name,apply,year from candidates";
$result=mysqli_query($conn,$sql);
$i=0;
if($result->num_rows>0){ while($rows=$result->fetch_assoc()){
echo'
<tr>
<th scope="row">'.++$i.'</th>
<td>'.$rows['name'].'</td>
<td>'.$rows['apply'].'</td>
<td>'.$rows['year'].'</td>
</tr>';}} else{
echo"";
}
?>
</tbody>
</table>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font- awesome/6.2.1/js/all.min.js" integrity="sha512- rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4r fxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
