<x-layout>
    <div class="container my-5 p-5">
        <div class="row">
            <div class="col-12">

                @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

                <div class="container">
                    <div class="row justify-content-evenly">

                        <h3 class="display-3 text-center my-4 color-text">SCOPRI QUI I NOSTRI ANNUNCI!</h3>

                        @foreach ($articles as $article)
                        <div class="col-3">
                                
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{$article->name}}</h5>
                                    <p class="card-text">{{$article->price}} $</p>
                                    <p class="card-text">{{$article->seller}}</p>
                                    <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                                </div>
                            </div>
                            
                        </div>
                            @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layout>