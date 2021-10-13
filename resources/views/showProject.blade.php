<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-6">

    <div class="card mt-2">
        <div class="card-header">
          <h2>Project Info :</h2>
        </div>
        <div class="card-body">
          <h5 class="card-title">Title:</h5>
          <p>{{$project->title}}</p>
        
          <h5 class="card-text">Description:</h5>
          <p>{{$project->description}}</p>
          <h5 class="card-title">Start At :</h5>
          <p class="card-text">{{$project->start_date}}</p>
          <h5 class="card-title">End At :</h5>
          <p class="card-text">{{$project->end_date}}</p>
          <h5 class="card-title"> Duration Time :</h5>
          <p class="badge bg-secondary">{{$difference['hours']}} hours</p>
          <p class="badge bg-info">{{$difference['minutes']}} minutes</p>
        </div>
      </div>

</div>
</div>


</body>
</html>