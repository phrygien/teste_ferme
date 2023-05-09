<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
    <div class="card h-100">
        <div class="card-header">
            <div class="card-title">Création type oeuf</div>
        </div>
        <div class="card-body">
            <div class="row gutters">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <p><code>Libelle du type</code></p>
                    <input type="text" wire:model="categorie" class="form-control" id="fullName" placeholder="">
                    @error('categorie') 
                        <div class="alert alert-danger" role="alert">
                            <i class="icon-new_releases"></i> {{ $message}}
                        </div>
                    @enderror
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <p><code>Commentaire</code></p>
                        <input type="text" wire:model="commentaire" class="form-control" id="fullName" placeholder="">
                        @error('commentaire') 
                        <div class="alert alert-danger" role="alert">
                            <i class="icon-new_releases"></i> {{ $message}}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <p><code>Status du type</code></p>
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
                        <button class="btn btn-warning" wire:click.prevent="cancelCreate"  wire:loading.attr="disabled" wire:target="cancelCreate">
                        <span wire:loading.remove wire:target="cancelCreate">Annuler</span>
                        <span wire:loading wire:target="cancelCreate">
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            annulation...
                        </span>
                        </button>

                        <button class="btn btn-primary" wire:click.prevent="saveType"  wire:loading.attr="disabled" wire:target="saveType">
                        <span wire:loading.remove wire:target="saveType">Enregistrer</span>
                        <span wire:loading wire:target="saveType">
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