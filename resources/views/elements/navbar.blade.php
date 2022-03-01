<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img class="img-fluid" src="{{ asset('assets/img/Logo/logo.png') }}" alt="{{ route('home') }}"
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
                <a class="nav-link @if(url()->route('r6')) active @endif" href="{{ route('r6') }}">
                    <svg viewBox="0 0 225.315 465.853" class="icon" data-v-76671520="">
                        <path
                            d="M224.773 347.138c-.141-26.448.028-52.893-.036-79.341-.031-13.195.066-26.389.058-39.583-.004-6.542.61-13.067.458-19.602-.035-1.5.027-3.008-.073-4.505-.112-1.656-.397-3.315-.636-4.957-.445-3.066-.839-6.228-2.025-9.114-1.094-2.662-2.443-5.455-4.048-7.847-1.623-2.417-3.648-4.533-5.728-6.56-4.454-4.34-9.597-7.556-14.966-10.631-5.495-3.147-11.265-5.546-17.274-7.516-3.059-1.003-6.248-1.556-9.415-2.091-3.151-.533-6.347-1.14-9.544-1.28-6.56-.289-13.188-.028-19.753.024-3.291.026-6.598-.018-9.885.149-3.149.159-6.297.53-9.434.841-6.153.611-12.329 1.844-17.872 4.649-2.629 1.331-4.85 2.86-6.991 4.895-.2.19-.475.281-.733.361-.419.13-.47.317-.678-.124-.332-.702-.292-1.247-.167-2.003.271-1.642.189-3.318.19-4.978.005-13.22-.013-26.44-.013-39.661l-.002-19.895c0-2.841-.408-5.874.294-8.659.716-2.839 3.121-4.238 5.493-5.642 4.897-2.897 11.354-2.938 16.782-1.784 2.736.582 5.357 1.656 7.659 3.255 2.415 1.677 2.89 4.04 2.942 6.824.124 6.504-.117 13.013-.078 19.518.02 3.284.106 6.568.341 9.844.23 3.198.062 6.404.009 9.605-.012.709.007 1.393-.148 2.088-.058.257-.184.649-.038.901.357.625 2.562.274 3.104.274h29.965c13.132 0 26.254-.004 39.388-.005l19.846-.002c1.14 0 2.812.326 2.853-1.241.044-1.68.009-3.361.026-5.042.033-3.283.08-6.565.124-9.848.089-6.57.1-13.139.13-19.71.031-6.586.099-13.188-.555-19.75-.323-3.246-.785-6.484-1.203-9.719-.396-3.068-.915-6.052-1.828-9.012-.911-2.955-1.632-6.025-2.77-8.901-1.141-2.881-2.596-5.666-3.97-8.44-1.375-2.775-3.225-5.324-5.025-7.835-1.802-2.513-3.66-5.053-5.938-7.16-4.578-4.232-9.437-8.346-14.879-11.429-5.385-3.051-11.165-5.401-17.016-7.369-2.937-.987-5.911-1.988-8.917-2.739-3.091-.772-6.229-1.374-9.351-2.008-6.244-1.269-12.44-2.41-18.786-3.032-6.381-.625-12.812-1.12-19.222-1.287C102.303-.28 89.296 1.367 76.36 3.507c-12.327 2.039-24.671 5.305-35.784 11.12-5.534 2.896-10.71 6.208-15.417 10.333a66.177 66.177 0 00-11.965 13.889c-1.639 2.557-2.855 5.283-4.165 8.013-1.347 2.809-2.699 5.537-3.563 8.541-.856 2.976-1.919 5.932-2.555 8.962-.654 3.117-1.268 6.242-1.653 9.406C-.32 86.724.016 99.883.013 112.906l-.007 39.992a533110.029 533110.029 0 00.01 219.955c.001 6.531-.236 13.12.285 19.637.512 6.402 1.801 13.002 3.706 19.134.938 3.019 2.015 5.999 3.33 8.877 1.299 2.843 2.979 5.499 4.641 8.138 3.302 5.24 7.913 9.478 12.425 13.672 4.416 4.104 9.936 7.071 15.31 9.714 5.753 2.829 11.692 4.85 17.8 6.751 6.079 1.894 12.274 3.212 18.582 4.066 6.344.859 12.759 1.808 19.153 2.175 6.516.375 13.037.838 19.565.836 6.627-.003 13.128-.712 19.716-1.315 3.191-.293 6.371-.517 9.521-1.115 3.206-.608 6.425-1.186 9.613-1.877 3.167-.687 6.257-1.736 9.343-2.717 2.979-.946 5.937-1.959 8.832-3.137 5.753-2.341 11.467-4.934 16.811-8.12 2.668-1.591 5.13-3.481 7.613-5.339 2.517-1.882 5.023-3.799 7.319-5.948 4.359-4.081 8.095-8.951 11.13-14.085a74.385 74.385 0 004.275-8.376c1.199-2.783 2.013-5.825 2.933-8.714 1.975-6.196 2.655-12.738 3.055-19.201.395-6.386-.043-12.716-.099-19.102-.056-6.556-.068-13.113-.102-19.669-.05-9.367.04 7.605 0 0zm-45.625-72.971c.062 2.491.237 5.897-2.012 7.597-1.049.793-2.568 1.07-3.827 1.34-1.561.335-3.146.531-4.726.747-6.371.87-12.661 2.356-18.993 3.466-3.205.562-6.45 1.054-9.609 1.84-2.354.585-5.505 1.349-6.751 3.668-.646 1.203-.802 2.691-.972 4.025-.211 1.655-.284 3.324-.293 4.99-.016 3.217.144 6.433.149 9.65.006 3.279.013 6.56.005 9.84-.004 1.538-.019 3.076-.021 4.613-.002 1.211.001 2.56-.877 3.506-.8.862-2.231 1.697-3.381 1.961-.589.136-1.202.026-1.797.109-.901.125-1.804.235-2.704.36-3.148.437-6.02 1.376-8.956 2.564-2.522 1.02-5.083 2.077-6.742 4.339-1.647 2.245-2.398 5.139-2.654 7.875-.295 3.166-.11 6.408-.11 9.585v9.933c.001 13.174.047 26.296.035 39.497-.001 1.6-.003 3.199-.006 4.799-.002 1.285-.051 2.617-.707 3.763-1.478 2.583-4.95 2.823-7.537 3.423-5.867 1.359-12.377 3.651-18.379 1.635-2.794-.938-4.825-2.939-6.76-5.068-.823-.905-.266-2.391-.103-3.443.256-1.659.489-3.322.695-4.989.812-6.543 1.179-13.117 1.26-19.709.082-6.636-.07-13.271-.086-19.906-.016-6.648.034-13.298.045-19.946.021-13.301.018-26.602.001-39.903-.008-6.65-.019-13.301-.032-19.951-.013-6.623.126-13.207-.64-19.796-.349-2.998-1.477-5.783-1.071-8.861.375-2.842 1.904-5.492 3.803-7.586 1.92-2.119 4.194-3.548 6.992-4.187 3.04-.693 6.244-.767 9.35-.784 3.262-.018 6.521.118 9.783.106 1.418-.005 2.181.844 3.007 1.897.984 1.254 1.835 2.597 2.776 3.882 1.377 1.881 3.227 3.437 5.549 3.946 2.856.625 5.915-.216 8.671-.944 5.955-1.574 11.765-3.751 17.51-5.961 2.99-1.15 5.974-2.445 9.058-3.323 3.013-.857 5.963-1.966 9.011-2.652 5.023-1.129 11.009-3.172 15.743-.078 4.739 3.097 5.712 9.432 6.12 14.626.458 5.825.039 11.67.183 17.505.048 1.911-.179-7.259 0 0z"
                            data-v-76671520="">
                        </path>
                        <path
                            d="M122.04 295.667c1.531-1.358 4.388-.477 5.601.833.408.44.749.936 1.073 1.438.398.615.428 1.208.521 1.923.216 1.635.392 3.248.412 4.898.083 6.498.073 13.022-.468 19.503-.208 2.489-3.376 4.021-5.532 4.327-3.106.44-6.463.135-9.592.059-2.501-.062-5.713.229-7.327-2.126-.856-1.249-.841-2.572-.854-4.024-.015-1.672-.03-3.344-.018-5.016.02-2.736-.191-5.779.83-8.37.917-2.329 2.807-4.621 5.054-5.768s5.228-1.436 7.672-.882c1.443.327 2.891.744 4.305 1.18.692.214 1.381.439 2.081.629.906.245 1.377.054 2.257-.147-.273-.83-.438-1.392-.984-2.098a240.32 240.32 0 00-1.655-2.114c-1.119-1.419-2.251-2.829-3.376-4.245.913-.81 1.867 2.352 0 0z"
                            data-v-76671520="">
                        </path>
                    </svg>
                    Rainbow Six
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(url()->route('fortnite')) active @endif" href="{{ route('fortnite') }}">
                    <svg viewBox="0 0 3.885 9.629" class="icon" data-v-76671520="">
                        <path
                            d="M3.883.016C3.713-.005.127-.005 0 .016v9.613h.106a10.284 10.284 0 011.125-.17 1.08 1.08 0 00.467-.106c.106-.064.255 0 .361-.106V5.788a.078.078 0 01.085-.085h.212a3.417 3.417 0 01.806 0h.255c0-.658.042-1.316.042-1.995H2.186c-.085 0-.106-.021-.106-.106V2.286a.527.527 0 01.021-.17h1.592c.063-.763.127-1.421.19-2.1z"
                            data-v-76671520="">
                        </path>
                    </svg>
                    Fortnite
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(url()->route('lol')) active @endif" href="{{ route('lol') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon" data-v-76671520="">
                        <path data-name="Path 3807"
                              d="M5.6 2a.458.458 0 00-.4.5.367.367 0 00.1.3l1.3 1.7v15.2l-1.7 1.7a.377.377 0 00.1.6h13.4a.758.758 0 00.4-.2l2.3-2.3a.377.377 0 00-.1-.6.367.367 0 00-.3-.1h-9.5V2.5a.472.472 0 00-.5-.5zM12 3.8v.9a8.237 8.237 0 018.2 8.2 7.955 7.955 0 01-1.7 5h1.1a8.9 8.9 0 001.5-5A9.133 9.133 0 0012 3.8zm0 1.8v12.3h5.3a7.479 7.479 0 002-5A7.341 7.341 0 0012 5.6zm-6.4.8a9.519 9.519 0 00-2.7 6v1.3a9.269 9.269 0 002.7 5.7V18a8.147 8.147 0 01-1.8-5.1 7.754 7.754 0 011.8-5.1V6.4zm0 3a7.3 7.3 0 00-.9 3.5 6.756 6.756 0 00.9 3.5v-7z"
                              data-v-76671520="">
                        </path>
                    </svg>
                    League of Legends
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(url()->route('valorant')) active @endif" href="{{ route('valorant') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon" data-v-76671520="">
                        <path
                            d="M2.2 4l.1.1c.2.3 11.8 14.8 12.8 16v.1a.1.1 0 01-.1.1H8.8a.52.52 0 01-.4-.2c-.2-.2-4.4-5.4-6.3-7.9A.31.31 0 002 12V4.1a.349.349 0 01.2-.1zm19.8.2c0-.1-.1-.1-.1-.2h-.1l-.2.2c-.9 1.1-8.1 10.1-8.3 10.3l-.1.1c0 .1 0 .1.1.1h6.2c.1 0 .2-.1.3-.2l.2-.2c.5-.7 1.7-2.2 1.8-2.3 0-.1 0-.1.1-.2v-.1c.1-2.4.1-4.9.1-7.5z"
                            data-v-76671520="">
                        </path>
                    </svg>
                    Valorant
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(url()->route('battlefield')) active @endif" href="{{ route('battlefield') }}">
                    <svg viewBox="0 0 96.334 125.333" class="icon" data-v-76671520="">
                        <path d="M0 0l46 125.333h5L96.334 0H72L48.167 68.333 23.667 0" data-v-76671520=""></path>
                    </svg>
                    Battlefield
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(url()->route('a-propos')) active @endif" href="{{ route('a-propos') }}">
                    A propos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(url()->route('contact.index')) active @endif"
                   href="{{ route('contact.index') }}">
                    Contact
                </a>
            </li>
        </ul>
    </div>
</nav>
