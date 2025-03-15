<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</head>
<body>
    {{-- navbar --}}
    <div class="navstyle" >
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Logo </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav  my-2 my-lg-0 navbar-nav-scroll ms-auto ml-2" style="--bs-scroll-height: 100px;">
                <li class="nav-item dropdown me-4">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Home
                    </a>
                    <ul class="dropdown-menu me-4" aria-labelledby="navbarScrollingDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
              <li class="nav-item dropdown me-4">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Search
                </a>
                <ul class="dropdown-menu me-4" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown me-4">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Rescue
                </a>
                <ul class="dropdown-menu me-4" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown me-4">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Store
                </a>
                <ul class="dropdown-menu me-4" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
            <div class="ms-4">
                <button class="log-in">Log In</button>
                <button class="sign-up ms-2">Sign Up</button>
            </div>
            
          </div>
        </div>
      </nav>
    </div> 
{{-- saving lives section --}}

    <section class="cont py-5 mt-2 ">
        <div class="ms-5">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <h1>Saving Lives</h1>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-lg-6 col-md-12 pb-3">
                <p class="fw-bold " style="margin-bottom: 5px;">Preventing Euthanasia</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis deserunt aliquam nam mollitia nostrum facere dolor voluptatem reiciendis omnis quis distinctio sint, ut enim illum quas, dolorum quos ad corporis.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 pb-3">
                <p class="fw-bold" style="margin-bottom: 5px;">Rescuing Animals From Dangerous Situations</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis deserunt aliquam nam mollitia nostrum facere dolor voluptatem reiciendis omnis quis distinctio sint, ut enim illum quas, dolorum quos ad corporis.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 pb-3">
                <p class="fw-bold" style="margin-bottom: 5px;">Providing Medical Care</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis deserunt aliquam nam mollitia nostrum facere dolor voluptatem reiciendis omnis quis distinctio sint, ut enim illum quas, dolorum quos ad corporis.</p>
            </div>
        </div>
        <div class="row me-2">
            <div class="col-lg-6 col-md-12 pb-3">
               <button class="rescue-btn fw-bold">Rescue Now</button>
            </div>
        </div>
        </div>
    </section>

    {{-- donate section --}}
    <div class="row">
      <h1 class="donate col-lg-12 py-3 ps-5 text-sm-center text-lg-start" >Donate</h1>
    </div>
    <div class="container py-4">
      <div class="row g-4">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3" >
          <div class="card">
            <img class="card-img-top" src="{{asset('assets/imgs/cat1.jpg')}}" >
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title border-start border-3 ps-3">Ash</h5>
              </div>
              <p class="card-text text-muted">Male</p>
              <p class="card-text text-muted">Brown / Black</p>
              <p class="card-text text-muted">5 Months</p>
            </div>
            <a href="#" class="donate-btn w-100 py-2">Donate Now</a>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card">
            <img class="card-img-top" src="{{asset('assets/imgs/dog3.jpeg')}}" alt="Cat Image">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title border-start border-3 ps-3">Ash</h5>
              </div>
              <p class="card-text text-muted">Male</p>
              <p class="card-text text-muted">Brown / Black</p>
              <p class="card-text text-muted">5 Months</p>
            </div>
            <a href="#" class="donate-btn w-100 py-2">Donate Now</a>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card">
            <img class="card-img-top" src="{{asset('assets/imgs/cat4.jpeg')}}" alt="Cat Image">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title border-start border-3 ps-3">Ash</h5>
              </div>
              <p class="card-text text-muted">Male</p>
              <p class="card-text text-muted">Brown / Black</p>
              <p class="card-text text-muted">5 Months</p>
            </div>
            <a href="#" class="donate-btn w-100 py-2">Donate Now</a>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card">
            <img class="card-img-top" src="{{asset('assets/imgs/cat3.jpeg')}}" alt="Cat Image">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title border-start border-3 ps-3">Ash</h5>
              </div>
              <p class="card-text text-muted">Male</p>
              <p class="card-text text-muted">Brown / Black</p>
              <p class="card-text text-muted">5 Months</p>
            </div>
            <a href="#" class="donate-btn w-100 py-2">Donate Now</a>
          </div>
        </div>
        

      </div>
      <div class="row g-4 py-4">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card">
            <img class="card-img-top" src="{{asset('assets/imgs/dog2.jpeg')}}" alt="Cat Image">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title border-start border-3 ps-3">Ash</h5>
              </div>
              <p class="card-text text-muted">Male</p>
              <p class="card-text text-muted">Brown / Black</p>
              <p class="card-text text-muted">5 Months</p>
            </div>
            <a href="#" class="donate-btn w-100 py-2">Donate Now</a>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card">
            <img class="card-img-top" src="{{asset('assets/imgs/cat2.jpeg')}}" alt="Cat Image">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title border-start border-3 ps-3">Ash</h5>
              </div>
              <p class="card-text text-muted">Male</p>
              <p class="card-text text-muted">Brown / Black</p>
              <p class="card-text text-muted">5 Months</p>
            </div>
            <a href="#" class="donate-btn w-100 py-2">Donate Now</a>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card">
            <img class="card-img-top" src="{{asset('assets/imgs/rabbit1.jpg')}}" alt="Cat Image">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title border-start border-3 ps-3">Ash</h5>
              </div>
              <p class="card-text text-muted">Male</p>
              <p class="card-text text-muted">Brown / Black</p>
              <p class="card-text text-muted">5 Months</p>
            </div>
            <a href="#" class="donate-btn w-100 py-2">Donate Now</a>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card">
            <img class="card-img-top" src="{{asset('assets/imgs/dog1.jpeg')}}" alt="Cat Image">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title border-start border-3 ps-3">Ash</h5>
              </div>
              <p class="card-text text-muted">Male</p>
              <p class="card-text text-muted">Brown / Black</p>
              <p class="card-text text-muted">5 Months</p>
            </div>
            <a href="#" class="donate-btn w-100 py-2">Donate Now</a>
          </div>
        </div>
      
      </div>
    </div>

    {{-- shelters and rescues --}}
