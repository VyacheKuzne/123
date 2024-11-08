<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    @vite('resources/css/app.css')
    
</head>
<body  id="app">
    <header class="w-full">
        <div class="border-b-2 border-green px-[3%]">
            <div class="header grid  grid-cols-[20%_40%_40%]">
                @include('components/nav-menu')
                <div class="flex justify-around col-span-1 ">
                <p class="text20_10"><a href="/catalog">КАТАЛОГ</a></p>
                <p class="text20_10"><a href="#new-arrivals">НОВИНКИ</a></p>
                    <p class="text20_10"><a href="#revies">ОТЗЫВЫ</a></p>
                </div>
                <div class="flex items-center w-full5" id="cart">
                    <div>
                        <btn-cart></btn-cart>
                    </div>
                    <form class="w-full relative">
                        @csrf
                        <input type="text" name="searth-input" class="input_searth  input_searth_h70 text32_12
                         w-full" placeholder="Поиск">
                    </form>
                </div>
            </div>
        </div>
    </header>

   

    @vite('resources/js/app.js')
</body>
</html>