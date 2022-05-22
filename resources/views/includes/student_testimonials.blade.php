<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .owl-item {width: 128.906px; margin-right: 10px;}
        .clientname{
            font-size: 24px;
            font-weight: 700;
            padding: 15px 0 5px 0;
            color: #fff;
            font-family: 'Montserrat', sans-serif;
        }
        .clientinfo{
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            color: #17d27c;
            margin-bottom: 15px;
        }
        .description{
            /* font-style: italic;
            line-height: 24px;
            letter-spacing: 2px;
            font-size: 16px;
            color: #fff;
            padding-left: 4%;
            margin-left: 0%;
            padding-right: 15%; */

            font-style: italic;
            line-height: 22px;
            letter-spacing: 2px;
            font-size: 13px;
            color: #fff;
            padding-left: 0%;
            margin-left: 10%;
            padding-right: 0%;
        }
        .ratinguser{
            color: #EBA102;
            font-size: 24px;
            margin-top: 20px;
        }
        .owl-stage{
            padding: 10%;
        }
        .img{
            height: 110px !important;
            width: auto !important;
            /* margin-left: 46% !important;
            margin-right: 5% !important; */
            border-radius: 50% !important;
        }
     

    </style>
</head>
<body>
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js">
</script>
 <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js">
   </script>

<!----------HTML code starts here------->

<div class="section testimonialwrap">
    <div class="container">
                <!-- title start -->
                <div class="titleTop">
                    <div class="subtitle">{{__('Parents Says About Us')}}</div>
                    <h3>{{__('Success')}} <span>{{__('Stories')}}</span></h3>
                </div>
                <!-- title end -->

        <div class="owl-carousel owl-theme owl-loaded owl-drag" id="ab">
        
            <div class="owl-stage-outer">
          
                <div class="owl-stage" >
                    @if(isset($students) && count($students))
                    @foreach($students as $testimonial)
 
                        <div class="owl-item cloned">
                            <div class="item" style="margin-left:-25% !important">
                                <div class="row"  style="margin-right: 25% !important;">
                                    <div class="col-2">
                                        <img src="{{ asset($testimonial->image) }}" alt="" class="img">
                                    </div>                                  
                                    <div class="col-10">
                                        <div class="clientname" style="text:white">{{$testimonial->testimonial_by}}</div>
                                        <div class="clientinfo" style="text:white">{{$testimonial->company}}</div>
                                        <p class="description" style="text-align: left;">"{{$testimonial->testimonial}}"</p>
                                    </div>
                                </div>
                            
                                {{-- <div class="ratinguser">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div> --}}
                                {{-- <img src="{{ asset('images/head.jpg') }}" alt="" class="img" >
                                <div class="clientname" style="text:white">{{$testimonial->testimonial_by}}</div>
                                <div class="clientinfo" style="text:white">{{$testimonial->company}}</div>
                                <p class="description">"{{$testimonial->testimonial}}"</p> --}}


                            </div>
                        </div>
                        @endforeach
                        @endif
                </div>
            </div>
                {{-- <div class="owl-nav disabled">
                </div> --}}
        </div>
    </div>
</div>

</body>
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:2, 
        // items change number for slider display on desktop
        autoWidth:false,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:5000,
        dots: false,
        autoplayHoverPause:true

        // slidesToShow: 1,
        // mergeFit:true,
        // slideBy:1,
        // center:false,
        // merge:true,
        // lazyload:false,
        // nav:true,  
        
    });

</script>
</html>