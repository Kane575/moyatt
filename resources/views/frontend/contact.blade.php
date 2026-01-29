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
    .delay-300 { animation-delay: 0.3s; }

    /* Style pour les inputs */
    input:focus, textarea:focus, select:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(184, 139, 85, 0.1);
        border-color: #b88b55;
    }
</style>
@endsection

@section('content')
<!-- Section Contact Unique -->
<section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#f9f5f0] to-white py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl w-full">

        <!-- En-tête -->
        <div class="text-center mb-12 animate-fade-up">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-luxury text-gray-900 mb-4">
                Nous contacter
            </h1>
            <p class="text-gray-600 font-elegant text-lg max-w-2xl mx-auto">
                Une question, un besoin spécifique ? Écrivez-nous, nous vous répondrons avec soin.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-start animate-fade-up delay-100">

            <!-- Formulaire de contact -->
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <div class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-elegant text-gray-700 mb-2">
                            Votre nom
                        </label>
                        <input type="text"
                               id="name"
                               class="w-full px-4 py-3 border border-gray-200 rounded-lg font-elegant transition-colors duration-300"
                               placeholder="Votre nom complet">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-elegant text-gray-700 mb-2">
                            Votre email
                        </label>
                        <input type="email"
                               id="email"
                               class="w-full px-4 py-3 border border-gray-200 rounded-lg font-elegant transition-colors duration-300"
                               placeholder="email@exemple.com">
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-elegant text-gray-700 mb-2">
                            Sujet
                        </label>
                        <select id="subject"
                                class="w-full px-4 py-3 border border-gray-200 rounded-lg font-elegant transition-colors duration-300">
                            <option value="">Sélectionnez un sujet</option>
                            <option value="commande">Question sur une commande</option>
                            <option value="produit">Conseil sur nos produits</option>
                            <option value="retour">Retour ou échange</option>
                            <option value="partenariat">Partenariat ou collaboration</option>
                            <option value="autre">Autre demande</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-elegant text-gray-700 mb-2">
                            Votre message
                        </label>
                        <textarea id="message"
                                  rows="5"
                                  class="w-full px-4 py-3 border border-gray-200 rounded-lg font-elegant transition-colors duration-300 resize-none"
                                  placeholder="Décrivez-nous votre demande..."></textarea>
                    </div>

                    <button id="send-message"
                            class="w-full bg-[#b88b55] text-white py-4 rounded-lg font-elegant text-lg hover:bg-[#a37445] transition-colors duration-300">
                        Envoyer le message
                    </button>

                    <p class="text-sm text-gray-500 text-center font-elegant">
                        Nous vous répondrons dans les 24 à 48 heures.
                    </p>
                </div>
            </div>

            <!-- Informations de contact -->
            <div class="space-y-8 animate-fade-up delay-200">
                <!-- Coordonnées -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h3 class="text-xl font-luxury text-gray-900 mb-6">
                        Nos coordonnées
                    </h3>

                    <div class="space-y-6">
                        <!-- Email -->
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-[#b88b55]/10 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-[#b88b55]">✉️</span>
                            </div>
                            <div>
                                <h4 class="font-luxury text-gray-900 mb-1">Email</h4>
                                <div class="font-elegant text-gray-600">
                                    contact@gmail.com
                                </div>
                            </div>
                        </div>

                        <!-- Téléphone -->
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-[#b88b55]/10 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-[#b88b55]">📱</span>
                            </div>
                            <div>
                                <h4 class="font-luxury text-gray-900 mb-1">Téléphone</h4>
                                <div class="font-elegant text-gray-600">
                                    +223 00 00 00 00
                                </div>
                            </div>
                        </div>

                        <!-- Horaires -->
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-[#b88b55]/10 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-[#b88b55]">🕒</span>
                            </div>
                            <div>
                                <h4 class="font-luxury text-gray-900 mb-1">Horaires d'ouverture</h4>
                                <p class="font-elegant text-gray-600">
                                    Lundi - Vendredi<br>
                                    9h00 - 18h00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Réseaux sociaux -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h3 class="text-xl font-luxury text-gray-900 mb-6">
                        Suivez-nous
                    </h3>

                    <div class="grid grid-cols-3 gap-4">
                        <div class="flex flex-col items-center p-4 border border-gray-100 rounded-xl group cursor-pointer hover:bg-gray-50 transition-colors duration-300">
                            <span class="text-2xl mb-2 group-hover:scale-110 transition-transform duration-300">📸</span>
                            <span class="font-elegant text-sm text-gray-700">Instagram</span>
                        </div>

                        <div class="flex flex-col items-center p-4 border border-gray-100 rounded-xl group cursor-pointer hover:bg-gray-50 transition-colors duration-300">
                            <span class="text-2xl mb-2 group-hover:scale-110 transition-transform duration-300">📘</span>
                            <span class="font-elegant text-sm text-gray-700">Facebook</span>
                        </div>


                    </div>
                </div>

                <!-- FAQ rapide -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h3 class="text-xl font-luxury text-gray-900 mb-4">
                        Questions fréquentes
                    </h3>

                    <div class="space-y-4">
                        <details class="group">
                            <summary class="flex justify-between items-center cursor-pointer list-none font-elegant text-gray-700 hover:text-[#b88b55] transition-colors duration-300">
                                <span>Quels sont les délais de livraison ?</span>
                                <span class="text-[#b88b55] group-open:rotate-180 transition-transform duration-300">▼</span>
                            </summary>
                            {{-- <p class="mt-2 text-sm text-gray-600 font-elegant">
                                Livraison standard : 3-5 jours ouvrés. Express : 1-2 jours ouvrés.
                            </p> --}}
                        </details>

                        <details class="group">
                            <summary class="flex justify-between items-center cursor-pointer list-none font-elegant text-gray-700 hover:text-[#b88b55] transition-colors duration-300">
                                <span>Comment retourner un produit ?</span>
                                <span class="text-[#b88b55] group-open:rotate-180 transition-transform duration-300">▼</span>
                            </summary>
                            {{-- <p class="mt-2 text-sm text-gray-600 font-elegant">
                                Retours acceptés sous 30 jours. Contactez-nous pour un bon de retour.
                            </p> --}}
                        </details>
                    </div>
                </div>
            </div>
        </div>

        <!-- Message de confirmation (caché) -->
        <div id="success-message"
             class="fixed top-4 right-4 bg-green-600 text-white px-6 py-4 rounded-lg shadow-2xl font-elegant transform translate-x-full transition-transform duration-300 z-50 hidden">
            <div class="flex items-center space-x-3">
                <span>✅</span>
                <span>Votre message a été envoyé avec succès !</span>
            </div>
        </div>

        <!-- Message d'erreur (caché) -->
        <div id="error-message"
             class="fixed top-4 right-4 bg-red-600 text-white px-6 py-4 rounded-lg shadow-2xl font-elegant transform translate-x-full transition-transform duration-300 z-50 hidden">
            <div class="flex items-center space-x-3">
                <span>⚠️</span>
                <span>Veuillez remplir tous les champs obligatoires.</span>
            </div>
        </div>

    </div>
</section>
@endsection

@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sendButton = document.getElementById('send-message');
        const successMessage = document.getElementById('success-message');
        const errorMessage = document.getElementById('error-message');

        // Gestion de l'envoi du message (simulation frontend)
        sendButton.addEventListener('click', function() {
            // Récupération des valeurs
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value.trim();

            // Validation simple
            if (!name || !email || !subject || !message) {
                showMessage(errorMessage);
                return;
            }

            // Validation email basique
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                errorMessage.querySelector('span:last-child').textContent = "Veuillez entrer un email valide.";
                showMessage(errorMessage);
                return;
            }

            // Simuler l'envoi (console log pour démonstration)
            console.log('Message envoyé :', { name, email, subject, message });

            // Afficher le message de succès
            showMessage(successMessage);

            // Réinitialiser le formulaire
            document.getElementById('name').value = '';
            document.getElementById('email').value = '';
            document.getElementById('subject').value = '';
            document.getElementById('message').value = '';
        });

        // Fonction pour afficher un message
        function showMessage(messageElement) {
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

        // Animation des icônes réseaux sociaux
        const socialIcons = document.querySelectorAll('.group span.text-2xl');
        socialIcons.forEach(icon => {
            icon.addEventListener('mouseenter', () => {
                icon.style.transform = 'scale(1.1)';
            });
            icon.addEventListener('mouseleave', () => {
                icon.style.transform = 'scale(1)';
            });
        });

        // Validation en temps réel de l'email
        const emailInput = document.getElementById('email');
        emailInput.addEventListener('blur', function() {
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

        // Focus sur le premier champ
        document.getElementById('name').focus();

        // Animation pour les détails (FAQ)
        document.querySelectorAll('details').forEach(detail => {
            detail.addEventListener('toggle', function() {
                if (this.open) {
                    this.style.maxHeight = this.scrollHeight + "px";
                }
            });
        });
    });
</script>
@endsection

@extends('frontend.footer')

