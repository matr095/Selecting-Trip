<html>
    <head>
        <title>SelectingTrip : A trip agency</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="/">Selecting Trip</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin/">Admin</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>
        <div class="container-fluid">
            <p>Choose a flight:</p>
            
            @foreach ($trips as $trip)
              <div class="row mt-2">
                <div class="card col-12">
                  <div class="card-header">Flight</div>
                 Step : 
                 {{ $trip['step'] }}
                 <hr>
                  Departure : 
                 {{ $trip['departure'] }}
                 <hr>
                 Arrival : 
                 {{ $trip['arrival'] }}
                 <hr>
                 Time scheduled to take off : 
                 {{ $trip['departureTime'] }}
                 <hr>
                 Time scheduled to landing : 
                 {{ $trip['arrivalTime'] }}
                </div>
              </div>
            @endforeach
            
        </div>
        <script   src="https://code.jquery.com/jquery-3.5.1.js"   integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="   crossorigin="anonymous"></script>
    </body>
</html>