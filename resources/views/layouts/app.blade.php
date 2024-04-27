<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:400,700,900" rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>Calculadora Paypal</title>
</head>
<body class="lg:h-screen font-poppins bg-gray-950 flex flex-col justify-between">

<header class="h-24 bg-gray-800">
    <x-header/>
</header>

<main class="contenedor mx-auto">
    {{ $slot }}
</main>

<footer class="h-36 md:h-24 bg-gray-800 grid place-items-center">
    <p class="text-white text-center w-[90%]">Esta calculadora de comisiones Paypal se ha creado sin ningún tipo de propósito comercial, solo de muestra.</p>
</footer>

</body>
</html>
