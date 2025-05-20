@extends('layouts.default')

@section('content')
    @if (Auth::check())
        <div class="row tw-mt-10">
            <div class="col-md-8">
                <section class="status_form">
                    @include('shared._status_form')
                </section>
                <h4 class="tw-text-4xl tw-mb-5">
                    📝 动态列表
                </h4>
                <hr>
                @include('shared._feed')
            </div>
            <aside class="col-md-4">
                <section class="user_info">
                    @include('shared._user_info', ['user' => Auth::user()])
                </section>
                <section class="stats mt-2">
                    @include('shared._stats', ['user' => Auth::user()])
                </section>
                <section class="tw-h-96 tw-w-full tw-mt-5 tw-border tw-border-gray-600 tw-rounded-3xl tw-shadow-2xl">
                    <div class="tw-p-5 tw-text-center">
                        <h4 class="tw-text-2xl">广告位招租</h4>
                        <p class="tw-mt-5">这里是一个广告位，欢迎联系我！</p>
                        <p class="tw-mt-5">QQ: 123456789</p>
                        <p class="tw-mt-5">微信: lu_stormstout</p>
                    </div>
                </section>
            </aside>
        </div>
    @else
        <div class="bg-light p-3 p-sm-5 rounded">
            <h1 class="tw-text-5xl">Hi 👋</h1>
            <p class="lead tw-mt-5">
                欢迎访问 <b>Lu Stormstout.</b>
            </p>
            <p class="tw-mt-10">
                <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
            </p>
        </div>
    @endif
@stop
