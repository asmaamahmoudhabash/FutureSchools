</main>

@inject('settings','App\Models\Setting')

<?php
$setting = $settings->find(1);
?>
<footer class="main-footer">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-logo">
                        <a href="{{url('/')}}">
                            <img src="{{asset('assets/front/assets/images/logo.png')}}" class="img-responsive" alt="">
                        </a>

                    </div>
                </div>


                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-links">
                        <ul class="list-unstyled no-margin clearfix">
                            <li class="col-md-6 col-sm-6 col-xs-6">
                                <a href="{{url('/')}}">الرئيسية</a>
                            </li>

                            <li class="col-md-6 col-sm-6 col-xs-6">
                                <a href="{{url('/client')}}">عملاؤنا</a>
                            </li>
                            <li class="col-md-6 col-sm-6 col-xs-6">
                                <a href="{{url('page/5')}}">من نحن</a>
                            </li>
                            <li class="col-md-6 col-sm-6 col-xs-6">
                                <a href="{{url('/albums')}}">معرض الصور</a>
                            </li>
                            <li class="col-md-6 col-sm-6 col-xs-6">
                                <a href="{{url('/services')}}">خدماتنا</a>
                            </li>

                            <li class="col-md-6 col-sm-6 col-xs-6">
                                <a href="{{url('/news')}}">اخبارنا</a>
                            </li>

                            <li class="col-md-6 col-sm-6 col-xs-6">
                                <a href="{{url('/contact_us')}}">اتصل بنا</a>
                            </li>
                            <li class="col-md-6 col-sm-6 col-xs-6">
                                <a href="{{url('jobs')}}">الوظائف</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-social">
                        <a href="{{$setting->google_plus}}" class="fa fa-google-plus"></a>
                        <a href="{{$setting->youtube}}" class="fa fa-youtube"></a>
                        <a href="{{$setting->twitter}}" class="fa fa-twitter"></a>
                        <a href="{{$setting->facebook}}" class="fa fa-facebook"></a>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <p>جميع الحقوق محفوظة مدارس المستقبل  2016</p>
        </div>
    </div>

</footer>

</section>

<script src="{{asset('assets/front/assets/js/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('assets/front/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/front/assets/plugins/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/front/assets/plugins/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('assets/front/assets/js/scripts.0.0.1.js')}}"></script>
</body>
</html>
