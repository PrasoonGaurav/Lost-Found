<!DOCTYPE html>
<html>

<head>
    <title>Lost Electronics</title>
    <style type="text/css">
        * {
            padding: 0px;
            margin: 0px;
        }

        @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500);
        *:focus {
            outline: none;
        }

       /* body {
  margin: 0;
  padding: 0;
  background: #DDD;
  font-size: 16px;
  color: #222;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
} */

        img {
            /*opacity: 0.5; */
            position: absolute;
        }
        .navbar {
      overflow: hidden;
      background-color: #333;
    }

    .navbar a {
      float: left;
      font-size: 16px;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .dropdown {
      float: left;
      overflow: hidden;
    }

    .dropdown .dropbtn {
      font-size: 16px;
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }

    .navbar a:hover,
    .dropdown:hover .dropbtn {
      background-color: gray;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

        #login-box {
            position: relative;
            margin: auto;
            width: 350px;
            height: 700px;
            background: #FFF;
            border-radius: 2px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            opacity:0.7;
align:center;
        }

	
        .left {
            position: absolute;
            top: 0;
            left: 0;
            box-sizing: border-box;
            padding: 40px;
            width: 300px;
            height: 400px;
	align:center;
        }

        h1 {
            margin: 0 0 20px 0;
            font-weight: 300;
            font-size: 28px;
        }

        input[type="text"],
        input[type="password"] {
            display: block;
            box-sizing: border-box;
            margin-bottom: 20px;
            padding: 4px;
            width: 220px;
            height: 32px;
            border: none;
            border-bottom: 1px solid #AAA;
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            font-size: 15px;
            transition: 0.2s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-bottom: 2px solid #16a085;
            color: #16a085;
            transition: 0.2s ease;
        }

        input[type="submit"] {
            margin-top: 28px;
            width: 120px;
            height: 32px;
            background: #030606;
            border: none;
            border-radius: 2px;
            color: #FFF;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            text-transform: uppercase;
            transition: 0.1s ease;
            cursor: pointer;
            
        }

        input[type="submit"]:hover,
        input[type="submit"]:focus {
            opacity: 0.8;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            transition: 0.1s ease;
        }

        input[type="submit"]:active {
            opacity: 1;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
            transition: 0.1s ease;
        }

        .or {
            position: absolute;
            top: 180px;
            left: 280px;
            width: 40px;
            height: 40px;
            background: #DDD;
            border-radius: 50%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            line-height: 40px;
            text-align: center;
        }

      /*  .right {
            position: absolute;
            top: 0;
            right: 0;
            box-sizing: border-box;
            padding: 40px;
            width: 300px;
            height: 400px;
            background: url('https://goo.gl/YbktSj');
            background-size: cover;
            background-position: center;
            border-radius: 0 2px 2px 0;
        }*/

      /*  .right .loginwith {
            display: block;
            margin-bottom: 40px;
            font-size: 28px;
            color: #FFF;
            text-align: center;
        }*/

        button.social-signin {
            margin-bottom: 20px;
            width: 220px;
            height: 36px;
            border: none;
            border-radius: 2px;
            color: #FFF;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            transition: 0.2s ease;
            cursor: pointer;
        }

        button.social-signin:hover,
        button.social-signin:focus {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            transition: 0.2s ease;
        }

        button.social-signin:active {
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
            transition: 0.2s ease;
        }

        button.social-signin.facebook {
            background: #32508E;
        }

        button.social-signin.twitter {
            background: #55ACEE;
        }

        button.social-signin.google {
            background: #DD4B39;
        }

        .picblock{
  background-image: url('foundass.png');
  background-repeat: no-repeat;
  background-size: cover;
}
    </style>
</head>

<body class="picblock">
    <!--<img src="thumbnail.jfif" alt="" srcset="" width="100%">-->

    <div class="navbar">
    <a href="home.html">Home</a>
    <div class="dropdown">
      <button class="dropbtn">Lost Items
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="lostb.php">Books</a>
        <a href="lostelec.php">Electronics</a>
        <a href="lostid.php">Identity</a>
        <a href="lostper.php">Personal Accessories</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Found Items
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="foundb.php">Books</a>
        <a href="foundelec.php">Electronics</a>
        <a href="foundid.php">Identity</a>
        <a href="foundpers.php">Personal Accessories</a>
      </div>
    </div>
    <a href="AboutUsF.htm">About Us</a>
    <a
      href="https://docs.google.com/forms/d/e/1FAIpQLSdL6TlouqrcGyJCKHCGtUSUMmXYJL8xmKHXxHZe7jJn_x4BaQ/viewform?usp=sf_link">Enquiry</a>

  </div>

    <div id="login-box" >
<div class="left">
            <h1><b>Lost Item Details</b></h1>
<form action="#" method="post">
            <!--<b> ID <input type="text" name="pid" id="pid" placeholder="Enter Accesory ID-Eg. AB-123" /> -->
           <b> Student Name  <input type="text" name="sname" id="sname" placeholder="Enter Your Name" />
            <b>Email ID</b> &nbsp; &nbsp;  <input type="text" id="email" name="email" placeholder="Eg. xyz@gmail.com" />
            <b>Contact No.</b> &nbsp; &nbsp;  <input type="text" name="con" id="con" placeholder="Eg. 9999999999" />
           
            <b>Brand Type</b> &nbsp; &nbsp;  <input type="text" name="bname" id="bname" placeholder="Eg. Mi, Samsung,Asus etc " />
            <b>Colour</b> &nbsp; &nbsp;  <input type="text" name="colour" id="col" placeholder="Eg. Black,White etc" />
            <b>Location Where Found</b> &nbsp; &nbsp;  <input type="text" name="loc" id="loc" placeholder="Location" />
            <b>Others</b> &nbsp; &nbsp;  <input type="text" name="oth" id="oth" placeholder="Please Specify" >
            
            
           <center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <input class="bttn" type="submit" name="btn" value="SUBMIT" onclick="return validate();"/> </center>
    </form>
        </div>
        
        

    </div>
 <!-- <input  type="submit" name="btn" value="SUBMIT" ;/>-->

</body>

</html>
<?php

 if(isset($_POST["btn"]))
 {
    //$i=$_POST["pid"];
    $s=$_POST["sname"];
    $e=$_POST["email"];
    $cn=$_POST["con"];
     $b=$_POST["bname"];
     $c=$_POST["colour"];
     $l=$_POST["loc"];
     $r=$_POST["oth"];
     $path=mysqli_connect("localhost","root","root","lost");
     $qry="insert into personal values('".$s."','".$e."','".$cn."','".$b."','".$c."','".$l."','".$r."')"; 
     $res=mysqli_query($path,$qry);
     if($res)
     {
        $msg='<br><br><center><font color="royalblue"><b>SUBMITTED SUCCESSFULLY <br> Check it out in "Lost Items" section. </b> </center></font>';
        echo $msg;
     }
     else 
     {
         $msg='<br><br><center><font color="red"><b>PLEASE TRY AGAIN</b></font>';
        echo $msg;
     } 
 }
 ?>
<script>
	function validate()
	{
		
		var bookpattern = /^[a-z\d\-_\s]+$/i;
		var namepattern = /^[a-z\-_\s]+$/i;
		var emailpattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([com\co\.\in])+$/;
		
        var stuname=document.getElementById("sname").value;

if(stuname=='' || stuname==0)
{
alert("Enter Student Name!!");
return false;
}
if(!namepattern.test(stuname))
{
alert("Not a valid Student Name!!");
return false;
 }
var id=document.getElementById("pid").value;

        if(id=='' || id==0)
        {
        alert("Enter ID!!");
        return false;
        }

 var em=document.getElementById("email").value;

if(em=='' || em==0)
{
alert("Enter Email!!");
return false;
}
if(!emailpattern.test(em))
{
alert("Not a valid Email!!");
return false;
 }

 var contact=document.getElementById("con").value;

if(contact=='' || contact==0)
{
alert("Enter Contact!!");
return false;
}
if(!bookpattern.test(contact))
{
alert("Not a valid Contact!!");
return false;
 }

 if(brandname=='' || brandname==0)
		{
			alert("Enter Brand Name!!");
			return false;
		}
		if(!namepattern.test(cardname))
		{
			alert("Not a valid Brand Name!!");
			return false;
		}


		var colourname=document.getElementById("cname").value;

		if(colourname=='' || colourname==0)
		{
			alert("Enter Colour Number!!");
			return false;
		}
		if(!namepattern.test(colourname))
		{
			alert("Not a valid Colour number!!");
			return false;
		}


		var location=document.getElementById("loc").value;

		if(location=='' || location==0)
		{
			alert("Enter Location!!");
			return false;
		}
		if(!bookpattern.test(location))
		{
			alert("Not a valid Location Name!!");
			return false;
		}

		var others=document.getElementById("oth").value;

       if(others=='' || others==0)
          {
	alert("Enter valid text!!");
	return false;
         }
       if(!namepattern.test(others))
       {
	alert("Not a valid Text!!");
	return false;
       }
    }
    </script>
