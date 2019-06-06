@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="text-align:center">
                    <span class="progress-nav done"><span>1</span> <strong>Contact Info </strong></span>
                    <span class="progress-nav active"><span>2</span> <strong>Company Info</strong> </span>
                    <span class="progress-nav"><span>3</span> <strong>Contract</strong> </span>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card-body">
                        @if(isset($page) && $page == '2')
                            @include('form-2')
                        @elseif(isset($page) && $page == '3')
                            @include('gold-contract')
                        @else
                            @include('form-1')
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
