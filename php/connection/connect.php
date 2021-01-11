<?php

  $connect = pg_connect("host=ec2-54-144-196-35.compute-1.amazonaws.com port=5432 dbname=d1s1rpcbjednhl user=ozinnwuyoglfnp password=940112c4b89edec6b748c4f360cf2dadf79c311b1a0f8851c19c95b1963f393e");

  if(!$connect){
    die("No connection to phpPgAdmin");
  }

  // $_SERVER['DOCUMENT_ROOT']

?>