<?php

    $file_info = $_FILES['myfile'];
    $path = 'Upload/' .$file_info['name'];

    if (move_uploaded_file($file_info['tmp_name'], $path))
    {
    	echo "Picture Upload Successfully";

    }else{
    	echo "error";
    }



?>