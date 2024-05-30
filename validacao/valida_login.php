<?php
    include_once('../conexao/conexao.php');
    
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT id, usuario, senha FROM users WHERE usuario = ? and senha = ?";

        if ($stmt = $conn -> prepare($sql)) {
            $stmt -> bind_param("ss", $username, $password);

            $stmt -> execute();
            $stmt -> store_result();

            if ($stmt -> num_rows == 1) {
                $stmt -> bind_result($id, $username, $password);

                $stmt -> fetch();

                $_SESSION["logado"] = true;
                $_SESSION["username"] = $username;

                header("location: ../index.php");
            } else {
                echo '<script> window.alert("Usuario ou Senha Invalido"); setTimeout(function(){ window.location.href = "../pages/login.php"; }); </script>';

            }
            $stmt -> close();
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }

    $conn -> close();
?>