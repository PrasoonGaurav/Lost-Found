<!DOCTYPE html>
<html lang="en">
  <head>
    <style>

.dropbtn {
  background-color: white; 
  color: grey; 
  border: 2px solid royalblue;
}



.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px 32px;
  font-size: 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border: none;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
.dropbtn:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.dropbtn:hover, .dropbtn:focus {
  background-color: royalblue;
  color: white;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
.dropbtn1 {
  background-color: white; 
  color: grey; 
  border: 2px solid royalblue;
}



.dropbtn1 {
  background-color: #3498DB;
  color: white;
  padding: 16px 32px;
  font-size: 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border: none;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
.dropbtn1:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.dropbtn1:hover, .dropbtn1:focus {
  background-color: royalblue;
  color: white;
}

.dropdown1 {
  position: relative;
  display: inline-block;
}

.dropdown1-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown1-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown1 a:hover {background-color: #ddd;}

.show1 {display: block;}
</style>
    <title>Admin</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
function myFunction1() {
  document.getElementById("myDropdown1").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn1')) {
    var dropdowns = document.getElementsByClassName("dropdown1-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

</script>

  </head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12"><br><br>
      </div>
      </div>
    </div>

  <div class="container">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-2"><div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">LOST</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="lostbooks.php">Books</a>
    <a href="lostelectronics.php">Electronics</a>
    <a href="lostidentity.php">Identity</a>
    <a href="lostpersonal.php">Personal</a>
  </div>
</div></div>
        <div class="col-sm-4"></div>
        <div class="col-sm-2">
          <div class="dropdown">
  <button onclick="myFunction1()" class="dropbtn">FOUND</button>
  <div id="myDropdown1" class="dropdown-content">
    <a href="foundbooks.php">Books</a>
    <a href="foundelectronics.php">Electronics</a>
    <a href="foundidentity.php">Identity</a>
    <a href="foundpersonal.php">Personal</a>
  </div>
</div>
        </div>
        <div class="col-sm-2"></div>

      </div>
      
 

  
</body>