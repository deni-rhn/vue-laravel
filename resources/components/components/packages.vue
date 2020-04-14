<template>
  <div class="container no-padding-left no-padding-right em-space">
    <div class="row">
      <div class="col-md-12 no-padding-left no-padding-right">
        <div class="row">
          <div class="col-md-12 center">
            <div class="title-section" v-bind:class="discount">
              <h1 class="title-desc">Paket Hosting Singapura yang Tepat</h1>
              <p class="text-desc">{{ discount.discount }}</p>
            </div>
            <div class="row space-top">
              <div class="col-md-3 border-package no-padding-left no-padding-right">
                <div class="title-package border-content-package">
                  <h3 class="title-desc">Bayi</h3>
                </div>
                <div class="price-package border-content-package">
                  Rp. 10.000
                </div>
                <div class="reg-info border-content-package">
                  12.000 Terdaftar
                </div>
                <div class="detail-package">
                  Free
                </div>
                <div class="btn-choose">
                  <button class="btn btn-default choose">Pilih Sekarang</button>
                </div>
              </div>
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
        descriptionList: [],
        discount: {}
      }
    },
    created() {
      this.loadData();
    },
    methods: {
      loadData() {
        axios.get("http://localhost:8000/api/discount").then(response => {
          console.log('res discount', response)
          this.discount = response.data
        });
      }
    }
  }
</script>