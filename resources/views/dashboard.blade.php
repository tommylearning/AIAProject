<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard</title>
    <link href="{{mix('css/app.css')}}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <dashboard-component
            :contact-details="{{json_encode($contactDetails)}}"
        ></dashboard-component>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
