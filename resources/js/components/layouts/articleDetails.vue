<template>
  <!--Sidebar Page Container-->
  <div class="sidebar-page-container">
    <div class="auto-container">
      <div class="row clearfix">
        <!--Content Side-->
        <div class="content-side mx-md-auto col-lg-8 col-md-8 col-sm-12">
          <div class="blog-single">
            <div class="inner-box">
              <div class="image">
                <img :src="'/' + article.image" alt="" />
                <div class="post-date">
                  {{ article.created_at }}
                </div>
              </div>
              <h2>{{ article.title }}</h2>
              <ul class="post-meta">
                <li>
                  <span class="icon fa fa-user"></span>
                  Admin
                </li>
              </ul>
              <div class="text text-global" v-html="article.content"></div>
            </div>
          </div>
        </div>
      </div>
      <!--Blog Page Section-->
      <articles />
      <!--End Blog Page Section-->
    </div>
  </div>
</template>

<script>
import articles from '../layouts/articles.vue'
export default {
  components: { articles },
  data() {
    return {
      id: this.$route.params.id,
      article: {},
    }
  },
  created() {
    this.toTop()
    this.get_article()
  },
  methods: {
    get_article() {
      this.toTop()
      axios
        .get('/api/getArticle/' + this.id)
        .then((res) => {
          if (res.data.statusCode == 200) {
            this.article = res.data.article
          } else if (res.data.statusCode == 422) {
            this.$router.push('/not-found')
          }
        })
        .catch((err) => {
          console.log(err)
        })
    },
    toTop() {
      $('body,html').animate(
        {
          scrollTop: 400,
        },
        700,
      )
    },
  },
  watch: {
    $route: function (route) {
      if (route.params.id != this.id) {
        this.id = route.params.id
        this.get_article()
      }
    },
  },
}
</script>
<style lang="scss">
.text-global * {
  display: block;
  word-wrap: break-word !important;
}
</style>
