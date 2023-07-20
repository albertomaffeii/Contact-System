@extends('layouts.main')

@Section('title', 'Contact Management')

@Section('content')

<div id="search-container" class="col-md-12">
    <p></p>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Search contact ...">
    </form>
</div>

<div id="contacts-container" class="col md 12">
    <h1>Contact Management<br>Web application</h1>
<h3>Develop a CRUD Laravel web application to manage contacts</h3>

</div>

@endSection