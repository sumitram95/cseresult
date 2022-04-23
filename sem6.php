<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEM 6th</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/tab.css">
   
</head>
<body>
    <section>
       <p>
          <a href="" class="result">Resul</a>
          <a href="" class="res">Exam - Feb, 2022 </a>
          <a href="">Result of 1st and 2nd Assessment of 1st Year (Batch 21)</a>
       </p>
       <h4>Reappear Result of 1st and 2nd Assessment of 1st Year (Batch 18,19,20)</h4>
       <h3>Haryana State Board of Technical Education</h3>
       <div class="b">
           <h2 class="rr">Result</h2>

           <form>
              <span>Roll Number &nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $_POST['roll']; ?></span><br>
              <span>Student Name &nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $_POST['name']; ?></span><br>
              <span>Father's Name&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $_POST['fname']; ?></span><br>
       
        <table>
            <tr>
                <th class="subject"><b class="tab">Subject Name</b></th>
                <th class="theory"><b class="tab">Thory</b></th>
                <th class="practical"><span class="tab">Practical</span></th>
            </tr>
            <tr>
                <td><b class="tab">	
                    Network Security</b></td>
                <td><b class="tab" id="madth"><?php echo $_POST['nsth']; ?></b></td>
                <td><b class="tab" id="madth"><?php echo $_POST['nsp']; ?></b></td>
            </tr>
            <tr>
                <td><b class="tab">	
                    Mobbile Application Development</b></td>
                <td><b class="tab" id="madth"><?php echo $_POST['madth']; ?></b></td>
                <td><b class="tab" id="madp"><?php echo $_POST['madp']; ?></b></td>
            </tr>
            <tr>
                <td><b class="tab">Application Development<br> Using web Framework</b></td>
                <td><b class="tab" id="webframeth"><?php echo $_POST['webframeth']; ?> </b></td>
                <td><b class="tab" id="webframep"><?php echo $_POST['webframep']; ?></b></td>
            </tr>
            <tr>
                <td><b class="tab">	
                    Entrepreneurship Development<br> and Management</b></td>
                <td><b class="tab" id="edmth"><?php echo $_POST['edmth']; ?></b></td>
                <td><b class="tab" id="edmp"><?php echo $_POST['edmp']; ?></b></td>
            </tr>
            <tr>
                <td><b class="tab">	
                    Project Work</b></td>
                <td><b class="tab" id="projectth"><?php echo $_POST['projectth']; ?></b></td>
                <td><b class="tab" id="projectp" ><?php echo $_POST['projectp']; ?></b></td>
            </tr>
            <tr>
                <td><b class="tab">GrandTotal</b></td>
                <td class="theory"></td>
                <td><b class="tab" id="total6"><?php echo $_POST['total6']; ?></b></td>
            </tr>
        </table>
    </form>
    </div>
        <h5>Result Of 6th Sem </h5>
            
     
    </section>
   <hr>
  <div class="c">
       	
 	
   </div>
  
    
</body>
</html>