<?php 
    
    if (isset($_POST['submit'])) {
        $name=$_POST['Username'];
        $pass=$_POST['Password'];

        if (preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/', $Username) && strlen($Username)>=2 ) {
           
            if ( strpos($Password, '@') || strpos($Password, '#') || strpos($Password, '$') || strpos($Password, '%') && $Password<8){
                echo $Username."<br>";
                echo $Password;
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
    <form method="POST" action="User.php">
        <fieldset>
            <legend>LOGIN</legend>
             <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="Username" value=""> </td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td><input type="Password" name="Password" value=""> </td>
                </tr>

                <tr>
                    <td></td>
                 <td> <input type="submit" name="submit" value="Submit">
                <a href="Forgor">Forgot Password?</a></td> 
                </tr>


            </table>

   

        
       </fieldset>
        
    </form>

</body>
</html>