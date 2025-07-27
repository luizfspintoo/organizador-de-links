<x-layout.app>
    <div class="flex h-screen w-screen p-4">
        <!-- Coluna da Imagem -->
        <div class="w-1/2 bg-cover bg-center rounded-xl"
            style="background-image: url('/images_app/bg-login-register.png');">
        </div>

        <!-- Coluna do Formulário -->
        <div class="w-1/2 flex justify-center items-center">
            <div class="w-full max-w-lg px-8">
                <div class="mb-12 flex justify-center">
                    <x-logo></x-logo>
                </div>

                <x-form action="{{ route('login') }}" method="POST">
                    <h1 class="text-2xl font-bold">
                        Acessar conta
                        <div class="border-b-3 w-8 border-orange-600 pb-1"></div>
                    </h1>


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
                            Acessar conta
                        </x-button-primary>
                    </div>
                </x-form>


                <div class="mt-6 text-sm text-center">
                    Não tem cadastro? <a href="{{ route('register') }}" class="text-white font-bold">Criar conta</a>
                </div>
            </div>
        </div>
    </div>
</x-layout.app>