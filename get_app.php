<?php
        session_start();
        $co=0;
        $con=mysqli_connect('localhost','root','','lms');
        $res=mysqli_query($con,"select * from applicants");   
        echo mysqli_num_rows($res);  
?>        
<html>
    <style>
               
body
{
	background-image:url("2.jpg");
	background-position:center;
	background-size:cover;
	font-family:"Trebuchet MS";
}
#but1{
	height:12%;
	width:16.5%;
}
#but2{
	height:7.5%;
	width:7.5%;
}
#but1,#but2{
	color:white;
	background-color:rgb(0,0,0,0.3);
	border-style:groove;
	border-radius:50px;
	border:none;
	outline:none;
}
#but1:hover,#but2:hover{
	background-color:rgb(255,255,255,0.2);
	color:black;
	border-radius:50%;
}
div{
	padding-left:10%;
	padding-top:30%;
}
th{
    background-color:black;
    color:white;
}
</style>
            
            <body>
                <div id='cont'>
                    <div id='cont2'>
                    
                        <div style='overflow-x:auto;overflow-y:auto;'>
                        
                        <table border="1">
                        <thead>
                        <tr>
                            <th >Sno</th>
                            <th>Name</th>
                            <th>DoB</th>
                            <th>mail</th>
                            <th>phone</th>
                            <th>qual</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $i=1 ?>
                       
                        <?php while( $row = mysqli_fetch_array($res,MYSQLI_ASSOC)) : ?>
                        <tr>
                            
                            <td><?php echo $i; ?></td>
                                <?php $i=$i+1; ?>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['dob']; ?></td>
                            <td><?php echo $row['mail']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['qual']; ?></td>
                            
                        </tr>
                        <?php endwhile ?>
                        </tbody>
                    </table>
                        </div>
                    </form>
                    </div>
                </div>
            </body>
        </html>
