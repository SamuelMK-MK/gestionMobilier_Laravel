@extends('welcome')
@section('Contenue')

<section class="vh-100" style="background-color: hsl(0, 100%, 100%);">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;height:100%;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form method="post">
                  @csrf 
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #495479;"></i>
                      <span class="h1 fw-bold mb-0">Enregistrement</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Veuillez fournir qualques informations</h5>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example17">Noms</label>
                        <input type="text" name="name" id="name"
                            class="form-control form-control-lg" />     
                            @error('name')
                            {{$message}} 
                            @enderror                    
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example17">Postnom</label>
                        <input type="text" name="postnom" id="postnom"
                            class="form-control form-control-lg" /> 
                            @error('postnom')
                            {{$message}} 
                            @enderror                         
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example17">Adresse</label>
                        <input type="text" name="adresse" id="adresse"
                            class="form-control form-control-lg" /> 
                            @error('adresse')
                            {{$message}} 
                            @enderror                         
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example17">Téléphone</label>
                        <input type="text" name="telephone" id="telephone"
                            class="form-control form-control-lg" />  
                            @error('telephone')
                            {{$message}} 
                            @enderror                        
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example17">Email address</label>
                        <input type="email" name="email" id="form2Example17"
                            class="form-control form-control-lg" /> 
                            @error('email')
                            {{$message}} 
                            @enderror                         
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example27">Mot de passe</label>
                        <input type="password" name="password" id="form2Example27"
                            class="form-control form-control-lg" /> 
                            @error('password')
                            {{$message}} 
                            @enderror                
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-success btn-lg btn-block" type="submit">Enregistrer</button>
                    </div>

                    <p class="mb-5 pb-lg-2" style="color: #1a2066;">Avez-vous un compte?<a href="#"
                        style="color: #1e267c;">Connectez-vous</a></p>
                    </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection