<?php
require_once("cabecalho.php");
?>
<link rel="stylesheet" type="text/css" href="css/icons.css">
<style>
  @import url('https://fonts.googleapis.com/css?family=Roboto+Slab');
</style>

 <!-- Services Start -->
    <section id="services" class="services-section section-space-padding">
           <div class="row">
             <div class="col-sm-12">
               <div class="section-title">
                 <h1 class="text-center titulo">Atendimento via Email.</h1>
                 <hr>
                  <i><p class="text-center" style="font-family: 'Roboto Slab', serif; font-size: 15px;">O Melhor Sistema de Gestão Online para PetShops.</p></i>
                </div>
              </div>
            </div>
            <br>
            <div class="col-lg-8 col-lg-offset-2">
                    <form id="contact-form" method="post" action="contact.php" role="form">
                        <div class="messages"></div>

                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Primeiro Nome *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Por favor, entre com seu primeiro nome *" required="required" data-error="Primeiro nome é requerido">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Último Nome *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Por favor, entre com seu último nome *" required="required" data-error="Último nome é requerido.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                            </div>
            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Por favor, entre com seu e-mail *" required="required" data-error="Digite um e-mail válido.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Celular</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Por favor, entre com seu celular">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Mesagem *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Mensagem para *" rows="4" required="required" data-error="Por favor, deixe uma mensagem."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" value="Enviar Mensagem">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted"><strong>*</strong> Estes campos são requeridos.</p>
                                </div>
                            </div>
                        </div>

                    </form>
                </div><!-- /.8 -->
            </div>
            
    </section>
    <!-- Services End -->
<?php
require_once("topo.php");
?>