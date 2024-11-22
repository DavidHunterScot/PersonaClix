---
content_placeholder: {{ content }}
---
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>--- if( page_title ) ------ metadata.page_title --- - --- endif ---Persona Clix - Reflecting You, Online</title>

        <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    </head>

    <body>
        <header>
            <div class="container">
                <h1><a href="/"><img src="/assets/images/logos/personaclix_pcdh_logo_light.png" alt="Persona Clix"></a></h1>

                <nav>
                    <a href="/webhosting"--- if( current_nav_item == "webhosting" ) --- class="current"--- endif --->Web Hosting</a>
                    <a href="/websitecreation"--- if( current_nav_item == "websitecreation" ) --- class="current"--- endif --->Website Creation</a>
                    <a href="/contact"--- if( current_nav_item == "contact" ) --- class="current"--- endif --->Contact</a>
                </nav>
            </div>
        </header>

        {{ content }}

        <footer>
            <div class="container">
                <p>Copyright &copy; Persona Clix.</p>
            </div>
        </footer>

        <script type="text/javascript" src="/assets/js/anti-email-harvesting.js"></script>
    </body>
</html>
