
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

    @if($createCycle)
        @include('livewire.cycles.create')
    @endif

    @if($editCycle)
        @include('livewire.cycles.edit')
    @endif

    @if ($afficherListe)
    <div class="col-md-12 mb-3">
        <div class="card text-left">

            <div class="card-body">
                <h4 class="card-title mb-3">{{ __('Liste cycles ') }}</h4>
                <p>
                    <button class="btn btn-primary btn-rounded" wire:click="formCycle" wire:loading.attr="disabled" wire:target="formCycle">
                        <span wire:loading.remove wire:target="formCycle">Créer cycle</span>
                        <span wire:loading wire:target="formCycle">
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
                        <strong class="text-black">Suppression cycle !</strong>
                        <p class="text-black">Vous etes sure de supprimer le cycle : {{$recordToDelete->description }}?</p>
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
                                <th scope="col">{{ __('Description')}}</th>
                                <th scope="col">{{ __('Type poulet')}}</th>
                                <th scope="col">{{ __('Nombre poulet')}}</th>
                                <th scope="col">{{ __('Site')}}</th>
                                <th scope="col">{{ __('Batiment')}}</th>
                                <th scope="col">{{ __('Date entrée')}}</th>
                                <th scope="col">{{ __('Status')}}</th>
                                <th scope="col" width="149px">{{ __('Actions')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cycles as $cycle)
                            <tr>
                                <td>{{ $cycle->description }}</td>
                                <td>{{ $cycle->type }}</td>
                                <td>{{ $cycle->nb_poulet }}</td>
                                <td>{{ $cycle->site }}</td>
                                <td>{{ $cycle->nom }}</td>
                                <td>{{ $cycle->date_entre }}</td>
                                <td>
                                    @if($cycle->actif == 1)
                                        <span class="badge badge-success">Actif</span>
                                    @else
                                        <span class="badge badge-danger">Inactif</span>
                                    @endif
                                </td>
                                <td>
                                    <button wire:click="editCycle({{$cycle->id }})" wire:loading.attr="disabled" wire:target="editCycle({{$cycle->id }})" class="btn btn-raised btn-rounded btn-raised-primary">
                                        <span wire:loading.remove wire:target="editCycle({{$cycle->id }})"><i class="nav-icon i-Pen-2 font-weight-bold"></i></span>
                                        <span wire:loading wire:target="editCycle({{$cycle->id }})">
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            modification...
                                        </span>
                                    </button>
                                    <button class="btn btn-raised btn-rounded btn-raised-danger"  wire:click="comfirmerDelete({{$cycle->id }})">
                                        <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                    </button>
                                </td>
                            </tr>                                  
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{ $cycles->links() }}

            </div>
        </div>
    </div>
    <!-- end of col-->
    @endif
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