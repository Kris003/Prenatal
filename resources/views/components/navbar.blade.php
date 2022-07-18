<header class="py-5 md:px-10">

    <x-button_menu />

    <!-- Logo -->
    <div class="">
        <img src="images\svg\CompanyLogo.svg" alt="" class=" block mx-auto  mt-2 lg:w-9/12 lg:h-9/12   ">
    </div>
    <!-- Search bar -->

    <div class=" items-center border-b  border-gray-800 py-1 w-1/2 hidden lg:flex">
        <input
            class="appearance-none bg-transparent border-none  w-full  text-base font-normal text-black placeholder-black mr-3 py-1 px-2 "
            type="text" placeholder="Che prodotto stai cercando?" value="" name="">
        <button type="submit" class="flex-shrink-0 border-transparent py-1 px-2 rounded ">
            <svg xmlns="http://www.w3.org/2000/svg" width="22.747" height="23.312" viewBox="0 0 22.747 23.312"
                class="w-6 h-6">
                <g data-name="Group 597">
                    <path data-name="Path 686"
                        d="M9.33 16.32a6.995 6.995 0 117-7 7 7 0 01-7 7zm5.57.49a9.381 9.381 0 111.68-1.62l5.85 6.15a1.171 1.171 0 01-1.7 1.61z"
                        fill-rule="evenodd"></path>
                </g>
            </svg> </button>
    </div>



    <!-- Icons -->
    <div class="flex justify-between items-center lg:mr-12  ">
        <p class="text-[9px] font-light hidden lg:block ">PRENOTA & RITIRA <span class="flex justify-end "> IN
                NEGOZIO </span> </p>
        <img src="images\svg\LocationIcon.svg" alt="" class=" w-5 h-5  cursor-pointer   mx-1   hidden lg:flex ">
        <img src="images\svg\PersonIcon.svg" alt="" class=" w-5 h-5  cursor-pointer hidden lg:flex  mx-2   ">
        <img src="images\svg\SearchIcon.svg" alt="" class=" w-5 h-5 cursor-pointer lg:hidden  mx-3 ">
        <img src="images\svg\BagIcon.svg" alt="" class=" w-5 h-5  cursor-pointer   mx-4  ">
    </div>
    </div>
</header>


<!-- Menu link -->
<ul
    class=" flex-wrap justify-start ml-12 text-xs xl:ml-36 font-medium text-center text-gray-500 dark:text-gray-400 hidden lg:flex">
    <li class="mr-2">
        <a href="#" class="inline-block py-3 px-2 rounded-lg hover:text-[#E72B6F]  ">Abbigliamento</a>
    </li>
    <li class="mr-2">
        <a href="#" class="inline-block py-3 px-2  text-[#E72B6F] rounded-lg active" aria-current="page">Passeggio</a>
    </li>
    <li class="mr-2">
        <a href="#" class="inline-block py-3 px-2 rounded-lg hover:text-[#E72B6F] ">Auto
            e viaggio</a>
    </li>
    <li class="mr-2">
        <a href="#" class="inline-block py-3 px-2 rounded-lg hover:text-[#E72B6F] ">Casa</a>
    </li>
    <li>
        <a href="#" class="inline-block py-3 px-2 rounded-lg hover:text-[#E72B6F] ">Gioco</a>
    </li>
    <li>
        <a href="#" class="inline-block py-3 px-2 rounded-lg hover:text-[#E72B6F] ">Allattamento
            e suzione</a>
    </li>
    <li>
        <a href="#" class="inline-block py-3 px-2 rounded-lg hover:text-[#E72B6F] ">Pappa</a>
    </li>
    <li>
        <a href="#" class="inline-block py-3 px-2 rounded-lg hover:text-[#E72B6F] ">Igiene
            e benessere</a>
    </li>
    <li>
        <a href="#" class="inline-block py-3 px-2 rounded-lg hover:text-[#E72B6F] ">Promo</a>
    </li>
    <li>
        <a href="#" class="inline-block py-3 px-2 rounded-lg text-[#789A40] ">Vip
            Club</a>
    </li>

    <li>
        <a href="#" class=" inline-block py-3 pl-24 rounded-lg text-[#E72B6F] lg: xl:ml-72">Tue Prénatal</a>
    </li>

</ul>

<div class=" border-b mt-4 ml-2"></div>

<!-- Mobile Location Menu -->
<div class=" flex justify-start  text-xs m-5  lg:ml-12 xl:ml-32 ">
    <a class=" hover:text-amber-500 " href="#">Home /</a>
    <a class=" hover:text-amber-500" href="#">Passeggio /</a>
    <a class=" hover:text-amber-500 " href="#">Passeggini e accessori /</a>
</div>
<button id="dropdownDefault" data-dropdown-toggle="dropdown"
    class="text-pink-600  absolute z-40  font-medium rounded-lg text-sm px-5  text-center inline-flex  items-center md:mt-[-38px]  lg:pl-[280px] xl:pl-[360px] md:pl-[250px]"
    type="button">Passeggini <svg class="w-4 h-4 ml-2 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
    </svg>
</button>


<!-- Dropdown menu -->
<div id="dropdown" class="z-30 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700"
    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(382.4px, -45.6px, 0px);"
    data-popper-placement="top">
    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
        <li>
            <a href="#"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-pink-600">Passeggini</a>
        </li>
        <li>
            <a href="#"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-pink-600">Gemellari</a>
        </li>
        <li>
            <a href="#"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-pink-600">Accessori</a>
        </li>
    </ul>
</div>