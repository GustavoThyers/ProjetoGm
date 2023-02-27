<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Gm Embalagens</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/js/app.js">
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->

        <link href="img/favicon.ico" rel="icon">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->

    </head>
    <body>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form  method="POST" action="{{ route('login') }}">
        @csrf
        <div style="background-color:white; margin-left:450px; margin-right:450px; margin-top:120px; padding:120px; border-radius:20px">
        <!-- Email Address -->
        <div>
            <x-input-label for="email" style="margin-left:80px;" :value="__('Email')" />
            <x-text-input id="email" style="" class="mb-4"

            type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="">
            <x-input-label for="password" style="margin-left:80px;"  :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <x-primary-button class="ml-3" style="background-color: rgb(230, 32, 32); position:absolute; bottom:100px; left:750px;">
            {{ __('Log in') }}
        </x-primary-button>
        </div>

        <!-- Remember Me -->

    </form>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="/lib/easing/easing.min.js"></script>
<script src="/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="/js/main.js"></script>
</html>
