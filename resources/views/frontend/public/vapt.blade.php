@extends('frontend.public.layouts.public')

@section('title', 'VAPT & Penetration Testing - Cyberlog')
@section('meta_description', 'Cyberlog VAPT and penetration testing services identify, validate, and prioritize exploitable risks across web apps, APIs, networks, cloud, and infrastructure.')

@section('content')

{{-- Section 1: SOC-style hero adapted for offensive security. --}}
@include('frontend.public.partials.vapt.hero')

{{-- Section 2: Client proof section, same placement pattern as requested. --}}
@include('partials.clients')

{{-- Section 3: Security posture diagram. --}}
@include('frontend.public.partials.vapt.posture')

{{-- Section 4: Penetration testing service calculator. --}}
@include('frontend.public.partials.vapt.calculator')

{{-- Section 5: Engagement coverage matrix. --}}
@include('frontend.public.partials.vapt.matrix')

{{-- Section 6: Black / Grey / White box design. --}}
@include('frontend.public.partials.vapt.boxes')

@include('partials.reviews')

@include('partials.talk-to-expert', [
    'title' => 'Ready to test your defenses?',
    'text' => 'Book a scoping call and get a tailored VAPT quote for your applications, network, APIs, or cloud.'
])

@endsection
