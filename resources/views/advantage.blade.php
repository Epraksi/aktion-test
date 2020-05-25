@extends('layouts.main')
@section('inner')

<div class="breadcrumbs">
   <div class="container">
      <div class="row">
         <div class="breadcrumbs__title">
            <h5 class="page-title">Продукция</h5>
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
                  <div class="breadcrumbs__item"><span class="breadcrumbs__item-target">{{$adv[0]->title}} </span></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div style="width: 100%; height: 50px;"></div>
<div class="site-content_wrap container">
   <div class="row">
      <div id="primary" class="col-xs-12">
         <main id="main" class="site-main" role="main">
            <div class="posts-list posts-list--grid content-excerpt fullwidth card-deck posts-list--grid-2-cols no-sidebars-before">
               @forelse($items as $item)
                 <article id="post-2150" class="posts-list__item card post-2150 post type-post status-publish format-standard has-post-thumbnail hentry category-electrical tag-design tag-travel has-thumb">
                        <div class="posts-list__right-col">
                            <figure class="post-thumbnail"><a href="#" class="post-thumbnail__link post-thumbnail--fullwidth"><img class="post-thumbnail__img wp-post-image" src="/{{$item->image}}" alt="{{$item->title}}" width="1160" height="508"></a></figure>
                            <!-- .post-thumbnail -->
                            <div class="posts-list__item-content">
                                <header class="entry-header">
                                <h3 class="entry-title"><a href="#" rel="bookmark">{{$item->title}}</a></h3>
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content">
                                <p>{!! $item->description !!}</p>
                                </div>
                                <!-- .entry-content -->
                                <footer class="entry-footer">
                                <div class="entry-meta-container"></div>
                                <!-- .entry-meta-container -->
                                <div class="entry-footer-bottom">
                                    <div class="post__button-wrap"><a href="#" class="post__button btn btn-accent-1" data-toggle="modal" data-target="#order">Заказать</a></div>
                                </div>
                                <!-- .entry-footer-bottom -->
                                </footer>
                                <!-- .entry-footer -->
                            </div>
                            <!-- .posts-list__item-content -->
                        </div>
                        <!-- .posts-list__right-col -->
                 </article>
               @empty
                <p>Раздел не заполнен</p>
               @endforelse

            </div>
         </main>
         <!-- #main -->
      </div>
      <!-- #primary -->
   </div>
   <!-- .row -->
</div>
@endsection