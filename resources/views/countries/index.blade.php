@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('img/world.png') }}" style="height:400px; width:100%;" class="img-rounded" alt="">
            </div>
        </div>

        <div class="row" style="margin-top: 15px;">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div style="margin-top: -20px;" class="page-header">
                            <h2 style="margin-bottom: -5px;"> Countries <small> an small overview </small> </h2>
                        </div>

                        @if ((int) count($countries) === 0)
                            <div class="alert alert-info no-fade" role="alert">
                                There are no countries found in the system.
                            </div>
                        @else
                            <div class="table-responsive">
                                <table class="table table-striped table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name:</th>
                                            <th>Continent:</th>
                                            <th colspan="2">Currency:</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($countries as $country)
                                            <tr>
                                                <td><strong>#{{ $country->id }}</strong></td>
                                                <td><img style="height: 15px; width:25px;" src="{{ asset('img/flags/' . strtolower($country->country_flag)) }}" alt="{{ $country->country_name }}"> {{ $country->country_name }}</td>
                                                <td>{{ $country->continent->continent_code}}</td>
                                                <td>{{ $country->currency->currency_code }}</td>
                                                <td><a href="{{ route('country.show', $country) }}" class="label label-info">Bekijk</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{ $countries->render() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Menu:</div>

                    <div class="list-group">
                        <a class="list-group-item" href=""><span class="fa fa-search" aria-hidden="true"></span> Search country</a>
                        <a class="list-group-item" href=""><span class="fa fa-download" aria-hidden="true"></span> Download dataset</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection