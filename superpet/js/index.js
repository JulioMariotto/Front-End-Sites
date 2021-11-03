if(navigator.geolocation){
	navigator.geolocation.getCurrentPosition(function(position){
	var coordenadas_origem=position.coords.latitude+","+position.coords.longitude;
	CalculaDistancia(coordenadas_origem);

	});

}
else{
	document.getElementById("msg_erro_mapa").innerHTML="Seu navegador não permite Geolocalização. Use um navegador compatível.";	

}
function CalculaDistancia(origem){
	var service=new google.maps.DistanceMatrixService();
	service.getDistanceMatrix({
								origins:[origem],destinations:["Rua Barão do Cerro Azul 1690 - São José dos Pinhais - PR"],travelMode:google.maps.TravelMode.DRIVING
								},callback);

};
function callback(response,status){
	if(status==google.maps.DistanceMatrixStatus.OK){
		document.getElementById("info_mapa").innerHTML="Estamos à <b>"+response.rows[0].elements[0].distance.text+"</b> de você. Você chegará aqui em <b>"+response.rows[0].elements[0].duration.text+"</b>";
		$("#map").attr("src","https://maps.google.com/maps?saddr="+response.originAddresses+"&daddr="+response.destinationAddresses+"&output=embed");

	}
};
function verificaCampo(id_campo){
	if(document.getElementById(id_campo).value!=""){
	document.getElementById(id_campo).setAttribute("class","preenchido");

}
}function enviarMensagem(){
	document.getElementById("enviar").setAttribute("onclick","");
	document.getElementById("enviar").innerHTML="Enviando ...";
	var nome=document.getElementById("nome").value;
	var email=document.getElementById("email").value;
	var telefone=document.getElementById("telefone").value;
	var mensagem=document.getElementById("mensagem").value;
	var params="nome="+nome;
	params+="&email="+email;
	params+="&telefone="+telefone;
	params+="&mensagem="+mensagem;
	if(window.XMLHttpRequest)xmlhttp=new XMLHttpRequest();
	else
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
xmlhttp.onreadystatechange=function(){
	if(xmlhttp.readyState==4&&xmlhttp.status==200){
	var result=xmlhttp.responseText;
	if(result==1){
	document.getElementById("enviar").innerHTML="Mensagem enviada!";
	document.getElementById("nome").value="";
	document.getElementById("email").value="";
	document.getElementById("telefone").value="";
	document.getElementById("mensagem").value="";

}else{
	document.getElementById("enviar").innerHTML="Ops. Atualize a página e tente novamente!";

}
}
};
xmlhttp.open("GET","enviar.php?"+params,true);
xmlhttp.send();

}

$(window).load(function() {
		$('.flexslider').flexslider();
		$('#home').show();
		$("header nav ul li").click(function(){
			    $("#control-nav").removeAttr("checked");
		});
		$('.image-link-acessorios').viewbox();
		$('.image-link-banho').viewbox();
		$('.image-link-brinquedos').viewbox();
		$('.image-link-canto-gato').viewbox();
		$('.image-link-casinhas').viewbox();
		$('.image-link-externo').viewbox();
		$('.image-link-farmacia').viewbox();
		$('.image-link-racoes').viewbox();
});