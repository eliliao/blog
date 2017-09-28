<!doctype html>
<html>
  <head>
    @include('partial.head')
  </head>
  <body>
    <div class="container">
      <form method="POST" action="/login">
        Email
        <input class="form-control" type="text" neme="email">
        Password:
        <input class="form-control" type="password" name="password">
        <input type="submit" class="btn btn-primary" value="登入">

        {{csrf_field()}}

      </form>
    </div>
    @include('partial.scripts')
  </body>
</html>
