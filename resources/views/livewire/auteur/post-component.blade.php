@if(Auth::user()->utype === 'ADM')
<!-- content @s -->
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="mx-auto components-preview wide-md">
                                <div class="nk-content-body">
                                    <div class="nk-block-head nk-block-head-sm">
                                        <div class="nk-block-between">
                                            <div class="nk-block-head-content">
                                                <h3 class="nk-block-title page-title">Livre </h3>

                                            </div><!-- .nk-block-head-content -->
                                            <div class="nk-block-head-content">
                                                <a href="{{route('auteurs.create')}}" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                                <a href="{{route('auteurs.create')}}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Ajouter livre</span></a>
                                            </div><!-- .nk-block-head-content -->
                                        </div><!-- .nk-block-between -->
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="card card-bordered card-preview">

                                            <div class="card-inner">
                                                <table class="table datatable-init-export nowrap" data-export-title="Export">
                                                    <thead>
                                                        <tr>
                                                            <th>N°</th>
                                                            <th>Titre</th>
                                                            <th>Categories</th>
                                                            <th>Date de création</th>
                                                            <th>Status</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($livre as $livres)
                                                            <tr>
                                                                <td>{{$loop->index + 1}}</td>
                                                                <td>{{$livres->titre}}</td>
                                                                <td>{{$livres->categories->name}}</td>
                                                                <td>{{$livres->created_at}}</td>
                                                                <td @if($livres->publie==0){ class="text-warning"} @else{ class="text-success"} @endif>{{$livres->publie ? 'Publié' : 'En attente'}}</td>
                                                                <td>
                                                                    <li>
                                                                        <div class="drodown">
                                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <ul class="link-list-opt no-bdr">
                                                                                    <li><a href="{{route('auteurs.show', $livres->titre)}}"><em class="icon ni ni-eye"></em><span>Voir</span></a></li>
                                                                                    @if(!$livres->publie)
                                                                                        <li><button wire:click="publiched({{$livres->id}})"><em class="icon ni ni-eye"></em><span>Publié</span></button></li>
                                                                                    @endif
                                                                                        <li><a href="{{route('auteurs.edit', $livres->titre)}}"><em class="icon ni ni-edit-fill"></em><span>Edit</span></a></li>
                                                                                    <li><form action="{{route('auteurs.destroy', $livres->titre) }}" method="post"
                                                                                        onsubmit="return confirm('Voulez-vous vraiment supprimer cet article ?');">

                                                                                        @csrf
                                                                                        @method('delete')
                                                                                        <button type="submit">
                                                                                            <em class="icon ni ni-trash-fill"></em><span>Trash</span>
                                                                                        </button>
                                                                                    </form></li>


                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div> <!-- nk-block -->

                                </div><!-- .components-preview -->
                            </div>
                        </div>
                    </div>
</div>
<!-- content @e -->
@else
<!-- content @s -->
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                        <div class="nk-block-between">
                                            <div class="nk-block-head-content">
                                                <h3 class="nk-block-title page-title">Posts </h3>

                                            </div><!-- .nk-block-head-content -->
                                            <div class="nk-block-head-content">
                                                <a href="{{route('auteurs.create')}}" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                                <a href="{{route('auteurs.create')}}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Post</span></a>
                                            </div><!-- .nk-block-head-content -->
                                        </div><!-- .nk-block-between -->
                                    </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        @foreach($livr as $livrs)
                                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner">
                                                    <div class="project">
                                                        <div class="project-head">
                                                            <a href="{{route('auteurs.show', $livrs->titre)}}" class="project-title">
                                                                <div class=""><span><img src="{{asset('medias')}}/{{$livrs->image}}" height="90" width="90"></span>&emsp;&emsp;&emsp;</div>
                                                                <div class="project-info">
                                                                    <h6 class="title">{{$livrs->titre}}</h6>
                                                                    <!--<span class="sub-text">Softnio</span>-->
                                                                </div>
                                                            </a>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="{{route('auteurs.show', $livrs->titre)}}"><em class="icon ni ni-eye"></em><span>Voir</span></a></li>
                                                                        <li><a href="{{route('auteurs.edit', $livrs->titre)}}"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                        <li>

                                                                            <form action="{{route('auteurs.destroy', $livrs->titre) }}" method="post"
                                                                                onsubmit="return confirm('Voulez-vous vraiment supprimer cet article ?');">

                                                                                @csrf
                                                                                @method('delete')
                                                                                <button type="submit">
                                                                                    <em class="icon ni ni-trash-fill"></em><span>Trash</span>
                                                                                </button>
                                                                            </form>



                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            {{$livrs->description_pub}}
                                                        </div>
                                                        <div class="project-progress">
                                                            <div class="project-progress-details">
                                                                <div class="project-progress-task"><span>{{$livrs->created_at}}</span></div>
                                                                <div class="project-progress-percent"></div>
                                                            </div>
                                                            <div class="">

                                                                <label for="">Status:</label>
                                                                <span @if($livrs->publie==0){ class="text-warning"} @else{ class="text-success"} @endif> {{$livrs->publie ? 'Validé' : 'En attente'}}</span>
                                                            </div>
                                                        </div>
                                                        {{--<div class="project-meta">
                                                            <ul class="project-users g-1">
                                                                <li>
                                                                    <div class="user-avatar sm bg-primary"><span>A</span></div>
                                                                </li>
                                                                <li>
                                                                    <div class="user-avatar sm bg-blue"><img src="./images/avatar/b-sm.jpg" alt=""></div>
                                                                </li>
                                                                <li>
                                                                    <div class="user-avatar bg-light sm"><span>+12</span></div>
                                                                </li>
                                                            </ul>
                                                            <span class="badge badge-dim bg-warning"><em class="icon ni ni-clock"></em><span>5 Days Left</span></span>
                                                        </div>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>

                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
</div>
<!-- content @e -->
@endif
