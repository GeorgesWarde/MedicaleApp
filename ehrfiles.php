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
    <?php require_once('./php/Controllers/ehrController.php')?>
    <div class="ehr">
        <div class="container-xl">
            <h2>Patient e-file form</h2>
            <form method="POST" action=<?php createEhr()?>  >
               
                <div class="firstname">
                    First name:
                    <input type="text" name="firstName" id="" placeholder="first name">
                </div>
                <div class="firstname">
                    Last name:
                    <input type="text" name="lastName" id="" placeholder="last name">
                </div>
               
                <div class="firstname">
                    Date of birth:
                    <input type="date" name="dateofBirth" id="">
                </div>
                <div class="firstname">
                    Blood Type:
                    <select name="bloodType" id="">
                        <option value="A+">A+</option>
                        <option value="O+">O+</option>

                    </select>
                </div>
                <div class="firstname">
                    City:
                    <input type="text" name="city" id="" placeholder="City">
                </div>
                <div class="firstname">
                    Gender:
                    <select name="gender" id="">
                        <option value="male">Male</option>
                        <option value="female">Female</option>

                    </select>
                </div>
                <div class="firstname">
                    Date of Visit:
                    <input type="date" name="date" id="">
                </div>
                
               
                <div class="firstname">
                    Problems:
                    <select name="gender" id="">
                        <option value="male">Diabet</option>
                        <option value="female">Anxiety</option>

                    </select>
                </div>
                <div class="firstname">
                    Allergy:
                    <select name="gender" id="">
                        <option value="male">High Fat food</option>
                        <option value="female">Anxiety</option>

                    </select>
                </div>
                <div class="firstname">
                    Test Recomended:
                    <select name="Test" id="">
                        <option value="male">Blood Test</option>
                        <option value="female">Dexa Scan</option>
                        <option value="female">Covid-19</option>


                    </select>
                </div>
                <div class="submit">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
    <?php include_once './require/footer.php'; ?>
</body>
</html>