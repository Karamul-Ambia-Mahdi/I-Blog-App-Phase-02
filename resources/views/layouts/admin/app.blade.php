<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IBlog | Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-50 font-sans">
    <div class="flex h-screen overflow-hidden">

        {{-- Aside --}}
        @include('partials.admin.aside')

        <div class="flex-1 overflow-auto">

            {{-- Header --}}
            @include('partials.admin.header')

            {{-- Main --}}
            @yield('content')

        </div>
    </div>

    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
