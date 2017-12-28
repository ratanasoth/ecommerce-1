@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header text-bold">
                <i class="fa fa-align-justify"></i> Create Product&nbsp;&nbsp;
                <a href="{{url('/admin/product')}}" class="btn btn-link btn-sm">
                    Back
                </a>
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
                    <form action="{{url('/admin/product/save')}}" class="form-horizontal" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="name" class="control-label col-sm-4">Product Name <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name" name="name" required value="{{old('name')}}">
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="category" class="control-label col-sm-4">Category <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <select name="category" id="category" class="form-control">
                                        @foreach($categories as $c)
                                            <option value="{{$c->id}}">{{$c->name}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label for="quantity" class="control-label col-sm-4">Quantity</label>
                                        <div class="col-sm-8">
                                            <input type="number" step="1" min="0" class="form-control" id="quantity" name="quantity" 
                                             value="0">
                                        </div>
                                    </div>
    
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label for="shop" class="control-label col-sm-4">Shop <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                           <select name="shop" id="shop" class="form-control">
                                               @foreach($shops as $s)
                                                <option value="{{$s->id}}">{{$s->name}}</option>
                                               @endforeach
                                           </select>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label for="min_price" class="control-label col-sm-4">Min Price</label>
                                        <div class="col-sm-8">
                                            <input type="number" step="0.1" min="0" class="form-control" id="min_price" name="min_price" 
                                             value="0">
                                        </div>
                                    </div>
    
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label for="discount" class="control-label col-sm-4">Discount (%)</label>
                                        <div class="col-sm-8">
                                           <input type="text" class="form-control" id="discount" value="0" name="discount">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label for="price" class="control-label col-sm-4">Price</label>
                                        <div class="col-sm-8">
                                            <input type="number" step="0.1" min="0" class="form-control" id="price" name="price" 
                                             value="0">
                                        </div>
                                    </div>
    
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label for="short_description" class="control-label col-sm-4">Short Description</label>
                                        <div class="col-sm-8">
                                           <input type="text" class="form-control" id="short_description" value="{{old('short_description')}}">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label for="max_price" class="control-label col-sm-4">Max Price</label>
                                        <div class="col-sm-8">
                                            <input type="number" step="0.1" min="0" class="form-control" id="max_price" name="max_price" 
                                             value="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label for="category" class="control-label col-sm-4">Description</label>
                                        <div class="col-sm-8">
                                           <textarea name="description" id="description" cols="30" rows="3" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection