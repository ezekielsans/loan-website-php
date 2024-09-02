<?php
require_once '../controller/dbConn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['apply_now'])) {

    // Fetch data from the form
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $contactNumber = $_POST['contactNumber'];
    $gender = $_POST['gender'];

    // Insert data into the database
    try {
        $openDb->insertApplicantDetails($firstName, $lastName, $email, $contactNumber, $gender);
        echo "Data inserted successfully.";
    } catch (Exception $e) {
        echo "Error inserting data: " . $e->getMessage();
    }

    // Debug: Print the input data
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
}

$result = $openDb->getUsers();

//print_r($result);
?>

<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!--CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="/assets/hand-hold-bank-building-finance.png" type="image/gif" sizes="16x16">
   
    <title>San Diego Loan</title>
  </head>
  <body 
  id="body">

    <div class="container py-3">
  <header>
    <div class="container-fluid d-flex justify-content-between align-items-center w-100 mb-4">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">

      <svg version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-10.24 -10.24 52.48 52.48" xml:space="preserve" width="70px" height="70px" fill="#FFC107" stroke="#FFC107"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"><path transform="translate(-10.24, -10.24), scale(3.28)" fill="#00796B" d="M9.166.33a2.25 2.25 0 00-2.332 0l-5.25 3.182A2.25 2.25 0 00.5 5.436v5.128a2.25 2.25 0 001.084 1.924l5.25 3.182a2.25 2.25 0 002.332 0l5.25-3.182a2.25 2.25 0 001.084-1.924V5.436a2.25 2.25 0 00-1.084-1.924L9.166.33z" strokewidth="0"></path></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.128"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:none;stroke:#FFC107;stroke-width:3.2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} </style> <path d="M28.5,5.7l-11-5.6c-0.3-0.1-0.6-0.1-0.9,0l-11,5.6C5.2,5.9,5,6.2,5,6.6V9c0,0.6,0.4,1,1,1h22c0.6,0,1-0.4,1-1V6.6 C29,6.2,28.8,5.9,28.5,5.7z"></path> <path d="M29.9,16.5C29.7,16.2,29.4,16,29,16c-2.2,0-4.3,1-5.6,2.8L22.5,20c-1.1,1.3-2.8,2-4.5,2h-3c-0.6,0-1-0.4-1-1s0.4-1,1-1h1.9 c1.6,0,3.1-1.3,3.1-2.9c0,0,0-0.1,0-0.1c0-0.5-0.5-1-1-1h-6.1c-3.6,0-6.5,1.6-8.1,4.2l-2.7,4.2c-0.2,0.3-0.2,0.7,0,1l3,5 c0.1,0.2,0.4,0.4,0.6,0.5c0.1,0,0.1,0,0.2,0c0.2,0,0.4-0.1,0.6-0.2c3.8-2.5,8.2-3.8,12.7-3.8c3.3,0,6.3-1.8,7.9-4.7l2.7-4.8 C30,17.2,30,16.8,29.9,16.5z"></path> <path d="M26,14.5V12c0-0.6-0.4-1-1-1h-2c-0.6,0-1,0.4-1,1v5.3C23.1,16,24.4,15.1,26,14.5z"></path> <path d="M19,14v-2c0-0.6-0.4-1-1-1h-2c-0.6,0-1,0.4-1,1v2H19z"></path> <path d="M12,14.1V12c0-0.6-0.4-1-1-1H9c-0.6,0-1,0.4-1,1v3C9.2,14.5,10.6,14.2,12,14.1z"></path> </g></svg>
        <h3 class="fs-3 mx-2">San Diego Loan</h3>
      </a>

      <ul class="nav nav-preview d-none d-md-flex"  id="navbar">
        <li class="me-3 py-2 nav-link"  href="#">What's New?</li>
        <li class="me-3 py-2 nav-link" href="#">Services</li>
        <li class="me-3 py-2 nav-link" href="#">About Us</li>
      </ul>
      <div class="form-inline"><a class="py-2 contact-us" id="contact-us" href="#">Contact Us</a>
    </div>
    </div>

</header>

<main>
<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4  mt-2">

