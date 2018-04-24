<template>
  <div>
    <transition name="fade">

      <nav v-show="scrolled" class="header">
        <div class="container">
          <div class="row">
            <div class="col-1 d-block d-sm-none"></div>
            <div class="col-5 col-sm-3 nav-links social">
              <a href="https://facebook.com/nick.moncur" target="_blank"><img src="/images/social/fb.png" alt=""></a>
              <a href="https://instagram.com/nmoncur/" target="_blank"><img src="/images/social/insta.png" alt=""></a>
              <a href="https://linkedin.com/in/nick-moncur-89040063/" target="_blank"><img src="/images/social/li.png" alt=""></a>
              <a href="https://medium.com/@nickmoncur" target="_blank"><img src="/images/social/medium.png" alt=""></a>
            </div>
            <div class="d-none d-sm-block col-6 text-center nav-links">
              <router-link to="/" class="name">Nick Moncur</router-link>
            </div>
            <div class="col-5 col-sm-3 text-right nav-links">
              <router-link to="/dev">
                <div class="btn btn-primary">
                  Hire Me
                </div>
              </router-link>
            </div>
            <div class="col-1 d-block d-sm-none"></div>
          </div>
        </div>
      </nav>

    </transition>
  </div>
</template>
<script>
  export default {
    data () {
      return {
        scrolled: false
      };
    },
    methods: {
      handleScroll () {
        this.scrolled = window.scrollY > 50;
      }
    },
    created () {
      window.addEventListener('scroll', this.handleScroll);
    },
    destroyed () {
      window.removeEventListener('scroll', this.handleScroll);
    }
  }
</script>
