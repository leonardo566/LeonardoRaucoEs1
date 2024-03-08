 <?php
// function controllaPassword() {
//     $pass = "Leonardo1" ;


// $eightchracters = false;
// $capitalletter = false;
// $number = true ;
// // $specialcharacter = true ;

//     if (strlen($pass) >= 8){
//      $eightchracters = true ;
//     }
// if ($eightchracters){
//     echo " lunghezza password esatta";
// } else {
//     echo "password troppo corta";
// }
// if(ctype_upper($pass)){
//     $capitalletter = true ;
// }
// if ($capitalletter){
//     echo " ok maiuscola";
// } else {
//     echo  " non ok maiuscola";
//  }
//  if (preg_replace($pass)){
//    $number = true;
//  }
// if($number){
//     echo "si c'è il numero";
// }else {
//     echo "non c'è il numero";
// }

//}

 //controllaPassword(); 






 // "BELLA"

 $pass = readline ('Per favore inserisci pass:  ');
 checekMyPass ($pass);

 function checekMyPass($password)
 {
 $checkLunghezza = false ;
 
function checekMyPass($password)
{
    if (strlen($password)>=8) {
        return true ;
    
    }
    return false;
}

$checkLunghezza = checkLength($password);
if ($checkLunghezza) {
    echo "lunghezza ok";
}else {
    echo "lunghezza no valida";
}
 }


 