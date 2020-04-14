<template>
  <div class="hr">
    <div class="container no-padding-left no-padding-right em-space">
      <div class="row center-content">
        <div class="col-md-3">
          <img class="tech-icon" src="../../image/zenguard.png" alt="zenguard">
        </div>
        <div class="col-md-3 center">
          <img height="162" width="123" src="../../image/composer.png" alt="composer">
        </div>
        <div class="col-md-3">
          <img class="tech-icon" src="../../image/ioncube.png" alt="ioncube">
        </div>
      </div>
      <div class="row center-content padding-top">
        <div class="col-md-3 center">
          <span class="fs-12em">PHP Zend Guard Loader</span>
        </div>
        <div class="col-md-3 center">
          <span class="fs-12em">PHP Composer</span>
        </div>
        <div class="col-md-3 center">
          <span class="fs-12em">PHP ionCube Loader</span>
        </div>
      </div>
    </div>
    <div>
      <PackageComponent/>
    </div>
  </div>
</template>

<script>
  import PackageComponent from './packages';

  export default {
    name: 'TechInfoComponent',
    components: {
      PackageComponent
    },
  }
</script>