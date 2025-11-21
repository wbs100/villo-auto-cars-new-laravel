<div class="block-title">
    <div class="block-title__inner section-bg section-bg_second">
        <div class="bg-inner">
            <div class="header-container-padding">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="ui-title-page">
                            @if(isset($title))
                                {{ $title }}
                            @elseif(trim($__env->yieldContent('page-title')))
                                {{ trim($__env->yieldContent('page-title')) }}
                            @else
                                Page Title
                            @endif
                        </h1>
                        <div class="decor-1 center-block"></div>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('home') }}">HOME</a></li>
                            <li class="active">
                                @if(isset($breadcrumb))
                                    {{ $breadcrumb }}
                                @elseif(trim($__env->yieldContent('page-title')))
                                    {{ trim($__env->yieldContent('page-title')) }}
                                @else
                                    Page Title
                                @endif
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Close wrapper and this-top opened in header.blade.php -->
</div> <!-- /#wrapper -->
</div> <!-- /#this-top -->
