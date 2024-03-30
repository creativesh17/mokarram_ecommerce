@push('css_plugin')
<link rel="stylesheet" href="{{ asset('contents/website/plugins') }}/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="{{ asset('contents/website/plugins') }}/owlcarousel/assets/owl.theme.default.min.css">
<script src="{{ asset('contents/website/plugins') }}/owlcarousel/owl.carousel.min.js"></script>
<script>
    $(function(){
        slider_reboot();
        window.render_top_deals_product();
    })
</script>
@endpush
<section class="flat-row flat-slider">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <div class="slider owl-carousel">
                    @foreach(\App\Models\WebsiteBanner::where('show',1)->where('status',1)->orderBy('id','DESC')->get()
                        as $item)
                    <div class="slider-item style2">
                        <div class="item-text">
                            <div class="header-item">
                                <p>Enhanced Technology</p>
                                <h2 class="name">SMART <span>TV</span></h2>
                            </div>
                            <div class="divider65"></div>
                            <div class="content-item">
                                <div class="price">
                                    <span class="sale">$1.589.99</span>
                                    <span class="btn-shop">
                                        <a href="#" title="">SHOP NOW <img src="images/icons/right-2.png" alt=""></a>
                                    </span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="regular">
                                    $2.500.99
                                </div>
                            </div>
                        </div>
                        <div class="item-image">
                            <div class="sale-off">
                                60 % <span>sale</span>
                            </div>
                            <img src="images/slider/03.png" alt="">
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.slider -->

                    <div class="slider-item">
                        <div class="item-text">
                            <div class="header-item">
                                <p>Enhanced Technology</p>
                                <h2 class="name">SMART <span>TV</span></h2>
                                <p>The ship set ground on the shore of this uncharted desert isle
                                with Gilligan the Skipper too the millionaire and his story.</p>
                            </div>
                            <div class="content-item">
                                <div class="price">
                                    <span class="sale">$1.589.99</span>
                                    <span class="btn-shop">
                                        <a href="#" title="">SHOP NOW <img src="images/icons/right-2.png" alt=""></a>
                                    </span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="regular">
                                    $2.500.99
                                </div>
                            </div>
                        </div>
                        <div class="item-image">
                            <img src="images/slider/01.png" alt="">
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.slider -->
                    
                    @endforeach
                </div><!-- /.slider -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-slider -->
