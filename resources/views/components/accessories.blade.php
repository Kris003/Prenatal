<div>


    <Section>
        <div class=" text-xs m-5 lg:ml-40">
            <a class=" hover:text-amber-500 " href="#">Home /</a>
            <a class=" hover:text-amber-500" href="#">Passeggio /</a>
            <a class=" hover:text-amber-500 " href="#">Passeggini e accessori /</a>

        </div>
        <button id="dropdownDefault" data-dropdown-toggle="dropdown"
            class="text-pink-600  absolute z-40  font-medium rounded-lg text-sm px-5  text-center inline-flex  items-center lg:mt-[-38px]  lg:px-[395px]"
            type="button">Passeggini <svg class="w-4 h-4 ml-2 text-black" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg></button>


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
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-pink-600">Passeggini</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-pink-600">Passeggini</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-pink-600">Passeggini
                        out</a>
                </li>
            </ul>
        </div>
        <!-- End Dropdown menu -->

        <div id="indicators-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="overflow-hidden relative h-96 rounded-lg sm:h-64 xl:h-80 2xl:h-96 ">
                <!-- Item 1 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0  "
                    data-carousel-item="active">
                    <img src="images\giordani.png"
                        class="block absolute top-1/2 left-44 ml-1  h-4/5 w-[320px]  -translate-x-1/2 -translate-y-1/2 border p-4 "
                        alt="...">
                </div>

                <!-- Item 2 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full  "
                    data-carousel-item>
                    <img src="images\giordani.png"
                        class="block absolute top-1/2 left-44 ml-1  h-4/5 w-[320px] -translate-x-1/2 -translate-y-1/2 border p-4 "
                        alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform  "
                    data-carousel-item>
                    <img src="images\giordani.png"
                        class="block absolute top-1/2 left-44 ml-1  h-4/5 w-[320px] -translate-x-1/2 -translate-y-1/2  border p-4"
                        alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform  "
                    data-carousel-item>
                    <img src="images\giordani.png"
                        class="block absolute top-1/2 left-44 ml-1  h-4/5 w-[320px] -translate-x-1/2 -translate-y-1/2  border p-4"
                        alt="...">
                </div>

            </div>
            <!-- Slider indicators -->
            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2 ">
                <button type="button"
                    class="w-3 h-3 indicators before:bg-[#2C5C89] after:bg-[#bbb] rounded-full hover:bg-[#2C5C89] focus:bg-[#2C5C89]"
                    aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 indicators rounded-full hover:bg-[#2C5C89] focus:bg-[#2C5C89] "
                    aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 indicators rounded-full hover:bg-[#2C5C89]  focus:bg-[#2C5C89] "
                    aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 indicators rounded-full hover:bg-[#2C5C89]  focus:bg-[#2C5C89] "
                    aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="flex absolute top-0 left-0 z-30 justify-center items-center h-full cursor-pointer group focus:outline-none"
                data-carousel-prev="">
                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10     ">
                    <svg class="w-5 h-5 mr-3 text-pink-600 sm:w-6 sm:h-6" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="hidden">Previous</span>
                </span>
            </button>
            <button type="button"
                class="flex absolute top-0 right-0 z-30 justify-center items-center h-full cursor-pointer group focus:outline-none"
                data-carousel-next="">
                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 ">
                    <svg class="w-5 h-5 ml-2 text-pink-600 sm:w-6 sm:h-6 " fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="hidden">Next</span>
                </span>
            </button>
        </div>


    </Section>
</div>

<!-- JS -->

<script>

</script>