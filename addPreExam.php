<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EHR Files</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <?php include_once './require/header.php'; ?>
    <?php require_once('./php/Controllers/preExamsController.php')?>
    <?php require_once("./php/Controllers/painTypeController.php")?>
    <div class="ehr">
        <div class="container-xl">
            <h2>Patient e-file form</h2>
            <form method="POST" action=<?php createPreExam()?>  >
               
              
               
                <div class="firstname">
                    Date :
                    <input type="date" name="date" id="">
                </div>
                <div class="firstname">
                    Temperature:
                    <input type="text" name="Temperature" id="" placeholder="Temperature">
</div>
                  <div class="firstname">
                    Pulse Rate:
                    <input type="text" name="PulseRate" id="" placeholder="PulseRate">
                    </div>
                    <div class="firstname">
                    Blood Pressure:
                    <input type="text" name="BloodPressure" id="" placeholder="BloodPressure">
                    </div>
                    <div class="firstname">
                    Pain Type:
                    <select name="PainType" id="">
                   <?php getAllPainTypes();?>
                    </select>
                </div>
                
               
                <div class="submit"style="justify-content:center;display:flex;align-items:center;">
                    <input  type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
    <?php include_once './require/footer.php'; ?>
</body>
</html>