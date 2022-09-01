Vue.config.devtools = true;

const app = new Vue({
 el: '#root',
 data: {
    dischi: [],
 },
 mounted(){
    axios.get('../api/dischi.php').then((res)=>{
    this.dischi = res.data
    console.log(this.dischi)
    });
 }
});