<template>
  <div class="section-conseil">
    <!--Page Title-->
    <section
      class="page-title"
      style="background-image: url('/website/images/background/12.jpg');"
    >
      <div class="auto-container">
        <h1>conseil</h1>
        <ul class="page-breadcrumb">
          <li>
            <router-link to="/accueil">Accueil</router-link>
          </li>
          <li>Conseil</li>
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
                <div class="title">CONSEIL</div>
              </div>
              <div class="text my-0">
                L’ambition de FIREC & ASSOCIES est de permettre à ses clients de
                bénéficier d’une approche pluridisciplinaire de haute qualité et
                homogène quelque soit la prestation rendue.
              </div>
              <hr />
              <div class="text mt-2">
                Nos équipes s’appuient sur un large réseau de partenaires
                notamment des cabinets de conseil basés à Casablanca et à Paris
                pour répondre au mieux à vos opérations les plus complexes.
              </div>
            </div>
          </div>

          <!--Image Column-->
          <div class="image-column col-lg-5 col-md-12 col-sm-12">
            <img
              src="/website/images/resource/15.jpg"
              alt="conseil"
              class="img-thumbnail img-responsive"
            />
          </div>
        </div>
      </div>
    </section>
    <!--End Welcome Section-->

    <!-- Approch Section -->
    <section
      class="approach-section pb-5"
      style="background-image: url('/website/images/background/2.jpg');"
    >
      <div
        class="upper-box"
        style="background-image: url('/website/images/background/1.jpg');"
      >
        <div class="auto-container">
          <div class="title">Nous Sommes Des Professionnels</div>
          <h2>Notre offre s’organise autour de 4 thématiques</h2>
        </div>
      </div>
      <div class="auto-container">
        <div class="blocks-section">
          <div class="row clearfix">
            <!-- box -->
            <div class="services-block col-lg-3 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="icon-box text-blue">
                  <span class="fa fa-lightbulb-o"></span>
                </div>
                <h6>
                  <router-link
                    to="/conseil-juridique-et-fiscal"
                    class="text-dark"
                  >
                    conseil juridique et fiscal
                  </router-link>
                </h6>
              </div>
            </div>
            <!-- box -->
            <div class="services-block col-lg-3 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="icon-box text-blue">
                  <span class="fa fa-lightbulb-o"></span>
                </div>
                <h6>
                  <router-link
                    to="/conseil-en-strategie-et-en-organisation"
                    class="text-dark"
                  >
                    Conseil en stratégie et en organisation
                  </router-link>
                </h6>
              </div>
            </div>
            <!-- box -->
            <div class="services-block col-lg-3 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="icon-box text-blue">
                  <span class="fa fa-lightbulb-o"></span>
                </div>
                <h6>
                  <router-link to="/conseil-en-corporate" class="text-dark">
                    Conseil en corporate
                  </router-link>
                </h6>
              </div>
            </div>
            <!-- box -->
            <div class="services-block col-lg-3 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="icon-box text-blue">
                  <span class="fa fa-lightbulb-o"></span>
                </div>
                <h6>
                  <router-link to="/Conseil en SI" class="text-dark">
                    Conseil en SI
                  </router-link>
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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

<style lang="scss">
@media (min-width: 968px) {
  .section-conseil {
    .services-block .inner-box {
      min-height: 210px;
    }
  }
}
.text-underline {
  text-decoration: underline;
}
</style>

<script>
export default {
  // Start Meta --------------
  metaInfo: {
    title: 'Proband Consulting',
    titleTemplate: '%s | conseil',
    meta: [
      {
        hid: 'descriptionPropos',
        name: 'description',
        content: 'Proband Consulting,conseil',
      },
    ],
  },
  // End Meta --------------
}
</script>
