@extends('main_master2')

@section('content')

<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2 class="text-start">Contact Us</h2>
                <ul>
                    <li> <a href="{{ route('index') }}"><i class="bi bi-house-door"></i> Home</a></li>
                    <li><i class="bi bi-chevron-double-right pe-2"></i> Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
       
           
    <div style="margin-top:0px;" class="row no-margin">
        
        <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107"  height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


      </div>

      <div class="row contact-rooo no-margin">
        <div class="container">
           <div class="row">
               
          
            <div style="padding:20px" class="col-sm-7">
            <h2 >Contact Form</h2> <br>
                <div class="row cont-row">
                    <div  class="col-sm-3"><label>Enter Name </label><span>:</span></div>
                    <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm"  ></div>
                </div>
                <div  class="row cont-row">
                    <div  class="col-sm-3"><label>Email Address </label><span>:</span></div>
                    <div class="col-sm-8"><input type="text" name="name" placeholder="Enter Email Address" class="form-control input-sm"  ></div>
                </div>
                 <div  class="row cont-row">
                    <div  class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                    <div class="col-sm-8"><input type="text" name="name" placeholder="Enter Mobile Number" class="form-control input-sm"  ></div>
                </div>
                 <div  class="row cont-row">
                    <div  class="col-sm-3"><label>Enter Message</label><span>:</span></div>
                    <div class="col-sm-8">
                      <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm"></textarea>
                    </div>
                </div>
                 <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                    <div class="col-sm-8">
                     <button class="btn btn-primary">Send Message</button>
                    </div>
                </div>
            </div>
             <div class="col-sm-5">    
                  <div style="margin:50px" class="serv"> 
                    <h2 style="margin-top:10px;">Address</h2>
                    Smart Computers <br>
                    Daman Street<br>
                    K.K District<br>
                    Phone:+91 9159669599<br>
                    Email:info@smart-eye.in<br>
                    Website:www.smart-eye.com<br>

               </div>    
             </div>
          </div>
        </div>
      </div>
            
    </body>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/plugins/testimonial/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>





@endsection


