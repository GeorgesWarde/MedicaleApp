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
    <div class="ehr">
        <div class="container-xl">
            <h2>Patient e-file form</h2>
            <form action="" method="post">
               
                <div class="firstname">
                    First name:
                    <input type="text" name="fname" id="" placeholder="first name">
                </div>
                <div class="firstname">
                    Last name:
                    <input type="text" name="lname" id="" placeholder="last name">
                </div>
               
                <div class="firstname">
                    Date of birth:
                    <input type="date" name="dateBirth" id="">
                </div>
                <div class="firstname">
                    Blood Type:
                    <select name="typeBlood" id="">
                        <option value="A+">A+</option>
                        <option value="O-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB">AB</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>

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
                    <input type="date" name="dateVisit" id="">
                </div>
                
               
                <div class="firstname">
                    Symptoms:
                    <input type="text" name="symptoms" id="">
                </div>
                <div class="firstname">
                    Allergy:
                    <input type="text" name="allergy" id="">
                </div>
                <div class="firstname">
                    Test Recomended:
                    <select name="Test" id="">
                        <option value="male">Blood Test</option>
                        <option value="female">Dexa Scan</option>
                        <option value="female">Covid-19</option>


                    </select>
                </div>
                <div class="firstname">
                    Payment:
                    <input type="text" name="payment" id="" placeholder="payment in LL">
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