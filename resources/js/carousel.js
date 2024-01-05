import 'keen-slider/keen-slider.min.css'
import KeenSlider from 'keen-slider'

window.onload = ()=>{

    const partners_carousel =  new KeenSlider('#carousel', {
        loop: true,
        slides: {
            origin: 'center',
            perView: 4,
            spacing: 16,
          }
    });

    setInterval(() => {
        partners_carousel.next()
    }, 3000);

    const news_carousel = new KeenSlider('#news_slider',{
        loop: true,
        slides: {
            origin : 'center',
            perView: 1.25,
            spacing: 16
        },
        breakpoints:{
            '(min-width: 1024px)': {
                slides:{
                    origin:'auto',
                    perView: 2.5,
                    spacing: 32
                }
            }
        }
    })

    const prev_news = document.getElementById('news_prev');
    const next_news = document.getElementById('next_news');

    prev_news.addEventListener('click',()=>news_carousel.prev())
    next_news.addEventListener('click',()=>news_carousel.next())


}
