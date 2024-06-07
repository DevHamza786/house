@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Receipt</h2>
                </div>
                <div class="card-body">
                    <form method="GET" action="{{ route('home.receipt.print') }}">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value=""  autocomplete="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>
                            <div class="col-md-6">
                                <input id="date" type="text" class="form-control" name="date" value=""  autocomplete="date">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fee" class="col-md-4 col-form-label text-md-right">{{ __('Transfer Fee') }}</label>
                            <div class="col-md-6">
                                <input id="fee" type="text" class="form-control" name="fee" value=""  autocomplete="fee">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="reg" class="col-md-4 col-form-label text-md-right">{{ __('Reg') }}</label>
                            <div class="col-md-6">
                                <input id="reg" type="text" class="form-control" name="reg" value=""  autocomplete="reg">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="plot" class="col-md-4 col-form-label text-md-right">{{ __('Plot') }}</label>
                            <div class="col-md-6">
                                <input id="plot" type="text" class="form-control" name="plot" value=""  autocomplete="plot">
                            </div>
                        </div>
                        <!--<div class="form-group row">-->
                        <!--    <label for="allotment" class="col-md-4 col-form-label text-md-right">{{ __('ALLOTMENT S/C  Is Submitted In Office for TRANSFER') }}</label>-->
                        <!--    <div class="col-md-6">-->
                        <!--        <input id="allotment" type="text" class="form-control" name="allotment" value=""  autocomplete="allotment">-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="form-group row">
                            <label for="delivered" class="col-md-4 col-form-label text-md-right">{{ __('Delivered On') }}</label>
                            <div class="col-md-6">
                                <input id="delivered" type="text" class="form-control" name="delivered" value=""  autocomplete="delivered">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="development" class="col-md-4 col-form-label text-md-right">{{ __('Development charges') }}</label>
                            <div class="col-md-6">
                                <input id="development" type="text" class="form-control" name="development" value=""  autocomplete="development">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="maintanance" class="col-md-4 col-form-label text-md-right">{{ __('Maintanance charges') }}</label>
                            <div class="col-md-6">
                                <input id="maintanance" type="text" class="form-control" name="maintanance" value=""  autocomplete="maintanance">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="bounder_wall_charges" class="col-md-4 col-form-label text-md-right">{{ __('Bounder Wall charges') }}</label>
                            <div class="col-md-6">
                                <input id="bounder_wall_charges" type="text" class="form-control" name="bounder_wall_charges" value=""  autocomplete="bounder_wall_charges">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="total" class="col-md-4 col-form-label text-md-right">{{ __('Total') }}</label>
                            <div class="col-md-6">
                                <input id="total" type="text" class="form-control" name="total" value=""  autocomplete="total">
                            </div>
                        </div>
                        <!--<div class="form-group row">-->
                        <!--    <label for="sign" class="col-md-4 col-form-label text-md-right">{{ __('Authorised Sign') }}</label>-->
                        <!--    <div class="col-md-6">-->
                        <!--        <input id="sign" type="text" class="form-control" name="sign" value=""  autocomplete="sign">-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Print') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
