@extends('layouts.admin')
@section('adminContent')
<div class="inline">
    <p class="pemail">Nome</p>
    <p class="pemail">Email</p>
    <p class="pemail">Messaggio</p>
</div>
@foreach ($leads as $lead)


<div class="inline">
    <p class="pemail">{{ $lead->nome }}</p>
    <p class="pemail">{{ $lead->email }}</p>
    <p class="pemail">{{ $lead->messaggio }}</p>
</div>
@endforeach
@endsection
