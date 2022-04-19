<!-- Page Header Start -->
<div
    class="container-fluid page-header py-5 mb-5 wow fadeIn"
    data-wow-delay="0.1s"
>
    
    <div class="container py-5">
    <h1 class="display-3 text-white mb-3 animated slideInDown">
        {{ucwords(str_replace("-", " ", last(Request::segments())))}}
    </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item">
                    <a href="/" class="text-white">Home</a>
                </li>
                <?php $link = "" ?>
                @for($i = 1; $i <= count(Request::segments()); $i++) 
                    @if($i < count(Request::segments()) & $i > 0)
                        <?php $link .= "/" . Request::segment($i); ?>
                            <li class="breadcrumb-item">
                                <a
                                    href="<?= $link  ?>"
                                    class="text-white"
                                    >{{ ucwords(str_replace('-',' ',Request::segment($i)))}}</a
                                >
                            </li>
                    @else
                    <li
                        class="breadcrumb-item text-primary active"
                        aria-current="page"
                    >
                        {{ucwords(str_replace('-',' ',Request::segment($i)))}}
                    </li>
                    @endif 
                @endfor
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
