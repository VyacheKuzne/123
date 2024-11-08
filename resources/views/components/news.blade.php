<div class="main mx-[10%]" id="new-arrivals">
    <p class="text64_36">Новинки</p>
    <div class="gird grid-cols-2 w-full my-[5%]">
        <div class="w-full grid grid-cols-2">
            @foreach(range(1, 5) as $index)
            <div class="flex justify-between py-[5%]">
                <div>
                    <img src="{{asset('img/book.png')}}" class="w-full h-full" alt="Книга">
                </div>
                <div class="flex flex-col justify-between w-1/2 mx-[10%]">
                    <div class="flex flex-col justify-between h-3/5">
                        <b class="text36_14 ">Гамлет Макбет</b>
                        <b class="text24_12 text-green">Уильям Шекспир</b>
                        <div class="flex">
                            @foreach(range(1, 5) as $index)
                                <img src="{{ asset('img/star.svg') }}" class="w-[10%]" alt="звезда">
                            @endforeach                
                        </div>
                        <b class="text24_12">
                            5.0
                        </b>
                    </div>
                    <button class="btn-green text20_10">
                    <b class="text20_10">Забронировать</b>
                    </button>
                </div>
            </div>
            @endforeach  
        </div>
    </div>
</div>
