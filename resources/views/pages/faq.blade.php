@extends('main')

@section('title', '| About')

@section('content')
    <div id="post-head" class="container-fluid">
        <div class="row parallax-window" data-parallax="scroll" data-image-src="images/faq.jpg">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="letterspacing-wide">Questions and answers about our services</h1>
                <hr class="deep-padding" />
                <div class="accordion">
                    <h4>What methods of payment are accepted?</h4>
                    <div>
                        <p>Payment can be made in advance using a credit card or a PayPal account, or on the day of the service using cash.</p>
                    </div>
                    <h4>When is the best time to book?</h4>
                    <div>
                        <p>The best time to book is 24 hours before a scheduled trip. If you require a service within a shorter time frame, please call the booking line to confirm availability.</p>
                    </div>
                    <h4>Do you charge per passenger, or per vehicle?</h4>
                    <div>
                        <p>All of our prices are charged per vehicle, which means no extra cost for additional passengers.</p>
                    </div>
                    <h4>Are there additional charges if my flight is delayed?</h4>
                    <div>
                        <p>As long as you provide your flight number to one of our booking agents, you will not be charged extra due to any flight delays.</p>
                    </div>
                    <h4>How can I find my driver and car?</h4>
                    <div>
                        <p>All of our drivers are provided with your contact information so that you can arrange a specific meeting location. Meet and Greet Services may include an additional charge so please confirm with one of our booking agents in advance.</p>
                    </div>
                    <h4>Are all of the drivers qualified?</h4>
                    <div>
                        <p>Every Driver is fully qualified, licenced, and registered with the local licencing authority</p>
                    </div>
                    <h4>Do you accept company contracts?</h4>
                    <div>
                        <p>We accept all company contracts. Please complete our contact form and we will respond within 24 hours.</p>
                    </div>
                    <h4>Do you have any special offers?</h4>
                    <div>
                        <p>There are many great deals and special offers available for all kinds of services. Please contact one of our booking agents to find out more.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection