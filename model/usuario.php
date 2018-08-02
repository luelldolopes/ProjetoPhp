<?php
    require_once('bd.php');

    class Usuario {
        Private $nome;
        Private $email;

        public function inserir($nome, $email) { 
            $insert = 'insert into usuario(nome, email)values("' . $nome . '","' . $email . '")';
            $Conexao = new Conexao();
            $Conexao->Conecta();
            $Conexao->Pesquisa($insert);
        }

        public function pesquisar($sql) {
            $Conexao = new Conexao();
            $Conexao->Conecta();
            $Conexao->Pesquisa($sql);
            $this->Row = mysqli_num_rows($Conexao->resultado);
            $this->Resultado = $Conexao->resultado;
        }

        public function deletar($id) {
            $delete = 'delete from usuario where id="' . $id . '"';
            $Conexao = new Conexao();
            $Conexao->Conecta();
            $Conexao->Pesquisa($delete);
        }

        public function alterar($nome, $email, $id) {
            $update = 'update usuario set nome="' . $nome . '", email="' . $email . '" where id="' . $id . '"';
            $Conexao = new Conexao();
            $Conexao->Conecta();
            $Conexao->Pesquisa($update);
            $this->Row = mysqli_num_rows($Conexao->resultado);
            $this->Resultado = $Conexao->resultado;
        }
    
    }
