@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">

            <b-card title="Formulario de Registro" class="my-3">

                @if ($errors->any())
                    <b-alert show variant="danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </b-alert>
                @else                    
                  <b-alert show>
                      Por favor, Llena todos los campos.
                  </b-alert>
                @endif
                <b-form method="POST" action="{{ route('register') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <!-- Nombre de Usuario -->
                        <b-form-group
                            label="Nombre:"
                            label-for="name"
                          >
                            <b-form-input
                              id="name"
                              type="text"
                              name="name"
                              required
                              value="{{ old('name') }}"
                              autofocus
                            ></b-form-input>
                        </b-form-group>
                        
                        <!-- correo electronico -->
                        <b-form-group
                            label="Correo electrónico:"
                            label-for="email"
                            description="Nunca compartiremos tu correo. Está seguro con nosotros"
                          >
                            <b-form-input
                              id="email"
                              type="email"
                              name="email"
                              required
                              value="{{ old('email') }}"
                              
                              placeholder="example@correo.com"
                            ></b-form-input>
                        </b-form-group>
                        
                        <!-- password -->
                        <b-form-group
                            label="Contraseña:"
                            label-for="password"
                          >
                            <b-form-input
                              id="password" 
                              type="password"
                              name="password"
                              required
                            ></b-form-input>
                        </b-form-group>
                        
                        <!-- password_confirmation -->
                        <b-form-group
                            label="Confirmar Contraseña:"
                            label-for="password_confirmation"
                          >
                            <b-form-input
                              id="password_confirmation" 
                              type="password"
                              name="password_confirmation"
                              required>
                              </b-form-input>
                        </b-form-group>
                        
                        
                        <b-button type="submit" variant="primary">
                            Comfirmar registro
                        </b-button>

                        <b-button href="{{ route('login') }}" variant="link">
                            ¿Ya te has registrado?
                        </b-button>                      
                </b-form>

            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
