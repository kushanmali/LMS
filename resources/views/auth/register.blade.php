
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('/asset/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('/asset/css/style.css')}}">
</head>
<body>
    

  

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        
                        <form method="POST" action="{{ route('register') }}" class="register-form" id="register-form">
                            @csrf

                            @if($errors->any())
                            <div class="bg-red-300 text-white rounded-3 p-6 my-5">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            </div>
                              @endif

                              <div class="form-group">
                                <!-- Name -->
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            
                            <div class="form-group">
                                <!-- Email -->
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            
                            <div class="form-group">
                                <!-- Phone Number -->
                                <label for="phone_number"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="phone_number" id="phone_number" placeholder="Your Phone Number"/>
                            </div>
                            
                            <div class="form-group">
                                <!-- Password -->
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            
                            <div class="form-group">
                                <!-- Repeat Password -->
                                <label for="password_confirmation"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password"/>
                            </div>
                            
                            <div class="form-group">
                                <!-- Birthday -->
                                <label for="birthday"><i class="zmdi zmdi-calendar"></i></label>
                                <input type="date" name="birthday" id="birthday" placeholder="Your Birthday"/>
                            </div>
                            
                            <div class="form-group">
                                <!-- Address -->
                                <label for="address"><i class="zmdi zmdi-pin"></i></label>
                                <input type="text" name="address" id="address" placeholder="Your Address"/>
                            </div>
                            
                            <div class="form-group">
                                <!-- National ID Number -->
                                <label for="national_id_number"><i class="zmdi zmdi-card"></i></label>
                                <input type="text" name="national_id_number" id="national_id_number" placeholder="National ID Number"/>
                            </div>
                            
                            <div class="form-group">
                                <!-- Year -->
                                <label for="al_year"><i class="zmdi zmdi-calendar-check"></i></label>
                                <input type="number" name="al_year" id="al_year" placeholder="AL year"/>
                            </div>

                        
                            
                            
                            {{-- <div class="form-group">
                                <!-- Agree to Terms -->
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div> --}}

                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                                <a class= href = "{{ route('login') }}">
                                   
                                </a>

                             
                                
                            </div>
                            
                            
                        </form>

                    </div>
                    <div class="signup-image">
                        <figure><img src="{{asset('/asset/images/signup-image.jpg')}}" alt="sing up image"></figure>
                        <a href="{{ route('login') }}" class="signup-image-link">I am already member</a>
                    </div>
                   
                </div>
            </div>
        </section>

        
        

    </div>


    

    <!-- JS -->
    <script src="{{asset('/asset/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/asset/js/main.js')}}"></script>
</body>
</html>




{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf


         @if($errors->any())
        <div class="bg-red-300 text-white rounded-3 p-6 my-5">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
          @endif

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for=" " :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Student Fields -->
        <div class="mt-4">
            <x-input-label for="first_name" :value="__('First Name')" />
            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autocomplete="given-name" />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="last_name" :value="__('Last Name')" />
            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autocomplete="family-name" />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="birthday" :value="__('Birthday')" />
            <x-text-input id="birthday" class="block mt-1 w-full" type="date" name="birthday" :value="old('birthday')" required />
            <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="al_year" :value="__('A/L Year')" />
            <x-text-input id="al_year" class="block mt-1 w-full" type="number" name="al_year" :value="old('al_year')" required />
            <x-input-error :messages="$errors->get('al_year')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="phone_number" :value="__('Phone Number')" />
            <x-text-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" :value="old('phone_number')" required autocomplete="tel" />
            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="national_id_number" :value="__('ID Number')" />
            <x-text-input id="national_id_number" class="block mt-1 w-full" type="text" name="national_id_number" :value="old('national_id_number')" required />
            <x-input-error :messages="$errors->get('national_id_number')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Register Button -->
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>  --}}