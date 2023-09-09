    @extends('layouts.app2')

    @section('content')
        <div class="row">
            <div class="col-md-12">
                <section class="about">
                    <div class="container">
                        <div class="row py-5">
                            <div class="col-12 animate__animated animate__slideInRightl">
                                <video width="100%" height="auto    " controls autoplay>
                            <source src="{{ asset('video/iblvideo.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="about-carousel">
                    <div class="row">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/secure-shipping.jpg') }}" class="d-block w-100 img-carousel"
                                        alt="Secure Shipping">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Secure Shipping</h5>
                                        <p>We care specially about the security of our partners and customers by having freight
                                            forwarding liabilities.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/track-goods.jpg') }}" class="d-block w-100 img-carousel"
                                        alt="Track Goods">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Know where your goods are</h5>
                                        <p>Easily keep track of your shipment with us.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/delivery.jpg') }}" class="d-block w-100 img-carousel"
                                        alt="Delivery">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Total Logistics</h5>
                                        <p>From your doorstep to destination, in one easy step.</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </section>
                <section class="about">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1 class="section-title">- About Us -</h1>
                                <hr class="custom-hr">
                            </div>
                        </div>
                        <div class="row py-5">
                            <div class="col-12 bumpcol">
                                <div class="card about-complete animate__animated animate__slideInRight">
                                    <div class="card-body about-body">
                                        <h4 class="about-glance">About Us</h4>
                                        <p class="about-text">PT. INTERBENUA LOGISTINDO is a well established International
                                            Freight Forwarding and Logistic Company in Indonesia.</p>
                                        <p class="about-text">
                                            Our company, which has strong alliances with Shipping Line, Trucking Companies and
                                            other transport services. will ensure there is a solution to match customer’s needs.
                                        </p>
                                        <p>
                                            Through these strategic arrangements, customers are assured of greater choice,
                                            convenience and flexibility.</p>
                                        <p>We always learn, listen and acknowledge customer requirements and guarantee that the
                                            service is delivered with care.</p>
                                        <p>Our commitment to meeting your needs extends to ensuring that we comply with all
                                            standards for security, safety, regulatory and environmental requirements, giving
                                            you peace of mind.</p>
                                        <p>Our services cover from four major port in Indonesia
                                            (Jakarta, Belawan, Semarang and Surabaya) to Asia, Middle East, Europe, USA,
                                            Australia and Africa. And with the support or all agents over the world, we can ship
                                            all variant cargo (FCL, LCL, DG Cargo, etc.).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            <section class="partner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title-dark">- Our Partners -</h1>
                    <hr class="custom-hr-dark">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="partner-text text-center">Partnered with over 100 agents worldwide, our coverage reaches all
                        around the
                        globe</p>

                </div>
            </div>
            <div class="row">
                <section class="faq-area section-gap" id="agent">
                    <div class="container">
                        <div class="row">
                            <div class="row py-3">
                                <div class="col-md-3 bumpcol">
                                    <div class="card animate__animated animate__slideInRight partner-card">
                                        <div class="card-body">
                                                    <ul class="text-start" style="list-style-type: none;">
                                                        <li>Algeria</li>
                                                        <li>Angola</li>
                                                        <li>Argentina</li>
                                                        <li>Australia</li>
                                                        <li>Austria</li>
                                                        <li>Bahrain</li>
                                                        <li>Bangladesh</li>
                                                        <li>Belgium</li>
                                                        <li>Brazil</li>
                                                        <li>Brunei</li>
                                                        <li>Bulgaria</li>
                                                        <li>Cambodia</li>
                                                        <li>Canada</li>
                                                        <li>Canary Islands</li>
                                                        <li>Chile</li>
                                                        <li>China</li>
                                                        <li>Colombia</li>
                                                        <li>Costa Rica</li>
                                                        <li>Cyprus</li>
                                                        <li>Czech Republic</li>
                                                        <li>Denmark</li>
                                                        <li>Dijibouti</li>
                                                        <li>Dominican Republic</li>
                                                        <li>Ecuador</li>
                                                        <li>Egypt</li>
                                                    </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 bumpcol">
                                    <div class="card animate__animated animate__slideInRight partner-card">

                                        <div class="card-body">
                                                    <ul class="text-start" style="list-style-type: none;">
                                                        <li>El Salvador</li>
                                                        <li>Estonia</li>
                                                        <li>Ethopia</li>
                                                        <li>Finland</li>
                                                        <li>France</li>
                                                        <li>Germany</li>
                                                        <li>Ghana</li>
                                                        <li>Greece</li>
                                                        <li>Guatemala</li>
                                                        <li>Honduras</li>
                                                        <li>Hong Kong</li>
                                                        <li>Hungary</li>
                                                        <li>India</li>
                                                        <li>Indonesia</li>
                                                        <li>Iraq </li>
                                                        <li>Ireland</li>
                                                        <li>Israel</li>
                                                        <li>Italy</li>
                                                        <li>Ivory Coast</li>
                                                        <li>Jamaica</li>
                                                        <li>Japan</li>
                                                        <li>Jordan</li>
                                                        <li>Kenya</li>
                                                        <li>Korea</li>
                                                        <li>Kuwait</li>
                                                    </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 bumpcol">
                                    <div class="card animate__animated animate__slideInRight partner-card">
                                        <div class="card-body">
                                                    <ul class="text-start" style="list-style-type: none;">
                                                        <li>Latvia</li>
                                                        <li>Lebanon</li>
                                                        <li>Libya</li>
                                                        <li>Lithuania</li>
                                                        <li>Malawi</li>
                                                        <li>Malaysia</li>
                                                        <li>Malta</li>
                                                        <li>Mexico</li>
                                                        <li>Morocco</li>
                                                        <li>Mozambique</li>
                                                        <li>Netherlands</li>
                                                        <li>New Zealand</li>
                                                        <li>Nigeria</li>
                                                        <li>Norway</li>
                                                        <li>Oman</li>
                                                        <li>Pakistan</li>
                                                        <li>Panama</li>
                                                        <li>Paraguay</li>
                                                        <li>Peru</li>
                                                        <li>Philippines</li>
                                                        <li>Portugal</li>
                                                        <li>Qatar</li>
                                                        <li>Romania</li>
                                                        <li>Russia</li>
                                                        <li>Saudi Arabia</li>
                                                    </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 bumpcol">
                                    <div class="card animate__animated animate__slideInRight partner-card">

                                        <div class="card-body">
                                                    <ul class="text-start" style="list-style-type: none;">
                                                        <li>Senegal</li>
                                                        <li>Singapore</li>
                                                        <li>Slovak Republic</li>
                                                        <li>Slovenia</li>
                                                        <li>South Africa</li>
                                                        <li>Spain</li>
                                                        <li>Sri Lanka</li>
                                                        <li>Sudan</li>
                                                        <li>Sweden</li>
                                                        <li>Switzerland</li>
                                                        <li>Taiwan</li>
                                                        <li>Tanzania</li>
                                                        <li>Thailand</li>
                                                        <li>Tunisia</li>
                                                        <li>Turkey</li>
                                                        <li>Uganda</li>
                                                        <li>Ukraine</li>
                                                        <li>United Arab Emirates</li>
                                                        <li>United Kingdom</li>
                                                        <li>Unites States</li>
                                                        <li>Uruguay</li>
                                                        <li>Venezuela</li>
                                                        <li>Vietnam</li>
                                                        <li>Yemen</li>
                                                        <li>Zambia</li>
                                                    </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </section>
            </div>
        </div>

    @endsection
