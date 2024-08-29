@extends('layouts.header')
@section('contenu')


  <main id="main">

     <!-- ======= Breadcrumbs ======= -->
     <section class="breadcrumbs">
        <div class="container">

          <ol>
            <li><a href="index.html">Accueil</a></li>
            <li>Faq's</li>
          </ol>


        </div>
      </section><!-- End Breadcrumbs -->

    <!-- ======= techniques clients ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Questions techniques clients</h2>
        </div>

        <ul class="faq-list" data-aos="fade-up">

          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">J'utilise déjà l'application Dolibarr ERP CRM sur un autre serveur. Comment puis-je migrer vers DoliCloud ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq1" class="collapse" data-parent=".faq-list">
              <p>
                Migrer mon application Dolibarr vers une instance autogérée dans le Cloud chez DoliCloud . Vous trouverez ici le lien vers la Documentation Wiki de Dolibarr qui décrit comment réaliser, pas à pas, la migration de vos données d'une instance existante de Dolibarr vers celle de DoliCloud :
                https://wiki.dolibarr.org/index.php/Migrer_mon_Dolibarr_vers_une_offre_Cloud
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">J'ai une sauvegarde de Dolibarr. Comment la restaurer sur DoliCloud ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                Restorer des données est une opération risquée. Cela écrase les données existantes, aussi vous perdrez toutes les données courantes de votre instance car elles seront remplacées par d'autres. De plus, si le processus échoue, vous pouvez rendre votre application instable. Dans la plupart des cas, une "restauration" doit être faite dans des situations très particulières (le plus fréquent étant un changement de fournisseur ou de serveur d'hébergement, mais aussi la perte d'un disque dur)
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Comment avoir une deuxième instance pour test ou pré-production ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                Vous avez déjà une instance de Dolibarr ERP CRM qui tourne en production et vous désirez faire des tests dessus de nouveaux paramétrages ou de fonctionnement d'un module externe.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">Comment accéder à ma base de donnée avec un client Mysql ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
                Notez que se connecter directement à votre base de donnée Dolicloud vous permet de voir mais aussi modifier la base. Parce que les modifications sont faites en base directement, si vous n'avez pas les connaissances techniques sur comment est architecturée la base, vous prenez aussi un risque de rendre incohérentes vos données et par conséquent votre application instable. Aussi, l'accès en direct à votre base de donnée est à utiliser à vos risques et périls.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">Comment déployer un module externe sur mon instance Dolibarr? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
                Parce que DoliCloud est une offre ouverte, vous êtes libre de modifier ou d'étendre votre instance comme vous voulez. L'ajout de modules externes (comme les modules/extensions trouvés sur www.dolistore.com) peut être un bon moyen d'améliorer Dolibarr avec des fonctionnalités non fournies par défaut. Cette page vous explique
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">Les EMails envoyés par l'application partent en SPAM? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
                Cette FAQ vous donnera des conseils quand vos e-mails, envoyés par votre application hébergée, sont reçus dans la boîte de réception SPAM, ou ne sont simplement jamais reçu (en général éliminés par le système Antispam ou antivirus du destinataire).
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section>
    <!-- End techniques clients-->

    <!-- ======= Questions utilisateurs ======= -->
    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Questions utilisateurs</h2>
          </div>

          <ul class="faq-list" data-aos="fade-up">

            <li>
              <a data-toggle="collapse" class="collapsed" href="#faq1">J'utilise déjà l'application Dolibarr ERP CRM sur un autre serveur. Comment puis-je migrer vers DoliCloud ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
              <div id="faq1" class="collapse" data-parent=".faq-list">
                <p>
                  Migrer mon application Dolibarr vers une instance autogérée dans le Cloud chez DoliCloud . Vous trouverez ici le lien vers la Documentation Wiki de Dolibarr qui décrit comment réaliser, pas à pas, la migration de vos données d'une instance existante de Dolibarr vers celle de DoliCloud :
                  https://wiki.dolibarr.org/index.php/Migrer_mon_Dolibarr_vers_une_offre_Cloud
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#faq2" class="collapsed">J'ai une sauvegarde de Dolibarr. Comment la restaurer sur DoliCloud ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
              <div id="faq2" class="collapse" data-parent=".faq-list">
                <p>
                  Restorer des données est une opération risquée. Cela écrase les données existantes, aussi vous perdrez toutes les données courantes de votre instance car elles seront remplacées par d'autres. De plus, si le processus échoue, vous pouvez rendre votre application instable. Dans la plupart des cas, une "restauration" doit être faite dans des situations très particulières (le plus fréquent étant un changement de fournisseur ou de serveur d'hébergement, mais aussi la perte d'un disque dur)
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#faq3" class="collapsed">Comment avoir une deuxième instance pour test ou pré-production ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
              <div id="faq3" class="collapse" data-parent=".faq-list">
                <p>
                  Vous avez déjà une instance de Dolibarr ERP CRM qui tourne en production et vous désirez faire des tests dessus de nouveaux paramétrages ou de fonctionnement d'un module externe.
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#faq4" class="collapsed">Comment accéder à ma base de donnée avec un client Mysql ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
              <div id="faq4" class="collapse" data-parent=".faq-list">
                <p>
                  Notez que se connecter directement à votre base de donnée Dolicloud vous permet de voir mais aussi modifier la base. Parce que les modifications sont faites en base directement, si vous n'avez pas les connaissances techniques sur comment est architecturée la base, vous prenez aussi un risque de rendre incohérentes vos données et par conséquent votre application instable. Aussi, l'accès en direct à votre base de donnée est à utiliser à vos risques et périls.
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#faq5" class="collapsed">Comment déployer un module externe sur mon instance Dolibarr? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
              <div id="faq5" class="collapse" data-parent=".faq-list">
                <p>
                  Parce que DoliCloud est une offre ouverte, vous êtes libre de modifier ou d'étendre votre instance comme vous voulez. L'ajout de modules externes (comme les modules/extensions trouvés sur www.dolistore.com) peut être un bon moyen d'améliorer Dolibarr avec des fonctionnalités non fournies par défaut. Cette page vous explique
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#faq6" class="collapsed">Les EMails envoyés par l'application partent en SPAM? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
              <div id="faq6" class="collapse" data-parent=".faq-list">
                <p>
                  Cette FAQ vous donnera des conseils quand vos e-mails, envoyés par votre application hébergée, sont reçus dans la boîte de réception SPAM, ou ne sont simplement jamais reçu (en général éliminés par le système Antispam ou antivirus du destinataire).
                </p>
              </div>
            </li>

          </ul>

        </div>
      </section>
      <!-- End Frequently Asked Questions Section-->

    <!-- =======End Questions utilisateurs ======= -->


    <!-- ======= Questions commerciales / légales / partenariat ======= -->
    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Questions commerciales / légales / partenariat</h2>
          </div>

          <ul class="faq-list" data-aos="fade-up">

            <li>
              <a data-toggle="collapse" class="collapsed" href="#faq1">J'utilise déjà l'application Dolibarr ERP CRM sur un autre serveur. Comment puis-je migrer vers DoliCloud ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
              <div id="faq1" class="collapse" data-parent=".faq-list">
                <p>
                  Migrer mon application Dolibarr vers une instance autogérée dans le Cloud chez DoliCloud . Vous trouverez ici le lien vers la Documentation Wiki de Dolibarr qui décrit comment réaliser, pas à pas, la migration de vos données d'une instance existante de Dolibarr vers celle de DoliCloud :
                  https://wiki.dolibarr.org/index.php/Migrer_mon_Dolibarr_vers_une_offre_Cloud
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#faq2" class="collapsed">J'ai une sauvegarde de Dolibarr. Comment la restaurer sur DoliCloud ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
              <div id="faq2" class="collapse" data-parent=".faq-list">
                <p>
                  Restorer des données est une opération risquée. Cela écrase les données existantes, aussi vous perdrez toutes les données courantes de votre instance car elles seront remplacées par d'autres. De plus, si le processus échoue, vous pouvez rendre votre application instable. Dans la plupart des cas, une "restauration" doit être faite dans des situations très particulières (le plus fréquent étant un changement de fournisseur ou de serveur d'hébergement, mais aussi la perte d'un disque dur)
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#faq3" class="collapsed">Comment avoir une deuxième instance pour test ou pré-production ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
              <div id="faq3" class="collapse" data-parent=".faq-list">
                <p>
                  Vous avez déjà une instance de Dolibarr ERP CRM qui tourne en production et vous désirez faire des tests dessus de nouveaux paramétrages ou de fonctionnement d'un module externe.
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#faq4" class="collapsed">Comment accéder à ma base de donnée avec un client Mysql ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
              <div id="faq4" class="collapse" data-parent=".faq-list">
                <p>
                  Notez que se connecter directement à votre base de donnée Dolicloud vous permet de voir mais aussi modifier la base. Parce que les modifications sont faites en base directement, si vous n'avez pas les connaissances techniques sur comment est architecturée la base, vous prenez aussi un risque de rendre incohérentes vos données et par conséquent votre application instable. Aussi, l'accès en direct à votre base de donnée est à utiliser à vos risques et périls.
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#faq5" class="collapsed">Comment déployer un module externe sur mon instance Dolibarr? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
              <div id="faq5" class="collapse" data-parent=".faq-list">
                <p>
                  Parce que DoliCloud est une offre ouverte, vous êtes libre de modifier ou d'étendre votre instance comme vous voulez. L'ajout de modules externes (comme les modules/extensions trouvés sur www.dolistore.com) peut être un bon moyen d'améliorer Dolibarr avec des fonctionnalités non fournies par défaut. Cette page vous explique
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#faq6" class="collapsed">Les EMails envoyés par l'application partent en SPAM? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
              <div id="faq6" class="collapse" data-parent=".faq-list">
                <p>
                  Cette FAQ vous donnera des conseils quand vos e-mails, envoyés par votre application hébergée, sont reçus dans la boîte de réception SPAM, ou ne sont simplement jamais reçu (en général éliminés par le système Antispam ou antivirus du destinataire).
                </p>
              </div>
            </li>

          </ul>

        </div>
      </section>
      <!-- End Frequently Asked Questions Section-->

    <!-- ======= End Questions commerciales / légales / partenariat ======= -->

  </main><!-- End #main -->

{{--end content--}}
@endsection
