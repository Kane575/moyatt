@extends('frontend.nav')

@section('css')
<style>
    /* Animations premium */
    @keyframes fade-up {
        from {
            opacity: 0;
            transform: translateY(40px) scale(0.95);
        }
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    @keyframes slide-left {
        from {
            opacity: 0;
            transform: translateX(50px) rotate(2deg);
        }
        to {
            opacity: 1;
            transform: translateX(0) rotate(0);
        }
    }

    @keyframes zoom-soft {
        from {
            opacity: 0;
            transform: scale(0.9) rotateX(10deg);
            filter: blur(5px);
        }
        to {
            opacity: 1;
            transform: scale(1) rotateX(0);
            filter: blur(0);
        }
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0) rotate(0);
        }
        50% {
            transform: translateY(-10px) rotate(1deg);
        }
    }

    @keyframes pulse-soft {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.8;
        }
    }

    @keyframes border-glow {
        0%, 100% {
            border-color: rgba(184, 139, 85, 0.3);
            box-shadow: 0 0 20px rgba(184, 139, 85, 0.1);
        }
        50% {
            border-color: rgba(184, 139, 85, 0.6);
            box-shadow: 0 0 40px rgba(184, 139, 85, 0.3);
        }
    }

    /* Classes utilitaires */
    .animate-fade-up {
        opacity: 0;
        animation: fade-up 1.2s cubic-bezier(0.4, 0, 0.2, 1) forwards;
    }

    .animate-slide-left {
        opacity: 0;
        animation: slide-left 1.2s cubic-bezier(0.4, 0, 0.2, 1) forwards;
    }

    .animate-zoom-soft {
        opacity: 0;
        animation: zoom-soft 1.5s cubic-bezier(0.4, 0, 0.2, 1) forwards;
    }

    .animate-float {
        animation: float 6s ease-in-out infinite;
    }

    .animate-pulse-soft {
        animation: pulse-soft 3s ease-in-out infinite;
    }

    .animate-border-glow {
        animation: border-glow 3s ease-in-out infinite;
    }

    /* Délais */
    .delay-100 { animation-delay: 0.1s; }
    .delay-200 { animation-delay: 0.2s; }
    .delay-300 { animation-delay: 0.3s; }
    .delay-400 { animation-delay: 0.4s; }
    .delay-500 { animation-delay: 0.5s; }

    /* Effets de survol premium */
    .hover-lift {
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .hover-lift:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.15);
    }

    .hover-glow {
        transition: all 0.5s ease;
    }

    .hover-glow:hover {
        box-shadow: 0 0 30px rgba(184, 139, 85, 0.2);
    }

    /* Style pour les inputs */
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type="number"] {
        -moz-appearance: textfield;
    }

    /* Badge FCFA */
    .fcfa-badge {
        position: relative;
        padding-left: 20px;
    }

    .fcfa-badge::before {
        content: "FCFA";
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        font-size: 0.7em;
        font-weight: bold;
        color: #b88b55;
    }
</style>
@endsection

@section('content')
<!-- Page Transition -->
<div class="page-transition" id="page-transition">
    <div class="loader"></div>
</div>

