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
        <h3>Umm</h3>
        @yield('content')
        <div class="container">
             <div id="app">
                {{-- <example-component></example-component> --}}
                {{-- <task-list></task-list>
                <message-box title="First" body="Hehe"></message-box>
                <message-box title="Second" body="Haha"></message-box>    --}}

                {{-- Episode 11 --}}
                {{-- <tabs-component>
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
                        <h1>Here is the content for the <ab></ab>out any tab</h1>
                    </tab-component>
                </tabs-component> --}}

                {{-- Episode 12, 13 --}}
                {{-- <coupon-component @applied="onCouponApplied"></coupon-component>

                <small v-if="couponApplied">You used a coupon</small> --}}

                {{-- Episode 14 --}}
                {{-- <modal-component>
                    <template slot="header">Title</template>
                    Content Reloaded!
                    <div slot="footer">
                        <button class="button is-success">Save changes</button>
                        <button class="button">Cancel</button>
                    </div>
                </modal-component> --}}

                {{-- Episode 15 --}}
                {{-- <progress-view inline-template>
                    <div>
                        <h3>Your progress rate in this course is @{{ progressRate }}%</h3>
                        <p><button @click="progressRate += 10">Update your progress rate</button></p>
                    </div>
                </progress-view> --}}

                {{-- Episode 18 --}}
                {{-- <axios-example></axios-example> --}}
                   
            </div>      
            
                     
        </div>

        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

        <script src="{{ URL::asset('js/app.js') }}"></script>

    </body>
</html>
