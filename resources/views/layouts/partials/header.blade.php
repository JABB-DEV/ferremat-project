<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{url('/')}}">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Forraje
                </a>
                <div class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('/gramineas') }}">Gram&iacute;neas</a>
                    <a class="dropdown-item" href="{{ url('/leguminosas') }}">Leguminosas</a>
                    <a class="dropdown-item" href="{{ url('/leguminosasArbustas') }}">Leguminosas arbustas</a>
            </li>
            <a class="nav-item nav-link" href="{{url('/producto')}}">Productos</a>
            <a class="nav-item nav-link" href="#">Consejos de Alimentaci&oacute;n</a>
            <a class="nav-item nav-link" href="#">Banco de conocimiento</a>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Contacto
                </a>
                <div class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('contacto')}}">Contacto</a>
            </li>
        </div>
        <form action="{{ url('/producto') }}" method="POST" enctype="multipart/form-data" class="form-inline my-2 my-lg-0">
            {{csrf_field()}}
            <div class="buscador">
                <input type="text" class="buscador-field" name="producto">
                <button class="buscador-link" id="buscador-link"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div>
</nav>
<hr class=" shadow clearfix w-100 m-0 p-0 hr-nav">