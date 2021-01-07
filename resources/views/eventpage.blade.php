<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Document</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css" />
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h2 align="center"> EVENT CALENDAR </h2>
            <div class="row">
                <a href="/addeventurl" class="btn btn-success"> ADD events </a>
                <a href="/displaydata" class="btn btn-primary"> EDIT events </a>
                <a href="/deleteevent" class="btn btn-danger"> DELETE events </a>


            </div>
            <div class="row">
                @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
                @endif
            

            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-dafault">
                    <div class="panel-heading" style="background: #2e6da4; color:white;">
                        Event Calendar Example
                    </div>
                    <div class="panel-body">


                        {!! $calendar->calendar() !!}
                       {!! $calendar->script() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>
</html>

