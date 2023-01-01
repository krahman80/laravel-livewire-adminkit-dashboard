<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Shopping App</title>

        <!-- Fonts -->
        
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        @livewireStyles
    </head>
    <body>
        <section class="container w-75">
            <div class="row">
                <div class="col-12">
                    @livewire('carts')
                </div>
            </div>
            <div class="row">
                <div class="col-12 w-75">
                    @livewire('products')
                </div>
            </div>
        </section>
        
        @livewireScripts
    </body>
</html>
