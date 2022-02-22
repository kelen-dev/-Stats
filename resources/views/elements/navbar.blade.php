<div class="home-background">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img class="img-fluid" src="{{ asset('assets/img/logo.png') }}" alt="{{ route('home') }}"
                     class="d-lg-block d-sm-none">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @if(url()->route('home')) active @endif" aria-current="page"
                           href="{{ route('home') }}">
                            Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(url()->route('cv')) active @endif" href="{{ route('cv') }}">
                            <i class="far fa-file-pdf"> CV</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(url()->route('a-propos')) active @endif" href="{{ route('a-propos') }}">
                            <i class="fas fa-scroll"> A propos</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(url()->route('contact.index')) active @endif"
                           href="{{ route('contact.index') }}">
                            <i class="far fa-envelope"> Contact</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="box_KelenS">

            <div class="title_KelenS">
                <span class="block_KelenS"></span>
                <h1 class="h1_KelenS">Sean SEGURA<span></span></h1>
            </div>

            <div class="role">
                <div class="block_KelenS"></div>
                <p class="p_KelenS">Développeur web front-end</p>
            </div>

        </div>
    </div>

    <div id="scroll-down" class="down">
        <a href="#a-propos"><span></span>Scroll</a>
    </div>

</div>
