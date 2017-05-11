@extends('admin.layout.main')
@section("page-content")
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet box purple">
                <div class="portlet-title" style="background-color: #3598dc">
                    <div class="caption">
                        <i class="fa fa-gift"></i>contact Create
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse">
                        </a>
                        <a href="#portlet-config" data-toggle="modal" class="config">
                        </a>
                        <a href="javascript:;" class="reload">
                        </a>
                        <a href="javascript:;" class="remove">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form  action="{{ route('contact.create') }}" method="post" id="form_sample_1" class="form-horizontal">

                        {{csrf_field()}}
                        <div class="form-body">

                            <div class="form-group">
                                <label class="control-label col-md-3">Name <span class="required">
										* </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" name="name" data-required="1" class="form-control" />
                                    @if (asset($errors->first('name')))
                                        <p class="help-block">{!! $errors->first('name') !!}</p>
                                    @endif
                                </div>
                            </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3"> Company<span class="required">
										* </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="company" data-required="1" class="form-control" />
                                        @if (asset($errors->first('company')))
                                            <p class="help-block">{!! $errors->first('company') !!}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Email <span class="required">
										* </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="email" name="email" data-required="1" class="form-control"/>
                                        @if (asset($errors->first('emai')))
                                            <p class="help-block">{!! $errors->first('email') !!}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Phone <span class="required">
										* </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="phone" data-required="1" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Address <span class="required">
										* </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="address" data-required="1" class="form-control" address/>
                                    </div>
                                </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Groups
                                </label>
                                <div class="col-md-4">
                                    <select class="form-control" name="group_id">
                                        @foreach(App\Group::all() as $value )
                                            <option value="{{$value->id}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">Thêm Mơi</button>
                                    <a href="{{ route("contact.table") }}" class="btn default">Quay Lại</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>

@stop