@extends('layouts.app')

@section ('content')

<div class="container">
    <div class="row">
        <div class="col-7 mx-auto">
            <h3>PEMBAYARAN</h3>
            <hr>
            
            <form action="{{ route('checkout') }}" method="POST" id="checkout-form">
                @csrf
                <div class="row ">
                    
                    <div class="col-12">
                        <h5>DETAIL PENGIRIMAN</h5>
                    </div>

                    <div class="col-12">
                        <label for="name" class="">{{ __('Name') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $user->name ??'' }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="phonenumber" class="">{{ __('No.telepon') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="phonenumber" type="text" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ old('phonenumber') ?? $user->profile->phonenumber ??'' }}" required autocomplete="phonenumber" autofocus>
                                @error('phonenumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="country" class="">{{ __('Provinsi') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') ?? $user->profile->country ??'' }}" required autocomplete="country" autofocus>
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="city" class="">{{ __('Kota') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') ?? $user->profile->city ??'' }}" required autocomplete="city" autofocus>
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="address" class="">{{ __('Alamat') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') ?? $user->profile->address ??'' }}" required autocomplete="address" autofocus>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="zipcode" class="">{{ __('Kode POS') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="zipcode" type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" value="{{ old('zipcode') ?? $user->profile->zipcode ??'' }}" required autocomplete="zipcode" autofocus>
                                @error('zipcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <hr>
                        <h5>TAGIHAN</h5>
                    </div>
                    

                    <div class="col-12">
                        <label for="creditcardnumber" class="">{{ __('No.Kartu Kredit') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="creditcardnumber" type="text" class="form-control @error('creditcardnumber') is-invalid @enderror" name="creditcardnumber" value="{{ old('creditcardnumber') }}" required autocomplete="creditcardnumber" autofocus>
                                @error('creditcardnumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    


                </div>
                
                <button type="submit" class="button-primary w-100">BELI SEKARANG</button>
            
            </form>
        </div>
    </div>
</div>

@endsection