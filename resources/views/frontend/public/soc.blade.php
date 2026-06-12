@extends('frontend.public.layouts.public')

@section('title', 'SOC as a Service — 24/7 Security Operations — Cyberlog')

@section('content')

@include('frontend.public.partials.soc.hero')
@include('frontend.public.partials.soc.comparison')
@include('frontend.public.partials.soc.calculator')
@include('frontend.public.partials.soc.matrix')
@include('frontend.public.partials.soc.benefits')
@include('frontend.public.partials.soc.sensor')
@include('frontend.public.partials.soc.expert')
@include('frontend.public.partials.soc.pricing')
@include('frontend.public.partials.soc.reviews')

{{-- Closing CTA --}}
<section class="page-section">
    <div class="container">
        <div class="cl-cta d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3" data-reveal>
            <div>
                <h3 class="fw-bold mb-1">Still evaluating SOC options?</h3>
                <p class="mb-0 text-white-50">We'll walk you through the pros, cons, and pricing — no pressure.</p>
            </div>
            <a class="btn btn-primary btn-xl text-white fw-bold" href="{{ Route::has('public.contact') ? route('public.contact') : (Route::has('contact') ? route('contact') : '#') }}">Talk to an Expert</a>
        </div>
    </div>
</section>

@endsection
