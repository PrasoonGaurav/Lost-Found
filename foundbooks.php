<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12" style="height:600px;width">
                    <br>
                    <form action="#" method="post">
                    <input type="text" value="" name="txt" placeholder="Book ID"/ style="width:200px"> &nbsp;&nbsp;&nbsp;
                    <input type="submit" value="Submit" name="search" >
                </form>
                    <h1 align="center">BOOK DETAILS</h1>
                    <?php include 'db1.php';
                    $link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
                    if(isset($_POST['search']))
                    {
                            $s=$_POST['txt'];
                            $link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);   
                            $qry="select * from books where bookid LIKE '%$s%'";
                            $result=mysqli_query($link,"$qry");
                            if(mysqli_affected_rows($link)>0)
                            {
                                 echo "<table border='1' width='100%'>";
                        echo "<tr>";
                        echo "<th>Book ID</th><th>Name of Book</th><th>Author's Name</th><th>Location Found</th><th>Number of Books</th><th>Remarks</th><th>Founder's Name</th><th>Year</th><th>Contact Number</th><th>Email ID</th><th>Others</th><th></th>";
                        echo "</tr>";
      
                        while($row=  mysqli_fetch_array($result)) //$row returns reference of result set
                        {
                            echo "<tr>";
                            echo "<td>$row[0]</td>";
                            echo "<td>$row[1]</td>";
                            echo "<td>$row[2]</td>";
                            echo "<td>$row[3]</td>";
                            echo "<td>$row[4]</td>";
                            echo "<td>$row[5]</td>";
                            echo "<td>$row[6]</td>";
                            echo "<td>$row[7]</td>";                            
                            echo "<td>$row[8]</td>";
                            echo "<td>$row[9]</td>";
                            echo "<td>$row[10]</td>";
                            echo "<td><a href='delbooks.php?id=$row[9]'>Delete</a></td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }  
                    else
                    {
                        echo 'NO RECORD FOUND';
                    }
                        }
                        else
                        {
                            $qry="select * from books";
                    $result=mysqli_query($link,"$qry");
                    if(mysqli_affected_rows($link)>0)
                    {
                        echo "<table border='1' width='100%'>";
                        echo "<tr>";
                        echo "<th>Book ID</th><th>Name of Book</th><th>Author's Name</th><th>Location Found</th><th>Number of Books</th><th>Remarks</th><th>Founder's Name</th><th>Year</th><th>Contact Number</th><th>Email ID</th><th>Others</th><th></th>";
                        echo "</tr>";
      
                        while($row=  mysqli_fetch_array($result)) //$row returns reference of result set
                        {
                            echo "<tr>";
                            echo "<td>$row[0]</td>";
                            echo "<td>$row[1]</td>";
                            echo "<td>$row[2]</td>";
                            echo "<td>$row[3]</td>";
                            echo "<td>$row[4]</td>";
                            echo "<td>$row[5]</td>";
                            echo "<td>$row[6]</td>";
                            echo "<td>$row[7]</td>";                            
                            echo "<td>$row[8]</td>";
                            echo "<td>$row[9]</td>";
                            echo "<td>$row[10]</td>";
                            echo "<td><a href='delbooks.php?id=$row[9]'>Delete</a></td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }  
                    else
                    {
                        echo 'NO RECORD FOUND';
                    }
                }

                    mysqli_close($link)
                    ?>
                    
                </div>              
            </div>
        </div>
    </body>
</html>
