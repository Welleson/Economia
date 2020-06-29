function clicou(){
    document.getElementById("agradecimento").innerHTML = "obrigado por clicar";
    //alert("Obrigado pro clicar aqui");
}


function redirecionar(){
    //window.location.href = "https://www.microsoft.com/pt-br";
    window.open("https://www.microsoft.com/pt-br");
}

function trocar(elemento){
    //document.getElementById("mousemove").innerHTML = "obrigado por passar o mouse aqui";
    //alert("trocar texto")
    elemento.innerHTML = "obrigado por passar o mouse aqui";
}

function voltar(elemento){
    //document.getElementById("mousemove").innerHTML = "Passe o mouse aqui";
    elemento.innerHTML = "Passe o mouse aqui";
}

function load(){
    alert("pagina carregada");
}

function funcaoChange(elemento){
    console.log(elemento.value);
}

/*
var nome = "Welleson";
var idade = 23;
alert(nome + " tem " + idade + " anos" );
console.log(nome);
*/

/*
var lista = ["maca", "pera" , "laranaja"];
//lista.push("uva");
//lista.pop()

console.log(lista.length)
console.log(lista.toString())
alert(lista[1]);
*/

/*
var idade = prompt("Qual é a sua idade ?");
if (idade >= 18){
    alert("maior de idade");
}
else{
    alert("menor de idade");
}
*/

/*  -- laco repeticao--
var count = 0;
while (count < 5){
    console.log(count);
    alert(count)
    count = count + 1;
};
*/

/*
var d = new Date();
alert(d.getDate());
*/

/*
function setReplace(frases, nome, novo_nome){
    return frases.replace(nome, novo_nome)
}

alert(setReplace("vai japao", "japao" , "Brasil"));
*/