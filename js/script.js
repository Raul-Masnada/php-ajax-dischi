function init(){
    new Vue({
        el: '#app',
        data: {
            albums: '',
        },
        mounted(){
            axios.get('js/data.php')
                 .then(data =>{
                     this.albums = data['data'];
                     console.log(this.albums);
                 })
        },
    })
}

document.addEventListener('DOMContentLoaded',init)
