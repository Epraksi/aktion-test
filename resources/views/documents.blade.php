@extends('layouts.main')
@section('inner')
<div class="breadcrumbs">
   <div class="container">
      <div class="row">
         <div class="breadcrumbs__title">
            <h5 class="page-title">Документы</h5>
         </div>
         <div class="breadcrumbs__items">
            <div class="breadcrumbs__content">
               <div class="breadcrumbs__browse">Вы здесь:</div>
               <div class="breadcrumbs__wrap">
                  <div class="breadcrumbs__item">
                     <a href="/" class="breadcrumbs__item-link is-home" rel="home" title="Home">Главная</a> 
                  </div>
                  <div class="breadcrumbs__item">
                     <div class="breadcrumbs__item-sep">/</div>
                  </div>
                  <div class="breadcrumbs__item"><span class="breadcrumbs__item-target">Документы</span></div>
               </div>
            </div> 
         </div>
      </div>
   </div>
</div>
<div class="list-group" style="width: 70%; margin: 30px auto;"> 
    @forelse($docs as $doc)
        <a href="/{{$doc->file}}" class="list-group-item list-group-item-action" target="_blank" style="margin-bottom: 10px;">{{$doc->title}}</a> 
    @empty
    @endforelse
</div>

@endsection