<section style="min-height: calc(100vh - 83px);" class="light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6 text-center">
                <div class="section-title">
                    <h2>ÁREA RESTRITA</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-offset-5 col-lg-2 text-center">
                <div class="form-group">
                    <a href="" id="btn_your_user" user_id="<?=$user_id?>" class="btn btn-link"><i class="fa fa-user"></i></a>
                    <a href="restrict/logoff" class="btn btn-link"><i class="fa fa-sign-out"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_courses" role="tab" data-toggle="tab">Cursos</a></li>
            <li class=""><a href="#tab_team" role="tab" data-toggle="tab">Equipe</a></li>
            <li class=""><a href="#tab_users" role="tab" data-toggle="tab">Usuários</a></li>
            <li class=""><a href="#tab_messages" role="tab" data-toggle="tab">Mensagens</a></li>
        </ul>

        <div class="tab-content">

            <div id="tab_courses" class="tab-pane active">
                <div class="cointainer-fluid">
                    <h2 class="text-center"><strong>Gerenciar Cursos</strong></h2>
                    <a type="button" id="btn_add_course" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Curso</i></a>
                    <table id="dt_courses" class="table table-stripped table-bordered">
                        <thead>
                            <tr class="tableheader">
                                <th class="dt-center">Nome</th>
                                <th class="dt-center no-sort">Imagem</th>
                                <th class="dt-center">Duração</th>
                                <th class="no-sort">Descrição</th>
                                <th class="dt-center no-sort">Ações</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>

            <div id="tab_team" class="tab-pane ">
                <div class="cointainer-fluid">
                    <h2 class="text-center"><strong>Gerenciar Equipe</strong></h2>
                    <a type="button" id="btn_add_member" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Membro</i></a>
                    <table id="dt_team" class="table table-stripped table-bordered">
                        <thead>
                            <tr class="tableheader">
                                <th class="dt-center">Nome</th>
                                <th class="dt-center no-sort">Foto</th>
                                <th class="no-sort">Descrição</th>
                                <th class="no-sort">Localização</th>
                                <th class="no-sort">Posição</th>
                                <th class="dt-center no-sort">Ações</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>

            <div id="tab_users" class="tab-pane ">
                <div class="cointainer-fluid">
                    <h2 class="text-center"><strong>Gerenciar Usuários</strong></h2>
                    <a type="button" id="btn_add_user" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Usuários</i></a>
                    <table id="dt_users" class="table table-stripped table-bordered">
                        <thead>
                            <tr class="tableheader">
                                <th>Login</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th class="dt-center no-sort">Ações</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>

            <div id="tab_messages" class="tab-pane ">
                <div class="cointainer-fluid">
                    <h2 class="text-center"><strong>Gerenciar Mensagens</strong></h2>
                    <!-- <i type="button" id="btn_add_user" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Usuários</i></a> -->
                    <table id="dt_messages" class="table table-stripped table-bordered">
                        <thead>
                            <tr class="tableheader">
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th class="no-sort">Mensagem</th>
                                <th class="dt-center no-sort">Ações</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- MODAIS -->

<div id="modal_course" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">X</button>
                <h4 class="modal-title">Cursos</h4>
            </div>

            <div class="modal-body">

                <form action="" id="form_course">

                    <input id="course_id" name="course_id" hidden>

                    <div class="form-group">
                        <label for="" class="col-lg-2 control-label">Nome</label>
                        <div class="col-lg-12">
                            <input type="text" name="course_name" id="course_name" class="form-control" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Imagem</label>
                        <div class="col-lg-10">
                            <img src="" id="course_img_path" style="max-height: 400px;">
                            <label class="btn btn-block btn-info">
                                <i class="fa fa-upload"></i>&nbsp;&nbsp;Importar Imagem
                                <input type="file" id="btn_upload_course_img" accept="image/*" style="display: none;">
                            </label>
                            <input name="course_img" id="course_img" hidden>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Duração (h)</label>
                        <div class="col-lg-12">
                            <input type="number" step="0.1" name="course_duration" id="course_duration" class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Descrição</label>
                        <div class="col-lg-12">
                            <textarea name="course_description" id="course_description" class="form-control"></textarea>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" id="btn_save_course" class="btn btn-primary">
                            <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
                        </button>
                        <span class="help-block"></span>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

