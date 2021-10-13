<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>ِAdd Project</title>
</head>
<body>
    <div class="container">
    <div class="row my-5 justify-content-center">
        <div class=" col-10">
            <div class=" card">
                <div class=" card-header" >
                    <h2>Add Project To Calender</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('projects.store')}}" >
                        @csrf

                        <label for="">Project Title :</label> 
                        <input type="text" class="form-control"  name="title" placeholder="Enter the Title" ><br>
                        <label for="">Project description :</label> 
                        <textarea type="text" class="form-control"  name="description" placeholder="Enter the description" ></textarea><br>
                        <label for="">Choose Project Color </label>
                        <input type="color" class="" name="color" placeholder="Enter the color" ><br><br>
                        <div class="row">
                            <div class="col-6">
                                <label for="">Starts at :</label>
                                <input type="datetime-local" class="form-control" name="start_date" class-"date"  placeholder="Enter Start date"><br>
        
                            </div>
                            <div class="col-6">
                                <label for="">Ends at :</label>
                                <input type="datetime-local" class="form-control" name="end_date" class="date" placeholder="Enter End date"><br>
        
                            </div>
                        </div>
                        <input type="submit" name="submit" class="btn btn-success" value="Add Project">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>