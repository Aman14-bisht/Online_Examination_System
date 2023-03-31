<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
    *{
      font-family: /*cursive*/ roman;
    }
    .fb
    {
      font-size: 30px;
      color: blue;
    }
    .insta
    {
      font-size: 30px;
      color: hotpink;
    }
    .twit
    {
      color: blue;
      font-size: 30px;
    }
    .link
    {
      font-size: 30px;
      color: royalblue;
    }
    .footer-container
    {
      background: rgb(255, 255, 255);
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      padding: 50px 20px;
      color: white;
    }
    .footer-container .col-1
    {
      width: 25%;
    }
         .footer-container .col-1 div
         {
           padding: 20px 0;
           color: black;
         }
         .footer-container .col-1 div i
         {
             padding: 0 20px 0 0;
         }
         .footer-container .col-2
         {
            width: 25%;
         }       
         .footer-container .col-2 div
         {
            margin: 10px 0;
            font-size: 18px;
         }
         .footer-container .col-2 .text  
         {
          color: black;
         }
         .footer-container .col-2 .text:hover
         {
          color: #fd5f00;
         }

    .footer-container .col-2 .img-1
    {
      display: flex;
    }
    .footer-container .col-2 .img-1 img
    {
            width: 80px;
            height: 80px;
    }
    .footer-container .col-2 .img-1 .admin
    {
      margin: 0 15px;
    }
    .footer-container .col-2 .img-1 .admin .cal
    {
      color: gray;
      font-size: 13px;
    }
    .footer-container .col-2 .img-1 .admin .cal i
    {
      padding: 0 10px 0 0;
    }
      .footer-container .col-3
      {
        width: 25%;
      }
    .footer-container .col-3 ul 
    {
      margin: 20px 0;
    }
    .footer-container .col-3 ul li
    {
      margin: 12px 0;
      color: black;
      cursor: pointer;
    }
    .footer-container .col-3 ul li:hover
    {
      color:  #fd5f00;
    }
      .footer-container .col-4
      {
        width: 25%;
      }

    .footer-container .col-4 .input-1 input
    {
      padding: 15px 0;
      text-align: center; 
      width: 100%;  
      margin: 25px 0 10px 0;
      background: white;
    }
    .footer-container .col-4 .input-1 input::placeholder
    {
      color: black;
    }
    .footer-container .col-4 .input-2 input
    {
      background: blueviolet;
      width: 100%;
      padding: 14px 0;
      font-size: 18px;
    }
    .footer-container .col-4 .input-2 input:hover
    {
      cursor: pointer;
      color: white;
      background: #fd5f00;
    }
    .footer-container .col-4 .heading
    {
           margin: 30px 0 10px 0;
    }
    .footer-container .col-4 .icon i
    {
      padding: 0 25px 0 0;
    }
    .footer-container .copy 
    {
      margin: 40px 0;
    } 
    .footer-container .copy  span
    {
      color: black;
    } 
    .footer-li>ul
    {
     list-style: none;
    }
  
  @media(max-width: 1030px)
 {

    .footer-container .col-1
     {
      width: 100%;
      margin: 20px 0;
     }
     .footer-container .col-2
     {
       width: 100%;
       margin: 20px 0;
     }
     .footer-container .col-3
     {
      width: 100%;
      margin: 20px 0;
     }
     .footer-container .col-4
     {
      width: 100%;
      margin: 20px 0;
     }

  }
    
  </style>
