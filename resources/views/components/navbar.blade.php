<header class="py-5 md:px-10">
        <div class="flex justify-between items-center ">
            <main class=" ">
                <!-- This is used to open the menu -->
                <span class=" ml-3 h-5 cursor-pointer lg:hidden block" onclick="openMenu()"> <img
                        src="images\svg\MenuIcon.svg" alt="" class="h-8  w-8 mb-7 relative z-55"></span>
            </main>

            <div id="side-menu" class="fixed top-0 left-[-250px] w-[240px] h-80  z-50 bg-gray-700 p-5
     flex flex-col space-y-5 text-white duration-300">
                <a href="javascript:void(0)" class="text-right text-4xl" onclick="closeMenu()">&times;</a>
                <a class="hover:text-amber-500" href="#">Mamma</a>
                <a class="hover:text-amber-500" href="#">Bambina</a>
                <a class="hover:text-amber-500" href="#">Bambino</a>
                <a class="hover:text-amber-500" href="#">Casa</a>
            </div>

            <!-- Logo -->
            <div class="">
                <img src="images\svg\CompanyLogo.svg" alt=""
                    class="w-1/2 h-1/2  block mx-auto  mt-2 lg:w-9/12 lg:h-9/12  ">
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
            <div class="flex justify-between items-center lg:mr-7 ">
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
        class=" flex-wrap justify-start ml-36 text-sm font-medium text-center text-gray-500 dark:text-gray-400 hidden lg:flex">
        <li class="mr-2">
            <a href="#" class="inline-block py-3 px-4 rounded-lg hover:text-[#E72B6F]  ">Abbigliamento</a>
        </li>
        <li class="mr-2">
            <a href="#" class="inline-block py-3 px-4  text-[#E72B6F] rounded-lg active"
                aria-current="page">Passeggio</a>
        </li>
        <li class="mr-2">
            <a href="#" class="inline-block py-3 px-4 rounded-lg hover:text-[#E72B6F] ">Auto
                e viaggio</a>
        </li>
        <li class="mr-2">
            <a href="#" class="inline-block py-3 px-4 rounded-lg hover:text-[#E72B6F] ">Casa</a>
        </li>
        <li>
            <a href="#" class="inline-block py-3 px-4 rounded-lg hover:text-[#E72B6F] ">Gioco</a>
        </li>
        <li>
            <a href="#" class="inline-block py-3 px-4 rounded-lg hover:text-[#E72B6F] ">Allattamento
                e suzione</a>
        </li>
        <li>
            <a href="#" class="inline-block py-3 px-4 rounded-lg hover:text-[#E72B6F] ">Pappa</a>
        </li>
        <li>
            <a href="#" class="inline-block py-3 px-4 rounded-lg hover:text-[#E72B6F] ">Igiene
                e benessere</a>
        </li>
        <li>
            <a href="#" class="inline-block py-3 px-4 rounded-lg hover:text-[#E72B6F] ">Promo</a>
        </li>
        <li>
            <a href="#" class="inline-block py-3 px-4 rounded-lg text-[#789A40] ">Vip
                Club</a>
        </li>
        <div class="ml-40 ">
            <li>
                <a href="#" class="inline-block py-3 px-4 rounded-lg text-[#E72B6F] ml-1  ">Tue Prénatal</a>
            </li>
        </div>
    </ul>

    <div class=" border-b mt-4 ml-2 "></div>

     <script>
        var sideMenu = document.getElementById('side-menu');

        function openMenu() {
            sideMenu.classList.remove('left-[-250px]');
            sideMenu.classList.add('left-0');
        }

        function closeMenu() {
            sideMenu.classList.remove('left-0');
            sideMenu.classList.add('left-[-250px]');
        }

    </script>