<x-app-layout>

    <x-card>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dignissimos illo tempore. Voluptas similique fugit sequi asperiores quasi corporis neque magni iste, incidunt, deserunt quo hic cum provident, sapiente id. </p>
    </x-card>


    <div class="max-w-[300] mx-auto p-4 sm:p-6 lg:p-8">

        <div>
            <a href="{{ route('change.language', 'fr') }}">Français</a> | <a
                href="{{ route('change.language', 'en') }}">Anglais</a>
        </div><br>

        <form method="POST" action="{{ route('chirps.store') }}">
            @csrf
            <textarea
                name="message"
                placeholder="{{ __('util.msg') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('message') }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('util.chirp') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>