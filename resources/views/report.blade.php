@extends('layouts.app')

@section('content')
<div class="row py-5">
  <div class="col-md-12 order-md-1">
    <h4 class="d-flex justify-content-between align-items-center mb-3">
      <span class="text-muted">Unduh Dokumen</span>
    </h4>
    <ul class="list-group mb-3">
      @foreach ($reports as $report)
      <li class="list-group-item d-flex justify-content-between lh-condensed">
        <div>
          <h6 class="my-0">{{ $report->name }}</h6>
          <small class="text-muted">Anda dapat mengunduh dokumen ini</small>
        </div>
        <span class="text-muted"><a href="{{ Storage::url($report->file) }}" class="btn btn-sm btn-primary text-sm" target="_blank"><i class="fa fa-download"></i> Unduh</a></span>
      </li>
      @endforeach
    </ul>
  </div>
</div>
@endsection