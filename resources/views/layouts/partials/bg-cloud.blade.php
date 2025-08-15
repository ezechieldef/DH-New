@push('styles')
    <style>
        .bg-cloud {
            z-index: -1;
            height: 100vh;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background: linear-gradient(to bottom, #6dc8fc 0%, transparent 100%);
            /* background: linear-gradient(to bottom, #89cff7 0%, transparent 100%); */
            background-size: cover;
        }

        .bg-cloud img {
            animation: drift 10s linear infinite;
        }

        .bg-cloud img:nth-child(2) {
            animation: drift 15s linear infinite reverse;
            /* l'autre dans le sens inverse */
        }

        @keyframes drift {
            0% {
                transform: translateX(0) translateY(0);
            }

            50% {
                transform: translateX(50px) translateY(-10px);
            }

            100% {
                transform: translateX(0) translateY(0);
            }
        }
    </style>
@endpush

<div class="bg-cloud">
    <img src="{{ asset('images/cloud3.webp') }}" style="max-height: 250px;"
        class=" opacity-80 absolute bottom-[0] left-[-10%] " alt="">
    <img src="{{ asset('images/cloud1.webp') }}" style="max-height: 250px;" class="absolute top-[-5%] right-0 opacity-60"
        alt="">
</div>
