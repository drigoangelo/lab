<div class="row">
    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="false">
            <header>
                <span class="widget-icon"> <i class="fa fa-filter"></i> </span>
                <h2>Pesquisar Conteúdos</h2>
            </header>
            <div>
                <!-- widget content -->
                <div class="widget-body no-padding">
                    <form class="smart-form" action="<?= URL_APP ?><?=$this->module?>/Conteudo/admFilter" id="frm" method="GET" autocomplete="off">
                        <fieldset>
                        <section>
                            <label class="label" for="titulo">Título</label>
                                <label class="input">
                                    <input class='form-control input-sm' type='text' id='titulo' name='titulo' mask='' tabindex='<?=(++$tabindex)?>' value='<?= $response->get('titulo') ?>'/>
                                </label>
                        </section>

                        <section>
                            <label class="label" for="Atividade">Atividade</label>
                                <label class="input">
                                    <suggest id='Atividade' entity='Atividade' hasComboBox='true' hasPageLoad='false' tabindex='<?=(++$tabindex)?>' value='<?= $response->get('Atividade') ?>' />
                                </label>
                        </section>


                        </fieldset>
                        <footer>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Pesquisar</button>
                            <a class="btn btn-info" href="<?= URL_APP ?><?=$this->module?>/Conteudo/form"><i class="fa fa-file"></i> Novo</a>
                            <a data-toggle="modal" class="btn btn-danger" href="#deleteMultipleActionModal" onclick="eqDeleteSelecionadosForm('resultados', 'Conteudo.delSelected')" title="Clique aqui para excluir o(s) registro(s) selecionado(s)"><i class="fa fa-trash-o-o"></i> Excluir Selecionados</a>
                        </footer>
                    </form>
                </div>
            </div>
        </div>
    </article>
    <? include 'Conteudo.adm.php'; ?>
</div>
