<x-ferme-layout>

<!-- Page header start -->
<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">{{ __('Parametrages ')}}</li>
        <li class="breadcrumb-item active">{{ __('Catégorie de depense')}}</li>
    </ol>

    <ul class="app-actions">
        <li>
            <a href="#" id="reportrange">
                <span class="range-text"></span>
                <i class="icon-chevron-down"></i>	
            </a>
        </li>
    </ul>
</div>
<!-- Page header end -->

<!-- Main container start -->
        @livewire('liv-categorie-depense')
    </div>
</div>
<!-- Row end -->
</x-ferme-layout>