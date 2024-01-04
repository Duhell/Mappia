import './bootstrap';
import 'keen-slider/keen-slider.min.css'
import KeenSlider from 'keen-slider'


window.onload = function() {
    new KeenSlider('#carousel', {
        loop: true,
        slides: {
            origin: 'center',
            perView: 4,
            spacing: 32,
          },
        created: () => {
            console.log('created')
        },
    });
}
