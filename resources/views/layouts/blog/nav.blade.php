<nav class="navbar navbar-expand-lg bg-purple">
<div class="container-fluid">
    <a class="navbar-brand text-white fw-bold" href="/">KodaX</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active text-white fw-semibold" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-white fw-semibold" href="/quem-somos">Quem Somos</a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-white fw-semibold" href="/artigos">Artigos</a>
        </li>
    </ul>
    @php
    // se isso for verdadeiro vai enviar o $search :(senão) envia ""
        $search = (isset($search)) ? $search : "";
    @endphp
    <form class="d-flex" role="search" method="GET" action="/artigos">
        <input class="form-control me-2" type="search" name="busca" value="{{$search}}" placeholder="Buscar artigos" aria-label="Search">
        <button class="btn btn-nav text-white fw-semibold" type="submit">Buscar</button>
    </form>
    </div>
</div>
</nav>