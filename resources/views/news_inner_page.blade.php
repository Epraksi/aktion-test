@extends('layouts.main')
@section('inner')
<div class="breadcrumbs">
   <div class="container">
      <div class="row">
         <div class="breadcrumbs__title">
            <h5 class="page-title">Новости</h5>
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
                  <div class="breadcrumbs__item"><span class="breadcrumbs__item-target">{{$datas->title}} </span></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="site-content_wrap container">
   <div class="row">
      <div id="primary" class="col-xs-12 col-lg-8 col-lg-push-2">
         <main id="main" class="site-main" role="main">
            <article id="post-2150" style="margin-top: 50px;" class="post-2150 post type-post status-publish format-standard has-post-thumbnail hentry category-electrical tag-design tag-travel has-thumb">
               <!-- .post__left-col -->
               <div class="post__right-col">
                  <header class="entry-header">
                     <h3 class="entry-title">{{$datas->title}}</h3> 
                  </header>
                  <!-- .entry-header -->
                  <figure class="post-thumbnail">
                      <img class="wp-post-image" src="/{{$datas->image}}" alt="{{$datas->title}}"></figure>
                  <!-- .post-thumbnail -->
                  <div class="entry-content" style="margin-top: 50px; margin-bottom: 50px;">
                    {!! $datas->full_description !!}
                  </div>
                  <!-- .entry-content -->
               </div>
               <!-- .post__right-col -->
            </article>
            <!-- #post-## -->
         </main>
         <!-- #main -->
      </div>
      <!-- #primary -->
   </div>
   <!-- .row -->
</div>
@endsection