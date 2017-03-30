@extends('layouts.app')

@section('title', 'Dashboard')

@section('main')
    <iframe src="{{ route('files', 'asd') }}" frameborder="0" id="pdfViewer"></iframe>
@endsection