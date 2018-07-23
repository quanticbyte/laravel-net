<nav class="navbar navbar-expand-lg navbar-dark bg-control-dark">
  <a class="navbar-brand" href="./"><b>{{ config('app.name', 'Laravel') }}</b></a>
  <a class="text-white">Usuari : {{ Auth::user()->name }}</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="btn btn-outline-danger mb-3 mb-md-0 ml-md-3" href="{{ route('logout') }}" 
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-outline-info mb-3 mb-md-0 ml-md-3" href="#" id="menu-toggle">OCULTAR</a>
        </li>
    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
    </form>
  </div>
</nav>