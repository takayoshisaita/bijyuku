<?php
  if($Companion->getRank())
  {
    echo $Companion->getRank()->getName()."<br />";
  }
  else
  {
    echo '';
  }
?>