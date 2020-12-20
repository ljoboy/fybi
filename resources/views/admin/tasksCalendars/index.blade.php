@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('cruds.tasksCalendar.title') }}
        </div>

        <div class="card-body">
            <link rel="stylesheet" href="{{asset('css/fullcalendar.min.css')}}" />
            <div id="calendar"></div>

        </div>
    </div>



@endsection

@section('scripts')
    @parent
    <script src='{{asset('js/moment.min.js')}}'></script>
    <script src='{{asset('js/fullcalendar.min.js')}}'></script>
    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                events : [
                        @foreach($events as $event)
                        @if($event->due_date)
                    {
                        title : '{{ $event->name }}',
                        start : '{{ \Carbon\Carbon::createFromFormat(config('panel.date_format'),$event->due_date)->format('Y-m-d') }}',
                        url : '{{ url('admin/tasks').'/'.$event->id.'/edit' }}'
                    },
                    @endif
                    @endforeach
                ]
            })
        });
    </script>

@stop
