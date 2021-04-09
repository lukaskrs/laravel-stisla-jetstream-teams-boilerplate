@props(['submit'])


<x-slot name="header_content">
    <h1>{{ $title }}</h1>
    <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">{{ $title }}</a></div>
{{--}}        <div class="breadcrumb-item"><a href="{{ route('teams.create') }}">Create</a></div> --}}
    </div>
</x-slot>

<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-3 md:gap-6']) }}>
    <x-jet-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-jet-section-title>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form wire:submit.prevent="{{ $submit }}">
            <div class="px-4 py-5 bg-white sm:p-6 shadow {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
                <div class="grid grid-cols-6 gap-6">
                    {{ $form }}
                </div>
            </div>

            @if (isset($actions))
                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>
