@include('default.head')
<body>
@include('default.header')
<section id="home">
    <div class="container"><span class="icon-logo animated zoomIn"><span class="path1"></span><span
                    class="path2"></span><span class="path3"></span></span>
        <h1 class="animated bounceInRight">{{$main->title }}</h1>
        <h2 class="animated bounceInLeft">{{$main->location }}</h2>
        <h3 class="animated bounceInLeft">{{$main->subtitle }}</h3>
        <div class="contacts animated fadeInUp"><span class="phone">{{$main->number }}</span><a
                    href="mailto:{{$main->mail }}" class="email">{{$main->mail }}</a></div>
    </div>
</section>
@include('sections.services')
@include('sections.work')
<!-- Нова секція -->
@include('sections.certificates')
<!-- Нова секція -->
@include('sections.contacts')
<footer>
    <p class="studio">© 2016 ТОВ "Виробничий центр ДЗК"</p>
</footer>
@include('default.modals')
<div id="contact_confirm" tabindex="-1" role="dialog" class="modal fade">
    <div role="document" class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h3>Ваше повiдомлення вiдправлено.</h3><br><a href="#" data-dismiss="modal" class="btn btn-primary">Закрити</a>
            </div>
        </div>
    </div>
</div>
@include('default.footer')
</body>
</html>
