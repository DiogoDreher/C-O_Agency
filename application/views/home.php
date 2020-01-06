<!-- Header -->
<header>
    <div class="container">
        <div class="slider-container">
            <div class="intro-text">
                <div class="intro-lead-in">Trabalho realizado por profissionais qualificados</div>
                <div class="intro-heading">CARVALHO <i class="fa fa-tree"></i> OLIVEIRA</div>
                <a href="#about" class="page-scroll btn btn-xl">CONHEÇA NOSSOS SERVIÇOS</a>
            </div>
        </div>
    </div>
</header>
<section id="about" class="light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>SOBRE</h2>
                    <p>Uma agência criativa baseada na linda cidade do Porto, pronta para te ajudar a tornar reais todas as suas idéias.</p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
</section>

<section class="overlay-dark bg-img1 dark-bg short-section">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-offset-3 col-md-3 mb-sm-30">
                <div class="counter-item">
                    <a href="#portfolio" class="page-scroll">
                        <h6>Projetos</h6>
                    </a> 
                </div>
            </div>
            <div class="col-md-3 mb-sm-30">
                <div class="counter-item">
                    <a href="#team" class="page-scroll">
                        <h6>Equipe</h6>
                    </a> 
                </div>
            </div>
        </div>
    </div>
</section>
<section id="portfolio" class="light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Projetos</h2>
                    <p>A melhor maneira de mostrar nosso trabalho é através de exemplos. Aqui você pode ver todas as áreas em que atuamos. Confira nossos projetos e você encontrará o que procura.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- start portfolio item -->

            <?php 
                if (!empty($courses)) {
                    foreach ($courses as $course ) { ?>

                        <div class="col-md-4">
                            <div class="ot-portfolio-item">
                                <figure class="effect-bubba">
                                    <img src="<?=base_url() . $course["course_img"] ?>" alt="img02" class="img-responsive center-block" />
                                    <figcaption>
                                        <a href="#" data-toggle="modal" data-target="#course_<?=$course["course_id"] ?>"></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>

                        <!-- Modal for portfolio item 1 -->
                        <div class="modal fade" id="course_<?=$course["course_id"] ?>" tabindex="-1" role="dialog" aria-labelledby="Modal-label-1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="Modal-label-1"><?=$course["course_name"] ?></h4>
                                    </div>

                                    <div class="modal-body">
                                        <img src="<?=base_url() . $course["course_img"] ?>" alt="img01" class="img-responsive center-block" />
                                        <div class="modal-works"><span>DuraçãoÇ <?=intval($course["course_duration"]); ?> (h)</span></div>
                                        <p><?=$course["course_description"] ?></p>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>
            <?php            
                    }
                } 
            ?>
            

            <!-- end portfolio item -->
            
        </div>
    </div><!-- end container -->
</section>

<section id="team" class="light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Nossa Equipe</h2>
                    <p>Contamos com uma variedade de profissionais qualificados que serão de suma importância para o desenvolvimento do vosso projeto do início ao fim.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- team member item -->

            <?php 
                if (!empty($members)) {
                    foreach ($members as $member ) { ?>

            <div class="col-md-3">
                <div class="team-item">
                    <div class="team-image">
                        <img src="<?=base_url() . $member["member_img"] ?>" style="max-height: 200px;" class="img-responsive center-block" alt="author">
                    </div>
                    <div class="team-text">
                        <h3><?=$member["member_name"] ?></h3>
                        <div class="team-location"><?=$member["member_location"] ?></div>
                        <div class="team-position">– <?=$member["member_pos"] ?> –</div>
                        <p><?=$member["member_description"] ?></p>
                    </div>
                </div>
            </div>
            <?php            
                    }
                } 
            ?>

            <!-- end team member item -->
            
        </div>
    </div>
</section>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Contate-nos</h2>
                    <p>Se tiver dúvidas ou precisar de ajuda não hesite em nos contactar!<br>Provemos serviços de Web Development e Videomaking para o seu projeto.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Our Business Office</h3>
                <p>3422 Street, Barcelona 432, Spain, New Building North, 15th Floor</p>
                <p><i class="fa fa-phone"></i> +101 377 655 22125</p>
                <p><i class="fa fa-envelope"></i> mail@yourcompany.com</p>
            </div>
            <div class="col-md-3">
                <h3>Horário de Trabalho</h3>
                <p><i class="fa fa-clock-o"></i> <span class="day">Dias de semana:</span><span>09:00 às 18:00</span></p>
                <p><i class="fa fa-clock-o"></i> <span class="day">Fins de semana:</span><span>Fechados</span></p>
            </div>
            <div class="col-md-6">


                <form action="" name="form_message" id="form_message">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Seu Nome *" name="message_user_name" id="message_user_name" required="">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Seu Email *" name="message_user_email" id="message_user_email" required="" >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Sua Mensagem *" name="message_text" id="message_text" required="" ></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" name="btn_save_message" id="btn_save_message" class="btn">Enviar Mensagem</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<p id="back-top">
    <a href="#top"><i class="fa fa-angle-up"></i></a>
</p>