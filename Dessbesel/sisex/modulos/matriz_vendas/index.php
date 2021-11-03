<!DOCTYPE html>
<html>

<head>

	<link rel="shortcut icon" href="universal/img/favicon.png" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../../universal/uikit/css/uikit.css" />
    <link rel="stylesheet" type="text/css" href="../../universal/uikit/css/components/datepicker.almost-flat.css" />
    <link rel="stylesheet" type="text/css" href="../../universal/uikit/css/components/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="../../universal/uikit/css/components/datepicker.gradient.css" />
    <link rel="stylesheet" type="text/css" href="../../universal/uikit/css/components/autocomplete.css" />
    <link rel="stylesheet" type="text/css" href="css/promocoes.css" />
    <link rel="stylesheet" type="text/css" href="css/modal.css" />
    

    <!-- JS -->
    <script src='../../universal/fullcalendar/lib/jquery.min.js'></script>
    <script src="../../universal/uikit/js/uikit.min.js"></script>
    <script src="../../universal/uikit/js/components/datepicker.js"></script>
    <script src="../../universal/uikit/js/components/timepicker.js"></script>
    <script src="../../universal/uikit/js/components/autocomplete.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/promocoes.js"></script>


	<title></title>

</head>

<body>

   

    <section>
        <div class="tabela">
            <div class="cabecalho_tabela">
                <div class="col col-1">ID</div>
                <div class="col col-2">Endereço Ponto</div>
                <div class="col col-3">Responsavel</div>
                <div class="col col-4">Data Venda</div>
                <div class="col col-5">Valor</div>
            </div>
            <div id="listagem_promocoes">
                
                <a onclick="fadeInAdicionarPromocao()">
                    <div class="bloco">
                        <div class="col col-1">01</div>
                        <div class="col col-2">Rua Joinvile, 1228 loja 4</div>
                        <div class="col col-3">Julio</div>
                        <div class="col col-4">30/10/2017</div>
                        <div class="col col-5">R$29,90</div>
                    </div>
                </a>
                <a onclick="fadeInAdicionarPromocao()">
                    <div class="bloco">
                        <div class="col col-1">02</div>
                        <div class="col col-2">Rua Joinvile, 1228 loja 4</div>
                        <div class="col col-3">Julio</div>
                        <div class="col col-4">30/10/2017</div>
                        <div class="col col-5">R$29,90</div>
                    </div>
                </a>
                <a onclick="fadeInAdicionarPromocao()">
                    <div class="bloco">
                        <div class="col col-1">03</div>
                        <div class="col col-2">Rua Joinvile, 1228 loja 4</div>
                        <div class="col col-3">Julio</div>
                        <div class="col col-4">30/10/2017</div>
                        <div class="col col-5">R$29,90</div>
                    </div>
                </a>
                <a onclick="fadeInAdicionarPromocao()">
                    <div class="bloco">
                        <div class="col col-1">04</div>
                        <div class="col col-2">Rua Joinvile, 1228 loja 4</div>
                        <div class="col col-3">Julio</div>
                        <div class="col col-4">30/10/2017</div>
                        <div class="col col-5">R$29,90</div>
                    </div>
                </a>
                <a onclick="fadeInAdicionarPromocao()">
                    <div class="bloco">
                        <div class="col col-1">05</div>
                        <div class="col col-2">Rua Joinvile, 1228 loja 4</div>
                        <div class="col col-3">Julio</div>
                        <div class="col col-4">30/10/2017</div>
                        <div class="col col-5">R$29,90</div>
                    </div>
                </a>

            </div>
    </section>        
   


    <div id="adicionar_promocao" class="modal">
        <div class="cabecalho">
            <span>Nova Promoção</span>
            <a onclick="fadeOutAdicionarPromocao()"><i class="uk-icon-close"></i></a>
        </div>
        <form class="conteudo" id="form-novo">
            
            <div class="tabela">
                <div class="cabecalho_tabela">
                    <div class="col col-1">ID</div>
                    <div class="col col-2">Endereço Ponto</div>
                    <div class="col col-3">Responsavel</div>
                    <div class="col col-4">Data Venda</div>
                    <div class="col col-5">Valor</div>
                </div>
                <div id="listagem_promocoes">
                    <div class="bloco">
                        <div class="col col-1">04</div>
                        <div class="col col-2">30/10/2017</div>
                        <div class="col col-3">R$29,90</div>
                        <div class="col col-4">Data Venda</div>
                        <div class="col col-5">Valor</div>
                    </div>
                </div>
            </div>


        </form>
        <div class="modal-footer linha">
            <div class="col-esq">Total Venda: </div>
            <div class="col-dir"> R$29,90</div>
        </div>
    </div>

    <div id="mostrar_promocao" class="modal">
        <div class="cabecalho">
            <span>Promoção</span>
            <a onclick="fadeOutPromocao()"><i class="uk-icon-close"></i></a>
        </div>
        <form class="conteudo" id="form-edita">
            
            <div class="linha">
                <div class="col-esq">
                    Cliente:
                </div>
                <div class="col-dir">
                    <input id="cliente_promo_modal" name="nome_cliente" list="lista_cliente" onkeyup="showResult(this.value, 'lista_cliente')" disabled>
                    <datalist id="lista_cliente"></datalist>
                </div>
            </div>
            <div class="linha">
                <div class="col-esq">
                    Nome da Promoção:
                </div>
                <div class="col-dir">
                    <input type="text" id="nome_promo_modal" name="nome_promocao" disabled />
                </div>
            </div>

            <div class="linha">
                <div class="col-esq">
                    <label>Descrição da Promoção:</label>
                </div>
                <div class="col-dir">
                    <textarea rows="5" id="descricao_promo_modal" name="descricao_promocao" disabled></textarea>
                </div>
            </div>

            <div class="linha">
                <div class="col-esq">
                    <label>Requisitos para Participar:</label>
                </div>
                <div class="col-dir">
                    <textarea rows="5" id="requisitos_promo_modal" name="requisitos_participar" disabled></textarea>
                </div>
            </div>

            <div class="linha">
                <div class="col-esq">
                    <label>Data Início - Data Final:</label>
                </div>
                <div class="col-dir">
                    <input class="campo_datas" type="text" name="data-inicio" id="data-inicio_promo_modal" data-uk-datepicker="{pos: 'top', format:'DD.MM.YYYY'}" disabled />
                    -
                    <input class="campo_datas" type="text" name="data-fim" id="data-fim_promo_modal" data-uk-datepicker="{pos: 'top', format:'DD.MM.YYYY'}" disabled />
                </div>
            </div>                            

            <div class="linha">
                <div class="col-esq">
                    <label>Observação:</label>
                </div>
                <div class="col-dir">
                    <textarea rows="5" id="observacao_promo_modal" name="observacao" disabled></textarea>
                </div>
            </div>
            <div id="botao_salva">
                <a onclick="promocao.salvar()" class="btn-submit">Salvar</a>
            </div>
            <div id="botao_edita">
                <a onclick="promocao.editaPromocao()" class="btn-submit">Editar</a>
            </div>

            <div id="botao_exclui">
                <a onclick="promocao.excluir()" class="btn-submit">Excluir</a>
            </div>

        </form>
    </div>

    <div id="promocao" class="modal">
        <div class="cabecalho">
            <span>Promoção</span>
            <a onclick="fadeOutAvisos()"><i class="uk-icon-close"></i></a>
        </div>
        <div class="conteudo">
        </div>
    </div>

    <div id="fade" class="black_overlay"></div>

</body>
</html>
