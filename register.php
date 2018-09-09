<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8" content="width=device-width, initial-scale=1">
        <title>Run for ตุ๊ดตู่</title>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
}

/* Style the header */
header {
    background-color: #000033;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: right;
    width: 30%;
    height: 300px; /* only for demonstration, should be removed */
    background: #e6e6ff;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: #e6e6ff;
    height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: #000066;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
        
    }
}
form{
    display: block;
    margin-left: auto;
    margin-right: auto;
}

</style>
</head>
<body>
<header>
  <h2>Register Run for ตุ๊ดตู๋</h2>
</header>

<section>

<form method="post" action="result-01.php">
<br><br>
  Name :
  <input type="text" name="firstname" placeholder="ชื่อ">
  <br><br>
  Last name:
  <input type="text" name="lastname" placeholder="นามสกุล">
  <br><br>
  เบอร์โทรศัพท์มือถือ :
  <input type="text" name="phoneNumber" placeholder="08xxxxxxxx">
  <br><br>
  E-mail :
  <input type="text" name="email" placeholder="example@example.com">
  <br><br>
  gender :
  <select name="gender">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    </select><br><br>
  วันเกิด :
  <input type="date" name="date">
  <br><br>
  ประเภทการแข่งขัน :
  <input list="run" name="running">
  <datalist id="run">
  <select>
    <option value="ระยะ 5 km">ระยะ 5 km</option>
    <option value="ระยะ 10 km">ระยะ 10 km</option>
    <option value="ระยะ 21 km">ระยะ 21 km</option>
    </select>
    </datalist>
  <br><br>
  รุ่นอายุ :
  <input list="runOld" name="runOld">
  <datalist id="runOld">
    <option value="16 - 35 ปี">16 - 35 ปี</option>
    <option value="36 - 45 ปี">36 - 45 ปี</option>
    <option value="45 - 55 ปี">45 - 55 ปี</option>
    <option value="56 ปีขึ้นไป">56 ปีขึ้นไป</option>
    </datalist>
  <br><br>
  ค่าสมัคร :
  <input list="payRun" name="payRun">
  <datalist id="payRun">
    <option value="300 บาท">300 บาท</option>
    
    </datalist>
  <br><br>
  ขนาดเสื้อ :
  <input list="size" name="size">
  <datalist id="size">
    <option value="SS">
    <option value="S">
    <option value="M">
    <option value="L">
    <option value="XL">
    <option value="XXL">
    <option value="XXXL">
    </datalist>
  <br><br>
  ชมรม :
  <input type="text" name="group"  placeholder="ชมรมรักษ์วิ่ง">
  <br><br>
  ประเทศ :
  <input type="text" name="country" placeholder="Thailand">
  <br><br>
  รหัสบัตรประชาชน :
  <input type="text" name="User_ID" placeholder="123xxxxxxxxxx">
  <br><br><br>
  <input type="submit" name="submit" value="ส่งขอมูล"><br><br>
  
</form>

</section>
<footer>
  <p>Footer</p>
</footer>

    </body>
</html>