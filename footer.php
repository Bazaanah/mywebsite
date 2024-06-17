    <!-- for the main footer section -->
    <div class="container-fluid bg-dark">
        <div class="container">
          <div class="footer py-5">
            <div class="row g-3">
              <!-- carousel section of the footer-->
              <div class="col-md-4 footer_carousel">
                <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                  <div class="carousel-inner">
                    <div class="carousel-item  active">
                      <img src="img/footer-img1.jpeg" class="d-block w-100 h-100 object-fit-cover" alt="...">
                    </div>
                    <div class="carousel-item ">
                      <img src="img/footer-img2.jpeg" class="d-block w-100 h-100 object-fit-cover" alt="...">
                    </div>
                    <div class="carousel-item ">
                      <img src="img/footer-img3.jpeg" class="d-block w-100 h-100 object-fit-cover" alt="...">
                    </div>
                    <div class="carousel-item ">
                      <img src="img/footer-img5.jpeg" class="d-block w-100 h-100 object-fit-cover" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
              
              <!-- social media -->
              <div class="col-12 col-md-4 align-items-center">
                <div class="container">
                  <div class="text-center cltxt p-3 fs-3">Follow me on</div>
                  <div class="container text-white">

                    <!-- facebook-->
                    <a href="" class="text-decoration-none text-white">
                        <div class="d-flex text-center">
                          <div class="w-25 pt-1">
                              <i class="fab fa-facebook fa-lg"></i>
                          </div>
                          <p class="fs-5">Facebook</p>
                        </div>
                    </a>

                    <!-- whatsaap-->
                    <a href="https://wa.link/g05uej" class="text-decoration-none text-white">
                        <div class="d-flex text-center">
                          <div class="w-25 pt-1">
                              <i class="fab fa-whatsapp fa-lg"></i>
                          </div>
                          <p class="fs-5">WhatsApp</p>
                        </div>
                    </a>

                    <!-- instagram-->
                    <a href="" class="text-decoration-none text-white">
                        <div class="d-flex text-center">
                          <div class="w-25 pt-1">
                              <i class="fab fa-instagram fa-lg"></i>
                          </div>
                          <p class="fs-5">Instagram</p>
                        </div>
                    </a>

                    <!-- x-->
                    <a href="" class="text-decoration-none text-white">
                        <div class="d-flex text-center">
                          <div class="w-25 pt-1">
                            <i class="fab fa-xing fa-lg"></i>
                          </div>
                          <p class="fs-5">X / Twitter</p>
                        </div>
                    </a>
                    
                  </div>
                </div>
              </div>

              <!-- for navigation and leave a message -->
              <div class="col-12 col-md-4">

                <!-- footer links-->
                <div class="d-flex justify-content-evenly footer_nav pb-3">
                  <a href="index.php" class="text-decoration-none p-2">Home</a>
                  <a href="service.php" class="text-decoration-none p-2">Service</a>
                  <a href="gallary.php" class="text-decoration-none p-2">Gallary</a>
                  <a href="about_me.php" class="text-decoration-none p-2">About Me</a>
                </div>

                <!-- for the leave a message section -->
                <div class="leave_message">
                        <form action="" method="post" class="row g-3 pt-2 text-white">

                            <div class="d-flex">
                                    <div class="me-2">
                                      <label for="FormControlInput1" class="form-label">Full Name</label>
                                      <input type="text" class="form-control" id="FormControlInput1" placeholder="First & Last Name">
                                    </div>
                                    <div class="ms-2">
                                              <label for="FormControlInput1" class="form-label">Email address</label>
                                              <input type="email" class="form-control" id="FormControlInput1" placeholder="name@example.com" required>
                                    </div>
                            </div>
                            <div class="col-12">
                                <label for="exampleFormControlTextarea1" class="form-label">Leave a message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                            </div>
                           

                            <div class="col-12 text-center">
                                  <button type="submit" class="btn-md p-2 w-50 rounded clbg_org border-0 text-white">Message</button>                              
                              </div>

                            </div>
                        </form>
                </div>

              </div>
            </div>
          </div>
        </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.11/lib/typed.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- initializing swiper slider -->
        <script>
            var swiper = new Swiper(".mySwiper", {
              slidesPerView: 3,
              spaceBetween: 30,
              grabCursor: true,
              autoplay: {
                  delay: 2500,
                  disableOnInteraction: false,
                  pauseOnMouseEnter: true,
                },
              slidesPerGroup: 1,
              loop: true,
              loopFillGroupWithBlank: true,
              pagination: {
                el: ".swiper-pagination",
                clickable: true,
              },
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
            });
            </script>