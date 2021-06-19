<template>
  <div class="section-audit">
    <!--Page Title-->
    <section
      class="page-title"
      style="background-image: url('/website/images/background/12.jpg');"
    >
      <div class="auto-container">
        <h1>Audit</h1>
        <ul class="page-breadcrumb">
          <li>
            <router-link to="/accueil">Accueil</router-link>
          </li>
          <li>Audit</li>
        </ul>
      </div>
    </section>
    <!--End Page Title-->
    <!--Welcome Section-->
    <section class="welcome-section text-left">
      <div class="auto-container">
        <div class="row clearfix">
          <!--Content Column-->
          <div class="content-column col-lg-7 col-md-12 col-sm-12">
            <div class="inner-column">
              <!--Sec Title-->
              <div class="sec-title pb-2">
                <div class="title">Audit</div>
              </div>
              <div class="text mt-0">
                Proband Consulting intervient, en tant que commissaire aux
                comptes et conseiller auprès de sociétés de droit marocain et de
                sociétés étrangères, de sociétés cotées sur le marché boursier
                de Casablanca, d’associations et de groupes de toutes tailles et
                tous secteurs d’activités.
              </div>
              <div class="clearfix">
                <div class="pull-left">
                  <router-link to="/contact" class="theme-btn btn-style-four">
                    Contacter
                  </router-link>
                </div>
                <div class="pull-right">
                  <div class="phone">
                    <span class="icon fa fa-phone"></span>
                    +2126.45.90.33.30
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--Image Column-->
          <div class="image-column col-lg-5 col-md-12 col-sm-12">
            <div class="inner-column mt-md-5 text-secondary">
              <div class="text">
                Les missions d’audit sont réalisées conformément aux normes de
                l’Ordre des Experts Comptables. Elles sont également en
                adéquation avec notre compréhension globale et transversale de
                l’entreprise. Elles participent à vous aider à valider,
                comprendre et interpréter l’information comptable et financière.
                Ces missions aboutissent à vous donner une opinion
                professionnelle indépendante.
              </div>
              <hr />
              <div class="text">
                La mixité de nos équipes (auditeurs financiers, experts métiers,
                évaluateurs, consultants spécialisés et juristes) nous permet
                d’apporter une approche polyvalente et adaptée aux exigences de
                nos clients. Elles interviennent et s’impliquent à vos côtés
                pour ainsi vous assurer une disponibilité et une réactivité
                digne d’un professionnel expérimenté.
              </div>
              <hr />
              <div class="text">
                La maitrise du référentiel comptable local et international
                (I.F.R.S) nous permet de vous fournir des prestations techniques
                de haute qualité.
              </div>
              <div class="text">
                Les missions proposées par le cabinet Proband Consulting sont
                subdivisées en deux catégories :
              </div>
            </div>
          </div>
        </div>
        <!-- buttons -->
        <div class="buttons mt-4 text-center">
          <router-link
            to="/audit-commissariat-aux-comptes"
            class="theme-btn btn-style-three m-2"
          >
            COMMISSARIAT AUX COMPTES
          </router-link>
          <router-link to="/contact" class="theme-btn btn-style-three m-2">
            audit-contractuel
          </router-link>
        </div>
      </div>
    </section>
    <!--End Welcome Section-->
    <!--Blog Page Section-->
    <articles />
    <!--End Blog Page Section-->

    <!-- Call To Action -->
    <section class="call-to-action">
      <div class="auto-container">
        <div class="inner-container clearfix">
          <h3>
            Besoin d’un conseil ? N’hésitez pas à nous contacter.
          </h3>
          <router-link to="/contact" class="contact-btn">
            Contacter
          </router-link>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import articles from '../../layouts/articles'
export default {
  // Start Meta --------------
  metaInfo: {
    title: 'Proband Consulting',
    titleTemplate: '%s | Audit',
    meta: [
      {
        hid: 'descriptionPropos',
        name: 'description',
        content: 'Proband Consulting,Audit',
      },
    ],
  },
  // End Meta --------------
  components: { articles },
}
</script>
