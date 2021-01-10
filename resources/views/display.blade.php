<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Event Calendar</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
        <h2 align = "center" > ALL EVENTS </h2>
            <table class="table table-striped table-bordered table-hover">
                <thead class="thead">
                    <tr class="warning">
                        {{-- <th> Id</th> --}}
                        <th> Title </th>
                          <th> Description </th>
                        {{-- <th> Color </th> --}}
                        <th> Start time</th>
                            <th> End time</th>
                        <th>Edit </th>
                        <th> Delete </th>
                    </tr>
                </thead>
                @foreach($events as $event)
                <tbody>
                    <tr>
                        {{-- <td>{{ $event->id }}</td> --}}
                        <td>{{ $event->title }}</td>
                         <td>{{ $event->description }}</td>
                         {{-- <td>{{ $event->color }}</td> --}}
                        <td>{{ $event->start_date }}</td>
                        <td>{{ $event->end_date }}</td>
                        <th><a href="{{ action('App\Http\Controllers\EventController@edit',$event['id']) }}" class="btn btn-success">
                                <i class="glyphicon glyphicon-edit"></i>Edit</a>
                        </th>
                        <th>
                        <form form action="{{ action('App\Http\Controllers\EventController@destroy',$event['id']) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">
                        <i class="glyphicon glyphicon-trash"></i> Delete</button>
                        </form>
                        </th>               
                    </tr>
                </tbody>
                @endforeach
            </table>
<a class="btn btn-primary" href="{{route('back')}}">Back</a>
        </div>
    </div>
</body>
</html>

