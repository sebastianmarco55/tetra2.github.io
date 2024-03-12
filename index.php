<!DOCTYPE html>
<html lang="ro">
  <head>
    <meta charset="utf-8" />
    <title>Tetra | Acasa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />

    <!-- Biblioteci Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="lib/fancybox/jquery.fancybox.min.css" />

    <!-- Stilizare Bootstrap personalizat -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Stiluri Șablon -->
    <link href="css/style.css" rel="stylesheet" />
  </head>
  <body>
  <?php require "header.php"; ?>
    <!-- Începutul caruselului -->
    <div class="container-fluid p-0 mb-5">
      <div
        id="header-carousel"
        class="carousel slide carousel-fade"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#header-carousel"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Diapozitivul 1"
          ></button>
          <button
            type="button"
            data-bs-target="#header-carousel"
            data-bs-slide-to="1"
            aria-label="Diapozitivul 2"
          ></button>
          <button
            type="button"
            data-bs-target="#header-carousel"
            data-bs-slide-to="2"
            aria-label="Diapozitivul 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              class="w-100"
              src="img/poza sectiunea acasa.jpeg"
              alt="Imagine"
            />
            <div
              class="carousel-caption d-flex flex-column align-items-center justify-content-center"
            >
              <div class="p-3" style="max-width: 900px">
                <h5 class="text-white text-uppercase animated bounceInDown">
                  Tetra
                </h5>
                <h1 class="display-1 text-white mb-md-4 animated zoomIn">
                  Siguranţa Dumneavoastră, Misiunea Noastră!
                </h1>
                <a
                  href="about.php"
                  class="buton-i btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"
                  >Despre Noi</a
                >
                <a
                  href="contact.php"
                  class="buton-i btn btn-secondary py-md-3 px-md-5 animated slideInRight"
                  >Contactează-ne</a
                >
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img
              class="w-100"
              src="img/poza sectiunea acasa 2.jpeg"
              alt="Imagine"
            />
            <div
              class="carousel-caption d-flex flex-column align-items-center justify-content-center"
            >
              <div class="p-3" style="max-width: 900px">
                <h5 class="text-white text-uppercase animated bounceInDown">
                  Tetra
                </h5>
                <h1 class="display-1 text-white mb-md-4 animated zoomIn">
                  Siguranţa Dumneavoastră, Misiunea Noastră!
                </h1>
                <a
                  href=""
                  class="buton-i btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"
                  >Despre Noi</a
                >
                <a
                  href=""
                  class="buton-i btn btn-secondary py-md-3 px-md-5 animated slideInRight"
                  >Contactează-ne</a
                >
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img
              class="w-100"
              src="img/poza sectiunea acasa 3.jpeg"
              alt="Imagine"
            />
            <div
              class="carousel-caption d-flex flex-column align-items-center justify-content-center"
            >
              <div class="p-3" style="max-width: 900px">
                <h5 class="text-white text-uppercase animated bounceInDown">
                  Tetra
                </h5>
                <h1 class="display-1 text-white mb-md-4 animated zoomIn">
                  Siguranţa Dumneavoastră, Misiunea Noastră!
                </h1>
                <a
                  href=""
                  class="buton-i btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"
                  >Despre Noi</a
                >
                <a
                  href=""
                  class="buton-i btn btn-secondary py-md-3 px-md-5 animated slideInRight"
                  >Contactează-ne</a
                >
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Următorul</span>
        </button>
      </div>
    </div>
    <!-- Sfârșitul caruselului -->

    <!-- Despre început -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
        <div class="row gx-5">
          <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px">
            <div class="position-relative h-100">
              <img
                class="position-absolute w-100 h-100 rounded wow zoomIn"
                data-wow-delay="0.3s"
                src="img/about.jpg"
                style="object-fit: cover"
              />
            </div>
          </div>
          <div class="col-lg-7">
            <div class="mb-4">
              <h5
                class="text-primary text-uppercase"
                style="letter-spacing: 5px"
              >
                Despre noi
              </h5>
              <h1 class="display-5 mb-0">
                Despre compania noastră de securitate din București
              </h1>
            </div>
            <h4 class="text-body fst-italic mb-4">
              Înființată în anul 2017, firma noastră se definește prin pasiune
              și dedicare pentru protejarea clienților săi. Misiunea noastră
              este să asigurăm securitatea și siguranța dumneavoastră.
            </h4>
            <p class="mb-4">
              Suntem mândri să ne identificăm ca o companie de securitate și
              pază 100% românească, care promovează valorile și profesionalismul
              autohton.
            </p>
            <div class="row g-3">
              <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                <div
                  class="bg-primary d-flex flex-column justify-content-center text-center border-bottom border-5 border-secondary rounded p-3"
                  style="height: 200px"
                >
                  <i class="fa fa-star fa-4x text-white mb-4"></i>
                  <h4 class="text-white mb-0">Experiență de 7 ani</h4>
                </div>
              </div>
              <div class="col-sm-6 wow zoomIn" data-wow-delay="0.9s">
                <div
                  class="bg-secondary d-flex flex-column justify-content-center text-center border-bottom border-5 border-primary rounded p-3"
                  style="height: 200px"
                >
                  <i class="fa fa-award fa-4x text-white mb-4"></i>
                  <h4 class="text-white mb-0">
                    Alegeți cu încredere siguranța!
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sfârșitul secțiunii Despre -->

    <!-- Servicii Început -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px">
          <h1 class="display-5 mb-0">
            Serviciile Noastre Excelente de Securitate
          </h1>
        </div>
        <div class="row g-5">
          <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
            <div
              class="service-item bg-light border-bottom border-5 border-primary rounded"
            >
              <div class="position-relative p-5">
                <img
                  class="flaticon-surveillance d-block display-1 fw-normal text-secondary mb-3"
                  src="img/icon/security.png"
                  alt=""
                  style="width: 30%"
                />

                <h5 class="text-primary mb-0">24/7</h5>
                <h3 class="mb-3">Paza si protectie</h3>
                <p>
                  Nu lăsaţi securitatea afacerii dumneavoastră la voia
                  întâmplării! Contactați-ne!
                </p>
                <a href="servicii/paza_si_protectie.php"
                  >Citește mai mult <i class="bi bi-arrow-right ms-2"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- Mai multe elemente de serviciu -->
          <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
            <div
              class="service-item bg-light border-bottom border-5 border-primary rounded"
            >
              <div class="position-relative p-5">
                <img
                  class="flaticon-surveillance d-block display-1 fw-normal text-secondary mb-3"
                  src="img/icon/guard .png"
                  alt=""
                  style="width: 30%"
                />

                <h5 class="text-primary mb-0">24/7</h5>
                <h3 class="mb-3">Monitorizare si interventie</h3>
                <p>
                  Contactați-ne pentru a afla cum să vă protejați afacerea și
                  proprietatea în mod profesionist și eficient.
                </p>
                <a href="servicii/monitorizare_si_interventie.php"
                  >Citește mai mult <i class="bi bi-arrow-right ms-2"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- Mai multe elemente de serviciu -->
          <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
            <div
              class="service-item bg-light border-bottom border-5 border-primary rounded"
            >
              <div class="position-relative p-5">
                <img
                  class="flaticon-surveillance d-block display-1 fw-normal text-secondary mb-3"
                  src="img/icon/cctv.png"
                  alt=""
                  style="width: 30%"
                />

                <h5 class="text-primary mb-0">24/7</h5>
                <h3 class="mb-3">Monitorizare video</h3>
                <p>
                  Contactați-ne pentru soluții profesioniste de monitorizare
                  video. <br />
                  Contactați-ne!
                </p>
                <a href="servicii/monitorizare_video.php"
                  >Citește mai mult <i class="bi bi-arrow-right ms-2"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- Mai multe elemente de serviciu -->
          <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
            <div
              class="service-item bg-light border-bottom border-5 border-primary rounded"
            >
              <div class="position-relative p-5">
                <img
                  class="flaticon-surveillance d-block display-1 fw-normal text-secondary mb-3"
                  src="img/icon/bank-truck.png"
                  alt=""
                  style="width: 30%"
                />

                <h5 class="text-primary mb-0">24/7</h5>
                <h3 class="mb-3">Transport Valori</h3>
                <p>
                  Vă asigurăm o călătorie sigură şi fără griji pentru bunurile
                  dumneavoastră de valoare!
                </p>
                <a href="servicii/transport_valori.php"
                  >Citește mai mult <i class="bi bi-arrow-right ms-2"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- Mai multe elemente de serviciu -->
          <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
            <div
              class="service-item bg-light border-bottom border-5 border-primary rounded"
            >
              <div class="position-relative p-5">
                <img
                  class="flaticon-surveillance d-block display-1 fw-normal text-secondary mb-3"
                  src="img/icon/instalare.png"
                  alt=""
                  style="width: 30%"
                />

                <h5 class="text-primary mb-0">24/7</h5>
                <h3 class="mb-3">Instalare sisteme</h3>
                <p>
                  Soluţiile noastre de securitate se adaptează perfect
                  cerinţelor fiecărui client.
                </p>
                <a href="servicii/instalare_sisteme.php"
                  >Citește mai mult <i class="bi bi-arrow-right ms-2"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- Mai multe elemente de serviciu -->
          <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
            <div
              class="service-item bg-light border-bottom border-5 border-primary rounded"
            >
              <div class="position-relative p-5">
                <img
                  class="flaticon-surveillance d-block display-1 fw-normal text-secondary mb-3"
                  src="img/icon/consultation.png"
                  alt=""
                  style="width: 30%"
                />

                <h5 class="text-primary mb-0">24/7</h5>
                <h3 class="mb-3">Consultanță</h3>
                <p>
                  Consultanţa în securitate are ca rol principal identificarea
                  nevoilor clienţilor şi alegerea unei soluţii adecvate
                </p>
                <a href="servicii/consultanta_in_securitate.php"
                  >Citește mai mult <i class="bi bi-arrow-right ms-2"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- Mai multe elemente de serviciu -->
          <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
            <div
              class="service-item bg-light border-bottom border-5 border-primary rounded"
            >
              <div class="position-relative p-5">
                <img
                  class="flaticon-surveillance d-block display-1 fw-normal text-secondary mb-3"
                  src="img/icon/interventie.png"
                  alt=""
                  style="width: 30%"
                />

                <h5 class="text-primary mb-0">24/7</h5>
                <h3 class="mb-3">Securitate evenimente</h3>
                <p>
                  Securitate pentru evenimente, noi vă putem oferi siguranţa şi
                  liniştea unor astfel de experienţe.
                </p>
                <a href="servicii/securitate_evenimente.php"
                  >Citește mai mult <i class="bi bi-arrow-right ms-2"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- Mai multe elemente de serviciu -->
          <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
            <div
              class="service-item bg-light border-bottom border-5 border-primary rounded"
            >
              <div class="position-relative p-5">
                <img
                  class="flaticon-surveillance d-block display-1 fw-normal text-secondary mb-3"
                  src="img/icon/education.png"
                  alt=""
                  style="width: 30%"
                />

                <h5 class="text-primary mb-0">24/7</h5>
                <h3 class="mb-3">Cursuri de calificare</h3>
                <p>
                  Cursuri de calificare pentru personalul de pază - Obține
                  calificarea necesară și sprijin în susținerea examenului de
                  calificare profesională.
                </p>
                <a href="servicii/cursuri_de_calificare.php"
                  >Citește mai mult <i class="bi bi-arrow-right ms-2"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- Mai multe elemente de serviciu -->
          <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
            <div
              class="service-item bg-light border-bottom border-5 border-primary rounded"
            >
              <div class="position-relative p-5">
                <img
                  class="flaticon-surveillance d-block display-1 fw-normal text-secondary mb-3"
                  src="img/icon/risk.png"
                  alt=""
                  style="width: 30%"
                />

                <h5 class="text-primary mb-0">24/7</h5>
                <h3 class="mb-3">Evaluare de risc</h3>
                <p>
                  Evaluarea riscului este esențială în gestionarea eficientă a
                  pericolelor în diverse domenii.
                </p>
                <a href="servicii/evaluare_de_risc.php"
                  >Citește mai mult <i class="bi bi-arrow-right ms-2"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Ofertă Început -->
    <div
      class="container-fluid bg-offer my-5 py-5 wow zoomIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row gx-5 justify-content-center">
          <div class="col-lg-7 text-center">
            <div class="text-center mx-auto mb-4" style="max-width: 600px">
              <h5 class="text-white text-uppercase" style="letter-spacing: 5px">
                Tetra
              </h5>
              <h1 class="display-5 text-white">
                Nu lăsaţi securitatea afacerii dumneavoastră la voia
                întâmplării!
              </h1>
            </div>
            <p class="text-white mb-4">
              Soluţiile noastre de securitate se adaptează perfect cerinţelor
              fiecărui client.
            </p>
            <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3"
              >Despre Noi</a
            >
            <a href="contact.php" class="btn btn-secondary py-md-3 px-md-5"
              >Contactați-ne!</a
            >
          </div>
        </div>
      </div>
    </div>
    <?php require "footer.php"; ?>

    <!-- Back to Top -->
    <a
      href="#"
      class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- Biblioteci JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="lib/fancybox/jquery.fancybox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/fancybox/jquery.fancybox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
