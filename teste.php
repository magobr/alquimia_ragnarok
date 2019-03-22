<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Formulário: combobox</title>
    <meta charset="utf-8">
</head>

<body>

    <form action="teste.php" method="post">
        <select name="potion">
            <option value="1">HealPotions</option>
        </select>

        <input type="text" name='PP'>
        <input type="text" name='PR'>
        <input type="text" name='MP'>
        <input type="text" name='NC'>
        <input type="text" name='DZ'>
        <input type="text" name='ST'>
        <input type="text" name='IT'>

        <input type="submit" value="Submit me!">
    </form>

    <?php

    if ( isset( $_POST['PP']) && isset($_POST['PR']) )
    {

        $potion = $_POST['potion'];
        $PP = $_POST['PP'];
        $PR = $_POST['PR'];
        $MP = $_POST['MP'];
        $NC = $_POST['NC'];
        $DZ = $_POST['DZ'];
        $ST = $_POST['ST'];
        $IT = $_POST['IT'];

        if ( ($PP > 10) || ($PR > 10) || ($MP > 5) || ($NC > 70) ) 
        {
            echo "<h4>valor incorreto</h4>";
        }else{
  
            switch ($potion) 
            {
                case '1':
                    $Pvermelha = new Potion();
                    $Pvermelha->HealPotion($PP, $PR, $MP, $NC, $DZ, $ST, $IT);
                    break;

                default:
                    echo null;
                    break;
            }            
        }

    }


    ?>

</body>

</html> 