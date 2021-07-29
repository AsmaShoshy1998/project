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
		<div id="print">

				<div style="margin-left:250px;margin-top:60px;margin-right:190px;">
			<?php

$conn = mysqli_Connect('localhost','root','','db_hostel');
$sql="SELECT tb_student.Student_id,tb_student.Student_name,tb_student.Address,tb_student.Cell_No,tb_student.Date_of_Birth,tb_student.Signature,tb_fees.Food_Price,tb_fees.House_Rent,tb_fees.Total_Expenses  FROM tb_student
  LEFT OUTER JOIN tb_fees ON tb_student.Student_id = tb_fees.Fee_id";
$result = mysqli_query($conn,$sql);



if ($result->num_rows > 0)
{

while ($accused=mysqli_fetch_assoc($result)) 
{
	echo"<div style='position:relative; margin-top:80px;margin-bottom:0px;''>
			<center><h3>Begum Rokeya Hostel</h3></center>
			<center><h4>26-B/6,West Avenue,Dhaka-1230</h4></center>
			<center><h4>Contact Number: 01825449021</h4></center>
		</div>";
		echo"<table style='margin-left:0px' border='1'>
  <tr style='color:blue'>
	<th>Student ID</th>
	<th>Student Name</th>
	<th>Address</th>
	<th>Cell No</th>
	<th>Date of Birth</th>
    <th>Food Price</th>
	<th>House Rent</th>
	<th>Total Expenses</th>
  </tr>";

	echo "<p style='text-align:left;'>Date :".$accused['Date_of_Birth']."</p>";
	echo"<p style='text-align:right;font-size:26px;font-weight:900;font-style: oblique;'>".$accused['Student_name']."</p>";
	echo "<tr>";
	echo"<td>".$accused['Student_id']."</td>";
	echo"<td>".$accused['Student_name']."</td>";
	echo"<td>".$accused['Address']."</td>";
	echo"<td>".$accused['Cell_No']."</td>";
	echo"<td>".$accused['Date_of_Birth']."</td>";
	echo"<td>".$accused['Food_Price']."</td>";
	echo"<td>".$accused['House_Rent']."</td>";
	echo"<td>".$accused['Total_Expenses']."</td>";
	echo "</tr>";
	echo "</table>";
	echo "<p style='text-align:Right;'>Signature:___________".$accused['Signature']."</p>";

}
}
else
{
	echo "Conn failed";
}
?> 
</div>
</div>
<p><center><a href="javascript:void(0);" onclick="printPage();">Print</a> </center></p>
 
<footer class="footer" style="margin-top: 105px;">
		<h2>&copy Asma Ahmed Shoshy</br>
	ID : 17103067</br>
	Sec: E</h2>
</footer>
</div>
</body>
<script type="text/javascript">
 function printPage(){
			var prtContent = document.getElementById("print");
			var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0,border=1');
			WinPrint.document.write(prtContent.innerHTML);
			WinPrint.document.close();
			WinPrint.focus();
			WinPrint.print();
			WinPrint.close();
    };
    </script>
</html>