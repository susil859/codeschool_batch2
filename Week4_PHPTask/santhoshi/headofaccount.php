<?php
$errors = [];
if(!isset ($_POST['headOfaccount'])){
    array_push($errors, "select head of account");
  }
 $headOfaccount =$_POST["headOfaccount"];
  $headOfAccountarray = [
    '0853001020002000000NVN'=> [
        'balance'=> '1000000',
        'loc'=>  '5000'
    ],
    '88342001170004001000NVN'=> [
        'balance'=> '1065710', 
        'loc'=> '4000'
    ],
    '2071011170004320000NVN' =>[
        'balance'=> '1256400', 
         'loc'=> '78000'
    ],
    '22204000030006300303NVN'=>[
         'balance'=> '123465400',
         'loc'=>'5000'
    ],
    '8342001170004002000NVN'=>[
         'balance' =>'1056400',   
         'loc' =>'34000'
    ]
   ];
     echo json_encode($headOfAccountarray[$headOfaccount]);

?>