<!DOCTYPE html>
<html>
   <head>
      <title>@yield('title')</title>
   </head>
   <body>
      @section('sidebar')
      <header>
         <h1 class="h3">Первый заголовок</h1>
         <div>Рамка шапки</div>
         <link rel="stylesheet" href="style.css">
         <span>Выше подключение бутстрапа</span>
      </header>
      @show

   </body>
</html>