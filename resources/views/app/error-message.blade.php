<div class="row">
    <div class="col-md-12">
        @if( Session::has( 'success' ) )
            <div class="alert alert-success">{{ Session::get( 'success' ) }}</div>
        @elseif( Session::has( 'failure' ) )
            <div class="alert alert-danger">{{ Session::get( 'failure' ) }}</div>
        @endif
    </div>
</div>
