<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>SUKUK</title>
  <meta content="width=device-width,initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">


  <link href= "css/bootstrap.min.css" rel="stylesheet">
  <link href= "css/style.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
 </head>

 <body>
  <!--  Navigation starts here-->
  <div class="container-fluid navbar-dark">
   <nav class="navbar navbar-expand-lg container">
    <a class="navbar-brand "><img class="" src="img/lotus logo(small).svg" width="40"><b class="text-white ml-md-2">LOTUS CAPITAL</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        About lotus
       </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
       </div>
      </li>
     </ul>
     <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Services
       </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
       </div>
      </li>
      <li class="nav-item active">
       <a class="nav-link" href="#">Log In </a>
      </li>
      <li class="nav-item">
       <button type="submit" class="btn btn-default rounded-0" data-toggle="modal" data-target="#exampleModalCenter">Create new account</button>
      </li>
     </ul>
    </div>
   </nav>
  </div>
  <!--  Navigation ends here-->

  <div class="text-center my-4">
   <h5 class="color_one disclaimer_p">SUBSCRIPTION FORM FOR N100 BILLION SUKUK ISSUANCE ON BEHALF OF THE FEDERAL  GOVERNMENT OF NIGERIA </h5>
  </div>

  <div class="container">
   <div class="row">
    <hr class=" mb-2 mt-0 d-inline-block mx-auto" style="width: 100%;" />
   </div>
  </div>

  <div class="text-center">
   <P class="color_two" >Please fill out all fields</P>
  </div>

  <div class="container">
   <div class="row justify-content-center">
    <div class="col-md-8">
     <form class="" action="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/lotus/index.php?action=save'; ?>" method="POST" enctype="multipart/form-data">
      <div class="row">
       <div class="col">
        <p class="disclaimer_p mb-0"><b>E-allotment Details</b></p>
       </div>
      </div>

      <div class="row">
       <div class="col-md-6">
        <div class="form-label-group my-4">
         <input id="cscs_number" name="cscs_number" type="text" class="form-control cmput" placeholder="Applicant’s CSCS/Custodian A/C No. " maxlength="8" required>
         <label for="cscs_number">Applicant’s CSCS/Custodian A/C No. </label>
        </div>
       </div>

       <div class="col-md-6">
        <div class="form-label-group my-4">
         <input id="chn_number" type="text" class="form-control cmput" name="chn_number" maxlength="8"  placeholder="Applicant’s Clearing House No. (CHN)" required>
         <label for="chn_number">Applicant’s Clearing House No. (CHN) </label>
        </div>
       </div>
      </div>

      <div class="row mb-2">
       <div class="col-md-6">
        <p class="disclaimer_p red mb-0"><b>Please note:</b></p>
        <p class="disclaimer_p mb-0">1 unit = N1,000.00</p>
        <p class="disclaimer_p mb-0">The minimum investment value is N10,000.00</p>
        <p class="disclaimer_p mb-0">Multiples thereafter = N1,000.00</p>
       </div>
      </div>

      <div class="row mt-2">
       <div class="col-md-6">
        <p class="disclaimer_p mb-0"><b>Investment value in units</b></p>
       </div>
      </div>
      <div class="form-label-group mt-2 mb-4">
       <input id="investment_val" value="10" name="investment_val" type="text" class="form-control cmput" placeholder="investment value (10 unit min)" maxlength="10" required>
       <label for="investment_val">Investment value (10 unit minimum) - click to change</label>
      </div>

      <div class="form-group">
       <label for="investor_cat">Investor Category</label>
       <select name="investor_cat" class="form-control" id="">
        <option>Retail</option>
        <option>Insurance</option>
        <option>Deposit Money Banks</option>
        <option>Fund Managers & Non-Bank Financial Institution</option>
        <option>Ethical Fund Managers/Non-Interest Banks
        </option>
        <option>Government Agencies
        </option>
        <option>Foreign Investors</option>
        <option>Other Institution</option>
       </select>
      </div>

      <div class="form-label-group my-4">
       <input id="name" type="text" class="form-control cmput" name="full_name"   placeholder="Full Name" required>
       <label for="name">Full Name  (State titles if any e.g. Mr., Mrs., Miss)</label>
      </div>


      <div class="form-label-group my-4">
       <input id="address" type="text" class="form-control cmput"   placeholder="Address*">
       <label for="address">Address</label>
      </div>

      <div class="row">
       <div class="col-md-6">
        <div class="form-label-group my-4">
         <input id="date_of_birth" name="date_of_birth" type="date" class="form-control cmput" placeholder="date_of_birth" required>
         <label for="date_of_birth">Date of Birth</label>
        </div>
       </div>

       <div class="col-md-6">
        <div class="form-label-group my-4">
         <input id="maiden_name" type="text" class="form-control cmput" name="maiden_name"   placeholder="Mother’s Maiden Name" >
         <label for="maiden_name">Mother’s Maiden Name</label>
        </div>
       </div>
      </div>

      <div class="row">
       <div class="col-md-6">
        <label for="license_name">Valid License</label>
        <select name="license_name" class="form-control" id="">
         <option>Driving License</option>
         <option>National ID No</option>
         <option>International Passport </option>
         <option>Permanent Voter Card</option>
        </select>
       </div>
       <div class="col-md-6">
        <div class="form-label-group my-4">
         <input id="license_id" name="license_id" type="text" class="form-control cmput"   placeholder="license_id">
         <label for="license_id">License Number</label>
        </div>
       </div>
      </div>

      <div class="form-label-group my-4">
       <input type="email" id="Email" class="form-control cmput" name="email" placeholder="Email address" required="" >
       <label for="Email">Email address</label>
      </div>

      <div class="form-label-group my-4">
       <input id="kin_name" type="text" class="form-control cmput" name="kin_name"   placeholder="Next of Kin" >
       <label for="kin_name">Next of Kin</label>
      </div>

      <div class="form-label-group my-4">
       <input id="bank_name" type="text" class="form-control cmput" name="bank_name"   placeholder="Name of Bank" required>
       <label for="bank_name">Name of Bank</label>
      </div>

      <div class="form-label-group my-4">
       <input id="receiving_bank" type="text" class="form-control cmput" name="receiving_bank"   placeholder="Receiving Bank" required>
       <label for="receiving_bank">Receiving Bank</label>
      </div>

      <div class="row">
       <div class="col-md-6">
        <div class="form-label-group my-4">
         <input id="acc_number" name="acc_number" type="text" class="form-control cmput" placeholder="Bank Account no" maxlength="10" required>
         <label for="acc_number">Bank Account no</label>
        </div>
       </div>

       <div class="col-md-6">
        <div class="form-label-group my-4">
         <input id="bvn" type="text" class="form-control cmput" name="bvn" maxlength="11"  placeholder="BVN" required>
         <label for="bvn">BVN</label>
        </div>
       </div>
      </div>

      <div class="text-center">
       <button type="submit" class="btn btn-default bbbtn px-5">Proceed</button>
      </div>
     </form>

    </div>
   </div>
  </div>






  <!--Footer section-->
  <div class="container footer mt-5">
   <div class="row mt2">
    <div class="col-md-2">
     <h6><b>Why Lotus</b></h6>
     <ul class="tcc">
      <li><a href="For entrepreneurs.html" class="tcc">For entrepreneurs</a></li>
      <li><a href="For corperates.html" class="tcc">For corperates</a></li>
      <li><a href="For international companies.html" class="tcc">For international companies</a></li>
     </ul>
    </div>

    <div class="col-md-2">
     <h6><b>About</b></h6>
     <ul class="tcc">
      <li><a href="Companies.html" class="tcc">Companies</a></li>
      <li><a href=" Careers.html" class="tcc"> Careers</a></li>
      <li><a href="Privacy & Terms.html" class="tcc">Privacy & Terms</a></li>
     </ul>
    </div>

    <div class="col-md-2">
     <h6><b>Pricing</b></h6>
     <ul class="tcc">
      <li><a href=" Nigeria.html" class="tcc">Nigeria</a></li>
     </ul>
    </div>

    <div class="col-md-2">
     <h6><b>Customer</b></h6>
     <ul class="tcc">
      <li><a href="Testimonials.html" class="tcc">Testimonials</a></li>
     </ul>
    </div>

    <div class="col-md-2">
     <h6><b>Lagos</b></h6>
     <ul class="tcc">
      <li>3a denrele</li>
      <li> efonoye Road</li>
      <li> Ikeja GRA,Ikeja</li>
      <li> Lagos,Nigeria.</li>
     </ul>
    </div>

    <div class="col-md-2">
     <h6><b>Contact</b></h6>
     <ul class="tcc">
      <li><a href="Hello@Loanly.com.html" class="tcc">Hello@Loanly.com</a></li>
      <li><a href="Request a phone call.com.html" class="tcc">Request a phone call.com</a></li>
     </ul>
     <div class="row">
      <div class="col-md-3">
       <img src="img/Group (2).png">
      </div>

      <div class="col-md-3">
       <img src="img/Group (3).png">
      </div>

      <div class="col-md-3">
       <img src="img/facebook-logo.png">
      </div>

      <div class="col-md-3">
       <img src="img/linkedin-logo.png">
      </div>
      <div class="mgb">
      </div>
     </div>
    </div>
   </div>
  </div>
  <div class="container">
   <div class="row">
    <hr class="hr_colored mb-5 mt-0 d-inline-block mx-auto" style="width: 100%;">
   </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

 </body>
</html>
