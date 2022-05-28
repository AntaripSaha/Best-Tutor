<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">

</head>
<body>
    {{-- <div>
            <div class="owl-carousel">
                <div> </div>
                
            </div>
    </div> --}}
</body>
<script>
    var owl = $('.owl-carousel');
        owl.owlCarousel({
        items:2,
        loop:true,
        margin:0,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:1,
                nav:false
            },
            1366:{
                items:2,
                nav:true,
                loop:false
            }
    
        }
    });
    $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[1000])
    })
    $('.stop').on('click',function(){
        owl.trigger('stop.owl.autoplay')
    })
</script>
<script src="jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
</html>