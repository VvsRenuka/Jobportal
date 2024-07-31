<?php include 'header.php'?>

<div class="content">
<p>
<!--<a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria- controls="collapseExample">
Link with href
</a>-->
<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria- controls="collapseExample">
Post Job
</button>
</p>
<div class="collapse" id="collapseExample">
<div class="card card-body">
<form action="" mathod="POST">
<div class="mb-3">
<label for="Company name" class="form-label">Company name</label>
<input type="text" class="form-control" id=""name="cname" >
</div>
<div class="mb-3">
<label for="exampleInputPosition" class="form-label">Position</label>
<input type="text" class="form-control" id="exampleInputPosition"name="position">
</div>
<div class="mb-3">
<label for="JobDesc" class="form-label">Job Description</label>
<textarea name="" id="" cols="30" rows="10" class="form-control" name="Jdesc"></textarea>
</div>
<div class="mb-3">
<label for="skills" class="form-label1">Skills</label>
<input type="text" class="form-control" id="skills"name="skills">
</div>
<div class="mb-3">
<label for="CTC" class="form-label1">CTC</label>
<input type="text" class="form-control" id="CTC"name="CTC">
</div>
<button type="submit" class="btn btn-primary"name="job">Submit</button>
</form>
</div>
</div>
<table class="table">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Company name</th>
<th scope="col">Position</th>
<th scope="col">CTC</th>
</tr>
</thead>
<tbody>
<?php
$sql="Select cname,position,CTC from jobs";
$result = mysqli_query($conn, $sql); if($result->num_rows>0){
while($rows=$result->fetch_assoc()){
$i=0; echo"<td>".++$i."</td>
<td>".$rows['cname']."</td>
<td>".$rows['position']."</td>
<td>".$rows['CTC']."</td>";

}
}
else{
echo "";
}
?>
</tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min
.js" integrity="sha384- kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
