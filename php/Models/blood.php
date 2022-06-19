<?php

class BloodTest
{
    public $Id, $sodium,$potasium,$chloriode,$bicarbonate,$urea,$creatinine,$eGFR,$CorrectedCalcium,
    $Phosphate,$Magnesium,$Albumin,$Haemoglobin,$WhiteCellCount,$Platelets,
    $ThyroidStimulatingHormone,$FreeTriiodothyronine,$FollicleStimulatingHormone,$Testosterone,$Glucose,$ehrId;


    public function __construct($Id, $sodium,$potasium,$chloriode,$bicarbonate,$urea,$creatinine,$eGFR,$CorrectedCalcium,
    $Phosphate,$Magnesium,$Albumin,$Haemoglobin,$WhiteCellCount,$Platelets,
    $ThyroidStimulatingHormone,$FreeTrioodothyronine,$FollicleStimulatingHormone,$Testosterone,$Glucose,$ehrId)
    {
        $this->Id = $Id;
        $this->sodium = $sodium;
        $this->potasium=$potasium;
        $this->chloriode=$chloriode;
        $this->bicarbonate=$bicarbonate;
        $this->urea=$urea;
        $this->creatinine=$creatinine;
        $this->eGFR=$eGFR;
        $this->CorrectedCalcium=$CorrectedCalcium;
        $this->Phosphate=$Phosphate;
        $this->Magnesium=$Magnesium;
        $this->Albumin=$Albumin;
        $this->Haemoglobin=$Haemoglobin;
        $this->WhiteCellCount=$WhiteCellCount;
        $this->Platelets=$Platelets;
        $this->ThyroidStimulatingHormone=$ThyroidStimulatingHormone;
        $this->FreeTriiodothyronine=$FreeTrioodothyronine;
        $this->FollicleStimulatingHormone=$FollicleStimulatingHormone;
        $this->Testosterone=$Testosterone;
        $this->Glucose=$Glucose;
        $this->ehrId=$ehrId;

    }

    public function createBlood($mysqli)
    {
        $query = "insert into bloodtest (sodium,potasium,chloriode,bicarbonate,urea,creatinine,eGFR,CorrectedCalcium,Phosphate,Magnesiu00m,Albumin,Haemoglobin,WhiteCellCount,Platelets,ThyroidStimulatingHormone,FreeTrioodothyronine,FollicleStimulatingHormone,Testosterone,Glucose,ehrId) values('"
            . $this->sodium . "', '" . $this->potasium . "', '" . $this->chloriode . "', '" . $this->bicarbonate . "', '"
            . $this->urea. "', '" . $this->creatinine . "', '" . $this->eGFR . "', '" . $this->CorrectedCalcium ."', '" . $this->Phosphate ."'
            , '" . $this->Magnesium ."'  , '" . $this->Albumin."' , '" . $this->Haemoglobin ."'  , '" . $this->WhiteCellCount ."' , '" . $this->Platelets ."'
            , '" . $this->ThyroidStimulatingHormone ."', '" . $this->FreeTriiodothyronine."', '" . $this->FollicleStimulatingHormone ."' , '" . $this->Testosterone .", '" . $this->Glucose ."', '" . $this->ehrId ."');";
                            
        if (mysqli_query($mysqli, $query)) return true;
        return false;
    }
}
