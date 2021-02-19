	<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  border-radius: 15px;
  padding: 5px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>LOST ITEMS</h1>
  
  
    <p>LOST & FOUND is a platform where you can find your lost stuffs. Not only that but you can help others as well to find their lost items as you come across them. It's created to make losing and finding items a headache free experience. </p>

</div>

<h2 style="text-align:center">PERSONAL ACCESORY</h2>
<div class="container">
                <?php
                       include 'db.php';
                       $link=  mysqli_connect(localhost, root, root, lost);
                       $result=  mysqli_query($link, "select * from personal");
                       if(mysqli_affected_rows($link)>0)
                        {
                   
                        	$x=0;
                           while($r=  mysqli_fetch_array($result))
                           {

                           	if($x==0)
                               {
                               	echo "<div class='row'>";
                               }
                               	echo "<div class='col-sm-3'>";
                               	echo "<div class='column'>";
                               	echo "<div class='card'>";
                               	echo "<div class='container'>";
                               	echo "<h2>Brand : $r[4]</h2>";
                               	echo "<h2>Colour : $r[5]</h2>";
                               	echo "<h2>Location : $r[6]</h2>";
                                echo "<h2>Other's : $r[7]</h2>";
                               	/*echo "<p class='title'> Details : </p></p>";
                               	echo "<p>NAME : $r[1]</p>";
                               	echo "<p>EMAIL ID : $r[2]</p>";
                               	echo "<p>CONTACT NO. : $r[3]</p>";
                               	echo "<p><button class='button'></button></p>";*/
                               	echo "</div></div></div></div>";
                               
                               $x++;

                               if($x==3)
                               {
                                   echo "</div>";
                                   $x=0;
                               }
                           
                           }
						}
                       	 mysqli_close($link);
  
?>
    </div>
</body>
</html>
