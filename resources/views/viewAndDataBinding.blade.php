<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>view and data binding</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  </head>
  <body>
      <h1><?= isset($greeting) ? "{$greeting}" : 'hello'; ?>
        <?= isset($name) ? "{$name}" : ' '; ?> </h1>

      <!-- 문자열 보간  html 주석-->
      {{-- 문자열 보간  블레이드 주석(html 소스에서 확인되지 않음) --}}
      <h1>{{  $greeting or 'Hello ' }}
          {{ $name or ' ' }} </h1>


      <ul>
        @foreach($items as $item)
          <li>{{$item}} </li>
        @endforeach
      </ul>

      @if($itemCount = count($items))
      <p> {{ $itemCount }} 종류의 과일이 있습니다 </p>
      @else
      <p> 엥~ 아무것도 없는데요!</p>
      @endif
  </body>
</html>
