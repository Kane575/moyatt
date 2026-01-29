@extends('frontend.nav')

@section('css')
<style>
    /* Animations de base */
    @keyframes fade-up {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes slide-left {
        from { opacity: 0; transform: translateX(40px); }
        to { opacity: 1; transform: translateX(0); }
    }

    @keyframes zoom-soft {
        from { opacity: 0; transform: scale(0.96); }
        to { opacity: 1; transform: scale(1); }
    }

    /* Classes utilitaires */
    .animate-fade-up { opacity: 0; animation: fade-up 0.8s ease-out forwards; }
    .animate-slide-left { opacity: 0; animation: slide-left 0.8s ease-out forwards; }
    .animate-zoom-soft { opacity: 0; animation: zoom-soft 0.6s ease-out forwards; }

    /* Délais */
    .delay-100 { animation-delay: 0.1s; }
    .delay-200 { animation-delay: 0.2s; }
    .delay-300 { animation-delay: 0.3s; }

    /* Style pour les inputs nombre */
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type="number"] {
        -moz-appearance: textfield;
    }

    /* Scroll personnalisé */
    .scrollbar-thin::-webkit-scrollbar {
        width: 6px;
    }

    .scrollbar-thin::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }

    .scrollbar-thin::-webkit-scrollbar-thumb {
        background: #b88b55;
        border-radius: 10px;
    }

    /* Transitions */
    .transition-all-300 {
        transition: all 0.3s ease;
    }
</style>
@endsection

