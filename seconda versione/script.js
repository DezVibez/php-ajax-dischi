Vue.config.devtools = true;

const app = new Vue({
 el: '#root',
 data: {
    dischi: [],
 },
 mounted(){
    axios.get('http://localhost:8888/api/index.php').then((res)=>{
    this.dischi = res.data
    });
 }
});