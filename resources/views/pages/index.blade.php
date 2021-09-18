<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ampeire Edgar: Portifolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset("images/identity.jpg") }}">
    <link rel="stylesheet" href="{{ asset("css/all.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
</head>
<body>
<header class="top">
    <nav class="p-5">
        <ul class="flex justify-center items-center uppercase font-medium text-white">
            <li class="border border-8 rounded-2xl rounded border-green-500"><img class="rounded-2xl w-24"
                                                                                  src="{{ asset("images/identity.jpg") }}"
                                                                                  alt="Logo"></li>
            <li class="bg-green-500 py-2 px-10 hover:bg-green-900 border-b border-transparent hover:border-white"><a
                    href="#">Who am i</a></li>
            <li class="bg-green-500 py-2 px-10 hover:bg-green-900 border-b border-transparent hover:border-white"><a
                    href="#">Who i do</a></li>
            <li class="bg-green-500 py-2 px-10 hover:bg-green-900 border-b border-transparent hover:border-white"><a
                    href="#">Projects</a></li>
            <li class="bg-green-500 py-2 px-10 hover:bg-green-900 border-b border-transparent hover:border-white"><a
                    href="#">Get in touch</a></li>
        </ul>
    </nav>

    @include('components/social');

    {{--        <div class="triangle">--}}
    {{--            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">--}}
    {{--                <path d="M1200 0L0 0 598.97 114.72 1200 0z" class="shape-fill"></path>--}}
    {{--            </svg>--}}
    {{--        </div>--}}
    <div class="wave">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path
                d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                class="shape-fill"></path>
        </svg>
    </div>
</header>
<div class="w-full mx-auto about p-10">
    <h1 class="font-bold text-xl text-center py-5">About Me</h1>
    <div class="flex justify-center">
        <img class="w-1/3" src="{{ asset("images/ampeire.jpg") }}" alt="Ampeire Edgar">
        <div class="w-1/3 p-5">
            <p class="pb-1">My name is Ampeire Edgar, from Kabale District, Uganda. I have a Bachelor's in Information
                Technology and
                Computing from Kyambogo University.</p>
            <p class="pb-1"> Due to various challenges in my community, i picked interest in programming, with a goal of
                using technology to solve common community problems. </p>

            <p class="p-1">Am a web developer, as well as a Mobile app developer, with Graphics design skills. Looking
                to better the world by working and collaborating with other people with similar goals</p>
        </div>
    </div>
</div>

<div>
    <h1 class="font-bold text-xl text-center py-5">My Projects</h1>
</div>

<div class="w-1/2 mx-auto get-in-touch">
    <h1 class="font-bold text-xl text-center py-5">Get In Touch / Hire Me</h1>
    <form id="get-in-touch-form">
        <div class="w-full mx-auto mb-4 rounded-xl border-green-500 border h-10 flex items-center">
            <i class="fas fa-user text-green-900 px-2"></i>
            <input class="h-full flex-1 rounded-r-xl outline-none" type="text" name="name"
                   placeholder="Enter your name">
        </div>
        <div class="w-full mx-auto mb-4 rounded-xl border-green-500 border h-10 flex items-center">
            <i class="fas fa-envelope text-green-900 px-2"></i>
            <input class="h-full flex-1 rounded-r-xl outline-none" type="text" name="email"
                   placeholder="Enter your email">
        </div>
        <div class="w-full mx-auto mb-4 rounded-xl border-green-500 border h-10 flex items-center">
            <i class="fas fa-house-user text-green-900 px-2"></i>
            <input class="h-full flex-1 rounded-r-xl outline-none" type="text" name="company"
                   placeholder="Enter your company name">
        </div>
        <div class="w-full mx-auto mb-4 rounded-xl border-green-500 border flex items-start pt-2">
            <i class="fas fa-comment text-green-900 px-2"></i>
            <textarea class="h-full flex-1 rounded-r-xl outline-none" rows="4" name="message"
                      placeholder="Enter your message"></textarea>
        </div>

        <div class="w-full mx-auto mb-4 rounded-xl h-10">
            <input class="h-full w-full rounded-xl bg-green-900 text-white block" name="submit" type="submit"
                   value="Submit">
        </div>
    </form>
</div>

<footer class="bg-green-900">
    <div class="flex justify-around">
        <section class="p-7">
            <ul>
                <li><h1 class="text-white py-2">Important Links</h1></li>
                <li class="ml-2 text-blue-200 arrow"><a href="#">Who am i</a></li>
                <li class="ml-2 text-blue-200 arrow"><a href="#">Projects</a></li>
                <li class="ml-2 text-blue-200 arrow"><a href="#">Get In Touch</a></li>
                <li class="ml-2 text-blue-200 arrow"><a href="#">What i do</a></li>
            </ul>
        </section>

        <section class="p-7 platforms">
            <h1 class="text-white py-2">Platforms and Languages i use</h1>
            <div class="grid grid-cols-4 grid-rows-3 gap-2">
                <img class="w-10 h-10 bg-white rounded" src="{{ asset("images/platforms/html.png") }}" alt="Platform">
                <img class="w-10 h-10 bg-white rounded" src="{{ asset("images/platforms/css.png") }}" alt="Platform">
                <img class="w-10 h-10 bg-white rounded" src="{{ asset("images/platforms/javascript.png") }}"
                     alt="Platform">
                <img class="w-10 h-10 bg-white rounded" src="{{ asset("images/platforms/jquery.png") }}" alt="Platform">
                <img class="w-10 h-10 bg-white rounded" src="{{ asset("images/platforms/php.png") }}" alt="Platform">
                <img class="w-10 h-10 bg-white rounded" src="{{ asset("images/platforms/laravel.png") }}"
                     alt="Platform">
                <img class="w-10 h-10 bg-white rounded" src="{{ asset("images/platforms/bootstrap.png") }}"
                     alt="Platform">
                <img class="w-10 h-10 bg-white rounded" src="{{ asset("images/platforms/tailwind.png") }}"
                     alt="Platform">
                <img class="w-10 h-10 bg-white rounded" src="{{ asset("images/platforms/vuejs.png") }}" alt="Platform">
                <img class="w-10 h-10 bg-white rounded" src="{{ asset("images/platforms/flutter.png") }}"
                     alt="Platform">
                <img class="w-10 h-10 bg-white rounded" src="{{ asset("images/platforms/dart.png") }}" alt="Platform">
                <img class="w-10 h-10 bg-white rounded" src="{{ asset("images/platforms/kotlin.png") }}" alt="Platform">

            </div>

        </section>

        <section class="p-7">
            <ul>
                <li><h1 class="text-white py-2">Contact</h1></li>
                <li class="ml-2 text-blue-200">Tel: +256 782 592 446 / +256 756 373 400</li>
                <li class="ml-2 text-blue-200"><a data-auto-recognition="true" href="mailto:ampeireedgar5@gmail.com">Email:
                        ampeireedgar5@gmail.com</a></li>
            </ul>

            @include('components/social');
        </section>
    </div>

    <div class="bg-black p-5 copyright">
        <p class="text-center text-white">&copy; Ampeire Edgar 2021 All rights reserved.</p>
    </div>
</footer>


<script type="text/javascript" src="{{ asset("js/app.js") }}"></script>
</body>
</html>
