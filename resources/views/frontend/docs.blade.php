@extends("layout")

@section("content")

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="section-title mt-2">
                <span>Документы</span>
                <h2>Документы</h2>
            </div>

           <div class="container">
               @if(count($document)>0)
                   @foreach($document as $k=>$item)
                   <div class="row mt-4 docs p-3">
                       <div class="col-md-2 col-sm-12 text-center docs-div-icon d-none d-sm-block" >
                           <i class="icofont-file-document docs-icon-left" ></i>
                       </div>
                       <div class="col-md-8 col-sm-12 d-flex justify-content-center align-items-center">
                           <h4 class="text-center docs-text-main" >{{$item["title"]}}</h4>
                       </div>
                       <div class="col-md-2 col-sm-12 text-center docs-div-icon">
                           <div class="row justify-content-center">
                               @foreach($item["links"] as $k => $item)
                               <a class="mr-3 text-dark" href="{{$item}}" download > <i style="color: {{$color = $k=="pdf"?"red":"blue"}}" class="icofont-file-{{$k}} docs-icon" ></i><br>Скачать</a>
                               @endforeach
                           </div>

                       </div>



                   </div>
                   @endforeach

               @else
                <div class="row mt-4 docs p-3">
              <div class="col-md-2 col-sm-12 text-center docs-div-icon d-none d-sm-block" >
                  <i class="icofont-file-document docs-icon-left" ></i>
              </div>
              <div class="col-md-8 col-sm-12 d-flex justify-content-center align-items-center">
                  <h4 class="text-center docs-text-main" >Типовой договор по заявке на ремонт</h4>
              </div>
               <div class="col-md-2 col-sm-12 text-center docs-div-icon">
                   <div class="row justify-content-center">
                       <a class="mr-3 text-dark" href="example.docx" download > <i style="color: blue" class="icofont-file-word docs-icon" ></i><br>Скачать</a>
                       <a class="text-dark" href="example.docx" download > <i style="color: red" class="icofont-file-pdf docs-icon" ></i><br>Скачать</a>
                   </div>

               </div>



           </div>
                <div class="row mt-4 docs p-3" >
              <div class="col-md-2 col-sm-12 text-center docs-div-icon d-none d-sm-block" >
                  <i class="icofont-file-document docs-icon-left" ></i>

              </div>
              <div class="col-md-8 col-sm-12 d-flex justify-content-center align-items-center">
                  <h4 class="text-center docs-text-main" >Гарантийное письмо</h4>
              </div>
               <div class="col-md-2 col-sm-12 text-center docs-div-icon">
                   <div class="row justify-content-center">
                       <a class="mr-3 text-dark" href="example.docx" download > <i style="color: blue" class="icofont-file-word docs-icon" ></i><br>Скачать</a>
                       <a class="text-dark" href="example.docx" download > <i style="color: red" class="icofont-file-pdf docs-icon" ></i><br>Скачать</a>
                   </div>
               </div>



           </div>
                <div class="row mt-4 docs p-3">
              <div class="col-md-2 col-sm-12 text-center docs-div-icon d-none d-sm-block" >
                  <i class="icofont-file-document docs-icon-left" ></i>

              </div>
              <div class="col-md-8 col-sm-12 d-flex justify-content-center align-items-center">
                  <h4 class="text-center docs-text-main" >Калькуляция</h4>
              </div>
               <div class="col-md-2 col-sm-12 text-center docs-div-icon">
                   <div class="row justify-content-center">
                       <a class="mr-3 text-dark" href="example.docx" download > <i style="color: blue" class="icofont-file-word docs-icon" ></i><br>Скачать</a>
                       <a class="text-dark" href="example.docx" download > <i style="color: red" class="icofont-file-pdf docs-icon" ></i><br>Скачать</a>
                   </div>
               </div>



           </div>
                @endif


           </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Cta Section ======= -->




@endsection
