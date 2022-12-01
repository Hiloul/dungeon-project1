<x-app-layout>



    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>



<style>
    
    
.cadperso{
    border: 2px black solid;
    display: flex;
    /* justify-content: space-evenly; */
    align-items: center;
    flex-direction: column;
    

}
</style>



@section('principale')
<div class="cadperso">
    <h3>Mes personnages</h3>
    <h3>Mes équipes</h3>
    
    </div>
@endsection



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Vous êtes connecté(e)!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
