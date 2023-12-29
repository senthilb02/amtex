<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.head')
</head>
<body>
<div id="app">
<div class="container">
        @include('includes.sidebar')
        <div id="main">
        <header class="mb-3">
       @include('includes.header')
   </header>
   <div class="page-content">
           @yield('content')
    </div>
   </div>
   <footer class="row">
       @include('includes.footer')
   </footer>
</div>
</div>
</body>
</html>