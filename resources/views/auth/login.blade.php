<x-layout>
    <x-slot name="title">Login</x-slot>
    <section class="vh-100 back-login"
    @if ($errors->any())
    <div class="row justify-content-center align-items-center" id="alert">
        <div class=" alert alert-fixed bg-alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
    
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container ">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card mt-5" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Accedi</h2>
                            
                            <form action="{{route('login')}}" method="POST">
                                @csrf
                              
                                
                                <div class="form-outline mb-4">
                                    <input type="email" class="form-control" value="{{old('email')}}" name="email" id="email">
                                    <label class="form-label" for="form3Example3cg">La tua Email</label>
                                </div>
                                
                                <div class="form-outline mb-4">
                                        <input type="password" class="form-control" value="{{old('password')}}" name="password" id="floatingPassword">
                                    <label class="form-label" for="form3Example4cg">Password</label>
                                </div>
                                
                             
                                <div class="d-flex justify-content-center">
                                    <button type="submit"
                                    class="btn-log btn  btn-lg gradient-custom-4">ACCEDI
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

