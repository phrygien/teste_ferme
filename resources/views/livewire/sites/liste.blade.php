<div class="table-responsive">
    <table class="table custom-table m-0">
        <thead>
            <tr>
                <th>Nom site</th>
                <th>Adresse site</th>
                <th>Status</th>
                <th>Date enregistrement</th>
                <th width="220px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sites as $site)
            <tr>
                <td>{{ $site->site }}</td>
                <td>{{ $site->adresse }}</td>
                <td>
                    @if ($site->actif == 1)
                        <label class="badge bg-success text-white">Actif</label>
                    @else
                        <label class="badge bg-danger text-white">Inactif</label>
                    @endif
                </td>
                <td>{{ $site->created_at->format('M, d y')}}</td>
                <td>
                    <button class="btn btn-info" wire:click="edit({{$site->id }})" wire:click="edit({{ $site->id }})">
                        Modifier
                    </button>
                    <button class="btn btn-danger" wire:click="comfirmerDelete({{$site->id }})">
                        Delete
                    </button>
                </td>
            </tr>         
            @endforeach
        </tbody>
    </table>
</div>
<div class="mb-2 mt-2">
    {{ $sites->links() }}
</div>
@if($recordToDelete)
<div class="position-fixed fixed-top fixed-bottom w-100 h-100 d-flex align-items-center justify-content-center bg-gray-500 bg-opacity-50">
    <div class="alert-notify danger">
        <div class="alert-notify-body">
            <span class="type">Suppression</span>
            <div class="alert-notify-title">Vous etes sure ?<img src="{{ asset('img/notification-danger.svg')}}" alt=""></div>
            <div class="alert-notify-text">Remarque: La suppression sera effectué apres la confirmation</div>
            <p class="text-center">
                <button class="btn btn-white" wire:click="cancelDelete()">Non</button>
                <button class="btn btn-danger" wire:click="delete()">Oui</button>
            </p>
        </div>
    </div>
</div>

@endif