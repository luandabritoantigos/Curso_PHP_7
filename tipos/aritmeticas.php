<div class="titulo">Operações Aritméticas</div>

<?php
echo 1 + 1, '<br>';
var_dump(1 + 1);
echo '<br>';
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
var_dump(7 / 4);
echo '<br>';
echo intdiv(7, 4), '<br>';  // resultar será apenas inteiro
echo round(7 / 4), '<br>';  // arredondar
echo 7 % 4, '<br>';         // modulo ou resto
// echo 7 / 0, '<br>'; obs. na versão do professor não gerava erro.
// echo intdiv(7, 0); obg. gera erro.

// precedência de operadores:
// ()  => ** => / * % => + -

echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2;




?>