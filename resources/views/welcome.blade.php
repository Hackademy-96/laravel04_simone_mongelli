<x-layout>
    <div class="container my-5 p-5">
        <div class="row">
            <div class="col-12">

                @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            </div>
        </div>
    </div>
</x-layout>