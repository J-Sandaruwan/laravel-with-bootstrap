<div {{ $attributes->merge(['class' => 'row justify-content-center']) }}>
    @if (isset($title) )
    <div class="col-md-4">
        <x-jet-section-title>
            <x-slot name="title">{{ $title ?? ""}}</x-slot>
            <x-slot name="description">{{ $description ?? ""}}</x-slot>
        </x-jet-section-title>
    </div>

    @endif

    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-body">
                {{ $content ?? ""}}
            </div>
        </div>
    </div>
</div>
