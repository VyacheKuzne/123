<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    @vite('resources/css/app.css')

</head>
<body>
    <main class="flex flex-col">
        <div class="flex flex-col m-auto border-2 border-green rounded-[90px] px-[10%] p-[2%] my-[3% my-[4%]">
            <h1 class="font-bold text36_14 m-auto">РЕГИСТРАЦИЯ</h1>
                <form action="" class="w-full flex flex-col">
                    @csrf
                    <p class="text20_10">ФИО:</p>
                    <input type="text" class="input_searth input_searth_h63 my-[4%]">
                
                    <p class="text20_10">Номер телефона:</p>
                    <input type="text" class="input_searth input_searth_h63 my-[4%]">
            
                    <p class="text20_10">Номер телефона:</p>
                    <input type="email" class="input_searth input_searth_h63 my-[4%]">

                    <p class="text20_10">Пароль:</p>
                    <input type="password" class="input_searth input_searth_h63 my-[4%]">

                    <button class="m-auto text32_12 btn-green w-[478px] my-[4%]">
                    Зарегистрироваться
                    </button>
                </form>
            <a href="/log_in" class="font-bold text-green text36_14 m-auto hover:text-black">Войти</a>
        </div>
    </main>
</body>
</html>