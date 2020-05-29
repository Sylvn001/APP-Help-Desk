<?php

    session_start(); 


    $perfis = array(1=> 'Adm' , 2=>'User');

    $usuarios_app = array(
        array('id'=>'1','email' => 'adm@teste.com.br' , 'senha' => '1234', 'perfil_id' => 1),
        array('id'=>'2','email' => 'user@teste.com.br' , 'senha' => 'abcd', 'perfil_id' => 1),
        array('id'=>'3','email' => 'jose@teste.com.br' , 'senha' => '111', 'perfil_id' => 2),
        array('id'=>'4','email' => 'maria@teste.com.br' , 'senha' => '222', 'perfil_id' => 2),
    );
    $usuario_autenticado = false;
    $usuario_perfil_id = null;
    foreach($usuarios_app as $user)
    {
        if($user['email'] == $_POST['email'] && $user['senha'] ==  $_POST['senha'] ){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    }

    if($usuario_autenticado)
    {
        $_SESSION['Auth'] = 'auth';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] =  $usuario_perfil_id ;
        header('Location: home.php');

    }
        
    else
    {
        $_SESSION['Auth'] = 'erro_auth';
        header('Location: index.php?login=erro');
    }
       
?>