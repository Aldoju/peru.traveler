<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Peru Traveler</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/logo.jpg"  width="210px" height="200px"    alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Características</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Funcionalidades</a></li>
                        {{-- <li class="nav-item"><a class="nav-link" href="#about">Pasos</a></li> --}}
                        <li class="nav-item"><a class="nav-link" href="#team">Equipo</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Bienvenido a Peru Traveler</div>
                <div class="masthead-heading text-uppercase">El placer de viajar</div>
                <div class="masthead-subheading">La app que planea tus viajes</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Dime más</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Características</h2>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-square fa-stack-2x text-primary"></i>
                            <i class="fas fa-check fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Completo</h4>
                        <p class="text-muted">Todo lo que necesitas para viajar en un solo lugar</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fas fa-pencil-alt fa-8x text-warning">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Sencillo</h4>
                        <p class="text-muted">Interfaz amigable e interactiva</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Seguro</h4>
                        <p class="text-muted">Tu seguridad es nuestra prioridad, Contamos con técnicas de autenticación y encriptación de tus datos</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- video-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Video</h2>
                </div>
                <div class="row text-center">
                    <iframe width="280" height="500" src="https://www.youtube.com/embed/OpE1dc_Fw7o?si=k-XFlVSX7IP-H9aq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Funcionalidades</h2>
                    <!--<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="https://elcomercio.pe/resizer/wrN3iZy0uiOjkLjAFBi8Xtpn0_w=/980x0/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/4QNBZB6RLRFLBCKWXBH2SAP2W4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Información de destinos</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="https://images.otstatic.com/prod/26094419/0/huge.jpg" style="width: 100%; height: 238px;" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Reserva de restaurantes</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="https://i0.wp.com/aldiaargentina.microjuris.com/wp-content/uploads/2020/03/hotel.jpg?resize=925%2C615&ssl=1" style="width: 100%; height: 238px;" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Reserva de hoteles</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-7 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="https://robertocavada.com/wp-content/uploads/2022/07/dia-soleado.jpg" style="width: 100%; height: 238px;" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Información del clima</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-7 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="https://wapa.cronosmedia.glr.pe/original/2021/10/04/615ab9ac0cadeb72e161490b.jpg" style="width: 100%; height: 238px;" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Información de transporte</div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </section>

        
        <!-- Team-->
        <section class="page-section bg-light" id="team" >
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Nuestro Equipo</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/emerson.jpg" alt="..." />
                            <h4>Emerson</h4>
                            <p class="text-muted">Diseñador</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                            
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/aldo.jpg" alt="..." />
                            <h4>Aldo Carranza Paredes</h4>
                            <p class="text-muted">Desarrollador</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/diego.jpg" alt="..." />
                            <h4>Diego</h4>
                            <p class="text-muted">Comunicador social</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/nataly.jpg" alt="..." />
                            <h4>Nataly</h4>
                            <p class="text-muted">Gestora turística</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="https://iconape.com/wp-content/files/uf/254282/svg/254282.svg" alt="..." aria-label="Ministerio de Cultura" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8GHRtqIH-BkTc1vDVIJu7jtmEsutt8atyVg&s" alt="..." aria-label="Google Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="https://static.mercadonegro.pe/wp-content/uploads/2018/09/22191135/antes-y-despues-uber-portal.png" alt="..." style="width: 50%; height: 20%;"  aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbzj5i4FKTJ29H631mOXUnlRPeCqB2HXCkDg&s" alt="..."  style="width: 50%; height: 20%;" aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact" style="background-image: url('https://ecommerceapi.assistcard.com/Api/ImagesHandler/GetImage?freeImageCode=cus-02'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 1500px; height: 600px">
            <div class="container align-items-center justify-content-center">
                <div class="row align-items-center justify-content-center mb-5 text-white center-content">
                    <div class="col-md-6">
                        <h3>Contact Us</h3>
                        <p>Si tienes alguna pregunta o necesitas más información, por favor contáctanos al siguiente correo:</p>
                        <ul class="list-unstyled">
                            <li><strong>Name:</strong> Diego Mino</li>
                            <li><strong>Email:</strong> atencion_cliente.@perutraveler.com</li>
                            <li><strong>Phone:</strong> (01) 456-7890</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Horario de atención:</strong></p>
                        <ul class="list-unstyled">
                            <li>Lunes - Viernes: 9:00 AM - 5:00 PM</li>
                            <li>Sabados: 10:00 AM - 2:00 PM</li>
                        </ul>
                    </div>
                </div>
                    
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/AppPeruTraveler" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Información de destinos</h2>
                                    <p class="item-intro text-muted">¿No sabes que lugar visitar?</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img class="img-fluid d-block mx-auto" src="https://www.viajes-carrefour.com/blog/wp-content/uploads/2018/07/viajero-perdida-equipaje.jpg" alt="..." />
                                        </div>
                                        <div class="col-md-6">
                                            <img class="img-fluid d-block mx-auto" src="https://www.togetherprice.com/es/static/85ae2f7da0f13cc1982954090ca52d55/f2cbb/70460d3f-8cef-459c-bcef-2ce04f4d6834.jpg" style="width: 400px; height: 222px" alt="..." />
                                        </div>
                                    </div>
                                    <p>Con PeruTraveler tendrás información importante de costumbres de los lugares que puedes visitar y prepararte para tu aventura</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Reserva de Restaurantes</h2>
                                    <p class="item-intro text-muted">¿No sabes en qué lugar comer y qué comer?</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img class="img-fluid d-block mx-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRneeWR5CKAXsJ0hHyqRZ2bM-8zh1YZm7iwIw&s" alt="..." />
                                        </div>
                                        <div class="col-md-6">
                                            <img class="img-fluid d-block mx-auto" src="https://assets-global.website-files.com/5f4f67c5950db17954dd4f52/5f5b7c7e0efe9d21f44ebb82_05_APPS_RESTAURANTES.webp" style="width: 400px; height: 210px" alt="..." />
                                        </div>
                                    </div>
                                    <p>PeruTraveler te da información de restaurantes, sus calificaciones y los platos tipicos que sirve. Además puedes hacer reserva de los restaurantes desde el aplicativo de manera fácil</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Reserva de hoteles</h2>
                                    <p class="item-intro text-muted">¿Llegaste a tu destino y no sabes en dónde hospedarte?</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img class="img-fluid d-block mx-auto" src="https://www.eluniversal.com.mx/resizer/Pjvk8Ba3TyBcF3wflJ5CLGGrCnU=/1100x666/cloudfront-us-east-1.images.arcpublishing.com/eluniversal/U4FVZ7KGFBEQ3I3IG5NL7A3EJM.jpg" alt="..." />
                                        </div>
                                        <div class="col-md-6">
                                            <img class="img-fluid d-block mx-auto" src="https://patriciavela.com/wp-content/uploads/2022/10/Fotos-disen%CC%83os-para-web-5-1024x1024.png" alt="..." style="width: 400px; height: 239px"/>
                                        </div>
                                    </div>
                                    <p>PeruTraveler te brinda información de los hoteles, precios de paquetes de reservas y calificación para que realices tus reservas con anticipación y presupuesto planificado</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Información de Clima</h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img class="img-fluid d-block mx-auto" src="https://imgmedia.larepublica.pe/640x371/larepublica/original/2023/09/08/64fb8bf999a9d7048323432a.webp" style="height: 220px" alt="..." />
                                        </div>
                                        <div class="col-md-6">
                                            <img class="img-fluid d-block mx-auto" src="https://noticiassalamanca.com/wp-content/uploads/2023/04/ritual-gente-feliz-1-kR7H-1200x630@abc-331x219.jpg" style="height: 145px alt="..." />
                                        </div>
                                    </div>
                                    <p>Peru Traveler te da información del clima y asi puedas prepararte para elegir tu destino y lo que venga en tu próxima aventura</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Información de transporte</h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img class="img-fluid d-block mx-auto" src="https://us.123rf.com/450wm/photosvit/photosvit2012/photosvit201202172/160655012-parada-autom%C3%A1tica-de-viajes-de-viajeros-tur%C3%ADsticos-problemas-de-transporte-elija-un-lugar-donde-el.jpg" alt="..." />
                                        </div>
                                        <div class="col-md-6">
                                            <img class="img-fluid d-block mx-auto" src="https://grupoverona.pe/wp-content/uploads/2021/05/050505_734411.jpg"  style="height: 260px" alt="..." />
                                        </div>
                                    </div>
                                    <p>Peru Traveler te da información de las empresas de taxi disponibles en tu destino turístico, viaja seguro e informado</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Window
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Photography
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

