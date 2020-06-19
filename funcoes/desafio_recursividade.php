<div class="titulo">Desafio Recursividade</div>

<?php

$array = [1, 2, [3, 4, 5,], 6, [7, [8, 9]], 10];

/*
>1
>2
>>3
>>4
>>5
>6
>>7
>>>8
>>>9
>10

*/

// resposta com foreach
/*
foreach ($array as $valor){
    if (!is_array($valor)){
        echo "< $valor <br>";
    }else{
        foreach($valor as $valor2){
            if (!is_array($valor2)){
                echo "<< $valor2 <br>";
            }else{
                foreach($valor2 as $valor3){
                    if (!is_array($valor3)){
                        echo "<<< $valor3 <br>";
                    }
                }
            }
        }
    }
}
*/
// resposta com função recursiva

function escrever($array){
    foreach ($array as $valor){
        if (is_array() ){
            
        }
        
        //return (!is_array($valor)) ? "< $valor <br>" : escrever($valor);
    }
}

escrever($array);

?>