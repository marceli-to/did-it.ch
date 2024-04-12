@extends('app')
@section('content')
<figure class="lg:px-96 2xl:px-124">
  <picture class="w-full">
    <source media="(min-width: 768px)" srcset="/media/img/visual-didit.jpg">
    <source srcset="/media/img/visual-didit.jpg">
    <img 
      src="/media/img/visual-didit.jpg" 
      alt="did-it.ch" 
      title="did-it.ch" 
      height="1600" 
      width="1050"
      class="block w-full h-full aspect-square sm:aspect-[4/3] lg:aspect-[16/10] object-cover">
  </picture>
</figure>
@endsection