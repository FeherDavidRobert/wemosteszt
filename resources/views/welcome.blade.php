<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<meta name="csrf-token" content="{{ csrf_token() }}">

<title>Ledkapcsolo</title>

</head>

<body>

<div class="container">

<div class="row">

 <div class="col">

<button class="btn btn-success w-100" onclick="kapcsol('fel');">BE</button>

</div>

<div class="col">

<button class="btn btn-danger w-100" onclick="kapcsol('le');">KI</button>

 </div>

</div>

</div>

<div class="container">

 <div class="row">

<div class="col">

<textarea id="valasz" class="form-control"></textarea>

</div>

 </div>

</div>




<script>

function kapcsol(allapot){

 $.ajax({

headers: {

'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

},

method:"GET",

url:"http://192.168.1.116/"+allapot, 

success:function(data){

$("#valasz").html(data);

}

});

}

</script>

</body>

</html>