<x-app-layout>

    <h1 class="text-xl mb-10">Créer une nouvelle référence</h1>

    <div class="">
        <form class="w-full max-w-lg" method="post" action="{{ route('references.store') }}">
            @csrf
            <div class="mb-5">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">
                    Description
                    <span class="icon is-small is-left"><em class="fas fa-quote-left"></em></span>
                    <span class="icon is-small is-right"><em class="fas fa-quote-right"></em></span>
                </label>
                <div class="control has-icons-left has-icons-right">
                    <input id="description"
                           class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                           id="grid-last-name"
                           name="description"
                           type="text"
                           required
                           value=""
                           title="La description doit faire au moins 10 caractères (sans compter les espaces)."
                    >
                </div>
                @error('description')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="url">
                    Url
                    <span class="icon is-small is-left"><em class="fas fa-link"></em></span>
                </label>

                <div class="control has-icons-left">
                    <input id="url"
                           class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                           id="grid-last-name"
                           name="url"
                           type="url"
                           value="{{ old('url') }}"
                    >
                </div>
                @error('url')
                <p class="">{{ $message }}</p>
                @enderror
            </div>

            <div class="mx-0 mt-5">
                <input type="submit"
                       value="Créer"
                       class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 inline-flex items-center"
                >
            </div>


        </form>
    </div>
</x-app-layout>
