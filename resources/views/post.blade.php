@extends('layouts.masterlayout')

@section('title')
    Post
@endsection

@section('content')
    <h2>Post Page</h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores consequatur reprehenderit dicta magnam? Nostrum,
        non. Soluta voluptatem eos doloribus excepturi esse nam, minus dolorem fugit cumque dolorum veritatis repellendus
        ipsa ipsum maiores eius rem nobis qui, pariatur nulla, minima reprehenderit numquam alias praesentium iure! Animi
        atque quo dolores quos doloribus deserunt repudiandae illum nemo repellat a dolorum, quod officia? Rerum sit
        voluptatum vitae? Neque sed aspernatur, eveniet veniam ducimus placeat molestiae earum a, tenetur rem magnam fugit
        accusantium harum quas natus. Minima fugiat quisquam praesentium, quasi expedita laborum delectus obcaecati
        doloribus tempora, harum earum excepturi. Temporibus earum neque cum nihil?</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appened to the master sidebar.</p>
    
@endsection