<?php
    include('header.php');
    require_once('../controller/controle.php');
    Processo('inserir');
?>
    <script src="js/validacao.js"></script>
    <form name="form" method="post">
        <div>
            <input id="nome" type="text" name="nome" placeholder="Nome" required autofocus>
            <input type="email" name="email" placeholder="Email" required>
        </div>
        
        <div>
            <input type="button" name="button" value="Inserir" onclick="validar(document.form);"/>
            <input type="hidden" name="ok"/>
        </div>
    </form>
