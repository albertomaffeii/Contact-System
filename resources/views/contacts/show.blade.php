@extends('layouts.main')

@section('title', $contact->title)

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/contacts/{{ $contact->image }}" alt="{{ $contact->title }}" class="img-fluid">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{ $contact->title }}</h1>
            <p class="contact-city">
                <ion-icon name="location-outline"></ion-icon>
                {{ $contact->city }}
            </p>
            <p class="contact-date">
            <ion-icon name="calendar-outline"></ion-icon>
                {{ date('d/m/Y', strtotime($contact->date)) }} at {{ date('h:m', strtotime($contact->time)) }}
</p>
            <p class="contacts-participants">
                <ion-icon name="people-outline"></ion-icon>
                {{ count($contact->users) }} Participants
            </p>
            <p class="contacts-owner">
                <ion-icon name="star-outline"></ion-icon>
                {{ $contactOwner['name'] }}
            </p>

            @if(!$hasUserJoined)

                <form action="/contacts/join/{{ $contact->id }}" method="POST">
                    @csrf
                    <a href="/contacts/join/{{ $contact->id }}" 
                        class="btn btn-primary" 
                        id="contact-submit" 
                        onclick="contact.prcontactDefault(); 
                            this.closest('form').submit()">
                        Confirmar presença
                    </a> 
                </form>

            @else
                <p class="already-joined-msg">You are already participating in this contact.</p>
            @endif

            <h3>The contact features:</h3>
            <ul id="items-list">
                @foreach($contact->items as $item)

                    <li><ion-icon name="arrow-redo-outline"></ion-icon> <span>{{ $item }}</span><ion-icon name="checkmark-sharp"></ion-icon>

                @endforeach
            </ul>
        </div>   

        <div class="col-md-12" id="description-container">
            <h3>About this contact:</h3>
            <p class="contact-description">{{ $contact->description }}</p>
        </div> 
    </div>
</div>

@endsection