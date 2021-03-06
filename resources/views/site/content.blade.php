@if(isset($pages) && is_object($pages))
    @foreach($pages as $k=>$page)
        @if($k % 2 == 0)
            <section id="{{ $page->alias }}" class="about-us-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about-text wow fadeInUp" data-wow-delay=".2s">
                                {!! $page->text !!}
                            </div>
                        </div>

                        <div class="col-md-6 wow fadeInLeft" data-wow-delay=".2s">
                            <div class="about-image">
                                {!! Html::image('assets/images/'.$page->images) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @else
            <section id="{{ $page->alias }}" class="about-us-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 wow fadeInLeft" data-wow-delay=".2s">
                            <div class="about-image">
                                {!! Html::image('assets/images/'.$page->images) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-text wow fadeInUp" data-wow-delay=".2s">
                                {!! $page->text !!}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endforeach
@endif   {{-- Section Pages --}}

@if(isset($services) && is_object($services))
    <section id="service" class="service-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h2>service we offer</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($services as $service)
                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="single-service">
                                <span class="{{ $service->icon }}"></span>
                                <h4>{{ $service->name }}</h4>
                                {!! $service->text !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
@endif   {{-- Section Services --}}

@if(isset($peoples) && is_object($peoples))
<section id="team" class="team-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2>our expert team</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($peoples as $people)
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single-team">
                        {!! Html::image('assets/images/team/'.$people->images) !!}
                        <div class="team-description">
                            <h3>{{ $people->position }}</h3>
                            <h4>{{ $people->name }}</h4>
                            <div class="team-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook fb"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin tw"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-instagram ins"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif   {{-- Section Team --}}

@if(isset($portfolios) && is_object($portfolios))

<section id="work" class="work section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2>our awesome works</h2>
                </div>
            </div>
        </div>
        @if(isset($tags) && is_object($tags))
            <div class="row">
                <ul class="work">
                    <li class="filter" data-filter="all">all</li>
                    @foreach($tags as $tag)
                        <li class="filter" data-filter=".{{ $tag }}">{{ $tag }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="work-inner">
            <div class="row work-posts">
                @foreach($portfolios as $portfolio)
                    <div class="col-md-3 col-sm-4 mix {{$portfolio->filter}}">
                        <div class="item">
                            <a href="{{ asset('assets/images/portfolio/'.$portfolio->images) }}" class="work-popup">
                                {!! Html::image('assets/images/portfolio/'.$portfolio->images) !!}
                                <div class="portfolio-overlay">
                                    <div class="portfolio-item">
                                        <i class="fa fa-arrows"></i>
                                        <h2>{{$portfolio->name}}</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif   {{-- Section Portfolios --}}

<section id="contact" class="contact-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2>Get in touch with us</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="single-details">
                    <h2>Locations:</h2>
                    <p>Arshakunyats 5, Yerevan, Armenia</p>
                </div>
                <div class="single-details">
                    <h2>Phone Number:</h2>
                    <p>+374 (41) 43-53-31</p>
                </div>
                <div class="single-details">
                    <h2>Email:</h2>
                    <p>You can send us a message via the form aside or just send us an email at
                        <br> <a class="mail_to" href="mailto:support@smartcode.am"><strong>support@smartcode.am</strong></a>
                    </p>
                </div>
            </div>

            <div class="col-md-8">
                <div class="row contact-form-design-area wow fadeInUp">
                    <div class="col-md-12">
                        <div class="contact-form">
                            <div class="row">
                                <form action="{{action('MailController@sendMail')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group col-md-6">
                                        <p>Name</p>
                                        <input type="text" name="name" class="form-control" id="first-name" required="required">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p>email</p>
                                        <input type="email" name="email" class="form-control" id="email" required="required">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <p>Subject</p>
                                        <input type="text" name="subject" class="form-control" id="subject" required="required">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <p>message</p>
                                        <textarea rows="6" name="message" class="form-control" id="description" required="required"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="actions">
                                            <input type="submit" value="Send message" name="submit" id="submitButton" class="btn btn-lg btn-contact-bg" title="Submit Your Message!">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>   {{-- Section Contact --}}

<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="footer-text">
                    <h6>&copy;copyright | SmartCode 2018. Developed by Narek Poghosyan</h6>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="footer-social-link">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook fb"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-instagram ins"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>   {{-- Section Footer --}}

<div class="scroll-to-up">
    <div class="scrollup">
        <span class="lnr lnr-chevron-up"></span>
    </div>
</div>
