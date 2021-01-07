<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Document</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <form action="{{ action('App\Http\Controllers\EventController@update',$id) }}" method="post">
        {{ csrf_field() }}
        <div class="container">
            <div class="jumbotron" style="margin-top:5%;">
                <h1> Update your data </h1>
                <hr>
                <input type="hidden" name="_method" value="UPDATE" />

                <div class="form-group">
                    <label>Name of Festival</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter Name" value="{{ $events->title }}">
                </div>

                <div class="form-group">
                    <label>Color</label>
                    <input type="color" class="form-control" name="color" placeholder="Enter Color" value="{{ $events->color }}">
                </div>
                <div class="form-group">
                    <label>Start date of festival</label>
                    <input type="datetime-local" class="form-control" name="start_date" placeholder="Enter Start Date" value="{{ $events->start_date }}">
                </div>

                <div class="form-group">
                    <label>End date of festival</label>
                    <input type="datetime-local" class="form-control" name="end_date" placeholder="Enter Start Date" value="{{ $events->end_date }}">
                </div>

                {{ method_field('PUT') }}
                <button type="submit" name="submit" class="btn btn-success">Update data </button>
            </div>
        </div>
    </form>
</body>
</html>
