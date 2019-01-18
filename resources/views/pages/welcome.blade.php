@extends('main')

@section('title', '| Home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 full-size">
                <div class="carousel slide" id="carousel">
                    <ol class="carousel-indicators">
                        <li data-slide-to="0" data-target="#carousel" class="active">
                        </li>
                        <li data-slide-to="1" data-target="#carousel">
                        </li>
                        <li data-slide-to="2" data-target="#carousel">
                        </li>
                        <li data-slide-to="3" data-target="#carousel">
                        </li>
                        <li data-slide-to="4" data-target="#carousel">
                        </li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="w-100" alt="Carousel Bootstrap First"
                                 src="images/slider1.png">
                            <div class="carousel-caption">
                                <h3 class="light-text">
                                    Call Us On: 07902 006334
                                </h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Carousel Bootstrap Second"
                                 src="images/slider2.png">
                            <div class="carousel-caption">
                                <h4>
                                    Second Thumbnail label
                                </h4>
                                <p>
                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                    porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Carousel Bootstrap Third"
                                 src="images/slider3.png">
                            <div class="carousel-caption">
                                <h4>
                                    Third Thumbnail label
                                </h4>
                                <p>
                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                    porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Carousel Bootstrap Third"
                                 src="images/slider4.png">
                            <div class="carousel-caption">
                                <h4>
                                    Third Thumbnail label
                                </h4>
                                <p>
                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                    porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Carousel Bootstrap Third"
                                 src="images/slider5.png">
                            <div class="carousel-caption">
                                <h4>
                                    Third Thumbnail label
                                </h4>
                                <p>
                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                    porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel" data-slide="prev"><span
                                class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a
                            class="carousel-control-next" href="#carousel" data-slide="next"><span
                                class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <h2>
                    Skoda Octavia Estate
                </h2>
                <p>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                    mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna
                    mollis euismod. Donec sed odio dui.
                </p>
            </div>
            <div class="col-md-3">
                <h2>
                    Skoda Octavia Estate
                </h2>
                <p>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                    mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna
                    mollis euismod. Donec sed odio dui.
                </p>
            </div>
            <div class="col-md-3">
                <h2>
                    Skoda Octavia Estate
                </h2>
                <p>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                    mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna
                    mollis euismod. Donec sed odio dui.
                </p>
            </div>
        </div>
    </div>
    </div>
    <div id="services" class="dark-background">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2 class="l-text-color">
                    Call the Booking Line at 07902 006334
                </h2>
                <p>
                    This is a fast and easy way to make a reservation. Simply call the booking line anytime and one of
                    our operators will be happy to help you arrange a taxi that fits your needs.
                </p>
            </div>
            <div class="col-md-4">
                <h2 class="l-text-color">
                    Reserve a Taxi Online
                </h2>
                <p>
                    You can also book your journey or request a quote online. This is a straightforward and rapid process that is easy for everyone to use. It is also a great way to find out more about our special offers.
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2 class="l-text-color">
                    Special Offers
                </h2>
                <p>
                    There are many great deals and special offers available on Plan B airport transfer and other services, including rides from and to Manchester airport. Book in advance to make sure that you get the best price for truly reliable service.
                </p>
            </div>
            <div class="col-md-4">
                <h2 class="l-text-color">
                    Meet and Greet Services
                </h2>
                <p>
                    We also offer a meet and greet service, so that you can be confident that there will be a driver and a car waiting for you upon arrival at the airport. Some additional charges may apply, but this provides a guarantee that you will enjoy a prompt pick up.
                </p>
            </div>
        </div>
    </div>
    <div id="contact">
        <div class="container-fluid wide-strip parallax-window" data-parallax="scroll"
             data-image-src="images/wide_back.jpg">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <h3 class="text-block-center light-text text-center">Book Online Today And Travel In Comfort On Your Next
                        Trip</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="text-block-center light-text midtext high-padding">
                        <p>Call Us On 0790 2006334 or Email booking@planb-north.wales</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <a href="/about" class="text-block-center">
                        <button type="button" class="btn btn-outline-mono high-margin">
                            Online booking
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="prices">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <p>Airport transfers to Manchester Airport & Liverpool Airport from: £47 e.g airport taxi/transfer from Buckley in Flintshire : £47 transfer from Deeside in Flintshire : £47 airport taxi from Shotton in Flintshire only £47. Ewloe to Manchester & Liverpool £47, airport taxi from Connah's Quay £47, Transfer from Northop : £48. taxi from Flint : £47 Sandycroft £47. airport taxi from Bagillt in Flintshire : £47. Transfer from Mold : £49 . airport transfer from Hope : £50. airport transfer from Cilcain : £52 transfer from Holywell : £48 Leeswood by Mold : £49. Caerwys : £52. Rosset : £49. Holt : £54 LLay £52 Mostyn : £50. Mostyn Docks : £54. Wrexham: £56. Talacre : £55. Overton : £70. Ruthin : £59 Prestatyn : £59 St Asaph : £58. Rhyl : £64. Denbigh : £60. Llangollen : £67. Corwen : £74 Oswestry : £79. Abergele : £68. Llandudno : £79. Conway : £79. Llanwrst : £88 Betws-Y-Coed : £92. Bethesda:£99 Bangor : £96, Portmadog : £132. Abersoch : £152, Harlech : £159. Holyhead : £138</p>
                <p>These prices are for our full Meet and Greet Airport Service. Contact us for a competitive quote from any areas of North wales & Chester inc Flintshire, Anglesey, Powys, Gwynedd, Denbighshire, Shropshire, Wirral & Wrexham that are not listed.</p>
                <p>Airport taxi transfer to East Midland Airport & Birmingham International Airport transfers from : £135 e.g. Buckley to Birmingham International: £135, Bagillt to East midlands Airport: £135. Holywell , Mold , Northop, Shotton. Connah's Quay : Wrexham: to East Midlands :£135, Ruthin : £139, Denbigh : £139, Bangor : £198</p>
                <p>Phone on 07902 006334 for a competitive quote to East Midland Airport & Birmingham Airport from all areas of North wales & Chester inc Flintshire, Anglesey, Powys, Gwynedd, Denbighshire, Shropshire, Wirral & Wrexham, Full Meet and Greet Executive Service</p>
                <p>Airport taxi transfer to Heathrow Airport transfers from : £240</p>
            </div>
            <div class="col-md-4">
                <p>Airport taxi transfer to Gatwick Airport transfers from : £270 e.g. Buckley to London Gatwick : £270, Holywell : £270, Bagillt : £265. Mold : £270, Connah's Quay : £270. Wrexham: £270 Ruthin : £275.Denbigh : £280, Bangor : £325 Holyhead :£345</p>
                <p>Contact us no line for a competitive quote to Gatwick Airport & Heathrow Airport from all areas of North wales & Chester inc Flintshire, Anglesey, Powys, Gwynedd, Denbighshire, Shropshire, Wirral & Wrexham</p>
                <p>Luton Airport taxi transfers from : £225. e.g. Chester to Luton £225. Buckley : £225, Holywell : £225, Mold : £225, Wrexham to Luton Airport £225, Ruthin : £225, Denbigh : £235 ,Bangor : £315 . We operate a meet & greet service.</p>
                <p>Contact 07902 006334 for a competitive quote to Luton Airport from all areas of North Wales & Chester inc Flintshire, Anglesey, Powys, Gwynedd, Denbighshire, Shropshire, Wirral & Wrexham, Transfers from Manchester & Liverpool Airports to Luton from £225. Quotes from any area of Flintshire, North Wales, Chester & wirral</p>
                <p>Stanstead Airport taxi transfers from : £259. e.g., Bagillt : £259. Holywell : £259, Shotton : £259. Mold : £259, Wrexham: £259 Ruthin : £259, Denbigh : £265 ,Bangor : £319.</p>
                <p>Phone on 07902 006334 for a competitive quote to Stanstead Airport from all areas of North wales inc Flintshire,Anglesey, Powys, Gwynedd, Denbighshire, Shropshire, Wirral & Wrexham</p>
                <p>Cardiff Airport taxi transfers from : £215. Leeds/Bradford Airport taxi transfers from : £135</p>
            </div>
        </div>
    </div>

@endsection