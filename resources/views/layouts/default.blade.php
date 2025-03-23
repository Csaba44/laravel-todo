<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>

<body class="p-2">
  @include("header")
  <main>
    @yield("maincontent")
  </main>
</body>

</html>