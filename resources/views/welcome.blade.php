@extends('layouts.header')
@section('contenu')

        {{--start content--}}
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">

          <div class="container-fluid" data-aos="zoom-out" data-aos-delay="100">
            <div class="row justify-content-center">
              <div class="col-xl-10">
                <div class="row">
                  <div class="col-xl-5">
                    <h1>Suite CRM et ERP Cloud 100% libre</h1>
                    <h2>Gérer votre entreprise, du marketing à la comptabilité</h2>
                    <a href="{{ route('login') }}" class="btn-get-started scrollto" target="_blank">Je teste gratuirement</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </section><!-- End Hero -->

        <main id="main">

          <!-- ======= Partenaire Section ======= -->
          <section id="clients" class="clients">
            <div class="container-fluid" data-aos="zoom-in">
              <div class="row justify-content-center">
                <div class="col-xl-10">
                  <div class="owl-carousel clients-carousel">
                    <img src="assets/img/clients/webmay.jpg" alt="">
                    <img src="assets/img/clients/dg.jpg" alt="">
                    <img src="assets/img/clients/erp.jpg" alt="">
                    <img src="assets/img/clients/dolibar.jpg" alt="">
                    <img src="assets/img/clients/webmay.jpg" alt="">
                    <img src="assets/img/clients/dg.jpg" alt="">
                    <img src="assets/img/clients/erp.jpg" alt="">
                    <img src="assets/img/clients/dolibar.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </section><!-- End Partenaire Section -->

          <!-- ======= Apropos Section ======= -->
          <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

              <div class="row no-gutters">
                <div class="content col-xl-5 d-flex align-items-stretch">
                  <div class="content">
                    <h3>Gérer votre entreprise, du marketing à la comptabilité</h3>
                    <p>
                      Le logiciel Open Source Dolibarr </br>
                      Tous les services du SaaS dans un Cloud souverain </br>
                      La liberté d'accès/modification du PaaS

                    </p>
                    <a href="{{ route('login') }}" class="about-btn" target="_blank"><span>Je teste gratuirement</span> <i class="bx bx-chevron-right"></i></a>
                  </div>
                </div>
                <div class="col-xl-7 d-flex align-items-stretch">
                  <div class="icon-boxes d-flex flex-column justify-content-center">
                    <div class="row">
                      <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-receipt"></i>
                        <h4>Un Progiciel de Gestion Intégré complet</h4>
                        <p>Adaptable à toute activité (de l'Auto-entrepreneur à la grande entreprise), activez les fonctionnalités dont vous avez besoin, par exemple:
                          CRM,
                          Devis,
                          Facturation,
                          Stock,
                          Fabrication,
                          Point de vente (POS),
                          Gestion de projet,
                          RH,
                          </p>
                      </div>
                      <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Simple et accessible</h4>
                        <p>Un logiciel conçu pour une prise en main immédiate, sans formation. Rapide et optimisé pour l'accès multiposte, mobile et multi-utilisateur.</p>
                      </div>
                      <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-images"></i>
                        <h4>Une Solution souveraine et pérenne</h4>
                        <p>Développé en Open Source, hébergé en France, personnalisable, extensible et interopérable, vous gardez le contrôle de vos données. Vous pouvez basculer en auto-hébergement à tout moment et bénéficier de la portabilité chez tout autre hébergeur.</p>
                      </div>
                      <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-shield"></i>
                        <h4>Une solution Eco-responsable
                        </h4>
                        <p>La conception du logiciel en Open Source rend possible la recherche et l'intégration de nombreuses optimisations permettant à la solution de consommer moins de mémoire, d'espace disque, d'électricité et de traitement qu'une autre solution à fonctionnalités équivalentes.</p>
                      </div>
                    </div>
                  </div><!-- End .content-->
                </div>
              </div>

            </div>
          </section><!-- End Apropos Section -->

          <!-- ======= Tabs Section ======= -->
          <section id="tabs" class="tabs">
            <div class="container" data-aos="fade-up">

              <ul class="nav nav-tabs row d-flex">
                <li class="nav-item col-3">
                  <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                    <i class="ri-gps-line"></i>
                    <h4 class="d-none d-lg-block">CRM & Ventes...</h4>
                  </a>
                </li>
                <li class="nav-item col-3">
                  <a class="nav-link" data-toggle="tab" href="#tab-2">
                    <i class="ri-body-scan-line"></i>
                    <h4 class="d-none d-lg-block">Ressources Humaines</h4>
                  </a>
                </li>
                <li class="nav-item col-3">
                  <a class="nav-link" data-toggle="tab" href="#tab-3">
                    <i class="ri-sun-line"></i>
                    <h4 class="d-none d-lg-block">Produit & Stock & Marketing</h4>
                  </a>
                </li>
                <li class="nav-item col-3">
                  <a class="nav-link" data-toggle="tab" href="#tab-4">
                    <i class="ri-store-line"></i>
                    <h4 class="d-none d-lg-block">Finance & Facturation & Productivité </h4>
                  </a>
                </li>
              </ul>

              <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                  <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                      <h3>Vous êtes une société (TPE, PME), libéral, micro-entreprise ou association</h3>
                      <p class="font-italic">
                        Le CRM vous aide à gérer vos clients de manière efficace et personnalisée. Suivez vos interactions, optimisez votre relation client, et boostez vos ventes grâce à des outils performants. Simplifiez votre quotidien et restez connecté avec vos clients, où que vous soyez
                      </p>
                      <ul>
                        <li><i class="ri-check-double-line"></i> Prospects / Clients.</li>
                        <li><i class="ri-check-double-line"></i> Opportunités.</li>
                        <li><i class="ri-check-double-line"></i> Devis.</li>
                        <li><i class="ri-check-double-line"></i> Commandes.</li>
                        <li><i class="ri-check-double-line"></i> Contrats / Abonnements.</li>
                        <li><i class="ri-check-double-line"></i> Service d'assistance / tickets.</li>
                      </ul>

                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                      <img src="assets/img/tabs-1.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-2">
                  <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                      <h3>Vous êtes une société (TPE, PME), libéral, micro-entreprise ou association</h3>
                      <p class="font-italic">
                        Notre solution RH simplifie la gestion de vos ressources humaines avec des outils intuitifs. Automatisez les processus de recrutement, suivez les performances des employés et optimisez la gestion des congés. Facilitez la gestion de votre équipe et améliorez la satisfaction au travail.
                      </p>
                      <ul>
                        <li><i class="ri-check-double-line"></i> Employés.</li>
                        <li><i class="ri-check-double-line"></i> Notes de frais.</li>
                        <li><i class="ri-check-double-line"></i> Demandes de congé.</li>
                        <li><i class="ri-check-double-line"></i> Feuilles de temps.</li>
                        <li><i class="ri-check-double-line"></i> Recrutement.</li>
                        <li><i class="ri-check-double-line"></i> Gestion des compétences.</li>
                      </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                      <img src="assets/img/tabs-2.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-3">
                  <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                      <h3>Vous êtes une société (TPE, PME), libéral, micro-entreprise ou association</h3>
                      <p class="font-italic">
                        Notre module Produit vous aide à gérer et optimiser votre catalogue de produits. Suivez les niveaux de stock, mettez à jour les informations produit et analysez les performances. Centralisez toutes les données pour une gestion efficace et informée.
                      </p>
                      <ul>
                        <li><i class="ri-check-double-line"></i> Produits, Services.</li>
                        <li><i class="ri-check-double-line"></i> Stocks.</li>
                        <li><i class="ri-check-double-line"></i> Achat, approvisionnement.</li>
                        <li><i class="ri-check-double-line"></i> Expéditions.</li>
                        <li><i class="ri-check-double-line"></i> Fabrication.</li>
                        <li><i class="ri-check-double-line"></i> Emailing.</li>
                      </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                      <img src="assets/img/tabs-3.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-4">
                  <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                      <h3>Vous êtes une société (TPE, PME), libéral, micro-entreprise ou association</h3>
                      <p class="font-italic">
                        Optimisez votre gestion d'entreprise avec notre solution intégrée pour la Finance, la Facturation et la Productivité. Gérez vos finances et vos factures avec précision tout en améliorant l'efficacité de vos équipes. Centralisez toutes vos opérations pour un fonctionnement fluide et performant.
                      </p>
                      <ul>
                        <li><i class="ri-check-double-line"></i> Facturation & Paiements.</li>
                        <li><i class="ri-check-double-line"></i> Rapprochement bancaire.</li>
                        <li><i class="ri-check-double-line"></i> Comptabilité à double entrée.</li>
                        <li><i class="ri-check-double-line"></i> Projets, Tâches.</li>
                        <li><i class="ri-check-double-line"></i> Interventions.</li>
                        <li><i class="ri-check-double-line"></i> Agenda.</li>
                      </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                      <img src="assets/img/tabs-4.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </section><!-- End Tabs Section -->

          <!-- ======= Modules Section ======= -->
          <section id="services" class="services section-bg ">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Modules</h2>
                <p>Découvrez nos modules conçus pour simplifier et optimiser la gestion de votre entreprise. De la gestion des ressources humaines à la productivité, en passant par les ventes et la finance, chaque module est pensé pour répondre à vos besoins. Gagnez du temps et améliorez vos performances avec des outils adaptés et intuitifs..</p>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <i class="icofont-computer"></i>
                    <h4><a href="#">Ressources Humaines</a></h4>
                    <p>Le module Ressources Humaines gère les employés, les notes de frais, les demandes de congé, les feuilles de temps, le recrutement et la gestion des compétences.</p>
                  </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <i class="icofont-chart-bar-graph"></i>
                    <h4><a href="#">CRM & Ventes</a></h4>
                    <p>Le module CRM & Ventes permet de gérer les prospects, clients, opportunités, devis, commandes, contrats, abonnements, et les services d'assistance/tickets.</p>
                  </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                    <i class="icofont-image"></i>
                    <h4><a href="#">Produit & Stock</a></h4>
                    <p>Gérez efficacement vos Produits, Services, Stocks, Achats, et Expéditions. Optimisez votre chaîne d’approvisionnement et la Fabrication pour une performance accrue.</p>
                  </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                    <i class="icofont-settings"></i>
                    <h4><a href="#">Finance & Facturation</a></h4>
                    <p>Optimisez votre gestion financière, Paiements et Rapprochement bancaire. Simplifiez votre Comptabilité à double entrée pour une maîtrise complète de vos finances.</p>
                  </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
                    <i class="icofont-earth"></i>
                    <h4><a href="#">Marketing</a></h4>
                    <p>Boostez votre stratégie Marketing avec des outils performants pour Emailing et Enquêtes. Engagez vos clients efficacement et mesurez l’impact de vos actions.</p>
                  </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="600">
                    <i class="icofont-tasks-alt"></i>
                    <h4><a href="#">Productivité</a></h4>
                    <p>Améliorez votre Productivité en gérant efficacement Projets, Tâches, et Interventions. Planifiez votre Agenda et suivez vos activités en un seul endroit.
                    </p>
                  </div>
                </div>
              </div>

            </div>
          </section><!-- End Services Section -->

          <!-- ======= Contact Section ======= -->
          <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Contact</h2>
                <p>Recevez les dernières nouvelles, conseils exclusifs et offres spéciales directement dans votre boîte mail.</p>
              </div>

              <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-6">

                  <div class="row">
                    <div class="col-md-12">
                      <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>Address</h3>
                        <p>Plateau de tombe, Mahajanga ville 401 Madagascar
                        </p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="info-box mt-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email et Site</h3>
                        <p> https://digital.gasikara.mg
                          <br> Contact@gasikara.mg </p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="info-box mt-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Telephone</h3>
                        <p>+261 34 93 452 51<br>+261 32 58 584 93</p>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="col-lg-6">
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                      <div class="col form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validate"></div>
                      </div>
                      <div class="col form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validate"></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                      <div class="validate"></div>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                      <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">
                        Votre message a été envoyé. Merci!</div>
                    </div>
                    <div class="text-center"><button type="submit">Envoyer</button></div>
                  </form>
                </div>

              </div>

            </div>
          </section><!-- End Contact Section -->

        </main><!-- End #main -->

      {{--end content--}}

@endsection

