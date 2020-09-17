<?php

			$dbcon = mysqli_connect('localhost','root','','bookingdb') or die('ไม่สามารถติดต่อ Mysql ได้'.mysqli_connect_error());

			echo "ติดต่อฐานข้อมูลได้แล้ว";