<!-- Page Produit Détail -->
<section class="bg-gradient-to-b from-[#f9f5f0] to-white min-h-screen py-12 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Fil d'Ariane -->
        <nav class="mb-8 animate-fade-up">
            <ol class="flex items-center space-x-2 text-sm font-elegant text-gray-600">
                <li>
                    <a href="/" class="hover:text-[#b88b55] transition-colors duration-300">Accueil</a>
                </li>
                <li class="flex items-center">
                    <svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                    <a href="/collection" class="hover:text-[#b88b55] transition-colors duration-300">Collections</a>
                </li>
                <li class="flex items-center">
                    <svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                    <span class="text-gray-900">Gommage Miel & Amande</span>
                </li>
            </ol>
        </nav>

        <!-- Grille Produit -->
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20">

            <!-- Colonne Images -->
            <div class="animate-fade-up">
                <!-- Image Principale -->
                <div class="relative overflow-hidden rounded-3xl shadow-2xl mb-6 group hover-lift">
                    <div class="aspect-square bg-gradient-to-br from-amber-50 to-amber-100 flex items-center justify-center">
                        <img src="{{ asset('image/num.png') }}"
                             alt="Gommage Miel & Amande"
                             class="w-4/5 h-4/5 object-contain transform group-hover:scale-105 transition-transform duration-700 animate-float"
                             id="main-image">
                    </div>

                    <!-- Badge Naturel -->
                    <div class="absolute top-4 left-4 bg-green-500 text-white px-3 py-1 rounded-full text-xs font-elegant flex items-center space-x-1">
                        <span>🌿</span>
                        <span>100% Naturel</span>
                    </div>

                    <!-- Badge Best Seller -->
                    <div class="absolute top-4 right-4 bg-[#b88b55] text-white px-3 py-1 rounded-full text-xs font-elegant">
                        Best Seller
                    </div>
                </div>

                <!-- Galerie Miniatures -->
                <div class="grid grid-cols-4 gap-4">
                    <button class="aspect-square rounded-xl overflow-hidden border-2 border-transparent hover:border-[#b88b55] transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-[#b88b55] focus:border-transparent"
                            onclick="changeImage('{{ asset('image/num.png') }}')">
                        <div class="w-full h-full bg-amber-50 flex items-center justify-center">
                            <img src="{{ asset('image/num.png') }}" alt="Vue 1" class="w-3/4 h-3/4 object-contain">
                        </div>
                    </button>

                    <button class="aspect-square rounded-xl overflow-hidden border-2 border-transparent hover:border-[#b88b55] transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-[#b88b55] focus:border-transparent"
                            onclick="changeImage('{{ asset('image/num1.png') }}')">
                        <div class="w-full h-full bg-amber-100 flex items-center justify-center">
                            <img src="{{ asset('image/num1.png') }}" alt="Vue 2" class="w-3/4 h-3/4 object-contain">
                        </div>
                    </button>

                    <button class="aspect-square rounded-xl overflow-hidden border-2 border-transparent hover:border-[#b88b55] transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-[#b88b55] focus:border-transparent">
                        <div class="w-full h-full bg-amber-50 flex items-center justify-center">
                            <div class="text-3xl">🍯</div>
                        </div>
                    </button>

                    <button class="aspect-square rounded-xl overflow-hidden border-2 border-transparent hover:border-[#b88b55] transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-[#b88b55] focus:border-transparent">
                        <div class="w-full h-full bg-amber-100 flex items-center justify-center">
                            <div class="text-3xl">🌰</div>
                        </div>
                    </button>
                </div>
            </div>

            <!-- Colonne Informations -->
            <div class="animate-slide-left">
                <!-- Catégorie -->
                <div class="mb-4">
                    <span class="inline-block font-elegant text-[#b88b55] text-sm tracking-wider">
                        GOMMAGE GOURMAND
                    </span>
                </div>

                <!-- Titre -->
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-luxury text-gray-900 mb-4 leading-tight">
                    Gommage Miel & Amande
                </h1>

                <!-- Description courte -->
                <p class="text-gray-600 font-elegant text-lg mb-6 leading-relaxed">
                    Exfoliant doux et nourrissant au miel biologique et poudre d'amande, pour une peau lumineuse et veloutée.
                </p>

                <!-- Avis -->
                <div class="flex items-center mb-6">
                    <div class="flex text-yellow-400 mr-3">
                        ★★★★★
                    </div>
                    <span class="font-elegant text-gray-600 text-sm">
                        (4.8/5 • 128 avis)
                    </span>
                </div>

                <!-- Prix -->
                <div class="mb-8">
                    <div class="flex items-baseline space-x-3">
                        <span class="text-4xl font-luxury text-gray-900 fcfa-badge pl-16">
                            12 500
                        </span>
                        <span class="text-lg text-gray-500 line-through fcfa-badge pl-12">
                            15 000
                        </span>
                        <span class="bg-red-100 text-red-600 px-2 py-1 rounded text-sm font-elegant">
                            -17%
                        </span>
                    </div>
                    <p class="text-sm text-gray-500 font-elegant mt-2">
                        Économisez 2 500 FCFA
                    </p>
                </div>

                <!-- Caractéristiques -->
                <div class="grid grid-cols-2 gap-4 mb-8">
                    <div class="flex items-center space-x-3 p-3 bg-white rounded-xl border border-gray-100">
                        <div class="w-10 h-10 bg-amber-50 rounded-full flex items-center justify-center">
                            <span class="text-amber-600">🌿</span>
                        </div>
                        <div>
                            <p class="font-elegant text-sm text-gray-900">100% Naturel</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-3 p-3 bg-white rounded-xl border border-gray-100">
                        <div class="w-10 h-10 bg-green-50 rounded-full flex items-center justify-center">
                            <span class="text-green-600">✨</span>
                        </div>
                        <div>
                            <p class="font-elegant text-sm text-gray-900">Peau sensible</p>
                        </div>
                    </div>
                </div>

                <!-- Sélecteur de quantité -->
                <div class="mb-8">
                    <label class="block font-elegant text-gray-700 mb-3">Quantité</label>
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center border border-gray-200 rounded-xl overflow-hidden">
                            <button type="button"
                                    onclick="updateQuantity(-1)"
                                    class="w-12 h-12 flex items-center justify-center text-gray-500 hover:text-[#b88b55] hover:bg-gray-50 transition-colors duration-300">
                                <span class="text-2xl">−</span>
                            </button>
                            <input type="number"
                                   id="quantity"
                                   value="1"
                                   min="1"
                                   max="10"
                                   class="w-20 h-12 text-center font-luxury text-gray-900 text-xl border-0 focus:outline-none focus:ring-0">
                            <button type="button"
                                    onclick="updateQuantity(1)"
                                    class="w-12 h-12 flex items-center justify-center text-gray-500 hover:text-[#b88b55] hover:bg-gray-50 transition-colors duration-300">
                                <span class="text-2xl">+</span>
                            </button>
                        </div>

                        <div class="text-gray-600 font-elegant">
                            <span class="text-sm">Stock disponible : </span>
                            <span class="font-luxury text-green-600">12</span>
                        </div>
                    </div>
                </div>

                <!-- Boutons d'action -->
                <div class="space-y-4 mb-8">
                    <button id="add-to-cart"
                            class="w-full bg-[#b88b55] text-white py-4 rounded-xl font-elegant text-lg hover:bg-[#a37445] transition-colors duration-300 shadow-lg hover:shadow-xl flex items-center justify-center space-x-3 hover-lift">
                        <span>🛒</span>
                        <span>Ajouter au panier</span>
                    </button>
                </div>

                <!-- Livraison gratuite -->


                <!-- Paiement sécurisé -->
                <div class="flex items-center justify-center space-x-6 text-gray-400 mb-8">
                    <span>🔒</span>
                    <span>💳</span>
                    <span>📦</span>
                    <span class="font-elegant text-sm text-gray-600">Paiement 100% sécurisé</span>
                </div>
            </div>
        </div>

        <!-- Section Description Détail -->
        <div class="mt-20 pt-12 border-t border-gray-200">
            <!-- Onglets -->
            <div class="flex space-x-8 mb-12 border-b border-gray-200">
                <button id="description-tab"
                        class="pb-4 font-luxury text-gray-900 border-b-2 border-[#b88b55] text-lg">
                    Description
                </button>
                <button id="ingredients-tab"
                        class="pb-4 font-luxury text-gray-600 hover:text-gray-900 transition-colors duration-300 text-lg">
                    Ingrédients
                </button>
                <button id="usage-tab"
                        class="pb-4 font-luxury text-gray-600 hover:text-gray-900 transition-colors duration-300 text-lg">
                    Mode d'emploi
                </button>
                <button id="avis-tab"
                        class="pb-4 font-luxury text-gray-600 hover:text-gray-900 transition-colors duration-300 text-lg">
                    Avis (128)
                </button>
            </div>

            <!-- Contenu des onglets -->
            <div class="animate-fade-up delay-200">
                <!-- Description -->
                <div id="description-content" class="space-y-6">
                    <h3 class="text-2xl font-luxury text-gray-900 mb-6">
                        Sublimez votre peau naturellement
                    </h3>

                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="space-y-4">
                            <p class="text-gray-700 font-elegant leading-relaxed">
                                Notre gommage Miel & Amande est formulé avec des ingrédients 100% naturels pour une exfoliation douce et efficace. La poudre d'amande finement moulue élimine en douceur les cellules mortes tandis que le miel biologique hydrate et apaise la peau.
                            </p>

                            <p class="text-gray-700 font-elegant leading-relaxed">
                Idéal pour tous les types de peau, même les plus sensibles, ce gommage révèle l'éclat naturel de votre épiderme sans l'agresser. La texture crémeuse et le parfum délicat de miel font de ce soin un moment de pure sensualité.
                            </p>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <span class="text-[#b88b55] text-xl">✓</span>
                                <div>
                                    <p class="font-luxury text-gray-900 mb-1">Exfoliation douce</p>
                                    <p class="text-gray-600 font-elegant text-sm">Élimine les cellules mortes sans agresser</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <span class="text-[#b88b55] text-xl">✓</span>
                                <div>
                                    <p class="font-luxury text-gray-900 mb-1">Hydratation intense</p>
                                    <p class="text-gray-600 font-elegant text-sm">Apporte hydratation et souplesse</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <span class="text-[#b88b55] text-xl">✓</span>
                                <div>
                                    <p class="font-luxury text-gray-900 mb-1">Éclat naturel</p>
                                    <p class="text-gray-600 font-elegant text-sm">Révèle la luminosité naturelle de la peau</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ingrédients (caché) -->
                <div id="ingredients-content" class="space-y-6 hidden">
                    <h3 class="text-2xl font-luxury text-gray-900 mb-6">
                        La pureté de la nature
                    </h3>

                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="space-y-6">
                            <div class="flex items-center space-x-4 p-4 bg-amber-50 rounded-xl">
                                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center">
                                    <span class="text-2xl">🍯</span>
                                </div>
                                <div>
                                    <p class="font-luxury text-gray-900">Miel biologique</p>
                                    <p class="text-gray-600 font-elegant text-sm">Hydratant et apaisant naturel</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4 p-4 bg-amber-50 rounded-xl">
                                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center">
                                    <span class="text-2xl">🌰</span>
                                </div>
                                <div>
                                    <p class="font-luxury text-gray-900">Poudre d'amande</p>
                                    <p class="text-gray-600 font-elegant text-sm">Exfoliant doux et nourrissant</p>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="flex items-center space-x-4 p-4 bg-amber-50 rounded-xl">
                                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center">
                                    <span class="text-2xl">🥥</span>
                                </div>
                                <div>
                                    <p class="font-luxury text-gray-900">Huile de coco</p>
                                    <p class="text-gray-600 font-elegant text-sm">Nourrit et protège la peau</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4 p-4 bg-amber-50 rounded-xl">
                                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center">
                                    <span class="text-2xl">🌿</span>
                                </div>
                                <div>
                                    <p class="font-luxury text-gray-900">Extrait de vanille</p>
                                    <p class="text-gray-600 font-elegant text-sm">Parfum naturel et antioxydant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mode d'emploi (caché) -->
                <div id="usage-content" class="space-y-6 hidden">
                    <h3 class="text-2xl font-luxury text-gray-900 mb-6">
                        Comment l'utiliser ?
                    </h3>

                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="text-center p-6 bg-white rounded-xl border border-gray-100 hover-lift">
                            <div class="text-4xl mb-4">1</div>
                            <p class="font-luxury text-gray-900 mb-2">Humidifiez</p>
                            <p class="text-gray-600 font-elegant text-sm">Humidifiez légèrement votre peau</p>
                        </div>

                        <div class="text-center p-6 bg-white rounded-xl border border-gray-100 hover-lift">
                            <div class="text-4xl mb-4">2</div>
                            <p class="font-luxury text-gray-900 mb-2">Appliquez</p>
                            <p class="text-gray-600 font-elegant text-sm">Massez délicatement en cercles</p>
                        </div>

                        <div class="text-center p-6 bg-white rounded-xl border border-gray-100 hover-lift">
                            <div class="text-4xl mb-4">3</div>
                            <p class="font-luxury text-gray-900 mb-2">Rincez</p>
                            <p class="text-gray-600 font-elegant text-sm">Rincez à l'eau tiède et séchez</p>
                        </div>
                    </div>

                    <p class="text-gray-700 font-elegant leading-relaxed mt-6">
                        Utilisez 2 à 3 fois par semaine pour une peau parfaitement lisse et radieuse.
                        Évitez le contour des yeux. Adapté à tous les types de peau.
                    </p>
                </div>

                <!-- Avis (caché) -->
                <div id="avis-content" class="space-y-6 hidden">
                    <div class="flex justify-between items-center mb-8">
                        <div>
                            <h3 class="text-2xl font-luxury text-gray-900">Avis clients</h3>
                            <p class="text-gray-600 font-elegant">4.8/5 basé sur 128 avis</p>
                        </div>

                        <button class="bg-[#b88b55] text-white px-6 py-3 rounded-xl font-elegant hover:bg-[#a37445] transition-colors duration-300">
                            Écrire un avis
                        </button>
                    </div>

                    <!-- Avis exemple -->
                    <div class="bg-white rounded-xl p-6 border border-gray-100 hover-lift">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <p class="font-luxury text-gray-900">Fatou D.</p>
                                <p class="text-gray-500 font-elegant text-sm">Il y a 2 semaines</p>
                            </div>
                            <div class="flex text-yellow-400">
                                ★★★★★
                            </div>
                        </div>
                        <p class="text-gray-700 font-elegant leading-relaxed">
                            "Ma peau n'a jamais été aussi douce ! Le parfum est divin et la texture parfaite.
                            Je recommande à 100%."
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Produits similaires -->
        <div class="mt-20 pt-12 border-t border-gray-200">
            <h2 class="text-3xl font-luxury text-gray-900 mb-8 text-center">
                Vous aimerez aussi
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Produit 1 -->
                <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover-lift group animate-fade-up delay-300">
                    <div class="aspect-square bg-gradient-to-br from-blue-50 to-blue-100 flex items-center justify-center">
                        <img src="{{ asset('image/capillaire.png') }}" alt="Shampoing Argan" class="w-3/4 h-3/4 object-contain">
                    </div>
                    <div class="p-6">
                        <h3 class="font-luxury text-gray-900 mb-2">Shampoing Doux Argan</h3>
                        <p class="text-gray-600 font-elegant text-sm mb-4 line-clamp-2">Nourrit et fortifie les cheveux</p>
                        <div class="flex items-center justify-between">
                            <span class="font-luxury text-gray-900 fcfa-badge pl-14">9 500</span>
                            <button class="bg-[#b88b55] text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-[#a37445] transition-colors duration-300">
                                <span>+</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Produit 2 -->
                <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover-lift group animate-fade-up delay-400">
                    <div class="aspect-square bg-gradient-to-br from-pink-50 to-pink-100 flex items-center justify-center">
                        <img src="{{ asset('image/routine.png') }}" alt="Nettoyant Rose" class="w-3/4 h-3/4 object-contain">
                    </div>
                    <div class="p-6">
                        <h3 class="font-luxury text-gray-900 mb-2">Nettoyant Doux Rose</h3>
                        <p class="text-gray-600 font-elegant text-sm mb-4 line-clamp-2">Purifie et apaise la peau</p>
                        <div class="flex items-center justify-between">
                            <span class="font-luxury text-gray-900 fcfa-badge pl-14">8 900</span>
                            <button class="bg-[#b88b55] text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-[#a37445] transition-colors duration-300">
                                <span>+</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Produit 3 -->
                <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover-lift group animate-fade-up delay-500">
                    <div class="aspect-square bg-gradient-to-br from-purple-50 to-purple-100 flex items-center justify-center">
                        <img src="{{ asset('image/surgras.png') }}" alt="Savon Lavande" class="w-3/4 h-3/4 object-contain">
                    </div>
                    <div class="p-6">
                        <h3 class="font-luxury text-gray-900 mb-2">Savon Lavande</h3>
                        <p class="text-gray-600 font-elegant text-sm mb-4 line-clamp-2">Calme et détend la peau</p>
                        <div class="flex items-center justify-between">
                            <span class="font-luxury text-gray-900 fcfa-badge pl-14">4 500</span>
                            <button class="bg-[#b88b55] text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-[#a37445] transition-colors duration-300">
                                <span>+</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Produit 4 -->
                <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover-lift group animate-fade-up delay-600">
                    <div class="aspect-square bg-gradient-to-br from-yellow-50 to-yellow-100 flex items-center justify-center">
                        <div class="text-4xl">☕</div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-luxury text-gray-900 mb-2">Gommage Café & Cacao</h3>
                        <p class="text-gray-600 font-elegant text-sm mb-4 line-clamp-2">Énergisant et tonifiant</p>
                        <div class="flex items-center justify-between">
                            <span class="font-luxury text-gray-900 fcfa-badge pl-14">13 500</span>
                            <button class="bg-[#b88b55] text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-[#a37445] transition-colors duration-300">
                                <span>+</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</section>

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
    document.addEventListener('DOMContentLoaded', function() {
        // 1. Page Transition
        const pageTransition = document.getElementById('page-transition');
        setTimeout(() => {
            pageTransition.classList.add('fade-out');
            setTimeout(() => {
                pageTransition.style.display = 'none';
            }, 800);
        }, 800);

        // 2. Variables
        let quantity = 1;
        const product = {
            id: 1,
            name: "Gommage Miel & Amande",
            price: 12500,
            image: "{{ asset('image/num.png') }}",
            category: "gommages"
        };

        // 3. Changement d'image principale
        window.changeImage = function(imageSrc) {
            const mainImage = document.getElementById('main-image');
            mainImage.src = imageSrc;

            // Animation de transition
            mainImage.style.opacity = '0';
            setTimeout(() => {
                mainImage.style.opacity = '1';
                mainImage.style.transform = 'scale(1.05)';
                setTimeout(() => {
                    mainImage.style.transform = 'scale(1)';
                }, 300);
            }, 150);
        };

        // 4. Gestion de la quantité
        window.updateQuantity = function(change) {
            const quantityInput = document.getElementById('quantity');
            let newQuantity = parseInt(quantityInput.value) + change;

            if (newQuantity < 1) newQuantity = 1;
            if (newQuantity > 10) {
                showNotification("Quantité maximum atteinte");
                return;
            }
            quantityInput.value = newQuantity;
        };

        // 5. Affichage de notification
        function showNotification(message) {
            const notification = document.getElementById('notification');
            const notificationMessage = document.getElementById('notification-message');
            const notificationIcon = document.getElementById('notification-icon');

            notificationMessage.textContent = message;
            notificationIcon.textContent = "⚠️";
            notification.classList.remove('translate-x-full');
            setTimeout(() => {
                notification.classList.add('translate-x-full');
            }, 3000);
        }

        // 6. Ajout au panier
        window.addToCart = function() {
            const quantityInput = document.getElementById('quantity');
            const quantity = parseInt(quantityInput.value);

            if (quantity < 1 || quantity > 10) {
                showNotification("Quantité invalide");
                return;
            }

            // Simuler l'ajout au panier
            showNotification("Produit ajouté au panier");
        };
    });
</script>
@endsection
