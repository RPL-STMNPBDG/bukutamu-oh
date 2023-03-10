<!DOCTYPE html>
<html>
    <head>
        <title>Buku Tamu Open House Rekayasa Perangkat Lunak</title>
        @vite('resources/css/app.css')
        <script src="https://kit.fontawesome.com/a76dfacc76.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    </head>
    <body oncontextmenu="return false" class="h-screen w-screen select-none flex flex-col scroll-smooth overflow-y-auto scrollbar-thin scrollbar-h-1.5 scrollbar-thumb-yellow-500 scrollbar-track-transparent scrollbar-thumb-rounded-full">
        @yield('content')
    </body>
    <script>
        const modal = document.getElementById('myModal');
        const btn = document.getElementById('myBtn'); // Ambil tombol yang membuka modal
        const closeBtn = document.querySelector('.close'); // Ambil tombol close pada modal

        // Ketika tombol dibuka diklik, tampilkan modal
        btn.addEventListener('click', function() {
            modal.classList.remove('hidden');
        });

        // Ketika tombol close pada modal diklik, sembunyikan modal
        closeBtn.addEventListener('click', function() {
            modal.classList.add('hidden');
        });
    </script>
    <script>
        document.addEventListener('keydown', function(event) {
        if (event.keyCode === 123) {
            event.preventDefault();
        }

        else if (event.key === 'F11') {
            event.preventDefault();
        }

        else if(event.ctrlKey && (event.key === '=' || event.key === '-' || event.key === 'u')) {
            event.preventDefault();
        }
    });
    </script>
</html>