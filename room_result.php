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
		<h2 class =" heading">Search Result For Hostel</h2>
			<div class="table" style="margin-left:510px;">
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbName = "db_hostel"; 
  $connection = mysqli_connect($servername, $username, $password, $dbName);
  if ($connection) {
    echo "<br>";
  } else {
    die("Connection failed.<br>".mysqli_connect_error());
  }
$term = $_POST['term'];    

$SQL = "SELECT * FROM tb_room WHERE Room_id LIKE '$term'";
  $result = mysqli_query($connection, $SQL);
  if ($result->num_rows > 0) {
     echo "<table width'600' border='1' cellspacing='1'><tr><th>Room_id</th><th>Capacity</th><th>Name_of_Student</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>"  . $row["Room_id"]."</td><td>". $row["Capacity"]."</td><td>".$row["Name_of_Student"]."</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
?>
</div>
</form>
<a href="javascript:void(0);" onclick="printPage();">Print</a> 
<footer class="footer" style="margin-top: 105px;">
		<h2>&copy Asma Ahmed Shoshy</br>
	ID : 17103067</br>
	Sec: E</h2>
</footer>
</div>
<script>
 function printPage(){
        var tableData = '<table border="1" td cellpaddin="5" td width="30%" td text-align="center">'+document.getElementsByTagName('table')[0].innerHTML+'</table>';
        var data = '<button onclick="window.print()">Print this page</button>'+tableData;       
        myWindow=window.open('','','width=800,height=600');
        myWindow.innerWidth = screen.width;
        myWindow.innerHeight = screen.height;
        myWindow.screenX = 0;
        myWindow.screenY = 0;
        myWindow.document.write(data);
        myWindow.focus();
    };
</script>
</body>
</html>