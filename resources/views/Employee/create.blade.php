<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<form class="container" method="POST" action="http://localhost:8000/employee">
    @csrf
  <div class="mb-3">
    <label for="exampleInputName">Employee Name</label>
    <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter name" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputAddress">Employee Address</label>
    <input type="text" class="form-control" id="exampleInputAddress" placeholder="Enter address" name="address">
  </div>
  <div class="mb-3">
    <label for="exampleInputPhone">Employee Number</label>
    <input type="text" class="form-control" id="exampleInputAddress" placeholder="Enter phone number" name="number">
  </div>
  <div class="mb-3">
    <label for="exampleInputAadhar">Employee Aadhar</label>
    <input type="text" class="form-control" id="exampleInputAadhar" placeholder="Enter aadhar number" name="aadhar">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>