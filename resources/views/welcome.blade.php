<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    </head>
    <body>
        <div class="container">
             <div id="app">
                {{-- <example-component></example-component> --}}
                {{-- <task-list></task-list>
                <message-box title="First" body="Hehe"></message-box>
                <message-box title="Second" body="Haha"></message-box>    --}}
                <tabs-component>
                    <tab-component name="About us" :selected="true">
                        <h1>Here is the content for the about us tab</h1>
                    </tab-component>
                    <tab-component name="About you">
                        <h1>Here is the content for the about you tab</h1>
                    </tab-component>
                    <tab-component name="About me">
                        <h1>Here is the content for the about me tab</h1>
                    </tab-component>
                    <tab-component name="About any">
                        <h1>Here is the content for the about any tab</h1>
                    </tab-component>
                </tabs-component>
            </div>                  
        </div>

        <script src="{{ URL::asset('js/app.js') }}"></script>

    </body>
</html>
