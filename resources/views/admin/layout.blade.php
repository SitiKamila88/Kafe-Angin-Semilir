<!-- HTML Document Declaration -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta charset for UTF-8 encoding -->
    <meta charset="UTF-8">
    <!-- Dynamic page title from child views -->
    <title>@yield('title')</title>

    <!-- Tailwind CSS CDN for styling -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100">

    <!-- Admin layout without navbar -->

    <div class="p-6">
        <!-- Main content area injected from child views -->
        @yield('content')
    </div>

</body>
</html>
