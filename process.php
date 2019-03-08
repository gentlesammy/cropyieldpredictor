<?php

  if (isset($_POST)) {
    if (empty($_POST))
    {
      echo "all fields are required";
    } else
    {
      $fertility = $_POST['fertility'];
      $rainfall = $_POST['rain'];
      $temperature = $_POST['temperature'];

    }
    //function to get the qty value of each data entered.
    //do it for four values, testing each three times,

    //soil fertility
      if ($fertility < 36) {
        $ftscore = "low";
      } else if($fertility > 35 && $fertility<=50 ) {
        $ftscore = "medium";
      }else{
        $ftscore = "high";
      }
      //rainfall
      if ($rainfall < 1001) {
        $rascore = "low";
      } else if($rainfall > 1000 && $rainfall<=2000 ) {
        $rascore = "medium";
      }else{
        $rascore = "high";
      }

      // $temperature
      if ($temperature < 27) {
        $tescore = "low";
      } else if($temperature > 26 && $temperature<=34 ) {
        $tescore = "medium";
      }else{
        $tescore = "high";
      }

      //test final

      if( $tescore == 'high' &&  $ftscore== 'high' && $rascore =="high" ){
        $verdict = "yield will be high. congratulations";
        $analysis = "you have high soil fertility, high rainfall and high temperature these will be boost your level of crop yield";
      }
      elseif( $tescore == 'low' &&  $ftscore== 'low' && $rascore =="low" ){
        $verdict = "yield will be low. congratulations";
        $analysis = "you have low soil fertility, low rainfall and low temperature these are main requirement and thus will affect your level of crop yield";
      }
      elseif( $tescore == 'high' &&  $ftscore== 'low' && $rascore =="low" ){
        $verdict = "yield will be low.";
        $analysis = "you have low soil fertility, low rainfall  these  will affect your level of crop yield";
      }
      elseif( $tescore == 'low' &&  $ftscore== 'low' && $rascore =="medium" ){
        $verdict = "yield will be low.";
        $analysis = "you have low temperature and low soil fertility  these  will affect your level of crop yield";
      }
      elseif( $tescore == 'low' &&  $ftscore== 'medium' && $rascore =="medium" ){
        $verdict = "yield will be medium.";
        $analysis = "Even though you have low temperature, you have  medium soil fertility and medium rainfall these  will boost your level of crop yield";
      }
      elseif( $tescore == 'high' &&  $ftscore== 'medium' && $rascore =="low" ){
        $verdict = "yield will be medium.";
        $analysis = "Even though you have low rainfall, you have  medium soil fertility and high temperature these  will boost your level of crop yield to medium";
      }
      elseif ( $tescore == 'medium' &&  $ftscore== 'medium' && $rascore =="medium" ){
        $verdict = "yield will be medium. ";
        $analysis = "you have medium soil fertility, medium rainfall and medium temperature these will  boost your level of crop yield to medium";
      }
      elseif( $tescore == 'high' &&  $ftscore== 'high' && $rascore =="medium" ){
        $verdict = "yield will be high. congratulations";
        $analysis = "Even though you have medium rainfall, you have  high soil fertility and high temperature  these  will boost your level of crop yield to high";
      }
      elseif( $tescore == 'high' &&  $ftscore== 'high' && $rascore =="low" ){
        $verdict = "yield will be high. congratulations";
        $analysis = "Even though you have low rainfall, you have  high soil fertility and high temperature  these  will boost your level of crop yield to high";
      }
      elseif( $tescore == 'high' &&  $ftscore== 'medium' && $rascore =="medium" ){
        $verdict = "yield will be high. congratulations";
        $analysis = "Even though you have medium rainfall and medium soil fertility, you have high temperature  this  will boost your level of crop yield to high";
      }else {
        $verdict = "hmmm....Undecided";
        $analysis = "We can not decide the level of your crop yield currently, please check back later";
      }


















      $result = [
        'verdict' => $verdict,
        'analysis' => $analysis
      ];
















      echo json_encode($result);











  }



 ?>
