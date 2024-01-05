<<!-- resources/views/admin/import.blade.php -->

@extends('pages.layouts.app')

@section('content')
    <h2>Import Users</h2>

    <form action="{{ route('admin.import.post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" required>
        <button type="submit">Import</button>
    </form>
@endsection
