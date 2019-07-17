<div class="row">
    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="false">
            <header>
                <span class="widget-icon"> <i class="fa fa-file-o"></i> </span>
                <h2>Ação</h2>
            </header>
            <div>
                <!-- CONTEUDO DO WIDGET-->
                <div class="widget-body no-padding">
                    <form class="smart-form" method="post" action="<?= URL ?>index.php?action=Acao.formSubmit" id="frm" name="frm" onsubmit="return false;" autocomplete="off" enctype='multipart/form-data' >
                        <header>
                            Geral
                        </header>
                        <fieldset>
                        <section>
                            <label class="label"for="Modulo">Módulo</label>
                                <label class="input">
                                    <suggest id='Modulo' entity='Modulo' hasComboBox='true' tabindex='<?=(++$tabindex)?>' />
                                </label>
                        </section>


                        <section>
                            <label class="label"for="nome"><?=CAMPO_OBRIGATORIO?> Nome</label>
                                <label class="input">
                                    <input class="form-control"  type="text" id="nome" name="nome" maxlength='45' mask='' validate='1' tabindex='<?=(++$tabindex)?>'/>
                                </label>
                        </section>


                        <section>
                            <label class="label"for="descricao">Descrição</label>
                                <label class="input">
                                    <input class="form-control"  type="text" id="descricao" name="descricao" maxlength='500' mask='' validate='1' tabindex='<?=(++$tabindex)?>'/>
                                </label>
                        </section>


                        </fieldset>
                        <footer>
                            <button class="btn btn-primary" onclick="AcaoSubmitHandler(this, false);" tabindex="<?= ++$tabindex ?>" ><i class="icon-check icon-white"></i> Salvar</button>
                            <button class="btn btn-primary" onclick="AcaoSubmitHandler(this, true);" tabindex="<?= ++$tabindex ?>" ><i class="icon-share icon-white"></i> Salvar e Sair</button>
                            <button class="btn btn-warning" type="reset" tabindex="<?= ++$tabindex ?>" ><i class="icon-remove-circle icon-white"></i> Limpar</button>
                            <a href="<?= URL_APP ?><?=$this->module?>/Acao/admFilter" tabindex="<?= ++$tabindex ?>" class="btn btn-danger"><i class="icon-share-alt icon-white"></i> Sair</a>
                        </footer>
                    </form>
                </div>
            </div>
        </div>
    </article>
</div>