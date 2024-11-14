@extends('frontend.layout.app')

@section('content')
    
<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" 
style="background-image: url(img/page-header/page-header-about-us.jpg);">
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12 align-self-center p-static order-2 text-center">
            <h1 class="text-9 font-weight-bold">{{ __('site.iletisim')}}</h1>
            <span class="sub-title">Literatür</span>
        </div>
        <div class="col-md-12 align-self-center order-1">
            <ul class="breadcrumb breadcrumb-light d-block text-center">
                <li><a href="{{ route('home')}}">{{ __('site.anasayfa')}}</a></li>
                <li class="active">Literatür</li>
            </ul>
        </div>
    </div>
</div>
</section>


<div class="container py-4">

    <div class="row mb-5">
        
    </div>


   

</div>
@endsection