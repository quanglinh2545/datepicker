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
    <form action="{{ action('App\Http\Controllers\EventController@update',$id) }}" method="post">
        {{ csrf_field() }}
        <div class="container">
            <div class="jumbotron" style="margin-top:5%;">
                <h2 align = "center"> Event</h2>
                <hr>
                <input type="hidden" name="_method" value="UPDATE" />

                <div class="form-group">
                    <label>title</label>
                    <input type="text" class="form-control" name="title" placeholder="title here" value="{{ $events->title }}">
                </div>

                <div class="form-group">
                    <label>description</label>
                    <input type="text" class="form-control" name="description" placeholder="description here" value="{{ $events->description }}">
                </div>

                <div class="form-group">
                    <label>Color</label>
                    <input type="color" class="form-control" name="color" placeholder="Enter Color" value="{{ $events->color }}">
                </div>
                <div class="form-group">
                    <label>Start time</label>
                    <input type="datetime-local" class="form-control" name="start_date" placeholder="Start time"value="{{ date('Y-m-d\TH:i', strtotime($events->start_date)) }}">
                </div>

                <div class="form-group">
                    <label>End time</label>
                    <input type="datetime-local" class="form-control" name="end_date" placeholder="End time" value="{{ date('Y-m-d\TH:i', strtotime($events->end_date)) }}">
                </div>

                {{ method_field('PUT') }}
                <button type="submit" name="submit" class="btn btn-success">Update</button>
                 <a class="btn btn-danger" href="{{route('destroy',$id)}}">Delete</a>
                  <a class="btn btn-primary" href="{{route('back')}}">Back</a>
            </div>
        </div>
    </form>
    {{-- <form form action="{{ action('App\Http\Controllers\EventController@destroy',$events['id']) }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-danger">
            <i class="glyphicon glyphicon-trash"></i> Delete</button>
    </form>
       <a class="btn btn-primary" href="{{route('edit',$sanpham->id)}}">Edit</a> --}}
</body>
</html>

