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
                        <label for="country">Select Country </label>
                        <select name="" id="country" class="form-control" placeholder="select country">
                            <option value="">A</option>
                            <option value="">B</option>
                            <option value="">C</option>
                            <option value="">D</option>
                        </select>
                    </div>
                     <div class="form-group">
                         <label for="image">Image</label>
                         <div class="row">
                             <div class="col-md-4">
                                <input type="file">
                             </div>
                             <div class="col-md-8">
                                <img src="{{asset('assets/images/logo_default.png')}}" alt="" style="width: 75px; height: 75px;">
                             </div>
                         </div>
                     </div>
                </form>
                <button class="btn btn-primary" onclick="t()">click me</button>
            </div>
        </div>
    </div>
@endsection

@push('bottom_js')
    <script>
        $(document).ready(function(){
            $('#country').select2();
        });
        function t(){
            $.ajax({
                type: 'get',
                url: "{{ url('toast')}}",
                data: '',
                success: function (response) {
                    toastr.info('Are you the 6 fingered man?');
                },
                error: function (xhr) {
                    alert("Something Wnt Wrong");
                    //Do Something to handle error
                }
            });
        
            
        }
    </script>
@endpush



