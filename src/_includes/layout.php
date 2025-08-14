---
content_placeholder: {{ content }}
---
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>--- if( page_title ) ------ metadata.page_title --- - --- endif ---Persona Clix - Reflecting You, Online</title>

        <link rel="stylesheet" type="text/css" href="/assets/webfonts/Inter/Inter.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    </head>

    <body>
        <header class="top">
            <div class="container">
                <p>Welcome to Persona Clix!</p>

                <nav>
                    <a href="https://weburl.net/uptimestatus" target="_blank">Uptime Status</a>
                    <a href="/servers">Webmail</a>
                    <a href="/servers">Control Panel</a>
                </nav>
            </div>
        </header>

        <header class="main">
            <div class="container">
                <h1><a href="/"></a></h1>

                <nav>
                    <a href="/"--- if( current_nav_item == "home" ) --- class="current"--- endif --->Home</a>
                    <a href="/webhosting"--- if( current_nav_item == "webhosting" ) --- class="current"--- endif --->Web Hosting</a>
                    <a href="/websitecreation"--- if( current_nav_item == "websitecreation" ) --- class="current"--- endif --->Website Creation</a>
                    <a href="/contact"--- if( current_nav_item == "contact" ) --- class="current"--- endif --->Contact</a>
                </nav>
            </div>
        </header>

        {{ content }}

        <footer class="main">
            <div class="container">
                <div>
                    <p class="hide-light-mode show-dark-mode"><img src="/assets/images/logos/personaclix_pcdh_logo_light.png" alt="Persona Clix" class="logo"></p>
                    <p class="hide-dark-mode show-light-mode"><img src="/assets/images/logos/personaclix_pcdh_logo_dark.png" alt="Persona Clix" class="logo"></p>
                    <p>Persona Clix</p>
                </div>

                <nav>
                    <a href="/">Home</a>
                    <a href="/webhosting">Web Hosting</a>
                    <a href="/websitecreation">Website Creation</a>
                    <a href="/contact">Contact</a>
                </nav>

                <nav>
                    <a href="/servers">Servers</a>
                </nav>
            </div>
        </footer>

        <footer class="bottom">
            <div class="container">
                <p>Copyright &copy; David Hunter.</p>
            </div>
        </footer>

        <script type="text/javascript" src="/assets/js/anti-email-harvesting.js"></script>
    </body>
</html>
