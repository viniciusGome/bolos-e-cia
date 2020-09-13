<?php include "header.php"; ?>
    <!-- pagina que faz a listagem do estoque -->
    <article class="jumbotron"> <!-- cabeçalho de introdução da pagina de lista de produtos -->
        <h1 class="display-4">Olá, confira seu pedidos aqui (;</h1>
        <hr>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Optio expedita blanditiis tempora adipisci officiis aspernatur reprehenderit voluptatem. 
            Consequuntur, repellendus minima? Nam doloribus accusantium necessitatibus unde incidunt, 
            temporibus sequi sunt impedit!
        </p>
    </article>

   <section class="container">
       <table class="table">


            <thead>
                <tr>
                    <th scope="col">tipo do bolo</th>
                    <th scope="col">custo do bolo</th>
                    <th scope="col">categoria</th>
                    <th scope="col">cobertura</th>
                    <th scope="col">recheio</th>
                </tr>
            </thead>


           <tbody>

            <?php for ($i=0; $i < 6; $i++) { ?>

                <tr> <!-- laço de repetição para criar o conteudo das tabelas dinamicamente-->
                    <td>testando a estrutura da tabela</td>
                    <td>testando a estrutura da tabela</td>
                    <td>testando a estrutura da tabela</td>
                    <td>testando a estrutura da tabela</td>
                    <td>testando a estrutura da tabela</td>
                </tr>

           <?php } ?>
               



           </tbody>


       </table>
   </section>

<?php include "footer.php"; ?>