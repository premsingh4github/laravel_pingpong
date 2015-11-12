<!-- by prem kumar singh @ 2015/10/29 -->
@extends('index')

@section('content')
	<!--Slider-->
    <section id="slide-show">
     <div id="slider" class="sl-slider-wrapper">

        <!--Slider Items-->    
        <div class="sl-slider">
            <!--Slider Item1-->
            <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="container">
                        <img class="pull-right" src="images/slider/img2.png" alt="" />
                        <h2>Greater success
</h2>
                        <h3 class="gap"> with custom content .We deliver high-quality content –
simply, quickly, and at competitive pricing.</h3>
                        
                        <a class="btn btn-large "  href="{{ url('authentication/register') }}">Free Registration!</a>
                    </div>
                </div>
            </div>
            <!--/Slider Item1-->

            <!--Slider Item2-->
            <div class="sl-slide item2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="sl-slide-inner">
                    <div class="container">
                        <img class="pull-right" src="images/slider/team7.png" alt="" />
                        <h2>Planning &amp; Analysis</h2>
                        <h3 class="gap">Aenean ultricies mi vitast</h3>
                        <!-- <a class="btn btn-large btn-transparent" href="#">Learn More</a> -->
                        <a class="btn btn-large "  href="{{ url('authentication/register') }}">Free Registration!</a>
                    </div>
                </div>
            </div>
            <!--Slider Item2-->

            <!--Slider Item3-->
            <!-- <div class="sl-slide item3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                   <div class="container">
                    <img class="pull-right" src="images/slider/team9.png" alt="" />
                    <h2>Unique Solutions</h2>
                    <h3 class="gap">Breatures who have been utterly</h3>
                    <a class="btn btn-large btn-transparent" href="#">Learn More</a>
                    <a class="btn btn-large "  href="{{ url('authentication/register') }}">Free Registration!</a>
                </div>
            </div>
        </div> -->
        <!--Slider Item3-->

    </div>
    <!--/Slider Items-->

    <!--Slider Next Prev button-->
    <nav id="nav-arrows" class="nav-arrows">
        <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
        <span class="nav-arrow-next"><i class="icon-angle-right"></i></span> 
    </nav>
    <!--/Slider Next Prev button-->

</div>
<!-- /slider-wrapper -->           
</section>
<!--/Slider-->
    

<section class="main-info">
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <h4>We serve you from all parts of the world</h4>
                <p class="no-margin">
                    Omnitextsolution.com is a well- known online writing platform that offers the best quality writing services to all students all over the world.
                </p>
                <p>Our commitment to serve our customers has made us much more successful as compared to the other writing service providing companies operating online. Our customers are served by highly professional and dedicated people at every step of the transaction.</p>
            </div>
            <!-- <div class="span3">
                <a class="btn btn-success btn-large pull-right" href="http://shapebootstrap.net">Free Download Nova</a>
            </div> -->
        </div>
    </div>
</section>

<!--Services-->
<section id="services">
    <div class="container">
        <div class="center gap">
            <h3>What We Offer</h3>
            <!-- <p class="lead">Look at some of the recent projects we have completed for our valuble clients</p> -->
        </div>

        <div class="row-fluid">
            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Academic writing</h4>
                        <div class="span6">
                            <ul class="unstyled">
                                <li><a href="#">Essay</a></li>
                                <li><a href="#">Term Paper</a></li>
                                <li><a href="#">Research Paper</a></li>
                                <li><a href="#">Book Report/Review, Movie Review</a></li>
                                <li><a href="#">Coursework</a></li>
                                <li><a href="#">Speech/Presentation</a></li>
                                <li><a href="#">Article</a></li>
                                <li><a href="#">Article Critique</a></li>
                                <li><a href="#">Annotated Bibliography</a></li>
                                <li><a href="#">Reaction Paper</a></li>
                                <li><a href="#">Application Paper</a></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-thumbs-up-alt icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Assignments</h4>
                        <div class="span6">
                            <ul class="unstyled">
                                <li><a href="#">Case Study</a></li>
                                <li><a href="#">Lab Report</a></li>
                                <li><a href="#">Programming</a></li>
                                <li><a href="#">Power Point Presentation</a></li>
                                <li><a href="#">Math/Physics/Economics/Statistics Problems</a></li>
                                <li><a href="#">Multiple Choice Questions</a></li>
                                <li><a href="#">Statistics Project</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-leaf icon-medium icon-rounded"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Dissertation and Thesis Services</h4>
                        <div class="span6">
                            <ul class="unstyled">
                                <li><a href="#">Dissertation</a></li>
                                <li><a href="#">Dissertation Chapter</a></li>
                                <li><a href="#">Thesis/Research Proposal</a></li>
                                <li><a href="#">Editing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gap"></div>

        <div class="row-fluid">
            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-shopping-cart icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Resume Services</h4>
                        <div class="span6">
                            <ul class="unstyled">
                                <li><a href="#">Resume Writing</a></li>
                                <li><a href="#">Resume Editing</a></li>
                                <li><a href="#">CV Writing</a></li>
                                <li><a href="#">CV Editing</a></li>
                                <li><a href="#">Cover Letter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">SEO &amp; Solution</h4>
                        <div class="span6">
                            <ul class="unstyled">
                                <li><a href="#">All SEO solution</a></li>
                                <li><a href="#">SEO uptimization</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Content Writing</h4>
                        <div class="span6">
                            <ul class="unstyled">
                                <li><a href="#">All type of content writing</a></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--/Services-->

