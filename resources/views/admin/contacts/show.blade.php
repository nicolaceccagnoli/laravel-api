@extends('layouts.app')

@section('page-title', $contact->name)

@section('main-content')
<section id="contact-show">
    <div class="row g-0">
        <div class="col d-flex justify-content-center">
            <div class="my-card">
                <div class="my-card-body">
                    <h1 class="text-center mb-5">
                        {{ $contact->name }}
                    </h1>
                        
                    <h3 class="mb-3">
                        {{ $contact->mail }}
                    </h3>

                    <p>
                        {{ $contact->message }}
                    </p>

                    <p>
                        Creato il: 
                        <span class="text-success">
                            {{ $contact->created_at->format('d/m/Y') }}
                        </span>
                        <br>
                        Alle: 
                        <span>
                            {{ $contact->created_at->format('H:i')  }}
                        </span>
                    </p>


                    {{-- <div class="edit-buttons-container d-flex flex-column align-items-end">
                        <a href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}" class="edit-button mb-2">
                            <i class="fa-solid fa-pencil"></i>
                        </a> --}}

                        {{-- Bottone di eliminazione che apre una modale --}}
                        {{-- <button class="erase-button" data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{ $project->slug }}">
                            <i class="fa-solid fa-eraser"></i>
                        </button> --}}

                        {{-- Modale per l'eliminazione del progetto --}}
                        {{-- <div class="modal fade" id="staticBackdrop-{{ $project->slug }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                            Eliminazione Progetto
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Sei sicuto di voler eliminare: <b> {{ $project->title }} </b> ?
                                    </div>
                                    <div class="modal-footer">

                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}

                                        {{-- Creiamo il form per l'eliminazione che con l'action reindirizza alla rotta destroy del controller, 
                                        come argomento passo lo slug del singolo progetto--}}
                                        {{-- <form 
                                        action="{{ route('admin.projects.destroy', ['project' => $project->slug]) }}" 
                                        method="POST"> --}}
                                        {{-- 
                                            Cross
                                            Site
                                            Request
                                            Forgery
                                            Genera un input nascosto con un token all'interno per verificare che tutte le richieste
                                            del front-end provengano dal sito stesso e si usa per le richieste in POST
                                        --}}
                                        {{-- @csrf --}}
                                        {{-- Richiamo il metodo DELETE che non può essere inserito nel FORM --}}
                                        {{-- @method('DELETE')
                                            <button 
                                            type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Elimina
                                            </button>
                                        </form>
 --}}
                                    {{-- </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection