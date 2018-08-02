<?php
    include('header.php');
    require_once('../controller/controle.php');
    Processo('alterar');
?>

<script src="js/validacao.js"></script>
<div>
    <form name="form" method="post">
        <?php while ($row = mysqli_fetch_array($result)) { ?>
        
        <div>
            <input type="text" name="nome" value="<?php echo $row['nome']; ?>">
            <input type="email" name="email" value="<?php echo $row['email']; ?>">
        </div>

        <?php } ?>
        
        <div>
            <div>
                <input type="button" name="button" value="Alterar" onclick="validar(document.form);"/>
                <input type="hidden" name="ok"/>
            </div>
        </div>
    </form>
</div> 
