new Vue({
    el:"#app",
    data:{
        dischi:[],
    },
    mounted(){
        axios.get('http://localhost/php-ajax-dischi/api/dischiApi.php').then((result)=>{       
             this.dischi=result.data;
             console.log(this.dischi);
        })
    }
})