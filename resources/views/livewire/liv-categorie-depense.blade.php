<div class="main-container">  
    <!-- Row start -->
    <div class="row gutters">  
@if($notification)
<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
    <div id="notification" wire:transition.fade.out.500ms>
    @if (session()->has('message'))
        <div class="alert alert-info" role="alert">
            <i class="icon-info1"></i>{{ session('message')}}
        </div>
    @endif
</div>
<div wire:poll.5s="hideNotification"></div>
</div>
@endif

@if ($createType)
    @include('livewire.categorie_depense.create')
@endif

@if($editType)
    @include('livewire.categorie_depense.edit')
@endif
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    
    <div class="table-container">
        <div class="t-header">
        @if($btnCreate)
            <button class="btn btn-outline-primary" wire:click.prevent="formType"  wire:loading.attr="disabled" wire:target="formType">
            <span wire:loading.remove wire:target="formType">Création categorie</span>
            <span wire:loading wire:target="formType">
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                création...
            </span>
            </button>
        @else
            Liste type poulet
        @endif
        </div>
        <div class="table-responsive">
            @include('livewire.categorie_depense.liste')
        </div>
    </div>

</div>
</div>
    </div>
</div>
@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            Livewire.on('removeNotification', function () {
                setTimeout(function () {
                    document.getElementById('notification').remove();
                }, 1000);
            });
        });
    </script>
@endpush