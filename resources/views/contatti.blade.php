<x-layout>
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-12">

        <form  method="post" action="{{route("contattaci")}}" class="my-5 p-5 shadow rounded " >
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Inserisci la tua mail ">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label" >Nome e Cognome</label>
          <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Nome e Cognome ">
        </div>
        <div class="form-floating my-3">
            <textarea class="form-control" name="message" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Messaggio</label>
          </div>
        <button type="submit" class="btn btn-outline-danger">Contattaci</button>
      </form>
            </div>
        </div>
     </div>
    </x-layout>