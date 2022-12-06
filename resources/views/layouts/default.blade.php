<!doctype html>
<html>
<head>
   @include('includes.html.head')
</head>
<body>
<div class="container">
   <header class="row">
       @include('includes.parts.header')
   </header>
   <div id="main" class="row">
           @yield('content')
   </div>
   <footer class="row">
       @include('includes.parts.footer')
   </footer>
</div>
</body>
</html>