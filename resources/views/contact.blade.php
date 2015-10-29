<!-- by prem kumar singh @ 2015/10/29 -->
@extends('index')
@section('content')
	<section class="no-margin">
        <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?hl=en&q=kupondole&ie=UTF8&t=roadmap&z=17&iwloc=B&output=embed"></iframe>
    </section> 

    <section id="contact-page" class="container">
    	@if($sent)
    	<div class="alert alert-success" role="alert">
      		<strong>Cogratulation!</strong> You message has been sent successfully.
    	</div>
    	@endif
    	
        <div class="row-fluid">

            <div class="span8">
                <h4>Contact Form</h4>
                <div class="status alert alert-success" style="display: none"></div>
                	<form class="form-horizontal" role="form" method="post" action="{{ url('/contact') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="row-fluid">
                    <div class="span5">
                        <label>First Name</label>
                        <input type="text" name="fName" class="input-block-level" required="required" placeholder="Your First Name">
                        <label>Last Name</label>
                        <input type="text" name="lName" class="input-block-level" required="required" placeholder="Your Last Name">
                        <label>Email Address</label>
                        <input type="email"  name ="email" class="input-block-level" required="required" placeholder="Your email address">
                    </div>
                    <div class="span7">
                        <label>Message</label>
                        <textarea name="message" id="message" required="required" class="input-block-level" rows="8"></textarea>
                    </div>

                </div>
                <input type="submit" name="submit" class="btn btn-primary btn-large pull-right" value="Send Message"/>
                <p> </p>

					</form>
        </div>

        <div class="span3">
            <h4>Our Address</h4>
            <!-- <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p> -->
            <p>
                <i class="icon-map-marker pull-left"></i> Kupondole<br>
                Lalitpur,  Nepal
            </p>
            <p>
                <i class="icon-envelope"></i> &nbsp;info@omnitextsolution.com
            </p>
            <p>
                <i class="icon-phone"></i> &nbsp;+9779815720356
            </p>
            <p>
                <i class="icon-globe"></i> &nbsp;http://www.omnitextsolution.com
            </p>
        </div>

    </div>

</section>

@endsection
