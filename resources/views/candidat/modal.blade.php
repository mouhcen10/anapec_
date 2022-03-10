<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header d-flex flex-row justify-content-between nav-bg b-bottom">
                <div class="border rounded my-2 p-1 w-120">
                    <img class="img-fluid w-100 h-100" src="{{ Storage::url($candidate->image->path ?? 'images/avatar.jpg') }}" alt="avatar">
                </div>
                <div class="d-flex flex-column align-items-start px-2 mx-4">
                    <span class="text-white font-weight-bold">{{ $candidate->prenom }} {{ $candidate->nom }}</span>
                    <span class="text-white">{{ $candidate->date_nais }}, {{ $candidate->situation_f }}</span>
                    <span><i class="fa fa-home mr-2"></i>{{ $candidate->adress }},</span>
                    <span>{{ $candidate->province }}</span>
                    <span><i class="fa fa-envelope mr-2"></i>{{ $candidate->email }}</span>
                    <span><i class="fa fa-phone mr-2"></i>{{ $candidate->gsm_1 }}</span>
                </div>
                <a href=""><i class="fa fa-print text-dark"></i></a>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--formations-->
                <div class="d-flex flex-column align-items-start">
                    <h4 class="text-green border-b-dashed">Formations</h4>
                    @foreach($candidate->formations as $formation)
                    <div class="d-flex flex-row justify-content-between align-items-start">
                        <span class="text-info mx-4">{{ $formation->annee_obt }} :</span>
                        <span class="">{{ $formation->diplome }}-{{ $formation->specialite }}</span>
                    </div>
                    @endforeach
                </div>
                <!--/formations-->
                <hr>
                <!--compétences-->
                <div class="d-flex flex-column align-items-start">
                    <h4 class="text-green border-b-dashed">Compétences</h4>
                    <div class="d-flex flex-row justify-content-between my-3">
                        <span class="text-info mx-4">Langues :</span>
                        @foreach($candidate->competences as $competence)
                        <div>
                            <div class="d-flex flex-row justify-content-between">
                                <span class="">{{ $competence->langue_1 }}</span>
                                <span class="mx-2">{{ $competence->niveau_langue_1 }}</span>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <span class="">{{ $competence->langue_2 }}</span>
                                <span class="mx-2">{{ $competence->niveau_langue_2 }}</span>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <span class="">{{ $competence->langue_3 }}</span>
                                <span class="mx-2">{{ $competence->niveau_langue_3 }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--Bureautiques-->
                    <div class="my-3">
                        <span class="text-info mx-4">Bureautiques :</span>
                        @foreach($candidate->competences as $competence)
                            @if($competence->word)
                                <span class="mx-4">Word</span>
                            @endif
                            @if($competence->excel)
                                <span class="mx-4">excel</span>
                            @endif
                            @if($competence->access)
                                <span class="mx-4">access</span>
                            @endif
                            @if($competence->powerpoint)
                                <span class="mx-4">powerpoint</span>
                            @endif
                        @endforeach
                    </div>
                    <!--Comp-Specifiques-->
                    <div class="my-3">
                        <span class="text-info mx-4">Compétences Spécifiques :</span>
                        @foreach($candidate->competences as $competence)
                            <span class="">{{ $competence->comp_specifiques }}</span>
                        @endforeach
                    </div>
                </div>
                <!--/compétences-->
                <hr>
                <!--Experiences-->
                <div class="d-flex flex-column align-items-start my-2">
                    <h4 class="text-green border-b-dashed">Expériences</h4>
                    @foreach($candidate->experiences as $experience)
                    <div class="d-flex flex-row justify-content-between align-items-start">
                        <span class="text-info mx-4">{{ $experience->date_debut }}/{{ $experience->date_fin }} :</span>
                        <span class="">en tant que {{ $experience->intitule_poste }} à </span>
                        <span class="ml-1"> {{ $experience->entreprise }}</span>
                    </div>
                    @endforeach
                </div>
                <!--/Experiences-->
                <hr>
                <!--Activités-->
                <div class="d-flex flex-column align-items-start my-2">
                    <h4 class="text-green border-b-dashed">Activités Extra-professionnelles</h4>
                    @foreach($candidate->activities as $activity)
                    <div class="d-flex flex-row justify-content-between align-items-start">
                        <span class="mx-4">{{ $activity->title }}</span>
                    </div>
                    @endforeach
                </div>
                <!--/Activités-->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-green-light" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>