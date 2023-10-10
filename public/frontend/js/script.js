function createFrom(){
    document.getElementById('groupCreate').classList.remove('d-none');
   
}
document.addEventListener('mouseup', function(e) {
    var container = document.getElementById('groupCreate');
    if (!container.contains(e.target)) {
      container.classList.add('d-none');
    }
  });



  function joinFrom(){
    document.getElementById('groupJoin').classList.remove('d-none');
   
}
document.addEventListener('mouseup', function(e) {
    var container = document.getElementById('groupJoin');
    if (!container.contains(e.target)) {
      container.classList.add('d-none');
    }
  });


  function on() {
    document.getElementById("overlay").style.display = "block";
}

function off() {
    document.getElementById("overlay").style.display = "none";
}


function showPassword() {
    var pass = document.getElementById("myPassword");
    if (pass.type === "password") {
      pass.type = "text";
    } else {
      pass.type = "password";
    }
  }


function showMenu(){
  document.querySelector('.members-list').classList.remove('d-none');
  document.querySelector('.menu-open').classList.add('d-none');
  document.querySelector('.menu-close').classList.remove('d-none');
}

function hideMenu(){
  document.querySelector('.members-list').classList.add('d-none');
  document.querySelector('.menu-open').classList.remove('d-none');
  document.querySelector('.menu-close').classList.add('d-none');
  
}


function userMenu(){
  
  document.getElementById('userMenu').classList.remove('d-none');
 
}
document.addEventListener('mouseup', function(e) {
  var container = document.getElementById('userMenu');
  if (!container.contains(e.target)) {
    container.classList.add('d-none');
  }
});
