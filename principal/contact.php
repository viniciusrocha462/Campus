<!doctype html>
<html lang="en">
    <?php
    include_once "../template/head.php";
    ?>
  <body>
      <?php
      include_once "../template/header.php";
      ?>

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(../assets/images/contact-us.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <h1>Entre em Contato</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->


    <section class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form action="#" method="post">
                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="name">Nome</label>
                      <input type="text" id="name" class="form-control ">
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="phone">Telefone</label>
                      <input type="text" id="phone" class="form-control ">
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="email">Email</label>
                      <input type="email" id="email" class="form-control ">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="message">Mensagem</label>
                      <textarea name="message" id="message" class="form-control " cols="30" rows="8" placeholder="Escreva sua mensagem"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Envie a mensagem" class="btn btn-primary">
                    </div>
                  </div>
                </form>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

     <section class="overflow">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          
          
          <div class="col-lg-7 order-lg-3 order-1 mb-lg-0 mb-5">
            <img src="../assets/images/contact-banner.jpg" alt="Image placeholder" class="img-md-fluid">
          </div>
          <div class="col-lg-1 order-lg-2"></div>
          <div class="col-lg-4 order-lg-1 order-2 mb-lg-0 mb-5">
            <blockquote class="testimonial">
              Entre em contato conosco para um melhor atendimento, assim podemos levar suas dúvidas direto ao ponto
            </blockquote>
            <p></p>
          </div>
        </div>
      </div>
    </section>

      <?php
      include_once "../template/footer.php";
      ?>
      <?php
      include_once "../template/script.php";
      ?>
  </body>
</html>