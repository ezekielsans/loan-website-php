<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="/css/homepage.css">
    <title>Company Site</title>
  </head>
  <body>
  
    <div class="container py-3">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
        <span class="fs-4">Company Credit </span>
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
<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4  mt-5">

<div class="p-5 mb-4 bg-body-tertiary rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Custom jumbotron</h1>
        <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <button class="btn btn-primary btn-lg" type="button">Contact Us</button>
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
                <option value="">Choose...</option>
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
                <option value="">Choose...</option>
                <option>3 months</option>
                <option>6 months</option>
                <option>1 year</option>
                <option>2 years</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
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
          <button class="w-100 btn-block btn btn-primary btn-lg mt-5" type="submit">Apply Now</button>
        </div>
        </div>
        </div>
        

        </form>
      </div>
</div>









  <div class="container px-4 py-5" id="icon-grid">
    <h2 class="pb-2 border-bottom text-center">3 Easy steps to Get your loan and start Gaining on your share capital content</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#bootstrap"></use></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#cpu-fill"></use></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
     
    
     
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#geo-fill"></use></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#tools"></use></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
    </div>
  </div>



  <div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom text-center">People We've helped</h2>
    <div class="row mt-5">
      <div class="col-lg-4 text-center">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
        <h2 class="fw-normal">Heading</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-secondary" href="#">View details »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 text-center">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
        <h2 class="fw-normal">Heading</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        <p><a class="btn btn-secondary" href="#">View details »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 text-center">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
        <h2 class="fw-normal">Heading</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
        <p><a class="btn btn-secondary" href="#">View details »</a></p>
      </div><!-- /.col-lg-4 -->
    </div>
  </div>



    </div>
  </div>
  <footer class="container mt-5">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>© 2017–2024 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
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