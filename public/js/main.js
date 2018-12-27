class Carousel{
    
    
    constructor(element, options = {}){
        console.log('salut')
    }

}

document.addEventListener('DomContentLoaded', function(){

    new Carousel(document.querySelector('#carousel'), {
        slidesToScroll:3,
        slidesVisible:3,
    })
})
