
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
    <link rel="stylesheet" href="../../controller/Extra/style.css">
        <?php require_once('../../controller/Extra/header.php')?>
</head>
<body>
    <div class="dashvsMain">
        <div class="dashboard">
            <?php 
                require_once('../users/dashboard.php');
            ?>
        </div>
        <div class="MainBody">
            <p>My profile</p>
              <fieldset>
                    <legend><b><h2>PROFILE PICTURE</h2></b></legend>


                    <form method="post" action="profile_picture_check.php" enctype="multipart/form-data">

                        <img src="user.png" height="150px" width="150px" alt=""><br>
                        <input type="file" name="myfile"><br>
                        <hr>
                        <input type="submit" name="submit" value="Upload" >
                     </form>
                    
                </fieldset>
          
        </div>
    </div>
</body>
</html>
<?php require_once('../../controller/Extra/footer.php')?>