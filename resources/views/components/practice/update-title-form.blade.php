<div>
    @auth
        <div class="row mt-3">
            <div class="col-10 row">
                <form action="{{ route('practice.updateTitle', $practice->id) }}" method="post">
                    @csrf
                    <div class="row">
                        <input id="title"
                               class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                               id="grid-last-name"
                               name="title"
                               type="text"
                               required
                               value="">

                        <input type="submit"
                               value="Soumettre"
                               class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 inline-flex items-center"
                        >
                    </div>
                </form>
            </div>
        </div>
    @endauth

</div>
