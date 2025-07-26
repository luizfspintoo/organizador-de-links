<x-layout.app>
    <div class="flex h-screen w-screen p-4">
        <!-- Coluna da Imagem -->
        <div class="w-1/2 bg-cover bg-center rounded-xl" style="background-image: url('/images_app/bg-login-register.png');">
        </div>
    
        <!-- Coluna do Formulário -->
        <div class="w-1/2 flex justify-center items-center">
            <div class="w-full max-w-lg px-8">
                <div class="mb-12 flex justify-center">
                    <img src="/images_app/logo.png" alt="Logo">
                </div>
    
                <form action="{{ route('login')}}" method="POST" class="space-y-4">
                    @csrf
                       <h1 class="text-2xl font-bold">
                        Acessar Conta
                        <div class="border-b-3 w-8 border-orange-600 pb-1"></div>
                    </h1>

    
                    <div>
                        <label for="email" class="block text-sm font-semibold">E-mail</label>
                        <input type="text" name="email" placeholder="Digite o email" value="{{ old('email') }}"
                            class="bg-[#110F0E] border-none mt-1 block w-full rounded-xl px-4 py-2">
                        <p class="text-red-500 text-sm mt-1">
                            @if($message = session()->get("loginInvalid")) {{ $message }} @endif  
                            @error('email') {{ $message }} @enderror
                        </p>
                    </div>
    
                    <div>
                        <label for="password" class="block text-sm font-semibold">Senha</label>
                        <input type="password" name="password" id="password" placeholder="Insira sua senha"
                            class="bg-[#110F0E] border-none mt-1 block w-full rounded-xl px-4 py-2">
                        <p class="text-red-500 text-sm mt-1">
                            @error('password') {{ $message }} @enderror
                        </p>
                    </div>
    
                    <div class="text-center">
                        <button type="submit"
                            class="bg-[#ED712E] font-semibold py-2 px-6 rounded-full text-[#0A0908] cursor-pointer">
                            Acessar Conta
                        </button>
                    </div>
                </form>
    
                <div class="mt-6 text-sm text-center">
                    Não tem cadastro? <a href="{{ route('register') }}" class="text-white font-bold">Criar conta</a>
                </div>
            </div>
        </div>
    </div>
</x-layout.app>
