@extends('frontend.public.layouts.public')

@section('title', 'Cyberlog — Build Cyber Resilience Before Attackers Build Access')

@section('content')

{{-- 1. Hero / Landing — dynamic design (ref: riskledger.com) --}}
@include('frontend.public.partials.home.hero')

{{-- Client logo strip moved to the dedicated Clients page (/clients). --}}

{{-- 2. Client case cards (ref: viserx.com) --}}
@include('frontend.public.partials.home.case-cards')

{{-- 3. Standardised assessment / compliance panel (ref: riskledger.com) --}}
@include('frontend.public.partials.home.assessment')

{{-- 4. Network / attack-surface posture panel (ref: riskledger.com) --}}
@include('frontend.public.partials.home.network')

{{-- 5. Emerging threats / continuous risk signals (ref: riskledger.com) --}}
@include('frontend.public.partials.home.threats')

{{-- 6. Defend-as-One / shared intelligence network (ref: riskledger.com) --}}
@include('frontend.public.partials.home.defend')

{{-- 7. Security Solutions (ref: buguard.io) --}}
@include('frontend.public.partials.home.solutions')

{{-- 8. Our Story (ref: underdefense.com/about-us) --}}
@include('frontend.public.partials.home.our-story')

{{-- 9. Technical diagram - security engagement process (ref: viserx.com) --}}
@include('frontend.public.partials.home.tech-diagram')

{{-- 10. Closing CTA banner - Active Cyber Defense (ref: riskledger.com) --}}
@include('frontend.public.partials.home.cta-banner')


@endsection
