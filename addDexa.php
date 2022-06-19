<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./style/style.css">
        <title>Blood Test Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
    <?php include_once './require/header.php';?>

<form  method="post" >
                    <div class="row">
                        <div class="col-md-6">
                            Patient:
                            <input type="text" name="patientDexa" id="" required style="width:100% ;">
                        </div>
                        <div class="col-md-6">
                            BMC(g):
                            <input type="text" name="bmc" id="" required style="width:100% ;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Area(cm*cm):
                            <input type="text" name="area" id="" required style="width:100% ;">
                        </div>
                        <div class="col-md-6">
                            Z-score:
                            <input type="text" name="zscore" id="" required style="width:100% ;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            BMD(g/cm*cm):
                            <input type="text" name="bmd" id="" required style="width:100% ;">
                        </div>
                        <div class="col-md-6">
                            T-score:
                            <input type="text" name="tscore" id="" required style="width:100% ;">
                        </div>
                    </div>
                    <input type="submit" value="Add result" name="addresultDexa" class="btn btn-primary "style="margin-top:10px;">
                </form>
                <?php include_once './require/footer.php';?>
    </body>
</html>