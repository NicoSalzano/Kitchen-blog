<x-layout>
    <section class="vh-100 back-register"
    
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container ">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card mt-4" style="border-radius: 15px;">
                        <div class="card-body p-4">
                            <h2 class="text-uppercase text-center mb-5">Registrati</h2>
                            
                            <form action="{{route('register')}}" method="POST">
                                @csrf
                                <div class="form-outline mb-3">
                                    <input name="name" type="text" id="form3Example1cg" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example1cg">Inserisci il tuo nome</label>
                                </div>
                                
                                <div class="form-outline mb-4">
                                    <input name="email" type="email" id="form3Example3cg" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example3cg">La tua Email</label>
                                </div>
                                
                                <div class="form-outline mb-4">
                                    <input name="password" type="password" id="form3Example4cg" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example4cg">Password</label>
                                </div>
                                
                                <div class="form-outline mb-4">
                                    <input name="password_confirmation" type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example4cdg">Conferma la tua password</label>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit"
                                    class="btn btn-reg btn-lg ">REGISTRATI
                                    </button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</x-layout>