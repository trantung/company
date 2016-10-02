@extends('site.layout.home')

@section('title')
    {{ $title = trans('captions.home'); }}
@stop

@section('content')
	{{--@include('site.common.slide')--}}
	{{--@include('site.common.content_about')--}}
	{{--@include('site.common.introduce')--}}
	{{--@include('site.common.newsbox')--}}
	{{--@include('site.common.partner')--}}
	{{--@include('site.common.bottom')--}}

    @include('site.common.slide')
    @include('site.common.main')
@stop
