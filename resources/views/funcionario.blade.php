<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title> Recadastramento Funcional - Brasal </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="css/principal.css"/>
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css"/>
    <link href="css/style.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <style>

      #logout:hover {
        color: rgba(0,0,0,.67) !important;
      }
    </style>
</head>

<body class="bg-linen" style="margin-top: -20px;">
    <div class="gforms">
      <div style="position: relative; top: 0; right: 0; margin-bottom: 25px;">
        <a style="position: absolute; right: 0; margin-right: 25px; color: black" id="logout" href="#">SAIR</a>
      </div>
        <div class="golden-forms wrapper wide">
          <form name="frm" id="frm" >
            <input type="hidden" id="empresa" name="empresa" value="">
            <input type="hidden" id="descricao_empresa" name="descricao_empresa" value="">
              <div class="form-title">
                  <h2>Recadastramento Funcional</h2><div class="logo"><img src="images/logo.png" alt="Brasal"></div>
              </div>
              <div class="form-enclose">
                  <div class="form-section">
                      <section>
                          <label for="msg" class="lbl-text ext area">DADOS PESSOAIS</label>
                      </section>
                     <div class="row">
                         <div class="col6 first">
                             <section>
                                <label for="pnome_funcionario" class="lbl-text">PRIMEIRO NOME</label>
                                <label class="lbl-ui">
                                  <input type="text" name="pnome_funcionario" id="pnome_funcionario" class="input" value="" autofocus required />
                                </label>
                             </section>
                             <section>
                                <label for="mnome_funcionario" class="lbl-text">NOME DO MEIO</label>
                                <label class="lbl-ui">
                                  <input type="text" name="mnome_funcionario" id="mnome_funcionario" class="input" value="" autofocus required />
                                </label>
                             </section>
                             <section>
                                <label for="unome_funcionario" class="lbl-text">ÚLTIMO NOME</label>
                                <label class="lbl-ui">
                                  <input type="text" name="unome_funcionario" id="unome_funcionario" class="input" value="" autofocus required />
                                </label>
                             </section>
                             <section>
                                <label for="cnome_funcionario" class="lbl-text">Nome Completo:</label>
                                <label class="lbl-ui">
                                  <input type="text" name="cnome_funcionario" id="cnome_funcionario" class="input" value="" autofocus required />
                                </label>
                             </section>
                             <section>
                              <label for="msg" class="lbl-text ext">SEXO</label>
                              <div class="option-group block">
                                 <span class="goption">
                                      <label for="mop_necessidades" class="options">
                                          <input type="radio" id="mop_necessidades" name="sexo" value="M"/>
                                          <span class="radio"></span>
                                      </label>
                                      <label for="option7">MASCULINO</label>
                                 </span>
                                 <span class="goption">
                                      <label for="fop_necessidades" class="options">
                                          <input type="radio" id="fop_necessidades" name="sexo" value="F"/>
                                          <span class="radio"></span>
                                      </label>
                                      <label for="option8">FEMININO</label>
                                 </span>
                              </div>
                         </section>

                             <section>
                                <label for="empresa" class="lbl-text">Empresa:</label>
                                <label class="lbl-ui">
                                  <input type="text" name="empresa" id="empresa" class="input" value="" autofocus required />
                                </label>
                             </section>
                             <section>
                                <label for="estabelecimento" class="lbl-text">Estabelecimento:</label>
                                <label class="lbl-ui">
                                  <input type="text" name="estabelecimento" id="estabelecimento" class="input" value="" autofocus required />
                                </label>
                             </section>
                             <section>
                                <label for="matricula" class="lbl-text">Matrícula:</label>
                                <label class="lbl-ui">
                                  <input type="text" name="matricula" id="matricula" class="input" value="" autofocus required />
                                </label>
                             </section>

                             <section>
                                  <label for="msg" class="lbl-text ext area">DOCUMENTOS</label>
                             </section>

                             <section>
                                <label for="nu_cpf" class="lbl-text">CPF:</label>
                                <label for="cpf-funcionario" class="lbl-ui">
                                  <input type="text" name="cpf" id="cpf-funcionario" class="input" value="" autofocus required />
                                </label>
                             </section>
                             <section>
                                <label for="msg" class="lbl-text ext area">Carteira Nacional de Habilitacao (CNH)</label>
                             </section>
                             <section>
                                <div class="option-group block">
                                   <span class="goption">
                                        <label for="sop_cnh" class="options">
                                            <input type="radio" id="sop_cnh" name="cnh" value="Sim"/>
                                            <span class="radio"></span>
                                        </label>
                                        <label for="option1">Possui</label>
                                   </span>
                                   <span class="goption">
                                        <label for="nop_cnh" class="options">
                                            <input type="radio" id="nop_cnh" name="cnh" value="Não"/>
                                            <span class="radio"></span>
                                        </label>
                                        <label for="option2">Não Possui</label>
                                   </span>
                                </div>
                             </section>
                             <section>
                                <div class="row">
                                        <div class="col5 first">
                                            <label for="nu_cnh" class="lbl-text">Número:</label>
                                            <label for="num_cart_habilitacao" class="lbl-ui">
                                              <input name="num_cart_habilitacao" type="text" class="input" id="num_cart_habilitacao" value="" />
                                            </label>
                                        </div>
                                        <div class="col3 colspacer-two">
                                            <span class="lbl-text">Categoria:</span>
                                            <label for="categoria_habilitacao" class="lbl-ui">
                                              <input name="categoria_habilitacao" type="text" class="input" id="categoria_habilitacao" value="" />
                                            </label>
                                        </div>
                                        <div class="col4 last colspacer-two">
                                            <label for="uf_habilitacao" class="lbl-text">UF:</label>
                                            <label for="uf_cnh" class="lbl-ui select">
                                             <select id="uf_habilitacao" name="uf_habilitacao">
                                              <option value=""></option>
                                              <option value="AC">AC</option>
                                              <option value="AL">AL</option>
                                              <option value="AP">AP</option>
                                              <option value="AM">AM</option>
                                              <option value="BA">BA</option>
                                              <option value="CE">CE</option>
                                              <option value="DF">DF</option>
                                              <option value="ES">ES</option>
                                              <option value="GO">GO</option>
                                              <option value="MA">MA</option>
                                              <option value="MT">MT</option>
                                              <option value="MS">MS</option>
                                              <option value="MG">MG</option>
                                              <option value="PA">PA</option>
                                              <option value="PB">PB</option>
                                              <option value="PR">PR</option>
                                              <option value="PE">PE</option>
                                              <option value="PI">PI</option>
                                              <option value="RJ">RJ</option>
                                              <option value="RN">RN</option>
                                              <option value="RS">RS</option>
                                              <option value="RO">RO</option>
                                              <option value="RR">RR</option>
                                              <option value="SC">SC</option>
                                              <option value="SP">SP</option>
                                              <option value="SE">SE</option>
                                              <option value="TO">TO</option>
                                             </select>
                                            </label>
                                        </div>
                                </div>
                            </section>
                            <section>
                                  <label for="DataVencimentoCNH" class="lbl-text">Data de Vencimento da CNH</label>
                                    <div class="row">
                                        <div class="col4 first">
                                          <input type="date" id="DataVencimentoCNH" name="DataVencimentoCNH" value="">
                                        </div>
                                    </div>
                              </section>
                              <section>
                                <label for="msg" class="lbl-text ext area">Carteira de Trabalho</label>
                              </section>
                              <section>
                                  <div class="row">
                                      <div class="col4 first">
                                          <label for="numero_ctps" class="lbl-text">Número:</label>
                                          <label class="lbl-ui">
                                            <input type="text" name="numero_ctps" id="numero_ctps" class="input"value="" autofocus required />
                                          </label>
                                      </div>
                                      <div class="col4 colspacer-two">
                                          <label for="serie_ctps" class="lbl-text">Série:</label>
                                          <label class="lbl-ui">
                                            <input type="text" name="serie_ctps" id="serie_ctps" class="input" value="" autofocus required />
                                          </label>
                                      </div>
                                      <div class="col4 last colspacer-two">
                                          <label for="uf_ctrabalho" class="lbl-text">UF:</label>
                                          <label for="uf_ctrabalho" class="lbl-ui select">
                                                <select id="uf_ctps" name="uf_ctps" autofocus required >
                                                  <option value=""></option>
                                                  <option value="AC">AC</option>
                                                  <option value="AL">AL</option>
                                                  <option value="AP">AP</option>
                                                  <option value="AM">AM</option>
                                                  <option value="BA">BA</option>
                                                  <option value="CE">CE</option>
                                                  <option value="DF">DF</option>
                                                  <option value="ES">ES</option>
                                                  <option value="GO">GO</option>
                                                  <option value="MA">MA</option>
                                                  <option value="MT">MT</option>
                                                  <option value="MS">MS</option>
                                                  <option value="MG">MG</option>
                                                  <option value="PA">PA</option>
                                                  <option value="PB">PB</option>
                                                  <option value="PR">PR</option>
                                                  <option value="PE">PE</option>
                                                  <option value="PI">PI</option>
                                                  <option value="RJ">RJ</option>
                                                  <option value="RN">RN</option>
                                                  <option value="RS">RS</option>
                                                  <option value="RO">RO</option>
                                                  <option value="RR">RR</option>
                                                  <option value="SC">SC</option>
                                                  <option value="SP">SP</option>
                                                  <option value="SE">SE</option>
                                                  <option value="TO">TO</option>
                                                </select>
                                          </label>
                                      </div>
                                  </div>
                              </section>
                              <section>
                                 <div class="row">
                                        <div class="col4 first">
                                            <label for="pis_pasep" class="lbl-text">PIS PASEP:</label>
                                              <label class="lbl-ui">
                                                <input type="text" name="pis_pasep" id="pis_pasep" class="input" value="" autofocus required />
                                              </label>
                                          </div>
                                        <div class="col4 first">
                                            <label for="letra_ctps" class="lbl-text"><label>Letra:</label>
                                              <label class="lbl-ui">
                                                <input type="text" name="letra_ctps" id="letra_ctps" class="input" value="" autofocus required />
                                              </label>
                                          </div>
                                        <div class="col4 first">
                                            <label for="p_integracao" class="lbl-text">Programa de Integração:</label>
                                            <label class="lbl-ui">
                                                  <input type="text" id="p_integracao" class="input" name="p_integracao" autofocus required>
                                            </label>
                                          </div>
                                      </div>
                              </section>
                              <section>
                                  <label for="expedicao_ctps" class="lbl-text">Data da Expedição</label>
                                  <div class="row">
                                        <div class="col4 first">
                                            <input type="date" id="expedicao_ctps" name="expedicao_ctps" value="">
                                        </div>
                                  </div>
                              </section>
                              <section>
                                  <label for="DataValidade_ctps" class="lbl-text">Data de Validade</label>
                                    <div class="row">
                                        <div class="col4 first">
                                        <label for="dia" class="lbl-text">Dia</label>
                                            <input type="date" id="DataValidade_ctps" name="DataValidadeCT_ctps" value="">
                                        </div>
                                    </div>
                              </section>
                              <section>
                                 <div class="row">
                                    <div class="col6 first">
                                      <label for="modelo_ctps" class="lbl-text">Modelo:</label>
                                      <label for="modelo_ctrabalho" class="lbl-ui select">
                                          <select id="modelo_ctps" name="modelo_ctps" autofocus required>
                                             <option value=""></option>
                                             <option value="1|Menor">Menor</option>
                                             <option value="2|Rural">Rural</option>
                                             <option value="3|Urbana">Urbana</option>
                                             <option value="4|Nenhuma">Nenhuma</option>
                                          </select>
                                      </label>
                                    </div>
                                  </div>
                              </section>

                              <section>
                                 <label for="msg" class="lbl-text ext area">Caso possua RIC - Registro de Identidade Civil Único</label>
                              </section>
                              <section>
                                   <div class="row">
                                        <div class="col6 first">
                                            <label for="ric" class="lbl-text">Número:</label>
                                              <label class="lbl-ui">
                                                <input type="text" name="ric" id="ric" class="input" value="" />
                                              </label>
                                        </div>
                                        <div class="col6 last colspacer-two">
                                            <label for="orgao_emiss_ric" class="lbl-text">Órgão Expedidor:</label>
                                              <label class="lbl-ui">
                                                <input type="text" name="orgao_emiss_ric" id="orgao_emiss_ric" class="input" value="" />
                                              </label>
                                        </div>
                                    </div>
                              </section>
                              <section>
                                 <div class="row">
                                      <div class="col6 first">
                                        <label for="states" class="lbl-text">UF:</label>
                                        <label for="estado_ric" class="lbl-ui select">
                                                  <select id="uf_ric" name="uf_ric">
                                                      <option value="" ></option>
                                                      <option value="AC">AC</option>
                                                      <option value="AL">AL</option>
                                                      <option value="AP">AP</option>
                                                      <option value="AM">AM</option>
                                                      <option value="BA">BA</option>
                                                      <option value="CE">CE</option>
                                                      <option value="DF">DF</option>
                                                      <option value="ES">ES</option>
                                                      <option value="GO">GO</option>
                                                      <option value="MA">MA</option>
                                                      <option value="MT">MT</option>
                                                      <option value="MS">MS</option>
                                                      <option value="MG">MG</option>
                                                      <option value="PA">PA</option>
                                                      <option value="PB">PB</option>
                                                      <option value="PR">PR</option>
                                                      <option value="PE">PE</option>
                                                      <option value="PI">PI</option>
                                                      <option value="RJ">RJ</option>
                                                      <option value="RN">RN</option>
                                                      <option value="RS">RS</option>
                                                      <option value="RO">RO</option>
                                                      <option value="RR">RR</option>
                                                      <option value="SC">SC</option>
                                                      <option value="SP">SP</option>
                                                      <option value="SE">SE</option>
                                                      <option value="TO">TO</option>
                                                  </select>
                                        </label>
                                    </div>
                                    <div class="col6 last colspacer-two">
                                        <label for="cidade_ric" class="lbl-text">Cidade:</label>
                                        <label class="lbl-ui">
                                          <input type="text" name="cidade_ric" id="cidade_ric" class="input" value=""/>
                                        </label>
                                    </div>
                                </div>
                          </section>
                          <section>
                                  <label for="msg" class="lbl-text">Data de Expedião:</label>
                                  <div class="row">
                                          <div class="col4 first">
                                              <label for="dt_d_expedicao_ric" class="lbl-text">Dia</label>
                                                 <input type="date" id="dt_d_expedicao_ric" name="dt_d_expedicao_ric" value="">
                                              </label>
                                        </div>

                                  </div>
                              </section>
                              <section>
                            <label for="msg" class="lbl-text ext area">Certidão Civil</label>
                        </section>
                        <section>
                           <div class="row">
                                <div class="col6 first">
                                    <label for="tp_certidao_civil" class="lbl-text">Tipo de Certidão:</label>
                                    <label for="tp_certidao_civil" class="lbl-ui select">
                                        <select id="tipo_certidao_civil" name="tipo_certidao_civil" autofocus required >
                                              <option value=""></option>
                                              <option value="1">Nascimento</option>
                                              <option value="2">Casamento</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="col6 last colspacer-two">
                                    <label for="termo_certidao_civil" class="lbl-text">Termo/Matrícula:</label>
                                    <label class="lbl-ui">
                                      <input type="text" name="termo_matricula" id="termo_matricula" class="input" value="" autofocus required />
                                    </label>
                                </div>
                            </div>
                        </section>
                        <section>
                            <label for="DataEmissaoCivil" class="lbl-text">Data de Emissão:</label>
                            <div class="row">
                                        <div class="col4 first">
                                              <input type="date" id="DataEmissaoCivil" name="DataEmissaoCivil" value="">
                                        </div>
                              </div>
                              </section>
                              <section>
                                  <div class="row">
                                          <div class="col4 first">
                                              <label for="livro_certidao_civil" class="lbl-text">Livro:</label>
                                              <label class="lbl-ui">
                                                <input type="text" name="livro_certidao" id="livro_certidao" class="input" value=""/>
                                              </label>
                                          </div>
                                          <div class="col4 colspacer-two">
                                              <label for="folha_certidao_civil" class="lbl-text">Folha:</label>
                                              <label class="lbl-ui">
                                                <input type="text" name="folha_certidao" id="folha_certidao" class="input" value=""/>
                                              </label>
                                          </div>
                                          <div class="col4 last colspacer-two">
                                              <label for="no_cartorio_certidao_civil" class="lbl-text">Cartório:</label>
                                              <label class="lbl-ui">
                                                <input type="text" name="cartorio_certidao" id="cartorio_certidao" class="input" value=""/>
                                              </label>
                                          </div>
                                      </div>
                              </section>
                              <section>
                                 <div class="row">
                                    <div class="col6 first">
                                        <label for="uf_certidao_civil" class="lbl-text">UF:</label>
                                              <label for="uf_certidao_civil" class="lbl-ui select">
                                                     <select id="uf_certidao" name="uf_certidao">
                                                        <option value=""></option>
                                                        <option value="AC">AC</option>
                                                        <option value="AL">AL</option>
                                                        <option value="AP">AP</option>
                                                        <option value="AM">AM</option>
                                                        <option value="BA">BA</option>
                                                        <option value="CE">CE</option>
                                                        <option value="DF">DF</option>
                                                        <option value="ES">ES</option>
                                                        <option value="GO">GO</option>
                                                        <option value="MA">MA</option>
                                                        <option value="MT">MT</option>
                                                        <option value="MS">MS</option>
                                                        <option value="MG">MG</option>
                                                        <option value="PA">PA</option>
                                                        <option value="PB">PB</option>
                                                        <option value="PR">PR</option>
                                                        <option value="PE">PE</option>
                                                        <option value="PI">PI</option>
                                                        <option value="RJ">RJ</option>
                                                        <option value="RN">RN</option>
                                                        <option value="RS">RS</option>
                                                        <option value="RO">RO</option>
                                                        <option value="RR">RR</option>
                                                        <option value="SC">SC</option>
                                                        <option value="SP">SP</option>
                                                        <option value="SE">SE</option>
                                                        <option value="TO">TO</option>
                                                     </select>
                                              </label>
                                    </div>
                                    <div class="col6 last colspacer-two">
                                        <label for="cidade_certidao_civil" class="lbl-text">Cidade:</label>
                                        <label class="lbl-ui">
                                          <input type="text" name="municipio" id="municipio" class="input" value=""/>
                                        </label>
                                    </div>
                                </div>
                            </section>
                      </div>
                      <div class="col6 last">
                      <section>
                         <div class="row">
                              <div class="col6 first">
                                  <label for="codigo_escolaridade" class="lbl-text">Escolaridade:</label>
                                  <label for="ds_escolaridade" class="lbl-ui select">
                                        <select id="codigo_escolaridade" name="codigo_escolaridade" autofocus required >
                                              <option value=">"></option>
                                              <option value="1">ANALFABETO</option>
                                              <option value="13">ALFABETIZADO</option>
                                              <option value="2">ENSINO FUNDAMENTAL INCOMPLETO (1 GRAU)</option>
                                              <option value="3">ENSINO FUNDAMENTAL COMPLETO (1 GRAU)</option>
                                              <option value="4">ENSINO TECNICO</option>
                                              <option value="5">OBSOLETO</option>
                                              <option value="6">ENSINO MEDIO INCOMPLETO (2 GRAU)</option>
                                              <option value="7">ENSINO MEDIO COMPLETO (2 GRAU)</option>
                                              <option value="8">SUPERIOR INCOMPLETO</option>
                                              <option value="9">SUPERIOR COMPLETO</option>
                                              <option value="10">POS GRADUACAO/MBA</option>
                                              <option value="11">MESTRADO</option>
                                              <option value="12">DOUTORADO</option>
                                        </select>
                                  </label>
                              </div>
                              <div class="col6 last colspacer-two">
                                  <label for="estado_civil" class="lbl-text">Estado Civil:</label>
                                        <label for="estado_civil" class="lbl-ui select">
                                                  <select id="estado_civil" name="estado_civil" autofocus required >
                                                      <option value=""></option>
                                                      <option value="1">SOLTEIRO</option>
                                                      <option value="2">CASADO</option>
                                                      <option value="3">VIUVO</option>
                                                      <option value="4">UNIAO ESTAVEL</option>
                                                      <option value="5">DESQUITADO</option>
                                                      <option value="6">DIVORCIADO</option>
                                                      <option value="7">OBSOLETO</option>
                                                      <option value="8">SEPARADO JUDICIALMENTE</option>
                                                  </select>
                                        </label>
                              </div>
                          </div>
                      </section>
                      <section>
                        <label for="nome_pai" class="lbl-text">Nome do Pai:</label>
                        <label class="lbl-ui">
                          <input type="text" name="nome_pai" id="nome_pai" class="input" value=""/>
                        </label>
                      </section>
                      <section>
                        <label for="nome_mae" class="lbl-text">Nome da Mãe:</label>
                        <label class="lbl-ui">
                          <input type="text" name="nome_mae" id="nome_mae" class="input" value="" autofocus required />
                        </label>
                      </section>
                      <section>
                        <label for="msg" class="lbl-text">Data de Nascimento:</label>
                          <div class="row">
                                        <div class="col4 first">
                                              <label for="dt_d_nascimento" class="lbl-ui select">
                                                <input type="date" id="dt_d_nascimento" name="dt_d_nascimento" value="">
                                              </label>
                                        </div>
                                  </div>
                            </section>
                            <section>
                             <div class="row">
                                <div class="col6 first">
                                  <label for="uf_nascimento" class="lbl-text">UF NASCIMENTO</label>
                                  <label class="lbl-ui select">
                                    <select id="uf_nascimento" name="uf_nascimento" autofocus required >
                                      <option value=""></option>
                                      <option value="AC">AC</option>
                                      <option value="AL">AL</option>
                                      <option value="AP">AP</option>
                                      <option value="AM">AM</option>
                                      <option value="BA">BA</option>
                                      <option value="CE">CE</option>
                                      <option value="DF">DF</option>
                                      <option value="ES">ES</option>
                                      <option value="GO">GO</option>
                                      <option value="MA">MA</option>
                                      <option value="MT">MT</option>
                                      <option value="MS">MS</option>
                                      <option value="MG">MG</option>
                                      <option value="PA">PA</option>
                                      <option value="PB">PB</option>
                                      <option value="PR">PR</option>
                                      <option value="PE">PE</option>
                                      <option value="PI">PI</option>
                                      <option value="RJ">RJ</option>
                                      <option value="RN">RN</option>
                                      <option value="RS">RS</option>
                                      <option value="RO">RO</option>
                                      <option value="RR">RR</option>
                                      <option value="SC">SC</option>
                                      <option value="SP">SP</option>
                                      <option value="SE">SE</option>
                                      <option value="TO">TO</option>
                                    </select>
                                  </label>
                                </div>
                                <div class="col6 last colspacer-two">
                                  <label for="cidadeNascimento" class="lbl-text">CIDADE NASCIMENTO</label>
                                  <label class="lbl-ui">
                                    <input type="text" name="cidadeNascimento" id="cidadeNascimento" class="input" value="" autofocus required />
                                  </label>
                                </div>
                            </div>
                        </section>
                        <section>
                         <div class="row">
                              <div class="col6 first">
                                  <label for="ds_NACIONALIDADE" class="lbl-text">NACIONALIDADE</label>
                                  <label class="lbl-ui select">
                                        <select id="codigo_NACIONALIDADE" name="codigo_NACIONALIDADE" autofocus required >
                                              <option value=""></option>
                                              <option value="10">BRASIL</option>
                                              <option value="20">(OBSOLETO) OUTROS PAISES</option>
                                              <option value="21">ARGENTINA</option>
                                              <option value="22">BOLIVIA</option>
                                              <option value="23">CHILE</option>
                                              <option value="24">PARAGUAI</option>
                                              <option value="25">URUGUAI</option>
                                              <option value="26">AFRICA</option>
                                              <option value="30">ALEMANHA</option>
                                              <option value="31">BELGICA</option>
                                              <option value="32">INGLATERRA</option>
                                              <option value="34">CANADA</option>
                                              <option value="35">ESPANHA</option>
                                              <option value="36">ESTADOS UNIDOS DA AMERICA</option>
                                              <option value="37">FRANCA</option>
                                              <option value="38">SUICA</option>
                                              <option value="39">ITALIA</option>
                                              <option value="41">JAPAO</option>
                                              <option value="42">CHINA</option>
                                              <option value="43">COREA DO NORTE</option>
                                              <option value="45">PORTUGAL</option>
                                              <option value="48">(OBSOLETO) OUTROS PAISES LATINO-AMERICANO</option>
                                              <option value="49">(OBSOLETO) OUTROS PAISES ASIATICOS</option>
                                              <option value="50">(OBSOLETO) OUTROS PAISES</option>
                                              <option value="51">COLOMBIA</option>
                                              <option value="GAN">GANA</option>
                                              <option value="HAI">HAITI</option>
                                              <option value="HTI">MAISSADE</option>
                                        </select>
                                  </label>
                              </div>
                          </div>
                      </section>
                            <section>
                               <label for="endereco" class="lbl-text">Endereço:</label>
                               <label class="lbl-ui">
                                 <input type="text" name="endereco" id="endereco" class="input" value="" autofocus required />
                               </label>
                            </section>
                           <section>
                               <div class="row">
                                        <div class="col6 first">
                                            <label for="bairro" class="lbl-text">Bairro:</label>
                                              <label class="lbl-ui">
                                                <input type="text" name="bairro" id="bairro" class="input" value="" autofocus required />
                                              </label>
                                          </div>
                                        <div class="col6 last colspacer-two">
                                            <label for="nu_cep" class="lbl-text">CEP:</label>
                                              <label class="lbl-ui">
                                                <input type="text" name="cep" id="cep" class="input" value="" autofocus required />
                                              </label>
                                          </div>
                                </div>
                           </section>
                           <section>
                             <div class="row">
                                <div class="col6 first">
                                  <label for="uf_cidade" class="lbl-text">UF:</label>
                                  <label class="lbl-ui select">
                                    <select id="uf_cidade" name="uf_cidade" autofocus required >
                                      <option value=""></option>
                                      <option value="AC">AC</option>
                                      <option value="AL">AL</option>
                                      <option value="AP">AP</option>
                                      <option value="AM">AM</option>
                                      <option value="BA">BA</option>
                                      <option value="CE">CE</option>
                                      <option value="DF">DF</option>
                                      <option value="ES">ES</option>
                                      <option value="GO">GO</option>
                                      <option value="MA">MA</option>
                                      <option value="MT">MT</option>
                                      <option value="MS">MS</option>
                                      <option value="MG">MG</option>
                                      <option value="PA">PA</option>
                                      <option value="PB">PB</option>
                                      <option value="PR">PR</option>
                                      <option value="PE">PE</option>
                                      <option value="PI">PI</option>
                                      <option value="RJ">RJ</option>
                                      <option value="RN">RN</option>
                                      <option value="RS">RS</option>
                                      <option value="RO">RO</option>
                                      <option value="RR">RR</option>
                                      <option value="SC">SC</option>
                                      <option value="SP">SP</option>
                                      <option value="SE">SE</option>
                                      <option value="TO">TO</option>
                                    </select>
                                  </label>
                                </div>
                                <div class="col6 last colspacer-two">
                                  <label for="cidade" class="lbl-text">Cidade:</label>
                                  <label class="lbl-ui">
                                    <input type="text" name="cidade" id="cidade" class="input" value="" autofocus required />
                                  </label>
                                </div>
                            </div>
                        </section>
                        <section>
                                 <label for="msg" class="lbl-text ext area">Contatos</label>
                             </section>
                        <section>
                              <div class="row">
                                    <div class="col3 first">
                                        <label for="ddd_tel_residencial" class="lbl-text">DDD:</label>
                                        <label class="lbl-ui">
                                          <input type="text" name="ddd_telefone" id="ddd_telefone" class="input" value=""/>
                                        </label>
                                    </div>
                                    <div class="col9 last colspacer-two">
                                        <label for="tel_residencial" class="lbl-text">Tel. Residencial:</label>
                                        <label class="lbl-ui">
                                          <input type="text" name="numero_telefone" id="numero_telefone" class="input" value=""/>
                                        </label>
                                    </div>
                              </div>
                        </section>
                        <section>
                              <div class="row">
                                    <div class="col3 first">
                                        <label for="ddd_tel_contato" class="lbl-text">DDD:</label>
                                        <label class="lbl-ui">
                                          <input type="text" name="ddd_contato" id="ddd_contato" class="input" value=""/>
                                        </label>
                                    </div>
                                    <div class="col9 last colspacer-two">
                                        <label for="tel_contato" class="lbl-text">Tel. Contato:</label>
                                        <label class="lbl-ui">
                                          <input type="text" name="numero_contato" id="numero_contato" class="input" value=""/>
                                        </label>
                                    </div>
                              </div>
                        </section>
                        <section>
                            <label for="email" class="lbl-text">E-mail:</label>
                            <label class="lbl-ui">
                              <input  type="email" name="email" id="email" class="input" value=""/>
                            </label>
                        </section>
                        <section>
                            <label for="email_contato" class="lbl-text">E-mail Contato:</label>
                            <label class="lbl-ui">
                              <input  type="email_contato" name="email_contato" id="email_contato" class="input" value=""/>
                            </label>
                        </section>
                        <section>
                        <label for="msg" class="lbl-text ext area">Identidade de Estrangeiros</label>
                        </section>
                        <section>
                         <label for="msg" class="lbl-text ext">Naturalizado</label>
                         <div class="option-group block">
                            <span class="goption">
                                 <label for="sim_naturalizado" class="options">
                                     <input type="radio" id="sim_naturalizado" name="naturalizado" value="S"/>
                                     <span class="radio"></span>
                                 </label>
                                 <label for="option7">SIM</label>
                            </span>
                            <span class="goption">
                                 <label for="nao_naturalizado" class="options">
                                     <input type="radio" id="nao_naturalizado" name="naturalizado" value="N"/>
                                     <span class="radio"></span>
                                 </label>
                                 <label for="option8">NÃO</label>
                            </span>
                         </div>
                    </section>
                        <section>
                            <div class="row">
                                  <div class="col4 first">
                                      <label for="numero_rne" class="lbl-text">Número RNE:</label>
                                      <label class="lbl-ui">
                                        <input type="text" name="numero_rne" id="numero_rne" class="input" value="" autofocus required />
                                      </label>
                                  </div>
                                </section>
                                  <section>
                                  <label for="data_naturalizacao" class="lbl-text">Data da Naturalização</label>
                                    <div class="row">
                                        <div class="col4 first">
                                          <input type="date" id="data_naturalizacao" name="data_naturalizacao" value="">
                                        </div>
                                    </div>
                                  </section>
                                    <section>
                                    <label for="data_chegada" class="lbl-text">Data da Chegada</label>
                                      <div class="row">
                                          <div class="col4 first">
                                            <input type="date" id="data_chegada" name="data_chegada" value="">
                                          </div>
                                      </div>
                                    </section>
                                      <section>
                                        <label for="data_expedicao_rne" class="lbl-text">Data da Expedição</label>
                                          <div class="row">
                                              <div class="col4 first">
                                                <input type="date" id="data_expedicao_rne" name="data_expedicao_rne" value="">
                                              </div>
                                          </div>
                                      </section>
                                  <section>
                                      <label for="orgao_emissor_rne" class="lbl-text">Orgão Emissor:</label>
                                      <div class="row">
                                              <div class="col4 first">
                                                <label class="lbl-ui">
                                                  <input type="text" name="orgao_emissor_rne" id="orgao_emissor_rne" class="input" value="" autofocus required />
                                                </label>
                                            </div>
                                       </div>
                                  </section>
                                  <section>
                                    <div class="col4 last colspacer-two">
                                   <label for="msg" class="lbl-text ext">Casado(a) com Brasileiro</label>
                                   <div class="option-group block">
                                      <span class="goption">
                                           <label for="sim_casadoBrasileiro" class="options">
                                               <input type="radio" id="sim_casadoBrasileiro" name="casadoBrasileiro" value="S"/>
                                               <span class="radio"></span>
                                           </label>
                                           <label for="option7">SIM</label>
                                      </span>
                                      <span class="goption">
                                           <label for="nao_casadoBrasileiro" class="options">
                                               <input type="radio" id="nao_casadoBrasileiro" name="casadoBrasileiro" value="N"/>
                                               <span class="radio"></span>
                                           </label>
                                           <label for="option8">NÃO</label>
                                      </span>
                                   </div>
                                 </div>
                              </section>
                                  <section>
                                    <div class="col4 last colspacer-two">
                                   <label for="msg" class="lbl-text ext">Tem filhos com Brasileiros</label>
                                   <div class="option-group block">
                                      <span class="goption">
                                           <label for="sim_filhosBrasileiros" class="options">
                                               <input type="radio" id="sim_filhosBrasileiros" name="filhosBrasileiros" value="S"/>
                                               <span class="radio"></span>
                                           </label>
                                           <label for="option7">SIM</label>
                                      </span>
                                      <span class="goption">
                                           <label for="nao_filhosBrasileiros" class="options">
                                               <input type="radio" id="nao_filhosBrasileiros" name="filhosBrasileiros" value="N"/>
                                               <span class="radio"></span>
                                           </label>
                                           <label for="option8">NÃO</label>
                                      </span>
                                   </div>
                                 </div>
                              </section>
                              <section>
                                  <label for="no_secao" class="lbl-text">Classificação da Condição:</label>
                                  <div class="row">
                                          <div class="col4 first">
                                              <label for="rg_DataEmissao" class="lbl-ui">
                                                <input type="text" name="classificacaoCondicao" id="secao_tit_eleitoral" class="input" value="" autofocus required />
                                              </label>
                                        </div>
                                   </div>
                              </section>

                         <section>
                                  <label for="msg" class="lbl-text ext area">Carteira de Identidade</label>
                              </section>
                              <section>
                                 <div class="row">
                                        <div class="col4 first">
                                            <label for="carteira_identidade" class="lbl-text">Número:</label>
                                              <label class="lbl-ui">
                                                <input type="text" name="carteira_identidade" id="carteira_identidade" class="input" value="" autofocus required />
                                              </label>
                                          </div>
                                        <div class="col4 colspacer-two">
                                            <label for="no_orgao_emissor_cidentidade" class="lbl-text">Órgão Emissor:</label>
                                              <label class="lbl-ui">
                                                <input type="text" name="no_orgao_emissor_cidentidade" id="no_orgao_emissor_cidentidade" class="input" value="" autofocus required />
                                              </label>
                                          </div>
                                        <div class="col4 last colspacer-two">
                                            <label for="uf_emissao" class="lbl-text">UF:</label>
                                            <label class="lbl-ui select">
                                                  <select id="uf_emissao" name="uf_emissao" autofocus required >
                                                      <option value=""></option>
                                                      <option value="AC">AC</option>
                                                      <option value="AL">AL</option>
                                                      <option value="AP">AP</option>
                                                      <option value="AM">AM</option>
                                                      <option value="BA">BA</option>
                                                      <option value="CE">CE</option>
                                                      <option value="DF">DF</option>
                                                      <option value="ES">ES</option>
                                                      <option value="GO">GO</option>
                                                      <option value="MA">MA</option>
                                                      <option value="MT">MT</option>
                                                      <option value="MS">MS</option>
                                                      <option value="MG">MG</option>
                                                      <option value="PA">PA</option>
                                                      <option value="PB">PB</option>
                                                      <option value="PR">PR</option>
                                                      <option value="PE">PE</option>
                                                      <option value="PI">PI</option>
                                                      <option value="RJ">RJ</option>
                                                      <option value="RN">RN</option>
                                                      <option value="RS">RS</option>
                                                      <option value="RO">RO</option>
                                                      <option value="RR">RR</option>
                                                      <option value="SC">SC</option>
                                                      <option value="SP">SP</option>
                                                      <option value="SE">SE</option>
                                                      <option value="TO">TO</option>
                                                  </select>
                                            </label>
                                          </div>
                                      </div>
                              </section>
                              <section>
                                  <label for="msg" class="lbl-text">Data de Emissão:</label>
                                  <div class="row">
                                          <div class="col4 first">
                                              <label for="rg_DataEmissao" class="lbl-ui select">
                                                <input type="date" id="rg_DataEmissao" name="rg_DataEmissao" value="">
                                              </label>
                                        </div>
                                   </div>
                              </section>
                         <section>
                             <label for="msg" class="lbl-text ext area">Descrição Física</label>
                         </section>
                         <section>
                              <div class="row">
                                    <div class="col4 first">
                                        <label for="cutis" class="lbl-text">Cor da Pele:</label>
                                        <label class="lbl-ui select">
                                            <select id="cutis" name="cutis">
                                               <option value=""></option>
                                               <option value="1">Branca</option>
                                               <option value="2">Negra</option>
                                               <option value="3">Parda</option>
                                               <option value="4">Amarela</option>
                                               <option value="5">Não Informada</option>
                                               <option value="6">Indigena</option>
                                            </select>
                                        </label>
                                    </div>
                             </div>
                         </section>
                      </div>
                     </div>
                     <section>
                             <label for="msg" class="lbl-text ext area">Dependentes</label>
                     </section>
                     <section>
                                  <div class="row" style="margin-bottom: 15px;">
                                    <div class="col4 first">
                                          <label for="no_dependente" class="lbl-text">Nome:</label>
                                          <label class="lbl-ui">
                                            <input type="text" name="no_dependente[]" id="no_dependente[]" class="input" value=""/>
                                          </label>
                                      </div>
                                      <div class="col2 colspacer-two">
                                          <label for="parentesco" class="lbl-text">Parentesco:</label>
                                          <label for="parentesco" class="lbl-ui select">
                                                <select id="parentesco[]" name="parentesco[]">
                                                  <option value=""></option>
                                                  <option value="Filho">Filho</option>
                                                  <option value="Conjuge">Conjuge</option>
                                                  <option value="Pais">Pais</option>
                                                  <option value="Companheiro">Companheiro</option>
                                                  <option value="Depend. Economico">Depend. Economico</option>
                                                  <option value="Consignado">Consignado</option>
                                                  <option value="Outros">Outros</option>
                                                </select>
                                          </label>
                                      </div>

                                      <div class="col5 colspacer-two">
                                          <label for="desc_parentesco" class="lbl-text">Descrição do Parentesco:</label>
                                          <label for="desc_parentesco" class="lbl-ui select">
                                              <select id="desc_parentesco[]" name="desc_parentesco[]">
                                                <option value="">Descrição</option>
                                                <option value="Conjuge ou Companheira com o qual tem filho ou viva a mais de 5 anos">Conjuge ou Companheira com o qual tem filho ou viva a mais de 5 anos</option>
                                                <option value="Filho ou Enteado de ate 21 anos">Filho ou Enteado de ate 21 anos</option>
                                                <option value="Filho ou Enteado Universitario ou cursando Escola Técnica de Segundo grau até 24 anos">Filho ou Enteado Universitario ou cursando Escola Técnica de Segundo grau até 24 anos</option>
                                                <option value="Filho ou Enteado em QQ idade quando incapacitado fisica e/ou mentalmente para o trabalho">Filho ou Enteado em QQ idade quando incapacitado fisica e/ou mentalmente para o trabalho</option>
                                                <option value="Irmão, Neto ou Bisneto sem arrimo dos pais do qual detem a guarda judicial até 21 anos">Irmão, Neto ou Bisneto sem arrimo dos pais do qual detem a guarda judicial até 21 anos</option>
                                                <option value="Irmao, Neto ou Bisneto sem arrimo dos pais com idade de 24 anos se ainda estiver cursando nível superior ou escola técnica, desde que tenha detido sua guarda judicial ate os 21 anos">Irmao, Neto ou Bisneto sem arrimo dos pais com idade de 24 anos se ainda estiver cursando nível superior ou escola técnica, desde que tenha detido sua guarda judicial ate os 21 anos</option>
                                                <option value="Pais, Avos e Bisavos">Pais, Avos e Bisavos</option>
                                                <option value="Menor pobre ate 21 anos, que crie e eduque e do qual tenha guarda judicial">Menor pobre ate 21 anos, que crie e eduque e do qual tenha guarda judicial</option>
                                                <option value="Irmão, Neto ou Bisneto sem arrimo dos pais do qual detem a guarda judicial até 21 anos">Irmão, Neto ou Bisneto sem arrimo dos pais do qual detem a guarda judicial até 21 anos</option>
                                              </select>
                                          </label>

                                      </div>
                                      <div class="col1 last colspacer-two">
                                        <a class="button red removeVar" title="Remover Dependente" style="margin-top: 17px;">X</a>
                                      </div>

                                  </div>

                              <!--section id="main">

                                    <p> </p>

                              </section-->
                              <section>
                                <a class="button blue" id="addVar" style="margin-top: 19px;">Acrescentar Dependente</a>
                              </section>

                              </section>

                         </div>
                    </div>
                    <div class="form-buttons align-right">
                    <section>
                       <input type="submit" value="Enviar" class="button green" />
                       <input type="reset" value="Limpar" class="button" />
                    </section>
              </div>

          </form>


        </div>
    </div>
    <div id="load" class="load">
        <img src="load.gif" alt="Load" class="imgLoad">
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
      <script>

    var startingNo = 0;
    var $node = "";
    for(varCount=0;varCount<=startingNo;varCount++){
      var displayCount = varCount+1;
      $node += '<p><div class="row" style="margin-top: 20px;"><div class="col4 first"><label for="no_dependente" class="lbl-text">Nome:</label><label class="lbl-ui"><input type="text" name="no_dependente[]" id="no_dependente[]" class="input" /></label></div><div class="col2 colspacer-two"><label for="parentesco[]" class="lbl-text">Parentesco:</label><label for="parentesco[]" class="lbl-ui select"><select id="parentesco[]" name="parentesco[]"><option value="Selecione um Parentesco">Parentesco</option><option value=""></option><option value="Filho">Filho</option><option value="Conjuge">Conjuge</option><option value="Pais">Pais</option><option value="Companheiro">Companheiro</option><option value="Depend. Economico">Depend. Economico</option><option value="Consignado">Consignado</option><option value="Outros">Outros</option></select></label></div><div class="col5 colspacer-two"><label for="desc_parentesco[]" class="lbl-text">Descrião do Parentesco:</label><label for="desc_parentesco[]" class="lbl-ui select"><select id="desc_parentesco[]" name="desc_parentesco[]"><option value="Selecione uma descrição">Descrição</option><option value="Conjuge ou Companheira com o qual tem filho ou viva a mais de 5 anos">Conjuge ou Companheira com o qual tem filho ou viva a mais de 5 anos</option><option value="Filho ou Enteado de ate 21 anos">Filho ou Enteado de ate 21 anos</option><option value="Filho ou Enteado Universitario ou cursando Escola Técnica de Segundo grau até 24 anos">Filho ou Enteado Universitario ou cursando Escola T�cnica de Segundo grau at� 24 anos</option><option value="Filho ou Enteado em QQ idade quando incapacitado fisica e/ou mentalmente para o trabalho">Filho ou Enteado em QQ idade quando incapacitado fisica e/ou mentalmente para o trabalho</option><option value="Irmão, Neto ou Bisneto sem arrimo dos pais do qual detem a guarda judicial até 21 anos">Irmão, Neto ou Bisneto sem arrimo dos pais do qual detem a guarda judicial até 21 anos</option><option value="Irmao, Neto ou Bisneto sem arrimo dos pais com idade de 24 anos se ainda estiver cursando nivel superior ou escola tecnica, desde que tenha detido sua guarda judicial ate os 21 anos">Irmao, Neto ou Bisneto sem arrimo dos pais com idade de 24 anos se ainda estiver cursando nivel superior ou escola tecnica, desde que tenha detido sua guarda judicial ate os 21 anos</option><option value="Pais, Avos e Bisavos">Pais, Avos e Bisavos</option><option value="Menor pobre ate 21 anos, que crie e eduque e do qual tenha guarda judicial">Menor pobre ate 21 anos, que crie e eduque e do qual tenha guarda judicial</option><option value="Irm�o, Neto ou Bisneto sem arrimo dos pais do qual detem a guarda judicial até 21 anos">Irmão, Neto ou Bisneto sem arrimo dos pais do qual detem a guarda judicial até 21 anos</option></select></label></div><div class="col1 last colspacer-two"><a class="button red removeVar" title="Remover Dependente" style="margin-top: 17px;"><i class="icon-trash"></i></a></div></p>';

    }


    $('#main').prepend($node);



    $('.removeVar').live('click',function() {
      $(this).closest('.row').remove()
  });

    $('#addVar').on('click', function(){
      //new node
      varCount++;


      $node = '<p><div class="row" style="margin-bottom: 20px;"><div class="col4 first"><label for="no_dependente[]" class="lbl-text">Nome:</label><label class="lbl-ui"><input type="text" name="no_dependente[]" id="no_dependente[]" class="input" /></label></div><div class="col2 colspacer-two"><label for="parentesco[]" class="lbl-text">Parentesco:</label><label for="parentesco[]" class="lbl-ui select"><select id="parentesco[]" name="parentesco[]"><option value="Selecione um Parentesco">Parentesco</option><option value="Filho">Filho</option><option value="Conjuge">Conjuge</option><option value="Pais">Pais</option><option value="Companheiro">Companheiro</option><option value="Depend. Economico">Depend. Economico</option><option value="Consignado">Consignado</option><option value="Outros">Outros</option></select></label></div><div class="col5 colspacer-two"><label for="desc_parentesco[]" class="lbl-text">Descri��o do Parentesco:</label><label for="desc_parentesco[]" class="lbl-ui select"><select id="desc_parentesco[]" name="desc_parentesco[]"><option value="Selecione uma descri��o">Descri��o</option><option value="Conjuge ou Companheira com o qual tem filho ou viva a mais de 5 anos">Conjuge ou Companheira com o qual tem filho ou viva a mais de 5 anos</option><option value="Filho ou Enteado de ate 21 anos">Filho ou Enteado de ate 21 anos</option><option value="Filho ou Enteado Universitario ou cursando Escola T�cnica de Segundo grau até 24 anos">Filho ou Enteado Universitario ou cursando Escola Técnica de Segundo grau at� 24 anos</option><option value="Filho ou Enteado em QQ idade quando incapacitado fisica e/ou mentalmente para o trabalho">Filho ou Enteado em QQ idade quando incapacitado fisica e/ou mentalmente para o trabalho</option><option value="Irm�o, Neto ou Bisneto sem arrimo dos pais do qual detem a guarda judicial at� 21 anos">Irm�o, Neto ou Bisneto sem arrimo dos pais do qual detem a guarda judicial até 21 anos</option><option value="Irmão, Neto ou Bisneto sem arrimo dos pais com idade de 24 anos se ainda estiver cursando nivel superior ou escola tecnica, desde que tenha detido sua guarda judicial ate os 21 anos">Irmao, Neto ou Bisneto sem arrimo dos pais com idade de 24 anos se ainda estiver cursando nivel superior ou escola tecnica, desde que tenha detido sua guarda judicial ate os 21 anos</option><option value="Pais, Avos e Bisavos">Pais, Avos e Bisavos</option><option value="Menor pobre ate 21 anos, que crie e eduque e do qual tenha guarda judicial">Menor pobre ate 21 anos, que crie e eduque e do qual tenha guarda judicial</option><option value="Irm�o, Neto ou Bisneto sem arrimo dos pais do qual detem a guarda judicial at� 21 anos">Irm�o, Neto ou Bisneto sem arrimo dos pais do qual detem a guarda judicial at� 21 anos</option></select></label></div><div class="col1 last colspacer-two"><a class="button red removeVar" title="Remover Dependente" style="margin-top: 17px;"><i class="icon-trash"></i></a></div></p>';
      $(this).parent().before($node);
    });
    </script>
    <script src="js/show.funcionario.js" type="text/javascript">

    </script>


</body>
</html>
