<section id="services">
    <header>
        <h4>Послуги</h4>
    </header>
    <div class="container">
        <div class="teaser">{{$price->text}}</div>
        <div class="row">
            @foreach($cats as $item)
                <div class="col-md-4 col-sm-6 col-xs-6 wow zoomIn">
                    <div class="service-block">
                        <a href="#" data-target="#{{$item->target}}">
                            <span class="{{$item->class}}"></span>
                            <div class="name">{{ $item->title }}</div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
{{--@if($item->active === '1') active-target @endif--}}
