@extends('layouts.header')
@section('contenu')


  <main id="main">

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tarif</h2>
          <p>ERPINNOV.COM offre la suite de gestion d'entreprises Dolibarr ERP CRM en ligne, prête pour l'entreprise, les indépendants ou les associations. Son coût reste fixe quelque soit le nombre d'applications de la suite que vous utilisez.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box" data-aos="fade-up" data-aos-delay="100">
              <h3>GRATUIT</h3>
              <h4><sup>€</sup>0<span> / mois/ utilisa</span></h4>
              <ul>
                <li>Tous les modules de Dolibarr (modules officiels - exemples)</li>
                <li>Accessibilité depuis tout accès internet, tout navigateur, tout OS</li>
                <li>Disponibilité 24/7</li>
                <li class="na">Support technique (par ticket en anglais ou français)</li>
                <li class="na">Sauvegardes journalières (30 jours glissant)</li>
                <li class="na"> Modification/Ajout d'extension et code possible (à déployer soi même)</li>
                <li class="na">Possibilité de faire tourner le planificateur de tâches Dolibarr 1 fois/jour</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Installer maintenant</a>
              </div>
              <p>Test gratuit (30 jours ou plus, sans engagement)</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="fade-up" data-aos-delay="200">
              <h3>Dolibarr Basic</h3>
              <h4><sup>€</sup>14<span> / mois / utilisateur</span></h4>
              <ul>
                <li>Tous les modules de Dolibarr (modules officiels - exemples)</li>
                <li>Accessibilité depuis tout accès internet, tout navigateur, tout OS</li>
                <li>Disponibilité 24/7</li>
                <li>Support technique (par ticket en anglais ou français)</li>
                <li>Sauvegardes journalières (30 jours glissant)</li>
                <li class="na"> Modification/Ajout d'extension et code possible (à déployer soi même)</li>
                <li class="na">Possibilité de faire tourner le planificateur de tâches Dolibarr 1 fois/jour</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Installer maintenant</a>
              </div>
              <p>Test gratuit (30 jours ou plus, sans engagement)</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="300">
              <h3>Dolibarr Premium</h3>
              <h4><sup>€</sup>30<span> / mois / utilisateur</span></h4>
              <ul>
                <li>Tous les modules de Dolibarr (modules officiels - exemples)</li>
                <li>Accessibilité depuis tout accès internet, tout navigateur, tout OS</li>
                <li>Disponibilité 24/7</li>
                <li>Support technique (par ticket en anglais ou français)</li>
                <li>Sauvegardes journalières (30 jours glissant)</li>
                <li> Modification/Ajout d'extension et code possible (à déployer soi même)</li>
                <li>Possibilité de faire tourner le planificateur de tâches Dolibarr 1 fois/jour</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Installer maintenant</a>
              </div>
              <p>Test gratuit (30 jours ou plus, sans engagement)</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Pricing Section -->

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
