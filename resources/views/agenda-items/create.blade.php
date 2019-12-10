@extends('layouts.default')

@menuitem('Agenda items')

@section('content')

<nav aria-label="breadcrumb" class="main-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('agenda-items.index') }}">Agenda items</a></li>
    <li class="breadcrumb-item active" aria-current="page">Nieuw agenda item</li>
  </ol>
</nav>

<section id="section2" class="col-9">
  <form action="{{ route('agenda-items.store') }}" method="POST">
    @csrf
    <fieldset class="form-fieldset">
      <legend>Creëer nieuw agenda item</legend>
      <div class="form-group">
        <label for="title">Titel</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Titel van het agenda item...">
      </div>
      <div class="form-group">
        <label for="date">Datum</label>
        <input type="text" name="date" class="form-control datepicker" id="date" placeholder="Datum van het item...">
      </div>
      <div class="form-group">
        <label for="contents">Tekst</label>
        <textarea class="form-control" name="contents" id="contents" rows="4" placeholder="Tekst..." spellcheck="false"></textarea>
      </div>
      <button class="btn btn-primary" type="submit">Opslaan</button>
    </fieldset>
  </form>
</section>

<script>
document.addEventListener("DOMContentLoaded", function() {
  flatpickr('#date', {dateFormat: 'd-m-Y'});
});
</script>

@endsection
