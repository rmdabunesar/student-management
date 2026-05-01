@extends('layouts.app')

@section('title', 'About Us')

@section('content')

<div class="sidebar">
    <h2>About Sidebar</h2>
    <ul>
        <li>Our Story</li>
        <li>Mission</li>
        <li>Vision</li>
    </ul>
</div>

<div class="content">
    <h2>About Us</h2>
    <p>We are building a simple Laravel application with clean structure and reusable templates.</p>
</div>

@endsection

@push('scripts')
<script>
    console.log('About page loaded');
</script>
@endpush