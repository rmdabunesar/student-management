@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<div class="sidebar">
    <h2>Contact Info</h2>
    <ul>
        <li>Email: info@example.com</li>
        <li>Phone: +880 123 456 789</li>
        <li>Location: Bangladesh</li>
    </ul>
</div>

<div class="content">
    <h2>Contact Us</h2>

    <form>
        <input type="text" placeholder="Your Name" style="width:100%; padding:8px; margin-bottom:10px;">
        <input type="email" placeholder="Your Email" style="width:100%; padding:8px; margin-bottom:10px;">
        <textarea placeholder="Message" style="width:100%; padding:8px;" rows="5"></textarea>

        <button type="submit" style="margin-top:10px; padding:10px 15px; background:#333; color:#fff;">
            Send
        </button>
    </form>
</div>

@endsection

@push('scripts')
<script>
    console.log('Contact page loaded');
</script>
@endpush