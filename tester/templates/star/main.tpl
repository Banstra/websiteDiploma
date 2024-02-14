<!doctype html>
<!--
Author: TG - @nezvs
Template: MCPEHaxs - by Conff.org - https://clck.ru/giKU5
-->
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {headers}
      <link rel="stylesheet" href="{THEME}/css/engine.css">
      <link rel="stylesheet" href="{THEME}/css/styles.css">
      <link rel="stylesheet" href="{THEME}/css/all.min.css">
      <link rel="stylesheet" href="{THEME}/css/slick.css">
      <link rel="stylesheet" href="{THEME}/css/slick-theme.css">
      <link rel="stylesheet" href="{THEME}/css/darkmode.css">
      <link rel="shortcut icon" href="/templates/mcpehaxs/images/favicon.ico">
    <link href="/templates/mcpehaxs/images/favicon.ico" rel="icon" type="image/x-icon" />
    <link href="/templates/mcpehaxs/images/favicon.svg" rel="icon" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/templates/mcpehaxs/images/icons/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="/templates/mcpehaxs/images/icons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/templates/mcpehaxs/images/icons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/templates/mcpehaxs/images/icons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/templates/mcpehaxs/images/icons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/templates/mcpehaxs/images/icons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/templates/mcpehaxs/images/icons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/templates/mcpehaxs/images/icons/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="/templates/mcpehaxs/images/icons/apple-touch-icon-180x180.png" />
    <link rel="manifest" href="/templates/mcpehaxs/manifest/ru/manifest.json">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <link rel="preload" href="/templates/mcpehaxs/webfonts/Inter-Medium.woff2?v=3.19" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/templates/mcpehaxs/webfonts/Inter-MediumItalic.woff2?v=3.19" as="font" type="font/woff2" crossorigin>
    </head>
  <body itemscope itemtype="https://schema.org/WebPage">
        <header class="top-bar navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
            <div class="diss-flex"><button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                <a class="text-decoration-none navbar-brand" [not-aviable=main]href="/"[/not-aviable] alt="Minecraft Pocket Edition Haxs" title="Ukraine - World">
                    <div class="logo-m-left logo_svg"></div>
                    <!--<span class="logo-m-left" style="color:#bdc3c7;font-size:14px;text-align:center">#NoWar</span>!-->
                </a></div>
                  <div class="diss-flex nav-item dropdown">
                      <div class="search-button-on"><a href="/?do=search" class="btn btn-outline-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                    [group=1,2,3,4]<a class="dropdown-toggle text-decoration-none" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="profile_unb"><img alt="Profile" src="{foto}" height="30" width="30"></span>
                    </a>[/group]
                  {login}
                  </div>
            </div>
        </header>
      
        <div class="sticky-top navbar-expand-lg navbar-dark bg-dark">
          <div class=" offcanvas offcanvas-wf-off navbar-dark bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="container offcanvas-body-nss">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link [category=8]active[/category]" href="/download-mcpe/">Скачать Майнкрафт</a></li>
                <li class="nav-item"><a class="nav-link [category=1]active[/category]" href="/maps/">Карты</a></li>
                <li class="nav-item"><a class="nav-link [category=2]active[/category]" href="/mods/">Моды</a></li>
                <li class="nav-item"><a class="nav-link [category=4]active[/category]" href="/shaders/">Шейдеры</a></li>
                <li class="nav-item"><a class="nav-link [category=3]active[/category]" href="/textures/">Текстуры</a></li>
                <li class="nav-item"><a class="nav-link [category=5]active[/category]" href="/skins/">Скины</a></li>
                <li class="nav-item"><a class="nav-link [category=6]active[/category]" href="/seeds/">Сиды</a></li>
                <li class="nav-item"><a class="nav-link [category=7]active[/category]" href="/guides/">Гайды</a></li>
                <li class="nav-item"><a class="nav-link [category=10]active[/category]" href="/programs/">Программы</a></li>
                <li class="nav-item"><a class="nav-link [category=11]active[/category]" href="/news/">Новости</a></li>
           </ul>
          </div>
        </div></div>
        [page-count=1][aviable=cat|main]
        <nav class="[aviable=main]background-nav_main[/aviable][available=cat]background-nav_[category=1]maps[/category][category=2]mods[/category][category=3]textures[/category][category=4]shaders[/category][category=5]skins[/category][category=6]seeds[/category][category=7]gides[/category][category=8]downloads[/category][category=9][/category][category=10][/category][category=11][/category][/available] py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="my-5">
                    <h1 class="fw-bolder">[aviable=main]Добро пожаловать на портал любителей майнкрафт[/aviable]{category-title}</h1>
                    <p class="lead mb-0">[aviable=main]На этом сайте ты можешь найти интересный контент: узнать последние новости майнкрафт, скачать полезные аддоны, карты, скины, текструры, шейдеры под любую версию Minecraft Pocket Edition.[/aviable]{category-description}</p>
                </div>
            </div>
        </nav>
        [/aviable][/page-count]
        <div class="container margin-rem">
            <div class="row">
                <div class="col-lg-8">
                    [aviable=cat][category=8][page-count=1]{include file="modules/downloads.tpl"}[/page-count][/category][/aviable]
                    [aviable=cat][page-count=1]<div class="margin-bottom-cat">{include file="modules/sections.tpl"}</div>[/page-count][/aviable]
                        {info}
                        [aviable=main|cat|search|lastnews|tags]<div class="row">[/aviable]
                        {content}
                        [aviable=main|cat|search|lastnews|tags]</div>[/aviable]
                </div>
                <div class="col-lg-4">
                    <div class="card mb-4">
                            <div class="card-header">Актуальные версии</div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="/download-mcpe/167-minecraft-1-18-2-03-release.html">1.18</a></li>
                                    <li><a href="/download-mcpe/147-majnkraft-pe-1174101.html">1.17</a></li>
                                    <li><a href="/download-mcpe/22-minecraft-pocket-edition-116220-reliz.html">1.16</a></li>
                                </ul>
                            </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">Полезное</div>
                        <div class="card-body">
                            <div class="row">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="/download-mcpe/47-minecraft-bedrock-edition-windows.html">Minecraft Bedrock на Windows</a></li>
                                        <!--<li><a href="/download-mcpe/197-minecraft-dungeons.html">Minecraft Dungeons на Windows</a></li>!-->
                                        <li><a href="/guides/66-kak-ustanovit-tekstury.html">Как установить текстуры?</a></li>
                                        <li><a href="/guides/65-kak-ustanovit-kartu.html">Как установить карты?</a></li>
                                        <li><a href="/guides/5-xbox-live-v-minecraft-kak-igrat-s-druzjami-po-seti.html">Как играть по сети?</a></li>
                                        <li><a href="/guides/4-kak-poluchat-beta-obnovlenija-versij-minecraft-na-windows-10.html">Как получать бета-версии?</a></li>
                                        <li><a href="/programs/37-pojavlauncher.html">PojavLauncher</a></li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <footer class="py-3 bg-dark">
            <script type="application/ld+json">
                {
                    "@context": "http://schema.org",
                    "@type": "WebSite",
                    "url": "https://mcpehaxs.com",
                    "name": "MCPEHaxs",
                    "potentialAction": {
                      "@type": "SearchAction",
                      "target": "https://mcpehaxs.com/?story={query}&do=search&subaction=search",
                      "query-input": "required name=query"
                    }
                }
        </script>
        <div itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
                <meta itemprop="name" content="mcpehaxs">
                <link itemprop="url" href="https://mcpehaxs.com/">
                <meta itemprop="sameAs" content="https://vk.com/mcpehaxs">
                <meta itemprop="sameAs" content="https://t.me/mcpehaxs">
                <meta itemprop="slogan" content="Портал любителей майнкрафт">
            <div id="logoOrganization" itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
                <link itemprop="url" href="/templates/mcpehaxs/images/logotype.png">
                <meta itemprop="width" content="596">
                <meta itemprop="height" content="96">
                <meta itemprop="caption" content="MCPEHaxs">
            </div>
        </div>
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
              <li class="nav-item"><a href="/privacy-policy.html" class="nav-link px-2 text-muted">Политика Конфиденциальности</a></li>   
              <li class="nav-item"><a href="/?do=feedback" class="nav-link px-2 text-muted">Обратная связь</a></li>
              <li class="nav-item"><a href="/?do=rules" class="nav-link px-2 text-muted">Правила на сайте</a></li>
              <li class="nav-item"><a href="/about.html" class="nav-link px-2 text-muted">О проекте</a></li>
              <div class="container text-center size-icons">
    <a class="px-2" href="https://facebook.com/mcpehaxs/" target="_blank"><i class="fab fa-facebook"></i></a>
    <a class="px-2" href="https://instagram.com/mcpehaxs/" target="_blank"><i class="fab fa-instagram"></i></a>
    <a class="px-2" href="https://vk.com/mcpehaxs/" target="_blank"><i class="fab fa-vk"></i></a>
    <a class="px-2" href="https://twitter.com/mcpehaxs/" target="_blank"><i class="fab fa-twitter"></i></a>
    <a class="px-2" href="https://discord.gg/fGjqpCtSsd" target="_blank"><i class="fab fa-discord"></i></a>
  </div>
            </ul>
            <a class="logo">
                <img width="164" src="/templates/mcpehaxs/images/logotype-bottom.svg">
                </a>
          </footer>
    {jsfiles}    
            <script src="{THEME}/js/popper.min.js"></script>
            <script src="{THEME}/js/bootstrap.min.js"></script>
            <script src="{THEME}/js/slick.min.js"></script>
          <script src="{THEME}/js/script.js"></script>
{AJAX}
<script src="{THEME}/js/lib.js"></script>
  </body>
</html>