<!DOCTYPE html>
<html>
	<head><title>Hostel</title>
</head>
<link rel="stylesheet" type="text/css" href="l.css">
	<body>
	<div class="containar">
		<header>
		<div class="header">
<center><h2><font color="Bao564" style="font-family:Algerian;"><b>Hostel Management System</b></font></h2>
</center>
		<center><h4><font size="+2"color="703293" style="font-family:Algerian;">Begum Rokeya Hostel</font></h4></center><hr>
		</div>
		</header>
		<ul>
				<li><a href="http://localhost/project/home.php">Home</a></li>
				<li> <a href="#">Insert</a>
					<ul >
						<li><a href="hostel.php">Hostel</a></li>
				<li><a href="student.php">Students</a></li>
				<li><a href="room.php">Room</a></li>
				<li><a href="fee.php">Fee</a></li>
				<li><a href="staff.php">Staff</a></li>
					</ul>
			</li>
				<li><a href="#">View</a>
				<ul >
						
				<li><a href="hostel_view.php">Hostel</a></li>
				<li><a href="student_view.php">Students</a></li>
				<li><a href="room_view.php">Room</a></li>
				<li><a href="fee_view.php">Fee</a></li>
				<li><a href="staff_view.php">Staff</a></li>
				</ul>
				</li>
				<li><a href="#">Search</a>
				<ul >
						
				<li><a href="hostel_search.php">Hostel</a></li>
				<li><a href="student_search.php">Students</a></li>
				<li><a href="room_search.php">Room</a></li>
				<li><a href="fee_search.php">Fee</a></li>
				<li><a href="staff_search.php">Staff</a></li>
				</ul>
				</li>
				<li><a href="report.php"">Report</a></li>
</ul><br>
		<br><br>
		<table width=100%>
		<tr>
		<td>
		<div id="clockbox">
        <script type="text/javascript">
    var tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

    function GetClock(){
        var d=new Date();
        var nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
        if(nyear<1000) nyear+=1900;

        var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

        if(nhour==0){ap=" AM";nhour=12;}
        else if(nhour<12){ap=" AM";}
        else if(nhour==12){ap=" PM";}
        else if(nhour>12){ap=" PM";nhour-=12;}

        if(nmin<=9) nmin="0"+nmin;
        if(nsec<=9) nsec="0"+nsec;

        document.getElementById('clockbox').innerHTML=""+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
    }

        window.onload=function(){
            GetClock();
            setInterval(GetClock,1000);
        }
        </script>
		</td>
		<td>
		</td>
		<td>
 <center> <font size="5" style="font-family: Comic Sans MS;" style="width:100px;height:45px;"><br>
			<h2 class =" heading">Insert Hostel Information </h2>
			<form action="hostel_connection.php" method="POST">
	<div class="a">
	<p>Hostel_id:</br>
		<input type="number" name="Hostel_id" value=""></p>
		
	<p>No_of_Room:</br>
		<input type="text" name="No_of_Room" value=""></p>
		
	<p>No_of_Students:</br>
	
		<input type="number" name="No_of_Students" value=""></p>
		<p>Location:</br>
	
		<input type="texts" name="Location" value=""></p>
		<input type="Submit" value="Submit">
	</div>
</form>
<div class="toast">
	<?php
$servername="localhost";
$username="root";
$password="";
$db_name="db_hostel";
$conn=mysqli_connect($servername,$username,$password,$db_name);
if(!$conn)
{
	die("Connection failed");
}
else
{
echo nl2br("Successfully connected to the server\n");
}
$sql="INSERT INTO tb_hostel(Hostel_id,No_of_Room,No_of_Students,Location) VALUES('$_POST[Hostel_id]','$_POST[No_of_Room]','$_POST[No_of_Students]','$_POST[Location]')";
if(mysqli_query($conn, $sql))
{
	echo nl2br("New record inserted successfully\n");
}
else
{
	echo nl2br("error");
}
?>
</div>
<footer class="footer" style="margin-top: 105px;">
		<h2>&copy Asma Ahmed Shoshy</br>
	ID : 17103067</br>
	Sec: E</h2>
</footer>
</div>
</body>
</html>