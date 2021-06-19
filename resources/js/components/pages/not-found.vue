<template>
  <div class="text-left">
    <!--Page Title-->
    <section
      class="page-title"
      style="background-image: url('/website/images/background/11.jpg');"
    >
      <div class="auto-container">
        <h1>Erreur 404</h1>
        <ul class="page-breadcrumb">
          <li>
            <router-link to="/">Accueil</router-link>
          </li>
          <li>404</li>
        </ul>
      </div>
    </section>
    <!--End Page Title-->
    <!--Error Section-->
    <section class="error-section">
      <div class="auto-container">
        <div class="error-title">
          4
          <span class="theme_color">0</span>
          4
        </div>
        <h4>Aucune page ne correspond à votre recherche</h4>
        <div class="text">
          La page que vous recherchez a été Déplacée, Supprimée, Renommée ou
          Jamais Existé
        </div>
        <router-link to="/" class="theme-btn btn-style-one">
          Page d'Accueil
        </router-link>
      </div>
    </section>
    <!--Error Section-->
  </div>
</template>

<script>
export default {
  // Start Meta --------------
  metaInfo: {
    title: 'Proband Consulting',
    titleTemplate: '%s | non trouvé',
    meta: [
      {
        hid: 'descriptionPropos',
        name: 'description',
        content: 'Proband Consulting,non trouvé',
      },
    ],
  },
  // End Meta --------------
}
</script>
