    <?php 
      include_once('./header.php');
    ?>

    <!-- Header -->
    <header id="header" class="header">
      <div class="header-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="text-container">
                <h1>
                  ROMA Solutions<br />FOR
                  <span id="js-rotating">APPs, WEB, SUPPORT </span>
                </h1>
                <p class="p-large">
                  Somos un grupo de profesionales apasionados por la tecnología,
                  cada uno especializado en un área diferente de la tecnología
                  conformando un sólido equipo para brindar soluciones modernas
                  y de calidad.
                </p>
                <a
                  class="btn-solid-lg page-scroll"
                  href="https://www.facebook.com/romasolutionsSV"
                  target="_blank"
                  ><i class="fab fa-facebook"></i>FACEBOOK</a
                >
                <a
                  class="btn-solid-lg page-scroll"
                  href="https://www.instagram.com/romasolutionssv"
                  target="_blank"
                  ><i class="fab fa-instagram"></i>INSTAGRAM</a
                >
              </div>
            </div>
            <!-- end of col -->
            <div class="col-lg-6">
              <div class="image-container">
                <img
                  class="img-fluid"
                  src="images/header_image.svg"
                  alt="ROMA LOGO"
                />
              </div>
              <!-- end of image-container -->
            </div>
            <!-- end of col -->
          </div>
          <!-- end of row -->
        </div>
        <!-- end of container -->
      </div>
      <!-- end of header-content -->
    </header>
    <!-- end of header -->
    <!-- end of header -->

    <!-- Features -->
    <div id="features" class="tabs">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>SERVICIOS</h2>
            <div class="p-heading p-large">
              <p>
                Como ROMA Solutions brindamos la infraestructura, configuración
                y soporte necesario para garantizar el correcto funcionamiento
                de diferentes plataformas, además de brindar capacitaciones al
                personal administrativo y usuarios finales para aprovechar al
                máximo las características que las herramientas proveen.
              </p>
            </div>
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
        <div class="row">
          <!-- Tabs Links -->
          <ul class="nav nav-tabs" id="lenoTabs" role="tablist">
            <li class="nav-item">
              <a
                class="nav-link active"
                id="nav-tab-1"
                data-toggle="tab"
                href="#tab-1"
                role="tab"
                aria-controls="tab-1"
                aria-selected="true"
                ><i class="fas fa-file-code"></i>SOFTWARE</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                id="nav-tab-2"
                data-toggle="tab"
                href="#tab-2"
                role="tab"
                aria-controls="tab-2"
                aria-selected="false"
                ><i class="fas fa-cogs"></i>SOPORTE Y SEGURIDAD</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                id="nav-tab-3"
                data-toggle="tab"
                href="#tab-3"
                role="tab"
                aria-controls="tab-3"
                aria-selected="false"
                ><i class="fas fa-user-graduate"></i>CAPACITACIONES</a
              >
            </li>
          </ul>
          <!-- end of tabs links -->

          <!-- Tabs Content-->
          <div class="tab-content" id="lenoTabsContent">
            <!-- Tab -->
            <div
              class="tab-pane fade show active"
              id="tab-1"
              role="tabpanel"
              aria-labelledby="tab-1"
            >
              <div class="container">
                <div class="row">
                  <!-- Icon Cards Pane -->
                  <div class="col-lg-4">
                    <div class="card left-pane first">
                      <div class="card-body">
                        <div class="text-wrapper">
                          <h4 class="card-title">Aplicaciones Web</h4>
                          <p>
                            Desarrollamos e implementamos plataformas en un
                            entorno web, garantizando el acceso y disponibilidad
                            de la informacion desde cualquier lugar del mundo.
                          </p>
                        </div>
                        <div class="card-icon">
                          <i class="fas fa-cloud"></i>
                        </div>
                      </div>
                    </div>
                    <div class="card left-pane">
                      <div class="card-body">
                        <div class="text-wrapper">
                          <h4 class="card-title">Aplicaciones Móviles</h4>
                          <p>
                            Apostamos por el avance de los entornos de movilidad
                            y por ello contamos con expertos en desarrollo
                            aplicaciones móviles en las principales plataformas:
                            IOS y Android.
                          </p>
                        </div>
                        <div class="card-icon">
                          <i class="fas fa-mobile-alt"></i>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="card left-pane">
                      <div class="card-body">
                        <div class="text-wrapper">
                          <h4 class="card-title">Refined Options</h4>
                          <p>
                            Each option packaged in the app's menus is provided
                            in order to improve your personal development status
                          </p>
                        </div>
                        <div class="card-icon">
                          <i class="far fa-gem"></i>
                        </div>
                      </div>
                    </div> -->
                  </div>
                  <!-- end of icon cards pane -->

                  <!-- Image Pane -->
                  <div class="col-lg-4">
                    <img
                      class="img-fluid"
                      src="images/3.png"
                      alt="alternative"
                    />
                  </div>
                  <!-- end of image pane -->

                  <!-- Icon Cards Pane -->
                  <div class="col-lg-4">
                    <div class="card right-pane first">
                      <div class="card-body">
                        <div class="card-icon">
                          <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="text-wrapper">
                          <h4 class="card-title">Plataformas educativas</h4>
                          <p>
                            Implementamos plataformas educativas basadas en el
                            servicio de MOODLE.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card right-pane">
                      <div class="card-body">
                        <div class="card-icon">
                          <i class="fas fa-window-restore"></i>
                        </div>
                        <div class="text-wrapper">
                          <h4 class="card-title">Software a la medida</h4>
                          <p>
                            Desarrollamos soluciones que se ajustan a las
                            necesidades reales de nuestros clientes
                          </p>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="card right-pane">
                      <div class="card-body">
                        <div class="card-icon">
                          <i class="fas fa-cube"></i>
                        </div>
                        <div class="text-wrapper">
                          <h4 class="card-title">Good Foundation</h4>
                          <p>
                            Get a solid foundation for your self development
                            efforts. Try Leno mobile app for any mobile platform
                          </p>
                        </div>
                      </div>
                    </div> -->
                  </div>
                  <!-- end of icon cards pane -->
                </div>
                <!-- end of row -->
              </div>
              <!-- end of container -->
            </div>
            <!-- end of tab-pane -->
            <!-- end of tab -->

            <!-- Tab -->
            <div
              class="tab-pane fade"
              id="tab-2"
              role="tabpanel"
              aria-labelledby="tab-2"
            >
              <div class="container">
                <div class="row">
                  <!-- Image Pane -->
                  <div class="col-md-4">
                    <img
                      class="img-fluid"
                      src="images/2.png"
                      alt="alternative"
                    />
                  </div>
                  <!-- end of image pane -->

                  <!-- Text And Icon Cards Area -->
                  <div class="col-md-8">
                    <div class="text-area">
                      <h3>Soporte y asistencia técnica</h3>
                      <p>
                        Todos nuestros sistemas son respaldados con soporte
                        técnico especializado. Contamos con personal que está
                        disponible para apoyar a cualquier situación que se
                        presenten en tu empresa.
                      </p>
                    </div>
                    <!-- end of text-area -->

                    <div class="icon-cards-area">
                      <div class="card">
                        <div class="card-icon">
                          <i class="fas fa-toolbox"></i>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Soporte</h4>
                          <p>
                            Proporcionamos el soporte necesario a las
                            plataformas que ofrecemos, para garantizar a
                            nuestros clientes la disponibilidad de la
                            información.
                          </p>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-icon">
                          <i class="far fa-bookmark"></i>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Actualizaciones</h4>
                          <p>
                            Ofrecemos servicios de actualización y mejoras a
                            plataformas, apegandose a las necesidades de la
                            empresa.
                          </p>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-icon">
                          <i class="far fa-calendar-check"></i>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Consultoría</h4>
                          <p>
                            Ofrecemos soluciones a las diferentes necesidades
                            utilizando las últimas tecnologías, tenemos
                            capacidades para hacer diseños y desarrollos de
                            aplicaciones que mejoren los procesos de gestión y
                            administración de tu negocio.
                          </p>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-icon">
                          <i class="fas fa-user-shield"></i>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Seguridad</h4>
                          <p>
                            Como ROMA SOLUTIONS nuestro objetivo principal es
                            garantizar la seguridad de la información trabajando
                            constantemente con personal especializado en esta
                            area.
                          </p>
                        </div>
                      </div>
                    </div>
                    <!-- end of icon cards area -->
                  </div>
                  <!-- end of col-md-8 -->
                  <!-- end of text and icon cards area -->
                </div>
                <!-- end of row -->
              </div>
              <!-- end of container -->
            </div>
            <!-- end of tab-pane -->
            <!-- end of tab -->

            <!-- Tab -->
            <div
              class="tab-pane fade"
              id="tab-3"
              role="tabpanel"
              aria-labelledby="tab-3"
            >
              <div class="container">
                <div class="row">
                  <!-- Text And Icon Cards Area -->
                  <div class="col-md-8">
                    <div class="icon-cards-area"></div>
                    <!-- end of icon cards area -->

                    <div class="text-area">
                      <h3>Capacitaciones</h3>
                      <p>
                        Realizamos cursos de formación y capacitación para
                        usuarios finales en los que nuestro objetivo es iniciar
                        y formar al personal en las herramientas que ofrecemos,
                        para que puedan aplicar los conocimientos y mejorar los
                        procesos a traves de nuestras plataformas.
                      </p>
                    </div>
                    <!-- end of text-area -->
                  </div>
                  <!-- end of col-md-8 -->
                  <!-- end of text and icon cards area -->

                  <!-- Image Pane -->
                  <div class="col-md-4">
                    <img
                      class="img-fluid"
                      src="images/1.png"
                      alt="alternative"
                    />
                  </div>
                  <!-- end of image pane -->
                </div>
                <!-- end of row -->
              </div>
              <!-- end of container -->
            </div>
            <!-- end of tab-pane -->
            <!-- end of tab -->
          </div>
          <!-- end of tab-content -->
          <!-- end of tabs content -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of tabs -->
    <!-- end of features -->

    <!-- Video -->
    <div id="preview" class="basic-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>ROMA Solutions</h2>
            <div class="p-heading p-large">
              Conoce más de nosotros a través de un video
            </div>
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
        <div class="row">
          <div class="col-lg-12">
            <!-- Video Preview -->
            <div class="image-container">
              <div class="video-wrapper">
                <a
                  class="popup-youtube"
                  href="https://www.youtube.com/watch?v=fLCjQJCekTs"
                  data-effect="fadeIn"
                >
                  <img
                    class="img-fluid"
                    src="images/video-frame.jpg"
                    alt="alternative"
                  />
                  <span class="video-play-button">
                    <span></span>
                  </span>
                </a>
              </div>
              <!-- end of video-wrapper -->
            </div>
            <!-- end of image-container -->
            <!-- end of video preview -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of basic-1 -->
    <!-- end of video -->

    <!-- Moodle Implementation -->
    <div id="details" class="basic-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img
              class="img-fluid"
              src="images/moodle_implementacion.svg"
              alt="alternative"
            />
          </div>
          <!-- end of col -->
          <div class="col-lg-6">
            <div class="text-container">
              <h3>Implementación de Moodle</h3>
              <p>
                Moodle es una plataforma de aprendizaje diseñada para
                proporcionarle a educadores, administradores y estudiantes un
                sistema integrado único, robusto y seguro para crear ambientes
                de aprendizaje personalizados.
              </p>
              <a
                class="btn-solid-reg popup-with-move-anim"
                href="#details-lightbox-1"
                >Más información</a
              >
            </div>
            <!-- end of text-container -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of basic-2 -->
    <!-- end of Moodle Implementation -->

    <!-- Software a la medida -->
    <div class="basic-3">
      <div class="second">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="text-container">
                <h3>Software a la medida</h3>
                <p>
                  Desarrollamos e implementamos software a la medida como
                  aplicaciones web, apps móviles, y cualquier solución
                  informática moderna
                </p>
                <a
                  class="btn-solid-reg popup-with-move-anim"
                  href="#details-lightbox-2"
                  >Más información</a
                >
              </div>
              <!-- end of text-container -->
            </div>
            <!-- end of col -->
            <div class="col-lg-6">
              <img
                class="img-fluid"
                src="images/a_la_medida_1.svg"
                alt="alternative"
              />
            </div>
            <!-- end of col -->
          </div>
          <!-- end of row -->
        </div>
        <!-- end of container -->
      </div>
      <!-- end of second -->
    </div>
    <!-- end of basic-3 -->
    <!-- end of Software a la medida -->

    <!-- Details Lightboxes -->
    <!-- Lightbox Moodle -->
    <div
      id="details-lightbox-1"
      class="lightbox-basic zoom-anim-dialog mfp-hide"
    >
      <div class="row">
        <button title="Close (Esc)" type="button" class="mfp-close x-button">
          ×
        </button>
        <div class="col-lg-6 my-auto">
          <img
            class="img-fluid"
            src="images/moodle/moodle_modal.jpg"
            alt="alternative"
          />
        </div>
        <div class="col-lg-6">
          <h3>Moodle</h3>
          <hr />
          <p>
            Moodle es una plataforma de aprendizaje diseñada para proporcionarle
            a educadores, administradores y estudiantes un sistema integrado
            único, robusto y seguro para crear ambientes de aprendizaje
            personalizados.
          </p>
          <h4>Que ofrece Moodle</h4>
          <table>
            <tr>
              <td class="icon-cell"><i class="fa fa-check-square"></i></td>
              <td>
                Facilita la comunicación de los docentes y estudiantes fuera del
                horario de clases.
              </td>
            </tr>
            <tr>
              <td class="icon-cell"><i class="fas fa-check-square"></i></td>
              <td>Sistema escalable en cuanto a la cantidad de alumnos.</td>
            </tr>
            <tr>
              <td class="icon-cell"><i class="fas fa-check-square"></i></td>
              <td>
                Creación de cursos virtuales y entornos de aprendizaje
                virtuales.
              </td>
            </tr>
            <tr>
              <td class="icon-cell"><i class="fas fa-check-square"></i></td>
              <td>Complemento digital para cursos presenciales</td>
            </tr>
            <tr>
              <td class="icon-cell">
                <i class="fa fa-check-square"></i>
              </td>
              <td>
                Posibilidad de diversos métodos de evaluación y calificación.
              </td>
            </tr>
            <tr>
              <td class="icon-cell"><i class="fas fa-check-square"></i></td>
              <td>Accesibilidad y compatibilidad desde cualquier navegador</td>
            </tr>
          </table>
          <a class="btn-solid-reg" href="./moodle-details.php"
            >Más información</a
          >
          <a class="btn-outline-reg mfp-close as-button" href="#details">
            Atrás
          </a>
        </div>
      </div>
      <!-- end of row -->
    </div>
    <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox Software-->
    <div
      id="details-lightbox-2"
      class="lightbox-basic zoom-anim-dialog mfp-hide"
    >
      <div class="row">
        <button title="Close (Esc)" type="button" class="mfp-close x-button">
          ×
        </button>
        <div class="col-lg-6 my-auto">
          <img
            class="img-fluid"
            src="images/development.jpg"
            alt="alternative"
          />
        </div>
        <div class="col-lg-6">
          <h3>Software a la medida</h3>
          <hr />
          <p>
            Desarrollamos e implemtenamos software a la medida como aplicaciones
            web, apps móviles, y cualquier solución informática moderna
          </p>
          <h4>Somos expertos en...</h4>
          <p>Tecnologías en las que tenemos experiencia.</p>
          <table>
            <tr>
              <td class="icon-cell"><i class="fas fa-code"></i></td>
              <td>PHP, Python, Java</td>
            </tr>
            <tr>
              <td class="icon-cell"><i class="fas fa-code"></i></td>
              <td>CentOS, Ubuntu, Debian</td>
            </tr>
            <tr>
              <td class="icon-cell"><i class="fas fa-code"></i></td>
              <td>ASP.NET C#</td>
            </tr>
            <tr>
              <td class="icon-cell">
                <i class="fa fa-code"></i>
              </td>
              <td>JavaScript, ReactJS</td>
            </tr>
            <tr>
              <td class="icon-cell">
                <i class="fa fa-code"></i>
              </td>
              <td>HTML5, CSS3</td>
            </tr>
            <tr>
              <td class="icon-cell"><i class="fas fa-code"></i></td>
              <td>MySql, PostgreSQL, Oracle, SQL Sever</td>
            </tr>
          </table>
          <a class="btn-solid-reg" href="./software-a-la-medida.php"
            >Más información</a
          >
          <a class="btn-outline-reg mfp-close as-button" href="#details"
            >Atrás</a
          >
        </div>
      </div>
      <!-- end of row -->
    </div>
    <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of details lightboxes -->

    <!-- Team -->
    <div class="slider-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>TEAM</h2>
            <div class="p-heading p-large">
              Conoce nuestro equipo de trabajo
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <!-- Card Slider -->
            <div class="slider-container">
              <div class="swiper-container card-slider">
                <div class="swiper-wrapper">
                  <!-- Slide -->
                  <div class="swiper-slide">
                    <div class="card">
                      <img
                        class="card-image"
                        src="images/jeffry.jpeg"
                        alt="alternative"
                      />
                      <div class="card-body">
                        <p class="testimonial-author">
                          Ricardo Sifontes - Developer
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- end of swiper-slide -->
                  <!-- end of slide -->

                  <!-- Slide -->
                  <div class="swiper-slide">
                    <div class="card">
                      <img
                        class="card-image"
                        src="images/martinez.jpg"
                        alt="alternative"
                      />
                      <div class="card-body">
                        <p class="testimonial-author">
                          Ricardo Martínez - Data Bases
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- end of swiper-slide -->
                  <!-- end of slide -->

                  <!-- Slide -->
                  <div class="swiper-slide">
                    <div class="card">
                      <img
                        class="card-image"
                        src="images/peter.jpg"
                        alt="alternative"
                      />
                      <div class="card-body">
                        <p class="testimonial-author">
                          Pedro Pacheco - Developer
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- end of swiper-slide -->
                  <!-- end of slide -->

                  <!-- Slide -->
                  <div class="swiper-slide">
                    <div class="card">
                      <img
                        class="card-image"
                        src="images/benavides.jpg"
                        alt="alternative"
                      />
                      <div class="card-body">
                        <p class="testimonial-author">
                          Miguel Benavides - Infrastructure
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- end of swiper-slide -->
                  <!-- end of slide -->

                  <!-- Slide -->
                  <div class="swiper-slide">
                    <div class="card">
                      <img
                        class="card-image"
                        src="images/mbarillas.PNG"
                        alt="alternative"
                      />
                      <div class="card-body">
                        <p class="testimonial-author">
                          Mauricio Barillas - Data Bases
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- end of swiper-slide -->
                  <!-- end of slide -->

                  <!-- Slide -->
                  <div class="swiper-slide">
                    <div class="card">
                      <img
                        class="card-image"
                        src="images/tavo.jpg"
                        alt="alternative"
                      />
                      <div class="card-body">
                        <p class="testimonial-text"></p>
                        <p class="testimonial-author">
                          Gustavo Vasquez - Back End Developer
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- end of swiper-slide -->
                  <!-- end of slide -->
                </div>
                <!-- end of swiper-wrapper -->

                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- end of add arrows -->
              </div>
              <!-- end of swiper-container -->
            </div>
            <!-- end of slider-container -->
            <!-- end of card slider -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of slider-1 -->
    <!-- end of Team -->

    <!-- Contact -->
    <div id="contact" class="form">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>CONTACTO</h2>
            <ul class="list-unstyled li-space-lg">
              <li class="address">
                Recuerda que tu cotización de servicios es gratis... contactanos
                para más detalles
              </li>
            </ul>
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <table class="mx-auto">
              <tr>
                <td>
                  <img
                    width="100px"
                    height="100px"
                    src="./images/mail_logo.png"
                  />
                </td>
                <td>
                  <a
                    style="text-decoration: none;"
                    href="mailto:moodle.project.sv@gmail.com"
                  >
                    <h6 class="ml-4">
                      moodle.project.sv@gmail.com
                    </h6>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <img
                    width="100px"
                    height="100px"
                    src="./images/logo_fb.svg"
                  />
                </td>
                <td>
                  <a
                    style="text-decoration: none;"
                    href="https://facebook.com/romasolutionsSV"
                    target="_blank"
                  >
                    <h4 class="ml-4">ROMA Solutions SV</h4>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <img
                    width="100px"
                    height="100px"
                    src="./images/logo_insta.png"
                  />
                </td>
                <td>
                  <a
                    style="text-decoration: none;"
                    href="https://instagram.com/romasolutionssv"
                    target="_blank"
                  >
                    <h4 class="ml-4">@romasolutionssv</h4>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <img
                    width="100px"
                    height="100px"
                    src="./images/logo_wh.png"
                  />
                </td>
                <td>
                  <a
                    style="text-decoration: none;"
                    href="https://wa.me/50379479417"
                    target="_blank"
                  >
                    <h4 class="ml-4">+503 7947 9417</h4>
                  </a>
                </td>
              </tr>
            </table>
            <!-- Contact Form -->
            <!-- <form id="contactForm" data-toggle="validator" data-focus="false">
              <div class="form-group">
                <input
                  type="text"
                  class="form-control-input"
                  id="cname"
                  required
                />
                <label class="label-control" for="cname">Nombre</label>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <input
                  type="text"
                  class="form-control-input"
                  id="cphone"
                  required
                />
                <label class="label-control" for="cphone">Teléfono</label>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <input
                  type="email"
                  class="form-control-input"
                  id="cemail"
                  required
                />
                <label class="label-control" for="cemail">Email</label>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <textarea
                  class="form-control-textarea"
                  id="cmessage"
                  required
                ></textarea>
                <label class="label-control" for="cmessage">Mensaje</label>
                <div class="help-block with-errors"></div>
              </div>

              <div class="form-group">
                <button type="submit" class="form-control-submit-button">
                  ENVIAR
                </button>
              </div>
              <div class="form-message">
                <div id="cmsgSubmit" class="h3 text-center hidden"></div>
              </div>
            </form> -->
            <!-- end of contact form -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of form -->
    <!-- end of contact -->

    <?php
      include_once("./footer.php");
    ?>