<div class="p-5 mb-4 bg-body-tertiary rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Find Your Perfect Loan in San Diego</h1>
        <p class="col-md-12 fs-4">Get the best loan offers tailored to your needs. Fast, Easy, Secure.</p>
        <button class="btn  btn-lg" id="contact-us"  type="button">Contact Us</button>
      </div>
    </div>


      <!-- loan-calc -->
      <div class="col-md-5 col-lg-5 p-5 bg-body-tertiary border rounded-3">
        <h4 class="mb-3">Explore Our Loan Packages</h4>
        <form method="post" action="">

        <div class="row g-3">
        <div class="col-12">
              <label for="email" class="form-label">How much do you need? </label>
              <input type="text" class="form-control" id="loanValue" name="loan_value" placeholder="I need to borrow.." ></input>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            <div class="col-12">
              <label for="range" class="form-label">P 3,000 - P 20,000</label>
            <input type="range" class="form-range" min="3000" max="20000" id="loanRange">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            <div class="col-12">
              <label for="country" class="form-label mb-2">Loan will be used for?</label>
              <select class="form-select" id="loan_purpose" name="loan_purpose" required="">
                <option value="">Choose Loan Package...</option>
                <option>Financial Assistance</option>
                <option>Health Assistance</option>
                <option>Electronic Devices</option>
                <option>Education </option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
            <div class="col-12">
              <label for="country" class="form-label mb-2">I will pay it within:</label>
              <select class="form-select" id="payment_date" name="payment_date" required="">
                <option value="">Choose Payment Length...</option>
                <option>3 months</option>
                <option>6 months</option>
                <option>1 year</option>
                <option>2 years</option>
              </select>
              <div class="invalid-feedback">
                Please select a Payment Length.
              </div>
            </div>



            <div class="row gy-3">
            <div class="col-md-6">
              <label for="country" class="form-label">Interest</label>
              <input type="text" class="form-control" id="interest" name="interest" readonly>
            </div>
            <div class="col-md-6">
              <label for="country" class="form-label">Processing Fee</label>
              <input type="text" class="form-control" id="processing_fee" name="processing_fee" readonly>
            </div>
            </div>
            <div class="col-12">
              <label for="email" class="form-label">Total Repayment</label>
              <input type="text" class="form-control" id="total_repayment" name="total_repayment" readonly></input>

            </div>
          </div>
          <button class="w-n-block btn  btn-lg mt-5" data-bs-toggle="modal" id="apply-now" data-bs-target="#exampleModal" type100 bt="submit">Apply Now</button>
</div>
        </div>
      </div>



