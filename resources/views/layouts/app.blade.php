<!-- layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App</title>
    <!-- Include your CSS and JavaScript files here -->
</head>

<body>
    @include('layouts.sidebar') <!-- Adjust the path to your sidebar partial -->

    <div class="content">
        @yield('content') <!-- Your main content goes here -->
    </div>

    <!-- Include your footer or other common elements here -->
</body>

</html>