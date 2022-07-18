<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <x-tags />

        </div>
        <div class="swiper-slide">
            <x-tags />

        </div>
        <div class="swiper-slide">
            <x-tags />

        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<script>
var swiper = new Swiper('.mySwiper', {  
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        simulateTouch:false,
        
    },
    

});

</script>

<style>



</style>