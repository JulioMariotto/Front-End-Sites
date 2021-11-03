    
var enviarForm = function() {


    var formData = {
        'email'              : $('#email').val(),
        'senha'             : $('#senha').val(),
        'lembrar_me'    : $('#lembrar-me').prop("checked")
    };
    
    var request = $.ajax({
        type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
        url         : 'database/login.php', // the url where we want to POST
        data        : formData, // our data object
        dataType    : 'json', // what type of data do we expect back from the server
        encode      : true
    });
    
    request.done(function(resposta){

        var resposta = JSON.parse(resposta);
        
        if(resposta){
            window.location.href="home.html";
        }
        else{
            $("#mensagem_login").slideDown();
            $("#mensagem_login").html("Os dados não conferem.");
        }

    });
    
    request.fail(function(jqXHR, textStatus) {
        $("#mensagem_login").slideDown();
	    $("#mensagem_login").html("Ocorreu um erro na autenticação.");
        console.log("Request failed: " + textStatus);
	});

    

};