<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384- rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font- awesome/6.2.1/css/all.min.css" integrity="sha512- MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7 lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>Dashboard</title>
<style>
.sidebar { margin: 0; margin-top: 1px; padding: 0; width: 200px;
background-color: #f1f1f1; position: fixed;
height: 100%; overflow: auto;
}

.sidebar a { display: block; color: black; padding: 16px;
text-decoration: none;
}

.sidebar a.active { background-color: #04AA6D; color: white;
}

.sidebar a:hover:not(.active) { background-color: #555; color: white;
}

div.content { margin-top: 60px;
margin-left: 200px; padding: 1px 16px; height: 1000px;
}

@media screen and (max-width: 700px) {
.sidebar {
    width: 100%; height: auto; position: relative;
}
.sidebar a {float: left;} div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
.sidebar a {
text-align: center; float: none;
}
}
.navbar{ overflow:Hidden;
background-color: #555; position: fixed;
top:0; width:100%;
}
.content .table .btn { background-color: DodgerBlue; border: none;
color: white; padding: 12px 30px; cursor: pointer; font-size: 20px;
}

/* Darker background on mouse-over */
.content .table .btn:hover { background-color: RoyalBlue;
}
</style>
</head>
<body>
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
