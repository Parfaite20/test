<!--start page content-->
<div class="page-content">

<!--start carousel-->
<section class="slider-section">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active bg-primary">
            <div class="row d-flex align-items-center">
              <div class="col d-none d-lg-flex justify-content-center">
                <div class="">
                  <h3 class="text-white h3 fw-light fw-bold">Bienvenue</h3>
                  <h1 class="text-white h1 fw-bold">Sur votre bibliotèque</h1>
                  <p class="text-white fw-bold"><i>Epanouissez vous avec la lecture</i></p>
                  <div class="">
                  </div>
                </div>
              </div>
              <div class="col">
                <img src="{{asset('lien/images/sliders/biblio3.jpg')}}" class="img-fluid" alt="...">
              </div>
            </div>
          </div>
          <div class="carousel-item bg-red">
            <div class="row d-flex align-items-center">
              <div class="col d-none d-lg-flex justify-content-center">
                <div class="">
                  <h3 class="text-white h3 fw-light fw-bold">Bienvenue</h3>
                  <h1 class="text-white h1 fw-bold">Sur votre bibliotèque</h1>
                  <p class="text-white fw-bold"><i>Epanouissez vous avec la lecture</i></p>
                  <div class="">
                  </div>
                </div>
              </div>
              <div class="col">
                <img src="{{asset('lien/images/sliders/biblio4.jpg')}}" class="img-fluid" alt="...">
              </div>
            </div>
          </div>
          <div class="carousel-item bg-purple">
            <div class="row d-flex align-items-center">
              <div class="col d-none d-lg-flex justify-content-center">
                <div class="">
                <h3 class="text-white h3 fw-light fw-bold">Bienvenue</h3>
                  <h1 class="text-white h1 fw-bold">Sur votre bibliotèque</h1>
                  <p class="text-white fw-bold"><i>Epanouissez vous avec la lecture</i></p>
                  <div class="">
                  </div>
                </div>
              </div>
              <div class="col">
                <img src="{{asset('lien/images/sliders/im4.jpg')}}" class="img-fluid" alt="...">
              </div>
            </div>
          </div>
          <div class="carousel-item bg-yellow">
            <div class="row d-flex align-items-center">
              <div class="col d-none d-lg-flex justify-content-center">
                <div class="">
                <h3 class="text-white h3 fw-light fw-bold">Bienvenue</h3>
                  <h1 class="text-white h1 fw-bold">Sur votre bibliotèque</h1>
                  <p class="text-white fw-bold"><i>Epanouissez vous avec la lecture</i></p>
                  <div class="">
                  </div>
                </div>
              </div>
              <div class="col">
                <img src="{{asset('lien/images/sliders/im5.jpg')}}" class="img-fluid" alt="...">
              </div>
            </div>
          </div>
          <div class="carousel-item bg-green">
            <div class="row d-flex align-items-center">
              <div class="col d-none d-lg-flex justify-content-center">
                <div class="">
                <h3 class="text-white h3 fw-light fw-bold">Bienvenue</h3>
                  <h1 class="text-white h1 fw-bold">Sur votre bibliotèque</h1>
                  <p class="text-white fw-bold"><i>Epanouissez vous avec la lecture</i></p>
                  <div class="">
                  </div>
                </div>
              </div>
              <div class="col">
                <img src="{{asset('lien/images/sliders/biblio8.jpg')}}" class="img-fluid" alt="...">
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section><br><br>
    <!--end carousel-->

   <!--start product grid-->
   <section class="section-padding">
    <h5 class="mb-0 fw-bold d-none">Product Grid</h5>
    <div class="container">
      <div class="btn btn-dark btn-ecomm d-xl-none position-fixed top-50 start-0 translate-middle-y"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarFilter"><span><i class="bi bi-funnel me-1"></i> Filters</span></div>
       <div class="row">
          <div class="col-12 col-xl-3 filter-column">
              <nav class="flex-wrap p-0 navbar navbar-expand-xl">
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbarFilter" aria-labelledby="offcanvasNavbarFilterLabel">
                  <div class="offcanvas-header">
                    <h5 class="mb-0 offcanvas-title fw-bold" id="offcanvasNavbarFilterLabel">Filters</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    <div class="filter-sidebar">
                      <div class="card rounded-0">
                        <div class="bg-transparent card-header d-none d-xl-block">
                            <h5 class="mb-0 fw-bold">Filters</h5>
                        </div>
                        <div class="card-body">
                          <h6 class="p-1 fw-bold bg-light">Categories({{count($categorie)}})</h6>
                            <div class="categories">
                             <div class="p-1 categories-wrapper height-1">
                             @foreach($categorie as $cate)
                                            <a href="{{route('blog.cate', ['categorie_nam'=>$cate->id])}}" class="list-group-item list-group-item-action">{{$cate->name}}</a>
										@endforeach


                             </div>
                          </div>



                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </nav>
          </div>
          <div class="col-12 col-xl-9">
            <div class="shop-right-sidebar">
              <div class="card rounded-0">
                <div class="p-2 card-body">
                  <div class="p-2 d-flex align-items-center justify-content-between bg-light">
                     <div class="product-count">657 Items Found</div>
                     <div class="gap-2 view-type hstack d-none d-xl-flex">
                        <p class="mb-0">Grid</p>
                        <div>
                          <a href="#" class="gap-1 grid-type-3 d-flex active">
                            <span></span>
                            <span></span>
                            <span></span>
                          </a>
                        </div>
                        <div>
                          <a href="#" class="gap-1 grid-type-3 d-flex">
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                          </a>
                        </div>
                     </div>
                     {{--<form>
                      <div class="input-group">
                        <span class="bg-transparent border-0 input-group-text rounded-0">Sort By</span>
                        <select class="form-select rounded-0" wire:model="sorting">
                          <option value="default">Whats'New</option>
                          <!--<option value="1">Popularity</option>
                          <option value="2">Better Discount</option>
                          <option value="3">Custom Rating</option>-->
                          <option value="date">Date</option>
                          <option value="price">Price : Hight to Low</option>
                          <option value="price-desc">Price : Low to Hight</option>
                        </select>
                      </div>
                    </form>--}}
                  </div>
                </div>
              </div>

              <div class="mt-4 product-grid">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
				          @foreach($li as $liv)
                  @if($liv->publie == 1)
                  <div class="col">
                    <div class="border shadow-none card">
                      <div class="overflow-hidden position-relative">
                        <div class="bottom-0 gap-2 mx-auto product-options d-flex align-items-center justify-content-center position-absolute start-0 end-0">
                          <a href="javascript:;"><i class="bi bi-heart"></i></a>
                          <a href="#" class="btn add-to-cart" ><i class="bi bi-basket3"></i></a>
                          <a href="javascript:;"><i class="bi bi-zoom-in"></i></a>
                        </div>
                        <a href="{{route('detail', ['livre_id'=>$liv->id])}}">
                          <img src="{{asset('medias')}}/{{$liv->image}}" class="card-img-top" alt="...">
                        </a>
                      </div>
                      <div class="card-body border-top">
                        <h5 class="mb-0 fw-bold product-short-title">{{$liv->titre}}</h5>

                        <div class="gap-2 mt-2 product-price d-flex align-items-center">
                          <!--<div class="h6 fw-bold">$458</div>-->
                          <div class="h6 fw-light text-muted ">{{$liv->auteur}}</div>
                          <!--<div class="h6 fw-bold text-danger">(70% off)</div>-->
                        </div>
                      </div>
                    </div>
                  </div>
                  @endif
				          @endforeach
              </div><!--end row-->

            </div>


            <div class="product-pagination">

              <nav>
                <ul class="pagination justify-content-center">
					         <li class="page-item"> {{$li->links()}}</li>
                  <!--<li class="page-item disabled">
                    <a class="page-link">Previous</a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="javascript:;">1</a></li>
                  <li class="page-item"><a class="page-link" href="javascript:;">2</a></li>
                  <li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:;">Next</a>
                  </li>-->
                </ul>
              </nav>
            </div>

            </div>
          </div>
       </div><!--end row-->


    </div>
  </section>
   <!--start product details-->
</div>
<!--end page content-->
