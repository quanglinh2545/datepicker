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
    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-dafault">
                        <div class="panel-heading" style="background: #2e6da4; color:white;">
                            Add Event to Calendar
                        </div>
                        <div class="panel-body">
                            <h1> Task :Add Data </h1>
                            <form method="post" action="{{route('store')}}">
                                {{ csrf_field() }}
                                <label for=""> Enter Name of Event</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter the Name" /><br /><br />

                                <label for=""> Enter Color</label>
                                <input type="color" class="form-control" name="color" placeholder="Enter the color" /><br /><br />

                                <label for=""> Enter Start date of Event</label>
                                <input type="datetime-local" class="form-control" name="start_date" class="date" placeholder="Enter start date" /><br /><br />

                                <label for=""> Enter end date of Event</label>
                                <input type="datetime-local" class="form-control" name="end_date" class="date" placeholder="Enter end date" /><br /><br />

                                <input type="submit" name="submit" class="btn btn-primary" value="Add Event Data" />
                                <a class="btn btn-primary" href="{{route('back')}}">Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

