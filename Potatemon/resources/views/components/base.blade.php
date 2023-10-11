<!-- resources/views/components/base.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
</head>

<body>

    <nav class="nav">

        <div id="nav_left">
            <h2 id="h2-page-name">Potatemon</h2>
        </div>

        <div id="nav_right">

            <h2 id="h2-home">
                <a href="{{ route('home') }}" class="button">Home</a>
            </h2>            

            <h2 id="h2-create">
                <a href="{{ route('create') }}" class="button">Create</a>
            </h2>            
            
        </div>
    </nav>

    <section>
        <div id="container">
            {{ $content }}
        </div>
    </section>    

</body>

</html>
