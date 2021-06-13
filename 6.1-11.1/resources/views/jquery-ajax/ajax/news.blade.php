@extends('jquery-ajax.master')

@section('title', '[Bài tập] Ứng dụng tổng hợp tin tức')

@section('content')
    <h5 class="text-center mt-2">[Bài tập] Ứng dụng tổng hợp tin tức</h5>

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
            console.log(response);
        }

        $(document).ready(function() {
            const request = $.ajax({
                url: 'https://rss.art19.com/apology-line',
                // type: 'GET',
                // headers: {
                //     'Access-Control-Allow-Origin': '*',
                //     'Access-Control-Allow-Methods': 'GET, POST, PATCH, PUT, DELETE, OPTIONS',
                //     "Access-Control-Allow-Headers": 'Origin, Content-Type, X-Auth-Token'
                // },
                // crossDomain: true,
                dataType: 'xml',
                contentType: 'application/xml',
                success: function(response) {
                    processReponse(response);
                },
                error: function(error) {
                    console.log("An error occurred while processing XML file");
                    console.log("XML reading Failed: ", error);
                }
            });

        });

    </script>
@endpush
