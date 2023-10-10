<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{url('/')}}">Commu<span class="border border-light bg-white text-dark rounded-right" style="border-top-right-radius: 10px;border-bottom-right-radius: 10px;">nity</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        
        <li class="nav-item">
          <a class="nav-link" id="create" style="cursor:pointer;" onclick="createFrom(),on()">Create</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="join" style="cursor:pointer;" onclick="joinFrom(),on()">Join</a>
        </li>


        <li class="nav-item">
        <a class="nav-link" id="navbarDropdownMenuLink" onclick="userMenu()" >
          <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="40" height="40" class="rounded-circle">
        </a>
        <div class="bg-white d-flex flex-column position-absolute border border-secondary p-3 d-none" aria-labelledby="navbarDropdownMenuLink" id="userMenu" style="z-index:20;">
          <a class="text-decoration-none text-dark fw-bold" style="font-size:0.9em;" >{{session('user')['email']}}</a>
          <a class="text-decoration-none text-dark fw-bold" style="font-size:0.9em;" >{{session('user')['name']}}</a>
          <a class="text-decoration-none  fw-bold btn btn-dark text-white mt-2" style="font-size:0.8em;" href="/logout">Log Out</a>
        </div>
      </li>   

              
                
             
  
      </ul>
    </div>
  </div>
</nav>