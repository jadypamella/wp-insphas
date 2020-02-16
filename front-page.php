<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Insphas_Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <section class="site-section" id="about-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 mr-auto">
            <div class="text-left heading-wrap mb-5">
              <h2 class="mt-0 mb-5">Sobre</h2>
              <p>O Instituto Phallas Sapienthia (Insphas) - Vida Plena é uma instituição sem fins lucrativos fundada no ano de 2018, que atua na Ceilândia Norte, na região do Distrito Federal. A instituição nasceu a partir da mobilização de um grupo de moradores e tem como objetivo trazer melhorias para a comunidade em várias dimensões sociais, tais como, educação, empreendedorismo, saúde, lazer, esportes e bem-estar e demais atividades que possam melhorar a vida das pessoas da região.</p>
              <p>É uma parceria de dois amigos de longa data tentando retribuir para o mundo um pouco das oportunidades que tiveram.</p>
              <p>Por falar nisso, você já conhece a <a href="https://www.facebook.com/maria.olimpia.142" title="Facebook - Maria Olímpia" target="_blank">dona Olímpia</a> e o <a href="https://www.facebook.com/josegadelhaloureiro.gadelha" title="Facebook - José Gadelha" target="_blank">professor Gadelha</a>?</p>
            </div>
          </div>
          <div class="col-md-6 position-relative align-self-center">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/sobre_1.jpg" alt="Image" class="img-overlap-1">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/sobre_2.jpg" alt="Image" class="img-overlap-2">
          </div>
        </div>
      </div>
    </section>

    <section class="site-section" id="schedule-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-7 text-left heading-wrap mb-5">
              <h2 class="mt-0">Atividades Oferecidas</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>

          </div>
        </div>

        <div class="container-fluid">

          <div class="row no-gutters">
            <div class="col-md-6">
              <div class="sched d-block d-lg-flex">
                <div class="bg-image order-2" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/atividade_1.jpg');"></div>
                <div class="text order-1">
                  <h3>Yinyasa</h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts...</p>
                  <p class="sched-time">
                    <span><span class="fa fa-clock-o"></span> 5:30 PM</span> <br>
                    <span><span class="fa fa-calendar"></span> April 22, 2019</span> <br>
                  </p>
                  <p><a href="#" class="btn btn-primary btn-sm">Join from $15</a></p>

                </div>

              </div>

              <div class="sched d-block d-lg-flex">
                <div class="bg-image" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/atividade_2.jpg');"></div>
                <div class="text">
                  <h3>Chandra Vinyasa</h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts...</p>
                  <p class="sched-time">
                    <span><span class="fa fa-clock-o"></span> 5:30 PM</span> <br>
                    <span><span class="fa fa-calendar"></span> April 22, 2019</span> <br>
                  </p>
                  <p><a href="#" class="btn btn-primary btn-sm">Join from $15</a></p>

                </div>

              </div>

            </div>

            <div class="col-md-6">
              <div class="sched d-block d-lg-flex">
                <div class="bg-image order-2" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/atividade_3.jpg');"></div>
                <div class="text order-1">
                  <h3>Surya Vinyasa</h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts...</p>
                  <p class="sched-time">
                    <span><span class="fa fa-clock-o"></span> 5:30 PM</span> <br>
                    <span><span class="fa fa-calendar"></span> April 22, 2019</span> <br>
                  </p>
                  <p><a href="#" class="btn btn-primary btn-sm">Join from $15</a></p>

                </div>

              </div>

              <div class="sched d-block d-lg-flex">
                <div class="bg-image" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/atividade_4.jpg');"></div>
                <div class="text">
                  <h3>Ashtanga Foundations</h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts...</p>
                  <p class="sched-time">
                    <span><span class="fa fa-clock-o"></span> 5:30 PM</span> <br>
                    <span><span class="fa fa-calendar"></span> April 22, 2019</span> <br>
                  </p>
                  <p><a href="#" class="btn btn-primary btn-sm">Join from $15</a></p>

                </div>

              </div>

            </div>
          </div>
        </div>

      </div>
    </section> <!-- .section -->



<?php
get_footer();
