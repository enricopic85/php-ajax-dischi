new Vue({
    data:{
        dischi:[],
    },
    mounted(){
        axios.get('http://localhost/php-ajax-dischi/api/dischiApi.php').then((result)=>{       
            this.dischi.push(result.data.response);
        })
    }
})