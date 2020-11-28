<html>
    <head>
        <title>SelectingTrip : Admin panel</title>
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
              <li class="nav-item ">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
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
            <p>Add a trip:</p>
            <form action="/admin" method="POST">
                @csrf
                <div class="form-group">
                    <label for="route">Route</label>
                    <select placeholder="Which route ?" name="route" type="text" class="form-control" id="route">
                        @foreach ($routes as $route)
                        <option value="{{ $route->id }}">
                            {{ $route->departure }} -> {{ $route->arrival }}
                        </option>
                        @endforeach
                    </select>
                    <label for="type">Type</label>
                    <select name="type" type="text" class="form-control" id="type">
                        <option type="text" value="Aircraft">Aircraft</option>
                        <option type="text" value="Bus">Bus</option>
                    </select>
                    <label for="type">Transport number</label>
                    <input name="transportNumber" type="text" class="form-control" id="transportNumber" />
                     <label for="type">Departure time</label>
                    <input name="departureTime" type="time" class="form-control" id="departureTime" />
                     <label for="type">Arrival time</label>
                    <input name="arrivalTime" type="time" class="form-control" id="arrivalTime" />
                </div>
                <button class="form-control btn-primary">Add trip</button>
            </form>
            
        </div>
        <script   src="https://code.jquery.com/jquery-3.5.1.js"   integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="   crossorigin="anonymous"></script>
        <script src="js/tripSelect.js"></script>
    </body>
</html>