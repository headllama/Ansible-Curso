<?php
  $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
      echo"Bem-vindo, $login_cookie <br>";
      echo"Essas informacoes <font color='red'>PODEM</font> ser acessadas por voce";
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informacoes <font color='red'>NÃO PODEM</font> ser acessadas por voce";
      echo"<br><a href='login.html'>Faca Login</a> Para ler o contudo";
    }
?>
