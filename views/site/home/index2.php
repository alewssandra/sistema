<main>

    <section class="banner" id="banner">

        <h2>
            Meu Site Programado
        </h2>

        <p>
            Agora na versão com PHP 7
        </p>

    </section>


    <section class="opcoes" id="opcoes">
        <div class="container">
            <h2>
                Opções
            </h2>
            <div class="row">

                <?php for ($i = 0; $i < count($images); $i++) {  ?>

                    <div class="col-md-4">
                        <div class="imagem" id="<?php echo $images[$i]; ?>"></div>
                        <p>
                            Título da Imagem
                        </p>
                    </div>

                <?php } ?>

            </div>
        </div>
    </section>

    <section class="quem-somos" id="quem-somos">

        <div class="container">

            <h2>
                Quem Somos
            </h2>

            <p>
                <?php echo $description; ?>
            </p>

        </div>

    </section>

    <section class="contato" id="contato">

        <main class="container">

            <center>


                <div class="toClone" style="display:none;">
                    <label class="titulo-frase"></label>
                    <br />
                    <input class="valor-frase" type="text" name="frase[]" id="nome-texto" />
                    <br />
                    <div class="btn btn-warning btn-remover-um remover" id="">Remover</div>
                    <br />
                </div>

                <form id="contact-form" class="formulario">

                    <h3>Entre em Contato</h3>
                    <br />
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label>Nome</label>
                                <input class="form-control" name="nome" type="text" />
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label>E-Mail</label>
                                <input class="form-control" name="email" type="text" />
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label>Telefone</label>
                                <input class="form-control" name="phone" type="text" />
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label>Mensagem</label>
                                <textarea class="form-control" name="descricao"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
                <br />
                <div class="btn btn-success" id="button-test">Enviar</div>
            </center>
        </main>
    </section>
</main>