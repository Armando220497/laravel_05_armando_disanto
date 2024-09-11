<x-layout>

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center height-custom">
            <div class="col-12">


                <section>
                    <div class="container">
                        <h1>Benvenuti da Piante&Co</h1>
                        <p>Le migliori piante per la tua casa e giardino</p>

                    </div>
                </section>



                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
    </div>

</x-layout>
