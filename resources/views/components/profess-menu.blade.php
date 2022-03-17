<div class="d-flex flex-row justify-content-start align-items-start mt-4">
    <ul class="list-group w-100">
        <?php 
            $professional = Auth::user()->professional;    
        ?>
        <div>
            <a class="nav-link text-grey rounded-0 border-0 bg-blue-light small" href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right text-grey" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
                Gérer vos comptes
            </a>
            <div class="collapse p-2" id="navbarToggleExternalContent">
                <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-blue"></i><a class="nav-link text-grey mx-2  p-0 small" href="{{ route('professionals.edit', ['professional' =>$professional->id]) }}">Modifier Votre Entreprise</a></li>
                <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-blue"></i><a class="nav-link text-grey mx-2  p-0 small" href="{{ route('professionals.edit', ['professional' =>$professional->id]) }}">Modifier Votre Compte Employeur</a></li>
            </div>
        </div>
        <div class="my-1">
            <a class="nav-link text-grey rounded-0 border-0 bg-blue-light small" href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent1" aria-controls="navbarToggleExternalContent1" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right text-grey" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
                Vos offres d’emploi
            </a>
            <div class="collapse p-2" id="navbarToggleExternalContent1">
                <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-blue"></i><a class="nav-link text-grey mx-2  p-0 small" href="{{ route('offres.create') }}">Créer une nouvelle offre</a></li>
                <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-blue"></i><a class="nav-link text-grey mx-2  p-0 small" href="{{ route('profOffres', ['professional' => $professional->id]) }}">Gérer vos offres d'emploi</a></li>
            </div>
        </div>
        <div class="my-1">
            <a class="nav-link text-grey rounded-0 border-0 bg-blue-light small" href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent3" aria-controls="navbarToggleExternalContent3" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right text-grey" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
                Postulations
            </a>
            <div class="collapse p-2" id="navbarToggleExternalContent3">
                <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-blue"></i><a class="nav-link text-grey mx-2  p-0 small" href="{{ route('offres.create') }}">Liste des postulations</a></li>
            </div>
        </div>
    </ul>
</div>