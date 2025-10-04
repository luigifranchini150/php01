<?php


//$password = readline("inserisci la tua password: \n");

//che ci siano almeno 8 caratterri

function checkLength($string){
    if(strlen($string)>=8){
    return true;
    }
    echo "La password deve contenere almeno 8 caratteri \n";
    return false;
}
//$firstrule= checkLength($password);
//var_dump($firstrule);
//almeno una maiuscola
function checkUppercase($string){
   for($i=0; $i<strlen($string); $i++){
        if(ctype_upper($string[$i])){
            return true;
         }
    }
    echo"manca una lettera maiuscola \n";
    return false;
}
//$secondrule = ceckUppercase($password);
//var_dump($secondrule);
//deve contenere almenbo un numerico
function checkNumber($string){
 for($i=0; $i<strlen($string); $i++){
     if(is_numeric($string[$i])){
            return true;
         }
     }
     echo"almemo un carattere numerico \n";
     return false;
}
//$thirdrule = ceckNumber($password);
//var_dump($thirdrule);
//deve avere almeno un carattere speciale
function checkspecial($string){
    $special_chars = ['!', '@', '?', '$'];
    for($i=0; $i<strlen($string); $i++){
    if(in_array($string[$i], $special_chars)){
        return true;
        }
    }
    echo "almeno un carattere speciale \n";
    return false;
}
//$fourthrule = checkSpecial($password);
//var_dump($fourthrule);
function checkPassword($string){
    $firstrule = checkLength($string);
    $secondrule = checkUppercase($string);
    $thirdrule = checkNumber($string);
    $fourthrule = checkSpecial($string);

    if($firstrule && $secondrule && $thirdrule && $fourthrule){
        echo"password accettata! \n";
    }
    return $firstrule && $secondrule && $thirdrule && $fourthrule;

}
  //  var_dump(checkPassword($password));

do {
$password = readline("Scrivi la tua password: \n");
}while(!checkPassword($password));
