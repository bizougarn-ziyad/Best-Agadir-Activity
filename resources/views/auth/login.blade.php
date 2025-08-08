<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>
<body class="bg-[#fffaf0]">
    <div class="min-h-screen flex items-center justify-center  px-4">
        <div class="max-w-[1200px] w-full ">
            <!-- Login/Signup Container -->
            <div class="flex flex-col md:flex-row gap-8 items-center justify-center ">
                
                <!-- Left Side - Login Form -->
                <div class="bg-white p-8 w-full max-w-[450px] transition-all duration-300 border border-gray-200 rounded-lg shadow-lg" id="login-form">
                    <div class="text-center mb-8">
                        <h2 class="text-3xl font-bold text-gray-800">Welcome Back!</h2>
                        <p class="text-gray-600 mt-2">Please login to your account</p>
                    </div>

                    <form class="space-y-6">
                        <div>
                            <label class="text-gray-700 text-sm font-semibold">Email Address</label>
                            <input type="email" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-500 transition-colors" placeholder="Enter your email">
                        </div>

                        <div>
                            <label class="text-gray-700 text-sm font-semibold">Password</label>
                            <input type="password" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-500 transition-colors" placeholder="Enter your password">
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input type="checkbox" id="remember" class="w-4 h-4 border-gray-300 rounded focus:ring-orange-500 text-orange-500">
                                <label for="remember" class="ml-2 text-sm text-gray-600">Remember me</label>
                            </div>
                            <a href="#" class="text-sm text-orange-500 hover:text-orange-600">Forgot password?</a>
                        </div>

                        <button class="w-full bg-orange-500 text-white py-3 rounded-lg hover:bg-orange-400 transition duration-300 font-semibold">
                            Sign In
                        </button>
                    </form>

                    <div class="mt-6 text-center">
                        <p class="text-gray-600">Don't have an account? 
                            <a href="#" class="text-orange-500 hover:text-orange-600 font-semibold" id="signUp">Sign up</a>
                        </p>
                    </div>

                    <!-- Social Login Options -->

                    <div class="mt-8 text-center">
                        <p class="text-gray-600 mb-4">Or continue with</p>
                        <div class="flex justify-center space-x-4">
                            <button class="flex items-center px-6 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-300 cursor-pointer">
                                <img src="{{ asset('images/google.png') }}" alt="Google" class="w-5 h-5 mr-2">
                                Google
                            </button>
                            <button class="flex items-center px-6 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-300 cursor-pointer">
                                <img src="{{ asset('images/facebook2.png') }}" alt="Facebook" class="w-6 h-6 mr-2">
                                Facebook
                            </button>
                </div>
            </div>
                </div>

                <!-- Right Side - Sign Up Form -->
                <div class="bg-white p-8 w-full max-w-[450px] transition-all duration-300 hidden mt-5 border border-gray-200 rounded-lg shadow-lg" id="sign-up-form">
                    <div class="text-center mb-8">
                        <h2 class="text-3xl font-bold text-gray-800">Create Account</h2>
                        <p class="text-gray-600 mt-2">Join us for amazing experiences</p>
                    </div>

                    <form class="space-y-6">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="text-gray-700 text-sm font-semibold">First Name</label>
                                <input type="text" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-500 transition-colors" placeholder="First name">
                            </div>
                            <div>
                                <label class="text-gray-700 text-sm font-semibold">Last Name</label>
                                <input type="text" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-500 transition-colors" placeholder="Last name">
                            </div>
                        </div>

                        <div>
                            <label class="text-gray-700 text-sm font-semibold">Email Address</label>
                            <input type="email" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-500 transition-colors" placeholder="Enter your email">
                        </div>

                        <div>
                            <label class="text-gray-700 text-sm font-semibold">Password</label>
                            <input type="password" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-500 transition-colors" placeholder="Create a password">
                        </div>

                        <div>
                            <label class="text-gray-700 text-sm font-semibold">Confirm Password</label>
                            <input type="password" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-500 transition-colors" placeholder="Confirm your password">
                        </div>

                        <button class="w-full bg-orange-500 text-white py-3 rounded-lg hover:bg-orange-400 transition duration-300 font-semibold">
                            Create Account
                        </button>
                    </form>

                    <div class="mt-6 text-center">
                        <p class="text-gray-600">Already have an account? 
                            <a href="#" class="text-orange-500 hover:text-orange-600 font-semibold" id="signIn">Sign in</a>
                        </p>
                    </div>
                </div>

            </div>
            
        </div>
    </div>

@vite(['resources/js/login.js'])
</body>
</html>