<div class="row">
  <h1 class="shelters col-lg-12 py-3 ps-5 text-sm-center text-lg-start">Shelters & Rescue</h1>
</div>
<div class="container mt-3 pb-5">
    <div class="store">
      <div class="row align-items-center border rounded shadow-sm p-3 bg-white" >
        <div class="col-auto">
            <img src="{{asset('assets/imgs/store2.jpeg')}}"class="img-fluid rounded" style="width: 100px; height: auto;">
        </div>
        <div class="col">
            <h5 class="fw-bold">PAWS Brave Hearts</h5>
            <p class="mb-1 text-muted"><i class='bx bxs-location-plus'></i> 368 South Street, Calais, ME 04619</p>
            <p class="mb-1 text-muted"><i class='bx bxs-phone' style='color:#000000' ></i> (207) 454-7662</p>
            <p class="mb-0 text-muted"><i class='bx bx-envelope' style='color:#000000' ></i> pawsbravehearts@gmail.com</p>
        </div>
        <div class="col-auto text-end">
            <p class="fw-semibold mb-1">8:00 AM - 7:00 PM</p>
            <p class="small text-muted">
                <span class="text-dark">Sat</span> 
                <span class="text-success">Sun Mon Tu</span> 
                <span class="text-dark">Wed Thu</span> 
                <span class="text-success">Fri</span>
            </p>
            <a href="#" class="store-view  btn-sm">VIEW PETS</a>
        </div>
    </div>
    </div>
    {{-- /////////// --}}
   <div class="store">
    <div class="row align-items-center border rounded shadow-sm p-3 bg-white">
      <div class="col-auto">
          <img src="{{asset('assets/imgs/store3.png')}}"class="img-fluid rounded" style="width: 100px; height: auto;">
      </div>
      <div class="col">
          <h5 class="fw-bold">PAWS Brave Hearts</h5>
          <p class="mb-1 text-muted"><i class='bx bxs-location-plus'></i> 368 South Street, Calais, ME 04619</p>
          <p class="mb-1 text-muted"><i class='bx bxs-phone' style='color:#000000' ></i> (207) 454-7662</p>
          <p class="mb-0 text-muted"><i class='bx bx-envelope' style='color:#000000' ></i> pawsbravehearts@gmail.com</p>
      </div>
      <div class="col-auto text-end">
          <p class="fw-semibold mb-1">8:00 AM - 7:00 PM</p>
          <p class="small text-muted">
              <span class="text-dark">Sat</span> 
              <span class="text-success">Sun Mon Tu</span> 
              <span class="text-dark">Wed Thu</span> 
              <span class="text-success">Fri</span>
          </p>
          <a href="#" class="store-view  btn-sm">VIEW PETS</a>
      </div>
  </div>
   </div>
  {{-- ///////////// --}}
  <div class="store">
    <div class="row align-items-center border rounded shadow-sm p-3 bg-white">
      <div class="col-auto">
          <img src="{{asset('assets/imgs/store4.jpeg')}}"class="img-fluid rounded" style="width: 100px; height: auto;">
      </div>
      <div class="col">
          <h5 class="fw-bold">PAWS Brave Hearts</h5>
          <p class="mb-1 text-muted"><i class='bx bxs-location-plus'></i> 368 South Street, Calais, ME 04619</p>
          <p class="mb-1 text-muted"><i class='bx bxs-phone' style='color:#000000' ></i> (207) 454-7662</p>
          <p class="mb-0 text-muted"><i class='bx bx-envelope' style='color:#000000' ></i> pawsbravehearts@gmail.com</p>
      </div>
      <div class="col-auto text-end">
          <p class="fw-semibold mb-1">8:00 AM - 7:00 PM</p>
          <p class="small text-muted">
              <span class="text-dark">Sat</span> 
              <span class="text-success">Sun Mon Tu</span> 
              <span class="text-dark">Wed Thu</span> 
              <span class="text-success">Fri</span>
          </p>
          <a href="#" class="store-view  btn-sm">VIEW PETS</a>
      </div>
  </div>
  </div>
{{-- //////////// --}}
<div class="store" >
  <div class="row align-items-center border rounded shadow-sm p-3 bg-white">
    <div class="col-auto">
        <img src="{{asset('assets/imgs/store1.png')}}"class="img-fluid rounded" style="width: 100px; height: auto;">
    </div>
    <div class="col">
        <h5 class="fw-bold">PAWS Brave Hearts</h5>
        <p class="mb-1 text-muted"><i class='bx bxs-location-plus'></i> 368 South Street, Calais, ME 04619</p>
        <p class="mb-1 text-muted"><i class='bx bxs-phone' style='color:#000000' ></i> (207) 454-7662</p>
        <p class="mb-0 text-muted"><i class='bx bx-envelope' style='color:#000000' ></i> pawsbravehearts@gmail.com</p>
    </div>
    <div class="col-auto text-end">
        <p class="fw-semibold mb-1">8:00 AM - 7:00 PM</p>
        <p class="small text-muted">
            <span class="text-dark">Sat</span> 
            <span class="text-success">Sun Mon Tu</span> 
            <span class="text-dark">Wed Thu</span> 
            <span class="text-success">Fri</span>
        </p>
        <a href="#" class="store-view  btn-sm">VIEW PETS</a>
    </div>
  </div>
</div>

</div>

    <div class="footer" style="background-color: green">
      <div class=" text-center text-lg-start text-white">
        <div class="container p-4">
          <div class="row my-4">
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
    
              <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
                <img src="" height="70" alt=""
                     loading="lazy" />
              </div>
    
              <p class="text-center">Bringing love, one paw at a time. Adopt, nourish, and care for the furry friends who need you most! 🐾💚</p>
    
              <ul class="list-unstyled d-flex flex-row justify-content-center">
                <li>
                  <a class="text-white px-2" href="#!">
                    <i class="fab fa-facebook-square"></i>
                  </a>
                </li>
                <li>
                  <a class="text-white px-2" href="#!">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li>
                  <a class="text-white ps-2" href="#!">
                    <i class="fab fa-youtube"></i>
                  </a>
                </li>
              </ul>
    
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase mb-4">Animals</h5>
    
              <ul class="list-unstyled">
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>When your pet is missing</a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Recently found</a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>How to adopt?</a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Pets for adoption</a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Material gifts</a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Help with walks</a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Volunteer activities</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <ul class="list-unstyled mt-5">
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>General information</a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>About the shelter</a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Statistic data</a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Job</a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Tenders</a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Contact</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase mb-4">Contact</h5>
    
              <ul class="list-unstyled">
                <li>
                  <p><i class='bx bx-location-plus' style='color:#ffffff' ></i>jordan <br> 995DER</p>
                </li>
                <li>
                  <p><i class='bx bxs-phone' style='color:#ffffff' ></i>+777812749</p>
                </li>
                <li>
                  <p><i class='bx bx-envelope' style='color:#ffffff' ></i>info@powfecthome.com</p>
                </li>
              </ul>
            </div>
          </div>
        </div>

    

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
          © 2020 Copyright:
          <a class="text-white" href="https://mdbootstrap.com/">PawFectHome 2025. All Right Reserved</a>
        </div>

      </div>
    
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>