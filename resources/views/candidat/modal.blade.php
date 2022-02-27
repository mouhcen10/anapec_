<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <!--Informations-->
            <div class="d-flex flex-column rounded-0 borded bg-white shadow-sm p-2">
                <div class="rounded-0 mx-2 d-flex justify-content-start align-items-center">
                    <img class="mx-2" src="/storage/images/arrow.png" alt="">
                    <span class="text-grey">Vos Informations personnelles</span>
                </div>
                <div class="d-flex flex-row justify-content-between mt-5">
                    <div class="px-2">
                        <img style="width: 140px;height: 150px" class="mx-4" src="{{ Storage::url($candidate->image->path ?? 'images/avatar.jpg') }}" alt="">
                    </div>
                    <div class="bg-green-light mx-2 w-100 h-100">
                        <ul class="list-group d-flex flex-column">
                            <div class="d-flex flex-row justify-content-between border-b-dashed">
                                <li class="m-2 bg-green-light border-0 d-flex w-50 flex-row justify-content-start align-items-center">
                                    <span class="text-grey small">Email :</span>
                                    <span class="f-90">{{ $candidate->email }}</span>
                                </li>
                                <li class="m-2 bg-green-light border-0 d-flex w-50 flex-row justify-content-start align-items-center">
                                    <span class="text-grey small">GSM :</span>
                                    <span class="f-90">{{ $candidate->gsm_1 }}</span>
                                </li>
                            </div>
                            <div class="d-flex flex-row justify-content-between border-b-dashed">
                                <li class="m-2 bg-green-light border-0 d-flex w-50 flex-row justify-content-start align-items-center">
                                    <span class="text-grey small">Date dernière actualisation :</span>
                                    <span class="f-90">{{ $candidate->updated_at->format('d.m.Y') }}</span>
                                </li>
                                <li class="m-2 bg-green-light border-0 d-flex w-50 flex-row justify-content-start align-items-center">
                                    <span class="text-grey small">Agence rattachement :</span>
                                    <span class="f-90">{{ $candidate->province }}</span>
                                </li>
                            </div>
                            <div class="d-flex flex-row justify-content-between border-b-dashed">
                                <li class="m-2 bg-green-light border-0 d-flex w-50 flex-row justify-content-start align-items-center">
                                    <span class="text-grey small">Statut d'activité :</span>
                                    <span class="f-90">Actif</span>
                                </li>
                                <li class="m-2 bg-green-light border-0 d-flex w-50 flex-row justify-content-start align-items-center">
                                    <span class="text-grey small">Statut d'inscription :</span>
                                    <span class="f-90">Déclaratif</span>
                                </li>
                            </div>
                            <div class="d-flex flex-row justify-content-center border-b-dashed">
                                <li class="m-2 bg-green-light border-0 d-flex w-50 flex-row justify-content-start align-items-center">
                                    <span class="text-grey small">Statut de positionnement :</span>
                                    <span class="f-90">Non positionné</span>
                                </li>
                                <li class="m-2 bg-green-light border-0 d-flex w-50 flex-row justify-content-start align-items-center">
                                    <span class="text-grey small">Statut d'accompagnement :</span>
                                    <span class="f-90">Non accompagné</span>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div><div class="d-flex justify-content-end">
                    <button type="submit" class="btn m-2 nav-bg border-0 btn-sm shadow-xl text-white" data-toggle="modal" data-target="#staticBackdrop">Visualiser votre cv</button>
                    <button type="submit" class="btn m-2 btn-secondary border-0 btn-sm shadow">Actualiser votre cv</button>
                    <button type="submit" class="btn m-2 btn-warning border-0 btn-sm text-white shadow">Actualiser votre situation</button>
                </div>
                @include('candidat.modal')
            </div>
            <!--/Informations-->
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
        </div>
    </div>
    </div>
</div>