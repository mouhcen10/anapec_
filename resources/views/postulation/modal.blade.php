<!-- Modal -->
<div class="modal fade" id="postuler" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="postulerLabel" aria-hidden="true">
    <form method="POST" action="{{ route('postulations.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="candidate_id" value="{{ $offre->id }}">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header border d-flex flex-row align-items-center">
                <img src="/storage/images/arrow.png" alt="">
                <h6 class="modal-title mx-1" id="postulerLabel">Postulation à l’offre d’emploi :</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span class="f-90">Mes motivations :</span>
                <textarea class="form-control text-green" name="motivations" cols="20" rows="5"></textarea>
            </div>
            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                <button type="submit" class="btn btn-sm nav-bg text-white">Postuler</button>
            </div>
            </div>
        </div>
    </form>
</div>