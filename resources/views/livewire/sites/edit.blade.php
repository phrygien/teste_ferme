<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
    <div class="card h-100">
        <div class="card-header">
            <div class="card-title">Modification site</div>
        </div>
        <div class="card-body">
            <div class="row gutters">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                    <p><code>Nom site</code></p>
                    <input type="text" wire:model="site" class="form-control" id="fullName" placeholder="">
                    @error('site') 
                        <div class="alert alert-danger" role="alert">
                            <i class="icon-new_releases"></i> {{ $message}}
                        </div>
                    @enderror
                </div>
                
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <p><code>Adresse</code></p>
                        <input type="text" wire:model="adresse" class="form-control" id="fullName" placeholder="">
                        @error('adresse') 
                        <div class="alert alert-danger" role="alert">
                            <i class="icon-new_releases"></i> {{ $message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
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
                        <button wire:click="cancelUpdate()" type="button" id="submit" name="submit" class="btn btn-warning">annuler</button>
                        <button wire:click.prevent="confirmerUpdate()" type="button" id="submit" name="submit" class="btn btn-primary">modifier</button>
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
                <button class="btn btn-danger" wire:click.prevent="update()">Valider</button>
            </p>
        </div>
    </div>
</div>

@endif