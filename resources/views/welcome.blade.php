<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body class="antialiased">
        <div class="test">Hello</div>
        <input class="input-element" placeholder="time format">
    </body>
    <script type="module"> // ----------------- type should be module ------------------

        // below code is not work here you should define it inside app.js or another one
        // console.log('welcome.blade.php : '+ new persianDate().format('YYYY/MM/DD'))
        // ------ if above load failed below code not run --------- but you can use in another javascript tag to prevent it


        // clave js library ------------------
        const cleave = new Cleave('.input-element', {
            time: true,
            timePattern: ['h', 'm', 's']
        });


        // check jquery
        $('.test').hide();

        const url = 'https://jsonplaceholder.typicode.com/posts/1';
        console.log('welcome.blade.php : About to make axios request...');

        axios.get(url).then(response => {
                console.log('Data:', response.data);
            }).catch(error => {
                console.error('Error:', error.message);
            });

    </script>

</html>
