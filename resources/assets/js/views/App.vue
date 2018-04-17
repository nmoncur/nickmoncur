<template>
  <div>
    <app-nav/>

    <transition name="fade">
      <router-view/>
    </transition>

    <app-footer/>
  </div>
</template>
<script>
  import AppNav from '../components/AppNav'
  import AppFooter from '../components/AppFooter'

  export default {
    components: {
      AppNav,
      AppFooter
    }
  }
</script>
