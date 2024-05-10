@extends('layouts.master')

@section('content')
<div class="container">
    

    <div class="row justify-content-center">
        <div class="col-md-10 mt-3 mb-5">
            <div class="d-flex justify-content-between">
                    <a class="btn btn-xs btn-info" href="{{ route('agents.index') }}">
                       Ajouter un agent
                    </a>
                    <a class="btn btn-xs btn-secondary me-2" href="{{ route('agents.listing') }}">
                        Liste des agents
                    </a>
            </div>
            <form method="POST" action="{{ route('agents.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card mb-3 mt-3">
                        <div class="card-header text-center bg-info" >IDENTIFICATION DE L'AGENT </div>
                        <div class="card-body">
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">Identité</label>

                                    <div class="col-md-6">
                                        <select name="identity" id="" class="form-control @error('name') is-invalid @enderror" required autocomplete="identity" autofocus>
                                            <option value="">Veuiller sélectionner un agent</option>
                                            @foreach ($agents as $agent)
                                                <option value="{{ $agent->identity }}">{{ $agent->identity }}</option>
                                            @endforeach
                                        </select>

                                        @error('identity')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="matricule" class="col-md-4 col-form-label text-md-end">Matricule</label>

                                    <div class="col-md-6">
                                        <input id="matricule" type="text" class="form-control @error('matricule') is-invalid @enderror" name="matricule" value="" required autocomplete="matricule">

                                        @error('matricule')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="nom" class="col-md-4 col-form-label text-md-end">Nom</label>

                                    <div class="col-md-6">
                                        <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="" required autocomplete="nom">

                                        @error('nom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="prenom" class="col-md-4 col-form-label text-md-end">Prenom(s)</label>

                                    <div class="col-md-6">
                                        <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="" required autocomplete="prenom">

                                        @error('prenom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="grade" class="col-md-4 col-form-label text-md-end">Grade</label>

                                    <div class="col-md-6">
                                        <input id="grade" type="text" class="form-control @error('grade') is-invalid @enderror" name="grade" value="" required autocomplete="grade">

                                        @error('grade')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>                        
                        </div>
                    
                </div>

                <div class="card">
                    <div class="card-header text-center bg-info">NOTATION </div>
                    <div class="card-body">
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">L'agent a été noté</label>
        
                                <div class="col-md-6 mt-2">
                                    <label for="oui">Oui</label>
                                    <input type="radio" name="notation" class="form-check-input mx-4"  value="1"  id="notation_oui">
                                    <label for="non">Non</label>
                                    <input type="radio" name="notation" class="form-check-input mx-4"   value="0" id="notation_non">
        
                                    @error('')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
        
                            <div class="row mb-3">
                                <label for="annee" class="col-md-4 col-form-label text-md-end">Année concernée</label>
        
                                <div class="col-md-6">
                                    <input id="annee" type="text" class="form-control @error('annee') is-invalid @enderror" name="annee" value="" required autocomplete="annee">
        
                                    @error('annee')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
        
                            <div class="row mb-3">
                                <label for="nom" class="col-md-4 col-form-label text-md-end">Trimestre</label>
        
                                <div class="col-md-6">
                                    <select name="trimestre" id="" class="form-control @error('name') is-invalid @enderror" required autocomplete="trimestre" autofocus>
                                        <option value="">Veuiller sélectionner un Trimestre</option>
                                        <option value="trimestre 1">Trimestre 1</option>
                                        <option value="trimestre 2">Trimestre 2</option>
                                        <option value="trimestre 3">Trimestre 3</option>
                                    </select>
        
                                    @error('trimestre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
        
                            <div class="row mb-3">
                                <label for="absence" class="col-md-4 col-form-label text-md-end">Nombre de jours absence non justifié</label>
        
                                <div class="col-md-6">
                                    <input id="absence" type="number" value="0" class="form-control @error('absence') is-invalid @enderror" name="absence" value="" required autocomplete="absence">
        
                                    @error('absence')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
        
                            <div class="row mb-3">
                                <label for="grade" class="col-md-4 col-form-label text-md-end">Nombre de jours total de travail éffectué</label>
        
                                <div class="col-md-6">
                                    <input id="nb_jour_travail" type="number" value="0" class="form-control @error('nb_jour_travail') is-invalid @enderror" name="nb_jour_travail" value="" required autocomplete="nb_jour_travail">
        
                                    @error('nb_jour_travail')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>   
        
                            <table  class="table">
                                {{-- table-bordered --}}
                                <thead class="bg-info text-white">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Critère de notation</th>
                                        <th scope="col">Note</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="col-3">1</th>
                                        <td class="col-3">Compétence professionnelle</td>
                                        <td class="col-3"><input type="number" id="note1" name="note1"  value="0" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="col-3">2</th>
                                        <td class="col-3">Ponctualité</td>
                                        <td class="col-3"><input type="number" id="note2" name="note2"  value="0" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="col-3">3</th>
                                        <td class="col-3">Assiduité</td>
                                        <td class="col-3"><input type="number" id="note3" name="note3"  value="0" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="col-3">4</th>
                                        <td class="col-3">Respect de la hiérachie</td>
                                        <td class="col-3"><input type="number" id="note4" name="note4"  value="0" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="col-3"></th>
                                        <td class="col-3">Note Total</td>
                                        <td class="col-3">
                                            <strong id="total">0 / 20</strong>
                                            <input type="hidden" id="note_total" name="note_total" value="0">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            
                            <div class="row mb-3">
                                <label for="commentaire" class="col-md-4 col-form-label text-md-end">Appréciations * </label>
        
                                <div class="col-md-6">
                                    <textarea name="appreciation" id="" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
        
                            <div class="row mb-3">
                                <label for="pdf" class="col-md-4 col-form-label text-md-end">Rapport PDF * </label>
        
                                <div class="col-md-6">
                                    <input type="file" name="pdf" id="pdf" class="form-control">
                                </div>
                            </div>
        
                            <div class="row mb-0">
        
                                <div class="col-md-8 offset-md-4  d-flex">
                                    <a href="" class="btn btn-primary mx-2">Retour</a>
                                    <button type="submit" class="btn btn-primary  flex-grow-1" >
                                        {{ __('Enregistrer') }}
                                    </button>
                                </div>   
                            </div>
                    </div>
                </div>
            </form>
        </div>
    </div>    
</div>

<script>

    const note1Field = document.querySelector('#note1');
    const note2Field = document.querySelector('#note2');
    const note3Field = document.querySelector('#note3');
    const note4Field = document.querySelector('#note4');
    const totalField = document.querySelector('#total');
    const noteTotalField = document.querySelector('#note_total');

    function updateTotal() {
        const note1 = Number(note1Field.value) || 0;
        const note2 = Number(note2Field.value) || 0;
        const note3 = Number(note3Field.value) || 0;
        const note4 = Number(note4Field.value) || 0;

        const total = note1 + note2 + note3 + note4;

        totalField.textContent = total + ' / 20';
        noteTotalField.value = total;
    }

    [note1Field, note2Field, note3Field, note4Field].forEach(field => {
        field.addEventListener('input', updateTotal);
    });

    updateTotal();
</script>



@endsection