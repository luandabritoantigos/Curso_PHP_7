<div class="titulo">If Else</div>

<?php

if(true) {
    echo "Serei impresso?";
    echo "<br>Serei impresso novamente?";
}

if(false) {
    echo "<br>Verdadeiro - Parte A";
    echo "<br>Verdadeiro - Parte B";
} else {
    echo "<br>Falso - Parte A";
    echo "<br>Falso - Parte B";
}

if(false) {
    echo "<br> Passo A";
} elseif(false) {
    echo "<br>Passo B";
} elseif(false) {
    echo "<br>Passo C";
} elseif(false) {
    echo "<br>Passo D";
} elseif(false) {
    echo "<br>Passo E";
} else {
    echo "<br>Último Passo";
}

echo "<br>Fim";


?>