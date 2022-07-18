<div class="flex justify-between items-center ">
    <main class=" ">
        <!-- This is used to open the menu -->
        <span class=" ml-3 h-5 cursor-pointer lg:hidden block" onclick="openMenu()"> <img src="images\svg\MenuIcon.svg"
                alt="" class="h-8  w-8 mb-7 relative z-55"></span>
    </main>

    <div id="side-menu" class="fixed top-0 left-[-250px] w-[240px] h-80  z-50 bg-gray-700 p-5
     flex flex-col space-y-5 text-white duration-300">
        <a href="javascript:void(0)" class="text-right text-4xl" onclick="closeMenu()">&times;</a>
        <a class="hover:text-amber-500" href="#">Mamma</a>
        <a class="hover:text-amber-500" href="#">Bambina</a>
        <a class="hover:text-amber-500" href="#">Bambino</a>
        <a class="hover:text-amber-500" href="#">Casa</a>
    </div>


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