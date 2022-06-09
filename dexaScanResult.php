<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dexa Scan Result</title>

    <link rel="stylesheet" href="style/admin.css">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <?php include_once './require/header.php' ?>

    <h3 style="justify-content:center;align-items:center;display:flex;">Anthony Saliba </h3>
    <div class="container" style="color:#00556f">
        <div class="row align-items-start">
            <div class="col" style="overflow-x: auto;">
                <table class="table mytable">
                    <thead style="color:#00556f" ;>
                        <tr>
                            <th>Region</th>
                            <th>Area(cm*cm)</th>
                            <th>BMC(g)</th>
                            <th>BMD(g/cm*cm)</th>
                            <th>T-score</th>
                            <th>Z-score</th>
                        </tr>
                        <tr>
                            <th>Neck</th>
                            <th>5.42</th>
                            <th>5.73</th>
                            <th>1.057</th>
                            <th>1.9</th>
                            <th>2.6</th>

                        </tr>
                        <tr>
                            <th>Troch</th>
                            <th>5.42</th>
                            <th>5.73</th>
                            <th>1.057</th>
                            <th>1.9</th>
                            <th>2.6</th>

                        </tr>
                        <tr>
                            <th>Inter</th>
                            <th>5.42</th>
                            <th>5.73</th>
                            <th>1.057</th>
                            <th>1.9</th>
                            <th>2.6</th>

                        </tr>
                        <tr>
                            <th>Total</th>
                            <th>5.42</th>
                            <th>5.73</th>
                            <th>1.057</th>
                            <th>1.9</th>
                            <th>2.6</th>

                        </tr>

                    </thead>
                </table>
                <button style="padding:5px;background-color:#00556f;color:white;border-radius:3px;">Print your Test</button>
            </div>
        </div>
    </div>
    <?php include_once './require/footer.php' ?>
</body>

</html>