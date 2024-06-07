@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>New Entry</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('create') }}">
                        @csrf

                        <div class="form-group row">

                            <label for="plot" class="col-md-1 col-form-label text-md-right">{{ __('Plot#') }}</label>
                            <div class="col-md-1">
                                <input id="plot" type="text" class="form-control @error('plot') is-invalid @enderror" name="plot" value="{{ old('plot') }}"  autocomplete="plot" autofocus>

                                @error('plot')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="serial" class="col-md-1 col-form-label text-md-right">{{ __('S/#') }}</label>
                            <div class="col-md-1">
                                <input id="serial" type="text" class="form-control @error('serial') is-invalid @enderror" name="serial" value="{{ old('serial') }}"  autocomplete="serial" autofocus>

                                @error('serial')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="area" class="col-md-1 col-form-label text-md-right">{{ __('A/#') }}</label>
                            <div class="col-md-1">
                                <input id="area" type="text" class="form-control @error('area') is-invalid @enderror" name="area" value="{{ old('area') }}"  autocomplete="area" autofocus>

                                @error('area')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="dp" class="col-md-1 col-form-label text-md-right">{{ __('D/P') }}</label>
                            <div class="col-md-1">
                                <input id="dp" type="text" class="form-control @error('dp') is-invalid @enderror" name="dp" value="{{ old('dp') }}"  autocomplete="dp" autofocus>

                                @error('dp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="phase" class="col-md-1 col-form-label text-md-right">{{ __('PH') }}</label>
                            <div class="col-md-1">

                                <input id="phase" type="text" class="form-control @error('phase') is-invalid @enderror" name="phase" value="{{ old('phase') }}"  autocomplete="phase" autofocus>

                                @error('phase')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="msd" class="col-md-1 col-form-label text-md-right">{{ __('M.S (D)') }}</label>
                            <div class="col-md-1">

                                <input id="msd" type="text" class="form-control @error('msd') is-invalid @enderror" name="msd" value="{{ old('msd') }}"  autocomplete="msd" autofocus>

                                @error('msd')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="wp" class="col-md-4 col-form-label text-md-right">{{ __('W/C') }}</label>

                            <div class="col-md-6">
                                <input id="wp" type="number" class="form-control @error('wp') is-invalid @enderror" name="wp" value="{{ old('wp') }}"  autocomplete="wp">

                                @error('wp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="c/l" class="col-md-4 col-form-label text-md-right">C/L</label>

                            <div class="col-md-6">
                                <input id="c/l" type="numebr" class="form-control @error('cost_of_land') is-invalid @enderror" name="cost_of_land" value="{{ old('cost_of_land')}}"  autocomplete="cost_of_land">

                                @error('cost_of_land')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="o/c" class="col-md-4 col-form-label text-md-right">O/c</label>

                            <div class="col-md-6">
                                <input id="o/c" type="number" class="form-control @error('other_charges') is-invalid @enderror" name="other_charges" value="{{ old('other_charges')}}"  autocomplete="other_charges">

                                @error('other_charges')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="b/c" class="col-md-4 col-form-label text-md-right">B/c</label>

                            <div class="col-md-6">
                                <input id="b/c" type="number" class="form-control @error('bounder_wall_charges') is-invalid @enderror" name="bounder_wall_charges" value="{{ old('bounder_wall_charges')}}"  autocomplete="bounder_wall_charges">

                                @error('bounder_wall_charges')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="balance" class="col-md-4 col-form-label text-md-right">Balance</label>

                            <div class="col-md-6">
                                <input id="Balance" type="number" class="form-control @error('Balance') is-invalid @enderror" name="balance" value="{{ old('balance')}}"  autocomplete="balance">

                                @error('balance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label for="name6" class="col-md-4 col-form-label text-md-right">Name6: </label>

                            <div class="col-md-6">
                                <input id="name6" type="text" class="form-control @error('name6') is-invalid @enderror" name="name6" value="{{ old('name6') }}"  autocomplete="name6">

                                @error('name6')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name7" class="col-md-4 col-form-label text-md-right">Name7: </label>

                            <div class="col-md-6">
                                <input id="name7" type="text" class="form-control @error('name7') is-invalid @enderror" name="name7" value="{{ old('name7') }}"  autocomplete="name7">

                                @error('name7')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name8" class="col-md-4 col-form-label text-md-right">Name8: </label>

                            <div class="col-md-6">
                                <input id="name8" type="text" class="form-control @error('name8') is-invalid @enderror" name="name8" value="{{ old('name8') }}"  autocomplete="name8">

                                @error('name8')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name9" class="col-md-4 col-form-label text-md-right">Name9: </label>

                            <div class="col-md-6">
                                <input id="name9" type="text" class="form-control @error('name9') is-invalid @enderror" name="name9" value="{{ old('name9') }}"  autocomplete="name9">

                                @error('name9')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}


                        <div class="form-group row">
                            <label for="name10" class="col-md-4 col-form-label text-md-right">N.I.C: </label>

                            <div class="col-md-6">
                                <input id="name10" type="text" class="form-control @error('name10') is-invalid @enderror" name="name10" value="{{ old('name10') }}"  autocomplete="name10">

                                @error('name10')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address"  autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('Cell #') }}</label>

                            <div class="col-md-6">
                                <input id="number" type="number" class="form-control @error('number') is-invalid @enderror" name="phone"  autocomplete="number">

                                @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date"  autocomplete="date">

                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="upto" class="col-md-4 col-form-label text-md-right">Upto</label>

                            <div class="col-md-6">
                                <input id="upto" type="text" class="form-control @error('upto') is-invalid @enderror" name="upto"  autocomplete="upto">

                                @error('upto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ms" class="col-md-4 col-form-label text-md-right">Ms</label>

                            <div class="col-md-6">
                                <input id="ms" type="number" class="form-control @error('ms') is-invalid @enderror" name="ms"  autocomplete="ms">

                                @error('ms')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
