<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

        <link rel="stylesheet" href="css/adotante.css">
        <title>Novo Adotante</title>


    </head>
    <body>
        <div class="min-h-screen">
            @livewire('navigation-menu')

            <div class="forms">
                <div class="container-adotante">
                    <!-- {{-- Nome Usuario --}} -->
                            <div class="form-group">
                                <label for="Nome_Usuario">
                                    Nome Usuario
                                    <div class="input-field">
                                        <input type="text" name="Nome_Usuario" class="form-control" required>
                                    </div>
                                </label>
                            </div>

                        <!-- {{-- Email --}} -->
                            <div class="form-group">
                                <label for="Email">
                                    Email
                                    <div class="input-field">
                                        <input type="text" name="Email" class="form-control" required>
                                    </div>
                                </label>
                            </div>
                        
                        <!-- {{-- Cidade --}} -->
                            <div class="form-group">
                                <label for="Cidade">
                                    Cidade
                                    <div class="input-field">
                                        <input type="text" name="Cidade" class="form-control" required>
                                    </div>
                                </label>
                            </div>

                        <!-- {{-- Telefone --}} -->
                            <div class="form-group">
                                <label for="Telefone">
                                    Contato
                                    <div class="input-field">
                                        <input type="tel" name="Telefone" class="form-control" required>
                                    </div>
                                </label>
                            </div>

                            <br>

                        <div class="btn">
                            <button type="submit" class="botao">Cadastrar</button>
                        </div>
                    <form>
                </div>

                <div class="container-ong">

                    <!-- {{-- Nome Usuario --}} -->
                            <div class="form-group">
                                <label for="Nome Instituição">
                                    Nome Instituição
                                    <div class="input-field">
                                        <input type="text" name="Nome_Instituição" class="form-control" required>
                                    </div>
                                </label>
                            </div>

                        <!-- {{-- Email --}} -->
                            <div class="form-group">
                                <label for="Email">
                                    Email
                                    <div class="input-field">
                                        <input type="text" name="Email" class="form-control" required>
                                    </div>
                                </label>
                            </div>
                        
                        <!-- {{-- Localização --}} -->
                            <div class="form-group">
                                <label for="Cidade">
                                    Cidade
                                    <div class="input-field">
                                        <input type="text" name="Cidade" class="form-control" required>
                                    </div>
                                </label>
                            </div>

                        <!-- {{-- Telefone --}} -->
                            <div class="form-group">
                                <label for="Telefone">
                                    Contato
                                    <div class="input-field">
                                        <input type="tel" name="Telefone" class="form-control" required>
                                    </div>
                                </label>
                            </div>

                            <br>

                        <div class="btn">
                            <button type="submit" class="botao">Cadastrar</button>
                        </div>
                    <form>
                </div>
            </div>
        
        @livewireScripts
    </body>
</html>
