<?php 
    
    if (isset($_POST['submit'])) {
        $name=$_POST['name'];
        $pass=$_POST['pass'];

        if (preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/', $name) && strlen($name)>=2 ) {
           
            if ( strpos($pass, '@') || strpos($pass, '#') || strpos($pass, '$') || strpos($pass, '%') && $pass<8){
                echo $name."<br>";
                echo $pass;
            }
            else {
                echo "must contain 8 char and contain at least one of the special characters (@, #, $, %)";
            }
        }
        else {
            echo"must contain alpha numeric and '_' and contain atleat 2 character";
        }

    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Name Input field</title>
</head>
<body>
    <form method="POST" action="">
        <fieldset>

         <legend>LOGIN</legend>
         Name:         <input type="text" name="name" value=""><br>
         Password:     <input type="password" name="pass" value=""><br>
         <br>
                       
                       <input type="checkbox" checked="checked"> Remember me 
                   </br>

                      <br> <input type="submit" name="submit" value="Submit">

        
       </fieldset>
        
    </form>

</body>
</html>