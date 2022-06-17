<?php
require_once('./php/connection.php');

require_once('./php/Models/painType.php');


// authorized for all logged in users
function getAllPainTypes()
{   // returns list of pain types (id, name, desc)
    $mysqli = connect();
    
    $painTypes = PainType::getAll($mysqli);
    
    foreach($painTypes as $p){
        echo "<option>".$p->name."</option>";
    }
}
