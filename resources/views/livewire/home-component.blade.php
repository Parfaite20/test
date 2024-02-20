
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
                  <h3 class="h3 fw-light text-white fw-bold">Bienvenue</h3>
                  <h1 class="h1 text-white fw-bold">Sur votre bibliotèque</h1>
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
                  <h3 class="h3 fw-light text-white fw-bold">Bienvenue</h3>
                  <h1 class="h1 text-white fw-bold">Sur votre bibliotèque</h1>
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
                <h3 class="h3 fw-light text-white fw-bold">Bienvenue</h3>
                  <h1 class="h1 text-white fw-bold">Sur votre bibliotèque</h1>
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
                <h3 class="h3 fw-light text-white fw-bold">Bienvenue</h3>
                  <h1 class="h1 text-white fw-bold">Sur votre bibliotèque</h1>
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
                <h3 class="h3 fw-light text-white fw-bold">Bienvenue</h3>
                  <h1 class="h1 text-white fw-bold">Sur votre bibliotèque</h1>
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

    <!--start Featured Products slider-->
    <section class="section-padding">
      <div class="container">
        <div class="text-center pb-3">
          <h3 class="mb-0 h3 fw-bold">Nous vous recommandons</h3>
          <p class="mb-0 text-capitalize">Plus de 100 millions de personnes lisent ici</p>
        </div>
        <div class="product-thumbs">
          @foreach($livre as $livres)
          @if($livres->publie == 1)
          <div class="card">
            <div class="position-relative overflow-hidden">
              <div
                class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                <a href="javascript:;"><i class="bi bi-heart"></i></a>
                <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                    class="bi bi-zoom-in"></i></a>
              </div>
              <a href="{{route('detail', ['livre_id'=>$livres->id])}}">
                <img src="{{asset('medias')}}/{{$livres->image}}" class="card-img-top" alt="...">
              </a>
            </div>
            <div class="card-body">
              <div class="product-info text-center">
                <h6 class="mb-1 fw-bold product-name">{{$livres->titre}}</h6>
                <div class="ratings mb-1 h6">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </div>
                <p class="mb-0 h6 fw-bold product-price">{{$livres->auteur}}</p>
              </div>
            </div>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </section>
    <!--end Featured Products slider-->

  </div>
  <!--end page content-->