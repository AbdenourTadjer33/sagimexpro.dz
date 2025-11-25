<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#ffffff">
    <meta
        name="Sagimex Pro - entreprise spécialisée qui capitalise 25 and d'éxpreience dans le consulting et L’approvisionnement des entreprise dans le domaine"
        content="Sagimex Pro - entreprise spécialisée qui capitalise 25 and d'éxpreience dans le consulting et L’approvisionnement des entreprise dans le domaine">
    <meta name="title" property="og:title"
        content="Sagimex Pro - entreprise spécialisée qui capitalise 25 and d'éxpreience dans le consulting et L’approvisionnement des entreprise dans le domaine">
    <meta name="description" property="og:description"
        content="Sagimex Pro - entreprise spécialisée qui capitalise 25 and d'éxpreience dans le consulting et L’approvisionnement des entreprise dans le domaine">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://sagimexpro.dz/">
    <meta property="og:title" content="sagimex pro">
    <meta property="og:image" content="/logo-min.png">
    <meta property="og:site_name" content="sagimex pro">
    <meta property="og:description"
        content="SAGIMEX PRO est une entreprise spécialisée, qui capitalise 25 and d'éxpreience dans le consulting et L’approvisionnement des entreprise dans le domaine">
    <meta name="keywords"
        content="sagimex pro, sagimex pro distribution, Vente de matériels et consommables informatique, Bureautiques,  Mobilier de bureau, Service clientèle, Assistance IT, Étude, installation et mise en service des réseaux informatiques et téléphoniques, Étude, installation et mise au point des systèmes d’alarme sécurité vidéosurveillance et contrôle d’accès">
    <meta name="google-site-verification" content="lHv82Yhx94mBOBYCpPrnHPqHsWdgOCGrB7-62NIP2tk" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site"
        content="@Sagimex Pro - entreprise spécialisée qui capitalise 25 and d'éxpreience dans le consulting et L’approvisionnement des entreprise dans le domaine">
    <meta name="twitter:title"
        content="Sagimex Pro - entreprise spécialisée qui capitalise 25 and d'éxpreience dans le consulting et L’approvisionnement des entreprise dans le domaine">
    <meta name="twitter:description"
        content="Sagimex Pro - entreprise spécialisée qui capitalise 25 and d'éxpreience dans le consulting et L’approvisionnement des entreprise dans le domaine">
    <meta name="twitter:creator"
        content="@Sagimex Pro - entreprise spécialisée qui capitalise 25 and d'éxpreience dans le consulting et L’approvisionnement des entreprise dans le domaine">
    <meta property="og:title"
        content="Sagimex Pro - entreprise spécialisée qui capitalise 25 and d'éxpreience dans le consulting et L’approvisionnement des entreprise dans le domaine">
    <meta name="facebook:card" content="summary">
    <meta name="facebook:site"
        content="@Sagimex Pro - entreprise spécialisée qui capitalise 25 and d'éxpreience dans le consulting et L’approvisionnement des entreprise dans le domaine">
    <meta name="facebook:title"
        content="Sagimex Pro - entreprise spécialisée qui capitalise 25 and d'éxpreience dans le consulting et L’approvisionnement des entreprise dans le domaine">
    <meta name="facebook:description"
        content="Sagimex Pro - entreprise spécialisée qui capitalise 25 and d'éxpreience dans le consulting et L’approvisionnement des entreprise dans le domaine">
    <meta name="facebook:creator"
        content="@Sagimex Pro - entreprise spécialisée qui capitalise 25 and d'éxpreience dans le consulting et L’approvisionnement des entreprise dans le domaine">
    {{-- <link rel="icon" type="image/png" sizes="32x32" href="/icon.png"> --}}
    {{-- <link rel="shortcut icon" href="/icon.png"> --}}
    <link rel="icon" href="/favicon.ico" />

    <title>{{ $title . ' - Sagimex Pro' }}</title>

    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" media="all" href="/assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-false fixed-top" id="nav-bar">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/logo1.png" alt="logo de sagimex" class="logo-1"
                    style="animation: animat 4s alternate infinite;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Offcanvas -->
            <div class="offcanvas offcanvas-end" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <a href="/" class="navbar-brand">
                        <img src="/logo.png" alt="logo de sagimex" class="logo-1">
                    </a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="d-flex flex-column justify-content-between offcanvas-body">

                    <ul class="d-flex gap-2 navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">
                                {{ trans('app.Header.home') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('about-us') ? 'active' : '' }}" href="/about-us">
                                {{ trans('app.Header.about') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('products') ? 'active' : '' }}" href="/products">
                                {{ trans('app.Header.product') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('contact-us') ? 'active' : '' }}" href="/contact-us">
                                {{ trans('app.Header.contact') }}
                            </a>
                        </li>

                        <li>
                            <form class="lang-form">
                                <select class="ms-auto mt-1 w-25 form-select">
                                    <option value="fr" {{ app()->getLocale() === 'fr' ? 'selected' : '' }}>Fr</option>
                                    <option value="en" {{ app()->getLocale() === 'en' ? 'selected' : '' }}>En</option>
                                </select>
                            </form>
                        </li>
                    </ul>

                    {{-- Social links component --}}
                    @include('components.social-links', [
                        'class' => 'mx-auto mt-auto',
                        'id' => 'off-canvas-footer',
                        'dataTodisplay' => trans('app.SectionOurContact.footerSection'),
                    ])

                </div>
            </div>
        </div>
    </nav>

    <script type="module" src="/assets/js/lang-handler.js"></script>


    {{ $slot }}


    <footer>
        <div class="py-2 px-3">
            <p class="m-0 py-2 text-center">&#169; Sarl SagimexPro 2023</p>
        </div>
    </footer>

</body>

</html>
