<section>
    <div class="card">
        <h3 class="card-header">
            Adicionar Contato
        </h3>

        <div class="card-body">
            <div class="col-md-12">
                <form id="contact-form">

                    <fieldset>
                        <legend>Dados Gerais</legend>
                        <div class="row">

                            <div class="col-md-12 com-sm-12 col-12 col-photo float-left" style="text-align: center; margin-bottom: 15px;" >
                                <img class="img-profile" style="background: url('<?php echo $url;?>/assets/img/noprofile.jpg'); background-position: center center; background-repeat: no-repeat; background-size: cover; border: 1px solid #d0d0d0; border-radius: 10px; height: 150px; width: 150px;"/>
                                <br/>
                                <div class="btn btn-primary" id="btnProfile" style="margin-top:10px!important">Trocar Foto</div>
                                <input type="file" class="d-none" id="btnFileProfile" name="photo-user"/>
                            </div>
                            <br clear="All"/>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input class="form-control" name="nome" type="text" />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>E-Mail</label>
                                    <input class="form-control" name="email" type="text" />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Telefone</label>
                                    <input class="form-control" name="phone" type="text" />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>CPF</label>
                                    <input class="form-control" name="cpf" type="text" />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Sexo</label>
                                    <select name="sexo" class="form-control">
                                        <option selected disabled>Selecione o sexo</option>
                                        <option>Masculino</option>
                                        <option>Feminino</option>
                                        <option>Outro</option>
                                        <option>Prefiro não informar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Descrição</label>
                                    <textarea class="form-control" name="descricao"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Senha</label>
                                    <input class="form-control" name="password" type="password" />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Reescreva a Senha</label>
                                    <input class="form-control" name="repassword" type="password" />
                                </div>
                            </div>
                        </div>

                    </fieldset>
                    <br />
                    <div class="btn btn-primary btn-save" data-type="add">Salvar</div>
                </form>
            </div>
        </div>
    </div>
</section>