@include('partials._head')

<body>
@include('partials._nav')
@include('partials._messages')
{{\Illuminate\Support\Facades\Auth::check() ? "Logged In" : "Logged Out"}}
<div>
  @yield('content')

    <hr>
    <p class="text-center">Created by Yuliia Yakubyshyn</p>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@yield('scripts')
</body>
