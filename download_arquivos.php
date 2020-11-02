<?php
require_once("cabecalho.php");
?>
<link rel="stylesheet" type="text/css" href="css/icons.css">
<style>
  @import url('https://fonts.googleapis.com/css?family=Roboto+Slab');
  a{
    text-decoration: none;
    color: black;
  }
  a:hover{
    text-decoration: none;
    color: black;
  }
  @media(max-width:1024px) {
    div#pdf{
      margin-top: 20px;
   }
}
  div#pdf img{
    margin-bottom: -10px;
   }
</style>

 <!-- Services Start -->
    <section id="services" class="services-section section-space-padding">
           <div class="row">
             <div class="col-sm-12">
               <div class="section-title">
                 <h1 class="text-center titulo">Downloads de Arquivos.</h1>
                 <hr>
                  <i><p class="text-center" style="font-family: 'Roboto Slab', serif; font-size: 15px;">Baixe a nossa Documentação de Software.</p></i>
                </div>
              </div>
            </div>
            <br>
            <br>
            <div class="col-sm-6 col-md-3 text-center" id="pdf">
              <a download="downloads/AgroPetSepini.pdf"  href="downloads/AgroPetSepini.pdf" target="blank">
                <img src="img/pdf.png" width="50" class="img-responsive center-block"></i><br>
                <span class="text-center"> Plano de Negócios <br> AgroPetSepini</span>
              </a>
            </div>
            <div class="col-sm-6 col-md-3 text-center" id="pdf">
              <a download="downloads/AgroPetSepini.pdf"  href="downloads/AgroPetSepini.pdf" target="blank">
                <img src="img/pdf.png" width="50" class="img-responsive center-block"></i><br>
                <span class="text-center"> Arquitetura de <br> Software</span>
              </a>
            </div>
            <div class="col-sm-6 col-md-3 text-center" id="pdf">
              <a download="downloads/Manual.pdf"  href="downloads/Manual.pdf" target="blank">
                <img src="img/pdf.png" width="50" class="img-responsive center-block"></i><br>
                <span class="text-center"> Manual do Sistema </span>
              </a>
            </div>
            <div class="col-sm-6 col-md-3 text-center" id="pdf">
              <a download="downloads/Requisitos.pdf"  href="downloads/Requisitos.pdf" target="blank">
                <img src="img/pdf.png" width="50" class="img-responsive center-block"></i><br>
                <span class="text-center"> Requisitos do Sistema</span>
              </a>
            </div>





            
            </div>
                 
    </section>
    <!-- Services End -->
<?php
require_once("topo.php");
?>