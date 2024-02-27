<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="{{ url('style.css') }}" />
    <title>Uttara University</title>
  </head>
  <body>
    <nav>
      <div class="nav__content">
        <div class="logo"><a href="https://uttarauniversity.edu.bd/">Uttara University</a></div>
        <label for="check" class="checkbox">
          <i class="ri-menu-line"></i>
        </label>
        <input type="checkbox" name="check" id="check" />
        <ul class="nav-list">
          <li><a href="#">HOME</a></li>
          <li><a href="#">ABOUT</a></li>
          <li><a href="#">ADMISSION</a></li>
          <li><a href="{{url('/login')}}">ERP LOGIN</a></li>
          <li><a href="#">CONTACT</a></li>
        </ul>
      </div>
    </nav>
    <footer>
      <div class="footer-container">
        <div class="">
           <h3 class="footer-link-title">Admission</h3>
         <ul class="footer-link">
             <li><a href="https://uttarauniversity.edu.bd/admission/#why-study-at-uu">Why Study at UU</a></li>
           <li><a href="https://uttarauniversity.edu.bd/admission/#undergraduate-admission">Undergraduate Admission</a></li>
           <li><a href="https://uttarauniversity.edu.bd/admission/#undergraduate-admission">Graduate Admission</a></li>
           <li><a href="https://uttarauniversity.edu.bd/tuition-fees">Tuition &amp; Fees</a></li>
           <!--<li><a href="https://uttarauniversity.edu.bd/admission/#financial-aid">Financial Aids</a></li>-->
         </ul>
        </div>
        <div class="">
            <h3 class="footer-link-title">About</h3>
          <ul class="footer-link">
             <li><a href="https://uttarauniversity.edu.bd/about-us/">Brief History</a></li>
           <li><a href="https://uttarauniversity.edu.bd/about-us/#accordion">Overview</a></li>
           <li><a href="https://uttarauniversity.edu.bd/about-us/#mission-vision">Mission &amp; Vision</a></li>
           <li><a href="https://uttarauniversity.edu.bd/key-resource-person/">Key Resource Person</a></li>
           
         </ul>
        </div>
        <div class="">
            <h3 class="footer-link-title">Result</h3>
          <ul class="footer-link">  
             <li><a href="https://erp.uttarauniversity.edu.bd/online-result">Running Students</a></li>
           <li><a href="https://erp.uttarauniversity.edu.bd/result-archive">Result Archive</a></li>
           <li><a href="https://uttarauniversity.edu.bd/photo-gallery-2019/">Photo Gallery</a></li>
           <li><a href="https://uttarauniversity.edu.bd/convocations/">Convocations</a></li>
           
           
         </ul>
        </div>
        <div class="">
            <h3 class="footer-link-title">Quick links</h3>
          <ul class="footer-link">
             <li><a href="https://uttarauniversity.edu.bd/contact-us/">Contact Us</a></li>
           <li><a href="https://uttarauniversity.edu.bd/news-events/">News &amp; Events</a></li>
           <li><a href="https://uttarauniversity.edu.bd/achievements-social-responsibilities/">Achievements</a></li>
           <li><a href="https://uttarauniversity.edu.bd/upcoming-events/">Upcoming Events</a></li>
           <li><a href="https://uttarauniversity.edu.bd/notice/">Notice</a></li>
         </ul>
        </div>
      </div>
    </footer>
  </body>
</html>