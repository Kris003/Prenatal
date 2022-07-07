<div id="flip"
    class=" mb-4  ml-28 font-bold focus:ring-2  ring-[#E72B6F] rounded-lg text-lg px-4 py-2.5 text-center inline-flex items-center cursor-pointer">
    AZIENDA <svg class="w-6 h-6 ml-10 text-[#E72A6E]" fill="none" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
    </svg></div>
<div id="panel" class=" hidden  w-[100%] left-1 text-center  rounded shadow mb-6" data-popper-reference-hidden=""
    data-popper-escaped="" data-popper-placement="top">
    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDividerButton">
        <li>
            <div class="flex justify-center items-center">
                <a href="#" class="block px-4 py-2 hover:border-b-2 w-fit text-center border-[#E72B6F]">Dashboard</a>
            </div>
        </li>
        <div class="flex justify-center items-center">
            <li>
                <a href="#" class="block px-4 py-2 hover:border-b-2 w-fit border-[#E72B6F]">Settings</a>
            </li>
        </div>
        <div class="flex justify-center items-center">
            <li>
                <a href="#" class="block px-4 py-2 hover:border-b-2 w-fit border-[#E72B6F]">Earnings</a>
            </li>
        </div>
    </ul>

</div>

<div id="flip_2"
    class=" mb-4  ml-24 font-bold focus:ring-2  ring-[#E72B6F] rounded-lg text-lg px-4 py-2.5 text-center inline-flex items-center cursor-pointer">
    SUPPORTO <svg class="w-6 h-6 ml-10 text-[#E72A6E]" fill="none" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
    </svg></div>
<div id="panel_2" class=" hidden  w-full left-1 text-center  rounded shadow mb-6" data-popper-reference-hidden=""
    data-popper-escaped="" data-popper-placement="top">
    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDividerButton">
        <li>
            <div class="flex justify-center items-center">
                <a href="#" class="block px-4 py-2 hover:border-b-2 w-fit text-center border-[#E72B6F]">Dashboard</a>
            </div>
        </li>
        <div class="flex justify-center items-center">
            <li>
                <a href="#" class="block px-4 py-2 hover:border-b-2 w-fit border-[#E72B6F]">Settings</a>
            </li>
        </div>
        <div class="flex justify-center items-center">
            <li>
                <a href="#" class="block px-4 py-2 hover:border-b-2 w-fit border-[#E72B6F]">Earnings</a>
            </li>
        </div>
    </ul>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $("#flip").click(function() {
        $("#panel").slideToggle("slow");
    });
});

$(document).ready(function() {
    $("#flip_2").click(function() {
        $("#panel_2").slideToggle("slow");
    });
});
</script>