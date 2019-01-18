@extends('main')

@section('title', '| Contact')

@section('content')
<div id="post-head" class="container-fluid header-block">
    <div class="row parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg">
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Contact Us</h1>
            <hr>
            <form action="{{ url('contact') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label name="email">Email: </label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label name="subject">Subject: </label>
                    <input type="text" id="subject" name="subject" class="form-control">
                </div>
                <div class="form-group">
                    <label name="message">Message: </label>
                    <textarea id="message" name="message" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6LeNoCAUAAAAAHrnPaS-n2VseYc3JA1eDkeW_kD-"></div>
                </div>
                <input type="submit" value="Send" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection