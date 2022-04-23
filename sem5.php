<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEM 5th</title>
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
              <span>Father's Name &nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $_POST['fname']; ?></span><br>
       
        <table>
            <tr>
                <th class="subject"><b class="tab">Subject Name</b></th>
                <th class="theory"><b class="tab">Thory</b></th>
                <th class="practical"><span class="tab">Practical</span></th>
            </tr>
            <tr id="s1">
                <td><b class="tab">Software Engineering</b></td>
                <td><b class="tab" id="seth"><?php echo $_POST['seth']; ?> </b></td>
                <td><b class="tab" id="sep"> <?php echo $_POST['sep']; ?></b></td>
            </tr>
            <tr id="s2">
                <td><b class="tab">Computer Networks</b></td>
                <td><b class="tab" id="cnth"> <?php echo $_POST['cnth']; ?></b></td>
                <td><b class="tab" id="cnp"> <?php echo $_POST['cnp']; ?></b></td>
            </tr>
            <tr id="s3">
                <td><b class="tab">	
                    Computer Programming Using Python</b></td>
                <td><b class="tab" id="pythonth"><?php echo $_POST['pythonth']; ?> </b></td>
                <td><b class="tab" id="pythonp"><?php echo $_POST['pythonp']; ?></b></td>
            </tr>
            <tr id="s4">
                <td><b class="tab">Cloud Computung</b></td>
                <td><b class="tab" id="ccth"><?php echo $_POST['ccth']; ?></b></td>
                <td><b class="tab" id="ccp"><?php echo $_POST['ccp']; ?></b></td>
            </tr>
            <tr id="s5">
                <td><b class="tab">Web Development Using PHP</b></td>
                <td><b class="tab" id="webphpth"><?php echo $_POST['webphpth']; ?></b></td>
                <td><b class="tab" id="webphpp"><?php echo $_POST['webphpth']; ?></b></td>
            </tr>
            <tr>
                <td><b class="tab">GrandTotal</b></td>
                <td class="theory"></td>
                <td><b class="tab" id="total5"><?php echo $_POST['total5']; ?></b></td>
            </tr>
        </table>
    </form>
    </div>
        <h5>Result Of 5th Sem </h5>
       
         
            
     
    </section>
   <hr>
  <div class="c">
       	
 	
   </div>
  
    
</body>
</html>