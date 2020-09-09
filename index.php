
<?php include_once "header.php"; //o cabeçalho esta no header.php, ele possui apenas a navbar. ?> 

<!-- aqui é a parte de conteudo que no momento esta com os cards -->
<?php include_once "slide.php"; ?>

<article class="jumbotron"> <!-- cabeçalho de introdução da pagina de boas vindas -->
    <h1 class="display-4">Olá, seja Bem vindo(a)!</h1>
    <hr>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Optio expedita blanditiis tempora adipisci officiis aspernatur reprehenderit voluptatem. 
        Consequuntur, repellendus minima? Nam doloribus accusantium necessitatibus unde incidunt, 
        temporibus sequi sunt impedit!
    </p>
</article>

<section class="container"> <!-- grid dos produtos á oferta  -->
    <div id="card-pai" class="row justify-content-around mt-4">
        <?php include "cards.php";?>
    </div>

    <div id="card-filho1" class="row justify-content-around mt-4">
        <?php include "cards.php";?> 
    </div>

    <div id="card-filho2" class="row justify-content-around mt-4">
        <?php include "cards.php";?>
    </div>
</section> <!-- aqui acaba a parte do conteudo e começa o footer -->



<?php include_once "footer.php"; ?>       

