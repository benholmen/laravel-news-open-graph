<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Open Graph: {{ $article->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
    <div class="absolute h-full flex flex-col gap-y-16 pl-16 py-16">
        <img src="{{ $article->image }}" width="800" height="586" class="h-1/4 w-auto ml-8 rotate-[6deg] border border-[#F9332B] shadow-xl rounded-md">
        <img src="{{ $article->image }}" width="800" height="586" class="h-1/4 w-auto mr-8 rotate-[0deg] border border-[#F9332B] shadow-xl rounded-md">
        <img src="{{ $article->image }}" width="800" height="586" class="h-1/4 w-auto ml-8 -rotate-[6deg] border border-[#F9332B] shadow-xl rounded-md">
    </div>

    <div class="h-full w-full flex flex-col justify-center items-end pr-16">
        <div class="relative flex justify-between rounded-lg bg-white border border-2 border-gray-200 w-[60%]">
            <img
                class="absolute left-0 top-8 -translate-x-1/2 h-32 w-auto"
                src="https://picperf.io/https://laravel-news.com/images/cube.svg"
            >

            <h2 class="p-12 pl-24 text-5xl font-bold leading-tight">{{ $article->title }}</h2>
        </div>
    </div>

    <svg
        class="absolute bottom-0 right-0 -z-10"
        width="603"
        height="419"
        viewBox="0 0 603 419"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
    >
        <g opacity=".2" filter="url(#filter0_f_4_553)">
            <circle cx="462" cy="462" r="258" fill="#F9332B"></circle>
        </g>
        <defs>
            <filter id="filter0_f_4_553" x="0" y="0" width="924" height="924" filterUnits="userSpaceOnUse"
                color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                <feGaussianBlur stdDeviation="102" result="effect1_foregroundBlur_4_553"></feGaussianBlur>
            </filter>
        </defs>
    </svg>
</body>

</html>
