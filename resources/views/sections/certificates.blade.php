<section id="certificates">
    <header>
        <h4>Сертифікати</h4>
    </header>
    <div class="container">
        <div class="wrapper">
            <div style="padding-top: 20px;">
                <p style="text-align: justify;">{!! $cetificate->text_first !!}</p>
                <div class="myFlex">
                    @foreach(json_decode($cetificate->images_first) as $item)
                        <div class="col-md-3  thumb mobCert">
                            <a class="thumbnail" href="#" data-image-id="{{$loop->iteration}}"
                               data-toggle="modal" data-title="Сертифікат {{$loop->iteration}}"
                               data-image="{{ $item->url }}"
                               data-target="#image-gallery">
                                <img class="img-responsive" src="{{ $item->url }}" alt="Short alt text">
                            </a>
                        </div>
                    @endforeach
                </div>
                <p style="text-align: justify; clear: both;">{!! $cetificate->text_second !!}</p>
                <div class="myFlex">
                    @foreach(json_decode($cetificate->images_second) as $item)
                        <div class="col-md-3 thumb mobCert">
                            <a
                                    class="thumbnail"
                                    href="#" data-image-id="{{$loop->iteration}}"
                                    data-toggle="modal"
                                    data-title="Сертифікат {{$loop->iteration}}"
                                    data-image="{{ $item->url }}"
                                    data-target="#image-gallery">
                                <img class="img-responsive" src="{{ $item->url }}" alt="Short alt text">
                            </a>
                        </div>
                    @endforeach
                </div>
                <p style="text-align: justify; clear: both;">{!! $cetificate->text_third !!}</p>
                <div class="myFlex">
                    @foreach(json_decode($cetificate->images_third) as $item)
                        <div class="col-md-3 thumb mobCert">
                            <a
                                    class="thumbnail"
                                    href="#" data-image-id="{{$loop->iteration}}"
                                    data-toggle="modal"
                                    data-title="Сертифікат {{$loop->iteration}}"
                                    data-image="{{ $item->url }}"
                                    data-target="#image-gallery">
                                <img class="img-responsive" src="{{ $item->url }}" alt="Short alt text">
                            </a>
                        </div>
                    @endforeach
                    <p style="font-size: 26px; text-align: justify; clear: both; color: {{ $cetificate->color_text }};">{{ $cetificate->text_fourth }}</p>
                    <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog"
                         aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span
                                                aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="image-gallery-title"></h4>
                                </div>
                                <div class="modal-body">
                                    <img id="image-gallery-image" class="img-responsive" src="">
                                </div>
                                <div class="modal-footer">
                                    <h4 id="image-gallery-caption"></h4>
                                    <button type="button" class="modal-control previous" id="show-previous-image"><
                                    </button>
                                    <button type="button" class="modal-control next" id="show-next-image">></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
