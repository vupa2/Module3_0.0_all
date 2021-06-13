@extends('jquery-ajax.master')

@section('title', '[Bài tập] Ứng dụng thông tin thời tiết')

@section('content')
    <h5 class="text-center mt-2">[Bài tập] Ứng dụng thông tin thời tiết</h5>

    <div class="container-fluid mt-2 text-center">
        <div class="card text-dark bg-light mb-2">
            <div class="card-header fw-bold">Live Weather Forecast</div>
            <div class="card-body bg-white">
                <div id="data-weather" class="container-fluid text-primary">
                    <h3 class="fw-bold">Location: <span id="city"></span>, <span id="country"></span></h3>
                    <h2 id="temp" class="d-inline-block"></h2>
                    <div id="icon" class="d-inline-block"></div>
                    <h4 id="status" class="text-capitalize"></h4>
                </div>

                <select id="get-city" class="form-select w-25 mx-auto my-3" aria-label="Default select example">
                    <option value="1581130" selected>Hanoi</option>
                    <option value="1814991">China</option>
                    <option value="2017370">Russia</option>
                    <option value="6269131">England</option>
                    <option value="5128638">New York</option>
                </select>
                <a id="get-weather" class="btn btn-success" href="#">Get Weather</a>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        function processReponse(response) {
            const city = response.name,
                country = response.sys.country,
                temp = response.main.temp,
                tempC = Math.round(response.main.temp) + " &#8451;",
                tempF = Math.round(temp * 9 / 5 + 32) + " &#8457;",
                status = response.weather[0].main + " / " + response.weather[0].description,
                icon = response.weather[0].icon,
                humidity = response.main.humidity + "%";

            $('#city').html(city);
            $('#country').html(country);
            $("#temp").html(tempC);
            $("#icon").html(`<img src="http://openweathermap.org/img/wn/${icon}@2x.png" alt="${icon}" />`);
            $("#status").html(`${status} / ${humidity} humidity`);
        }

        $(document).ready(function() {
            $('#data-weather').hide();

            $('#get-weather').on('click', function(e) {
                e.preventDefault();
                $('#data-weather').show();

                const request = $.ajax({
                    url: 'http://api.openweathermap.org/data/2.5/weather',
                    type: 'GET',
                    dataType: "jsonp",
                    data: {
                        appid: '830a4dd63287d9a6b60543f67019a83b',
                        lang: 'en',
                        units: 'metric',
                        id: $('#get-city').val(),
                    },
                    success: function(response) {
                        processReponse(response);
                    },
                    error: function(error) {
                        console.log(JSON.stringify(error));
                    }
                })
            });
        });

    </script>
@endpush
