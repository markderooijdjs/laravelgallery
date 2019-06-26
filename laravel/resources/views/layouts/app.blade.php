<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.3/css/foundation.css"> 
    <title>Gallery app</title>
</head>
<body>
    @include('inc.topbar')
<div class="row">
    @include('inc.messages')
    @yield('content')
</div>
    
</body>
</html>