<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{asset('persian-datepicker.css')}}">

    </head>

    <body class="antialiased">
        <div class="test">Hello</div>
        <input type="text" class="example1" />

        <input class="input-time-element" placeholder="time format">
        <input class="input-date-element" placeholder="time format">
    </body>
    <script src="{{asset('jquery.js')}}" type="text/javascript"></script>
    <script src="{{asset('persian-date.js')}}" type="text/javascript"></script>
    <script src="{{asset('persian-datepicker.js')}}" type="text/javascript"></script>
    <script type="text/javascript">

    </script>
    <script type="module"> // ----------------- type should be module ------------------
        $(document).ready(function() {
            $(".example1").pDatepicker();
        });
        // below code is not work here you should define it inside app.js or another one
        // console.log('welcome.blade.php : '+ new persianDate().format('YYYY/MM/DD'))
        // ------ if above load failed below code not run --------- but you can use in another javascript tag to prevent it


        // clave js library ------------------
        new Cleave('.input-time-element', {
            time: true,
            timePattern: ['h', 'm', 's']
        });
        new Cleave('.input-date-element', {
            date: true,
            delimiter: '-',
            datePattern: ['Y', 'm', 'd']
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
