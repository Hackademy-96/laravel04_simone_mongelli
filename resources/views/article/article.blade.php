<x-layout>

    <div class="container mt-5 p-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-3 text-center">CREA QUI IL TUO ARTICOLO </h1>
            </div>
            <div class="col-12">
                
                <form method="POST" action="{{route('article_submit')}}" class="shadow rounded p-3">
            
                    @csrf

                    <div class="form-group">
                      <label >Nome Articolo</label>
                      <input name="name" type="text" class="form-control" >
                    </div>
                    <div class="form-group my-2">
                      <label for="exampleInputPassword1">Prezzo</label>
                      <input name="price" type="text" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Produttore</label>
                        <input name="seller" type="text" class="form-control" > 
                      </div>
                      <div class="form-group my-3 " >
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                      </div>
                   <button type="submit" class="btn btn-outline-dark">Aggiungi Articolo</button>
            
                  </form>

            </div>
        </div>
    </div>


</x-layout>