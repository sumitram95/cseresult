<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEm 3rd</title>
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
              <span>Roll Number &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $_POST['roll']; ?><br>
              <span>Student Name &nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $_POST['name']; ?><br>
              <span>Father's Name &nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $_POST['fname']; ?><br>
       
        <table>
            <tr>
                <th class="subject"><b class="tab">Subject Name</b></th>
                <th class="theory"><b class="tab">Thory</b></th>
                <th class="practical"><span class="tab">Practical</span></th>
            </tr>
            <tr id="s1">
                <td><b class="tab">Programming in C</b></td>
                <td><b class="tab" id="progcth"><?php echo $_POST['progcth']; ?></b></td>
                <td><b class="tab" id="progcp"><?php echo $_POST['progcp']; ?></b></td>
            </tr>
            <tr id="s2">
                <td><b class="tab">Operating Systems</b></td>
                <td><b class="tab" id="opersysth"><?php echo $_POST['opersysth']; ?></b></td>
                <td><b class="tab" id="opersysp"><?php echo $_POST['opersysp']; ?></b></td>
            </tr>
            <tr id="s3">
                <td><b class="tab">Digital Electronics</b></td>
                <td><b class="tab" id="digelecth"><?php echo $_POST['digelecth']; ?></b></td>
                <td><b class="tab" id="digelecp"><?php echo $_POST['digelecp']; ?></b></td>
            </tr>
            <tr id="s4">
                <td><b class="tab">	
                    Multimedia Applications</b></td>
                <td><b class="tab" id="mulappth"><?php echo $_POST['mulappth']; ?></b></td>
                <td><b class="tab" id="mulappp"><?php echo $_POST['mulappp']; ?></b></td>
            </tr>
            <tr id="s5">
                <td><b class="tab">Data Communication</b></td>
                <td><b class="tab" id="datcommth"><?php echo $_POST['datcommth']; ?></b></td>
                <td><b class="tab" id="datcommp"><?php echo $_POST['datcommp']; ?></b></td>
            </tr>
            <tr>
                <td><b class="tab">GrandTotal</b></td>
                <td class="theory"></td>
                <td><b class="tab" id="total3"><?php echo $_POST['total3']; ?></b></td>
            </tr>
        </table>
    </form>
    </div>
        <h5>Result Of 3rd Sem </h5>
        
         
            
     
    </section>
   <hr>
  <div class="c">
       	
 	
   </div>
  
    
</body>
</html>