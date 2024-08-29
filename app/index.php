<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="/css/homepage.css">
    <title>San Diego Loan</title>
  </head>
  <body>
  
    <div class="container py-3">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
        <span class="fs-4">San Diego Loan</span>
      </a>

      <nav class="navbar d-inline-flex mt-2 mt-md-0 ms-md-auto"  id="navbar">
        <a class="me-3 py-2 nav-link"  href="#">What's New?</a>
        <a class="me-3 py-2 nav-link" href="#">Services</a>
        <a class="me-3 py-2 nav-link" href="#">About Us</a>
        <a class="py-2 contact-us" id="contact-us" href="#">Contact Us</a>
      </nav>
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
        <form action="">
    
        <div class="row g-3">
        <div class="col-12">
              <label for="email" class="form-label">How much do you need? </label>
              <input type="text" class="form-control" id="loanValue" placeholder="I need to borrow.." ></input>
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
              <select class="form-select" id="country" required="">
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
              <select class="form-select" id="payment_date" required="">
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
              <input type="text" class="form-control" id="interest" readonly>
            </div>
            
            <div class="col-md-6">
              <label for="country" class="form-label">Processing Fee</label>
              <input type="text" class="form-control" id="processing_fee" readonly>
            </div>
          
            </div>


            <div class="col-12">
              <label for="email" class="form-label">Total Repayment</label>
              <input type="text" class="form-control" id="total_repayment" readonly></input>
              
            </div>
          </div>
          <button class="w-100 btn-block btn btn-primary btn-lg mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal" type="submit">Apply Now</button>
        
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content p-4">
      <div class="modal-header">
        <h5 class="modal-title" id="onlineApplicationModalLabel">Online Application</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row mb-3">
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Last name">
            </div>
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Email address">
          </div>
          <div class="mb-3">
            <input type="tel" class="form-control" placeholder="Contact Number">
          </div>
          <div class="mb-4">
            <select class="form-select">
              <option selected>Choose gender...</option>
              <option value="1">Female</option>
              <option value="2">Male</option>
            </select>
          </div>
          <button type="button" class="btn btn-primary btn-block w-100 mb-3">Apply Now</button>
          <div class="d-flex justify-content-center mb-3">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="termsCheck" required>
            <p class="form-check-label text-muted  small" for="termsCheck">Agree to terms and conditions ,
              By checking the box, you agree to the terms of use.</p>
          </div>
          </div>
         
        </form>
        <hr>
        <p class="text-center fw-bold">Or use a third-party</p>
        <div class="d-grid gap-2">
          <button class="btn btn-outline-secondary btn-block mb-2">Sign up with Gmail</button>
          <button class="btn btn-outline-primary btn-block mb-2">Sign up with Facebook</button>
         
        </div>
      </div>
    </div>
  </div>
        
        </div>
        </div>
        </div>
        

        </form>
      </div>
</div>




  <div class="container px-4 py-5" id="icon-grid">
    <h2 class="pb-2 text-center mb-5">3 Easy steps to Get your loan and start Gaining on your share capital content</h2>

    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
          <h2 class="my-0 fw-normal">Some Product 1</h2>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$0<small class="text-body-secondary fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
          
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h2 class="my-0 fw-normal">Some Product 2</h2>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$15<small class="text-body-secondary fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 users included</li>
              <li>10 GB of storage</li>
              <li>Priority email support</li>
              <li>Help center access</li>
            </ul>
         
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm ">
          <div class="card-header py-3 text-bg-primary ">
            <h2 class="my-0 fw-normal">Some Product 3</h2>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$29<small class="text-body-secondary fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 users included</li>
              <li>15 GB of storage</li>
              <li>Phone and email support</li>
              <li>Help center access</li>
            </ul>
          
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Testimonial Part -->
<div class="container px-4 py-5" id="featured-3">
  <h2 class="pb-2 text-center">People We've Helped</h2>
  <div class="row mt-5">
    <div class="col-lg-4 mb-4 ">
      <div class="card p-4 text-start rounded-5 h-100 ">
  
        <svg class="bd-placeholder-img rounded-circle mx-auto d-block" width="100" height="100" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
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
        <svg class="bd-placeholder-img rounded-circle mx-auto d-block" width="100" height="100" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
        </svg>
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
        <svg class="bd-placeholder-img rounded-circle mx-auto d-block" width="100" height="100" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
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

  



    </div>
  </div>
  <footer class="container mt-5">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>© 2024 San Diego Loan. All Rights Reserved. <a href="#">Privacy</a> · <a href="#">Terms</a></p>
  </footer>
</main>

  </main>

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