<?php
  if(isset($_SESSION['email'])) //LOGADO
  {
?>
  <div class="menu uk-width-1-1">
    <div class="menu_esquerda uk-width-1-4 azul_claro"> 
      <div class="div_logo uk-width-1-1 azul_claro centralizar">
        <img src="<?php echo $url2; ?>assets/img/<?php echo $_SESSION['img_logo']; ?>" onerror="this.src='<?php echo $url2; ?>assets/img/logo_default.png'" width="100%">
      </div>
      <div class="div_nome uk-width-1-1 azul_claro centralizar">
        <h2><?php echo $_SESSION['nome']; ?></h2>
      </div>
    </div>

    <div class="menu_centro uk-width-1-2 azul_claro centralizar">
      <form class="f_busca">
        <input class="input_busca" type="text" name="busca" placeholder="Busca">
        <button class="b_busca uk-button azul_escuro"><div uk-icon="search"></div></button>
      </form>
    </div>

    <div class="menu_direita uk-width-1-4 azul_claro centralizar">
      <button class="uk-button azul_escuro b_perfil_home">Perfil</button>
      <button class="uk-button azul_escuro b_logout">Logout</button>


      <a class="uk-button azul_escuro menu_gatilho"><div uk-icon="more"></div></a>  
      <!--BOTÃO PARA QUANDO A TELA DIMINUI-->
      <div class="menu_drop uk-text-center">
        <a class="uk-button azul_escuro b_perfil_home">Perfil</a>
        <a class="uk-button azul_escuro b_logout">Logout</a>
      </div>
    </div>
  </div>

  <!--MENU PEQUENO, PARA RESPONSIVIDADE EM CELULAR-->

  <div class="menu_celular uk-width-1-1">
    <div class="menu_cima uk-width-1-1 azul_claro centralizar"> 
        <h2><?php echo $_SESSION['nome']; ?></h2>
    </div>

    <div class="menu_meio uk-width-1-1 azul_claro centralizar">
      <form class="f_busca_celular">
        <input class="input_busca" type="text" name="busca" placeholder="Busca">
        <button class="b_busca uk-button azul_escuro"><div uk-icon="search"></div></button>
      </form>
    </div>

    <div class="menu_baixo uk-width-1-1 azul_claro centralizar">
      <button class="uk-button azul_escuro b_perfil_home_celular">Perfil</button>
      <button class="uk-button azul_escuro b_logout">Logout</button>


      <a class="uk-button azul_escuro menu_gatilho"><div uk-icon="more"></div></a> 
      <!--BOTÃO PARA QUANDO A TELA DIMINUI-->
      <div class="menu_drop uk-text-center">
        <a class="uk-button azul_escuro dropdown b_perfil_home_celular">Perfil</a>
        <a class="uk-button azul_escuro dropdown b_logout">Logout</a>
      </div>
    </div>
  </div>


<?php
  }
  else // DESLOGADO
  { 
?>


  <div class="menu uk-width-1-1">
    <div class="menu_esquerda uk-width-1-4 azul_claro"> 
      <div class="div_logo uk-width-1-1 azul_claro centralizar">
        <img src="<?php echo $url2; ?>assets/img/memory_card_logo1.png" width="100%">
      </div>
      <div class="div_nome uk-width-1-1 azul_claro centralizar">
        <h2>MemoryCard</h2>
      </div>
    </div>

    <div class="menu_centro uk-width-1-2 azul_claro centralizar">
      <form class="f_busca">
        <input class="input_busca" type="text" name="busca" placeholder="Busca">
        <button class="b_busca uk-button azul_escuro"><div uk-icon="search"></div></button>
      </form>
    </div>

    <div class="menu_direita uk-width-1-4 azul_claro centralizar">
      <button class="uk-button azul_escuro b_login_usuario">Login</button>
      <button class="uk-button azul_escuro b_cadastro_usuario">Cadastrar-se</button>


      <a class="uk-button azul_escuro menu_gatilho"><div uk-icon="more"></div></a> 
      <!--BOTÃO PARA QUANDO A TELA DIMINUI-->
      <div class="menu_drop uk-text-center">
          <a class="uk-button azul_escuro b_login_usuario">Login</a>
          <a class="uk-button azul_escuro b_cadastro_usuario">Cadastrar-se</a>
      </div>
    </div>
  </div>

  <!--MENU PEQUENO, PARA RESPONSIVIDADE EM CELULAR-->

  <div class="menu_celular uk-width-1-1">
    <div class="menu_cima uk-width-1-1 azul_claro centralizar"> 
        <h2>MemoryCard</h2>
    </div>

    <div class="menu_meio uk-width-1-1 azul_claro centralizar">
      <form class="f_busca_celular">
        <input class="input_busca" type="text" name="busca" placeholder="Busca">
        <button class="b_busca uk-button azul_escuro"><div uk-icon="search"></div></button>
      </form>
    </div>

    <div class="menu_baixo uk-width-1-1 azul_claro centralizar">
      <button class="uk-button azul_escuro b_login_usuario">Login</button>
      <button class="uk-button azul_escuro b_cadastro_usuario">Cadastrar-se</button>


      <a class="uk-button azul_escuro menu_gatilho"><div uk-icon="more"></div></a>   
      <!--BOTÃO PARA QUANDO A TELA DIMINUI-->
      <div class="menu_drop uk-text-center">
          <a class="uk-button azul_escuro dropdown b_login_usuario">Login</a>
          <a class="uk-button azul_escuro dropdown b_cadastro_usuario">Cadastrar-se</a>
      </div>
    </div>
  </div>
<?php
  }
?>




