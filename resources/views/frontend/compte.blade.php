@extends('frontend.nav')

@section('css')
<style>
    /* Animation fade-up */
    @keyframes fade-up {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .animate-fade-up {
        opacity: 0;
        animation: fade-up 0.8s ease-out forwards;
    }

    .delay-100 { animation-delay: 0.1s; }
    .delay-200 { animation-delay: 0.2s; }

    /* Style pour les inputs */
    input:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(184, 139, 85, 0.1);
        border-color: #b88b55;
    }

    /* Transition douce pour les onglets */
    .tab-transition {
        transition: all 0.3s ease;
    }
</style>
@endsection

@section('content')
<!-- Section Compte -->
<section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#f9f5f0] to-white py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full">

        <!-- En-tête -->
        <div class="text-center mb-12 animate-fade-up">
            <h1 class="text-3xl sm:text-4xl font-luxury text-gray-900 mb-4">
                Mon Compte
            </h1>
            <p class="text-gray-600 font-elegant text-lg">
                Gérez vos commandes et vos informations personnelles
            </p>
        </div>

        <!-- Conteneur des onglets -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden animate-fade-up delay-100">

            <!-- Navigation par onglets -->
            <div class="flex border-b border-gray-200">
                <button id="login-tab"
                        class="flex-1 py-4 text-center font-elegant text-gray-700 hover:text-[#b88b55] tab-transition border-b-2 border-transparent hover:border-[#b88b55] active-tab">
                    Connexion
                </button>
                <button id="register-tab"
                        class="flex-1 py-4 text-center font-elegant text-gray-700 hover:text-[#b88b55] tab-transition border-b-2 border-transparent hover:border-[#b88b55]">
                    Créer un compte
                </button>
            </div>

            <!-- Contenu des onglets -->
            <div class="p-8">

                <!-- Formulaire de connexion (visible par défaut) -->
                <div id="login-form" class="space-y-6">
                    <div>
                        <label for="login-email" class="block text-sm font-elegant text-gray-700 mb-2">
                            Email
                        </label>
                        <input type="email"
                               id="login-email"
                               class="w-full px-4 py-3 border border-gray-200 rounded-lg font-elegant transition-colors duration-300"
                               placeholder="votre@email.com">
                    </div>

                    <div>
                        <label for="login-password" class="block text-sm font-elegant text-gray-700 mb-2">
                            Mot de passe
                        </label>
                        <input type="password"
                               id="login-password"
                               class="w-full px-4 py-3 border border-gray-200 rounded-lg font-elegant transition-colors duration-300"
                               placeholder="Votre mot de passe">
                    </div>

                    <div class="flex items-center justify-between">
                        <label class="flex items-center">
                            <input type="checkbox"
                                   class="w-4 h-4 text-[#b88b55] border-gray-300 rounded focus:ring-[#b88b55]">
                            <span class="ml-2 text-sm font-elegant text-gray-600">Se souvenir de moi</span>
                        </label>

                        <a href="#" class="text-sm font-elegant text-[#b88b55] hover:text-[#a37445] transition-colors duration-300">
                            Mot de passe oublié ?
                        </a>
                    </div>

                    <button id="login-button"
                            class="w-full bg-[#b88b55] text-white py-4 rounded-lg font-elegant text-lg hover:bg-[#a37445] transition-colors duration-300">
                        Se connecter
                    </button>

                    <div class="text-center">
                        <p class="text-sm font-elegant text-gray-600">
                            Pas encore de compte ?
                            <button onclick="showRegister()" class="text-[#b88b55] hover:text-[#a37445] transition-colors duration-300">
                                Créez-en un ici
                            </button>
                        </p>
                    </div>
                </div>

                <!-- Formulaire d'inscription (caché par défaut) -->
                <div id="register-form" class="space-y-6 hidden">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="register-firstname" class="block text-sm font-elegant text-gray-700 mb-2">
                                Prénom
                            </label>
                            <input type="text"
                                   id="register-firstname"
                                   class="w-full px-4 py-3 border border-gray-200 rounded-lg font-elegant transition-colors duration-300"
                                   placeholder="Votre prénom">
                        </div>

                        <div>
                            <label for="register-lastname" class="block text-sm font-elegant text-gray-700 mb-2">
                                Nom
                            </label>
                            <input type="text"
                                   id="register-lastname"
                                   class="w-full px-4 py-3 border border-gray-200 rounded-lg font-elegant transition-colors duration-300"
                                   placeholder="Votre nom">
                        </div>
                    </div>

                    <div>
                        <label for="register-email" class="block text-sm font-elegant text-gray-700 mb-2">
                            Email
                        </label>
                        <input type="email"
                               id="register-email"
                               class="w-full px-4 py-3 border border-gray-200 rounded-lg font-elegant transition-colors duration-300"
                               placeholder="votre@email.com">
                    </div>

                    <div>
                        <label for="register-password" class="block text-sm font-elegant text-gray-700 mb-2">
                            Mot de passe
                        </label>
                        <input type="password"
                               id="register-password"
                               class="w-full px-4 py-3 border border-gray-200 rounded-lg font-elegant transition-colors duration-300"
                               placeholder="Minimum 8 caractères">
                    </div>

                    <div>
                        <label for="register-confirm-password" class="block text-sm font-elegant text-gray-700 mb-2">
                            Confirmer le mot de passe
                        </label>
                        <input type="password"
                               id="register-confirm-password"
                               class="w-full px-4 py-3 border border-gray-200 rounded-lg font-elegant transition-colors duration-300"
                               placeholder="Retapez votre mot de passe">
                    </div>

                    <label class="flex items-start">
                        <input type="checkbox"
                               class="w-4 h-4 mt-1 text-[#b88b55] border-gray-300 rounded focus:ring-[#b88b55]">
                        <span class="ml-2 text-sm font-elegant text-gray-600">
                            J'accepte les
                            <a href="#" class="text-[#b88b55] hover:text-[#a37445] transition-colors duration-300">conditions générales</a>
                            et la
                            <a href="#" class="text-[#b88b55] hover:text-[#a37445] transition-colors duration-300">politique de confidentialité</a>
                        </span>
                    </label>

                    <button id="register-button"
                            class="w-full bg-[#b88b55] text-white py-4 rounded-lg font-elegant text-lg hover:bg-[#a37445] transition-colors duration-300">
                        Créer mon compte
                    </button>

                    <div class="text-center">
                        <p class="text-sm font-elegant text-gray-600">
                            Déjà un compte ?
                            <button onclick="showLogin()" class="text-[#b88b55] hover:text-[#a37445] transition-colors duration-300">
                                Connectez-vous ici
                            </button>
                        </p>
                    </div>
                </div>

            </div>
        </div>



        <!-- Message de succès (caché) -->
        <div id="success-message"
             class="fixed top-4 right-4 bg-green-600 text-white px-6 py-4 rounded-lg shadow-2xl font-elegant transform translate-x-full transition-transform duration-300 z-50 hidden">
            <div class="flex items-center space-x-3">
                <span>✅</span>
                <span id="success-text"></span>
            </div>
        </div>

        <!-- Message d'erreur (caché) -->
        <div id="error-message"
             class="fixed top-4 right-4 bg-red-600 text-white px-6 py-4 rounded-lg shadow-2xl font-elegant transform translate-x-full transition-transform duration-300 z-50 hidden">
            <div class="flex items-center space-x-3">
                <span>⚠️</span>
                <span id="error-text"></span>
            </div>
        </div>

    </div>
