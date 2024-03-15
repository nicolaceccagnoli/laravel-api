@extends('layouts.app')

@section('page-title', 'Tutti i contatti')

@section('main-content')
    <section id="contacts-index">
        <div class="row g-0">
            @foreach ($contacts as $contact)
                <div class="d-flex justify-content-center col-12 col-xs-6 col-sm-4 col-md-3 mb-3">
                    <div class="my-card m-1">
                        <div class="my-card-body d-flex flex-column justify-content-between h-100">
                            <h3 class="text-center">
                                {{ $contact->name }}
                            </h3>

                            <p>
                                {{ $contact->message }}
                            </p>
            
                            <a href="{{ route('admin.contacts.show', ['contact' => $contact->id]) }}" class="show-button align-self-baseline">
                                Mostra
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection