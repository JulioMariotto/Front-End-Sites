
var promocao = {

    listaPromocoes : function(){
    
        var request = $.ajax({
            type: 'POST',
            url: 'database/listaPromocoes.php',
            dataType: 'json'
        });

        request.done(function(resposta){

            var element = "";

            for(i in resposta){
                element += '<a onclick="promocao.abreModal('+resposta[i].id+')">';
                element += '<div class="bloco">';
                element +=     '<div class="col col-1">'+resposta[i].cliente+'</div>';
                element +=     '<div class="col col-2">'+resposta[i].nome+'</div>';
                element +=     '<div class="col col-3">'+resposta[i].requisitos+'</div>';
                element +=     '<div class="col col-4"><a title="Excluir" class="excluir" onclick="promocao.excluir('+resposta[i].id+')"><i class="uk-icon-trash"></i></a></div> ';
                element += '</div>'; 
                element += '</a>';
            }

            $("#listagem_promocoes").html(element);

        });
        request.fail(function(jqXHR, textStatus) {
            alert(textStatus);
        });

    },

    novaPromocao : function(){

        /*var cliente = $("#nome_cliente").val();
        var nome_promocao = $("#nome_promocao").val();
        var descricao_promocao = $("#descricao_promocao").val();
        var requisitos_participar = $("#requisitos_participar").val();
        var data_inicio = $("#data_inicio").html();
        var data_fim = $("#data_fim").val();
        var observacao = $("#observacao").val();
        console.log(data_inicio);
        var formData = "cliente="+cliente;
        formData += "&nome_promocao="+nome_promocao;
        formData += "&descricao_promocao="+descricao_promocao;
        formData += "&requisitos_participar="+requisitos_participar;
        formData += "&data_inicio="+data_inicio;
        formData += "&data_fim="+data_fim;
        formData += "&observacao="+observacao*/
        var formData = $("#form-novo").serialize();
        console.log(formData);
        var request = $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'database/novaPromocao.php', // the url where we want to POST
            data        : formData // our data object 
        });
        
        request.done(function(resposta){
            fadeOutAdicionarPromocao();
            promocao.listaPromocoes();
        });
        
        request.fail(function(jqXHR, textStatus) {
            alert(textStatus);
        });

    },



    abreModal : function(id){
                    
        var dataForm = 'id='+id;
        var request = $.ajax({
            type: 'POST',
            url: 'database/selectPromo.php',
            data: dataForm,
            dataType: 'json'
        });

        request.done(function(resposta){


            $("#cliente_promo_modal").val(resposta[0].cliente);
            $("#nome_promo_modal").val(resposta[0].nome);
            $("#descricao_promo_modal").html(resposta[0].descricao);
            $("#requisitos_promo_modal").val(resposta[0].requisitos);
            $("#descricao_promo_modal").val(resposta[0].descricao);
            $("#requisitos_promo_modal").html(resposta[0].requisitos);
            $("#data-inicio_promo_modal").val(resposta[0].data_inicio);
            $("#data-fim_promo_modal").val(resposta[0].data_fim);
            $("#observacao_promo_modal").html(resposta[0].observacao);
            $("#observacao_promo_modal").val(resposta[0].observacao);

            $("#botao_exclui, #botao_edita, #botao_salva").html(" ");
            $("#botao_edita").append('<a onclick="promocao.editaPromocao()" class="btn-submit">Editar</a>');
            $("#botao_exclui").append('<a onclick="promocao.excluir('+ resposta[0].id +');fadeOutPromocao()" class="btn-submit">Excluir</a>');
            $("#botao_salva").append('<a onclick="promocao.salvar('+ resposta[0].id +');fadeOutPromocao()" class="btn-submit">Salvar</a>');
        });

        request.fail(function(jqXHR, textStatus){
            console.log('não ok');    
        });

        fadeInPromocao();
    },

    excluir : function(id){

        var dataForm = 'id='+id;
        var request = $.ajax({
            type: 'POST',
            url: 'database/excluirPromocao.php',
            data: dataForm,
            dataType: 'json'
        });

        request.done(function(resposta){
            promocao.listaPromocoes();
        });
        
        request.fail(function(jqXHR, textStatus){
            alert("Erro: "+textStatus);
        });

    },

    editaPromocao : function() {

        $("#botao_edita, #botao_exclui").fadeOut();
        $("#botao_salva").fadeIn();
        $("#mostrar_promocao input, #mostrar_promocao textarea").removeAttr('disabled');
        $("#mostrar_promocao input, #mostrar_promocao textarea").attr("required", " ");
    },

    salvar : function(id) {

        var formData = "id="+id+"&";
        var serial = $("#form-edita").serialize();
        formData += serial;
        console.log(formData);
        var request = $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'database/mudaPromocao.php', // the url where we want to POST
            data        : formData // our data object 
        });
        
        request.done(function(resposta){
            promocao.listaPromocoes();
            alert("Salvo com Sucesso!");
        });
        
        request.fail(function(jqXHR, textStatus) {
            alert(textStatus);
        });

        $("#cliente_promo_modal").val(" ");
        $("#nome_promo_modal").val(" ");
        $("#descricao_promo_modal").html(" ");
        $("#requisitos_promo_modal").html(" ");
        $("#descricao_promo_modal").val(" ");
        $("#requisitos_promo_modal").val(" ");
        $("#data-inicio_promo_modal").val(" ");
        $("#data-fim_promo_modal").val(" ");
        $("#observacao_promo_modal").html(" ");
        $("#observacao_promo_modal").val(" ");

        $("#botao_edita, #botao_exclui").fadeIn();
        $("#botao_salva").fadeOut();
        $("#mostrar_promocao input, #mostrar_promocao textarea").attr('disabled', ' ');
        $("#mostrar_promocao input, #mostrar_promocao textarea").removeAttr('required');
    }

};


$(function(){


    //promocao.listaPromocoes();

});







