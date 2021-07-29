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

			<h2 class =" heading">Show Information</h2>
			<div class="table" style="margin-left:130px;">
					<div id="print">
					<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_hostel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM tb_student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   echo "<table width'600' border='1' cellspacing='1'><tr><th>Student_id</th><th>Student_name</th><th>Address</th><th>Department</th><th>Cell_No</th><th>Age</th><th>Date_of_Birth</th><th>Signature</th><th class='dontprint'>Action</th><th class='dontprint'> Action</th><th class='dontprint'>Action</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>"  . $row["Student_id"]."</td><td>". $row["Student_name"]."</td><td>".$row["Address"]."</td><td>".$row["Department"]."</td><td>"  . $row["Cell_No"]."</td><td>"  . $row["Age"]."</td><td>"  . $row["Date_of_Birth"]."</td><td>"  . $row["Signature"]."</td><td class='dontprint'><a href='student_edit.php?Student_id=".$row['Student_id']."' style='text-decoration: none' />Edit</a></td><td class='dontprint'><a href='student_delete.php?Student_id=".$row['Student_id']."' style='text-decoration: none;' />Delete</a></td><td class='dontprint'><a href='student_print.php?Student_id=".$row['Student_id']."' onclick='myWindow=window.open(this.ref 'newwindow','width=300,height=250')';>Print</a></td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
$conn->close();
?> 
</div>
</div>

<p><center><a href="javascript:void(0);" onclick="printDiv('print');">Print</a> </center></p>
<footer class="footer" style="margin-top: 105px;">
		<h2>&copy Asma Ahmed Shoshy</br>
	ID : 17103067</br>
	Sec: E</h2>
</footer>
</div>
<script type="text/javascript">
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}   
 </script>​​​​​​
</body>
</html>`