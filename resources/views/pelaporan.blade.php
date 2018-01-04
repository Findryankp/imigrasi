@extends('master.master')
@section('title') Pelaporan
@stop
@section('head')
    <style>
      #map {
        height: 100vh;
        
      }
      /* Optional: Makes the sample page fill the window. */
      /*html, body 
      {
        height: 100vh;
        width: 100%;
      }*/
     
     #latlng {
        width: 100%;
      }

      [hidden] {
        display: none !important;
        }
    </style>
@stop

@section('content')

@include('map')
   <div class="categories-section main-grid-border" id="mobilew3layouts">
        <div class="container">
            <div class="category-list">
                <div id="parentVerticalTab">
                    <div class="agileits-tab_nav">
                    <ul class="resp-tabs-list hor_1">
                        <li><i class="icon fa fa-mobile" aria-hidden="true"></i>Lapor</li>
                    </ul>
                    </div>
                    <div class="resp-tabs-container hor_1">
                        <!-- tab1 -->
                        <div>
                            <div class="tabs-box">
                 <div class="clearfix"> </div>
                 <div class="tab-grids">
                    <div id="tab1" class="tab-grid">  
                              <div class="login-form">  
                        <form  enctype="multipart/form-data" method="POST" id="signup" action="{{route('pelaporans')}}">
                        {{csrf_field()}}
                        <ol>
                            <li class="text-right">
                                <label>
                                    <i class="icon fa fa-camera fa-2x" style="color:#00CED1;">&nbsp;&nbsp;&nbsp;&nbsp;</i>
                                    <input class="submit" type="file" name="foto" accept="image/*" capture="camera" hidden>
                                </label>
                                <h4 id="camera" class="">Ambil gambar</h4>
                            </li>

                            <li>
                                <h4><i class="icon fa fa-phone-square fa-1x" style="color:#00CED1;"></i>&nbsp;&nbsp;Nomer HP</h4>
                                <input type="number" id="tel" name="noTelp" pattern="\d{10}" placeholder="Nomor HP" required="required" />
                                <p class="validation01">
                                    <span class="invalid">Masukan nomor</span>
                                    <span class="valid">Benar</span>
                                </p>
                            </li>
                            <li>
                                <h4><i class="fa fa-map-marker fa-1x" aria-hidden="true" style="color:#00CED1"></i>&nbsp;&nbsp;Lokasi</h4>
                                <h4 id="lokasi2"></h4>
                                <input type="hidden" id="tel" name="lokasi" placeholder="Lokasi">
                                <div id="ketlokasi">
                                    <input type="text" id="tel" name="ketlok"  placeholder="Keterangan Lokasi" required="required" />
                                </div>
                            </li>

                            <li>
                                <h4><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#00CED1"></i>&nbsp;&nbsp;Keterangan Lokasi</h4>
                                <input type="text" id="tel" name="ketlok"  placeholder="Keterangan Lokasi" required="required" />
                            </li>
                                <h4><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#00CED1"></i>&nbsp;&nbsp;Keterangan</h4>
                                <textarea style="opacity: 0.7;" name="keterangan" class="form-control" rows="3" placeholder="Tulis Keterangan"></textarea>
                                <p class="validation01">
                                    <span class="invalid">Keterangan</span>
                                    <span class="valid">Benar</span>
                                </p>
                            </li>
                            <li>
                                <input style="color: black;" type="submit" class="submit" value="Laporkan" />
                            </li>
                        </ol>
                        </form> 
                                                                                            
                        </div>  

                    </div>
                </div>
            
            <div class="clearfix"> </div>
        </div>

    <!-- script -->
        <script>
            $(document).ready(function() {
                $("#tab2").hide();
                $("#tab3").hide();
                $("#tab4").hide();
                $('#ketlokasi').hide();
                $(".tabs-menu a").click(function(event){
                    event.preventDefault();
                    var tab=$(this).attr("href");
                    $(".tab-grid").not(tab).css("display","none");
                    $(tab).fadeIn("slow");
                });
            });
        </script>
                        
    </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script')
@stop