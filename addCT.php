<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./style/style.css">
        <title>Blood Test Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
    <?php include_once './require/header.php';?>

<form id="ct" method="post" enctype="multipart/form-data" style="margin-top:10px;">
                    Scan 1:
                    <input type="file" name="pic1" id="">
                    Scan 2:
                    <input type="file" name="pic2"><br>
                    Scan 3:
                    <input type="file" name="pic3" style="margin-top:10px;">
                    Scan 4:
                    <input type="file" name="pic4" style="margin-top:10px;"><br><br>
                    <input type="submit" value="add scan" name="addctscan" class="btn btn-primary"
                        style="text-transform:uppercase ;">
                </form>
                <?php include_once './require/footer.php';?>
</body>
