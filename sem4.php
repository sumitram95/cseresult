<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEM 4th</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/tab.css">
</head>
<body>
    <section>
       <p>
          <a href="" class="result">Result</a>
          <a href="" class="res">Exam - Feb, 2022 </a>
          <a href="">Result of 1st and 2nd Assessment of 1st Year (Batch 21)</a>
       </p>
       <h4>Reappear Result of 1st and 2nd Assessment of 1st Year (Batch 18,19,20)</h4>
       <h3>Haryana State Board of Technical Education</h3>
       <div class="b">
           <h2 class="rr">Result</h2>

           <form action="/" method="get">
              <span>Roll Number &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $_POST['roll']; ?></span><br>
              <span>Student Name &nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $_POST['name']; ?> </span><br>
              <span>Father's Name &nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $_POST['fname']; ?> </span><br>
       
        <table>
            <tr>
                <th class="subject"><b class="tab">Subject Name</b></th>
                <th class="theory"><b class="tab">Thory</b></th>
                <th class="practical"><span class="tab">Practical</span></th>
            </tr>
            <tr id="s1">
                <td><b class="tab">Data Structure using C</b></td>
                <td><b class="tab" id="datcth"><?php echo $_POST['datcth']; ?> </b></td>
                <td><b class="tab" id="datcp"><?php echo $_POST['datcp']; ?> </b></td>
            </tr>
            <tr id="s2">
                <td><b class="tab">	
                    Computer Organization</b></td>
                <td><b class="tab" id="comorgth"><?php echo $_POST['comorgth']; ?> </b></td>
                <td><b class="tab" id="comorgp"> <?php echo $_POST['comorgp']; ?></b></td>
            </tr>
            <tr id="s3">
                <td><b class="tab">	
                    	Data base Management System</b></td>
                <td><b class="tab" id="dbmsth"><?php echo $_POST['dbmsth']; ?> </b></td>
                <td><b class="tab" id="dbmsp"> <?php echo $_POST['dbmsp']; ?></b></td>
            </tr>
            <tr id="s4">
                <td><b class="tab">	
                    Object Oriented Programming Using C</b></td>
                <td><b class="tab" id="oopcth"> <?php echo $_POST['oopcth']; ?></b></td>
                <td><b class="tab" id="oopcp"><?php echo $_POST['oopcp']; ?> </b></td>
            </tr>
            <tr id="s5">
                <td><b class="tab">	
                    Microprocessors & Peripheral Devices</b></td>
                <td><b class="tab" id="mpdth"><?php echo $_POST['mpdth']; ?> </b></td>
                <td><b class="tab" id="mpdp"> <?php echo $_POST['mpdp']; ?></b></td>
            </tr>
            <tr>
                <td><b class="tab">GrandTotal</b></td>
                <td class="theory"></td>
                <td><b class="tab" id="total4"><?php echo $_POST['total4']; ?> </b></td>
            </tr>
        </table>
    </form>
    </div>
        <h5>Result Of 4th SEm</h5>
      
         
            
     
    </section>
   <hr>
  <div class="c">
       	
 	
   </div>
  
    
</body>
</html>