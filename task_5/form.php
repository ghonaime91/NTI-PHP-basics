
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register</h2>
  <form  action="validate.php"   method="POST"   enctype ="multipart/form-data">

  

  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text"  name="name"  class="form-control" id="exampleInputName"
     aria-describedby="" placeholder="Enter Name">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email"   name="email" class="form-control"
     id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"   name = "password"  class="form-control" 
    id="exampleInputPassword1" placeholder="Password">
  </div>
 
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text"  name="address"  class="form-control"  
    id="exampleInputName" aria-describedby="" placeholder="Enter Address">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Gender</label>
    <input type="radio" name="gender" value="male" > Male
    <input type="radio" name="gender" value="female"> Female  
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Linked In url</label>
    <input type="text"  name="linkedin"  class="form-control"
     id="exampleInputName" aria-describedby="" placeholder="Enter your linked in URL">
  </div>

  
  <div class="form-group">
    <label for="image">C.V</label>
    <input type="file"  name="cv"  accept="application/pdf,application/
    vnd.openxmlformats-officedocument.wordprocessingml.document">
  </div>

  <input type="submit" class="btn btn-primary">

</form>
</div>

</body>
</html>