<!-- Default Bootstrap Navbar -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Notre Blog</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{Request::is('/')?"active":""}}"><a href="/">Acceuil</a></li>
        <li class="{{request::is('articles')?'active':""}}"><a href="/articles">Articles</a></li>
        <li class="{{request::is('contact')?"active":""}}"><a href="/contact" >Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
        <li class="dropdown">
          <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            Bonjour {{Auth::user()->name}} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('posts.index')}}">Mes Articles</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{route('logout')}}">Se Déconnecter</a></li>
            @else
            <a href="{{route('login')}}" class="btn btn-default">Se Connecter</a>
            <a href="{{route('register')}}" class="btn btn-default">S'enregistrer</a>
          @endif
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
