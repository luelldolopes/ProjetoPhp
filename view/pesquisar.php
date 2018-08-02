<?php
    include('header.php');
    require_once('../controller/controle.php');
    Processo('pesquisar');
?>

<div>
    <table>
        <thead>
        <td><b>ID</b></td>
        <td><b>NOME</b></td>
        <td><b>EMAIL</b></td>
        </thead>

        <?php while ($row = mysqli_fetch_array($result)) { ?>
        <style>
        tbody {color:black;}
        td {
            border: 1px solid black;
        }
        </style>
        <tbody>
            <td> <?php echo $row['id']; ?> </td>
            <td> <?php echo $row['nome']; ?> </td>
            <td> <?php echo $row['email']; ?> </td>
            <td>
                <a href="alterar.php?id=<?php echo $row['id']; ?>"><button type="button">Alterar</button></a>
                <a href="pesquisar.php?ok=deletar&id=<?php echo $row['id']; ?>"><button type="button">Deletar</button></a>
            </td>
            </tbody>
        <?php } ?>
    </table>
</div>