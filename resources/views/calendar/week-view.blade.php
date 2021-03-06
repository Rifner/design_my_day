@extends( 'app.shell' )

@section( 'css' )
    <link href="{{ asset( 'css/calendar.css' ) }}" rel="stylesheet">
@endsection

@section( 'content' )
    <div id="calendar_display">
        <div id="calendar_body" class="row">
            <div class="col-md-offset-1 col-md-11">
                {{ $my_calendar->displayWeek( $selected_day ) }}
            </div>
        </div>
    </div>
@endsection

@section( 'footer' )
    <script type="text/javascript" src="{{ URL::asset( 'js/calendar/week.js' ) }}"></script>
@endsection
