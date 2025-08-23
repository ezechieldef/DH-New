<style>
    #img1-top {
        top: -0px;
        left: -50px;
        opacity: 0.4;
        height: 150px;
        mask-image: linear-gradient(to bottom right, black 0%, transparent 70%);
        -webkit-mask-image: linear-gradient(to bottom right, black 0%, transparent 70%);
    }

    #img2-top {
        top: -0px;
        right: -0px;
        height: 150px;
        opacity: 0.4;
        mask-image: linear-gradient(to bottom left, black 0%, transparent 70%);
        -webkit-mask-image: linear-gradient(to bottom left, black 0%, transparent 70%);
    }
</style>
<div class="">
    <img src="{{ asset('images/imgtop1.webp') }}" alt="" class="absolute " id="img1-top">
    <img src="{{ asset('images/imgtop2.webp') }}" alt="" class="absolute " id="img2-top">
</div>
