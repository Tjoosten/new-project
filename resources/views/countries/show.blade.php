@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('img/world.png') }}" style="height:400px; width:100%;" class="img-rounded" alt="">
            </div>
        </div>

        <div class="row" style="padding-top: 15px;">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <img style="height: 15px; width:40px;" src="{{ asset('img/flags/' . strtolower($country->country_flag)) }}" alt="{{ $country->country_name }}">{{ $country->country_name }} - General information
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <dl class="dl-horizontal">
                                    <dt>Name:</dt> <dd>{{ $country->country_name }}</dd>
                                    <dt>Continent:</dt> <dd>{{ $country->continent->continent_name }}</dd>
                                </dl>
                            </div>

                            <div class="col-md-6">
                                <dl class="dl-horizontal">
                                    <dt>Cordinates north:</dt> <dd><code>{{ $country->north_num }}</code></dd>
                                    <dt>Cordinates south:</dt> <dd><code>{{ $country->south_num }}</code></dd>
                                    west
                                    east
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection