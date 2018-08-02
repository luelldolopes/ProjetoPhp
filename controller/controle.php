<?php

    require_once("../model/Usuario.php");

    function Processo($Processo) {

        switch ($Processo) {

            case 'inserir':

                global $row;
                global $result;

                $usuario = new Usuario();

                $usuario->pesquisar("select * from usuario");
                $row = $usuario->Row;
                $result = $usuario->Resultado;

                if (isset($_POST['ok']) == 'true') {
                    $usuario->inserir($_POST['nome'], $_POST['email']);
                    echo '<script>alert("Inserido com Sucesso!");</script>';
                    echo '<script>window.location="index.php";</script>';
                }

                break;

            case 'pesquisar':

                global $row;
                global $result;

                $usuario = new Usuario();

                $usuario->pesquisar("select * from usuario");
                $row = $usuario->Row;
                $result = $usuario->Resultado;

                if (isset($_GET['ok']) == "deletar") {
                    $usuario->deletar($_GET['id']);
                    echo '<script>alert("Deletado com Sucesso!");</script>';
                    echo '<script>window.location="pesquisar.php";</script>';
                }

                break;


            case 'alterar':

                global $row;
                global $result;

                $usuario = new Usuario();

                $usuario->pesquisar("select * from usuario where id=" . $_GET['id'] . "");
                $row = $usuario->Row;
                $result = $usuario->Resultado;

                if (isset($_POST['ok']) == "true") {
                    $usuario->alterar($_POST['nome'], $_POST['email'], $_GET['id']);
                    echo '<script>alert("Alterado com Sucesso!");</script>';
                    echo '<script>window.location="pesquisar.php";</script>';
                }

                break;
        }
    }