<section class="services">
        <div class="container">
            <div class="center gap">
            <h3>Why Us</h3>
            <!-- <p class="lead">Look at some of the recent projects we have completed for our valuble clients</p> -->
        </div>
            <div class="row-fluid">
                <div class="span4">
                    <div class="center">
                        <i style="font-size: 48px" class="icon-bar-chart icon-large"></i>
                        <p> </p>
                        <h4>Quality</h4>
                        <p>The quality thresholds of our Thesis and Dissertations and Statistical Data Analysis are our foremost guarantee. We do not compromise, in any way, on the overriding quality aspects of our varied presentations and are sanguine that these would meet and surpass student expectations in the genre of presentations that we offer to them.</p>
                    </div>
                </div>

                <div class="span4">
                    <div class="center">
                        <i style="font-size: 48px" class="icon-cog icon-large"></i>
                        <p> </p>
                        <h4>Pricing</h4>
                        <p>
                        We follow Best Industry Practices in our pricing policies and practices and shall consistently endeavor to offer the best prices that clients need to pay to buy their papers. Quality has a price and we need to abide by company rules and regulatory regimes in all matters concerning pricing and its enforcement.</p>
                    </div>
                </div>

                <div class="span4">
                    <div class="center">
                        <i style="font-size: 48px" class="icon-heart icon-large"></i>
                        <p> </p>
                        <h4>Original Writing</h4>
                        <p>We reaffirm that provided works are genuine writing delivered by well experienced and dedicated writers from our pool of resourceful, accomplished and dedicated writers who are well trained and experienced in all aspects of Thesis/Dissertations and Statistical Data Analysis. They take extra pains to ensure that your paper meets all needed demands and requirements.</p>
                    </div>
                </div>

            </div>

            <hr>

            <div class="row-fluid">
                <div class="span4">
                    <div class="center">
                        <i style="font-size: 48px" class="icon-globe icon-large"></i>
                        <p> </p>
                        <h4>Zero-Plagiarism Tolerance</h4>
                        <p>
As part of our quality drive, we do not tolerate plagiarism in any form, intentional or accidental. We firmly believe that copying the words or ideas of other authors, without due acknowledgements, constitute academic dishonesty that has no place in our kind of business, ever, and we take all possible steps that all our papers meet and surpass academic rigor.

                         </p>
                    </div>
                </div>

                <div class="span4">
                    <div class="center">
                        <i style="font-size: 48px" class="icon-camera icon-large"></i>
                        <p> </p>
                        <h4>Money-back Guarantee</h4>
                        <p>Should the need and occasion arise, we offer to refund monies paid in the unlikely event our papers are sub standard and do not adhere to anti-plagiarism laws. Our Quality Control Department (QCD) would fully oversee such instances on case-to-case basis and their ruling shall be final and binding.</p>
                    </div>
                </div>

                <div class="span4">
                    <div class="center">
                        <i style="font-size: 48px" class="icon-bullhorn icon-large"></i>
                        <p> </p>
                        <h4>24/7 Customer Service</h4>
                        <p>We undertake to serve our valued and esteemed clients on 24/7 basis, as much as is reasonable, possible and tenable. Our current portfolio of clients as well as potential clients, wishing to do business with us, are always welcome to visit our websites and post their queries or messages using our inter active communication services.</p>
                    </div>
                </div>

            </div>

            <hr>

            <div class="center">
                <a class="btn btn-primary btn-large" href="#">Request a quote</a>
            </div>
            <p>&nbsp;</p>

        </div>
    </section>
  




@endsection