</head>
<body>

   
  
    <div class="container-fluid">

   <div class="container-fluid p-5" id="about-us">
   	<h2 class="text-center card-header" >About Us</h2>
   	<h3 class=" my-2">About me</h3>
    </div>

   <div class="container">
   	<div class="row">
   	 <div class="col-sm-5">
   	 	<img src="img/aman.jpg" style="width: 50%; height: 60%;" class="rounded">
   	 </div>
   	 <div class="col-sm-7 my-3">
   	 	<h4>Hello...! My Name is Aman Bisht..</h4>
   	 	<p> <i class="fa fa-check-square-o pe-3"></i>I Am a Student of BCA.</p>
   	 	<p><i class="fa fa-check-square-o pe-3"></i>I am Doing BCA from Rishikesh.</p>
   	 	<p><i class="fa fa-check-square-o pe-3"></i>My College Name is Modern Institute of Technology.</p>
      <p><i class="fa fa-check-square-o pe-3"></i>Dhalwala,Rishikesh,Tehri Garhwal  (Uttarakhand).</p>
   	 	
   	 </div>
   	</div>
  </div>

   <div class="container-fluid my-3 p-3" id="record">
      <div class="row text-center">
        <div class="col-sm-3">
          <i class="fa fa-facebook fb"><a href=""></a></i> 
        </div>
         <div class="col-sm-3">
          <i class="fa fa-instagram insta"></i>
        </div>
         <div class="col-sm-3">
          <i class="fa fa-twitter twit"></i>
        </div>
         <div class="col-sm-3">
          <i class="fa fa-linkedin link"> </i>
        </div>
      </div>
    </div>


      <div class="container-fluid my-5">
        <h2 class="text-center">About College</h2>
            <div class="text-center my-5"> <img src="img/mit-2.png" class="rounded-circle" width="100px">
             <h3 class="text-primary">Ravi Juyal</h3>
             <h4>CEO</h4>
             <p>Modern institute of technology is situated at the edge of the Ganga river its a beautiful place to visit and study. Here is a good faculty.</p>
           </div>
           </div>

      <div class="container">
        <div class="text-center mb-5"><h2> <u> About Project</u> </h2></div>
         <div class="text-center my-5">
           <h3>INTRODUCTION</h3>
           <p class="my-3"> BackgroundManual Examinations problems are associated with its main center of focus oneducation in our country. The recent shutdown has resulted in a challenging situation foreducation institutes. All the students and institute staff is under lockdown. Technology lineonline conferencing and video base learning can be useful to continue the education of thestudent. However, managing the examination process is a challenging aspect considering thelockdown situation. Without academic exams, it is quite impossible to conclude the academiccycles. Online examination process can be an effective means to move traditional examconduction to online mode. Also after the COVID situation we can use online examination as publications of result also take a very long time owing to which students remain idle formonths. Students from different areas have to visit for query regarding filling up applicationform, payment of fees, examination date, syllabus, results etc. thus wasting students’ precioustime. To solve the problem of manual examination writing, I proposed a application that will provide a working environment that will be flexible and will provide ease of work and willreduce the time for report generation and other paper works.</p> 
         </div>

        <div class="text-center my-5">
         <h3>Objectives</h3>
         <span> Objective of online examination system is to enable user with its functionality ofuser friendly dashboard, multiple question type in question format, one exam solution invarious devices detailed analysis of examiner and results</span>
       </div>
        <div class="text-center my-5">
           <h3>Purpose</h3>
           <span>The purpose of the system is to develop Online Examination System., used to test theDomain knowledge of the students, and employees with respect to the particular technology.The manual procedure used for conducting exam is time consuming process and error pronedue to human limitations. The System purpose is to completely automate the old manual procedure of conducting exam to Online Web Based Examination System.</span>
        </div>
         <div class="text-center my-5">
          <h3>Scope</h3>
           <span>Methodology of the system is clear that result in the complete and proper working ofthe system from the requirements achieved. It contains the working model for thedevelopment of system. A sequential step of model is followed to develop the system so thatit will maintain various software engineering features/parameters. No need to take leave, visita different town, city or even states in some cases. People can appear right from their laptopor home desktop.</span>
         </div>
         <div class="text-center my-5">
          <h3>Applicability</h3>
           <span>
             <ol>
               <li>Saves paper</li>
               <li>Saves Time</li>
               <li>Maintains Security and Confidentiality</li>
               <li>Accessibility and flexibility by conducting exams anywhere</li>
               <li>Statistical analysis point of view, compared data can be stored anytime</li>
               <li> Cost Saving</li>
             </ol>
           </span>
         </div>

         <div class="text-center my-5">
           <h3 class="mb-2">Survey of Technologies</h3>
           <span> The project that has been developed is based on Web application and to develop this project we need to know basic concepts and related techniques. So following are brief detailsof technologies the project consists</span>
           </div>
            <div class="my-5">
             <h3 class="text-center">Languages Used:</h3>


             <div class="row">
              <div class="col-md-4">
             <h4>Front-End:</h4>
             <ol>
               <li>HTML</li>
               <li>CSS</li>
               <li>Javascript</li>
               <li>Bootstrap</li>
             </ol>
           </div>
             
             <div class="col-md-4">
             <h3>Backend:</h3>
             <ul>
               <li>PHP</li>
             </ul>
           </div>

           <div class="col-md-4">
          <h3>Database:</h3>
             <ul>
               <li>MySQL</li>
             </ul>
           </div>
      </div> 
      </div>  
       </div>


        <div class="footer-container">

  <div class="col-1">
    <h1>Have a Question?</h1>
    <div><i class="fa fa-map-marker"></i>GumaniWala,Rishikesh,UTTARAKHAND</div>
    <div><i class="fa fa-phone"></i> +91 9927006874 </div>
    <div><i class="fa fa-envelope"></i>amanbisht572@gmail.com</div>
  </div>

    <div class="col-2">
      <h1>Recent Blog</h1>
      <div class="img-1">
        <div class="admin">
           <div class="text">Even the all-powerful Pointing has no control about</div> 
           <div class="cal"><i class="fa fa-calendar"></i>August 23, 2001</div> 
           <div class="cal"><i class="fa fa-user"></i>Admin <i class="fa fa-file-text"></i>21</div> 
        </div>
      </div>
      <div class="img-1">
        <div class="admin">
           <div class="text">Even the all-powerful Pointing has no control about</div> 
           <div class="cal"><i class="fa fa-calendar"></i>May 27, 2022</div> 
           <div class="cal"><i class="fa fa-user"></i>Admin <i class="fa fa-file-text"></i>1</div>  
        </div>
      </div>
    </div>

    <div class="col-3 footer-li">
      <h1>Links</h1>
      <ul>
        <li><i class="fa fa-arrow-right"></i>Home</li>
        <li><i class="fa fa-arrow-right"></i>About</li>
        <li><i class="fa fa-arrow-right"></i>Services</li>
        <li><i class="fa fa-arrow-right"></i>Deparments</li>
        <li><i class="fa fa-arrow-right"></i>Contact</li>
      </ul>
    </div>

    <div class="col-4">
      <h1>Subscribe Us!</h1>
      <div class="input-1"><input type="text" placeholder="Enter email address"></div>
      <div class="input-2"><input type="button" value="Subscribe"></div>
      <div class="heading"><h1>Connect with Us</h1></div>
      <div class="icon"><i class="fa fa-twitter"></i> <i class="fa fa-facebook"></i> <i class="fa fa-instagram"></i></div>
    </div>

     <div class="copy"><span>Copyright ©2021 All rights reserved | This template is made By Aman Bisht</span></div>

</div>



</body>
</html>