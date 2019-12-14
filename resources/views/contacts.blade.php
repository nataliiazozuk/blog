@extends('layouts.layout')
@section('content')

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Oddelenie pre medzinárodné vzťahy</h1>
    <p class="lead">Tr. A. Hlinku 1</p>
    <p class="lead">949 74 Nitra</p>
  </div>
</div>

<table class="table">
<tr>
<th>Meno a Priezvisko</th>
<th>Email</th>
<th>Telefon</th>
</tr>
@foreach($contacts as $contact)
<tr>
<td>{{$contact->titul1." ".$contact->meno." ".$contact->priezvisko." ".$contact->titul2}}</td>
<td>{{$contact->email}}</td>
<td>{{$contact->telefon}}</td>
</tr>
@endforeach
</table>

<div class="alert alert-dark" role="alert">
<p class="font-weight-bold">Úradné hodiny pre študentov</p>
<p class="font-weight-bolder">pondelok – streda: 8.30 – 11.00 h</p>
</div>


@endsection