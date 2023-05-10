

<div class="row mb-4">

    @if($notification)
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
        <div id="notification" wire:transition.fade.out.500ms>
        @if (session()->has('message'))
            <div class="alert alert-success" role="alert">
                <i class="icon-info1"></i>{{ session('message')}}
            </div>
        @endif
    </div>
    <div wire:poll.5s="hideNotification"></div>
    </div>
    @endif
    @if($createConstat)
        @include('livewire.constat_oeufs.create')
    @endif

    @if($editConstat)
        @include('livewire.constat_oeufs.edit')
    @endif

@if($afficherListe)
<div class="col-md-12 col-xs-12 col-lg-12 mb-2">
    <div class="card">
        <div class="card-header">
            <p class="card-title">Donées du jours</p>
        </div>
        <div class="card-body">
            <livewire:donneejour-constant-oeuf />
        </div>
    </div>
</div>
@endif

@if ($afficherListe)
    <div class="col-md-12 mb-3">
        <div class="card text-left">

            <div class="card-body">
                <h4 class="card-title mb-3">{{ __('Liste constat oeufs ') }}</h4>
                <p>
                    <button class="btn btn-primary btn-rounded" wire:click="formConstat" wire:loading.attr="disabled" wire:target="formConstat">
                        <span wire:loading.remove wire:target="formConstat">Créer constat oeuf</span>
                        <span wire:loading wire:target="formConstat">
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            création...
                        </span>
                    </button>
                </p>
                <div class="table-responsive">
                                    
                @if($recordToDelete)
                <!-- CSS -->
                <style>
                    .overlay {
                    position: fixed;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    background-color: rgba(0, 0, 0, 0.5);
                    z-index: 9999;
                    }
                    
                    .centered {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    }
                </style>
  
                <!-- HTML -->
                <div class="overlay">
                    <div class="centered">
                    <div class="alert alert-warning text-center">
                        <strong class="text-black">Suppression constat d'oeuf !</strong>
                        <p class="text-black">Vous etes sure de supprimer le constat d'oeuf du : {{$recordToDelete->date_entree }}?</p>
                        <p class="text-center">
                            <button class="btn btn-secondary btn-rounded" wire:click="cancelDelete()">{{ __('Annuler') }}</button>
                            <button class="btn btn-danger btn-rounded" wire:click="delete()">{{ __('Supprimer') }}</button>
                        </p>
                    </div>
                    </div>
                </div>
  
                <script>
                    // Désactiver le clic sur le reste de la page
                    document.querySelector('.overlay').addEventListener('click', function(e) {
                    e.stopPropagation();
                    });
                </script>
                @endif

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('Type oeufs')}}</th>
                                <th scope="col">{{ __('Nombre oeuf')}}</th>
                                <th scope="col">{{ __('Cycle')}}</th>
                                <th scope="col">{{ __('Date entrée')}}</th>
                                <th scope="col">{{ __('Utilisateur')}}</th>
                                <th scope="col" width="149px">{{ __('Actions')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($constats as $constat)
                            <tr>
                                <td>{{ $constat->type }}</td>
                                <td>{{ $constat->nb }}</td>
                                <td>{{ $constat->description }}</td>
                                <td>{{ $constat->date_entree }}</td>
                                <td>{{ $constat->name }}</td>
                                <td>
                                    <button wire:click="editConstat({{$constat->id }})" wire:loading.attr="disabled" wire:target="editConstat({{$constat->id }})" class="btn btn-raised btn-rounded btn-raised-primary">
                                        <span wire:loading.remove wire:target="editConstat({{$constat->id }})"><i class="nav-icon i-Pen-2 font-weight-bold"></i></span>
                                        <span wire:loading wire:target="editConstat({{$constat->id }})">
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            modification...
                                        </span>
                                    </button>
                                    <button class="btn btn-raised btn-rounded btn-raised-danger"  wire:click="comfirmerDelete({{$constat->id }})">
                                        <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                    </button>
                                </td>
                            </tr>                                  
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{ $constats->links() }}

            </div>
        </div>
    </div>
    <!-- end of col-->
    @endif
</div>

<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Contenu de la fenêtre modale -->
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

<script>
// Initialisez le graphique avec l'élément HTML ciblé par son ID.
var chart = echarts.init(document.getElementById('chart'));

// Récupérez les données et les labels à partir du résultat de la requête
var data = @json($totalDonneesJournalieres->pluck('total')->toArray());
var labels = @json($totalDonneesJournalieres->pluck('nom_type_oeuf')->toArray());

// Configurez les options du graphique.
var options = {
  series: [
    {
      type: 'pie',
      data: data.map(function(value, index) {
        return { value: value, name: labels[index] };
      })
    }
  ]
};

// Appliquez les options au graphique.
chart.setOption(options);

    </script>