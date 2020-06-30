<div class="titulo">Desafio Tabela #2</div>

<form action="#" method="post">
    <input type="number" name="coluna" value="1"> Coluna(s)
    <input type="mumber" name="linha" value="1"> Linha(s)
    <br>
    <button>Enviar</button>
</form>

<table>
    <?php
    if (isset($_POST['coluna'])){
        $coluna = $_POST['coluna'];
        $linha = $_POST['linha'];
        $contador = 0;

        for($i = 0; $i < $linha; $i++){
            echo '<tr>';
            for($j = 0; $j < $coluna; $j++){
                echo "<td>$contador</td>";
                $contador++;
            }
            echo '</tr>';
        }
    }
    ?>
</table>


<style>
    table{
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr{
        border: 1px solid #444;
    }

    table td{
        padding: 10px 20px;
    }

    form > * {
        font-size: 1.8rem;
    }
</style>
