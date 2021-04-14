@extends('layouts.main', ['title' =>   __('main_layout.website_name') . " | $country->name"])

@section('extra-css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
@stop

@section('content')
    <h1 class="country-title text-center">{{ $country->name }}</h1>
    <div class="text-right">
        <div class="dropdown pr-3" id="filter-options-dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="filter-options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-filter"></i>
          </button>
          <div class="dropdown-menu" aria-labelledby="filter-options">
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 col-xl-3">
            <div class="row">
                <div class="col-12">
                    @asyncWidget('App\Widgets\JoshuaProject\JoshuaProjectWidget', [], $country)
                </div>
                <div class="col-12">
                    @asyncWidget('App\Widgets\TopSocialPlatforms\TopSocialPlatformsWidget', [], $country)
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-9">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-4">
                    @asyncWidget('App\Widgets\Maps\MapsWidget', [], $country)
                </div>
                <div class="col-12 col-lg-6 col-xl-4">
                    @asyncWidget('App\Widgets\Population\PopulationWidget', [], $country)
                </div>
                <div class="col-12 col-lg-6 col-xl-4">
                    @asyncWidget('App\Widgets\UrbanPopulation\UrbanPopulationWidget', [], $country)
                </div>
                <div class="col-12 col-lg-6 col-xl-4">
                    @asyncWidget('App\Widgets\InternetUsage\InternetUsageWidget', [], $country)
                </div>
                <div class="col-12 col-lg-6 col-xl-4">
                    @asyncWidget('App\Widgets\MobileSubscriptions\MobileSubscriptionsWidget', [], $country)
                </div>
                <div class="col-12 col-lg-6 col-xl-4">
                    @asyncWidget('App\Widgets\BroadbandSubscriptions\BroadbandSubscriptionsWidget', [], $country)
                </div>
				<div class="col-12 col-lg-6 col-xl-4">
                    @asyncWidget('App\Widgets\Literacy\LiteracyWidget', [], $country)
                </div>
            </div>
        </div>
    </div>
@stop

@section('extra-js')
    <script type="text/javascript" src="{{ asset('js/filter-widgets.js') }}"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
@stop
