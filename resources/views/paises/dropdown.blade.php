<!-- dropdown.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel Dependent Dropdown  Tutorial With Example</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{!!asset('/js/app.js')!!}"></script> 
  </head>
  <body>
    <div class="container">
    <h2>Laravel Dependent Dropdown  Tutorial With Example</h2>
            <div class="form-group">
                <label for="country">Select Country:</label>
                <select name="country" class="form-control" style="width:250px">
                    <option value="">--- Select Country ---</option>
                    @foreach ($countries as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="state">Select State:</label>
                <select name="state" class="form-control"style="width:250px">
                <option>--State--</option>
                </select>
            </div>
      </div>
  </body>
  <script type="text/javascript" src="{{asset('/js/paises.js') }}"></script>
</html>