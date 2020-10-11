<?php
    require_once 'config/config.php';
    include 'view/layouts/app.php';
?>

    <!-- Home-Area-End -->
    <!-- About-Area -->
    <section class="section-padding" id="about_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                    <div class="page-title text-center">
                        <div class="space-20"></div>
                        <h3 class="title">Descripción</h3>
                        <div class="space-30"></div>
                        <p style="font-size:1.7rem">Soy Programador a tiempo completo, me caracterizo por tener seriedad, resonsabilidad y madurez a la hora de trabajar, sé asumir mis responsabilidades, soy ambicioso y detallista a la hora de diseñar, me gusta que mis diseños sean atractivos y divertidos; tengo una buena capacidad de análisis y de desarrollo lógico para mis trabajos en Back-End. Practico y estudio constante mente para ser el mejor diseñador y desarrollador porque esto es lo que me gusta.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-Area-End -->
    <!-- Feature-Area -->
    <section class="feature-area section-padding-top" id="features_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="page-title text-center">
                        <h3 class="title">Areas de trabajo</h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">  
                            <i class="lnr lnr-rocket"></i>
                        </div>
                        <h3>ApiRest</h3>
                        <p><ul><li>Laravel</li><li>Django</li></ul></p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="box-icon">
                            <i class="lnr lnr-pencil"></i>
                        </div>
                        <h3>Front-end</h3>
                        <p>A la hora de diseño ser meticuloso y detallista es importante ya que esta es lo que el cliente a de ver.</p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="box-icon">
                            <i class="lnr lnr-cloud-download"></i>
                        </div>
                        <h3>Back-end</h3>
                        <p>Como especialidad mi lenguaje es php.</p>
                    </div>
                    <div class="space-60"></div>
                </div>
                <div class="hidden-xs hidden-sm col-md-4">
                    <figure class="mobile-image">
                        <img src="<?php echo constant('APP_STATIC')?>/images/feature-image.png" alt="Feature Photo">
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="lnr lnr-laptop"></i>
                        </div>
                        <h3>Extensiones</h3>
                        <p>Elavoración de extensiones para Chrome.</p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="box-icon">
                            <i class="lnr lnr-laptop-phone"></i>
                        </div>
                        <h3>Framework</h3>
                        <p>Con regularidad manejo los framework<ul><li>Laravel</li><li>Django</li></ul></p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="box-icon">
                            <i class="lnr lnr-users"></i>
                        </div>
                        <h3>Trabajo en Equipo</h3>
                        <p>Conciderando ser freelanzer, tengo el conocimiento de, <ul><li>GitHUB</li><li>BitBucker</li><li>Gitlab</li><li>Trello</li></ul></p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Feature-Area-End -->
    <!-- Testimonial-Area -->
    <section class="section-padding" id="testimonial_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title text-center">
                        <h3 class="title">Tecnologias</h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="team-slide">
                        <div class="team-box">
                            <div class="team-image">
                                <img style="width: 200rem;height:110%;padding:0px" src="<?php echo constant('APP_STATIC')?>/images/javascript.png" alt="">
                            </div>
                            <h3>JavaScript</h3>

                            <p><ul class="list-group" style='padding:0px;border:0px;list-style:none'>
                                <li class='list-group-item-text'>
                                    <p>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star" style="color:#dddd"></i>
                                        <i class="lnr lnr-star" style="color:#dddd"></i>
                                    </p>
                                </li>
                                <li class='list-group-item-text'><br></li>
                                <li class='list-group-item-text'><br></li>
                            </ul></p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img style='width:100%;height:100%;' src="<?php echo constant('APP_STATIC')?>/images/php.png" alt="">
                            </div>
                            <h3>PHP</h3>
                            <p>
                                <ul class='list-group' style='padding:0px;border:0px;list-style:none'>
                                    <li class='list-group-item-text'>
                                        <p>
                                            PDO: 
                                            <i class="lnr lnr-star"></i>
                                            <i class="lnr lnr-star"></i>
                                            <i class="lnr lnr-star"></i>
                                            <i class="lnr lnr-star" style='color:#dddd'></i>
                                            <i class="lnr lnr-star" style='color:#dddd'></i>
                                        </p>
                                    </li>
                                    <li class='list-group-item-text'>
                                        <p>
                                            POO: 
                                            <i class="lnr lnr-star"></i>
                                            <i class="lnr lnr-star"></i>
                                            <i class="lnr lnr-star"></i>
                                            <i class="lnr lnr-star"></i>
                                            <i class="lnr lnr-star"></i>
                                        </p>
                                    </li>
                                    <li class='list-group-item-text'>
                                        <p>
                                            MVC: 
                                            <i class="lnr lnr-star"></i>
                                            <i class="lnr lnr-star"></i>
                                            <i class="lnr lnr-star"></i>
                                            <i class="lnr lnr-star"></i>
                                            <i class="lnr lnr-star" style='color:#dddd'></i>
                                        </p>    
                                    </li>
                                </ul>
                            </p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="<?php echo constant('APP_STATIC')?>/images/python.jpg" alt="">
                            </div>
                            <h3>Python</h3>
                            <p><ul class="list-group" style='padding:0px;border:0px;list-style:none'>
                                <li class='list-group-item-text'>
                                    <p>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star" style="color:#dddd"></i>
                                        <i class="lnr lnr-star" style="color:#dddd"></i>
                                        <i class="lnr lnr-star" style="color:#dddd"></i>
                                    </p>
                                </li>
                                <li class='list-group-item-text'><br></li>
                                <li class='list-group-item-text'><br></li>
                            </ul></p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="<?php echo constant('APP_STATIC')?>/images/css.png" alt="">
                            </div>
                            <h3>CSS</h3>
                            <p><ul class="list-group" style='padding:0px;border:0px;list-style:none'>
                                <li class='list-group-item-text'>
                                    <p>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star" style="color:#dddd"></i>
                                    </p>
                                </li>
                                <li class='list-group-item-text'><br></li>
                                <li class='list-group-item-text'><br></li>
                            </ul></p> 
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="<?php echo constant('APP_STATIC')?>/images/html5.png" alt="">
                            </div>
                            <h3>HTML5</h3>
                            <p><ul class="list-group" style='padding:0px;border:0px;list-style:none'>
                                <li class='list-group-item-text'>
                                    <p>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                    </p>
                                </li>
                                <li class='list-group-item-text'><br></li>
                                <li class='list-group-item-text'><br></li>
                            </ul></p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="<?php echo constant('APP_STATIC')?>/images/sql.png" alt="">
                            </div>
                            <h3>DB</h3>
                            <p>
                                <ul class='list-group' style='padding:0px;border:0px;list-style:none'>
                                    <li class='list-group-item-text'>
                                        <p>
                                            MySQL: 
                                            <i class="lnr lnr-star"></i>
                                            <i class="lnr lnr-star"></i>
                                            <i class="lnr lnr-star"></i>
                                            <i class="lnr lnr-star"></i>
                                            <i class="lnr lnr-star"></i>
                                        </p>
                                    </li>   
                                    <li class='list-group-item-text'>
                                        <p>
                                            PgSQL: 
                                            <i class="lnr lnr-star"></i>
                                            <i class="lnr lnr-star"></i>
                                            <i class="lnr lnr-star"></i>
                                            <i class="lnr lnr-star"></i>
                                            <i class="lnr lnr-star" style="color:#dddd"></i>
                                        </p>
                                    </li>
                                    <li class='list-group-item-text'>
                                        <p>
                                            SQLite: 
                                            <i class="lnr lnr-star"></i>
                                            <i class="lnr lnr-star"></i>
                                            <i class="lnr lnr-star"></i>
                                            <i class="lnr lnr-star"></i>
                                            <i class="lnr lnr-star" style="color:#dddd"></i>
                                        </p>    
                                    </li>
                                </ul>
                            </p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img style="width:100%;height:100%" src="<?php echo constant('APP_STATIC')?>/images/laravel.png" alt="">
                            </div>
                            <h3>Laravel</h3>
                            <p><ul class="list-group" style='padding:0px;border:0px;list-style:none'>
                                <li class='list-group-item-text'>
                                    <p>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star" style="color:#dddd"></i>
                                    </p>
                                </li>
                                <li class='list-group-item-text'><br></li>
                                <li class='list-group-item-text'><br></li>
                            </ul></p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="<?php echo constant('APP_STATIC')?>/images/django.jpeg" alt="">
                            </div>
                            <h3>Django</h3>
                            <p><ul class="list-group" style='padding:0px;border:0px;list-style:none'>
                                <li class='list-group-item-text'>
                                    <p>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star" style="color:#dddd"></i>
                                        <i class="lnr lnr-star" style="color:#dddd"></i>
                                        <i class="lnr lnr-star" style="color:#dddd"></i>
                                    </p>
                                </li>
                                <li class='list-group-item-text'><br></li>
                                <li class='list-group-item-text'><br></li>
                            </ul></p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="<?php echo constant('APP_STATIC')?>/images/jquery.png" alt="">
                            </div>
                            <h3>JQuery</h3>
                            <p><ul class="list-group" style='padding:0px;border:0px;list-style:none'>
                                <li class='list-group-item-text'>
                                    <p>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star" style="color:#dddd"></i>
                                    </p>
                                </li>
                                <li class='list-group-item-text'><br></li>
                                <li class='list-group-item-text'><br></li>
                            </ul></p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="<?php echo constant('APP_STATIC')?>/images/vue.jpg" alt="">
                            </div>
                            <h3>Vue.js</h3>
                            <p><ul class="list-group" style='padding:0px;border:0px;list-style:none'>
                                <li class='list-group-item-text'>
                                    <p>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star" style="color:#dddd"></i>
                                        <i class="lnr lnr-star" style="color:#dddd"></i>
                                        <i class="lnr lnr-star" style="color:#dddd"></i>
                                    </p>
                                </li>
                                <li class='list-group-item-text'><br></li>
                                <li class='list-group-item-text'><br></li>
                            </ul></p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="<?php echo constant('APP_STATIC')?>/images/bootstrap.jpg" alt="">
                            </div>
                            <h3>Bootstrap</h3>
                            <p><ul class="list-group" style='padding:0px;border:0px;list-style:none'>
                                <li class='list-group-item-text'>
                                    <p>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                    </p>
                                </li>
                                <li class='list-group-item-text'><br></li>
                                <li class='list-group-item-text'><br></li>
                            </ul></p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="<?php echo constant('APP_STATIC')?>/images/materia.png" alt="">
                            </div>
                            <h3>Materialize</h3>
                            <p><ul class="list-group" style='padding:0px;border:0px;list-style:none'>
                                <li class='list-group-item-text'>
                                    <p>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star" style="color:#dddd"></i>
                                    </p>
                                </li>
                                <li class='list-group-item-text'><br></li>
                                <li class='list-group-item-text'><br></li>
                            </ul></p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="<?php echo constant('APP_STATIC')?>/images/react.jpg" alt="">
                            </div>
                            <h3>React.js</h3>
                            <p><ul class="list-group" style='padding:0px;border:0px;list-style:none'>
                                <li class='list-group-item-text'>
                                    <p>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star"></i>
                                        <i class="lnr lnr-star" style="color:#dddd"></i>
                                        <i class="lnr lnr-star" style="color:#dddd"></i>
                                        <i class="lnr lnr-star" style="color:#dddd"></i>
                                    </p>
                                </li>
                                <li class='list-group-item-text'><br></li>
                                <li class='list-group-item-text'><br></li>
                            </ul></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial-Area-End -->
    <!-- Gallery-Area -->
    <section class="gallery-area section-padding angle" id="gallery_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title text-center">
                        <h3 class="title" style="color: white">Trabajos</h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12" style="height:100%">
                    <div class="team-slide">
                        <div class="team-box" style="background:#ffff;padding-bottom:5rem;height:100%">
                            <div class="team-image">
                                <img style="width: 200rem;height:110%;padding:0px" src="<?php echo constant('APP_STATIC')?>/images/travel.jpg" alt="">
                            </div>
                            <h3 style="color:#aaa1c8">Qantutravel</h3>
                            <h4 style='color:#aaa1e8;font-style:italic' class="position">Back-end y Front-end</h4>
                            <p style='color:#1f1f1f'>(ERP) desarrolado en Laravel 5.5, para el control de dichosa enpresa ubicada en perú.</p>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <hr>
                            <p>Link:</p>
                            <a style='font-size:2.5rem;text-align:center' href="www.Qantutravel.com" target='_blanck'>www.Qantutravel.com</a>
                        </div>
                        <div class="team-box" style="background:#ffff;padding-bottom:5rem;height:100%">
                            <div class="team-image">
                                <img style='width:100%;height:100% !important;' src="<?php echo constant('APP_STATIC')?>/images/sigma.jpg" alt="">
                            </div>
                            <h3 style="color:#aaa1c8">Sigma</h3>
                            <h4 style='color:#aaa1e8;font-style:italic' class="position">Back-end y Front-end</h4>
                            <p style='color:#1f1f1f'>Sistema de información desarrolado en Django 1.3, este sistema se encarga en llevar el control y registro de personal administrativo y obrero del estado Guarico. (en producción)</p>
                            <br><br>
                            <hr>
                            <p>Repositorio:</p>
                            <a style='font-size:2.5rem;text-align:center' href="repo" target='_blanck'>repo</a>
                        </div>
                        <div class="team-box" style="background:#ffff;height:100%">
                            <div class="team-image">
                                <img style='width:100%;height:100%;' src="<?php echo constant('APP_STATIC')?>/images/blue.png" alt="">
                            </div>
                            <h3 style="color:#aaa1c8">Rebel</h3>
                            <h4 style='color:#aaa1e8;font-style:italic' class="position">Full-Stack</h4>
                            <p style='color:#1f1f1f'>Sistema de información desarrolado en Laravel 5.8, desarrollado para cumplir con las necesidad de llevar el control de los registros y versionamientos, gestionamiento y verificación de los contenidos, de la Universidad Nacional Romulo Gallegos</p>
                            <hr>
                            <p>Repo:</p>
                            <a style='font-size:2.5rem;text-align:center' href="repo" target='_blanck'>repo</a>
                        </div>
                        <div class="team-box" style="height:100%;background:#ffff;padding-bottom:5rem">
                            <div class="team-image">
                                <img style='width:100%;height:100%;' src="<?php echo constant('APP_STATIC')?>/images/expedientes.jpg" alt="">
                            </div>
                            <h3 style="color:#aaa1c8">Expediente Digital</h3>
                            <h4 style='color:#aaa1e8;font-style:italic' class="position">Full-Stack</h4>
                            <p style='color:#1f1f1f'>Sistema de información desarrolado en Laravel 5.5, dicho sistema se encarga de administrar los tramites del circuito judicial. Descarga de expedientes actualizados y registros de expecientes.</p>
                            <br>
                            <br>
                            <hr>
                            <p>repo:</p>
                            <a style='font-size:2.5rem;text-align:center' href="repo" target='_blanck'>repo</a>
                        </div>
                        <div class="team-box" style="height:100%;background:#ffff;padding-bottom:6rem">
                            <div class="team-image">
                                <img style='width:100%;height:100%;' src="<?php echo constant('APP_STATIC')?>/images/sala.jpg" alt="">
                            </div>
                            <h3 style="color:#aaa1c8">Silencert</h3>
                            <h4 style='color:#aaa1e8;font-style:italic' class="position">Full-Stack</h4>
                            <p style='color:#1f1f1f'>Sistema de información desarrolado en PHP patron MVC, este sistema web se encarga de llevar el registro de libros y pedidos de estos para, administrar y contavilizar dichos libros de la Universidad Nacional Romulo Gallegos.</p>
                            <hr>
                            <p>repo:</p>
                            <a style='font-size:2.5rem;text-align:center' href="repo" target='_blanck'>repo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery-Area-End -->
    <!-- Subscribe-Form -->
    <?php include ('galeria.php');?>



   <!--  <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="subscribe-form team-box text-center">
                        <h3 class="blue-color">Contratación</h3>
                        <div class="space-20"></div>
                        <form method="POST" action='process.php'>
                            <ul class="list-group" style="border:0px">                    
                                <li class="list-group-item" style="border:0px">
                                    <input type="text" name="name" placeholder="Nombre" class="control">
                                </li>
                                <li class="list-group-item" style="border:0px">
                                    <input type="email" name="email" placeholder="E-mail" class="control">
                                </li>
                                <li class="list-group-item" style="border:0px">
                                    <input type="text" name="subject" placeholder="Asunto" class="control">
                                </li>
                                <li class="list-group-item" style="border:0px">
                                    <textarea name="message" style="border-radius:10px" class="control"></textarea> 
                                </li>
                                <li class="list-group-item" style="border:0px">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-4"></div>
                                        <div class="col-xs-12 col-sm-4 form-group">
                                            <button class="bttn-default active" type="submit">Enviar</button>
                                        </div>
                                        <div class="col-xs-12 col-sm-4"></div>
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <?php if ($_GET["status"]): ?>
            <script>alert(<?php echo $_GET["status"] ?>)</script>
    <?php endif ?>
 