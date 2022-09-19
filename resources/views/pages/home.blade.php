<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prelim Project</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
 
</head>
<body>
    <div class="text-center">
      <br>
      <h1>Prelim Project - Page 1</h1>

      <div class="card shadow-sm mx-auto" style="width: 500px">
        <div class="card-body"> 
            <div class="card-title">Welcome Message</div> 
          <p>
            This is my First View.
          </p> 
          <nav>
            <a href="{{url('/')}}">Home</a>
            <a href="{{url('/about')}}">About Us</a>
          </nav> 
        </div>
      </div>
    </div> 
</body>
</html>
