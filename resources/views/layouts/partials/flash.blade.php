@if (session('status'))
    <div class="max-w-4xl mx-auto mt-6 px-6">
        <div class="rounded-md bg-green-50 border border-green-200 px-4 py-3 text-sm text-green-700">
            {{ session('status') }}
        </div>
    </div>
@endif

@if ($errors->any())
    <div class="max-w-4xl mx-auto mt-6 px-6">
        <div class="rounded-md bg-red-50 border border-red-200 px-4 py-3 text-sm text-red-700 space-y-1">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    </div>
@endif