
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">User List System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/userlist">User List</a>
        </li>
      </ul>
      <form action="/userlist" method="GET" class="d-flex">
        @csrf
      <input class="form-control me-2" name="search" type="text" placeholder="Search" aria-label="Search">
        <button href="/userlist" class="btn btn-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


