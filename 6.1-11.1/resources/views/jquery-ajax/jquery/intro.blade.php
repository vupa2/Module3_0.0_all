@extends('jquery-ajax.master')

@section('title', '[Bài tập] Trang web giới thiệu các hàm thông dụng của jQuery')

@section('content')
    <h5 class="text-center mt-2">[Bài tập] Trang web giới thiệu các hàm thông dụng của jQuery</h5>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">1. find()</div>
            <div class="card-body">
                <p class="card-text">Tìm element trong element cha.</p>
                <div>
                    <p><span>Hello</span>, how <span>are</span> you?</p>
                    <p>Me? I'm <span>good</span>.</p>
                    <div>Did you <span>eat</span> yet?</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">2. $(selector).hide(speed,callback) | 3. $(selector).show(speed,callback)</div>
            <div class="card-body">
                <p class="card-text">Ẩn hiện element.</p>
                <a id="show-me" class="btn-sm btn-primary btn" href="#">Show</a>
                <a id="hide-me" class="btn-sm btn-danger btn" href="#">Hide</a>
                <span id="show-me-span" class="card-text">Thay đổi style này</span>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">4. $(selector).toggle(speed,easing,callback)</div>
            <div class="card-body">
                <p class="card-text">Ẩn thay đổi giữa hide() và show().</p>
                <a id="toggle-me" class="btn-sm btn-success btn" href="#">Toggle</a>
                <span id="toggle-me-span" class="card-text">Thay đổi style này</span>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">5. $(selector).animate({styles},speed,easing,callback)</div>
            <div class="card-body">
                <p class="card-text">Thay đổi style của element.</p>
                <a id="animate-me-on" class="btn-sm btn-primary btn" href="#">Animate</a>
                <a id="animate-me-off" class="btn-sm btn-danger btn" href="#">Reset</a>
                <span id="animate-me-span" class="card-text">Thay đổi style này</span>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">6. $(selector).fadeIn(speed,easing,callback) | 7. $(selector).fadeOut(speed,easing,callback)</div>
            <div class="card-body">
                <p class="card-text">Thay đổi opacity từ trạng thái hidden show và ngược lại.</p>
                <a id="fadeOut-me" class="btn-sm btn-danger btn" href="#">Fade Out</a>
                <a id="fadeIn-me" class="btn-sm btn-primary btn" href="#">Fade In</a>
                <span id="fade-me-span" class="card-text">Thay đổi style này</span>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">8. $(selector).slideUp(speed,easing,callback) | 9. $(selector).slideDown(speed,easing,callback)</div>
            <div class="card-body">
                <p class="card-text">slideUp ẩn element, slideDown hiện element.</p>
                <a id="slideUp-me" class="btn-sm btn-danger btn" href="#">Slide Up</a>
                <a id="slideDown-me" class="btn-sm btn-primary btn" href="#">Slide Down</a>
                <span id="slide-me-span" class="card-text">Thay đổi style này</span>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">10.$(selector).html(content)</div>
            <div class="card-body">
                <p class="card-text">Thay đổi nội dung HTML.</p>
                <a id="html-me" class="btn-sm btn-info btn" href="#">HTML</a>
                <span id="html-me-span" class="card-text">Thay đổi style này</span>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">11. $(selector).append(content,function(index,html)) | 12. $(selector).prepend(content,function(index,html))</div>
            <div class="card-body">
                <p class="card-text">append element vào cuối, prepend element vào đầu.</p>
                <a id="append-me" class="btn-sm btn-danger btn" href="#">Append</a>
                <a id="prepend-me" class="btn-sm btn-primary btn" href="#">Prepend</a>
                <span id="append-me-span" class="card-text">Thay đổi style này</span>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">13. $(selector).on(event,childSelector,data,function,map) | 14. $(selector).off(event,selector,function(eventObj),map)</div>
            <div class="card-body">
                <p class="card-text">on thêm event, off xóa event.</p>
                <a id="on-me" class="btn-sm btn-danger btn" href="#">On</a>
                <a id="off-me" class="btn-sm btn-primary btn" href="#">Off</a>
                <a id="on-click-me" class="btn-sm btn-warning btn" href="#on-click-me">Cannot Click Me</a>
                <span id="on-me-span" class="card-text">Thay đổi style này</span>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">15. css("propertyname","value") | css({"propertyname":"value","propertyname":"value",...})</div>
            <div class="card-body">
                <p class="card-text">Thay đổi CSS</p>
                <a id="css-me" class="btn-sm btn-success btn" href="#">CSS</a>
                <span id="css-me-span" class="card-text">Thay đổi style này</span>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">16. $(selector).attr({attribute:value, attribute:value,...})</div>
            <div class="card-body">
                <p class="card-text">Thay đổi Attribute</p>
                <a id="attr-me" class="btn-sm btn-success btn" href="#">css</a>
                <span id="attr-me-span" class="card-text">Thay đổi style này</span>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">17. $(selector).val(value) | $(selector).val(function(index,currentvalue))</div>
            <div class="card-body">
                <p class="card-text">Chỉnh value của ô input</p>
                <a id="val-me" class="btn-sm btn-success btn" href="#">val</a>
                <input id="val-input" type="text">
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">18. $(selector).text(content) | $(selector).text(function(index,currentcontent))</div>
            <div class="card-body">
                <p class="card-text">Chỉnh text</p>
                <a id="text-me" class="btn-sm btn-success btn" href="#">text</a>
                <span id="text-me-span" class="card-text">Thay đổi style này</span>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">19. $(selector).each(function(index,element))</div>
            <div class="card-body">
                <p class="card-text">Dùng để thực hiện vòng lặp qua các element</p>
                <a id="each-me" class="btn-sm btn-success btn" href="#">each</a>
                <ul id="each-loop" class="list-group">
                    <li class="list-group-item"></li>
                    <li class="list-group-item"></li>
                    <li class="list-group-item"></li>
                </ul>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        // test
        $('.card-body').not(':last').hide();
        $('.card-header.fw-bold').click(function() {
            $(this).closest('.card').find('.card-body').slideToggle('fast');
        }).css('cursor', 'pointer');

        // find()
        $("div p").find("span").css("color", "red");

        // hide() & show()
        $("a#hide-me").click(function(event) {
            event.preventDefault();
            $("span#show-me-span").hide("fast");
        });
        $("a#show-me").click(function(event) {
            event.preventDefault();
            $("span#show-me-span").show("fast");
        });

        // toggle()
        $("a#toggle-me").click(function(event) {
            event.preventDefault();
            $("span#toggle-me-span").toggle('linear');
        });

        // animate()
        $("a#animate-me-on").click(function(event) {
            event.preventDefault();
            $("span#animate-me-span").animate({
                opacity: "0.2"
            }, 1000);
        });
        $("a#animate-me-off").click(function(event) {
            event.preventDefault();
            $("span#animate-me-span").animate({
                opacity: "1"
            }, 'slow');
        });

        // fadeIn() & fadeOut()
        $("a#fadeIn-me").click(function(event) {
            event.preventDefault();
            $("span#fade-me-span").fadeIn();
        });
        $("a#fadeOut-me").click(function(event) {
            event.preventDefault();
            $("span#fade-me-span").fadeOut();
        });

        // fadeIn() & fadeOut()
        $("a#slideUp-me").click(function(event) {
            event.preventDefault();
            $("span#slide-me-span").slideUp();
        });
        $("a#slideDown-me").click(function(event) {
            event.preventDefault();
            $("span#slide-me-span").slideDown();
        });

        // html()
        $("a#html-me").click(function(event) {
            event.preventDefault();
            var htmlContent = $("span#html-me-span").html() + ', <b>' + $("span#html-me-span").html() + '</b>';
            $("span#html-me-span").html(htmlContent);
        });

        // append() & prepend()
        $("a#append-me").click(function(event) {
            event.preventDefault();
            $("span#append-me-span").append('<b> Append</b>');
        });
        $("a#prepend-me").click(function(event) {
            event.preventDefault();
            $("span#append-me-span").prepend('<b>Prepend </b>');
        });

        // on() & off()
        function hideOnOff() {
            $("span#on-me-span").toggle('fast');
        };
        $("a#on-me").click(function(event) {
            event.preventDefault();
            $("a#on-click-me").on('click', hideOnOff).text('Click Me');
        });
        $("a#off-me").click(function(event) {
            event.preventDefault();
            $("a#on-click-me").off('click', hideOnOff).text('Cannot Click Me');
        });

        // css()
        $("a#css-me").click(function(event) {
            event.preventDefault();
            $("span#css-me-span").css('color', 'orange');
        });

        // attr()
        $("a#attr-me").click(function(event) {
            event.preventDefault();
            $("span#attr-me-span").attr('style', 'font-weight: bold; color: green;');
        });

        // val()
        $("a#val-me").click(function() {
            event.preventDefault();
            const value = $("input#val-input:text").val();
            $("input#val-input:text").val("Glenn Quagmire " + value);
        });

        // text()
        $("a#text-me").click(function(event) {
            event.preventDefault();
            const text = $("span#text-me-span").text();
            $("span#text-me-span").text("Glenn Quagmire " + text);
        });

        // each()
        $("a#each-me").click(function(event) {
            event.preventDefault();
            $("ul#each-loop li").each(function() {
                if ($(this).text() !== 'Show') $(this).text('Show');
                if (!$(this).hasClass('active')) $(this).addClass('active');
            })
        })

    </script>
@endpush
