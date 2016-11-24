
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>我的blog</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>

  </head>
  <body>
    @foreach ($aaa as $v)
    <div class="row">
      <div class="col-xs-10" >
        <h1>我的个人博客</h1>
      </div>
      <div class="col-xs-3">
        <ul>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
      <div class="col-xs-6">
        <h2>{{ $v->blog_title }}</h2>
        <p>
          {{ $v->blog_author }}
        </p>
        <div class="row">
          {{ $v->blog_content }}
        </div>
        <p>
          {{ $v->blog_time }}
        </p>
      </div>
    </div>
    @endforeach
  </body>
</html>
