<!-- layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Cafe Cerveza Payroll</title>

</head>

<body>
    @include('layouts.sidebar') <!-- Adjust the path to your sidebar partial -->

    <div class="content">
        @yield('content') <!-- Your main content goes here -->
    </div>


</body>

</html>