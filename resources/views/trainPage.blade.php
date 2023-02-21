<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container">
            <div class="row justify-content-center g-3">
                @foreach ($trains as $value)
                    <div class="col-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-around">
                                    <div>
                                        <h6>Company:</h6>
                                        <div>{{ $value['company'] }}</div>
                                    </div>
                                    <div>
                                        <h6>Codice:</h6>
                                        <div>{{ $value['train_code'] }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-around border-bottom pb-3">
                                    <div>
                                        <div class="mb-3">
                                            <h6>Da:</h6>
                                            <div>{{ $value['departure_station'] }}</div>
                                        </div>
                                        <div>
                                            <h6>Partenza:</h6>
                                            <div>{{ $value['departure_time'] }}</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mb-3">
                                            <h6>A:</h6>
                                            <div>{{ $value['arrival_station'] }}</div>
                                        </div>
                                        <div>
                                            <h6>Arrivo:</h6>
                                            <div>{{ $value['arrival_time'] }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-around border-bottom py-3">
                                    <h6 class="m-0">Num. vagoni:</h6>
                                    <div>{{ $value['coach_number'] }}</div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-around">
                                    <div>
                                        @if (!$value['on_time'])
                                            <h6>In ritardo</h6>
                                        @else
                                            <h6>In orario</h6>
                                        @endif
                                    </div>
                                    <div>
                                        @if ($value['cancelled'])
                                            <h6>Cancellato</h6>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>