@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">{{ __('States') }}</div>

          <div class="card-body">
            <x-state-form :countries="$countries"/>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
