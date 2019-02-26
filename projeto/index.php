<?php
  require_once('inc/cabecalho.php');

    $_SESSION['filtro_user']="1=1";
    $_SESSION['filtro_user_home']="1=1";
    $_SESSION['filtro_jogo']="1=1";
    $_SESSION['filtro_jogo_home']="1=1";
    $_SESSION['filtro_cat']="1=1";
    $_SESSION['filtro_ava']="1=1";

  require_once($url.'crud/usuario/form_login.php');
  require_once($url.'crud/usuario/form_cadastro.php');
  require_once($url.'crud/usuario/form_edita.php');
  require_once($url.'crud/categoria/form_edita.php');
  require_once($url.'crud/jogo/form_edita.php');
  require_once($url.'crud/jogo/form_edita_img.php');
  require_once($url.'email/formulario.php');

  
?>
<div class="conteudo">
  
  <?php
      require_once($url.'menu.php');

  ?>


    
    <?php
    require_once($url.'navbar/navbar_home.php');
    
    if(isset($_SESSION['email']))
    {
      require_once($url.'navbar/navbar_perfil.php');
    }
    else
    {
      
    }
    ?>   
    <div class="centro uk-text-center">
      <?php
        require_once($url.'crud/usuario/lista.php');
        require_once($url.'crud/jogo/lista.php');
        require_once($url.'crud/categoria/lista.php');
        require_once($url.'crud/avaliacao/lista.php');

        require_once($url.'perfil_user/avaliacao_user.php');
        require_once($url.'perfil_user/jogo_user.php');
        
        require_once($url.'crud/jogo/form_jogo_categoria.php');
        require_once($url.'crud/jogo/form_cadastro.php');
        require_once($url.'crud/categoria/form_cadastro.php');
        require_once($url.'crud/avaliacao/form_cadastro.php');

        require_once($url.'home/jogo/jogo.php');
        require_once($url.'home/jogo/avaliacao_home_jogo.php');
        require_once($url.'home/usuario/usuario.php');
        require_once($url.'home/usuario/avaliacao_home_user.php');
        require_once($url.'home/inicio/inicio_home.php');
      ?>  
    </div>
  
  


<?php
  require_once($url.'inc/rodape.php');
?>