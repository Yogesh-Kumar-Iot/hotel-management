
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link  href="login.css"  rel="stylesheet">
    <title>Login</title>
  </head>
  <body>
   <div class="container-fluid">
    <form class="mx-auto"  method="post">
      <h1 class="text-center">welcome</h1>
      <div class="mb-3 mt-5" >
        <label for="exampleInputEmail1"class="arru"  class="form-label">User name</label>
        <input type="text" class="form-control"   name="mail">
       
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1"class="arru"  class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        <div id="emailHelp" class="form-text"><a href="forget.php">Forget Passward</a></div>
      </div>
    
      <button type="submit" class="btn btn-primary   mt-5"   value="Login" name="click">Login</button>
      <button class="signup  mt-5"><a href="sign.html">Sign in</a></button>
    </form>
      
   </div>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



   
  </body>
</html>