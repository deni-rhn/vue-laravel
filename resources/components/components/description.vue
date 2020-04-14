<template>
  <div class="hr">
    <div class="container no-padding-left no-padding-right em-space">
      <div class="row">
        <div class="col-md-12 no-padding-left no-padding-right">
          <div class="row">
            <div class="col-md-6">
              <div class="part-1">
                <h1 class="title-desc">PHP Hosting</h1>
                <p class="text-desc">Cepat, handal, penuh dengan</p>
                <p class="text-desc">modul PHP yang Anda butuhkan</p>
              </div>
              <div class="part-2">
                <div class="list"
                  v-for="desc in descriptionList"
                  :key="desc.name"
                >
                  <svg class="bi bi-check-circle check-color" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3-3a.5.5 0 11.708-.708L8 9.293l6.646-6.647a.5.5 0 01.708 0z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1013.5 8a.5.5 0 011 0 6.5 6.5 0 11-3.25-5.63.5.5 0 11-.5.865A5.472 5.472 0 008 2.5z" clip-rule="evenodd"/>
                  </svg>
                  <span class="list-feat-padding">{{ desc.name }}</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <img src="../../image/php-7.svg" alt="php-7">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        descriptionList: []
      }
    },
    created() {
      this.loadData();
    },
    methods: {
      loadData() {
        axios.get("http://localhost:8000/api/feature-list").then(response => {
          console.log('res', response)
          this.descriptionList = response.data
        });
      }
    }
  }
</script>