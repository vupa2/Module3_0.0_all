@extends('jquery-ajax.master')

@section('title', '[Bài tập] Trang giới thiệu các hiệu ứng thông dụng của jQuery UI')

@section('content')
    <h5 class="text-center mt-2">[Bài tập] Trang giới thiệu các hiệu ứng thông dụng của jQuery UI</h5>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">1. $(selector).draggable() | 2. $(selector).droppable()</div>
            <div class="card-body">
                <p class="card-text">Có thể Drag Drop</p>
                <a id="drag-me" class="btn-sm btn-primary btn" href>Drag Me</a>
                <div id="drop-me" class="d-inline-block border border-dark border-3" style="width: 300px; height: 150px;">
                    <p>Drop here</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">3. $(selector).resizeable()</div>
            <div class="card-body">
                <p class="card-text">Có thể resize</p>
                <div id="resize-me" class="d-inline-block border border-dark border-3" style="width: 300px; height: 150px;">
                    <p>Resize here</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">4. $(selector).selectable()</div>
            <div class="card-body">
                <p class="card-text">Có thể select</p>
                <p id="selected-list"></p>
                <ul id="select-me" class="list-group">
                    <li class="list-group-item">Item 1</li>
                    <li class="list-group-item">Item 2</li>
                    <li class="list-group-item">Item 3</li>
                    <li class="list-group-item">Item 4</li>
                    <li class="list-group-item">Item 5</li>
                    <li class="list-group-item">Item 6</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">5. $(selector).sortable()</div>
            <div class="card-body">
                <p class="card-text">Có thể sort</p>
                <div class="d-flex">
                    <ul id="sort-me-1" class="list-group connectedSortable w-25 me-3">
                        <li class="list-group-item">Item 1</li>
                        <li class="list-group-item">Item 2</li>
                        <li class="list-group-item">Item 3</li>
                        <li class="list-group-item">Item 4</li>
                        <li class="list-group-item">Item 5</li>
                        <li class="list-group-item">Item 6</li>
                    </ul>
                    <ul id="sort-me-2" class="list-group connectedSortable w-25">
                        <li class="list-group-item">Second 1</li>
                        <li class="list-group-item">Second 2</li>
                        <li class="list-group-item">Second 3</li>
                        <li class="list-group-item">Second 4</li>
                        <li class="list-group-item">Second 5</li>
                        <li class="list-group-item">Second 6</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">6. $(selector).accordion()</div>
            <div class="card-body">
                <p class="card-text">Có thể accordion</p>
                <ul id="select-me" class="list-group">
                    <div id="accordion-me">
                        <h3>Section 1</h3>
                        <div>
                            <p>
                                Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                            </p>
                        </div>
                        <h3>Section 2</h3>
                        <div>
                            <p>
                                Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                suscipit faucibus urna.
                            </p>
                        </div>
                        <h3>Section 3</h3>
                        <div>
                            <p>
                                Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                                ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                                lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                            </p>
                            <ul>
                                <li>List item one</li>
                                <li>List item two</li>
                                <li>List item three</li>
                            </ul>
                        </div>
                        <h3>Section 4</h3>
                        <div>
                            <p>
                                Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                                et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                                faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                                mauris vel est.
                            </p>
                            <p>
                                Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                inceptos himenaeos.
                            </p>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">7. $(selector).datepicker()</div>
            <div class="card-body">
                <p class="card-text">Bảng chọn ngày tháng</p>
                <div id="datepicker-me" class="input-group w-25">
                    <span id="datepick-input" class="input-group-text">@</span>
                    <input class="form-control" type="text" placeholder="Date">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">8. $(selector).dialog()</div>
            <div class="card-body">
                <p class="card-text">Tạo Dialog</p>
                <div id="dialog-me" title="Basic dialog">
                    <p>This is an animated dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the &apos;x&apos; icon.</p>
                </div>
                <button id="opener-me" class="btn-sm btn-primary btn">Open Dialog</button>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">9. $(selector).slider()</div>
            <div class="card-body">
                <p class="card-text">Tạo Slider</p>
                <div class="w-50">
                    <div id="slider-me"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">10. $(selector).progressbar()</div>
            <div class="card-body">
                <p class="card-text">Tạo Progressbar</p>
                <div class="w-50">
                    <div id="progressbar-me"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">11. $(selector).spinner()</div>
            <div class="card-body">
                <p class="card-text">Tạo Spinner cho input</p>
                <div class="w-50">
                    <label for="spinner-me">Select a value:</label>
                    <input id="spinner-me" name="value">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">11. $(selector).spinner()</div>
            <div class="card-body">
                <p class="card-text">Tạo Spinner cho input</p>
                <div class="w-50">
                    <label for="spinner-me">Select a value:</label>
                    <input id="spinner-me" name="value">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">12. $(selector).tab()</div>
            <div class="card-body">
                <p class="card-text">Tạo Tabs</p>
                <div id="tabs-me">
                    <ul>
                        <li><a href="#tabs-1">Nunc tincidunt</a></li>
                        <li><a href="#tabs-2">Proin dolor</a></li>
                        <li><a href="#tabs-3">Aenean lacinia</a></li>
                    </ul>
                    <div id="tabs-1">
                        <p><strong>Click this tab again to close the content pane.</strong></p>
                        <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
                    </div>
                    <div id="tabs-2">
                        <p><strong>Click this tab again to close the content pane.</strong></p>
                        <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
                    </div>
                    <div id="tabs-3">
                        <p><strong>Click this tab again to close the content pane.</strong></p>
                        <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">13. $(selector).addClass() | 14. $(selector).removeClass()</div>
            <div class="card-body">
                <button id="change-class-me" class="btn btn-primary">Run Effect</button>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // test
        // $('.card-body').hide();
        $('.card-body').not(':last').hide();
        $('.card-header.fw-bold').click(function() {
            $(this).closest('.card').find('.card-body').slideToggle('fast');
        }).css('cursor', 'pointer');

        $("#drag-me").click(function(event) {
            event.preventDefault();
        });

        // draggable() & droppable()
        $("#drag-me").draggable({
            containment: $('#drag-me').closest('.card-body')
        });
        $('#drop-me').droppable({
            accept: '#drag-me',
            classes: {
                "ui-droppable-active": "bg-primary",
                "ui-droppable-hover": "bg-danger"
            },
            out: function(event, ui) {
                $(this).removeClass('bg-success').find("p").html("Drop here");
            },
            drop: function(event, ui) {
                $(this).addClass('bg-success').find("p").html("Dropped!");
            }
        });

        // resizable()
        $('#resize-me').resizable({
            containment: $('#resize-me').closest('.card-body')
        });

        // selectable()
        $('#select-me').selectable({
            classes: {
                "ui-selected": "bg-primary text-white"
            },
            stop: function() {
                const result = $("#selected-list").empty();
                $(".ui-selected", this).each(function() {
                    // const index = $("#select-me li").text(this);
                    const text = $(this).text();
                    result.append(" #" + (text));
                });
            }
        });

        // sortable()
        $("#sort-me-1, #sort-me-2").sortable({
            classes: {
                "ui-sortable-helper": "bg-primary text-white"
            },
            connectWith: ".connectedSortable"
        }).disableSelection();

        // accordion()
        $('#accordion-me').accordion({
            header: "h3",
            collapsible: true,
            active: false
        });

        // datepicker()
        $("#datepicker-me > input").datepicker({
            altField: "#alternate",
            altFormat: "DD, d MM, yy"
        });

        // dialog()
        $("#dialog-me").dialog({
            autoOpen: false,
            show: {
                effect: "blind",
                duration: 1000
            },
            hide: {
                effect: "explode",
                duration: 1000
            }
        });
        $("#opener-me").on("click", function() {
            $("#dialog-me").dialog("open");
        });

        // slider()
        $('#slider-me').slider();

        // progressbar()
        $('#progressbar-me').progressbar({
            value: 47,
        });

        // spinner()
        $('#spinner-me').spinner();

        // tabs()
        $('#tabs-me').tabs({
            collapsible: true
        });

        // addClass() & removeClass()
        $("#change-class-me").on("click", function(event) {
            event.preventDefault();
            $(this).removeClass("btn-primary", 1000, callbackAddClass);
        });

        function callbackAddClass() {
            setTimeout(function() {
                $("#change-class-me").addClass("btn-danger", 1000);
            }, 1500);
        }

    </script>
@endpush
