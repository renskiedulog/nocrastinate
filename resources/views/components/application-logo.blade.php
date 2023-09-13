@auth
    <a href="{{ url('/') }}" class="text-3xl"><span class="text-3xl text-red-500">No</span>Crastinate</a>
@else
    <a href="{{ url('/') }}" class="text-5xl"><span class="text-5xl text-red-500">No</span>Crastinate</a>
@endauth