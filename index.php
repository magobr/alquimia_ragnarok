<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Alquimia</title>

    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpat.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</head>

<body>
    <section class="middle">

        <form method="post">
            <div class="form-group">

                <select class="form-control form-control-sm col-12" name="potion">
                    <option>Tipo de Alquimia</option>
                    <option value="1">Poçoes comuns</option>
                    <option value="2">Álcool</option>
                    <option value="3">Frascos</option>
                    <option value="4">Poção Azul</option>
                    <option value="4">Analgésico, Aloe Vera ou Embrião</option>
                    <option value="4">Poções Anti-Propriedade ou Poção Compacta Vermelha</option>
                    <option value="5">Poção Compacta Amarela</option>
                    <option value="6">Poção Compacta Branca ou Frasco de Revestimento</option>
                </select>

            </div>

            <div class="form-group form-row">

                <div class="form-group col-4">
                    <input id="atributo" class="atributo form-control form-control-sm" type="text" name='PP' placeholder="Nível de Pesquisa de poções">
                    <small id="emailHelp" class="form-text text-muted">Nível máximo 10</small>
                </div>

                <div class="form-group col-4">
                    <input id="atributo" class="atributo form-control form-control-sm" type="text" name='PR' placeholder="Nível de preparar poções">
                    <small id="emailHelp" class="form-text text-muted">Nível máximo 10</small>
                </div>

                <div class="form-group col-4">
                    <input id="atributo" class="atributo form-control form-control-sm" type="text" name='MP' placeholder="Nível Mudança de Planos">
                    <small id="emailHelp" class="form-text text-muted">Nível máximo 5</small>
                </div>

                <div class="form-group col-4">
                    <input id="atributo" class="atributo form-control form-control-sm" type="text" name='NC' placeholder="Nível de Classe">
                    <small id="emailHelp" class="form-text text-muted">Nível máximo 70</small>
                </div>

                <div class="form-group col-4">
                    <input id="num" class="num form-control form-control-sm" type="text" name='DZ' placeholder="Destreza">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>

                <div class="form-group col-4">
                    <input id="num" class="num form-control form-control-sm" type="text" name='ST' placeholder="Sorte">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>

                <div class="form-group col-4">
                    <input id="num" class="num form-control form-control-sm" type="text" name='IT' placeholder="Inteligência">
                </div>

            </div>

            <div class="form-group">
                <input class="btn btn-secondary btn-sm btn-block" type="submit" value="Calcular!">
            </div>

            <!-- <input type="text" name='PP'>
        <input type="text" name='PR'>
        <input type="text" name='MP'>
        <input type="text" name='NC'>
        <input type="text" name='DZ'>
        <input type="text" name='ST'>
        <input type="text" name='IT'> -->

        </form>

        <?php

        if (
            isset($_POST['PP']) && isset($_POST['PR']) && isset($_POST['MP']) && isset($_POST['NC'])
            && isset($_POST['DZ']) && isset($_POST['ST']) && isset($_POST['IT'])
        ) {

            $potion = $_POST['potion'];
            $PP = $_POST['PP'];
            $PR = $_POST['PR'];
            $MP = $_POST['MP'];
            $NC = $_POST['NC'];
            $DZ = $_POST['DZ'];
            $ST = $_POST['ST'];
            $IT = $_POST['IT'];

            if (($PP > 10) || ($PR > 10) || ($MP > 5) || ($NC > 70)) {
                echo '<div class="alert alert-danger" role="alert">' . 'Valor incorreto' . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>' . '</div>';
            } else {

                switch ($potion) {
                    case '1':
                        $Potion = new Potion();
                        $Potion->HealPotion($PP, $PR, $MP, $NC, $DZ, $ST, $IT);
                        break;

                    case '2':
                        $Potion = new Potion();
                        $Potion->Alcool($PP, $PR, $MP, $NC, $DZ, $ST, $IT);
                        break;

                    case '3':
                        $Potion = new Potion();
                        $Potion->Frascos($PP, $PR, $MP, $NC, $DZ, $ST, $IT);
                        break;

                    case '4':
                        $Potion = new Potion();
                        $Potion->PropriedadesPCvermelha($PP, $PR, $MP, $NC, $DZ, $ST, $IT);
                        break;

                    case '5':
                        $Potion = new Potion();
                        $Potion->CompactaAmarela($PP, $PR, $MP, $NC, $DZ, $ST, $IT);
                        break;

                    case '6':
                        $Potion = new Potion();
                        $Potion->RevestimentoPCbranca($PP, $PR, $MP, $NC, $DZ, $ST, $IT);
                        break;

                    default:
                        echo null;
                        break;
                }
            }
        }

        ?>

    </section>

    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
    <script>
        $('.atributo').mask('99');
        $('.num').mask('9999');
    </script>

</body>

</html> 