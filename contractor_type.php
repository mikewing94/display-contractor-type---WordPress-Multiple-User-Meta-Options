<?php
  $user_id = $_GET['uid'];
  $bussupport = 'contractor_business_support_hrm';
  $imporoveplant = 'contractors_improve_plant';
  $quality= 'contractors_quality_shes';
  $opsupport = 'contractors_operational_support';
  $manufacturing = 'contractor_manufacturing';
  $none = "N/A";

  $single = true;
  $contractor = get_user_meta( $user_id, $bussupport, $single );
  $contractor2 = get_user_meta( $user_id, $imporoveplant, $single );
  $contractor3 = get_user_meta( $user_id, $quality, $single );
  $contractor4 = get_user_meta( $user_id, $opsupport, $single );
  $contractor5 = get_user_meta( $user_id, $manufacturing, $single );


  echo "<h3>Contractor Type</h3>";
  echo "</br>";

  echo "<h4>";
  if ($contractor == $none){
  }

  elseif ($contractor == '') {
  }

  else {
      echo "Contractor - Business Support /HRM: ";
      echo $contractor;
      echo "</br>";
  }

  if ($contractor2 == $none){
  }

  elseif ($contractor2 == '') {
  }

  else {
      echo "Contractor - Improve Plant: ";
      echo $contractor2;
      echo "</br>";
  }

  if ($contractor3 == $none){
  }

  elseif ($contractor3 == '') {
  }

  else {
      echo "Contractor - Quality/SHES: ";
      echo $contractor3;
      echo "</br>";
  }

  if ($contractor4 == $none){
  }

  elseif ($contractor4 == '') {
  }

  else {
      echo "Contractor - Operational Support: ";
      echo $contractor4;
      echo "</br>";
  }

  if ($contractor5 == $none){
  }

  elseif ($contractor5 == '') {
  }

  else {
      echo "Contractor - Manufacturing: ";
      echo $contractor5;
      echo "</br>";
  }

  echo "</h4>";

?>
