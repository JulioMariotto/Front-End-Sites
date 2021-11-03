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
                <div class="col col-2">Produto</div>
                <div class="col col-3">Descrição</div>
                <div class="col col-4">Quantidade</div>
                <div class="col col-5">Valor</div>
            </div>
            <div id="listagem_promocoes">
                
                <a onclick="fadeInAdicionarPromocao()">
                    <div class="bloco">
                        <div class="col col-1">01</div>
                        <div class="col col-2">Marmita 01</div>
                        <div class="col col-3">Arroz, feijão, brócolis</div>
                        <div class="col col-4">30</div>
                        <div class="col col-5">R$9,90</div>
                    </div>
                </a>
                <a onclick="fadeInAdicionarPromocao()">
                    <div class="bloco">
                        <div class="col col-1">02</div>
                        <div class="col col-2">Marmita 02</div>
                        <div class="col col-3">Macarrão, frango, batata</div>
                        <div class="col col-4">17</div>
                        <div class="col col-5">R$9,90</div>
                    </div>
                </a>
                <a onclick="fadeInAdicionarPromocao()">
                    <div class="bloco">
                        <div class="col col-1">03</div>
                        <div class="col col-2">Marmita 03</div>
                        <div class="col col-3">Risoto, queijo, alface</div>
                        <div class="col col-4">10</div>
                        <div class="col col-5">R$19,90</div>
                    </div>
                </a>
                <a onclick="fadeInAdicionarPromocao()">
                    <div class="bloco">
                        <div class="col col-1">04</div>
                        <div class="col col-2">Marmita 04</div>
                        <div class="col col-3">Arroz, feijão, bife</div>
                        <div class="col col-4">3</div>
                        <div class="col col-5">R$9,90</div>
                    </div>
                </a>
                <a onclick="fadeInAdicionarPromocao()">
                    <div class="bloco">
                        <div class="col col-1">05</div>
                        <div class="col col-2">Marmita 05</div>
                        <div class="col col-3">Macarrão, queijo, bife</div>
                        <div class="col col-4">15</div>
                        <div class="col col-5">R$29,90</div>
                    </div>
                </a>
                <a onclick="fadeInAdicionarPromocao()">
                    <div class="bloco">
                        <div class="col col-1">06</div>
                        <div class="col col-2">Marmita 06</div>
                        <div class="col col-3">Arroz, batata doce, frango</div>
                        <div class="col col-4">37</div>
                        <div class="col col-5">R$19,90</div>
                    </div>
                </a>
                <a onclick="fadeInAdicionarPromocao()">
                    <div class="bloco">
                        <div class="col col-1">07</div>
                        <div class="col col-2">Marmita 07</div>
                        <div class="col col-3">Arroz integral, batata doce, macarrão</div>
                        <div class="col col-4">31</div>
                        <div class="col col-5">R$9,90</div>
                    </div>
                </a>

            </div>
    </section>        
   


    <div id="adicionar_promocao" class="modal">
        <div class="cabecalho">
            <span>Marmita 01</span>
            <a onclick="fadeOutAdicionarPromocao()"><i class="uk-icon-close"></i></a>
        </div>
        <form class="conteudo" id="form-edita">
            
            <div class="linha">
                <div class="col-esq">
                    Produto:
                </div>
                <div class="col-dir">
                    <input type="text" id="nome_promo_modal" name="nome_promocao" value="Marmita 01" disabled />
                </div>
            </div>

            <div class="linha">
                <div class="col-esq">
                    <label>Descrição:</label>
                </div>
                <div class="col-dir">
                    <textarea rows="5" id="descricao_promo_modal" name="descricao_promocao" value="Arroz, feijão, brócolis" disabled>
                        Arroz, feijão, brócolis
                    </textarea>
                </div>
            </div>

            <div class="linha">
                <div class="col-esq">
                    <label>Quantidade:</label>
                </div>
                <div class="col-dir">
                    <input type="number" name="" value="30" disabled><i class="uk-icon-plus"></i><i class="uk-icon-minus"></i>
                </div>
            </div>             

            <div class="linha">
                <div class="col-esq">
                    <label>Valor:</label>
                </div>
                <div class="col-dir">
                    <input type="text" name="" value="R$9,90" disabled>
                </div>
            </div>
            <div id="botao_salva">
                <a onclick="promocao.salvar()" class="btn-submit">Salvar</a>
            </div>
            <div id="botao_edita">
                <a onclick="promocao.editaPromocao()" class="btn-submit">Editar</a>
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
