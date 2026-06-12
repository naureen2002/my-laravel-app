@extends('frontend.public.layouts.public')

@section('title', 'vCISO - Virtual CISO Services - Cyberlog')
@section('meta_description', 'Cyberlog vCISO gives organizations executive security leadership, cyber risk governance, compliance oversight, SOC alignment, and board-ready reporting without a full-time CISO hire.')

@section('content')

{{-- Section 1: Diagram-led hero inspired by the ViserX home structure. --}}
@include('frontend.public.partials.vciso.hero')

{{-- Section 2: Product-style vCISO operating model inspired by Buguard layouts. --}}
@include('frontend.public.partials.vciso.product')

@include('partials.talk-to-expert', [
    'title' => 'Need a CISO without the full-time cost?',
    'text' => 'Cyberlog gives you executive security leadership, practical governance, and measurable progress from day one.'
])

@endsection
