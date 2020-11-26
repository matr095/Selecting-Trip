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
        <div class="jumbotron">
          <h1 class="display-4">Plan your trip</h1>
          <p class="lead"></p>
          <hr class="my-4">
            <form action="/trip" method="POST">
                @csrf
                <div class="form-group">
                  <label>Type</label>
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="type" id="oneway" value="One Way" checked>
                      <label class="form-check-label" for="oneway">
                        One way
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="type" id="return" value="Return">
                      <label class="form-check-label" for="return">
                        Return
                      </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="departure">Departure</label>
                    <input placeholder="Where from ?" type="text" class="form-control" id="departure">
                </div>
                <div class="form-group">
                    <label for="departure">Arrival</label>
                    <input placeholder="Where to ?" type="text" class="form-control" id="arrival">
                </div>
                <button class="form-control btn-primary">Search</button>
            </form>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm">
                  <div class="card" >
                  <img src="img/Miami.jpg" class="card-img-top" alt="Miami">
                  <div class="card-body">
                    <h5 class="card-title">Miami Beach</h5>
                    <p class="card-text">Miami, officially the City of Miami, is a metropolis located in southeastern Florida in the United States. It is the third most populous metropolis on the East coast of the United States, and it is the seventh largest in the country. The city is an economic powerhouse, serving as the financial and business capital of Latin America. The city has the third tallest skyline in the U.S. with over 300 high-rises, 55 of which exceed 491 ft (150 m).</p>
                  </div>
                </div>
                </div>
                <div class="col-sm">
                  <div class="card">
                      <img src="img/Chicago.jpg" class="card-img-top" alt="Chicago">
                      <div class="card-body">
                        <h5 class="card-title">Chicago</h5>
                        <p class="card-text">Chicago, officially the City of Chicago, is the most populous city in the U.S. state of Illinois, and the third most populous city in the United States.</p>
                      </div>
                    </div>
                </div>
              </div>
        </div>
    </body>
</html>