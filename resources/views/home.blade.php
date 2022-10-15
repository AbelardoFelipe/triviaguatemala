@extends('layouts.app')

@section('content')
<div class="">
    <div class="">
        <div class="">
            <div class="">
                <div class="">{{ __('Dashboard') }}</div>

                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
