@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <select name="" id="country" class="form-control">
                            <option value="">A</option>
                            <option value="">B</option>
                            <option value="">C</option>
                            <option value="">D</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('bottom_js')
    <script>
        $( document ).ready(function() {
            $('#country').select2();
            console.log( "ready!" );
        });
    </script>
@endpush



