@extends('template.index')

@section('contents')
<div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Our Projects</p>
                <h1 class="display-5 mb-5">We've Done Lot's of Awesome Projects</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/project-1.jpg" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/project-1.jpg"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Fantasias de Halloween para Pets</a>
                        <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/project-2.jpg" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/project-2.jpg"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Marketing Content Strategy</a>
                        <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/project-3.jpg" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/project-3.jpg"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Business Target Market</a>
                        <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/project-4.jpg" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/project-4.jpg"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Social Marketing Strategy</a>
                        <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->


    <!-- Quote Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-medium text-primary">Get A Quote</p>
                    <h1 class="display-5 mb-4">Need Our Expert Help? We're Here!</h1>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita
                        erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                    <a class="d-inline-flex align-items-center rounded overflow-hidden border border-primary" href="">
                        <span class="btn-lg-square bg-primary" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </span>
                        <span class="fs-5 fw-medium mx-4">+012 345 6789</span>
                    </a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="mb-4">Get A Free Quote</h2>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="mail" placeholder="Your Email">
                                <label for="mail">Your Email</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="mobile" placeholder="Your Mobile">
                                <label for="mobile">Your Mobile</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <select class="form-select" id="service">
                                    <option selected>Digital Marketing</option>
                                    <option value="">Social Marketing</option>
                                    <option value="">Content Marketing</option>
                                    <option value="">E-mail Marketing</option>
                                </select>
                                <label for="service">Choose A Service</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message"
                                    style="height: 130px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote Start -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Our Team</p>
                <h1 class="display-5 mb-5">Our Expert People Ready to Help You</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="img/team-1.jpg" alt="">
                        <h5>Alex Robin</h5>
                        <span class="text-primary">Founder & CEO</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="img/team-2.jpg" alt="">
                        <h5>Adam Crew</h5>
                        <span class="text-primary">Co Founder</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="img/team-3.jpg" alt="">
                        <h5>Boris Johnson</h5>
                        <span class="text-primary">Executive Manager</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="img/team-4.jpg" alt="">
                        <h5>Robert Jordan</h5>
                        <span class="text-primary">Digital Marketer</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Testimonial</p>
                <h1 class="display-5 mb-5">What Clients Say About Our Services!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="img/testimonial-1.jpg" alt="">
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                        sit, sed stet lorem sit clita duo justo</p>
                    <h5>Client Name</h5>
                    <span class="text-primary">Profession</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="img/testimonial-2.jpg" alt="">
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                        sit, sed stet lorem sit clita duo justo</p>
                    <h5>Client Name</h5>
                    <span class="text-primary">Profession</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="img/testimonial-3.jpg" alt="">
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                        sit, sed stet lorem sit clita duo justo</p>
                    <h5>Client Name</h5>
                    <span class="text-primary">Profession</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="img/testimonial-4.jpg" alt="">
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                        sit, sed stet lorem sit clita duo justo</p>
                    <h5>Client Name</h5>
                    <span class="text-primary">Profession</span>
                </div>
            </div>
        </div>
    </div>
@endsection