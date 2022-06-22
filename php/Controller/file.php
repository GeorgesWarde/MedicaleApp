<?php
class file
{
    function getFile($name)
    {
        if (!empty($_FILES["{$name}"]["name"])) {
            $file = rand() . $_FILES['' . $name . '']['name'];
            $file_loc = $_FILES['' . $name . '']['tmp_name'];
            $folder = "./public/uploads/";
            $new_file_name = strtolower($file);
            $final_file = str_replace(' ', '-', $new_file_name);
            move_uploaded_file($file_loc, $folder . $final_file);
            return $final_file;
        } else {
            return false;
        }
    }
}