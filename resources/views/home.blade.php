<x-guest-layout>
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome to our Marketing Agency</div>
            <div class="masthead-heading text-uppercase">The best way to know the future its to create our own.</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell me more</a>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Services</h2>
                {{-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> --}}
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Brand Guide & Logo</h4>
                    <p class="text-muted">We develop or update your company's visual identity through meticulous design work. Transforming the way you present your company to your customers.</p>
                    <a class="btn btn-primary btn-xl text-uppercase" href="{{ url('brand') }}#brand">Tell me more</a>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Responsive Website</h4>
                    <p class="text-muted">Specialized in Creating websites, blogs, virtual stores, according to the W3C Web Standards, customized layouts and optimized for search engines (SEO).</p>
                    <a class="btn btn-primary btn-xl text-uppercase" href="{{ url('webdesign') }}#webdesign">Tell me more</a>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Social Media</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    <a class="btn btn-primary btn-xl text-uppercase" href="{{ url('social_media') }}#social_media">Tell me more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Portfolio</h2>
                {{-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> --}}
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#mercado_ativo">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset('img/portfolio/webdesign/mercado_ativo/mercado_ativo_small.jpg')}}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Mercado Ativo</div>
                            <div class="portfolio-caption-subheading text-muted">Website</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#coffee_beer">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset('img/portfolio/logos/coffee_beer/coffee_and_beer-small.jpg')}}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Coffee & Beer</div>
                            <div class="portfolio-caption-subheading text-muted">Brand & Logo</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#otica_redivo">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset('img/portfolio/logos/otica_redivo/oticaredivo-small.jpg')}}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Ótica Redivo</div>
                            <div class="portfolio-caption-subheading text-muted">Brand & Logo</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#criatiano_de_sa">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset('img/portfolio/logos/cristiano_de_sa/cristiano_de_sa_small.jpg')}}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Cristiano de Sá</div>
                            <div class="portfolio-caption-subheading text-muted">Brand & Logo</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4 ">
                    <!-- Portfolio item 4-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#mao_amiga">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset('img/portfolio/logos/mao_amiga/mao_amiga-small.jpg')}}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Mão Amiga</div>
                            <div class="portfolio-caption-subheading text-muted">Brand & Logo</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4 ">
                    <!-- Portfolio item 5-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#o_catarina">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset('img/portfolio/logos/o_catarina/o_catarina-small.jpg')}}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">O Catarina</div>
                            <div class="portfolio-caption-subheading text-muted">Brand & Logo</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 md-4">
                    <!-- Portfolio item 6-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#inkjet">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset('img/portfolio/logos/inkjet/inkjet-small.jpg')}}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Inkjet</div>
                            <div class="portfolio-caption-subheading text-muted">Brand & Logo</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 md-4">
                    <!-- Portfolio item 7-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#bento_love">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset('img/portfolio/social_media/bento_love/bentoloveemaxwell-small.jpg')}}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Bento Love</div>
                            <div class="portfolio-caption-subheading text-muted">Social Media</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 md-4">
                    <!-- Portfolio item 8-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#pense_sempre">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset('img/portfolio/social_media/pense_sempre/pense-sempre-small.jpg')}}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Pense Sempre</div>
                            <div class="portfolio-caption-subheading text-muted">Social Media</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 md-4">
                    <!-- Portfolio item 9-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#chico_pizzas">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset('img/portfolio/webdesign/chico_pizzas/chico_pizzas_small.jpg')}}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Chico Pizzas</div>
                            <div class="portfolio-caption-subheading text-muted">Website</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 md-4">
                    <!-- Portfolio item 9-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#cupcakes">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset('img/portfolio/webdesign/cupcakes/cupcakes_small.jpg')}}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Cupcakes da Paula</div>
                            <div class="portfolio-caption-subheading text-muted">Website</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About</h2>
                <h3 class="section-subheading text-muted">Novaz – Developing the future of the web was founded in 2003 . It focuses its field of activity developing Brands / Logo, Websites and Social Media. It serves small and medium-sized companies, seeking information to solve the communication needs of each of its customers. It accompanies the planning, design and production phases, offering a product that matches the quality of the project initially presented. We stand out for the creativity and love used in each project.</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('img/about/1.jpg')}}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">Experience</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Novaz has professionals with nineteen years of experience. Specialized in their areas of expertise. People who go above and beyond. They just love what they do.
                        </p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('img/about/2.jpg')}}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">Innovation</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Novaz uses the latest technologies and trends in its area in its products and services. always worrying about delivering the best solution to your company's advertising problems.</p></div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('img/about/3.jpg')}}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">Efficiency</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Advertising is much more than images and texts. it is necessary to know how to differentiate and identify the best solution for a given problem. This is Design, this is what Novaz does.</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('img/about/4.jpg')}}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            
                            <h4 class="subheading">Commitment</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Novaz is proud of its great commitment to the quality of service and meeting its deadlines.</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            <a href="#contact" style="color:white; text-decoration:none;">
                                Ask for 
                                <br />
                                a
                                <br />
                                quote!
                            </a>
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Team-->
    {{-- <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle"  src="{{asset('img/team/1.jpg')}}" alt="..." />
                        <h4>Parveen Anand</h4>
                        <p class="text-muted">Lead Designer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{asset('img/team/3.jpg')}}" alt="..." />
                        <h4>Diana Petersen</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{asset('img/team/3.jpg')}}" alt="..." />
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Lead Developer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
            </div>
        </div>
    </section> --}}
    <!-- Clients-->
    <div class="py-5">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Clients</h2>
                {{-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> --}}
            </div>
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"  src="{{asset('img/clients/coffee_and_beer.png')}}" alt="..." /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"  src="{{asset('img/clients/cupcakes-da-paula.png')}}" alt="..." /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"  src="{{asset('img/clients/hg_solucoes_financeiras2.png')}}" alt="..." /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"  src="{{asset('img/clients/jr_uniformes.png')}}" alt="..." /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"  src="{{asset('img/clients/otica_redivo.png')}}" alt="..." /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"  src="{{asset('img/clients/wd_wall_divisorias.png')}}" alt="..." /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                {{-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> --}}
            </div>
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                    </div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, sign up at
                        <br />
                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
            </form>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; 2022 Novaz - Developing the future of the web</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    
                    <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/novazwebdesign" target="blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/novazmarketing/" target="blank"><i class="fab fa-instagram"></i></i></a>
                </div>
                {{-- <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div> --}}
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Portfolio item 0 modal popup-->
    <div class="portfolio-modal modal fade" id="mercado_ativo" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Mercado Ativo</h2>
                                <p class="item-intro text-muted">Website for a Print Agency on Marabá-Brazil.</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/webdesign/mercado_ativo/mercado_ativo_big.jpg')}}" alt="..." />
                                <p>Website for a Print Agency on Marabá-Brazil.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Mercado ativo
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Website
                                    </li>
                                    <li>
                                        <a href="https://www.mercadoativo.com" target="_blank"></a>
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="coffee_beer" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Coffee & Beer</h2>
                                <p class="item-intro text-muted">Brand for a restaurant/coffee place.</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/coffee_beer/coffee_and_beer-big.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/coffee_beer/cofeeandbeer_pages-to-jpg-0001.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/coffee_beer/cofeeandbeer_pages-to-jpg-0002.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/coffee_beer/cofeeandbeer_pages-to-jpg-0003.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/coffee_beer/cofeeandbeer_pages-to-jpg-0004.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/coffee_beer/cofeeandbeer_pages-to-jpg-0005.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/coffee_beer/cofeeandbeer_pages-to-jpg-0006.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/coffee_beer/cofeeandbeer_pages-to-jpg-0007.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/coffee_beer/cofeeandbeer_pages-to-jpg-0008.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/coffee_beer/cofeeandbeer_pages-to-jpg-0009.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/coffee_beer/cofeeandbeer_pages-to-jpg-0010.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/coffee_beer/cofeeandbeer_pages-to-jpg-0011.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/coffee_beer/cofeeandbeer_pages-to-jpg-0012.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/coffee_beer/cofeeandbeer_pages-to-jpg-0013.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/coffee_beer/cofeeandbeer_pages-to-jpg-0014.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/coffee_beer/cofeeandbeer_pages-to-jpg-0015.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/coffee_beer/cofeeandbeer_pages-to-jpg-0016.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/coffee_beer/cofeeandbeer_pages-to-jpg-0017.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/coffee_beer/cofeeandbeer_pages-to-jpg-0018.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/coffee_beer/cofeeandbeer_pages-to-jpg-0019.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/coffee_beer/cofeeandbeer_pages-to-jpg-0020.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/coffee_beer/cofeeandbeer_pages-to-jpg-0021.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/coffee_beer/cofeeandbeer_pages-to-jpg-0022.jpg')}}" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Coffee & Beer
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Brand & Logo
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="otica_redivo" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('img/close-icon.svg') }}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Ótica Redivo</h2>
                                <p class="item-intro text-muted">Brand & Logo to a optical store.</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/otica_redivo/oticaredivo-big.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/otica_redivo/oticaredivo_pages-to-jpg-0001.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/otica_redivo/oticaredivo_pages-to-jpg-0002.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/otica_redivo/oticaredivo_pages-to-jpg-0003.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/otica_redivo/oticaredivo_pages-to-jpg-0004.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/otica_redivo/oticaredivo_pages-to-jpg-0005.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/otica_redivo/oticaredivo_pages-to-jpg-0006.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/otica_redivo/oticaredivo_pages-to-jpg-0007.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/otica_redivo/oticaredivo_pages-to-jpg-0008.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/otica_redivo/oticaredivo_pages-to-jpg-0009.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/otica_redivo/oticaredivo_pages-to-jpg-0010.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/otica_redivo/oticaredivo_pages-to-jpg-0011.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/otica_redivo/oticaredivo_pages-to-jpg-0012.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/otica_redivo/oticaredivo_pages-to-jpg-0013.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/otica_redivo/oticaredivo_pages-to-jpg-0014.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/otica_redivo/oticaredivo_pages-to-jpg-0015.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/otica_redivo/oticaredivo_pages-to-jpg-0016.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/otica_redivo/oticaredivo_pages-to-jpg-0017.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/otica_redivo/oticaredivo_pages-to-jpg-0018.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/otica_redivo/oticaredivo_pages-to-jpg-0019.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/otica_redivo/oticaredivo_pages-to-jpg-0020.jpg')}}" alt="..." />
                                <p>Brand & Logo to a optical store.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Ótica Redivo
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Brand & Logo
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="criatiano_de_sa" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Cristiano de Sá</h2>
                                <p class="item-intro text-muted">Evengalist from assembly of god .</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/cristiano_de_sa/cristiano_de_sa_big.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/cristiano_de_sa/cristianodesa_pages-to-jpg-0001.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/cristiano_de_sa/cristianodesa_pages-to-jpg-0002.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/cristiano_de_sa/cristianodesa_pages-to-jpg-0003.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/cristiano_de_sa/cristianodesa_pages-to-jpg-0004.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/cristiano_de_sa/cristianodesa_pages-to-jpg-0005.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/cristiano_de_sa/cristianodesa_pages-to-jpg-0006.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/cristiano_de_sa/cristianodesa_pages-to-jpg-0007.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/cristiano_de_sa/cristianodesa_pages-to-jpg-0008.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/cristiano_de_sa/cristianodesa_pages-to-jpg-0009.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/cristiano_de_sa/cristianodesa_pages-to-jpg-0010.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/cristiano_de_sa/cristianodesa_pages-to-jpg-0011.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/cristiano_de_sa/cristianodesa_pages-to-jpg-0012.jpg')}}" alt="..." />
                                <p>Evengalist from assembly of god </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Finish
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Identity
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 4 modal popup-->
    <div class="portfolio-modal modal fade" id="mao_amiga" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('/img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Mão Amiga</h2>
                                <p class="item-intro text-muted">Brand developed to a Ong that takes care of people with addicions on Brazil.</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/mao_amiga/mao_amiga-big.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/mao_amiga/maoamiga_pages-to-jpg-0001.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/mao_amiga/maoamiga_pages-to-jpg-0002.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/mao_amiga/maoamiga_pages-to-jpg-0003.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/mao_amiga/maoamiga_pages-to-jpg-0004.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/mao_amiga/maoamiga_pages-to-jpg-0005.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/mao_amiga/maoamiga_pages-to-jpg-0006.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/mao_amiga/maoamiga_pages-to-jpg-0007.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/mao_amiga/maoamiga_pages-to-jpg-0008.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/mao_amiga/maoamiga_pages-to-jpg-0009.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/mao_amiga/maoamiga_pages-to-jpg-0010.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/mao_amiga/maoamiga_pages-to-jpg-0011.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/mao_amiga/maoamiga_pages-to-jpg-0012.jpg')}}" alt="..." />
                                <p>The concept put together 2 symbols the "hand of god" and the "hand needing help" with together form a flame that its a symbol of the holy ghost.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Mão Amiga
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Brand & Logo
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
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
    <div class="portfolio-modal modal fade" id="o_catarina" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">O Catarina</h2>
                                <p class="item-intro text-muted">Brand & Logo developed to a newspaper.</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/o_catarina/o_catarina-big.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/o_catarina/ocatarina_page-0001.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/o_catarina/ocatarina_page-0002.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/o_catarina/ocatarina_page-0003.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/o_catarina/ocatarina_page-0004.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/o_catarina/ocatarina_page-0005.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/o_catarina/ocatarina_page-0006.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/o_catarina/ocatarina_page-0007.jpg')}}" alt="..." />
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/o_catarina/ocatarina_page-0008.jpg')}}" alt="..." />
                                <p>Brand & Logo developed to a newspaper from Santa Catarina - Brazil.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        O Catatina
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Brand & Logo
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 6 modal popup-->
    <div class="portfolio-modal modal fade" id="inkjet" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('/img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Inkjet</h2>
                                <p class="item-intro text-muted">Brand Developed to a Print Agency</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/logos/inkjet/inkjet-big.jpg')}}" alt="..." />
                                <p></p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Inkjet
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Brand & Logo
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 7 modal popup-->
    <div class="portfolio-modal modal fade" id="bento_love" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('/img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">bento_love</h2>
                                <p class="item-intro text-muted">Photografy manipulation for Social Media to a country music singer</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/social_media/bento_love/bentoloveemaxwell-big.jpg')}}" alt="..." />
                                <p></p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Bento Love
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Social Media
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 8 modal popup-->
    <div class="portfolio-modal modal fade" id="chico_pizzas" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('/img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">chico_pizzas</h2>
                                <p class="item-intro text-muted">Photografy manipulation for Social Media to a country music singer</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/webdesign/chico_pizzas/chico_pizzas_big.jpg')}}" alt="..." />
                                <p></p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Chico Pizzas
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Website
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 9 modal popup-->
    <div class="portfolio-modal modal fade" id="cupcakes" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('/img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">cupcakes</h2>
                                <p class="item-intro text-muted">Photografy manipulation for Social Media to a country music singer</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/webdesign/cupcakes/cupcakes_big.jpg')}}" alt="..." />
                                <p></p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Bento Love
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Social Media
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-guest-layout>