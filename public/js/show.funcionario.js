$(document).ready(function() {
  buscarDados();
});

function buscarDados() {
    load(true);
  $.ajaxSetup({
    headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
  });

  var url = "/funcionario";

  $.ajax({
      url: url,
      type: "POST",
      dataType: 'json',
      cache: false,
      success: function (data) {
          if (data.ID_FUNCIONARIO != null) {
              preencherDados(data);
          } else {
              alert("Ocorreu um erro ao buscar dados");
          }
      },
      error: function () {
          alert("Erro na conexão");
      },
  });

}

function preencherDados(data) {
      // DADOS PESSOAIS - 1
      $('#cnome_funcionario').val(data.NOME);

      if(data.SEXO_CODIGO == "M"){
        $('#mop_necessidades').val(data.SEXO_CODIGO);
        $("#mop_necessidades").prop("checked", true)
      } else {
        $('#fop_necessidades').val(data.SEXO_CODIGO);
        $("#fop_necessidades").prop("checked", true);
      }

      // Dados empresa
      $('#empresa').val();

      $('#cpf-funcionario').val(data.CPF_COMPLETO);

        // CNH
      if(data.CNH_CATEGORIA != null){
        $('#sop_cnh').val();
        $("#sop_cnh").prop("checked", true)
      } else {
        $('#sop_cnh').val();
        $("#sop_cnh").prop("checked", true);
      }

      $('#num_cart_habilitacao').val(data.CNH_NRO);
      $('#categoria_habilitacao').val(data.CNH_CATEGORIA);
      $('#uf_habilitacao').val(data.CNH_ESTADO_EMISSOR);
      $('#DataVencimentoCNH').val(data.CNH_DT_VALIDADE);


      // Título de Eleitor



      // CARTEIRA DE TRABALHO

      $('#numero_ctps').val(data.CART_PROFISSIONAL_NRO);
      $('#serie_ctps').val(data.CART_PROFISSIONAL_SERIE);
      $('#uf_ctps').val(data.ESTADO);
      $('#expedicao_ctps').val(data.CART_PROFISSIONAL_DATA_EXPED);
      $('#DataValidade_ctps').val(data.CART_PROFISSIONAL_DATA_VALID);
      $('#pis_pasep').val(data.PIS_PASEP);
      $('#letra_ctps').val(data.CART_PROFISSIONAL_LETRA);
      $('#p_integracao').val(data.PROGRAMA_INTEGRACAO);
      $('#modelo_ctps').val(""); // Fazer


      // CASO POSSUA RIC - REGISTRO DE IDENTIDADE CIVIL ÚNICO

      $('#ric').val(data.RIC_NRO);
      $('#orgao_emiss_ric').val(data.RIC_ORGAO_EMISSOR);
      $('#orgao_emiss_ric').val(data.RIC_DT_EXPEDICAO);
      $('#uf_ric').val();
      $('#dt_d_expedicao_ric').val();


      // CERTIDÃO CIVIL


      // Escolaridade, Estado Civil
      $('#codigo_escolaridade').val(data.ID_GRAU_ESCOLARIDADE);
      console.log(data.ID_GRAU_ESCOLARIDADE);
      $('#estado_civil').val(data.ID_ESTADO_CIVIL);

      // DADOS PESSOAIS - 2
      $('#nome_pai').val(data.PAI);
      $('#nome_mae').val(data.MAE);

      $('#dt_d_nascimento').val(data.DATA_NASCIMENTO);
      $('#uf_nascimento').val(data.ESTADO_NASCIMENTO);
      $('#cidadeNascimento').val(data.CIDADE_NASCIMENTO);
      $('#codigo_NACIONALIDADE').val(data.ID_NACIONALIDADE);
      $('#endereco').val(data.ENDERECO);
      $('#bairro').val(data.BAIRRO);
      $('#cep').val(data.CEP);
      $('#uf_cidade').val(data.ESTADO);
      $('#cidade').val(data.CIDADE);

      // Contatos = Telefone e email

       if(data.NATURALIZADO == "S") {
         $('#sim_naturalizado').val(data.NATURALIZADO);
         $("#sim_naturalizado").prop("checked", true);
       } else if(data.NATURALIZADO == "N") {
         $('#nao_naturalizado').val(data.NATURALIZADO);
         $("#nao_naturalizado").prop("checked", true);
       }

       $('#numero_rne').val(data.RNE_NRO);
       $('#data_naturalizacao').val(data.DATA_NATURALIZACAO);
       $('#data_chegada').val(data.DATA_CHEGADA_PAIS);
       $('#data_expedicao_rne').val(data.RNE_DATA_EMISSAO);
       $('#orgao_emissor_rne').val(data.RNE_ORGAO_EMISSOR);

       if(data.CASADO_COM_BRASILEIRO == "S") {
         $('#sim_casadoBrasileiro').val(data.CASADO_COM_BRASILEIRO);
         $("#sim_casadoBrasileiro").prop("checked", true);
       }else {
         $('#nao_casadoBrasileiro').val(data.CASADO_COM_BRASILEIRO);
         $("#nao_casadoBrasileiro").prop("checked", true);
       }

       if(data.FILHOS_COM_BRASILEIRO == "S") {
         $('#sim_filhosBrasileiros').val(data.FILHOS_COM_BRASILEIRO);
         $("#sim_filhosBrasileiros").prop("checked", true);
       }else {
         $('#nao_filhosBrasileiros').val(data.FILHOS_COM_BRASILEIRO);
         $("#nao_filhosBrasileiros").prop("checked", true);
       }

       $('#nao_filhosBrasileiros').val(data.CLASSIF_CONDICAO_ESTRANGEIRO);

      //Carteira de Identidade

      $('#carteira_identidade').val(data.RG_NRO);
      $('#no_orgao_emissor_cidentidade').val(data.RG_ORGAO_EMISSOR);
      $('#uf_emissao').val(data.RG_ESTADO_EMISSOR);
      $('#rg_DataEmissao').val(data.RG_DATA_EXPEDICAO);

      // Descrição Física

      $('#cutis').val(data.ID_RACA_COR);


      // Dependentes



      dependentes();

}


