@extends('layouts.templatelara')

@section('contenu')

@section('css')
@endsection

<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="m-auto content-page wide-md">
                    {{--<div class="mx-auto nk-block-head nk-block-head-lg wide-xs">
                        <div class="text-center nk-block-head-content">
                            <h2 class="nk-block-title fw-normal">{{$livre->titre}}</h2>
                            <div class="nk-block-des">
                                {{$livre->description_pub}}
                            </div>
                        </div>
                        <div class="nk-block-between">

                                        <a href="{{route('auteur.post')}}" class="btn btn-primary">Livres</a>
                            </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->--}}
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-xl">
                                <article class="entry">

                                <img src="{{asset('medias')}}/{{$livre->image}}" class="card-img-top" alt="..." width="100" height="400">

                                <h5 class="nk-block-title fw-normal">{{$livre->categories->name}}</h5><br>
                                <h3 class="nk-block-title fw-normal">{{$livre->titre}}</h3><br>
                                <p>{{$livre->auteur}}</p>
                                <div class="nk-block-des">
                                {{$livre->description_pub}}
                                </div>
                                {{$livre->created_at}}
                                </article><br><br><br><br>

                                <h3>Les commentaires</h3>

                                @foreach($comms as $comm)
                                    {{$comm->commente}}
                                @endforeach

                            </div>
                        </div><!-- .card -->
                        {{--<div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="card-title">Leave a Reply</h5>
                                </div>
                                <form action="#">
                                    <div class="form-group">
                                        <label class="form-label">Comment</label>
                                        <div class="form-control-wrap">
                                            <div class="summernote-basic">
                                                <p>Hello World!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="cf-full-name">Name</label>
                                        <input type="text" class="form-control" id="cf-full-name">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="cf-email-address">Email</label>
                                        <input type="text" class="form-control" id="cf-email-address">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Post Comment</button>
                                    </div>
                                </form>
                            </div>
                        </div>--}}
                    </div><!-- .nk-block -->
                </div><!-- .content-page -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->

@section('js')
@endsection

@endsection
