@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-bold">
                    <i class="fa fa-align-justify"></i> Edit Subscription&nbsp;&nbsp;
                    <a href="{{url('/subscription')}}" class="btn btn-link btn-sm">Back To List</a>
                </div>
                <div class="card-block">
                    @if(Session::has('sms'))
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div>
                                {{session('sms')}}
                            </div>
                        </div>
                    @endif
                    @if(Session::has('sms1'))
                        <div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div>
                                {{session('sms1')}}
                            </div>
                        </div>
                    @endif
                    <form action="{{url('/subscription/update')}}" class="form-horizontal" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="id" id="id" value="{{$subscription->id}}">
                        <div class="form-group row">
                            <label for="shop_owner_id" class="control-label col-lg-2 col-sm-2">Shop Owner ID</label>
                            <div class="col-lg-4 col-sm-8">
                                <input type="text" name="shop_owner_id" id="shop_owner_id" required autofocus class="form-control" value="{{$subscription->shop_owner_id}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="package_id" class="control-label col-lg-2 col-sm-2">Package ID</label>
                            <div class="col-lg-4 col-sm-8">
                                <input type="text" name="package_id" id="package_id" required autofocus class="form-control" value="{{$subscription->package_id}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="control-label col-lg-2 col-sm-2">Price</label>
                            <div class="col-lg-4 col-sm-8">
                                <input type="text" name="price" id="price" required class="form-control" value="{{$subscription->price}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="day" class="control-label col-lg-2 col-sm-2">Number of Day</label>
                            <div class="col-lg-4 col-sm-8">
                                <input type="text" name="day" id="day" required class="form-control" value="{{$subscription->day_number}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="product_number" class="control-label col-lg-2 col-sm-2">Product Number</label>
                            <div class="col-lg-4 col-sm-8">
                                <input type="text" name="product_number" id="product_number" required class="form-control" value="{{$subscription->product_number}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="expired_date" class="control-label col-lg-2 col-sm-2">Expired Date</label>
                            <div class="col-lg-4 col-sm-8">
                                <input type="text" name="expired_date" id="expired_date" required class="form-control" value="{{$subscription->expired_date}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-lg-2 col-sm-2">&nbsp;</label>
                            <div class="col-lg-6 col-sm-8">
                                <button class="btn btn-primary" type="submit">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        CKEDITOR.replace( 'description',
            {
                customConfig : 'config.js',
                toolbar : 'simple'
            })
        $(document).ready(function(){
            $("#expired_date").inputmask('9999-99-99');
        });
    </script>
    <script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
@endsection