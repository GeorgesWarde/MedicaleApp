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
                <div class="radio">
                    <input type="radio" name="detail" id="" value="Dr">Dr
                    <input type="radio" name="detail" id="" value="Mrs">Mrs
                    <input type="radio" name="detail" id="" value="Miss">Miss
                    <input type="radio" name="detail" id="" value="Mr">Mr
                </div>
                <div class="firstname">
                    First name:
                    <input type="text" name="fname" id="" placeholder="first name">
                </div>
                <div class="firstname">
                    Last name:
                    <input type="text" name="fname" id="" placeholder="last name">
                </div>
                <div class="firstname">
                    Gender:
                    <select name="gender" id="">
                        <option value="male">Male</option>
                        <option value="female">Female</option>

                    </select>
                </div>
                <div class="firstname">
                    Date of birth:
                    <input type="date" name="fname" id="">
                </div>
                <div class="firstname">
                    Test:
                    <input type="text" name="test" id="" value="PCR">
                </div>
                <div class="firstname">
                    Medical:
                    <select name="medical">
                        <option value="1">Panadol</option>
                    </select>
                </div>
                <div class="firstname">
                    Payment in LL:
                    <input type="number" name="payment" id="" placeholder="Payment">
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