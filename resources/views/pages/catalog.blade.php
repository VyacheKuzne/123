<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Католог</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kalnia:wght@100..700&display=swap" rel="stylesheet">

</head>
<body id="app">
    <header class="w-full">
        <div class="border-b-2 border-green px-[3%]">
            <div class="header flex justify-between">
                <div>
                    @include('components/nav-menu')
                </div>
                <div class="flex items-center w-full5" id="cart">
                    <div>
                        <btn-cross></btn-cross>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @include('components/main_img')
    <main class="main mx-[10%]">
        <p class="text64_36">Категории</p>
        @foreach ($genres as $field)
        <div class="gird grid-cols-2 w-full my-[5%]">
            <div class="my-[5%]">
                <b class="text36_14">{{ $field['label'] }}</b>
            </div>
            <div class="grid grid-cols-2 w-full">
            @foreach($books as $book)
            @if($book['genre'] == $field['label'])
                

            <div class="flex justify-between py-[5%]">
                <div>
                    <img src="{{asset('img/book.png')}}" class="w-full h-full" alt="Книга">
                </div>
                <div class="flex flex-col justify-between w-1/2 mx-[10%]">
                    <div class="flex flex-col justify-between h-3/5">
                        <b class="text36_14 ">{{ $book['title'] }}</b>
                        <b class="text24_12 text-green">{{ $book['author'] }}</b>
                        <div class="flex">
                            @foreach(range(1, $book['rating']) as $index)
                                <img src="{{ asset('img/star.svg') }}" class="w-[10%]" alt="звезда">
                            @endforeach                
                        </div>
                        <b class="text24_12">
                        {{ $book['rating'] }}
                        </b>
                    </div>
                    <button class="btn-green text20_10 w-full">
                       <b>Забронировать</b>
                    </button>
                </div>
            </div>
            
            @endif
            @endforeach
            </div>
        </div>
        @endforeach
    </main>
    @include('components/footer')

</body>
</html>
