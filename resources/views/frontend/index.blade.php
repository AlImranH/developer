<!DOCTYPE html>
<html lang="en-us">
    @include('frontend.includes.head')
    <body>
        <div class="content-block" id="header" style="background: url({{  Storage::url((!$images->isEmpty()) ? $images->where('position', 'header')->first()->image: '')  }}) no-repeat center top fixed;">
            <div id="overlay-1">
                @include('frontend.includes.header')
                
                <div class="middle text-center clearfix">
                    <div class="container">
                        <h1 class="pro-name">Web <!-- <span style="color: #71b644;" > -->Developer<!-- </span> --></h1>
                        <p class="tagline">Bring your dreams to life</p>
                        <div class="skills">

                        </div>  <!-- skills -->
                        <a href="#contact" target="_blank" class="btn btn-lg btn-hire wow animated zoomIn">Hire Me</a>
                    </div>  <!-- container -->
                </div>  <!-- middle -->
                
                <div class="bottom text-center">
                    <a href="#portfolio"><i class="fa fa-angle-down fa-3x pulse"></i></a>
                </div>
            </div>  <!-- overlay-1 -->
        </div>  <!-- content-block -->

        @include('frontend.includes.latest-work')

       <!--  <div class="content-block text-center" id="services">
            <div class="overlay-2">
                        <header class="block-heading cleafix">
                            <h1>More About Me</h1>
                            <p>Lorem Ipsum Text</p>
                        </header>
                        <div class="block-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                <div class="row ">
                                    <div class="col-sm-4">
                                        <h4 class="pro-stat">Completed Project</h4>
                                        <h2 class="proj-name count1 count-timer" >020</h2>
                                    </div>
                                    <div class="col-sm-4">
                                        <h4 class="pro-stat">Working Project</h4>
                                        <h2 class="proj-name count2">9</h2>
                                    </div>
                                    <div class="col-sm-4">
                                        <h4 class="pro-stat">Top Rated Project</h4>
                                        <h2 class="proj-name count3">015</h2>
                                    </div>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    overlay-2
        </div>  --> <!-- content-block -->
        @include('frontend.includes.about-me')
            

        @include('frontend.includes.client')

        @include('frontend.includes.contact')

        @include('frontend.includes.footer')


        <!-- js -->
        <script>
            new WOW().init();
        </script>

        @include('frontend.includes.script')

	</body>
</html>
