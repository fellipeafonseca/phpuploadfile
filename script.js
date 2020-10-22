
/**
* Capturar itens do banco de dados
*/
function carregarDados(){
	//variáveis
	var itens = "";

    //Capturar Dados Usando Método AJAX do jQuery
    $.ajax({
        url: 'lerDados.php',
        //type:'post',
        cache: false,
        dataType: "json",
	    beforeSend: function() {
		    $("h4").html("Carregando..."); //Carregando
	    },
	    error: function(jqXHR, textStatus, errorThrown){
            alert(jqXHR + " - " + " - " + textStatus + " - " + errorThrown + " - " + errorThrown.message);
            $("h4").html("Há algum problema com a fonte de dados");
	    },
	    success: function(retorno) {
           //console.log(retorno);

		    if(retorno[0].erro){
			    $("h4").html(retorno[0].erro);
		    }
		    else{
			    //Laço para criar linhas da tabela
			    for(var i = 0; i<retorno.length; i++){
				    itens += "<tr>";
				    itens += "<td>" + retorno[i].id + "</td>";
				    itens += "<td>" + retorno[i].nome + "</td>";
				    itens += "<td>" + retorno[i].email + "</td>";
                    itens += "<td>" + retorno[i].usuario + "</td>";
                    itens += "<td>" + retorno[i].senha + "</td>";
                    itens += "</tr>";
                 
			    }
			    //Preencher a Tabela
			    $("#myTable tbody").html(itens);
			    
			    //Limpar Status de Carregando
			    $("h4").html("");
		    }
	    }
    });
}