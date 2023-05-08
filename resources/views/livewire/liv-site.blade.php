<div class="main-container">  
    <!-- Row start -->
    <div class="row gutters">  
@if($notification)
<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
    <div id="notification" wire:transition.fade.out.500ms>
    @if (session()->has('message'))
    <div class="alert-notify success">
        <div class="alert-notify-body">
            <span class="type">{{ __('Succée')}}</span>
            <div class="alert-notify-title">{{ session('message') }}<img src="{{ asset('img/notification-success.svg') }}" alt=""></div>
            <div class="alert-notify-text">How likely are you to recommend Le Rouge Dashboard to your friends?</div>
        </div>
    </div>
    @endif
</div>
<div wire:poll.2s="hideNotification"></div>
</div>
@endif

@if ($createSite)
    @include('livewire.sites.create')
@endif

@if($updateSite)
    @include('livewire.sites.edit')
@endif
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    
    <div class="table-container">
        <div class="t-header">
        @if($createBtn)
        <button class="btn btn-success" wire:click="formCreation">
            Créer site
        </button>
        @else
            Liste site
        @endif
        </div>
        <div class="table-responsive">
            @include('livewire.sites.liste')
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