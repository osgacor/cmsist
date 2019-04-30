<?php
function login($password){
  # regresa 1 pasa
  # regresa 0 no pasa
  $dbname = 'm2db.db';
  $tablename = 'Usuario';
  $query = 'SELECT COUNT(*) FROM '.$tablename.' WHERE pass_usu="'.$password.'";';
  $db = new SQLite3($dbname);
  $result = $db->query($query);
  $row = $result->fetchArry();
  $temp = $row[0];
  echo $temp;
  $if ($temp==1){
    echo "Los datos coinciden";
    <a href="destino.php">
  }else {
    echo "Los datos NO! noinciden";
  }
  }
