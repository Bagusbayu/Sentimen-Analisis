@extends('base') {{-- mengambil file base.blade.php --}}
@section('content') {{-- Mengisi di bagian content --}}
<div class="btn-group btn-group-justified" role="group" aria-label="...">
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default">Anger</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default">Fear</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default">Joy</button>
  </div>
</div><br><br>
<div class="btn-group btn-group-justified" role="group" aria-label="...">
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default">Love</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default">Sadness</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default">Netral</button>
  </div>
</div>
@endsection