import 'keen-slider/keen-slider.min.css'
import KeenSlider from 'keen-slider'
window.onload = ()=>{
    new KeenSlider('#carousel', {
        loop: true,
        slides: {
            origin: 'center',
            perView: 4,
            spacing: 16,
          },
        created: () => {
            console.log('created')
        },
    });
}
