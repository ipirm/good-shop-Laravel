<section id="works">
    <header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <h4>Прайси</h4>
    </header>
    <div class="container">
        <div id="works_all" class="row">
            @foreach($works as $item)
              <div class="col-md-4 col-sm-6 col-xs-12 wow zoomIn">
    <div class="work-block">
        <header><a href="#" data-toggle="modal" data-target="#{{$item->title_slug}}">
                <div class="big">{{$item->title }}</div>
                <div class="small">{{$item->subtitle}}</div>
            </a></header>
        <div class="content">
            <table class="table details">
                <tr>
                    <td><span class="icon-calendar-with-a-clock-time-tools"></span></td>
                    <td>-</td>
                    <td>{{$item->view }}</td>
                </tr>
                <tr>
                    <td><span class="icon-clipboard"></span></td>
                    <td>-</td>
                    <td>{{$item->area }}</td>
                </tr>
                <tr>
                    <td><span class="icon-signing-the-contract"></span></td>
                    <td>-</td>
                    <td>{{$item->file}}</td>
                </tr>
            </table>
            <div class="price">
                <a href="#" data-toggle="modal" data-target="#{{$item->title_slug}}{{$loop->iteration}}" class="ourBtn">
                    @if($item->price > 0)
                        <div class="cost">{{$item->price}}</div>
                        <div class="currency">грн</div>
                    @else
                        <div class="cost">договiрна</div>
                        <div class="currency" style="height: 35px"></div>
                    @endif
                </a>
            </div>
            <div class="text-center"><a href="#" data-toggle="modal"
                                        data-target="#{{$item->title_slug}}"
                                        class="btn btn-primary">Замовити</a></div>
        </div>
    </div>
</div>
<div id="{{$item->title_slug}}" tabindex="-1" role="dialog" class="modal fade">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-label="Закрити" class="close"><span
                            aria-hidden="true">&times;</span>
                </button>
                <button type="button" class="download"><span title="Зберегти перелiк"
                                                             class="icon-download"></span>
                </button>
                <h3 class="modal-title">{{$item->title}}</h3>
            </div>
            <div class="modal-body">
                <h3 class="text-center">{{$item->document_title}}</h3>
                {!! $item->document_body !!}
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-6 text-right">
                        <a href="tel:+380508742914">{{$item->document_number}}</a>
                    </div>
                    <div class="col-sm-6 text-left">
                        <a href="mailto:{{$item->document_mail}}">{{$item->document_mail}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="{{$item->title_slug}}{{$loop->iteration}}" tabindex="-1" role="dialog" class="modal fade">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-label="Закрити" class="close"><span aria-hidden="true">&times;</span>
                </button>
                <button type="button" class="download"><span title="Зберегти перелiк" class="icon-download"></span>
                </button>
                <h3 class="modal-title">{{ $item->price_header }}</h3>
            </div>
            <div class="modal-body">
                <h3 class="text-center">{{ $item->price_title }}</h3>
                <p>{!!  $item->price_text !!}</p>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-6 text-right"><a href="tel:+380508742914">{{$item->document_number}}</a></div>
                    <div class="col-sm-6 text-left"><a
                                href="mailto:{{$item->document_mail}}">{{$item->document_mail}}</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

            @endforeach
        </div>
        <div id="works_earth" class="row">
            @foreach($erths as $item)
                @include('default.card')
            @endforeach
        </div>
        <div id="works_geo" class="row">
            @foreach($geos as $item)
                @include('default.card')
            @endforeach
        </div>
        <div id="works_legal" class="row">
            @foreach($legals as $item)
                @include('default.card')
            @endforeach
        </div>
        <div id="works_services" class="row">
            @foreach($services as $item)
                @include('default.card')
            @endforeach
        </div>
        <div id="works_building" class="row">
            @foreach($buildings as $item)
                @include('default.card')
            @endforeach
        </div>
        <div id="works_design" class="row">
            @foreach($descs as $item)
                @include('default.card')
            @endforeach
        </div>
        <br><br>
        <center><p style="clear: both;">Зазначена у прайсах ціна є мінімальною. Вона залежить від багатьох факторів тому
                уточнюється індивідуально.</p>
            <p>Для учасників бойових дій - знижка 50%.</p></center>
    </div>
</section>
