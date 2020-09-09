/*
const paginaHome = "/index.php";
const paginaProdutos = "/produtos.php";
const paginaLista = "/lista.php";
*/
//alert(location.pathname);
//pontos de entrada compartilhada.
//location.assign("http://127.0.0.1:8000/produtos.php");
//sessõa de cometarios, acima.


window.onload = function (){checkPage();}
window.onscroll = function() {scrollFunction();}


function checkPage() {
    const home = document.querySelector('#home');
    const produtos = document.querySelector("#produtos");
    const lista = document.querySelector("#lista");
    let paginas = ["/lista.php","/index.php","/produtos.php"];

    current = location.pathname;
    if (current === paginas[2]){
        active(produtos,home);
    }
    if (current === paginas[0]){
        active(lista,produtos);
        active(lista,home);
    }
}//ve qual é a pagina atual, pra poder ser ativada.

function scrollFunction() {
    const upButton = document.querySelector('#upB');
    upButton.addEventListener('click',event => {
        event.preventDefault();
        document.documentElement.scrollTop = 0;
    });

    if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
        upButton.style.display = "block";
    } else {
        upButton.style.display = "none";
    }

}//botão de subir a pagina.

function active(current,last) {
        current.getAttributeNode("class").value = "navbar-item active";//adiciona na atual.
        last.getAttributeNode("class").value = "navbar-item";//tira da anterior.

}//função pra deixar a aba como ativa.