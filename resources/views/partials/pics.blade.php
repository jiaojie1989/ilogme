    <!-- pic -->
    @if ($pics && ! $pics->isEmpty())
    <script type="text/javascript">
        var ar_pic = [{{ implode(',', $pics->pluck('id')->toArray()) }}];
    </script>

    <div id="pics" class="list-group panel-default">
        <span class="list-group-item panel-heading">
            <h3 class="panel-title">实时截屏</h3>
        </span>
        <div class="list-group-item" style="padding: 5px;">
            <div id="myCarousel" class="carousel">
              
               <!-- 轮播（Carousel）项目 -->
                <div class="carousel-inner">
                    @foreach ($pics as $k => $pic)
                    <div class="item{{ $k + 1 === $pics->count() ? ' active' : '' }}">
                        <p class="text-center">{{ ($pics->count()) . ' - ' . ($k + 1) }}</p>
                        <img src="/p/{{ $pic->user_id }}/{{ $pic->id }}" class="lazy">
                        <p class="text-center">{{ $pic->created_at }}</p>
                    </div>
                    @endforeach
               </div>
               <!-- 轮播（Carousel）导航 -->
               <a class="carousel-control left" href="#myCarousel" 
                  data-slide="prev">&lsaquo;</a>
               <a class="carousel-control right" href="#myCarousel" 
                  data-slide="next">&rsaquo;</a>
            </div> 

        </div>
    </div>
    @endif