<div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom text-center">3 Easy steps to Get your loan and start Gaining on your share capital</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3 mt-5">

    <div class="col d-flex align-items-center">
        <div class="text-center">
        <svg fill="#000000" width="72px" height="72px" viewBox="0 0 16 16" id="register-16px" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path id="Path_184" data-name="Path 184" d="M57.5,41a.5.5,0,0,0-.5.5V43H47V31h2v.5a.5.5,0,0,0,.5.5h5a.5.5,0,0,0,.5-.5V31h2v.5a.5.5,0,0,0,1,0v-1a.5.5,0,0,0-.5-.5H55v-.5A1.5,1.5,0,0,0,53.5,28h-3A1.5,1.5,0,0,0,49,29.5V30H46.5a.5.5,0,0,0-.5.5v13a.5.5,0,0,0,.5.5h11a.5.5,0,0,0,.5-.5v-2A.5.5,0,0,0,57.5,41ZM50,29.5a.5.5,0,0,1,.5-.5h3a.5.5,0,0,1,.5.5V31H50Zm11.854,4.646-2-2a.5.5,0,0,0-.708,0l-6,6A.5.5,0,0,0,53,38.5v2a.5.5,0,0,0,.5.5h2a.5.5,0,0,0,.354-.146l6-6A.5.5,0,0,0,61.854,34.146ZM54,40V38.707l5.5-5.5L60.793,34.5l-5.5,5.5Zm-2,.5a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1,0-1h2A.5.5,0,0,1,52,40.5Zm0-3a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1,0-1h2A.5.5,0,0,1,52,37.5ZM54.5,35h-5a.5.5,0,0,1,0-1h5a.5.5,0,0,1,0,1Z" transform="translate(-46 -28)"></path> </g></svg>
          <h3 class="mt-3 fs-4 text-body-emphasis">Step 1: Register online</h3>
        </div>
      </div>
      <div class="col d-flex align-items-center">
      <div class="text-center">
        <svg fill="#000000" width="72px" height="72px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M854.344 1317.685 503.209 966.55l79.85-79.85 271.285 271.285 520.207-520.32 79.849 79.962-600.056 600.057ZM960.056 0c-529.355 0-960 430.645-960 960s430.645 960 960 960c529.243 0 960-430.645 960-960S1489.3 0 960.056 0Z" fill-rule="evenodd"></path> </g></svg>
          <h3 class="mt-3 fs-4 text-body-emphasis">Step 2: Complete and Submit the Online application form and wait for approval</h3>
        </div>
      </div>
      <div class="col d-flex align-items-center">
      <div class="text-center">
        <svg fill="#000000" height="72px" width="72px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M399.034,265.919l-54.092,54.073h-28.602c2.373-6.678,3.666-13.859,3.666-21.333c0-35.249-28.751-64-64-64H152.798 L128,226.4V192c0-11.782-9.551-21.333-21.333-21.333H21.333C9.551,170.667,0,180.218,0,192v298.667 C0,502.449,9.551,512,21.333,512h85.333c11.782,0,21.333-9.551,21.333-21.333v-21.342h127.068 c60.397,0,119.538-17.22,170.512-49.648l3.637-2.917l60.331-60.352c24.927-24.895,24.927-65.568-0.003-90.498 C464.615,240.979,423.942,240.979,399.034,265.919z M85.333,469.333H42.667v-256h42.667V469.333z M459.384,326.23l-58.654,58.674 c-43.686,27.281-94.146,41.754-145.663,41.754H128.006V271.372l14.593,4.86c2.173,0.724,4.449,1.093,6.74,1.093h106.667 c11.685,0,21.333,9.649,21.333,21.333c0,11.685-9.649,21.333-21.333,21.333c-28.444,0-28.444,42.667,0,42.667h97.771 c5.657,0,11.082-2.247,15.082-6.246l60.352-60.331c8.257-8.267,21.899-8.267,30.163-0.003S467.639,317.986,459.384,326.23z"></path> <path d="M256,192c35.355,0,64-28.645,64-64s-28.645-64-64-64s-64,28.645-64,64S220.645,192,256,192z M256,106.667 c11.791,0,21.333,9.542,21.333,21.333s-9.542,21.333-21.333,21.333c-11.791,0-21.333-9.542-21.333-21.333 S244.209,106.667,256,106.667z"></path> <path d="M448,128c35.355,0,64-28.645,64-64S483.355,0,448,0s-64,28.645-64,64S412.645,128,448,128z M448,42.667 c11.791,0,21.333,9.542,21.333,21.333S459.791,85.333,448,85.333S426.667,75.791,426.667,64S436.209,42.667,448,42.667z"></path> </g> </g> </g> </g></svg>
          <h6 class="mt-3 fs-4 text-body-emphasis">Step 3: Go to any San Diego Loan Branch near you and claim your cash</h6>
        </div>
      </div>
    </div>
  </div>

  <div class="container px-4 py-5" id="icon-grid">
  <h2 class="pb-2 border-bottom text-center">Products Made to fit your financial needs</h2>

    <div class="row row-cols-1 row-cols-md-3 mb-3 mt-5 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
          <svg fill="#000000" width="72px" height="72px" viewBox="0 0 14 14" role="img" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="m 12.499079,12.25525 c 0.0968,0 0.188377,-0.0436 0.249339,-0.11884 0.06096,-0.0752 0.08473,-0.17385 0.06473,-0.26853 l -0.202146,-0.95662 c 0.115125,-0.11137 0.187491,-0.26686 0.187491,-0.43975 0,-0.182 -0.08106,-0.34343 -0.206876,-0.45558 l 0,-3.32202 -0.810333,0.50146 0,2.82056 c -0.125815,0.11215 -0.2069,0.27358 -0.2069,0.45558 0,0.17291 0.07239,0.32841 0.187515,0.43975 l -0.20217,0.95662 c -0.02,0.0947 0.0038,0.19335 0.06473,0.26853 0.06096,0.0752 0.152539,0.11884 0.249339,0.11884 l 0.625281,0 z M 12.773741,4.75539 7.5021019,1.49209 C 7.3477151,1.39699 7.1736728,1.34925 6.9996305,1.34925 c -0.1740423,0 -0.3482077,0.0477 -0.5016586,0.14284 l -5.271713,3.2633 C 1.0854931,4.84249 0.99999905,4.99633 0.99999905,5.1619 c 0,0.1656 0.085494,0.31949 0.22625985,0.40673 l 5.2716883,3.26333 c 0.153451,0.0952 0.3276163,0.14284 0.5016586,0.14284 0.1740423,0 0.3481092,-0.0477 0.5024714,-0.14284 L 12.773741,5.56863 c 0.140766,-0.0872 0.22626,-0.24113 0.22626,-0.40673 0,-0.16557 -0.08549,-0.31946 -0.22626,-0.40651 z M 6.9996059,9.78508 c -0.3283798,0 -0.6488777,-0.0912 -0.928242,-0.26411 l -3.0750017,-1.90368 0,3.27796 c 0,0.97016 1.7931578,1.7555 4.0032436,1.7555 2.2108742,0 4.0038842,-0.78536 4.0038842,-1.7555 l 0,-3.27796 -3.0748786,1.90368 C 7.6492472,9.69388 7.3279857,9.78508 6.9996059,9.78508 Z"></path></g></svg>
          <h2 class="my-0 fw-normal">Education Package</h2>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Php 300<small class="text-body-secondary fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>0.03 interest gain on share capital</li>
              <li>Share Capital gain guaranteed</li>
              <li>Rebate when cancelled</li>

            </ul>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
          <svg width="72px" height="72px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M523.9 788.3H166.4V169c0-4.3 3.4-7.7 7.6-7.7h490.8c4.2 0 7.6 3.5 7.6 7.7v190h45.8V169c0-29.9-24-54.2-53.4-54.2H174c-29.5 0-53.4 24.3-53.4 54.2v689c0 29.9 24 54.2 53.4 54.2h359.1c-5.9-11.6-9.3-24.8-9.3-38.7v-85.2z m-102.6 96.2c-17 0-30.9-14-30.9-31.3s13.8-31.3 30.9-31.3c17 0 30.9 14 30.9 31.3-0.1 17.3-13.9 31.3-30.9 31.3z m442.9-479H607.9c-21.1 0-38.2 17.4-38.2 38.7v429.3c0 21.3 17.1 38.7 38.2 38.7h256.3c21.1 0 38.2-17.4 38.2-38.7V444.2c0-21.4-17.1-38.7-38.2-38.7zM736.1 888.9c-12.7 0-22.9-10.4-22.9-23.2 0-12.8 10.3-23.2 22.9-23.2 12.6 0 22.9 10.4 22.9 23.2 0 12.8-10.3 23.2-22.9 23.2z m120.5-69.7H615.5V451.9h241.1v367.3z" fill="#000000"></path></g></svg>
            <h2 class="my-0 fw-normal">Electronics Package</h2>
          </div>
          <div class="card-body">
          <h1 class="card-title pricing-card-title">Php 300<small class="text-body-secondary fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>0.33 interest gain on share capital</li>
              <li>Share Capital gain guaranteed</li>
              <li>Rebate when cancelled</li>
            </ul>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm ">
          <div class="card-header py-3 text-bg-primary ">
          <svg width="73px" height="73px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M8.96173 18.4687C6.01943 16.2137 2 12.4886 2 8.96653C2 3.08262 7.50016 0.885859 12 5.43111C16.4998 0.885859 22 3.08262 22 8.9665C22 12.4887 17.9806 16.2137 15.0383 18.4687C13.7063 19.4896 13.0403 20 12 20C10.9597 20 10.2937 19.4896 8.96173 18.4687ZM16.5 6.25C16.9142 6.25 17.25 6.58579 17.25 7V8.25002H18.5C18.9142 8.25002 19.25 8.5858 19.25 9.00002C19.25 9.41423 18.9142 9.75002 18.5 9.75002H17.25V11C17.25 11.4142 16.9142 11.75 16.5 11.75C16.0858 11.75 15.75 11.4142 15.75 11V9.75002L14.5 9.75002C14.0858 9.75002 13.75 9.41423 13.75 9.00002C13.75 8.5858 14.0858 8.25002 14.5 8.25002H15.75V7C15.75 6.58579 16.0858 6.25 16.5 6.25Z" fill="#000000"></path> </g></svg>
            <h2 class="my-0 fw-normal">Emergency Package</h2>
          </div>
          <div class="card-body">
          <h1 class="card-title pricing-card-title">Php 500<small class="text-body-secondary fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>0.43 interest gain on share capital</li>
              <li>Share Capital gain guaranteed</li>
              <li>Rebate when cancelled</li>
            </ul>

          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Testimonial Part -->
