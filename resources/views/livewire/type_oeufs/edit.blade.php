<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
    <div class="card h-100">
        <div class="card-header">
            <div class="card-title">Modification type oeuf</div>
        </div>
        <div class="card-body">
            <div class="row gutters">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <p><code>Nom type poulet</code></p>
                    <input type="text" wire:model="type" class="form-control" id="fullName" placeholder="">
                    @error('type') 
                        <div class="alert alert-danger" role="alert">
                            <i class="icon-new_releases"></i> {{ $message}}
                        </div>
                    @enderror
                </div>
                
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <p><code>Status</code></p>
                        <select wire:model="actif" class="form-control selectpicker" data-size="4" data-show-subtext="true">
                            <option >Sellectioner status</option>
                            <option value="1" >Actif</option>
                            <option value="0">Inactif</option>
                        </select>
                        @error('actif') 
                        <div class="alert alert-danger" role="alert">
                            <i class="icon-new_releases"></i> {{ $message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="text-right">
                        <button class="btn btn-warning" wire:click.prevent="cancelUpdate"  wire:loading.attr="disabled" wire:target="cancelUpdate">
                        <span wire:loading.remove wire:target="cancelUpdate">Annuler</span>
                        <span wire:loading wire:target="cancelUpdate">
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            annulation...
                        </span>
                        </button>

                        <button class="btn btn-primary" wire:click.prevent="confirmerUpdate"  wire:loading.attr="disabled" wire:target="confirmerUpdate">
                        <span wire:loading.remove wire:target="confirmerUpdate">Enregistrer</span>
                        <span wire:loading wire:target="confirmerUpdate">
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            enregistrement...
                        </span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@if($confirmUpdate)
<div class="position-fixed fixed-top fixed-bottom w-100 h-100 d-flex align-items-center justify-content-center bg-gray-500 bg-opacity-50">
    <div class="alert-notify info">
        <div class="alert-notify-body">
            <span class="type">Modification</span>
            <div class="alert-notify-title">Vous etes sure ?<img src="{{ asset('img/notification-info.svg') }}" alt=""></div>
            <div class="alert-notify-text">Remarque: La modification sera effectué apres la confirmation !</div>
            <p class="text-center">
                <button class="btn btn-white" wire:click="cancelModal()">Annuler</button>
                <button class="btn btn-danger" wire:click.prevent="updateType()"  wire:loading.attr="disabled" wire:target="updateType()">
                    <span wire:loading.remove wire:target="updateType()">Confirmer</span>
                    <span wire:loading wire:target="updateType()">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        confirmation...
                    </span>
                </button>
            </p>
        </div>
    </div>
</div>

@endif