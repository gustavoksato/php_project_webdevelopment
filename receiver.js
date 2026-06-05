function validarFormulario(){
    var email = document.getElementById('email').value;
    var nome = document.getElementById('nome').value;
    var alga = document.getElementById('alga').value;

    //verificação básica para ver se está preenchido
    if (nome === "" ||email === "" ||alga === "" ) {
        alert("Todos so campos devem ser preenchidos!");
        return false;
    }
    //Verificação de '@' para email
    if (!email.includes("@")) {
    alert("Por favor, insira um e-mail válido (deve conter '@').");
    return false;
    }
    //retorno positivo, caso não entre nos "ifs"
    else{
        return true;
    }
        
}

function recuperarDados(){
    var containerResultado = document.getElementById("dados-recebidos");

    if (containerResultado) {
        //cria um objeto que facilita a leitura da URL
        var params = new URLSearchParams(window.location.search);
        //verificar se a URL tem o 'nome'.
        if (params.has('nome')) {
            var nome = params.get('nome');
            var email = params.get('email');
            var alga = params.get('alga');
            
            containerResultado.innerHTML = `
                <h3> Dados recebidos com sucesso! </h3>
                <ul class="textoform"> 
                    <li> Nome: ${nome} </li>
                    <li> Email:  ${email} </li>
                    <li> Alga preferida:  ${alga} </li>
                </div></ul>`
        }
    
        else{
            containerResultado.innerHTML = "<p> Nenhum dado foi enviadol....</p>"
        }
    }

    else{
        console.error("Erro: Elemento com id 'dados recebidos' não foi encontrado");
    }
    
    document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll(".botao-saiba-mais");

    buttons.forEach(function(button) {
            button.addEventListener("click", function() {
            const textId = button.getAttribute("data-target"); 
            const textElement = document.getElementById(textId);

            if (textElement.style.display === "block") {
                textElement.style.display = "none";
                button.value = "Saiba mais..."; 
            } 
            else {
                textElement.style.display = "block";
                button.value = "Esconder"; // Muda o texto do botão
            }
        });
    });
});
}

window.onload = recuperarDados();