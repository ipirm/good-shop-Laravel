<section id="contacts">
    <header>
        <h4>Контакти</h4>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h5>Загальні контакти</h5>
                <table class="table">
                    <tr>
                        <td><span class="icon-telephone-call"></span></td>
                        <td>-</td>
                        <td>{{$main->number  }}</td>
                    </tr>
                    <tr>
                        <td><span class="icon-at"></span></td>
                        <td>-</td>
                        <td><a href="mailto:{{$main->mail}}">{{$main->mail  }}</a></td>
                    </tr>
                    <tr>
                        <td><span class="icon-email"></span></td>
                        <td>-</td>
                        <td>{{$main->address}}</td>
                    </tr>
                    <tr>
                        <td><span class="icon-internet"></span></td>
                        <td>-</td>
                        <td><a href="http://{{$main->site}}">{{$main->site}}</a></td>
                    </tr>
                </table>
                <h5>Графiк роботи</h5>
                <table class="table" style="width: 80%;">
                    <tr>
                        <td><span class="icon-weekly-calendar"></span></td>
                        <td>-</td>
                        <td>{{$main->schedule }}</td>
                    </tr>
                </table>
                <h5>Наші філії</h5>
                <div data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97267.85754528768!2d30.57101217562148!3d50.16102399338428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xee286962a0725ffa!2z0KLQntCSICLQktC40YDQvtCx0L3QuNGH0LjQuSDRhtC10L3RgtGAINCU0JfQmiI!5e0!3m2!1suk!2sua!4v1578059073360!5m2!1suk!2sua"
                     class="affiliate"><span class="icon-cityscape"></span><a href="#" class="location"><span
                                class="address">м. <span class="big">Обухiв</span>, <br> вул. Малишка, 5б, оф. 25</span></a><a
                            href="#" class="location"><span class="icon-placeholder"></span></a><span class="phone">(073) 091-95-80</span>
                </div>
                <div data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244382.44623731324!2d30.78407598908474!3d50.30075996811169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5de79db2b1dbbb62!2z0KLQntCSICLQktC40YDQvtCx0L3QuNGH0LjQuSDRhtC10L3RgtGAINCU0JfQmiI!5e0!3m2!1suk!2sua!4v1578059230032!5m2!1suk!2sua"
                     class="affiliate"><span class="icon-cityscape"></span><a href="#" class="location"><span
                                class="address">м. <span class="big">Бориспiль</span>, <br> вул. Київський шлях, 14а, оф. 15б</span></a><a
                            href="#" class="location"><span class="icon-placeholder"></span></a><span class="phone">(073) 091-95-81</span>
                </div>
                <div data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1563.8641228912836!2d30.318770667292263!3d50.175686684631955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe66343b775d41074!2z0KLQntCSICLQktC40YDQvtCx0L3QuNGH0LjQuSDRhtC10L3RgtGAINCU0JfQmiI!5e0!3m2!1suk!2sua!4v1578059334867!5m2!1suk!2sua"
                     class="affiliate"><span class="icon-cityscape"></span><a href="#" class="location"><span
                                class="address">м. <span class="big">Васильків</span>, <br> вул. Володимирська, 1, оф. 416</span></a><a
                            href="#" class="location"><span class="icon-placeholder"></span></a><span class="phone">(073) 091-95-82</span>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97267.85754528768!2d30.57101217562148!3d50.16102399338428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xee286962a0725ffa!2z0KLQntCSICLQktC40YDQvtCx0L3QuNGH0LjQuSDRhtC10L3RgtGAINCU0JfQmiI!5e0!3m2!1suk!2sua!4v1578059073360!5m2!1suk!2sua"
                            frameborder="0" style="border:0; width: 100%; height: 100%" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <form method="post" action="/" id="contact__form">
            @csrf
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h5>Зворотнiй зв'язок</h5>
                    <div class="form-group">
                        <label for="contact_name">Ім'я</label>
                        <input id="contact_name" type="text" name="contact_name" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="contact_email">Електронна пошта</label>
                        <input id="contact_email" type="email" name="contact_email" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="contact_phone">Телефон</label>
                        <input id="contact_phone" type="text" name="contact_phone" required class="form-control">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="contact_text">Текст повідомлення</label>
                        <textarea id="contact_text" name="contact_text" required class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary send-ajax">Вiдправити</button>
        </form>
    </div>
</section>