</section>
@endsection

@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const loginTab = document.getElementById('login-tab');
        const registerTab = document.getElementById('register-tab');
        const loginForm = document.getElementById('login-form');
        const registerForm = document.getElementById('register-form');
        const loginButton = document.getElementById('login-button');
        const registerButton = document.getElementById('register-button');
        const successMessage = document.getElementById('success-message');
        const errorMessage = document.getElementById('error-message');

        // Gestion des onglets
        function showLogin() {
            loginForm.classList.remove('hidden');
            registerForm.classList.add('hidden');
            loginTab.classList.add('active-tab', 'border-[#b88b55]', 'text-[#b88b55]');
            loginTab.classList.remove('border-transparent', 'text-gray-700');
            registerTab.classList.remove('active-tab', 'border-[#b88b55]', 'text-[#b88b55]');
            registerTab.classList.add('border-transparent', 'text-gray-700');
        }

        function showRegister() {
            loginForm.classList.add('hidden');
            registerForm.classList.remove('hidden');
            registerTab.classList.add('active-tab', 'border-[#b88b55]', 'text-[#b88b55]');
            registerTab.classList.remove('border-transparent', 'text-gray-700');
            loginTab.classList.remove('active-tab', 'border-[#b88b55]', 'text-[#b88b55]');
            loginTab.classList.add('border-transparent', 'text-gray-700');
        }

        // Événements des onglets
        loginTab.addEventListener('click', showLogin);
        registerTab.addEventListener('click', showRegister);

        // Connexion
        loginButton.addEventListener('click', function() {
            const email = document.getElementById('login-email').value.trim();
            const password = document.getElementById('login-password').value.trim();

            // Validation simple
            if (!email || !password) {
                showMessage(errorMessage, "Veuillez remplir tous les champs", "⚠️");
                return;
            }

            // Validation email
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                showMessage(errorMessage, "Veuillez entrer un email valide", "⚠️");
                return;
            }

            // Simulation de connexion (à remplacer par votre logique backend)
            console.log('Connexion avec:', { email, password });

            // Message de succès
            showMessage(successMessage, "Connexion réussie ! Redirection...", "✅");

            // Réinitialiser le formulaire
            document.getElementById('login-email').value = '';
            document.getElementById('login-password').value = '';

            // Redirection simulée
            setTimeout(() => {
                // window.location.href = "/mon-compte/dashboard";
                showMessage(successMessage, "Bienvenue sur votre espace client !", "👋");
            }, 1000);
        });

        // Inscription
        registerButton.addEventListener('click', function() {
            const firstname = document.getElementById('register-firstname').value.trim();
            const lastname = document.getElementById('register-lastname').value.trim();
            const email = document.getElementById('register-email').value.trim();
            const password = document.getElementById('register-password').value.trim();
            const confirmPassword = document.getElementById('register-confirm-password').value.trim();

            // Validation des champs requis
            if (!firstname || !lastname || !email || !password || !confirmPassword) {
                showMessage(errorMessage, "Veuillez remplir tous les champs", "⚠️");
                return;
            }

            // Validation email
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                showMessage(errorMessage, "Veuillez entrer un email valide", "⚠️");
                return;
            }

            // Validation mot de passe
            if (password.length < 8) {
                showMessage(errorMessage, "Le mot de passe doit contenir au moins 8 caractères", "⚠️");
                return;
            }

            // Confirmation mot de passe
            if (password !== confirmPassword) {
                showMessage(errorMessage, "Les mots de passe ne correspondent pas", "⚠️");
                return;
            }

            // Simulation d'inscription (à remplacer par votre logique backend)
            console.log('Inscription avec:', {
                firstname,
                lastname,
                email,
                password
            });

            // Message de succès
            showMessage(successMessage, "Compte créé avec succès !", "🎉");

            // Réinitialiser le formulaire
            document.getElementById('register-firstname').value = '';
            document.getElementById('register-lastname').value = '';
            document.getElementById('register-email').value = '';
            document.getElementById('register-password').value = '';
            document.getElementById('register-confirm-password').value = '';

            // Basculer vers la connexion après 2 secondes
            setTimeout(() => {
                showLogin();
                showMessage(successMessage, "Votre compte a été créé. Vous pouvez maintenant vous connecter.", "✅");
            }, 2000);
        });

        // Fonction pour afficher un message
        function showMessage(messageElement, text, icon = "✅") {
            messageElement.querySelector('span:last-child').textContent = text;
            messageElement.querySelector('span:first-child').textContent = icon;

            messageElement.classList.remove('hidden', 'translate-x-full');
            messageElement.classList.add('flex');

            // Animation d'entrée
            setTimeout(() => {
                messageElement.classList.remove('translate-x-full');
            }, 10);

            // Masquer le message après 5 secondes
            setTimeout(() => {
                messageElement.classList.add('translate-x-full');
                setTimeout(() => {
                    messageElement.classList.add('hidden');
                    messageElement.classList.remove('flex');
                }, 300);
            }, 5000);
        }

        // Validation en temps réel des emails
        const emailInputs = document.querySelectorAll('input[type="email"]');
        emailInputs.forEach(input => {
            input.addEventListener('blur', function() {
                const email = this.value;
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                if (email && !emailPattern.test(email)) {
                    this.classList.add('border-red-500');
                    this.classList.remove('border-gray-200');
                } else {
                    this.classList.remove('border-red-500');
                    this.classList.add('border-gray-200');
                }
            });
        });

        // Validation en temps réel des mots de passe
        const passwordInput = document.getElementById('register-password');
        const confirmPasswordInput = document.getElementById('register-confirm-password');

        function validatePasswords() {
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;

            if (password && confirmPassword && password !== confirmPassword) {
                confirmPasswordInput.classList.add('border-red-500');
                confirmPasswordInput.classList.remove('border-gray-200');
            } else {
                confirmPasswordInput.classList.remove('border-red-500');
                confirmPasswordInput.classList.add('border-gray-200');
            }

            if (password && password.length < 8) {
                passwordInput.classList.add('border-red-500');
                passwordInput.classList.remove('border-gray-200');
            } else {
                passwordInput.classList.remove('border-red-500');
                passwordInput.classList.add('border-gray-200');
            }
        }

        passwordInput.addEventListener('input', validatePasswords);
        confirmPasswordInput.addEventListener('input', validatePasswords);

        // Animation au scroll
        const animatedElements = document.querySelectorAll('.animate-fade-up');
        if (animatedElements.length > 0) {
            const observer = new IntersectionObserver(
                entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.style.animationPlayState = "running";
                            observer.unobserve(entry.target);
                        }
                    });
                },
                { threshold: 0.1 }
            );

            animatedElements.forEach(el => observer.observe(el));
        }

        // Focus sur le premier champ
        document.getElementById('login-email').focus();
    });
</script>
@endsection

@extends('frontend.footer')
