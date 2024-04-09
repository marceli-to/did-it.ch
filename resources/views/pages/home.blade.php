@extends('app')
@section('content')
<figure>
  <picture class="w-full">
    <source media="(min-width: 768px)" srcset="/media/img/visual-didit.jpg">
    <source srcset="/media/img/visual-didit.jpg">
    <img 
      src="/media/img/visual-didit.jpg" 
      alt="did-it.ch" 
      title="did-it.ch" 
      height="1600" 
      width="1050"
      class="block w-full h-full object-cover">
  </picture>
</figure>
@endsection