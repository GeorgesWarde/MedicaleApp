<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./style/style.css">
        <title>Blood Test Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
    <?php include_once './require/header.php';?>
    <?php require_once './php/Controllers/ehrController.php'?>
<form method="POST" action=<?php addBlood(); ?>>
                    <div class="row">
                        <div class="col-md-6">
                            Patient:
                            <input type="text" name="patient" id="" style="width:100% ;" placeholder="Name">
                        </div>
                        <div class="col-md-6">
                            Sodium (mmol/L):
                            <input type="text" name="sodium" id="" style="width:100% ;" placeholder="mmol/L">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Chloriode(mmol/L):
                            <input type="text" name="chloriode" id="" style="width:100% ;" placeholder="mmol/L">
                        </div>
                        <div class="col-md-6">
                            Bicarbonate(mmol/L):
                            <input type="text" name="bicarbonate" id="" style="width:100% ;" placeholder="mmol/L">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Urea(mmol/L):
                            <input type="text" name="urea" id="" style="width:100% ;" placeholder="mmol/L">
                        </div>
                        <div class="col-md-6">
                            Creatinine(nmol/L):
                            <input type="text" name="creatinine" id="" style="width:100% ;" placeholder="mmol/L">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            eGFR(mL/min/1.73m*m):
                            <input type="text" name="egfr" id="" style="width:100% ;"
                                placeholder="eGFR(mL/min/1.73m*m)">
                        </div>
                        <div class="col-md-6">
                            Corrected Calcium(mmol/L):
                            <input type="text" name="calcium" id="" style="width:100% ;"
                                placeholder="Corrected Calcium(mmol/L)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Potasium(mmol/L):
                            <input type="text" name="potasium" id="" style="width:100% ;" placeholder="mmol/L">
                        </div>
                        <div class="col-md-6">
                            Blood Glucose(mmol/L):
                            <input type="text" name="glucose" id="" style="width:100% ;"
                                placeholder="Blood Glucose(mmol/L)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Phosphate(mmol/L):
                            <input type="text" name="phosphate" id="" style="width:100% ;"
                                placeholder="Phosphate(mmol/L)">
                        </div>
                        <div class="col-md-6">
                            Magnesium(mmol/L):
                            <input type="text" name="magnesium" id="" style="width:100% ;"
                                placeholder="Magnesium(mmol/L)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Albumin(g/L):
                            <input type="text" name="albumin" id="" style="width:100% ;" placeholder="Albumin(g/L)">
                        </div>
                        <div class="col-md-6">
                            Haemoglobin(g/L):
                            <input type="text" name="haemoglobin" id="" style="width:100% ;"
                                placeholder="Haemoglobin(g/L)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            White Cell Count(x100000/L):
                            <input type="text" name="white" id="" style="width:100% ;"
                                placeholder="White Cell Count(x100000/L)">
                        </div>
                        <div class="col-md-6">
                            Platelets(x100000/L):
                            <input type="text" name="platelets" id="" style="width:100% ;"
                                placeholder="Platelets(x100000/L)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Thyroid Stimulating Hormone(mIU/L):
                            <input type="text" name="thyroid" id="" style="width:100% ;"
                                placeholder="Thyroid Stimulating Hormone(mIU/L)">
                        </div>
                        <div class="col-md-6">
                            Free triiodothyronine(T3)(PMOL/l):
                            <input type="text" name="triiodothyronine" id="" style="width:100% ;"
                                placeholder="Free triiodothyronine(T3)(PMOL/l)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Follicide stimulating hormone(mIU/mL):
                            <input type="text" name="follicide" id="" style="width:100% ;"
                                placeholder="Follicide stimulating hormone(mIU/mL)">
                        </div>
                        <div class="col-md-6">
                            Testosterone(nmol/L):
                            <input type="text" name="testosterone" id="" style="width:100% ;margin-top:10px;"
                                placeholder="Testosterone(nmol/L)">
                        </div>
                    </div>
                    <input type="submit" value="Add result" name="addresultBlood" class="btn btn-primary ">
                </form>
                <?php include_once './require/footer.php';?>
</body>