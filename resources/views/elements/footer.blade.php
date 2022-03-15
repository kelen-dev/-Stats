<div class="footer--top">
    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-md-3 mt-3">
                <img class="footer--logo" src="{{ asset('assets/img/Logo/logo.png') }}"
                     alt="{{ route('home') }}">
            </div>
            <div class="col-md-4 mt-3">
                <div class="footer--propos">
                    <h3 class="h3">À propos de nous</h3>
                    <p>test</p>
                </div>
            </div>
            <div class="col-md-3 mt-3">
                <div class="footer--liens">
                    <h3 class="h3">Liens</h3>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <i class="fas fa-chevron-right"></i>
                            <a href="{{ route('home') }}">
                                Accueil
                            </a>
                        </li>
                        <li class="nav-item">
                            <i class="fas fa-chevron-right"></i>
                            <a href="#" role="button" data-bs-toggle="modal"
                               data-bs-target="#modalConnexion">
                                Connexion
                            </a>
                        </li>
                        <!-- Modal connexion -->
                        <div class="modal fade" id="modalConnexion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Connexion</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="InputUsername" class="form-label">Nom d'utilisateur</label>
                                                <input type="text" class="form-control" id="InputUsername" aria-label="Username">
                                            </div>
                                            <div class="mb-3">
                                                <label for="InputPassword" class="form-label">Mot de passe</label>
                                                <input type="password" class="form-control" id="InputPassword">
                                            </div>
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-principal">Se connecter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <li class="nav-item">
                            <i class="fas fa-chevron-right"></i>
                            <a href="#" role="button" data-bs-toggle="modal"
                               data-bs-target="#modalinscription">
                                Inscription
                            </a>
                        </li>
                        <!-- Modal Inscription -->
                        <div class="modal fade" id="modalinscription" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Inscription</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="InputUsername" class="form-label">Nom d'utilisateur</label>
                                                <input type="text" class="form-control" id="InputUsername" aria-label="Username">
                                            </div>
                                            <div class="mb-3">
                                                <label for="InputEmail" class="form-label">Adresse mail</label>
                                                <input type="email" class="form-control" id="InputEmail" aria-describedby="email">
                                                <div id="email" class="form-text">We'll never share your email with anyone else.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="InputPassword" class="form-label">Mot de passe</label>
                                                <input type="password" class="form-control" id="InputPassword">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-principal">S'inscrire</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <li class="nav-item">
                            <i class="fas fa-chevron-right"></i>
                            <a href="{{ route('contact.index') }}">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="social-media-links">
            <div class="rounded-social-buttons">
                <a class="social-button facebook" href="https://www.facebook.com/" target="_blank"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="social-button twitter" href="https://www.twitter.com/" target="_blank"><i
                        class="fab fa-twitter"></i></a>
                <a class="social-button linkedin" href="https://www.linkedin.com/" target="_blank"><i
                        class="fab fa-linkedin"></i></a>
                <a class="social-button youtube" href="https://www.youtube.com/" target="_blank"><i
                        class="fab fa-youtube"></i></a>
                <a class="social-button instagram" href="https://www.instagram.com/" target="_blank"><i
                        class="fab fa-instagram"></i></a>
                <a class="social-button discord" href="https://discord.kelens.fr/" target="_blank"><i
                        class="fab fa-discord"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid px-0 footer--bottom">
    <div class="row no-gutters">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="footer--copyright">
                            <div class="container">
                                Copyright &copy; {{ date('Y') }}
                                &middot;
                                <a href="https://kelens.fr/" target="_blank" rel="noopener noreferrer">KelenS</a>
                                &dash;
                                <a href="#" target="_blank">Mono</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-md-0 mt-3 text-md-right text-center footer--legal">
                        <a href="/cgu" title="mentions-legales" target="_blank">
                            Mentions légales
                        </a>
                        &dash;
                        <a href="/cgu" title="cgu" target="_blank">
                            cgu
                        </a>
                        &dash;
                        <a href="/cgv" title="cgv" target="_blank">
                            cgv
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
