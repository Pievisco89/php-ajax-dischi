const app = new Vue({

  el: '#app',

  data:{
    arrDiscs: [],
  },

  created(){
    axios.get('http://localhost/php-esercitazioni/php-ajax-dischi/api.php')
      .then(resp =>{
        this.arrDiscs = resp.data;
        console.log(this.arrDiscs);
      })
      .catch(err => {
        console.log(err);
      })
  },




})