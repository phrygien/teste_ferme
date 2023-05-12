<div class="col-md-12 mb-3">
  <div class="card text-left">

      <div class="card-body">
          <h4 class="card-title mb-3">Raports constat du jour par type oeuf</h4>
          <div class="table-responsive">
              <table class="table table-striped">
                  <thead>
                      <tr>
                          <th scope="col">{{ __('Type oeuf')}}</th>
                          <th scope="col">{{ __('Somme du nombre oeuf')}}</th>
                          <th scope="col" width="149px">{{ __('Total')}}</th>
                      </tr>
                  </thead>
                  <tbody>
                      @forelse ($constatsDuJour as $constat)
                      <tr>
                          <th scope="row">{{ $constat->type }}</th>
                          <th><span class="badge bg-success text-white text-14">{{ $constat->total_nb }} poulets</span></th>
                          <td><span class="badge bg-info text-white text-14">{{ $constat->total_constats }} constat(s)</span></td>
                      </tr>
                      @empty
                          <div class="text-center">
                              <h2>Pas de constat!</h2>
                          </div>
                      @endforelse ()

                  </tbody>
              </table>
          </div>


      </div>
  </div>
</div>
