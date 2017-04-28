


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>



      <link rel="stylesheet" href="css/style.css">


</head>

<body>


    <div id="login">
       <form action="/loginme" method="post">
                                               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                               USERNAME : <input type="text" name="username"><br/>
                                               PASSWORD : <input type="password" name="password"><br>
                                               <input type="submit" name="login" value="Login"><br>
                                           </form>
                                           </div>


</body>
</html>





