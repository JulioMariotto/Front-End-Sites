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
            <div class="cabecalho_tabela" style="margin-top: 5%">
                <div class="col col-1">ID</div>
                <div class="col col-2">Endereço Filial</div>
                <div class="col col-3">Responsável</div>
                <div class="col col-4">Prazo Entrega</div>
                <div class="col col-5">Status</div>
            </div>
            <div id="listagem_promocoes">
                
                <a onclick="promocao.abreModal()">
                    <div class="bloco">
                        <div class="col col-1">01</div>
                        <div class="col col-2">Rua Joivile, 1228</div>
                        <div class="col col-3">Julio</div>
                        <div class="col col-4">31/10/2017</div>
                </a>
                        <div class="col col-5"><select>
                            <option>Pedido Enviado</option>
                            <option>Preparando Pedido</option>
                            <option>Em Transporte</option>
                            <option>Recebido Pela Filial</option>
                        </select></div>
                    </div>
                <a onclick="promocao.abreModal()">
                    <div class="bloco">
                        <div class="col col-1">02</div>
                        <div class="col col-2">Rua Joivile, 1228</div>
                        <div class="col col-3">Julio</div>
                        <div class="col col-4">31/10/2017</div>
                </a>
                        <div class="col col-5"><select>
                            <option>Pedido Enviado</option>
                            <option>Preparando Pedido</option>
                            <option>Em Transporte</option>
                            <option>Recebido Pela Filial</option>
                        </select></div>
                    </div>
                <a onclick="promocao.abreModal()">
                    <div class="bloco">
                        <div class="col col-1">03</div>
                        <div class="col col-2">Rua Joivile, 1228</div>
                        <div class="col col-3">Julio</div>
                        <div class="col col-4">31/10/2017</div>
                </a>
                        <div class="col col-5"><select>
                            <option>Pedido Enviado</option>
                            <option>Preparando Pedido</option>
                            <option>Em Transporte</option>
                            <option>Recebido Pela Filial</option>
                        </select></div>
                    </div>
                <a onclick="promocao.abreModal()">
                    <div class="bloco">
                        <div class="col col-1">04</div>
                        <div class="col col-2">Rua Joivile, 1228</div>
                        <div class="col col-3">Julio</div>
                        <div class="col col-4">31/10/2017</div>
                </a>
                        <div class="col col-5"><select>
                            <option>Pedido Enviado</option>
                            <option>Preparando Pedido</option>
                            <option>Em Transporte</option>
                            <option>Recebido Pela Filial</option>
                        </select></div>
                    </div>
                <a onclick="promocao.abreModal()">
                    <div class="bloco">
                        <div class="col col-1">05</div>
                        <div class="col col-2">Rua Joivile, 1228</div>
                        <div class="col col-3">Julio</div>
                        <div class="col col-4">31/10/2017</div>
                </a>
                        <div class="col col-5"><select>
                            <option>Pedido Enviado</option>
                            <option>Preparando Pedido</option>
                            <option>Em Transporte</option>
                            <option>Recebido Pela Filial</option>
                        </select></div>
                    </div>

            </div>
    </section>        
   


    <div id="adicionar_promocao" class="modal">
        <div class="cabecalho">
            <span>Novo Pedido</span>
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
                <div class="cabecalho_tabela modal-tabela">
                    <div class="col col-1">Nome Produto</div>
                    <div class="col col-2">Quantidade</div>
                    <div class="col col-3">Valor Total</div>
                </div>
                <div id="listagem_promocoes" class="modal-lista">
                    <div class="bloco">
                        <div class="col col-1">Marmita 01</div>
                        <div class="col col-2">02</div>
                        <div class="col col-3">R$29,90</div>
                    </div>
                </div>
            </div>

            <div class="linha linha_botao">
                <a onclick="promocao.novaPromocao()" class="btn-submit">Pedir</a>
            </div>

        </form>
    </div>

    <div id="mostrar_promocao" class="modal">
        <div class="cabecalho">
            <span>Pedido</span>
            <a onclick="fadeOutPromocao()"><i class="uk-icon-close"></i></a>
        </div>
        <form class="conteudo" id="form-edita">
            

            <div class="tabela">
                <div class="cabecalho_tabela modal-tabela">
                    <div class="col col-1">Nome Produto</div>
                    <div class="col col-2">Quantidade</div>
                    <div class="col col-3">Valor Total</div>
                </div>
                <div id="listagem_promocoes" class="modal-lista">
                    <div class="bloco">
                        <div class="col col-1">Marmita 01</div>
                        <div class="col col-2">02</div>
                        <div class="col col-3">R$29,90</div>
                    </div>
                </div>
            </div>

            <div id="botao_exclui">
                <a onclick="promocao.excluir()" class="btn-submit">Excluir</a>
            </div>

        </form>

        <div class="modal-footer linha">
            <div class="col-esq">Total Pedido: </div>
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
