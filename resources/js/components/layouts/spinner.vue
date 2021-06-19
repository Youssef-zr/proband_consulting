<template>
  <!-- spinner -->
  <div class="spinner">
    <fingerprint-spinner
      :animation-duration="1500"
      :size="64"
      color="#009dea"
    />
  </div>
</template>

<script>
import { FingerprintSpinner } from 'epic-spinners'
export default {
  components: {
    FingerprintSpinner,
  },
}
</script>

<style lang="scss">
  .spinner {
  position: fixed;
  top: 0;
  left: 0;
  background: #fff;
  width: 100%;
  height: 100vh;
  z-index: 99999;
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>