@extends('layouts.page')

@section('page_title', 'Contact Us')

@section('page_content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <div>
                    <div>
                        <div class="contact-block section-heading">
                            <h4>
                                <i class="fa-solid fa-phone"></i> Call
                            </h4>
                            <div>+91 99xxx xxxxx</div>
                        </div>
                    </div>
                    <div>
                        <div class="contact-block section-heading">
                            <h4>
                                <i class="fa-regular fa-envelope"></i> E-Mail
                            </h4>
                            <div>info@lsqpersonalcare.com</div>
                        </div>
                    </div>
                </div>
                <div class="contact-block section-heading">
                    <h4>
                        <i class="fa-solid fa-location-dot"></i> Address
                    </h4>
                    <div>22-B Some Street, Some Area, 342011.</div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact-block">
                    <form action="" method="post">
                        <div class="section-heading mb-5">
                            <h4>
                                Get In Touch
                            </h4>
                            <p>Keep in touch by filling below form.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Name *">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Mobile No. *">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Email Address *">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Message *"></textarea>
                        </div>
                        <button class="btn-primary btn-lg px-5">
                            Send
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14310.362356887921!2d73.0346766!3d26.2749478!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe760a915f5109398!2sRudraksha%20tech!5e0!3m2!1sen!2sin!4v1651512496241!5m2!1sen!2sin" class="w-100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
@endsection