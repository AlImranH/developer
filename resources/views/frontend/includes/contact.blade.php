<div class="content-block" id="contact">
    <div class="overlay-3">
        <header class="block-heading cleafix text-center">
            <h1>Contact</h1>
            <!-- <p>Feel Free to Contact</p> -->
        </header>
        <div class="block-content text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 wow animated fadeInLeft">
                        <form class="contact-form" action="{{ route('message.store') }}" method="POST">
                            @csrf
                            <input type="text" name="name" placeholder="Name" required>
                            <input type="email" name="email" placeholder="Email" required>
                            <textarea rows="5" name="message" placeholder="Say Something..." required></textarea>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                    <div class="col-md-6 wow animated fadeInRight">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="contact-info">
                                    <div class="clearfix">
                                        <div class="rotated-icon">
                                            <div class="sqaure-nebir"></div>
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <p><strong> Address:</strong> {{ $contact->address }}
                                        </p>
                                    </div>
                                    <div class="clearfix">
                                        <div class="rotated-icon">
                                            <div class="sqaure-nebir"></div>
                                            <i class="fa fa-mobile"></i>
                                        </div>
                                        <p><strong> Cell No:</strong> {{ $contact->phone }} </p>
                                    </div>
                                    <div class="clearfix">
                                        <div class="rotated-icon">
                                            <div class="sqaure-nebir"></div>
                                            <i class="fa fa-envelope-o"></i>
                                        </div>
                                        <p>
                                            <strong> Email:</strong> {{ $contact->email }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <ul class="social-box">
                                <li><a class="facebook-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="g-plus-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="linkedin-icon" href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>	<!-- block-content -->
    </div>	<!-- overlay-3 -->
</div>	<!-- content-block -->