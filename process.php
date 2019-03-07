<?php

  if (isset($_POST)) {
    if (empty($_POST))
    {
      echo "all fields are required";
    } else
    {
      $fertility = $_POST['fertility'];
      $rainfall = $_POST['rain'];

    }
    //function to get the qty value of each data entered.
    //do it for four values, testing each three times,
      if ($fertility < 36) {
        $ftscore = "low";
      } else if($fertility > 35 && $fertility<=50 ) {
        $ftscore = "medium";
      }else{
        $ftscore = "high";
      }

      if ($rainfall < 1001) {
        $rascore = "low";
      } else if($rainfall > 1000 && $rainfall<=2000 ) {
        $rascore = "medium";
      }else{
        $rascore = "high";
      }


      if($ftscore == 'high' && $rascore == 'high' ){
        $verdict = "yield will be high. congratulations";
        $analysis = "you have high fertility and high rainfall, this will be boost your level of crop yield";
      }else{
        $verdict = "yield will be medium";
        $analysis = "you have medium fertility and high medium rainfall, this will affect your level of crop yield";
      }
      $result = [
        'verdict' => $verdict,
        'analysis' => $analysis
      ];

      echo ($result); 











  }



 ?>
