<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#"><svg width="159" height="30" viewBox="0 0 159 30"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M54.76 23V9h3.4v11h6.24v3h-9.64Zm11.508 0v-2.86h2.36v-8.28h-2.36V9h8.14v2.86h-2.38v8.28h2.38V23h-8.14Zm14.893 0-5.6-14h3.54l2.7 7.14c.16.413.294.773.4 1.08.12.307.22.593.3.86.094.267.174.54.24.82.08.267.167.573.26.92h-.62a20.93 20.93 0 0 1 .68-2.3c.134-.387.3-.847.5-1.38l2.6-7.14h3.48l-5.64 14h-2.84Zm9.918 0V9h9.761v2.9h-6.46v8.2h6.66V23h-9.96Zm1.6-5.74V14.5h7.26v2.76h-7.26ZM106.09 23l-4.2-14h3.46l2.1 7.36c.093.333.173.673.24 1.02.08.333.14.653.18.96.053.307.093.593.12.86.027.253.053.467.08.64h-.44c.08-.493.147-.933.2-1.32.067-.387.14-.747.22-1.08.08-.347.18-.707.3-1.08l2.08-5.54h2.72l2.04 5.54c.16.44.293.853.4 1.24.107.387.187.76.24 1.12.067.347.12.693.16 1.04l-.4.06c.027-.24.047-.46.06-.66.013-.213.027-.413.04-.6.027-.2.053-.407.08-.62.027-.213.067-.447.12-.7.053-.267.127-.567.22-.9L118.19 9h3.38l-4.2 14h-2.6l-3.32-8.06.38.04-3.06 8.02h-2.68Zm16.663 0v-2.86h2.36v-8.28h-2.36V9h8.14v2.86h-2.38v8.28h2.38V23h-8.14Zm10.974 0V9h6.3c.894 0 1.7.193 2.42.58.734.387 1.307.92 1.72 1.6.414.667.62 1.427.62 2.28 0 .88-.206 1.673-.62 2.38a4.463 4.463 0 0 1-1.7 1.64c-.72.4-1.533.6-2.44.6h-3.06V23h-3.24Zm7.76 0-3.56-6.32 3.48-.5 3.96 6.82h-3.88Zm-4.52-7.52h2.76c.347 0 .647-.073.9-.22.267-.16.467-.38.6-.66.147-.28.22-.6.22-.96s-.08-.673-.24-.94a1.555 1.555 0 0 0-.7-.64c-.293-.147-.653-.22-1.08-.22h-2.46v3.64ZM147.37 23V9h9.76v2.9h-6.46v8.2h6.66V23h-9.96Zm1.6-5.74V14.5h7.26v2.76h-7.26Z"
                        fill="#F1F5F9"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M34.8 27.706C34.12 28.734 33.605 30 32.223 30c-2.326 0-2.452-3.587-4.78-3.587-2.327 0-2.201 3.587-4.527 3.587s-2.452-3.587-4.78-3.587c-2.327 0-2.201 3.587-4.528 3.587-2.326 0-2.452-3.587-4.78-3.587C6.5 26.413 6.628 30 4.3 30c-.731 0-1.245-.354-1.678-.84A19.866 19.866 0 0 1 0 19.24C0 8.613 8.208 0 18.333 0 28.46 0 36.667 8.614 36.667 19.24c0 3.037-.671 5.91-1.866 8.466Z"
                        fill="#FB70A9"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M34.8 27.706C34.12 28.734 33.605 30 32.223 30c-2.326 0-2.452-3.587-4.78-3.587-2.327 0-2.201 3.587-4.527 3.587s-2.452-3.587-4.78-3.587c-2.327 0-2.201 3.587-4.528 3.587-2.326 0-2.452-3.587-4.78-3.587C6.5 26.413 6.628 30 4.3 30c-.731 0-1.245-.354-1.678-.84A19.866 19.866 0 0 1 0 19.24C0 8.613 8.208 0 18.333 0 28.46 0 36.667 8.614 36.667 19.24c0 3.037-.671 5.91-1.866 8.466Z"
                        fill="#FB70A9"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M30.834 29.617c4.804-7.147 4.929-15.075.372-23.784a19.19 19.19 0 0 1 5.461 13.447c0 3.026-.695 5.89-1.934 8.434C34.028 28.738 33.493 30 32.06 30c-.49 0-.886-.148-1.226-.383Z"
                        fill="#E24CA6"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M17.35 24.038c6.376 0 9.06-3.698 9.06-8.95C26.41 9.834 22.355 5 17.35 5c-5.003 0-9.059 4.835-9.059 10.087 0 5.253 2.684 8.951 9.06 8.951Z"
                        fill="#fff"></path>
                    <path
                        d="M14.915 15.385c1.876 0 3.397-1.68 3.397-3.75 0-2.071-1.52-3.75-3.397-3.75-1.876 0-3.397 1.679-3.397 3.75 0 2.07 1.52 3.75 3.397 3.75Z"
                        fill="#030776"></path>
                    <path
                        d="M14.35 12.5c.937 0 1.698-.775 1.698-1.73 0-.957-.76-1.731-1.699-1.731-.938 0-1.699.774-1.699 1.73s.76 1.731 1.7 1.731Z"
                        fill="#fff"></path>
                </svg></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" wire:navigate href="{{ route('home') }}">User
                            (Form)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" wire:navigate href="{{ url('/post') }}">Post (Volt)</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main my-5 p-3">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
