<x-ferme-layout>
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <div class="breadcrumb">
        <h1 class="mr-2">Version 1</h1>
        <ul>
            <li><a href="">Dashboard</a></li>
            <li>Version 1</li>
        </ul>
    </div>

    <div class="separator-breadcrumb border-top"></div>

    <div class="row">
        <!-- ICON BG -->
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center">
                    <i class="i-Globe"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">{{ __('Sites') }}</p>
                        <p class="text-primary text-24 line-height-1 mb-2">20</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center">
                    <i class="i-Home1"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">{{ __('Batiments')}}</p>
                        <p class="text-primary text-24 line-height-1 mb-2">150</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center">
                    <i class="i-Computer-2"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">{{ __('Cycles')}}</p>
                        <p class="text-primary text-24 line-height-1 mb-2">80</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center">
                    <i class="i-Money-2"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">{{ __('Depenses')}}</p>
                        <p class="text-primary text-24 line-height-1 mb-2">Ar.1200</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
</x-ferme-layout>