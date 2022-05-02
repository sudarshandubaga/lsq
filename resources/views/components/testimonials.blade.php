<section class="py-5 bg-white">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-center section-heading mb-5">
                    <h4>What our customers says</h4>
                    <h3>Client's Testimonials</h3>
                </div>
                <div class="testimonial-box">
                    <div id="testimonialSlider" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="{{ url('images/user.jpg') }}" class="rounded-circle" alt="">
                                    </div>
                                    <div>
                                        <blockquote>
                                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has 
                                            roots in a piece of classical Latin literature from 45 BC, making it over 2000
                                            years old. Richard McClintock, a Latin professor at Hampden-Sydney 
                                            College in Virginia, looked up one of the more obscure Latin words, 
                                            consectetur, from a Lorem Ipsum passage, and going through the cites of 
                                            the word in classical literature, discovered the undoubtable source.
                                        </blockquote>
                                        <div>
                                            <strong>
                                            - Robin Donald
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="{{ url('images/user.jpg') }}" class="rounded-circle" alt="">
                                    </div>
                                    <div>
                                        <blockquote>
                                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has 
                                            roots in a piece of classical Latin literature from 45 BC, making it over 2000
                                            years old. Richard McClintock, a Latin professor at Hampden-Sydney 
                                            College in Virginia, looked up one of the more obscure Latin words, 
                                            consectetur, from a Lorem Ipsum passage, and going through the cites of 
                                            the word in classical literature, discovered the undoubtable source.
                                        </blockquote>
                                        <div>
                                            <strong>
                                            - Robin Donald
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="{{ url('images/user.jpg') }}" class="rounded-circle" alt="">
                                    </div>
                                    <div>
                                        <blockquote>
                                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has 
                                            roots in a piece of classical Latin literature from 45 BC, making it over 2000
                                            years old. Richard McClintock, a Latin professor at Hampden-Sydney 
                                            College in Virginia, looked up one of the more obscure Latin words, 
                                            consectetur, from a Lorem Ipsum passage, and going through the cites of 
                                            the word in classical literature, discovered the undoubtable source.
                                        </blockquote>
                                        <div>
                                            <strong>
                                            - Robin Donald
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialSlider" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonialSlider" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center section-heading mb-5">
                    <h4>What is in your mind?</h4>
                    <h3>Frequently Asked Questions</h3>
                </div>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    @for($i = 1; $i <= 6; $i++)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button{{ $i === 1 ? ' show' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne-{{ $i }}" aria-expanded="false" aria-controls="flush-collapseOne-{{ $i }}">
                                The standard Lorem Ipsum passage, used since the 1500s
                            </button>
                        </h2>
                        <div id="flush-collapseOne-{{ $i }}" class="accordion-collapse collapse{{ $i === 1 ? ' show' : '' }}" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
industry's standard dummy text ever since the 1500s,</div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>