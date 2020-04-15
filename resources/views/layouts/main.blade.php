<!DOCTYPE html>
<html lang="en">

@include('_head')


  <body>
@include('_nav')
@include('_messages')

    <div class="container">

    @yield('content')
@include('_footer')


    </div> <!-- end of .container -->
@include('_javascript')

  </body>

</html>
