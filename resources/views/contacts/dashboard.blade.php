@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>My Contacts</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-Contacts-container">
@if(count($contacts) > 0)
    <div id="search-container" class="col-md-12">
        <p></p>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Search contact ...">
        </form>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>                
                <th scope="col" class="action" colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $contact->name }}</td>
                    <td class="action">
                        <a href="/Contacts/edit/{{ $contact->id }}" class="btn btn-info edit-btn btn-sm">
                            <ion-icon name="create-outline"></ion-icon> Editar
                        </a>
                    </td>
                    <td>
                        <form action="/Contacts/{{ $contact->id }}" method="POST" >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn btn-sm">
                                <ion-icon id="trash-outline" name="trash-outline"></ion-icon> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach                
        </tbody>
    </table>
@else
    <p>You have no Contacts yet, <a href="/Contacts/create">Create Contacts</a></p>
@endif

</div>

@endsection