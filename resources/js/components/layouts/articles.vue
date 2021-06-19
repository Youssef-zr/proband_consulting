<template>
  <div class="articles">
    <section class="blog-page-section">
      <div class="auto-container">
        <div class="sec-title"><h3 class="title">Articles Récents</h3></div>

        <!-- when loading article -->
        <div v-if="loading" class="d-flex justify-content-center mb-5">
          <span class="mb-2 text-danger">Veuillez Patienter</span>
          <looping-rhombuses-spinner
            :animation-duration="2500"
            :rhombus-size="15"
            color="#ff1d5e"
            class="mt-2 ml-3"
          />
        </div>

        <!-- our posts -->
        <div class="row clearfix" v-else>
          <div
            class="news-block col-lg-3 col-md-4 col-sm-12"
            v-for="article in articlesData.data"
            :key="article.id"
          >
            <div class="inner-box">
              <div class="image">
                <img
                  :src="'/' + article.image"
                  alt="article image"
                  class="img-thumbnail img-responsive"
                />
                <a
                  :href="article.image"
                  data-fancybox="gallery"
                  data-caption=""
                  class="overlay-box"
                >
                  <span class="icon flaticon-full-screen"></span>
                </a>
                <div class="post-date">
                  <span>{{ article.created_at }}</span>
                </div>
              </div>
              <div class="lower-content pt-3">
                <h3 class="my-0">
                  <router-link
                    :to="'/articleDetails/' + article.id"
                    class="text-capitalize text-dark"
                  >
                    {{ article['title'] }}
                  </router-link>
                </h3>
                <div class="text mt-0">
                  {{ article.summary }}
                </div>
                <ul class="post-meta">
                  <li>
                    <label>
                      <span
                        class="icon fa fa-user"
                        style="color: #009dea;"
                      ></span>
                      Admin
                    </label>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- start pagination -->
        <div class="pagination-container d-flex justify-content-center">
          <pagination
            :data="articlesData"
            @pagination-change-page="get_articles"
          >
            <span slot="prev-nav"><i class="fa fa-arrow-left"></i></span>
            <span slot="next-nav"><i class="fa fa-arrow-right"></i></span>
          </pagination>
        </div>
        <!-- end pagination -->
      </div>
    </section>
  </div>
</template>

<script>
import { LoopingRhombusesSpinner } from 'epic-spinners'

export default {
  components: {
    LoopingRhombusesSpinner,
  },
  data() {
    return {
      loading: true,
      articlesData: {},
    }
  },
  created() {
    this.get_articles()
  },
  methods: {
    get_articles(page = 1) {
      this.loading = true
      axios
        .get('/api/getArticles?page=' + page)
        .then((res) => {
          if (res.data.statusCode == 200) {
            this.articlesData = res.data.articles
          }
          this.loading = false
        })
        .then((err) => {
          this.loading = false
        })
    },
  },
}
</script>

<style lang="scss">
.post-date {
  width: 130px !important;
  height: 39px !important;
  font-size: 14px !important;
  text-transform: lowercase !important;
}

.post-date span {
  font-size: 14px !important;
}
</style>
