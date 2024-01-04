<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Mappia' }}</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body>
        @livewire('nav-bar-component')
        {{ $slot }}
        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded',()=>{
                let navbar = document.getElementById('navbar');
                let navbartext = document.getElementById('navbartext');

                window.onscroll = ()=>{
                    if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
                        navbar.style.backgroundColor = "white";
                        navbartext.style.color = "black";
                    }else{
                        navbartext.style.color = "white";
                        navbar.style.backgroundColor = "transparent";
                    }
                }
            })
        </script>
        <script>
            document.addEventListener('DOMContentLoaded',()=>{
                let currentImageIndex = 0;
                const images = document.querySelectorAll('#carousel img');

                setInterval(() => {
                    images[currentImageIndex].classList.remove('active');
                    currentImageIndex = (currentImageIndex + 1) % images.length;
                    images[currentImageIndex].classList.add('active');
                }, 3000);
            })

        </script>
    </body>
</html>