@section('content')
<!-- Hero Section Panier -->
<section class="relative bg-gradient-to-br from-[#f9f5f0] to-[#fffaf5] py-16 md:py-24 overflow-hidden">
    <!-- Découpe en bas -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-12 md:h-20" viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0,40 C480,0 960,80 1440,40 L1440,80 L0,80 Z" fill="white"/>
        </svg>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center animate-fade-up">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-luxury text-gray-900 mb-4">
                Votre Panier
            </h1>
            <p class="text-gray-600 font-elegant text-lg max-w-2xl mx-auto">
                Revoyez vos produits préférés et finalisez votre commande en toute sérénité
            </p>

            <!-- Étape de commande -->
            <div class="flex justify-center mt-8 space-x-2 md:space-x-6">
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-[#b88b55] text-white flex items-center justify-center font-luxury mb-2 animate-zoom-soft">
                        1
                    </div>
                    <span class="text-sm font-elegant text-gray-700">Panier</span>
                </div>

                <div class="flex items-center">
                    <div class="w-12 h-px bg-gray-300"></div>
                </div>

                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center font-luxury mb-2">
                        2
                    </div>
                    <span class="text-sm font-elegant text-gray-500">Paiement</span>
                </div>

                <div class="flex items-center">
                    <div class="w-12 h-px bg-gray-300"></div>
                </div>

                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center font-luxury mb-2">
                        3
                    </div>
                    <span class="text-sm font-elegant text-gray-500">Livraison</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Panier -->
<section class="py-12 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-3 gap-8 lg:gap-12">
            <!-- Colonne gauche : Produits -->
            <div class="lg:col-span-2">
                <!-- En-tête -->
                <div class="mb-8 pb-4 border-b border-gray-200 animate-fade-up">
                    <h2 class="text-2xl font-luxury text-gray-900 mb-2">
                        Vos articles (<span id="cart-items-count">0</span>)
                    </h2>
                    <p class="text-gray-600 font-elegant text-sm">
                        Vous pouvez modifier les quantités ou retirer des articles
                    </p>
                </div>

                <!-- Liste des produits -->
                <div id="cart-products-container" class="space-y-6">
                    <!-- Les produits seront chargés ici -->
                    <div id="empty-cart-message" class="text-center py-16 animate-fade-up">
                        <div class="text-5xl mb-6 text-gray-300">🛒</div>
                        <h3 class="text-xl font-luxury text-gray-900 mb-4">Votre panier est vide</h3>
                        <p class="text-gray-600 font-elegant mb-8 max-w-md mx-auto">
                            Découvrez nos collections naturelles et raffinées pour sublimer votre peau et vos cheveux
                        </p>
                        <a href="/collections"
                           class="inline-block bg-[#b88b55] text-white px-8 py-3 rounded-lg font-elegant hover:bg-[#a37445] transition-colors duration-300">
                            Découvrir nos collections
                        </a>
                    </div>
                </div>
            </div>

            <!-- Colonne droite : Récapitulatif -->
            <div class="lg:col-span-1">
                <div class="sticky top-8">
                    <div class="bg-[#fefcf7] border border-gray-100 rounded-2xl shadow-lg p-6 animate-slide-left">
                        <h3 class="text-xl font-luxury text-gray-900 mb-6 pb-4 border-b border-gray-200">
                            Récapitulatif de commande
                        </h3>

                        <!-- Détails du prix -->
                        <div class="space-y-4 mb-6">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600 font-elegant">Sous-total</span>
                                <span id="subtotal-price" class="font-luxury text-gray-900">0,00fcfa</span>
                            </div>

                            <div class="flex justify-between items-center">
                                <span class="text-gray-600 font-elegant">Livraison</span>
                                <span id="shipping-price" class="font-luxury text-gray-900">-</span>
                            </div>

                            <div class="pt-4 border-t border-gray-200">
                                <div class="flex justify-between items-center">
                                    <span class="font-luxury text-gray-900">Total TTC</span>
                                    <span id="total-price" class="font-luxury text-2xl text-gray-900">0,00fcfa</span>
                                </div>
                                <p class="text-sm text-gray-500 font-elegant mt-1">
                                    Dont TVA : <span id="vat-price">0,00fcfa</span>
                                </p>
                            </div>
                        </div>

                        <!-- Options de livraison -->
                        <div class="mb-6">
                            <h4 class="font-luxury text-gray-900 mb-3">Livraison</h4>
                            <div class="space-y-3">
                                {{-- <label class="flex items-center justify-between p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50 transition-all-300">
                                    <div class="flex items-center space-x-3">
                                        <input type="radio" name="shipping" value="standard" checked class="text-[#b88b55]">
                                        <div>
                                            <span class="font-elegant text-gray-900">Livraison standard</span>
                                            <p class="text-xs text-gray-500">5-7 jours ouvrés</p>
                                        </div>
                                    </div>
                                    <span class="font-luxury text-gray-900">4,99fcfa</span>
                                </label>

                                <label class="flex items-center justify-between p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50 transition-all-300">
                                    <div class="flex items-center space-x-3">
                                        <input type="radio" name="shipping" value="express" class="text-[#b88b55]">
                                        <div>
                                            <span class="font-elegant text-gray-900">Livraison express</span>
                                            <p class="text-xs text-gray-500">2-3 jours ouvrés</p>
                                        </div>
                                    </div>
                                    <span class="font-luxury text-gray-900">9,99fcfa</span>
                                </label> --}}
                            </div>
                        </div>

                        <!-- Bouton de validation -->
                        <button id="checkout-button"
                                class="w-full bg-[#b88b55] text-white py-4 rounded-lg font-elegant text-lg hover:bg-[#a37445] transition-colors duration-300 shadow-lg hover:shadow-xl disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:bg-[#b88b55] hidden">
                            Passer la commande
                        </button>

                        <!-- Sécurité -->
                        <div class="mt-6 pt-6 border-t border-gray-200 text-center">
                            <div class="flex justify-center space-x-4 text-gray-400 mb-3">
                                <span>🔒</span>
                                <span>💳</span>
                                <span>📦</span>
                            </div>
                            <p class="text-xs text-gray-500 font-elegant">
                                Paiement 100% sécurisé • Livraison garantie • Retours sous 30 jours
                            </p>
                        </div>

                        <!-- Lien pour continuer les achats -->
                        <div class="mt-6 text-center">
                            <a href="/collection"
                               class="inline-flex items-center text-[#b88b55] font-elegant hover:text-[#a37445] transition-colors duration-300">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                                </svg>
                                Continuer mes achats
                            </a>
                        </div>
                    </div>

                    <!-- Assistance -->
                    <div class="mt-6 bg-gray-50 rounded-2xl p-6 animate-fade-up delay-300">
                        <h4 class="font-luxury text-gray-900 mb-3">Besoin d'aide ?</h4>
                        <p class="text-sm text-gray-600 font-elegant mb-4">
                            Notre équipe est là pour vous accompagner dans votre choix.
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-center text-gray-700">
                                <span class="mr-3">✉️</span>
                                <span class="font-elegant">contact@moyatt-zim.com</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <span class="mr-3">📞</span>
                                <span class="font-elegant">+223 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Avantages -->
<section class="bg-[#f9f5f0] py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center animate-fade-up delay-100">
                <div class="text-3xl mb-4">🚚</div>
                <h4 class="font-luxury text-gray-900 mb-2">Livraison rapide</h4>
                <p class="text-gray-600 font-elegant text-sm">
                    Expédition sous 24h • Suivi en temps réel
                </p>
            </div>

            <div class="text-center animate-fade-up delay-200">
                <div class="text-3xl mb-4">💚</div>
                <h4 class="font-luxury text-gray-900 mb-2">Produits naturels</h4>
                <p class="text-gray-600 font-elegant text-sm">
                    Formulés avec des ingrédients naturels et bienfaisants
                </p>
            </div>

            <div class="text-center animate-fade-up delay-300">
                <div class="text-3xl mb-4">🔄</div>
                <h4 class="font-luxury text-gray-900 mb-2">Satisfait ou remboursé</h4>
                <p class="text-gray-600 font-elegant text-sm">
                    30 jours pour changer d'avis • Retours faciles
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Modal confirmation suppression -->
<div id="delete-modal" class="fixed inset-0 bg-black/50 z-50 hidden items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-md w-full p-6 transform transition-all duration-300 scale-95 opacity-0" id="delete-modal-content">
        <h3 class="text-xl font-luxury text-gray-900 mb-4">Supprimer l'article</h3>
        <p class="text-gray-600 font-elegant mb-6">
            Êtes-vous sûr de vouloir retirer cet article de votre panier ?
        </p>
        <div class="flex space-x-3">
            <button id="cancel-delete" class="flex-1 border border-gray-300 text-gray-700 py-3 rounded-lg font-elegant hover:bg-gray-50 transition-colors duration-300">
                Annuler
            </button>
            <button id="confirm-delete" class="flex-1 bg-red-600 text-white py-3 rounded-lg font-elegant hover:bg-red-700 transition-colors duration-300">
                Supprimer
            </button>
        </div>
    </div>
</div>

<!-- Notification -->
<div id="notification" class="fixed top-4 right-4 bg-[#b88b55] text-white px-6 py-4 rounded-lg shadow-2xl font-elegant transform translate-x-full transition-transform duration-300 z-50">
    <div class="flex items-center space-x-3">
        <span id="notification-icon">✅</span>
        <span id="notification-message"></span>
    </div>
</div>
@endsection

@section('js')
<script>
    // Données de produits (simulées)
    const products = {
        1: { id: 1, name: "Gommage Miel & Amande", description: "Exfoliant doux au miel et poudre d'amande", price: 24.99, image: "/image/num.png", category: "gommages" },
        2: { id: 2, name: "Gommage Café & Cacao", description: "Gommage énergisant au café et cacao bio", price: 26.50, image: "/image/num1.png", category: "gommages" },
        3: { id: 3, name: "Gommage Sucre Vanillé", description: "Exfoliant sucré à la vanille de Madagascar", price: 22.99, image: "/image/num.png", category: "gommages" },
        4: { id: 4, name: "Gommage Fleur d'Oranger", description: "Gommage délicat parfumé fleur d'oranger", price: 27.99, image: "/image/num1.png", category: "gommages" },
        5: { id: 5, name: "Gommage Sel Marin", description: "Exfoliant purifiant au sel marin et algues", price: 29.99, image: "/image/num.png", category: "gommages" },
        6: { id: 6, name: "Gommage Noix de Coco", description: "Gommage nourrissant à la noix de coco", price: 25.50, image: "/image/num1.png", category: "gommages" },
        7: { id: 7, name: "Shampoing Doux Argan", description: "Shampoing naturel à l'huile d'argan", price: 18.99, image: "/image/capillaire.png", category: "capillaires" },
        8: { id: 8, name: "Après-shampoing Karité", description: "Après-shampoing nourrissant au beurre de karité", price: 21.99, image: "/image/capillaire.png", category: "capillaires" },
        9: { id: 9, name: "Masque Réparateur Intense", description: "Masque intense réparation aux huiles essentielles", price: 32.99, image: "/image/capillaire.png", category: "capillaires" },
        10: { id: 10, name: "Huile Capillaire Brillance", description: "Huile légère pour pointes et brillance", price: 28.50, image: "/image/capillaire.png", category: "capillaires" },
        13: { id: 13, name: "Nettoyant Doux Rose", description: "Nettoyant visage à l'eau florale de rose", price: 19.99, image: "/image/routine.png", category: "visage" },
        14: { id: 14, name: "Sérum Éclat Vitaminé", description: "Sérum vitaminé pour un teint lumineux", price: 34.99, image: "/image/routine.png", category: "visage" },
        15: { id: 15, name: "Crème Hydratante Intense", description: "Crème jour/nuit hydratation intense", price: 29.99, image: "/image/routine.png", category: "visage" },
        16: { id: 16, name: "Masque Détente Argile", description: "Masque visage argile verte et menthe", price: 24.50, image: "/image/routine.png", category: "visage" },
        19: { id: 19, name: "Savon Lavande de Provence", description: "Savon surgras à la lavande de Provence", price: 8.99, image: "/image/surgras.png", category: "savons" },
        20: { id: 20, name: "Savon Citron Menthe", description: "Savon tonifiant au citron et menthe", price: 8.50, image: "/image/surgras.png", category: "savons" },
        21: { id: 21, name: "Savon Lait d'Ânesse Bio", description: "Savon nourrissant au lait d'ânesse", price: 12.99, image: "/image/surgras.png", category: "savons" },
        22: { id: 22, name: "Savon Chocolat Vanille", description: "Savon gourmand au cacao et vanille", price: 9.99, image: "/image/surgras.png", category: "savons" }
    };

    // Variables globales
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let currentDeleteId = null;

    // Initialisation
    document.addEventListener('DOMContentLoaded', function() {
        loadCart();
        setupEventListeners();
        updateCartDisplay();
    });

    // Charger le panier depuis localStorage
    function loadCart() {
        const savedCart = JSON.parse(localStorage.getItem('cart')) || [];
        cart = savedCart.map(item => {
            return {
                ...item,
                product: products[item.id] || { name: "Produit inconnu", price: 0, image: "" }
            };
        });
    }

    // Sauvegarder le panier dans localStorage
    function saveCart() {
        const cartToSave = cart.map(item => ({
            id: item.id,
            quantity: item.quantity
        }));
        localStorage.setItem('cart', JSON.stringify(cartToSave));
    }

    // Mettre à jour l'affichage du panier
    function updateCartDisplay() {
        const container = document.getElementById('cart-products-container');
        const emptyMessage = document.getElementById('empty-cart-message');
        const checkoutButton = document.getElementById('checkout-button');
        const itemsCount = document.getElementById('cart-items-count');

        // Mettre à jour le compteur
        const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
        itemsCount.textContent = totalItems;

        // Vider le conteneur
        container.innerHTML = '';

        if (cart.length === 0) {
            // Afficher le message panier vide
            emptyMessage.classList.remove('hidden');
            checkoutButton.classList.add('hidden');

            // Réinitialiser les totaux
            updateTotals();
            return;
        }

        // Cacher le message panier vide
        emptyMessage.classList.add('hidden');
        checkoutButton.classList.remove('hidden');

        // Afficher chaque produit
        cart.forEach((item, index) => {
            const product = products[item.id] || item.product;
            const total = product.price * item.quantity;

            const productElement = document.createElement('div');
            productElement.className = `flex flex-col sm:flex-row bg-white border border-gray-100 rounded-2xl p-6 shadow-sm hover:shadow-md transition-all duration-300 animate-fade-up delay-${Math.min(index * 100, 300)}`;
            productElement.innerHTML = `
                <!-- Image produit -->
                <div class="flex-shrink-0 mb-4 sm:mb-0 sm:mr-6">
                    <div class="w-24 h-24 md:w-32 md:h-32 rounded-xl overflow-hidden">
                        <img src="${product.image}"
                             alt="${product.name}"
                             class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Infos produit -->
                <div class="flex-1">
                    <div class="flex flex-col md:flex-row md:items-start md:justify-between">
                        <div class="mb-4 md:mb-0">
                            <h4 class="font-luxury text-lg text-gray-900 mb-2">${product.name}</h4>
                            <p class="text-gray-600 font-elegant text-sm mb-4">${product.description}</p>
                            <div class="flex items-center space-x-4">
                                <!-- Sélecteur quantité -->
                                <div class="flex items-center border border-gray-200 rounded-lg">
                                    <button type="button" onclick="updateQuantity(${item.id}, -1)"
                                            class="w-10 h-10 flex items-center justify-center text-gray-500 hover:text-[#b88b55] hover:bg-gray-50 rounded-l-lg transition-colors duration-300">
                                        <span class="text-xl">−</span>
                                    </button>
                                    <input type="number"
                                           value="${item.quantity}"
                                           min="1"
                                           max="99"
                                           data-id="${item.id}"
                                           class="w-16 h-10 text-center font-luxury text-gray-900 border-0 focus:outline-none focus:ring-0 quantity-input">
                                    <button type="button" onclick="updateQuantity(${item.id}, 1)"
                                            class="w-10 h-10 flex items-center justify-center text-gray-500 hover:text-[#b88b55] hover:bg-gray-50 rounded-r-lg transition-colors duration-300">
                                        <span class="text-xl">+</span>
                                    </button>
                                </div>

                                <!-- Prix unitaire -->
                                <div class="text-gray-600 font-elegant">
                                    <span class="text-sm">Prix unitaire : </span>
                                    <span class="font-luxury">${product.price.toFixed(2)}fcfa</span>
                                </div>
                            </div>
                        </div>

                        <!-- Prix total et actions -->
                        <div class="flex flex-col items-end">
                            <div class="font-luxury text-2xl text-gray-900 mb-4">${total.toFixed(2)}fcfa</div>
                            <button type="button"
                                    onclick="openDeleteModal(${item.id})"
                                    class="text-red-600 hover:text-red-700 font-elegant text-sm flex items-center transition-colors duration-300">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                                Retirer
                            </button>
                        </div>
                    </div>
                </div>
            `;
            container.appendChild(productElement);
        });

        // Ajouter les événements aux inputs de quantité
        document.querySelectorAll('.quantity-input').forEach(input => {
            input.addEventListener('change', function() {
                const id = parseInt(this.getAttribute('data-id'));
                const newQuantity = parseInt(this.value);

                if (newQuantity > 0 && newQuantity <= 99) {
                    updateQuantity(id, newQuantity - cart.find(item => item.id === id).quantity);
                } else {
                    this.value = cart.find(item => item.id === id).quantity;
                }
            });
        });

        // Mettre à jour les totaux
        updateTotals();
    }

    // Mettre à jour la quantité d'un produit
    function updateQuantity(productId, change) {
        const item = cart.find(item => item.id === productId);
        if (!item) return;

        const newQuantity = item.quantity + change;

        if (newQuantity < 1) {
            openDeleteModal(productId);
            return;
        }

        if (newQuantity > 99) {
            showNotification("Quantité maximum atteinte (99)", "⚠️");
            return;
        }

        item.quantity = newQuantity;
        saveCart();
        updateCartDisplay();

        // Animation de feedback
        const input = document.querySelector(`.quantity-input[data-id="${productId}"]`);
        if (input) {
            input.classList.add('scale-105');
            setTimeout(() => input.classList.remove('scale-105'), 300);
        }
    }

    // Mettre à jour les totaux
    function updateTotals() {
        const subtotal = cart.reduce((sum, item) => {
            const product = products[item.id] || item.product;
            return sum + (product.price * item.quantity);
        }, 0);

        // Mettre à jour les éléments DOM
        document.getElementById('subtotal-price').textContent = subtotal.toFixed(2) + 'fcfa';

        // Calculer la TVA (20%)
        const vat = subtotal * 0.2;
        document.getElementById('vat-price').textContent = vat.toFixed(2) + 'fcfa';

        // Calculer les frais de livraison
        const shippingMethod = document.querySelector('input[name="shipping"]:checked').value;
        const shippingCost = shippingMethod === 'express' ? 9.99 : 4.99;
        document.getElementById('shipping-price').textContent = shippingCost.toFixed(2) + 'fcfa';

        // Calculer le total
        const total = subtotal + shippingCost;
        document.getElementById('total-price').textContent = total.toFixed(2) + 'fcfa';

        // Sauvegarder le panier dans le header (si nécessaire)
        updateHeaderCart();
    }

    // Mettre à jour le panier dans le header
    function updateHeaderCart() {
        const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
        const headerCartCount = document.querySelector('#header-cart-count');
        if (headerCartCount) {
            headerCartCount.textContent = totalItems;

            // Animation
            if (totalItems > 0) {
                headerCartCount.classList.add('animate-pulse');
                setTimeout(() => headerCartCount.classList.remove('animate-pulse'), 300);
            }
        }
    }

    // Ouvrir modal de suppression
    function openDeleteModal(productId) {
        currentDeleteId = productId;
        const modal = document.getElementById('delete-modal');
        const modalContent = document.getElementById('delete-modal-content');

        modal.classList.remove('hidden');
        setTimeout(() => {
            modalContent.classList.remove('scale-95', 'opacity-0');
        }, 10);
    }

    // Fermer modal de suppression
    function closeDeleteModal() {
        const modal = document.getElementById('delete-modal');
        const modalContent = document.getElementById('delete-modal-content');

        modalContent.classList.add('scale-95', 'opacity-0');
        setTimeout(() => {
            modal.classList.add('hidden');
            currentDeleteId = null;
        }, 300);
    }

    // Supprimer un produit
    function deleteProduct() {
        if (!currentDeleteId) return;

        cart = cart.filter(item => item.id !== currentDeleteId);
        saveCart();
        updateCartDisplay();
        closeDeleteModal();

        showNotification("Produit retiré du panier", "🗑️");
    }

    // Passer à la caisse
    function checkout() {
        if (cart.length === 0) {
            showNotification("Votre panier est vide", "🛒");
            return;
        }

        // Simuler une commande
        const orderData = {
            items: cart,
            subtotal: cart.reduce((sum, item) => {
                const product = products[item.id];
                return sum + (product.price * item.quantity);
            }, 0),
            shipping: document.querySelector('input[name="shipping"]:checked').value,
            total: parseFloat(document.getElementById('total-price').textContent)
        };

        // Sauvegarder la commande temporairement
        localStorage.setItem('lastOrder', JSON.stringify(orderData));

        // Redirection vers la page de livraison
        showNotification(`Commande enregistrée ! Total : ${orderData.total.toFixed(2)}fcfa`, "✅");
    }

    // Afficher une notification
    function showNotification(message, icon = "✅") {
        const notification = document.getElementById('notification');
        const notificationIcon = document.getElementById('notification-icon');
        const notificationMessage = document.getElementById('notification-message');

        notificationIcon.textContent = icon;
        notificationMessage.textContent = message;

        notification.classList.remove('translate-x-full');

        setTimeout(() => {
            notification.classList.add('translate-x-full');
        }, 3000);
    }

    // Configurer les événements
    function setupEventListeners() {
        // Modal de suppression
        document.getElementById('cancel-delete').addEventListener('click', closeDeleteModal);
        document.getElementById('confirm-delete').addEventListener('click', deleteProduct);

        // Bouton de commande
        document.getElementById('checkout-button').addEventListener('click', checkout);

        // Options de livraison
        document.querySelectorAll('input[name="shipping"]').forEach(input => {
            input.addEventListener('change', updateTotals);
        });

        // Fermer modal en cliquant à l'extérieur
        document.getElementById('delete-modal').addEventListener('click', (e) => {
            if (e.target.id === 'delete-modal') {
                closeDeleteModal();
            }
        });

        // Animation au scroll
        const animatedElements = document.querySelectorAll('.animate-fade-up, .animate-slide-left, .animate-zoom-soft');
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
    }
</script>
@endsection

@extends('frontend.footer')
