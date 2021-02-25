<?php


if (isset($_POST['submit'])){

    $Password = $_POST['Password'];
    $newPassword = $_POST['newPassword'];

    if ($Password = $newPassword){
        echo "Password Changed";
        
    }else{
        echo "Password did not match";
    }
}



?>



<!DOCTYPE html>
<html>
<head>
    <title>Name Input field</title>
</head>
<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>CHANGE PASSWORD</legend>
             <table>
                <tr>
                    <td>Current Password:</td>
                    <td><input type="text" name="Current" value=""> </td>
                </tr>

                <tr>
                    <td>New Password:</td>
                    <td><input type="Password" name="Password" value=""> </td>
                </tr>

                <tr>
                    <td>Retype New Password:</td>
                    <td><input type="newPassword" name="newPassword" value=""> </td>
                </tr>

                <tr>
                    
                 <td> <input type="submit" name="submit" value="Submit"> </td> 
                </tr>


            </table>

   

        
       </fieldset>
        
    </form>

</body>
</html>