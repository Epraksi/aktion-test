@extends('layouts.main')
@section('inner')
<div class="site-content_wrap container"  style="margin-top: 50px; margin-bottom: 50px; ">
   <div class="row">
      <div id="primary" class="col-xs-12">
         <main id="main" class="site-main" role="main">
            <article id="post-857" class="post-857 page type-page status-publish hentry no-thumb">
               <!-- .entry-header -->
               <div class="entry-content">
                  <div class="elementor elementor-857">
                     <div class="elementor-inner">
                        <div class="elementor-section-wrap">
                           <section data-id="rb72ose" class="elementor-element elementor-element-rb72ose elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-element_type="section">
                              <div class="elementor-container elementor-column-gap-default">
                                 <div class="elementor-row">
                                    <div data-id="qcjm9ny" class="elementor-element elementor-element-qcjm9ny elementor-column elementor-col-33 elementor-top-column" data-element_type="column">
                                       <div class="elementor-column-wrap elementor-element-populated">
                                          <div class="elementor-widget-wrap">
                                             <div data-id="gnecr4i" class="elementor-element elementor-element-gnecr4i elementor-widget elementor-widget-spacer" data-element_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-spacer">
                                                      <div class="elementor-spacer-inner"></div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div data-id="tj55fkh" class="elementor-element elementor-element-tj55fkh elementor-widget elementor-widget-heading" data-element_type="heading.default">
                                                <div class="elementor-widget-container" style="margin-bottom: 30px;">
                                                   <h4 class="elementor-heading-title elementor-size-default">Наши контакты</h4>
                                                </div>
                                             </div>
                                             <div data-id="zhb4r0w" class="elementor-element elementor-element-zhb4r0w elementor-widget elementor-widget-spacer" data-element_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-spacer">
                                                      <div class="elementor-spacer-inner"></div>
                                                   </div>
                                                </div>
                                             </div>
                                            @if(isset($datas->address) && count($datas->address) > 0)
                                             <div data-id="ra0oisq" style="margin-bottom: 20px;" class="elementor-element elementor-element-ra0oisq elementor-view-framed elementor-position-left elementor-vertical-align-middle elementor-shape-circle elementor-widget elementor-widget-icon-box" data-element_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-icon-box-wrapper">
                                                      <div class="elementor-icon-box-icon">
                                                         <span class="elementor-icon elementor-animation-">
                                                         <i class="fa fa-map-marker"></i>
                                                         </span>
                                                      </div>
                                                      <div class="elementor-icon-box-content" style="margin-left: 5px;">
                                                         <h6 class="elementor-icon-box-title">
                                                            <span>Адрес:</span>
                                                         </h6>
                                                         <p class="elementor-icon-box-description" style="margin-top: -20px;">{{$datas->address}}</p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             @endif


                                             <div data-id="cic8ki2" class="elementor-element elementor-element-cic8ki2 elementor-widget elementor-widget-spacer" data-element_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-spacer">
                                                      <div class="elementor-spacer-inner"></div>
                                                   </div>
                                                </div>
                                             </div>

                                             @if(isset($datas->phone) && count($datas->phone) > 0)
                                             <div data-id="kq59vjk" style="margin-bottom: 20px;" class="elementor-element elementor-element-kq59vjk elementor-view-framed elementor-position-left elementor-vertical-align-middle elementor-shape-circle elementor-widget elementor-widget-icon-box" data-element_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-icon-box-wrapper">
                                                      <div class="elementor-icon-box-icon">
                                                         <span class="elementor-icon elementor-animation-">
                                                         <i class="fa fa-phone"></i>
                                                         </span>
                                                      </div>
                                                      <div class="elementor-icon-box-content" style="margin-left: 5px;">
                                                         <h6 class="elementor-icon-box-title">
                                                            <span>Телефон:</span>
                                                         </h6>
                                                         <p class="elementor-icon-box-description" style="margin-top: -20px;">{{$datas->phone}}</p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             @endif
                                             <div data-id="v78u974" class="elementor-element elementor-element-v78u974 elementor-widget elementor-widget-spacer" data-element_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-spacer">
                                                      <div class="elementor-spacer-inner"></div>
                                                   </div>
                                                </div>
                                             </div>

                                             @if(isset($datas->fax) && count($datas->fax) > 0)
                                             <div data-id="j6gev5v" style="margin-bottom: 20px;" class="elementor-element elementor-element-j6gev5v elementor-view-framed elementor-position-left elementor-vertical-align-middle elementor-shape-circle elementor-widget elementor-widget-icon-box" data-element_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-icon-box-wrapper">
                                                      <div class="elementor-icon-box-icon">
                                                         <span class="elementor-icon elementor-animation-">
                                                         <i class="fa fa-fax"></i>
                                                         </span>
                                                      </div>
                                                      <div class="elementor-icon-box-content" style="margin-left: 5px;">
                                                         <h6 class="elementor-icon-box-title">
                                                            <span>Факс:</span>
                                                         </h6>
                                                         <p class="elementor-icon-box-description" style="margin-top: -20px;">{{$datas->fax}}</p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             @endif
                                             <div data-id="46muffd" class="elementor-element elementor-element-46muffd elementor-widget elementor-widget-spacer" data-element_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-spacer">
                                                      <div class="elementor-spacer-inner"></div>
                                                   </div>
                                                </div>
                                             </div>

                                             @if(isset($datas->email) && count($datas->email) > 0)
                                             <div data-id="noh15rp" style="margin-bottom: 20px;" class="elementor-element elementor-element-noh15rp elementor-view-framed elementor-position-left elementor-vertical-align-middle elementor-shape-circle elementor-widget elementor-widget-icon-box" data-element_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-icon-box-wrapper">
                                                      <div class="elementor-icon-box-icon">
                                                         <a class="elementor-icon elementor-animation-" href="mailto:{{$datas->email}}">
                                                         <i class="fa fa-envelope" aria-hidden="true"></i>
                                                         </a>
                                                      </div>
                                                      <div class="elementor-icon-box-content" style="margin-left: 5px;">
                                                         <h6 class="elementor-icon-box-title">
                                                            <a href="mailto:{{$datas->email}}">E-mail:</a>
                                                         </h6>
                                                         <p class="elementor-icon-box-description" style="margin-top: -20px;">{{$datas->email}}</p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             @endif
                                             <div data-id="m2gdz42" class="elementor-element elementor-element-m2gdz42 elementor-widget elementor-widget-spacer" data-element_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-spacer">
                                                      <div class="elementor-spacer-inner"></div>
                                                   </div>
                                                </div>
                                             </div>

                                             @if(isset($datas->schedule) && count($datas->schedule) > 0)
                                             <div data-id="xbj1lq2" class="elementor-element elementor-element-xbj1lq2 elementor-view-framed elementor-position-left elementor-vertical-align-middle elementor-shape-circle elementor-widget elementor-widget-icon-box" data-element_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-icon-box-wrapper">
                                                      <div class="elementor-icon-box-icon">
                                                         <span class="elementor-icon elementor-animation-">
                                                         <i class="fa fa-clock-o"></i>
                                                         </span>
                                                      </div>
                                                      <div class="elementor-icon-box-content" style="margin-left: 5px;">
                                                         <h6 class="elementor-icon-box-title">
                                                            <span></span>
                                                         </h6>
                                                         <p class="elementor-icon-box-description" style="margin-top: -20px;">{{$datas->schedule}}</p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                            @endif

                                             <div data-id="r3kwi29" class="elementor-element elementor-element-r3kwi29 elementor-widget elementor-widget-spacer" data-element_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-spacer">
                                                      <div class="elementor-spacer-inner"></div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-id="qmrdlfl" class="elementor-element elementor-element-qmrdlfl elementor-column elementor-col-66 elementor-top-column" data-element_type="column">
                                       <div class="elementor-column-wrap elementor-element-populated">
                                          <div class="elementor-widget-wrap">
                                             <div data-id="ba4r5nm" class="elementor-element elementor-element-ba4r5nm elementor-widget elementor-widget-jet-map" data-element_type="jet-map.default">
                                                <div class="elementor-widget-container">
                                                   <div class="jet-map"  style="position: relative; overflow: hidden; margin-bottom: 30px;">
                                                    @if(isset($datas->map) && count($datas->map) > 0)
                                                            {!! $datas->map !!}
                                                    @endif
                                                   </div>
                                                </div>
                                             </div>
                                             <div data-id="nn73bze" class="elementor-element elementor-element-nn73bze elementor-widget elementor-widget-spacer" data-element_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-spacer">
                                                      <div class="elementor-spacer-inner"></div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div data-id="6gybeq5" class="elementor-element elementor-element-6gybeq5 elementor-widget elementor-widget-spacer" data-element_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-spacer">
                                                      <div class="elementor-spacer-inner"></div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div data-id="k1l535f" class="elementor-element elementor-element-k1l535f elementor-widget elementor-widget-spacer" data-element_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-spacer">
                                                      <div class="elementor-spacer-inner"></div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div data-id="mdwa086" class="elementor-element elementor-element-mdwa086 elementor-widget elementor-widget-heading" data-element_type="heading.default">
                                                <div class="elementor-widget-container">
                                                   <h4 class="elementor-heading-title elementor-size-default" style="margin-bottom: 30px;">Напишите нам</h4>
                                                </div>
                                             </div>
                                             <div data-id="mimekrx" class="elementor-element elementor-element-mimekrx elementor-widget elementor-widget-spacer" data-element_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-spacer">
                                                      <div class="elementor-spacer-inner"></div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div data-id="dx2gb9e" class="elementor-element elementor-element-dx2gb9e elementor-widget elementor-widget-shortcode" data-element_type="shortcode.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-shortcode">
                                                      <div role="form" class="wpcf7" id="wpcf7-f2663-p857-o1" lang="en-US" dir="ltr">
                                                         <div class="screen-reader-response"></div>
                                                         <form class="wpcf7-form contact-form">
                                                            <div class="row">
                                                               <div class="col-xs-12">
                                                                  <p><span class="wpcf7-form-control-wrap your-name">
                                                                     <input type="text" name="name" id="name" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" placeholder="Имя"></span></p>
                                                                  <p><span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" id="email" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" placeholder="Email"></span></p>
                                                                  <p><span class="wpcf7-form-control-wrap your-message"><textarea name="text" cols="40" rows="10" id="text" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" placeholder="Сообщение"></textarea></span></p>
                                                               </div>
                                                            </div>
                                                            <div class="row vertical-center">
                                                               <div class="col-xs-12 submit-button-align-right">
                                                                  <input type="submit" value="Отправить" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span>
                                                               </div>
                                                            </div>
                                                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                                                         </form>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- .entry-content -->
               <footer class="entry-footer">
               </footer>
               <!-- .entry-footer -->
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