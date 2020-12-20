@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Dashboard
                    </div>

                    <div class="card-body">
                        @if(session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="{{ $settings1['column_class'] }}">
                                <div class="card text-white bg-primary">
                                    <div class="card-body pb-0">
                                        <div class="text-value">{{ number_format($settings1['total_number']) }}</div>
                                        <div>{{ $settings1['chart_title'] }}</div>
                                        <br />
                                    </div>
                                </div>
                            </div>
                            <div class="{{ $settings2['column_class'] }}">
                                <div class="card text-white bg-primary">
                                    <div class="card-body pb-0">
                                        <div class="text-value">{{ number_format($settings2['total_number']) }}</div>
                                        <div>{{ $settings2['chart_title'] }}</div>
                                        <br />
                                    </div>
                                </div>
                            </div>
                            <div class="{{ $settings3['column_class'] }}">
                                <div class="card text-white bg-primary">
                                    <div class="card-body pb-0">
                                        <div class="text-value">{{ number_format($settings3['total_number']) }}</div>
                                        <div>{{ $settings3['chart_title'] }}</div>
                                        <br />
                                    </div>
                                </div>
                            </div>
                            <div class="{{ $settings4['column_class'] }}">
                                <div class="card text-white bg-primary">
                                    <div class="card-body pb-0">
                                        <div class="text-value">{{ number_format($settings4['total_number']) }}</div>
                                        <div>{{ $settings4['chart_title'] }}</div>
                                        <br />
                                    </div>
                                </div>
                            </div>
                            <div class="{{ $chart5->options['column_class'] }}">
                                <h3>{!! $chart5->options['chart_title'] !!}</h3>
                                {!! $chart5->renderHtml() !!}
                            </div>
                            <div class="{{ $chart6->options['column_class'] }}">
                                <h3>{!! $chart6->options['chart_title'] !!}</h3>
                                {!! $chart6->renderHtml() !!}
                            </div>
                            <div class="{{ $chart7->options['column_class'] }}">
                                <h3>{!! $chart7->options['chart_title'] !!}</h3>
                                {!! $chart7->renderHtml() !!}
                            </div>
                            <div class="{{ $chart8->options['column_class'] }}">
                                <h3>{!! $chart8->options['chart_title'] !!}</h3>
                                {!! $chart8->renderHtml() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script src="{{asset('js/Chart.min.js')}}"></script>{!! $chart5->renderJs() !!}{!! $chart6->renderJs() !!}{!! $chart7->renderJs() !!}{!! $chart8->renderJs() !!}
@endsection
