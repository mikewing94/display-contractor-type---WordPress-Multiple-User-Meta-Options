<?php
  $user_id = $_GET['uid'];
  $bussupport = 'contractor_business_support_hrm';
  $imporoveplant = 'contractors_improve_plant';
  $quality= 'contractors_quality_shes';
  $opsupport = 'contractors_operational_support';
  $manufacturing = 'contractor_manufacturing';

  $single = true;
  $contractor = get_user_meta( $user_id, $bussupport, $single );
  $contractor2 = get_user_meta( $user_id, $imporoveplant, $single );
  $contractor3 = get_user_meta( $user_id, $quality, $single );
  $contractor4 = get_user_meta( $user_id, $opsupport, $single );
  $contractor5 = get_user_meta( $user_id, $manufacturing, $single );


  echo "<h3>Contractor Type</h3>";
  echo "</br>";

  echo "<h4>";
  if ($contractor == "N/A"){
  }

  else {
      echo "Contractor - Business Support /HRM: ";
      echo $contractor;
      echo "</br>";
  }

  if ($contractor2 == "N/A"){
  }

  else {
      echo "Contractor - Improve Plant: ";
      echo $contractor2;
      echo "</br>";
  }

  if ($contractor3 == "N/A"){
  }

  else {
      echo "Contractor - Quality/SHES: ";
      echo $contractor3;
      echo "</br>";
  }

  if ($contractor4 == "N/A"){
  }

  else {
      echo "Contractor - Operational Support: ";
      echo $contractor4;
      echo "</br>";
  }

  if ($contractor5 == "N/A"){
  }

  else {
      echo "Contractor - Manufacturing: ";
      echo $contractor5;
      echo "</br>";
  }

  echo "</h4>";

?>
