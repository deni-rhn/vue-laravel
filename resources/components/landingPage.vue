<template>
  <div>
    <div class="hr">
      <div class="container no-padding-left no-padding-right">
        <div class="row">
          <div class="col-md-12 space-top-bottom">
            <div class="row">
              <div class="col-md-6 no-padding-left">
                <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/bookmark-651-1133923.png" class="image-size" alt="ebook">
                <span>Gratis Ebook 9 Cara Cerdas Menggunakan Domain</span>
              </div>
              <div class="col-md-6 right no-padding-right">
                <img src="https://cdn0.iconfinder.com/data/icons/technology-business-and-industry/1000/file_light-70-512.png" class="image-size-small" alt="phone">
                <span class="text-icon">0274-5305505</span>
                <span>
                  <svg class="bi bi-chat-square-dots-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 2a2 2 0 012-2h12a2 2 0 012 2v8a2 2 0 01-2 2h-2.5a1 1 0 00-.8.4l-1.9 2.533a1 1 0 01-1.6 0L5.3 12.4a1 1 0 00-.8-.4H2a2 2 0 01-2-2V2zm5 4a1 1 0 11-2 0 1 1 0 012 0zm4 0a1 1 0 11-2 0 1 1 0 012 0zm3 1a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                  </svg>
                  <span class="text-icon">Live Chat</span>
                </span>
                <span>
                  <svg class="bi bi-people-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z"/>
                    <path fill-rule="evenodd" d="M8 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z" clip-rule="evenodd"/>
                  </svg>
                  <span class="text-icon-last">Member Area</span>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="hr">
      <div class="container no-padding-left no-padding-right">
        <div class="row">
          <div class="col-md-12 no-padding-left no-padding-right">
            <div class="row">
              <div class="col-md-3 no-padding-left">
                <img src="https://i0.wp.com/alihamdan.id/wp-content/uploads/2017/12/niagahoster-logo.png" class="nav-logo" alt="niagahoster">
              </div>
              <div class="col-md-9 center-content no-padding-right">
                <div class="wrapper-nav-li">
                  <span class="nav-to-link">Hosting</span>
                  <span class="nav-to-link">Domain</span>
                  <span class="nav-to-link">Server</span>
                  <span class="nav-to-link">Website</span>
                  <span class="nav-to-link">Afiliasi</span>
                  <span class="nav-to-link">Promo</span>
                  <span class="nav-to-link">Pembayaran</span>
                  <span class="nav-to-link">Review</span>
                  <span class="nav-to-link">Kontak</span>
                  <span class="nav-to-link">Blog</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <DescriptionComponent/>
    </div>
    <div>
      <TechInfoComponent />
    </div>
  </div>
</template>

<!-- script js -->
<script>
  import DescriptionComponent from './components/description';
  import TechInfoComponent from './components/techInfo';

  export default {
    data() {
      return {
        persons: []
      };
    },
    components: {
      DescriptionComponent,
      TechInfoComponent
    },
    created() {
      // this.loadData();
    },
    methods: {
      // loadData() {
      //   axios.get("http://localhost:8000/api/person").then(response => {
      //     this.persons = response.data;
      //   });
      // },
    }
};
</script>