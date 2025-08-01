<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Checkout</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[linear-gradient(180deg,_#FFF_0%,_#E0ECFC_100%)] flex flex-col items-center justify-center">

    @include('components.offer-header')
    @include('components.header')
    <div class="flex flex-col items-center w-full mx-auto px-4 sm:px-6 lg:px-0">
        <div class="w-full max-w-[648px] flex flex-col items-center justify-center">
            @include("components.page-title")
            <div class="flex flex-col w-full max-w-[360px]">
                @include("components.plan-card")
                @include("components.disclaimer")
                @include("components.guarantee")
                @include("components.howWorks")
            </div>
        </div>
        @include("components.reviews")
    </div>

</body>

</html>