function updateFuncionario() {

}

function habilitacao() {
  $.ajaxSetup({
    headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
  });

  var url = "/naturalizacao";

  $.ajax({
      url: url,
      type: "POST",
      dataType: 'json',
      cache: false,
      success: function (data) {
          if (data.length > 0) {
              preencherDadosDependentes(data);
          } else {
             //alert("Ocorreu um erro ao verificar dependentes");
             load(false);
          }
      },
      error: function () {
          // Fail message
          alert("Erro na conexão");
          load(false);
      },
  });


}pnome_funcionario

function pegarDadosFuncionario() {

    var sexo;
    if($('#mop_necessidades').val() == null) {
       sexo = $('#fop_necessidades').val();
    } else {
      sexo = $('#mop_necessidades').val();
    }

    var retorno = {
      primeiro_nome: $('#pnome_funcionario').val(),
      nome_meio: $('#mnome_funcionario').val(),
      ultimo_nome: $('#unome_funcionario').val(),
      nome: $('#cnome_funcionario').val(),
      rg: $('#pnome_funcionario').val(),
      data_exp_rg: $('#pnome_funcionario').val(),
      estado_emissor_rg: $('#pnome_funcionario').val(),
      orgao_emissor_rg: $('#pnome_funcionario').val(),
      pai: $('#nome_pai').val(),
      mae: $('#nome_pai').val(),
      data_nascimento: $('#dt_d_nascimento').val(),
      pais_nascimento: $('#codigo_NACIONALIDADE').val(), // INT
      estado_nascimento: $('#uf_nascimento').val(), // INT
      cidade_nascimento: $('#cidadeNascimento').val(),
      id_estado_civil: $('#estado_civil').val(),
      sexo: sexo,
      cpf_proprio: $('#pnome_funcionario').val(),
      cpf: $('#cpf-funcionario').val(),
      id_escolaridade: $('#codigo_escolaridade').val(),
      id_raca_cor: $('#pnome_funcionario').val(),
    }

}

function naturalizacao() {
  $.ajaxSetup({
    headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
  });

  var url = "/naturalizacao";

  $.ajax({
      url: url,
      type: "POST",
      dataType: 'json',
      cache: false,
      success: function (data) {
          if (data.length > 0) {
              preencherDadosDependentes(data);
          } else {
             //alert("Ocorreu um erro ao verificar dependentes");
             load(false);
          }
      },
      error: function () {
          // Fail message
          alert("Erro na conexão");
          load(false);
      },
  });


}


// Buscar dependentes
function dependentes(){

   $.ajaxSetup({
     headers: {
               'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
     }
   });

   var url = "/dependentes";

   $.ajax({
       url: url,
       type: "POST",
       dataType: 'json',
       cache: false,
       success: function (data) {
           if (data.length > 0) {
               preencherDadosDependentes(data)
           } else {
              //alert("Ocorreu um erro ao verificar dependentes");
              load(false);
           }
       },
       error: function () {
           // Fail message
           alert("Erro na conexão");
           load(false);
       },
   });
}


function preencherDadosDependentes(data) {

     load(false);

}

// Logout
$('#logout').click(function(){
      if(confirm("Click em ok para sair")){
            $.ajaxSetup({
              headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
              }
            });

            var url = "/fazer_logout";
             $.ajax({
             url: url,
             type: "POST",
             dataType: 'json',
             cache: false,
             success: function(data) {
                 if(data.valid){
                     location.reload();
                 }else{
                    alert("Erro na conexão");
                 }
             },
             error: function() {
                 alert("Erro na conexão");
             },
         }); // END AJAX
      }
});

function load(display){
   if(display){
     $('#load').css("display", "block");
   } else {
     $('#load').css("display", "none");
   }
}

function formatDate(data){
    var now = new Date();
    return now.format(data);
    console.log(now.format(data));
}
