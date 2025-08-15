@props(['service'])
<a href="{{ route('services.show', $service->slug) }}" class="block p-6 rounded-xl bg-white shadow-sm hover:shadow-md transition border border-slate-100">
  <div class="flex items-center gap-4">
    @if($service->icone)
      <div class="w-12 h-12 rounded-lg bg-indigo-50 flex items-center justify-center text-indigo-600">
        <x-dynamic-component :component="$service->icone" />
      </div>
    @endif
    <h3 class="text-lg font-semibold">{{ $service->titre }}</h3>
  </div>
  <p class="mt-4 text-sm text-slate-600 line-clamp-3">{{ $service->excerpt }}</p>
  <span class="mt-4 inline-flex items-center gap-1 text-indigo-600 text-sm font-medium">
    En savoir plus →
  </span>
</a>