<div class="container px-4 py-5" id="featured-3">
  <h2 class="pb-2 text-center">Testimonials From People We've Helped</h2>
  <p class="pb-2 text-muted text-center">These are honest feedbacks from our loyal members,
    that we offered services throughout the years</p>
  <div class="row mt-5">
    <div class="col-lg-4 mb-4 ">
      <div class="card p-4 text-start rounded-5 h-100 ">

        <img class="rounded-circle" width="100" height="100" src="../../assets/test_1.png" alt="" srcset="">

      <!-- <svg class="bd-placeholder-img rounded-circle mx-auto d-block" width="100" height="100" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"> -->
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
        </svg>
        <div class="card-body">

          <p class="card-text">Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
          <h5 class="text-start">First Last</h5>
          <p class="text-start">job position</p>
        </div>

      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card p-4 text-start rounded-5 h-100">
        <!-- <svg class="bd-placeholder-img rounded-circle mx-auto d-block" width="100" height="100" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
        </svg> -->
        <img class="rounded-circle" width="100" height="100" src="../../assets/test_4.png" alt="" srcset="">
        <div class="card-body">

          <p class="card-text">Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
          <h5 class="text-start">First Last</h5>
          <p class="text-start">job position</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card p-4 rounded-5 h-100 d-flex align-items-start">
        <div class="d-flex"></div>
        <!-- <svg class="bd-placeholder-img rounded-circle mx-auto d-block" width="100" height="100" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"> -->
        <img class="rounded-circle" width="100" height="100" src="../../assets/test_2.png" alt="" srcset="">
        <title>Placeholder</title>
          <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
        </svg>
        <div class="card-body">
          <p class="card-text">And lastly this, the third column of representative placeholder content.</p>
          <h5 class="text-start">First Last</h5>
          <p class="text-start">job position</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <!-- Title Section -->
  <h3 class="mt-5 text-center">Contact Us</h3>
  <p class="mb-3 text-center">Reach out how may we help you. We're one call away!</p>

  <!-- Content Section with Image and Form -->
  <div class="row align-items-center border rounded-4 p-5 bg-body-tertiary">
    <!-- Left Column: Image -->
    <div class="col-md-6 text-center">
      <img src="../../assets/finacial_assistance_pic.png" alt="San Diego Loan" class="img-fluid rounded-3" style="max-width: 100%;">
    </div>

    <!-- Right Column: Form -->
    <div class="col-md-6">
    <form method="post" action="">
      <!-- class="needs-validation" novalidate  -->

        <div class="mb-3">
          <label for="firstName" class="form-label">First name</label>
          <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter First Name.." required>
          <div class="invalid-feedback">Valid first name is required.</div>
        </div>


        <div class="mb-3">
          <label for="lastName" class="form-label">Last name</label>
          <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter Last Name.." required>
          <div class="invalid-feedback">Valid last name is required.</div>
        </div>


        <div class="mb-3">
          <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
          <div class="invalid-feedback">Please enter a valid email address.</div>
        </div>


        <div class="mb-3">
          <label for="contactNumber" class="form-label">Contact Number</label>
          <input type="text" class="form-control" id="contactNumber" name="contactNumber" placeholder="Enter Mobile Number..">
          <div class="invalid-feedback">Please enter your Contact Number.</div>
        </div>


        <div class="mb-3">
          <label for="gender" class="form-label">Gender</label>
          <select class="form-select" id="gender" name="gender" required>
            <option value="">Choose gender...</option>
            <option>Female</option>
            <option>Male</option>
          </select>
          <div class="invalid-feedback">Please select a Gender.</div>
        </div>

        <!-- Submit Button -->
        <button class="btn  w-100" type="submit" id="apply-now" name="apply_now">Apply Now</button>
      </form>
    </div>
  </div>
</div>



      <!-- online application layout 2 -->

      <!-- <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">Another headline</h2>
        <p class="lead">And an even wittier subheading.</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
    <div class="text-bg-primary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Another headline</h2>
        <p class="lead">And an even wittier subheading.</p>
      </div>
      <div class="bg-body-tertiary shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
  </div> -->
    </div>
  </div>
</main>
</div>
<!-- option 1 footer -->
<div class="container">
  <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 mt-5">
    <div class="col mb-3">
      <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      </a>

      <p class="text-body-secondary">© 2024 San Diego Loan</p>

    </div>


    <div class="col mb-3">
    </div>
    <div class="col mb-3">
      <h5>What's New</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
      </ul>
    </div>

    <div class="col mb-3">
      <h5>About Us</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
      </ul>
    </div>

    <div class="col mb-3">
      <h5>Contact Us</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
      </ul>
    </div>
  </footer>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="/js/index.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
