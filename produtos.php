<?php include "header.php";?>
<!-- pagina de cadastro de bolos -->
<div class="jumbotron">
    <h1 class="display-4">Olá, faça aqui seu cadastro de produtos!</h1>
    <hr>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Optio expedita blanditiis tempora adipisci officiis aspernatur reprehenderit voluptatem. 
        Consequuntur, repellendus minima? Nam doloribus accusantium necessitatibus unde incidunt, 
        temporibus sequi sunt impedit!
    </p>
</div>

<form id="form-produtos" class="form-group row justify-content-center" method="GET">
    <div class="col-11">
        <label for="name">qual o tipo de bolo</label>
        <input class="form-control" id="name" type="text">
    </div>

    <div class="col-11">
        <label for="preco" >quanto custa o bolo</label>
        <input class="form-control" id="preco" type="text">
    </div>

    <div class="col-11">
        <label for="categoria">qual sua categoria</label>
        <input class="form-control " id="categoria" type="text">
    </div>

    <div class="col-11">
        <label for="cobertura">qual a cobertura</label>
        <input class="form-control " id="cobertura" type="text">
    </div>

    <div class="col-11">
        <label for="recheio">qual é o recheio</label>
        <input class="form-control " id="recheio" type="text">
    </div>

</form>
<button class="col-1 bnt btn-primary mt-3 ml-5"> Enviar </button>

<?php include "footer.php";?>