<div id="modal_member" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">X</button>
                <h4 class="modal-title">Membro</h4>
            </div>

            <div class="modal-body">

                <form action="" id="form_member">

                    <input id="member_id" name="member_id" hidden>

                    <div class="form-group">
                        <label for="" class="col-lg-2 control-label">Nome</label>
                        <div class="col-lg-10">
                            <input type="text" name="member_name" id="member_name" class="form-control" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-lg-2 control-label">Foto</label>
                        <div class="col-lg-10">
                            <img src="" id="member_img_path" style="max-height: 400px; max-width: 400px;">
                            <label class="btn btn-block btn-info">
                                <i class="fa fa-upload"></i>&nbsp;&nbsp;Importar Foto
                                <input type="file" id="btn_upload_member_img" accept="image/*" style="display: none;">
                            </label>
                            <input name="member_img" id="member_img" hidden>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-lg-2 control-label">Descrição</label>
                        <div class="col-lg-10">
                            <textarea name="member_description" id="member_description" class="form-control"></textarea>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-lg-2 control-label">Localidade</label>
                        <div class="col-lg-10">
                            <textarea name="member_location" id="member_location" class="form-control"></textarea>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-lg-2 control-label">Cargo</label>
                        <div class="col-lg-10">
                            <textarea name="member_pos" id="member_pos" class="form-control"></textarea>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" id="btn_save_member" class="btn btn-primary">
                            <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
                        </button>
                        <span class="help-block"></span>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

<div id="modal_user" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">X</button>
                <h4 class="modal-title">Usuário</h4>
            </div>

            <div class="modal-body">

                <form action="" id="form_user">

                    <input id="user_id" name="user_id" hidden>

                    <div class="form-group">
                        <label for="" class="col-lg-2 control-label">Login</label>
                        <div class="col-lg-10">
                            <input type="text" name="user_login" id="user_login" class="form-control" maxlength="30">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-lg-2 control-label">Nome Completo</label>
                        <div class="col-lg-10">
                            <input type="text" name="user_full_name" id="user_full_name" class="form-control" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="email" name="user_email" id="user_email" class="form-control" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-lg-2 control-label">Confirmar Email</label>
                        <div class="col-lg-10">
                            <input type="email" name="user_email_confirm" id="user_email_confirm" class="form-control" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-lg-2 control-label">Senha</label>
                        <div class="col-lg-10">
                            <input type="password" name="user_password" id="user_password" class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-lg-2 control-label">Confirmar Senha</label>
                        <div class="col-lg-10">
                            <input type="password" name="user_password_confirm" id="user_password_confirm" class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" id="btn_save_user" class="btn btn-primary">
                            <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
                        </button>
                        <span class="help-block"></span>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

<div id="modal_message" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">X</button>
                <h4 class="modal-title">Mensagem</h4>
            </div>

            <div class="modal-body">

                <form action="" id="form_messages">

                    <input id="message_id" name="message_id" hidden>

                    <div class="form-group">
                        <label for="" class="col-lg-2 control-label">Nome</label>
                        <div class="col-lg-10">
                            <input type="text" name="message_user_name" id="message_user_name" class="form-control" maxlength="30">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="email" name="message_user_email" id="message_user_email" class="form-control" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-lg-2 control-label">Mensagem</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" name="message_text" id="message_text"></textarea>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="button" id="" data-dismiss="modal" class="btn btn-danger">
                            <i class="fa fa-times"></i>&nbsp;&nbsp;Fechar
                        </button>
                        <span class="help-block"></span>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

