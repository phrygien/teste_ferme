<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
    <div class="card h-100">
        <div class="card-header">
            <div class="card-title">Création site</div>
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
                        <button wire:click="annuler()" type="button" id="submit" name="submit" class="btn btn-warning">annuler</button>
                        <button wire:click.prevent="save()" type="button" id="submit" name="submit" class="btn btn-primary">enregistrer</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>