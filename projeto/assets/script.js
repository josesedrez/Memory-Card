$(document).ready(function(){
 
 //COLOCA AS URLs EM VARIÁVEIS 
  url2='http://localhost/projeto/';

// ESCONDE DIVs
  $('.formulario,#cadastro_usuario,#login_usuario,#cadastro_jogo,#jogo_categoria,#cadastro_categoria,#cadastro_avaliacao,.perfil,.perfil_celular,.lista,#edita_usuario,.lista_drop,.lista_home,#avaliacao_home_jogo,#avaliacao_home_user').hide();


//MOSTRA E ESCONDE FORMULARIO DE CADASTRO DE USUARIO
  $('.b_cadastro_usuario').click(function(){
    $('#login_usuario').hide();
    $('.menu_drop').hide();
    $('#cadastro_usuario').slideToggle('fast');
  });

//MOSTRA E ESCONDE FORMULARIO DE LOGIN DE USUARIO
  $('.b_login_usuario').click(function(){
    $('#cadastro_usuario').hide();
    $('.menu_drop').hide();
    $('#login_usuario').slideToggle('fast');
  });

//MOSTRA E ESCONDE FORMULARIO DE CADASTRO DE JOGO
  $('#b_cadastro_jogo').click(function(){  
    $('#cadastro_jogo').slideToggle('fast');
    $('#jogo_categoria').hide();

    $('#sair_form_jog').click(function(){  
      $('#cadastro_jogo').hide('fast');
    });
  });

//ESCONDE FORMULÁRIOS EM GERAL
  $('a#b_cancela_form').click(function(){  
    $('.formulario').hide();
  });
  

//MOSTRA E ESCONDE FORMULARIO DE CADASTRO DE CATEGORIA
  $('#b_cadastro_categoria').click(function(){  
    $('#cadastro_categoria').slideToggle('fast');

    $('#sair_form_cat').click(function(){  
      $('#cadastro_categoria').hide('fast');
    });
  });

  //MOSTRA E ESCONDE FORMULARIO DE CADASTRO DE AVALIACAO
  $('.b_cadastro_avaliacao').click(function(){  
    $('#cadastro_avaliacao').slideToggle('fast');

    $('#sair_form_cat').click(function(){  
      $('#cadastro_avaliacao').hide('fast');
    });
  });

//MOSTRA E ESCONDE PERFIL E HOME
  $('.b_perfil_home').click(function(){
    $('.perfil').slideToggle('fast');
    $('.home').slideToggle('fast');
    $('.menu_drop').hide();
    //console.log($('.b_perfil_home').text());
    if ($('.b_perfil_home').text()=='PerfilPerfil')
    {
      $('.b_perfil_home').html('Home');
      $('#inicio_home,.lista_home,#sobre_home').hide();
      $('#inicio').show();
    }
    else
    {
      $('.b_perfil_home').html('Perfil');
      $('.lista').hide();
      $('#inicio').show();
    }
  });

  //MOSTRA E ESCONDE PERFIL E HOME CELULAR
  $('.b_perfil_home_celular').click(function(){
    $('.perfil_celular').slideToggle('fast');
    $('.home_celular').slideToggle('fast');
    $('.menu_drop').hide();
    //console.log($('.b_perfil_home_celular').text());
    if ($('.b_perfil_home_celular').text()=='PerfilPerfil')
    {
      $('.b_perfil_home_celular').html('Home');
      $('#inicio_home,.lista_home,#sobre_home').hide();
      $('#inicio').show();
    }
    else
    {
      $('.b_perfil_home_celular').html('Perfil');
      $('.lista').hide();
      $('#inicio').show();
    }


  });

  //MOSTRA E ESCONDE DROPDPWN LISTA JOGO
  $(document).on('click', '.lista_jogo_gatilho', function(){
    var b_id = $(this).attr('id');
    var id = b_id.split("-");

    if($('#opcao_jogo-'+id[1]).is(':visible'))
    {
      $('#opcao_jogo-'+id[1]).slideToggle('fast');
    }
    else
    {
      $('.lista_drop').hide();
      $('#opcao_jogo-'+id[1]).slideToggle('fast');
    }  
  });

    //MOSTRA E ESCONDE DROPDPWN LISTA CATEGORIA
  $(document).on('click', '.lista_categoria_gatilho', function(){
    var b_id = $(this).attr('id');
    var id = b_id.split("-");

    if($('#opcao_categoria-'+id[1]).is(':visible'))
    {
      $('#opcao_categoria-'+id[1]).slideToggle('fast');
    }
    else
    {
      $('.lista_drop').hide();
      $('#opcao_categoria-'+id[1]).slideToggle('fast');
    }  
  });


//MOSTRA E ESCONDE LISTA DE USUARIOS
  $('.b_lista_usuario').click(function(){
    if($('#lista_usuario').is(':hidden'))
      {
        $('#inicio').hide();
        $('#lista_usuario').slideToggle('fast');
        $('#lista_jogo').hide();
        $('#lista_categoria').hide();
        $('#lista_avaliacao').hide();
        $('#lista_dica').hide();
        $('#edita_usuario').hide();

        $('#cadastro_jogo').hide('fast');
        $('#cadastro_categoria').hide('fast');
        $('.navbar_perfil_drop').hide();
      }
  });

//MOSTRA E ESCONDE LISTA DE JOGOS
  $('.b_lista_jogo').click(function(){
    if($('#lista_jogo').is(':hidden'))
      {
        $('#inicio').hide();
        $('#lista_usuario').hide();
        $('#lista_jogo').slideToggle('fast');
        $('#lista_categoria').hide();
        $('#lista_avaliacao').hide();
        $('#lista_dica').hide();
        $('#edita_usuario').hide();

        $('#cadastro_jogo').hide('fast');
        $('#cadastro_categoria').hide('fast');
        $('.navbar_perfil_drop').hide();
      }
  });

//MOSTRA E ESCONDE LISTA DE CATEGORIAS
  $('.b_lista_categoria').click(function(){
    if($('#lista_categoria').is(':hidden'))
      {
        $('#inicio').hide();
        $('#lista_usuario').hide();
        $('#lista_jogo').hide();
        $('#lista_categoria').slideToggle('fast');
        $('#lista_avaliacao').hide();
        $('#lista_dica').hide();
        $('#edita_usuario').hide();

        $('#cadastro_jogo').hide('fast');
        $('#cadastro_categoria').hide('fast');
        $('.navbar_perfil_drop').hide();
      }
  });

//MOSTRA E ESCONDE LISTA DE AVALIAÇÕES
  $('.b_lista_avaliacao').click(function(){
    if($('#lista_avaliacao').is(':hidden'))
      {
        $('#inicio').hide();
        $('#lista_usuario').hide();
        $('#lista_jogo').hide();
        $('#lista_categoria').hide();
        $('#lista_avaliacao').slideToggle('fast');
        $('#lista_dica').hide();
        $('#edita_usuario').hide();

        $('#cadastro_jogo').hide('fast');
        $('#cadastro_categoria').hide('fast');
        $('.navbar_perfil_drop').hide();
      }
  });

//MOSTRA E ESCONDE AVALIAÇÕES DO USER
  $('.b_avaliacao_user').click(function(){
    if($('#avaliacao_user').is(':hidden'))
      {
        $('#inicio').hide();
        $('#avaliacao_user').slideToggle('fast');
        $('#jogo_user').hide();    
        $('#edita_usuario').hide();

        $('.navbar_perfil_drop').hide();
      }
  });

//MOSTRA E ESCONDE JOGOS DO USER
  $('.b_jogo_user').click(function(){
    if($('#jogo_user').is(':hidden'))
      {
        $('#inicio').hide();
        $('#avaliacao_user').hide();
        $('#jogo_user').slideToggle('fast');    
        $('#edita_usuario').hide();

        $('.navbar_perfil_drop').hide();
      }
  });


//MOSTRA E ESCONDE FORMULARIO DE EDIÇÃO DO PERFIL
  $('.b_edita_usuario').click(function(){
    $('#edita_usuario').slideToggle('fast');

    $('#cadastro_jogo').hide('fast');
    $('#cadastro_categoria').hide('fast');
  });

//MOSTRA E ESCONDE FORMULARIO DE CONTATO E ENVIO DE EMAIL
  $('.b_contato_home').click(function(){
    $('#contato').slideToggle('fast');
  });

  //MENSAGEM DE ERRO PARA TENTATIVA DE CONTATO ENQUANTO DESLOGADO
  $('.b_contato_home_block').click(function(){
    UIkit.notification({message: 'Execute um Login antes de tentar contatar o Administrador', status: 'warning'});
  });

//MOSTRA E ESCONDE INICIO HOME
$('.b_inicio_home').click(function(){

        $('#inicio').show();
        $('#inicio_home').hide();
        $('#jogo_home').hide();
        $('#usuario_home').hide();
        $('#sobre_home').hide();
        $('#avaliacao_home_jogo').hide();
        $('#avaliacao_home_user').hide();

        $('#edita_usuario').hide();
        $('#cadastro_jogo').hide('fast');
        $('#cadastro_categoria').hide('fast');
        $('.navbar_perfil_drop').hide();
      
});

//MOSTRA E ESCONDE JOGO HOME
$('.b_jogo_home').click(function(){
  if($('#jogo_home').is(':hidden'))
      {
        $('#inicio').hide();
        $('#inicio_home').hide();
        $('#jogo_home').slideToggle('fast');
        $('#usuario_home').hide();
        $('#sobre_home').hide();
        $('#avaliacao_home_jogo').hide();
        $('#avaliacao_home_user').hide();

        $('#edita_usuario').hide();
        $('#cadastro_jogo').hide('fast');
        $('#cadastro_categoria').hide('fast');
        $('.navbar_perfil_drop').hide();
      }
});

//MOSTRA E ESCONDE USUARIO HOME
$('.b_usuario_home').click(function(){
  if($('#usuario_home').is(':hidden'))
      {
        $('#inicio').hide();
        $('#inicio_home').hide();
        $('#jogo_home').hide();
        $('#usuario_home').slideToggle('fast');
        $('#sobre_home').hide();
        $('#avaliacao_home_jogo').hide();
        $('#avaliacao_home_user').hide();

        $('#edita_usuario').hide();
        $('#cadastro_jogo').hide('fast');
        $('#cadastro_categoria').hide('fast');
        $('.navbar_perfil_drop').hide();
      }
});



  $('.menu_drop').hide();
//DROPDOWN MENU
  $('.menu_gatilho').click(function(){  
    $('.menu_drop').slideToggle('fast');
  });

  $('.navbar_perfil_drop').hide();
//DROPDOWN NAVBAR PERFIL
  $('.navbar_perfil_gatilho').click(function(){  
    $('.navbar_perfil_drop').slideToggle('fast');
  });
 

//LOGA AO CADASTRAR
  $('form#loginDireto').submit();

                                                                        
//LOGOUT
   $(function () {
        $('.b_logout').click(function () {
          $('.menu_drop').hide();
          $.ajax({
            type: 'post',
            url: url2+'crud/usuario/logout.php',
            success: function () {
              location.reload();
            }
          });
          return false;
        });
      });




// CADASTRO JOGO
  $(function () {
    $('#f_cadastro_jogo').bind('submit', function () {
       $.ajax({
        type: 'post',
        url: url2+'crud/jogo/cadastro.php',
        data: $('#f_cadastro_jogo').serialize(),
        success: function (saida) {
         // console.log(saida);

          if(saida==0)
          {
            UIkit.notification({message: 'Apenas o administrador pode executar esta função', status: 'warning'});
          }
          else if(saida==2)
          {
            UIkit.notification({message: 'Houve algum erro durante o cadastro', status: 'danger'});
          }
          else if(saida==3)
          {
            UIkit.notification({message: 'Já existe um jogo com este Nome', status: 'warning'});
          }
          else
          {
            var array=saida.split("#");
           // console.log(array[0]);
           // console.log(array[1]);
           // console.log(array[2]);
           // console.log(array[3]);
           // console.log(array[4]);
            $('#lista_jog').prepend('<tr id="tr_jog_id-'+array[1]+'"><td class="uk-text-center"><img class="uk-preserve-width imagem_capa" src="'+url2+'assets/img/'+array[3]+'" onerror="this.src=\''+url2+'assets/img/capa_default.png\'" width="40" alt=""></td><td class="uk-text-center">'+array[0]+'</td><td class="">'+array[2]+'</td><td id="jog_cat" class="uk-text-center"></td><td class="td_b_jog uk-text-center centralizar"><a id="gatilho_jogo-'+array[1]+'" class="lista_jogo_gatilho"><div uk-icon="more-vertical"></div></a> <div id="opcao_jogo-'+array[1]+'" class="lista_drop uk-text-center"><button id="b_categoria_jogo-'+array[1]+'" class="uk-button nova_jog_cat uk-button-secondary">Nova-Cat</button><button id="b_jog_id-'+array[1]+'" class="uk-button exclui_jog uk-button-secondary">Excluir</button></div></td></tr>');
           // console.log(array[1]);
           $('#cadastro_jogo').hide('fast');
           $('.lista_drop').hide();
           UIkit.notification({message: 'Jogo cadastrado com sucesso', status: 'success'});
          }
        }
      });
      return false;
    });
  });

    // MOSTRA E ESCONDE FORMULARIO DE EDITACAO DE JOGO
  $(document).on('click', '.edita_jog', function(){
    var b_id = $(this).attr('id');
//    console.log($(this).attr('id'));
    var id = b_id.split("-");
//    console.log(id[1]);
    $('#input_id_jogo').val(id[1]);
    $('#input_nome_jogo').val(id[2]);
    $('#input_descricao_jogo').val(id[3]);
    $('.lista_drop').hide();
    $('#edita_jogo').slideToggle('fast');
      });

  // EDITA JOGO
  $(function () {
    $(document).on('submit', '#f_edita_jogo', function(){
      $.ajax({
        type: 'post',
        url: url2+'crud/jogo/edita.php',
        data: $('#f_edita_jogo').serialize(),
        success: function (saida) {
          if(saida==0)
          {
            UIkit.notification({message: 'Apenas o administrador pode executar esta função', status: 'warning'});
          }
          else if(saida==2)
          {
            UIkit.notification({message: 'Houve algum erro durante a edição', status: 'danger'});
          }
          else if(saida==3)
          {
            UIkit.notification({message: 'Já existe um jogo com este Nome', status: 'warning'});
          }
          else
          {
            saida = saida.split("-");
            $('#tr_jog_nome-'+saida[1]).html(saida[0]);
            $('#tr_jog_descricao-'+saida[1]).html(saida[3]);
            $('.formulario').hide(); 
            $('#b_jogo-'+saida[1]+'-'+saida[2]+'-'+saida[4]).attr('id','b_jogo-'+saida[1]+'-'+saida[0]+'-'+saida[3]); 
            UIkit.notification({message: 'Jogo editado com sucesso', status: 'success'});      
          }
        }
      });
      return false;
    });
  });

      // MOSTRA E ESCONDE FORMULARIO DE EDITACAO DA IMAGEM DO JOGO
  $(document).on('click', '.edita_img_jog', function(){
    var b_id = $(this).attr('id');
//    console.log($(this).attr('id'));
    var id = b_id.split("-");
//    console.log(id[1]);
    $('#input_id_img_jogo').val(id[1]);
    $('.lista_drop').hide();
    $('#edita_img_jogo').slideToggle('fast');
      });

   // EDITA IMAGEM DO JOGO
  $(function () {
    $(document).on('submit', '#f_edita_jogo', function(){
      $.ajax({
        type: 'post',
        url: url2+'crud/jogo/edita.php',
        data: $('#f_edita_jogo').serialize(),
        success: function (saida) {
          if(saida==0)
          {
            UIkit.notification({message: 'Apenas o administrador pode executar esta função', status: 'warning'});
          }
          else if(saida==2)
          {
            UIkit.notification({message: 'Houve algum erro durante a edição', status: 'danger'});
          }
          else if(saida==3)
          {
            UIkit.notification({message: 'Já existe um jogo com este Nome', status: 'warning'});
          }
          else
          {
            saida = saida.split("-");
            $('#tr_jog_nome-'+saida[1]).html(saida[0]);
            $('#tr_jog_descricao-'+saida[1]).html(saida[3]);
            $('.formulario').hide(); 
            $('#b_jogo-'+saida[1]+'-'+saida[2]+'-'+saida[4]).attr('id','b_jogo-'+saida[1]+'-'+saida[0]+'-'+saida[3]); 
            UIkit.notification({message: 'Jogo editado com sucesso', status: 'success'});      
          }
        }
      });
      return false;
    });
  });


// EXCLUI JOGO
    $(document).on('click', 'td.td_b_jog button.exclui_jog', function(){
    var b_id = $(this).attr('id');
//    console.log($(this).attr('id'));
    var id = b_id.split("-");
//    console.log(id[1]);
    $.ajax({
            type: 'post',
            url: url2+'crud/jogo/exclui.php',
            data: {id_jog:id[1]},
            success: function (saida) {
              if(saida==0)
              {
                 UIkit.notification({message: 'Apenas o administrador pode executar esta função', status: 'warning'});
              }
              else if(saida==2)
              {
                UIkit.notification({message: 'Houve algum erro durante a exclusão', status: 'danger'});
              }
              else
              {
                $('#tr_jog_id-'+id[1]).remove();
                UIkit.notification({message: 'Jogo excluído com sucesso', status: 'success'});
              }
            }
          });
          return false;
      });

// LISTA CATEGORIAS
  $(document).on('click', 'button.nova_jog_cat', function(){
    var b_id = $(this).attr('id');
    var id = b_id.split("-");
    $.ajax({
          type:"POST",
          url: url2+'crud/jogo/pega_categoria.php',          
          dataType:"json",
          success: function(dados) {   
         
            var option = '<span>Selecione a Nova Categoria</span><br><input type="hidden" name="jogo" value="'+id[1]+'"><br>';

            for(i=0;i<dados.length;i++){
              
              option += '<input type="radio" name="categoria" value="'+dados[i].id_categoria+'" id="categoria'+dados[i].id_categoria+'"><label for="categoria'+dados[i].id_categoria+'">'+dados[i].nome_categoria+'</label><br>';
            }
            option += '<button type="submit">Aplicarz</button>'

            $('#f_jogo_categoria').html(option).show(); 
            $('#jogo_categoria').slideToggle('fast');
            $('#cadastro_jogo').hide();
            $('button#sair_jog_cat').click(function(){ 
              $('#jogo_categoria').hide('fast');
            });
      
        }
       });
    });

// ATRIBUI CATEGORIA A JOGO
  $(function () {
    $('#f_jogo_categoria').bind('submit', function () {
      $('#jogo_categoria').hide();
      $.ajax({
        type: 'post',
        url: url2+'crud/jogo/jogo_categoria.php',
        data: $('#f_jogo_categoria').serialize(),
        success: function (saida) {
          console.log(saida);

          if(saida==0)
          {
            UIkit.notification({message: 'Apenas o administrador pode executar esta função', status: 'warning'});
          }
          else if(saida==2)
          {
            UIkit.notification({message: 'Houve algum erro durante o cadastro', status: 'danger'});
          }
          else if(saida==3)
          {
            UIkit.notification({message: 'Este jogo já pertence a esta categoria', status: 'warning'});
          }
          else
          {
            var array=saida.split("-");            
            $('tr#tr_jog_id-'+array[0]+' td#jog_cat').prepend(array[2]+', ');
            UIkit.notification({message: 'Categoria atribuida com sucesso', status: 'success'});
              
          }
        }
      });
      return false;
    });
  });

// CADASTRO CATEGORIA
  $(function () {
    $('#f_cadastro_categoria').bind('submit', function () {
      $.ajax({
        type: 'post',
        url: url2+'crud/categoria/cadastro.php',
        data: $('#f_cadastro_categoria').serialize(),
        success: function (saida) {
          //console.log(saida);

          if(saida==0)
          {
            UIkit.notification({message: 'Apenas o Administrador pode executar esta função', status: 'warning'});
          }
          else if(saida==2)
          {
            UIkit.notification({message: 'Houve algum Erro durante o Cadastro', status: 'danger'});
          }
          else if(saida==3)
          {
            UIkit.notification({message: 'Já existe uma categoria com este Nome', status: 'warning'});
          }
          else
          {
            var saida=saida.split("-");
            console.log(saida[0]);
            console.log(saida[1]);
            $('#lista_cat').prepend('<tr id="tr_cat_id-'+saida[1]+'"><td id="tr_cat_nome-'+saida[1]+'" class="uk-text-left">'+saida[0]+'</td><td class="td_b_cat uk-text-center centralizar"><a id="gatilho_categoria-'+saida[1]+'" class="lista_categoria_gatilho"><div uk-icon="more-vertical"></div></a><div id="opcao_categoria-'+saida[1]+'" class="lista_drop uk-text-center"><button id="b_categoria-'+saida[1]+'-'+saida[0]+'" class="uk-button edita_cat uk-button-secondary">Edita</button><button id="b_cat_id-'+saida[1]+'" class="uk-button exclui_cat uk-button-secondary">Excluir</button></div></td></tr>');
            $('#cadastro_categoria').hide('fast');
            UIkit.notification({message: 'Categoria cadastrada com sucesso', status: 'success'});
            $('.lista_drop').hide();
          }
        }
      });
      return false;
    });
  });

  // MOSTRA E ESCONDE FORMULARIO DE EDITACAO DE CATEGORIA
  $(document).on('click', '.edita_cat', function(){
    var b_id = $(this).attr('id');
//    console.log($(this).attr('id'));
    var id = b_id.split("-");
//    console.log(id[1]);
    $('#input_id_cat').val(id[1]);
    $('#input_nome_cat').val(id[2]);
    $('.lista_drop').hide();
    $('#edita_categoria').slideToggle('fast');
      });

// EDITA CATEGORIA
  $(function () {
    $(document).on('submit', '#f_edita_categoria', function(){
      $.ajax({
        type: 'post',
        url: url2+'crud/categoria/edita.php',
        data: $('#f_edita_categoria').serialize(),
        success: function (saida) {
          if(saida==0)
          {
            UIkit.notification({message: 'Apenas o Administrador pode executar esta função', status: 'warning'});
          }
          else if(saida==2)
          {
            UIkit.notification({message: 'Houve algum Erro durante a edição', status: 'danger'});
          }
          else if(saida==3)
          {
            UIkit.notification({message: 'Já existe uma categoria com este Nome', status: 'warning'});
          }
          else
          {
            saida = saida.split("-");
            console.log(saida[2]);
            $('#tr_cat_nome-'+saida[1]).html(saida[0]);
            $('.formulario').hide(); 
            $('#b_categoria-'+saida[1]+'-'+saida[2]).attr('id','b_categoria-'+saida[1]+'-'+saida[0]);  
            UIkit.notification({message: 'Categoria editada com sucesso', status: 'success'});     
          }
        }
      });
      return false;
    });
  });

// EXCLUI CATEGORIA
  $(document).on('click', '.exclui_cat', function(){
    var b_id = $(this).attr('id');
//    console.log($(this).attr('id'));
    var id = b_id.split("-");
//    console.log(id[1]);
    $.ajax({
            type: 'post',
            url: url2+'crud/categoria/exclui.php',
            data: {id_cat:id[1]},
            success: function (saida) {
              if(saida==0)
              {
                 UIkit.notification({message: 'Apenas o administrador pode executar esta função', status: 'warning'});
              }
              else if(saida==2)
              {
                UIkit.notification({message: 'Houve algum erro durante a exclusão', status: 'danger'});
              }
              else
              {
                $('#tr_cat_id-'+id[1]).remove();
                UIkit.notification({message: 'Categoria excluída com sucesso', status: 'success'});
              }
            }
          });
          return false;
      });

// EXCLUI USUARIO
  $('td.td_b_usu button').on('click', function(){
    var b_id = $(this).attr('id');
    //console.log($(this).attr('id'));
    var id = b_id.split("-");
    //console.log(id[1]);
    $.ajax({
            type: 'post',
            url: url2+'crud/usuario/exclui.php',
            data: {id_user:id[1]},
            success: function (saida) {
              if(saida==0)
              {
                 UIkit.notification({message: 'Apenas o administrador pode executar esta função', status: 'warning'});
              }
              else if(saida==2)
              {
                UIkit.notification({message: 'Houve algum erro durante a exclusão', status: 'danger'});
              }
              else
              {
                $('#tr_usu_id-'+id[1]).remove();
                UIkit.notification({message: 'Usuário excluído com sucesso', status: 'success'});
              }
            }
          });
          return false;
      });
       

// ORDEM_USUARIO
  $('.ordem_usuario').on('click', function(){
   var ordem = $(this).val();
    $.ajax({
            type: 'post',
            url: url2+'crud/usuario/ordem.php',
            data: {ordem:ordem},
            dataType:'html',
            success: function (conteudo) {
              $('#lista_usu').html(conteudo);
              $('.busca_usuario').html('Filtrado por "'+busca+'"');
            }
          });
          return false;
      });

  // ORDEM_USUARIO_HOME
  $('.ordem_usuario_home').on('click', function(){
   var ordem = $(this).val();
    $.ajax({
            type: 'post',
            url: url2+'home/usuario/ordem.php',
            data: {ordem:ordem},
            dataType:'html',
            success: function (conteudo) {
              $('#lista_usu_home').html(conteudo);
              $('.busca_usuario').html('Filtrado por "'+busca+'"');
            }
          });
          return false;
      });

// ORDEM_JOGO
  $('.ordem_jogo').on('click', function(){
   var ordem = $(this).val();
    $.ajax({
            type: 'post',
            url: url2+'crud/jogo/ordem.php',
            data: {ordem:ordem},
            dataType:'html',
            success: function (conteudo) {
              $('#lista_jog').html(conteudo);
              $('.lista_drop').hide();
              $('.busca_jogo').html('Filtrado por "'+busca+'"');
            }
          });
          return false;
      });

// ORDEM_JOGO_HOME
  $('.ordem_jogo_home').on('click', function(){
   var ordem = $(this).val();
    $.ajax({
            type: 'post',
            url: url2+'home/jogo/ordem.php',
            data: {ordem:ordem},
            dataType:'html',
            success: function (conteudo) {
              $('#lista_jog_home').html(conteudo);
              $('.busca_jogo_home').html('Filtrado por "'+busca+'"');
            }
          });
          return false;
      });

// ORDEM_CATEGORIA
  $('.ordem_categoria').on('click', function(){
   var ordem = $(this).val();
    $.ajax({
            type: 'post',
            url: url2+'crud/categoria/ordem.php',
            data: {ordem:ordem},
            dataType:'html',
            success: function (conteudo) {
              $('#lista_cat').html(conteudo);
              $('.lista_drop').hide();
              $('.busca_categoria').html('Filtrado por "'+busca+'"');
            }
          });
          return false;
      });

  // ORDEM_AVALIACAO
  $('.ordem_avaliacao').on('click', function(){
   var ordem = $(this).val();
    $.ajax({
            type: 'post',
            url: url2+'crud/avaliacao/ordem.php',
            data: {ordem:ordem},
            dataType:'html',
            success: function (conteudo) {
              $('#lista_ava').html(conteudo);
              $('.busca_avaliacao').html('Filtrado por "'+busca+'"');
            }
          });
          return false;
      });

  // AVALIACAO DO HOME JOGO
  $('.ve_avaliacao_jogo').on('click', function(){
   var b_id = $(this).attr('id');
    
    var id = b_id.split("-");
    //console.log(id[1]+' hahahaha');
    $.ajax({
            type: 'post',
            url: url2+'home/jogo/pega_avaliacao_jogo.php',
            data: {jogo:id[1]},
            success: function (conteudo) {
              console.log(id[1]+' hahahaha');
              $('#ava_home_jogo').html(conteudo);

              $('#inicio_home').hide();
              $('#jogo_home').hide();
              $('#usuario_home').hide();
              $('#sobre_home').hide();
              $('#avaliacao_home_jogo').show();
              $('#avaliacao_home_user').hide();

              $('#edita_usuario').hide();
              $('#cadastro_jogo').hide('fast');
              $('#cadastro_categoria').hide('fast');
              $('.navbar_perfil_drop').hide();
            }
          });
          return false;
      })

    // AVALIACAO DO HOME USUARIO
  $('.ve_avaliacao_usuario').on('click', function(){
   var b_id = $(this).attr('id');
    
    var id = b_id.split("-");
    //console.log(id[1]+' hahahaha');
    $.ajax({
            type: 'post',
            url: url2+'home/usuario/pega_avaliacao_user.php',
            data: {user:id[1]},
            success: function (conteudo) {
              console.log(id[1]+' hahahaha');
              $('#ava_home_user').html(conteudo);

              $('#inicio_home').hide();
              $('#jogo_home').hide();
              $('#usuario_home').hide();
              $('#sobre_home').hide();
              $('#avaliacao_home_jogo').hide();
              $('#avaliacao_home_user').show();

              $('#edita_usuario').hide();
              $('#cadastro_jogo').hide('fast');
              $('#cadastro_categoria').hide('fast');
              $('.navbar_perfil_drop').hide();
            }
          });
          return false;
      });


  // CADASTRO AVALIACAO
  $(function () {
    $('#f_cadastro_avaliacao').bind('submit', function () {
       $.ajax({
        type: 'post',
        url: url2+'crud/avaliacao/cadastro.php',
        data: $('#f_cadastro_avaliacao').serialize(),
        success: function (saida) {
         // console.log(saida);

          if(saida==0)
          {
            UIkit.notification({message: 'Apenas usuarios podem executar esta função', status: 'warning'});
          }
          else if(saida==2)
          {
            UIkit.notification({message: 'Houve algum erro durante o cadastro', status: 'danger'});
          }
          else if(saida==3)
          {
            UIkit.notification({message: 'Já existe uma avaliação com este Nome', status: 'warning'});
          }
          else if(saida==4)
          {
            UIkit.notification({message: 'Você já fez uma avaliação deste jogo', status: 'warning'});
          }
          else
          {
            var array=saida.split("-");
           // console.log(array[0]);
           // console.log(array[1]);
           // console.log(array[2]);
           // console.log(array[3]);
           // console.log(array[4]);
            $('#ava_home_jogo').prepend('<tr id="tr_ava_id-'+array[0]+'"><td>'+array[3]+'</td><td>'+array[1]+'</td><td>'+array[2]+'</td></tr>');

            

           // console.log(array[1]);
           $('#cadastro_avaliacao').hide('fast');
           UIkit.notification({message: 'Jogo avaliado com sucesso', status: 'success'});
          }
        }
      });
      return false;
    });
  });

  // EXCLUI AVALIACAO
  $(document).on('click', 'td.td_b_ava button', function(){
    var b_id = $(this).attr('id');
//    console.log($(this).attr('id'));
    var id = b_id.split("-");
//    console.log(id[1]);
    $.ajax({
            type: 'post',
            url: url2+'crud/avaliacao/exclui.php',
            data: {id_ava:id[1]},
            success: function (saida) {
              if(saida==0)
              {
                 UIkit.notification({message: 'Apenas o administrador pode executar esta função', status: 'warning'});
              }
              else if(saida==2)
              {
                UIkit.notification({message: 'Houve algum erro durante a exclusão', status: 'danger'});
              }
              else
              {
                $('#tr_ava_id-'+id[1]).remove();
                UIkit.notification({message: 'Avaliação excluída com sucesso', status: 'success'});
              }
            }
          });
          return false;
      });

  //BUSCA
   $(function () {
    $('.f_busca').bind('submit', function () {
       $.ajax({
        type: 'post',
        url: url2+'busca.php',
        data: $('.f_busca').serialize(),
        success: function (saida) {
          console.log(saida);
          busca=saida;
        }
      });

       if($('#lista_avaliacao').is(':visible'))
       {
          $.ajax({
            type: 'post',
            url: url2+'crud/avaliacao/ordem.php',
            data: {ordem:1},
            dataType:'html',
            success: function (conteudo) {
              $('#lista_ava').html(conteudo);
              $('.busca_avaliacao').html('Filtrado por "'+busca+'"');
            }
          });
       }
       else if($('#lista_categoria').is(':visible'))
       {
          $.ajax({
            type: 'post',
            url: url2+'crud/categoria/ordem.php',
            data: {ordem:1},
            dataType:'html',
            success: function (conteudo) {
              $('#lista_cat').html(conteudo);
              $('.busca_categoria').html('Filtrado por "'+busca+'"');
              $('.lista_drop').hide();
            }
          });
       }
       else if($('#lista_jogo').is(':visible'))
       {
          $.ajax({
            type: 'post',
            url: url2+'crud/jogo/ordem.php',
            data: {ordem:1},
            dataType:'html',
            success: function (conteudo) {
              $('#lista_jog').html(conteudo);
              $('.lista_drop').hide();
              $('.busca_jogo').html('Filtrado por "'+busca+'"');
            }
          });
       }
       else if($('#jogo_home').is(':visible'))
       {
          $.ajax({
            type: 'post',
            url: url2+'home/jogo/ordem.php',
            data: {ordem:1},
            dataType:'html',
            success: function (conteudo) {
              $('#lista_jog_home').html(conteudo);
              $('.busca_jogo_home').html('Filtrado por "'+busca+'"');
            }
          });
       }
       else if($('#lista_usuario').is(':visible'))
       {
          $.ajax({
            type: 'post',
            url: url2+'crud/usuario/ordem.php',
            data: {ordem:1},
            dataType:'html',
            success: function (conteudo) {
              $('#lista_usu').html(conteudo);
              $('.busca_usuario').html('Filtrado por "'+busca+'"');
            }
          });
       }
       else if($('#usuario_home').is(':visible'))
       {
          $.ajax({
            type: 'post',
            url: url2+'home/usuario/ordem.php',
            data: {ordem:1},
            dataType:'html',
            success: function (conteudo) {
              $('#lista_usu_home').html(conteudo);
              $('.busca_usuario').html('Filtrado por "'+busca+'"');
            }
          });
       }
      return false;
    });
  });

  //BUSCA CELULAR
   $(function () {
    $('.f_busca_celular').bind('submit', function () {
       $.ajax({
        type: 'post',
        url: url2+'busca.php',
        data: $('.f_busca_celular').serialize(),
        success: function (saida) {
          console.log(saida);
          busca=saida;
        }
      });

       if($('#lista_avaliacao').is(':visible'))
       {
          $.ajax({
            type: 'post',
            url: url2+'crud/avaliacao/ordem.php',
            data: {ordem:1},
            dataType:'html',
            success: function (conteudo) {
              $('#lista_ava').html(conteudo);
              $('.busca_avaliacao').html('Filtrado por "'+busca+'"');
            }
          });
       }
       else if($('#lista_categoria').is(':visible'))
       {
          $.ajax({
            type: 'post',
            url: url2+'crud/categoria/ordem.php',
            data: {ordem:1},
            dataType:'html',
            success: function (conteudo) {
              $('#lista_cat').html(conteudo);
              $('.busca_categoria').html('Filtrado por "'+busca+'"');
              $('.lista_drop').hide();
            }
          });
       }
       else if($('#lista_jogo').is(':visible'))
       {
          $.ajax({
            type: 'post',
            url: url2+'crud/jogo/ordem.php',
            data: {ordem:1},
            dataType:'html',
            success: function (conteudo) {
              $('#lista_jog').html(conteudo);
              $('.lista_drop').hide();
              $('.busca_jogo').html('Filtrado por "'+busca+'"');
            }
          });
       }
       else if($('#jogo_home').is(':visible'))
       {
          $.ajax({
            type: 'post',
            url: url2+'home/jogo/ordem.php',
            data: {ordem:1},
            dataType:'html',
            success: function (conteudo) {
              $('#lista_jog_home').html(conteudo);
              $('.busca_jogo_home').html('Filtrado por "'+busca+'"');
            }
          });
       }
       else if($('#lista_usuario').is(':visible'))
       {
          $.ajax({
            type: 'post',
            url: url2+'crud/usuario/ordem.php',
            data: {ordem:1},
            dataType:'html',
            success: function (conteudo) {
              $('#lista_usu').html(conteudo);
              $('.busca_usuario').html('Filtrado por "'+busca+'"');
            }
          });
       }
       else if($('#usuario_home').is(':visible'))
       {
          $.ajax({
            type: 'post',
            url: url2+'home/usuario/ordem.php',
            data: {ordem:1},
            dataType:'html',
            success: function (conteudo) {
              $('#lista_usu_home').html(conteudo);
              $('.busca_usuario').html('Filtrado por "'+busca+'"');
            }
          });
       }
      return false;
    });
  });

});