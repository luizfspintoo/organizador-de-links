<x-layout.app>

    @if($message = session()->get("message"))
    <div class="bg-green-100 text-green-800 text-center py-2">
        {{ $message }}
    </div>
    @endif
    
    <div class="flex h-screen w-screen p-4">
        <!-- Coluna da Imagem -->
        <div class="w-1/2 bg-cover bg-center rounded-xl" style="background-image: url('/images_app/bg-login-register.png');">
        </div>
    
        <!-- Coluna do Formulário -->
        <div class="w-1/2 flex justify-center items-center">
            <div class="w-full max-w-lg px-8">
                <div class="mb-12 flex justify-center">
                    <x-logo></x-logo>
                </div>
    
                <x-form action="{{ route('register') }}" method="POST">
                    <h1 class="text-2xl font-bold">
                        Criar conta
                        <div class="border-b-3 w-8 border-orange-600 pb-1"></div>
                    </h1>


                    <div class="flex space-x-2">
                        <div>
                            <x-label for="name">Nome</x-label>
                            <x-input type="text" name="name" placeholder="Informe seu nome" value="{{ old('name') }}" />
                        </div>
                        <div>
                            <x-label for="surname">Sobrenome</x-label>
                            <x-input type="text" name="surname" placeholder="Informe seu sobrenome" value="{{ old('surname') }}" />
                        </div>
                    </div>

                    <div>
                        <x-label for="email">E-mail</x-label>
                        <x-input type="text" name="email" placeholder="Informe seu email" value="{{ old('email') }}" />

                        @if($message = session('loginInvalid'))
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                        @endif
                    </div>

                    <div>
                        <x-label for="password">Senha</x-label>
                        <x-input type="password" name="password" placeholder="Informe sua senha" />
                    </div>

                    <div class="mt-6 text-center">
                        <x-button-primary type="submit">
                            Criar conta
                        </x-button-primary>
                    </div>
                </x-form>
    
                <div class="mt-6 text-sm text-center">
                    Já tem cadastro? <a href="{{ route('login') }}" class="text-white font-bold">Acessar conta</a>
                </div>
            </div>
        </div>
    </div>
</x-layout.app>
