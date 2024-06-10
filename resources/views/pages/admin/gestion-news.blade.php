

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Gestion Blog
        </h2>
    </x-slot>

    @if (session()->has('success'))
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
                        <p class="font-bold">Succès!</p>
                        <p>{{ session()->get('success') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-xl text-gray-800 leading-tight">
                        Nouvel article
                    </h3>
                    <form method="post" action="{{route('storeArticle')}}" class="mt-6 space-y-6"
                        enctype="multipart/form-data">
                        @csrf

                        <div>
                            <x-input-label for="name" :value="__('Titre')" />
                            <x-text-input id="name" name="titre" type="text" class="mt-1 block w-full" required
                                autofocus autocomplete="titre" />
                            <x-input-error class="mt-2" :messages="$errors->get('titre')" />
                        </div>
                        <div>
                            <x-input-label for="name" :value="__('Image de l\'article (Facultatif)')" />
                            <x-text-input id="name" name="image_article" type="file" class="mt-1 block w-full" 
                                autofocus autocomplete="" accept="image/*" />
                            <x-input-error class="mt-2" :messages="$errors->get('titre')" />
                        </div>
                        <div>
                            <x-input-label for="name" :value="__('Saisissez le contenu')" />
                            <textarea  name="contenu" rows="4" id="summernote"
                                class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>

                        </div>
                        <div>
                            <x-input-label for="name" :value="__('Contenu court')" />
                            <x-text-input id="contenu_court" name="contenu_court" placeholder="Minimum de texte" type="text" class="mt-1 block w-full" 
                                autofocus autocomplete="titre" />
                            <x-input-error class="mt-2" :messages="$errors->get('contenu court')" />
                        </div>
                        

                        <div>
                            <x-input-label for="name" :value="__('Importer un document/Image comme contenu')" />
                            <x-text-input id="name" name="contenu_pdf" type="file" class="mt-1 block w-full" autofocus
                                autocomplete="" accept="image/*,.pdf," />

                        </div>

                        <div>
                            <x-input-label for="name" :value="__('Utiliser un article externe comme contenu')" />
                            <x-text-input id="name" name="contenu_externe" type="url" class="mt-1 block w-full"
                                autofocus autocomplete=""
                                placeholder="Coller le lien d'un article provenant d'un autre site." />
                            <x-input-error class="mt-2" :messages="$errors->get('titre')" />
                        </div>


                        <div class="flex items-center gap-4" style="margin-top:100px">
                            <x-primary-button>Publier</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-xl text-gray-800 leading-tight">
                        Historique
                    </h3>
                    <div class="w-full max-w-3xl mx-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 text-left">#</th>
                                    <th class="px-6 py-3 text-left">Titre</th>
                                    <th class="px-6 py-3 text-left">Date de creation</th>
                                    <th class="px-6 py-3 text-left"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($articles as $key => $art)
                                <tr>
                                    <td class="px-6 py-4">{{$art->id_article}}</td>
                                    <td class="px-6 py-4">{{$art->titre}}</td>
                                    <td class="px-6 py-4">{{$art->date_article}}</td>
                                    <td class="px-6 py-4"> <a href="{{route('edit-article',$art->id_article)}}"><button
                                                class="btn btn-sm btn-primary " type="button"><i
                                                    class="fa fa-pencil"></i></button></a></td>
                                    <td class="px-6 py-4"> <a href="{{route('deleteArticle',$art->id_article)}}">
                                            <button
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                                Supprimer
                                            </button></a></td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div class="mt-4">
                            {{ $articles->links() }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
      $('#summernote').summernote({
        placeholder: 'Rediger un article',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>

</x-app-layout>

