@extends('frontend.public.layouts.public')

@section('title', 'Clients — Cyberlog')

@section('content')

{{-- Page header --}}
<header class="cl-hero" id="clients-top">
    <div class="container text-center">
        <p class="cl-hero-eyebrow mb-3" data-reveal data-hero>CLIENTS</p>
        <h1 class="cl-hero-heading mb-3" data-reveal data-hero>
            Trusted Across <span class="accent">Critical Sectors</span>
        </h1>
        {{-- TODO: copy — intro paragraph placeholder (not supplied in brief) --}}
        <p class="lead text-muted lead-narrow mb-0" data-reveal data-hero>
            Government, finance, education, and enterprise organizations rely on Cyberlog to
            defend their most critical systems.
        </p>
    </div>
</header>

{{-- Our Clients section moved from /services --}}
@include('partials.clients')

{{-- Detailed client case cards (viserx-style deck) --}}
@include('frontend.public.partials.clients.deck')

@endsection
