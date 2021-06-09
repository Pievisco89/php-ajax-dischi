const app = new Vue({

  el: '#app',

  data:{
    arrDiscs: [],
    arrGenres: [],
    arrYears:[],
    allGenres: 'all',
    apiURL: 'http://localhost/php-esercitazioni/php-ajax-dischi/api.php'
  },
  methods:{
    callAPI(){
      axios.get(this.apiURL,{
        params:{
          genre: this.allGenres,
        }
      })
      .then(resp =>{
        this.arrDiscs = resp.data.albums;
        this.arrGenres = resp.data.genres;
        this.arrYears = resp.data.years;
        console.log(this.arrDiscs);
        console.log(this.arrGenres);
        console.log(this.arrYears);
      })
      .catch(err => {
        console.log(err);
      })
    }
  },
  created(){
    this.callAPI();
  },

})