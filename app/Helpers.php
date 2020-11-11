<?php
  
  function formatMoney($money){
    $formattedMoney = number_format($money,2);
    return $formattedMoney;
  }

    function formatDate($date){
    if (validateDate1($date) == false){
      if (validateDate2($date) == false){
          return ;
      }
    }
    $formattedDate = date ('M j, Y', strtotime($date));
    return $formattedDate;
  }

  function validateDate1($date, $format = 'Y-m-d')
{
     $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
 
}

  function validateDate2($date, $format = 'Y-m-d H:i:s')
{
     $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
 
}
