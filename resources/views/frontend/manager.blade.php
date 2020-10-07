@extends("layout")

@section("content")


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="section-title mt-2">
                <span>Руководители</span>
                <h2>Руководители</h2>
{{--                <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>--}}
            </div>
            @if(count($manager)>0)
                <div class="owl-carousel testimonials-carousel ">
                @foreach($manager as $item)
                        <div class="member p-2 text-center ">
                            <img src="{{$item->img}}" alt="" style="width: 90%;height:294px;display: inline">
                            <h4 class="m-0">{{$item->name}}</h4>
                            <span>{{$item->role}}</span>
                            <p class="m-0">
                                {{$item->description}}
                            </p>
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                @endforeach
                </div>
            @else
                <div class="owl-carousel testimonials-carousel ">

                <div class="member p-2 text-center testimonial-item ">
                    <img src="assets/img/team/team-1.jpg" alt="">
                    <h4 class="m-0">Жаксыбай Адиль</h4>
                    <span>Директор</span>
                    <p class="m-0">
                        Великий русский поэт и прозаик,
                        а также талантливый художник и
                        драматург, произведения которого
                        оказали огромное влияние на писателей 19-20 веков.
                    </p>
                    <div class="social">
                        <a href=""><i class="icofont-twitter"></i></a>
                        <a href=""><i class="icofont-facebook"></i></a>
                        <a href=""><i class="icofont-instagram"></i></a>
                        <a href=""><i class="icofont-linkedin"></i></a>
                    </div>
                </div>

                <div class="member p-2 text-center testimonial-item ">
                    <img src="assets/img/team/team-2.jpg" alt="">
                    <h4 class="m-0">Жаксыбай Адиль</h4>
                    <span>Директор</span>
                    <p class="m-0">
                        Великий русский поэт и прозаик,
                        а также талантливый художник и
                        драматург, произведения которого
                        оказали огромное влияние на писателей 19-20 веков.
                    </p>
                    <div class="social">
                        <a href=""><i class="icofont-twitter"></i></a>
                        <a href=""><i class="icofont-facebook"></i></a>
                        <a href=""><i class="icofont-instagram"></i></a>
                        <a href=""><i class="icofont-linkedin"></i></a>
                    </div>
                </div>

                <div class="member p-2 text-center testimonial-item ">
                    <img src="assets/img/team/team-3.jpg" alt="">
                    <h4 class="m-0">Жаксыбай Адиль</h4>
                    <span>Директор</span>
                    <p class="m-0">
                        Великий русский поэт и прозаик,
                        а также талантливый художник и
                        драматург, произведения которого
                        оказали огромное влияние на писателей 19-20 веков.
                    </p>
                    <div class="social">
                        <a href=""><i class="icofont-twitter"></i></a>
                        <a href=""><i class="icofont-facebook"></i></a>
                        <a href=""><i class="icofont-instagram"></i></a>
                        <a href=""><i class="icofont-linkedin"></i></a>
                    </div>
                </div>

            </div>
            @endif


        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Cta Section ======= -->



@endsection
