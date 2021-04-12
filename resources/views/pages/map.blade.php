@extends('layouts.app', ['activePage' => 'map', 'titlePage' => __('Map')])

@section('content')
<div id="map">
  <iframe id="inlineFrameExample" title="Inline Frame Example" width="100%" height="100%"
    src="http://www.openstreetmap.org/export/embed.html?bbox=98.9421000,18.7873000,98.9757000,18.8052000&layer=mapnik">
  </iframe>
</div>
@endsection
