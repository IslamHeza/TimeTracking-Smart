<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>Time Tracker</title>
</head>
<body>
    <div class="container">
            <div class="row my-5 justify-content-center">
            
                <div class="col-10 ">
                <div>
                    <a class="btn btn-success mb-2" href="/project/create">Add New Project</a>
                    <a class="btn btn-primary mb-2" href="/listallprojects">List All Projects</a>
                </div>
                    <div class="card">
                        <div class="card-header" >
                             <h2>Projects Calendar</h2>
                        </div>
    
                        <div class="card-body"> 
                            {!! $calendar->calendar() !!}
                            {!! $calendar->script() !!}
                         </div>
                    </div>
                </div>
            </div>
    </div>        
</body>
</html>