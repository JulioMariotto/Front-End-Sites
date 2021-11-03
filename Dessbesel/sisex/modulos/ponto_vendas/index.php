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

    <header>
        <a class="btn-nova-promocao" onclick="fadeInAdicionarPromocao()">
            <i class="uk-icon-plus"></i> Nova Venda
        </a>

        

    </header>

    <section>
        <div class="tabela">
            <div class="cabecalho_tabela">
                <div class="col col-1">ID</div>
                <div class="col col-2">Data Venda</div>
                <div class="col col-4">Status</div>
                <div class="col col-3">Valor Total</div>
            </div>
            <div id="listagem_promocoes">
                
                <a onclick="promocao.abreModal()">
                    <div class="bloco">
                        <div class="col col-1">01</div>
                        <div class="col col-2">30/10/2017</div>
                        <div class="col col-4">Marmita 01 - 4 unidades, marmita 02...</div>
                        <div class="col col-3">R$29,90</div>
                    </div>
                </a>
                <a onclick="promocao.abreModal()">
                    <div class="bloco">
                        <div class="col col-1">02</div>
                        <div class="col col-2">30/10/2017</div>
                        <div class="col col-4">Marmita 01 - 4 unidades, marmita 02...</div>
                        <div class="col col-3">R$29,90</div>
                    </div>
                </a>
                <a onclick="promocao.abreModal()">
                    <div class="bloco">
                        <div class="col col-1">03</div>
                        <div class="col col-2">30/10/2017</div>
                        <div class="col col-4">Marmita 01 - 4 unidades, marmita 02...</div>
                        <div class="col col-3">R$29,90</div>
                    </div>
                </a>
                <a onclick="promocao.abreModal()">
                    <div class="bloco">
                        <div class="col col-1">04</div>
                        <div class="col col-2">30/10/2017</div>
                        <div class="col col-4">Marmita 01 - 4 unidades, marmita 02...</div>
                        <div class="col col-3">R$29,90</div>
                    </div>
                </a>
                <a onclick="promocao.abreModal()">
                    <div class="bloco">
                        <div class="col col-1">05</div>
                        <div class="col col-2">30/10/2017</div>
                        <div class="col col-4">Marmita 01 - 4 unidades, marmita 02...</div>
                        <div class="col col-3">R$29,90</div>
                    </div>
                </a>

            </div>
    </section>        
   


    <div id="adicionar_promocao" class="modal">
        <div class="cabecalho">
            <span>Nova Venda</span>
            <a onclick="fadeOutAdicionarPromocao()"><i class="uk-icon-close"></i></a>
        </div>
        <form class="conteudo" id="form-novo">
            
            <div class="linha">
                <div class="col-esq" style="width: 10%">
                    Produto:
                </div>
                <div class="col-dir" style="width: 80%">
                   <select class="select-produto">
                       <option>Marmita 01</option>
                       <option>Marmita 02</option>
                       <option>Marmita 03</option>
                       <option>Marmita 04</option>
                       <option>Marmita 05</option>
                       <option>Marmita 06</option>
                       <option>Marmita 07</option>
                   </select>
                   <label class="label-produto">Quantidade:</label>
                   <input type="number" name="qtd" class="number-produto">
                   <button class="button-produto">Adicionar Produto</button>
                </div>
            </div>
            <div class="tabela">
                <div class="cabecalho_tabela modal-cabecalho">
                    <div class="col col-1">Nome Produto</div>
                    <div class="col col-2">Quantidade</div>
                    <div class="col col-3">Valor Total</div>
                </div>
                <div class="modal-lista" style="margin-bottom: 10%">
                    <div class="bloco">
                        <div class="col col-1">Marmita 01</div>
                        <div class="col col-2">02</div>
                        <div class="col col-3">R$29,90</div>
                    </div>
                </div>
            </div>

            <div class="linha linha_botao">
                <a onclick="promocao.novaPromocao()" class="btn-submit">Adicionar Venda</a>
            </div>

        </form>
        <div class="modal-footer linha">
            <div class="col-esq">Total Venda: </div>
            <div class="col-dir"> R$29,90</div>
        </div>
    </div>

    <div id="mostrar_promocao" class="modal">
        <div class="cabecalho">
            <span>Venda</span>
            <a onclick="fadeOutPromocao()"><i class="uk-icon-close"></i></a>
        </div>
        <form class="conteudo" id="form-edita">
            
            <div class="tabela">
                <div class="cabecalho_tabela modal-cabecalho">
                    <div class="col col-1">Nome Produto</div>
                    <div class="col col-2">Quantidade</div>
                    <div class="col col-3">Valor Total</div>
                </div>
                <div class="modal-lista">
                    <div class="bloco">
                        <div class="col col-1">Marmita 01</div>
                        <div class="col col-2">02</div>
                        <div class="col col-3">R$29,90</div>
                    </div>
                </div>
            </div>

        </form>

        <div class="modal-footer linha">
            <div class="col-esq">Total Venda: </div>
            <div class="col-dir"> R$29,90</div>
        </div>
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
