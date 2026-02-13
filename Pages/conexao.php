<?php
$servidor = "localhost";  // ou 127.0.0.1
$usuario = "root";        // nome do usuário do banco
$senha = "";              // senha do MySQL (padrão vazio no XAMPP)
$banco = "busca_cursos";     // nome do banco de dados

// Criar conexão
$conn = new mysqli($servidor, $usuario, $senha, $banco);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

echo "Conexão realizada";

?>
