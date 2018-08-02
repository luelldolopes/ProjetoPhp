<?php
    
    class Conexao {

        public function Conecta() {
            $this->cnxao = mysqli_connect("localhost", "root", "", "projetobd");
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
        }

        public function Pesquisa($sql) {
            $this->resultado = mysqli_query($this->cnxao,$sql, MYSQLI_STORE_RESULT);
        }

        public function Desconecta() {
            mysqli_close($this->cnxao);
        }

    }