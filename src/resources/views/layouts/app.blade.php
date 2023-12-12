<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashionably Late</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__logo">Fashionably Late</div>
            <div class="header__button">
                @yield('button')
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <script>
        const modal = document.querySelector('.js-modal'),
            open = document.querySelector('.js-modal-open'),
            close = document.querySelector('.js-modal-close');

        function modalOpen() {
            modal.classList.add('is-active');
        }
        open.addEventListener('click', modalOpen);

        function modalClose() {
            modal.classList.remove('is-active');
        }
        close.addEventListener('click', modalClose);

        function modalOut(e) {
            if (e.target == modal) {
                modal.classList.remove('is-active');
            }
        }
        addEventListener('click', modalOut);
    </script>
</body>

</html>
