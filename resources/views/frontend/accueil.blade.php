@extends('frontend.nav')
@section('css')
<style>
        /* Animations de base */
        @keyframes fade-up {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slide-right {
            from { opacity: 0; transform: translateX(-40px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes zoom-soft {
            from { opacity: 0; transform: scale(0.96); }
            to { opacity: 1; transform: scale(1); }
        }

        /* Classes utilitaires */
        .animate-fade-up { opacity: 0; animation: fade-up 1s ease-out forwards; }
        .animate-slide-right { opacity: 0; animation: slide-right 1s ease-out forwards; }
        .animate-zoom-soft { opacity: 0; animation: zoom-soft 1.2s ease-out forwards; }

        /* Délais */
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
    </style>
@endsection
@section('content')
        <!-- Hero -->
<div class="flex items-center justify-center min-h-screen px-4 sm:px-6 lg:px-8 bg-[#40270d]">
    <div class="text-center text-white max-w-4xl">

        <!-- LOGO -->
        <img
            src="{{ asset('image/jogo.png') }}"
            alt="Logo"
            width="200"
            class="mx-auto animate-zoom-soft"
        />


        <!-- TEXTE -->
        <p
            class="text-lg sm:text-xl lg:text-2xl font-elegant font-light mb-12 leading-relaxed max-w-2xl mx-auto animate-fade-up delay-200"
        >
            Cosmétique naturelle ( Pour les soins de la peau et des cheveux) et accessoires de beauté
        </p>

        <!-- BOUTONS -->
        <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 justify-center animate-fade-up delay-400">


            <a href="/collection" class="w-full sm:w-auto bg-white text-gray-900 font-elegant font-medium px-8 py-4 rounded-sm hover:bg-gray-100 transition-all duration-300 ease-out transform hover:scale-105">
                Découvrir nos produits
            </a>

            <a href="/propos" class="w-full sm:w-auto border border-white/30 text-white font-elegant font-medium px-8 py-4 rounded-sm hover:bg-white/10 hover:border-white/50 transition-all duration-300 ease-out">
                Notre histoire
            </a>
        </div>

    </div>
</div>


      <!-- Découpe élégante en bas de section -->
<!-- Découpe élégante en bas de section - Version ultra-compatible -->
<div class="absolute bottom-0 left-0 right-0">
    <svg class="w-full h-16 sm:h-20 lg:h-24" viewBox="0 0 3840 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M0,60 C1280,120 2560,0 3840,60 L3840,120 L0,120 Z" fill="white" />
    </svg>
</div>


    </section>

    <!-- Section suivante pour démonstration -->
    <section class="bg-white py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Titre -->
        <div class="text-center mb-20">
            <h2 class="text-3xl sm:text-4xl font-luxury text-gray-900 mb-5">
                Nos Collections
            </h2>
            <p class="text-gray-600 font-elegant max-w-3xl mx-auto leading-relaxed">
                Des soins naturels et raffinés, pensés pour sublimer votre peau et vos cheveux
                avec douceur, efficacité et élégance.
            </p>
        </div>

        <!-- Grille -->
        <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4">

            <!-- Gommages gourmands -->
            <div class="group bg-white border border-gray-100 shadow-md overflow-hidden transition-all duration-500 hover:shadow-2xl hover:-translate-y-3">
                <div class="overflow-hidden">
                    <img src="{{ asset('image/gommage.png') }}"
                         alt="Gommages gourmands"
                         class="h-80 w-full object-cover transition-transform duration-700 group-hover:scale-110">
                </div>
                <div class="p-8 text-center">
                    <h3 class="text-xl font-luxury text-gray-900 mb-3">
                        Gommages gourmands
                    </h3>
                    <p class="text-base text-gray-600 font-elegant mb-6 leading-relaxed">
                        Une exfoliation délicate aux textures gourmandes pour révéler
                        l’éclat naturel de votre peau.
                    </p>
                    <a href="/collection" class="inline-block text-sm font-elegant tracking-wide text-gray-900 relative group/link">
                        Découvrir
                        <span class="absolute left-0 -bottom-1 w-0 h-px bg-gray-900 transition-all duration-300 group-hover/link:w-full"></span>
                    </a>
                </div>
            </div>

            <!-- Produits capillaires -->
            <div class="group bg-white border border-gray-100 shadow-md overflow-hidden transition-all duration-500 hover:shadow-2xl hover:-translate-y-3">
                <div class="overflow-hidden">
                    <img src="{{ asset('image/capillaire.png') }}"
                         alt="Produits capillaires"
                         class="h-80 w-full object-cover transition-transform duration-700 group-hover:scale-110">
                </div>
                <div class="p-8 text-center">
                    <h3 class="text-xl font-luxury text-gray-900 mb-3">
                        Produits capillaires
                    </h3>
                    <p class="text-base text-gray-600 font-elegant mb-6 leading-relaxed">
                        Des soins riches et naturels pour nourrir, fortifier et sublimer
                        tous types de cheveux.
                    </p>
                    <a href="/collection" class="inline-block text-sm font-elegant tracking-wide text-gray-900 relative group/link">
                        Découvrir
                        <span class="absolute left-0 -bottom-1 w-0 h-px bg-gray-900 transition-all duration-300 group-hover/link:w-full"></span>
                    </a>
                </div>
            </div>

            <!-- Routine visage -->
            <div class="group bg-white border border-gray-100 shadow-md overflow-hidden transition-all duration-500 hover:shadow-2xl hover:-translate-y-3">
                <div class="overflow-hidden">
                    <img src="{{ asset('image/routine.png') }}"
                         alt="Routine visage"
                         class="h-80 w-full object-cover transition-transform duration-700 group-hover:scale-110">
                </div>
                <div class="p-8 text-center">
                    <h3 class="text-xl font-luxury text-gray-900 mb-3">
                        Routine visage
                    </h3>
                    <p class="text-base text-gray-600 font-elegant mb-6 leading-relaxed">
                        Une routine complète et équilibrée pour une peau lumineuse,
                        douce et parfaitement hydratée.
                    </p>
                    <a href="/collection" class="inline-block text-sm font-elegant tracking-wide text-gray-900 relative group/link">
                        Découvrir
                        <span class="absolute left-0 -bottom-1 w-0 h-px bg-gray-900 transition-all duration-300 group-hover/link:w-full"></span>
                    </a>
                </div>
            </div>

            <!-- Savons surgras -->
            <div class="group bg-white border border-gray-100 shadow-md overflow-hidden transition-all duration-500 hover:shadow-2xl hover:-translate-y-3">
                <div class="overflow-hidden">
                    <img src="{{ asset('image/surgras.png') }}"
                         alt="Savons surgras"
                         class="h-80 w-full object-cover transition-transform duration-700 group-hover:scale-110">
                </div>
                <div class="p-8 text-center">
                    <h3 class="text-xl font-luxury text-gray-900 mb-3">
                        Savons surgras
                    </h3>
                    <p class="text-base text-gray-600 font-elegant mb-6 leading-relaxed">
                        Des savons doux et nourrissants, respectueux des peaux sensibles
                        et délicatement parfumés.
                    </p>
                    <a href="/collection" class="inline-block text-sm font-elegant tracking-wide text-gray-900 relative group/link">
                        Découvrir
                        <span class="absolute left-0 -bottom-1 w-0 h-px bg-gray-900 transition-all duration-300 group-hover/link:w-full"></span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Section Pourquoi MOYATT by ZIM -->
<section class="relative overflow-hidden bg-[#0f0f0f] text-white">

    <!-- Découpe haute -->
    <div class="absolute top-0 left-0 right-0">
        <svg class="w-full h-16 sm:h-20 lg:h-24" viewBox="0 0 3840 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0,60 C1280,0 2560,120 3840,60 L3840,0 L0,0 Z" fill="white"/>
        </svg>
    </div>

    <!-- Contenu -->
    <div class="relative z-10 py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Titre -->
            <div class="text-center mb-20 animate-fade-up">
                <h2 class="text-3xl sm:text-4xl font-luxury mb-6 tracking-wide">
                    Pourquoi MOYATT by ZIM ?
                </h2>
                <p class="text-white/70 font-elegant max-w-3xl mx-auto leading-relaxed">
                    Une cosmétique naturelle pensée avec exigence, sensorialité et respect
                    de votre peau.
                </p>
            </div>

            <!-- Grille des valeurs -->
            <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">

                <!-- Valeur -->
                <div class="text-center animate-fade-up delay-100">
                    <div class="mb-6 text-4xl opacity-80">🌿</div>
                    <h3 class="font-luxury text-lg mb-3">
                        Ingrédients naturels
                    </h3>
                    <p class="text-sm text-white/70 font-elegant leading-relaxed">
                        Des formules riches en actifs naturels, sélectionnés pour leur
                        efficacité et leur douceur.
                    </p>
                </div>

                <!-- Valeur -->
                <div class="text-center animate-fade-up delay-200">
                    <div class="mb-6 text-4xl opacity-80">🧴</div>
                    <h3 class="font-luxury text-lg mb-3">
                        Soins adaptés
                    </h3>
                    <p class="text-sm text-white/70 font-elegant leading-relaxed">
                        Des produits pensés pour répondre aux besoins réels de tous
                        types de peau et de cheveux.
                    </p>
                </div>

                <!-- Valeur -->
                <div class="text-center animate-fade-up delay-300">
                    <div class="mb-6 text-4xl opacity-80">🤍</div>
                    <h3 class="font-luxury text-lg mb-3">
                        Respect & éthique
                    </h3>
                    <p class="text-sm text-white/70 font-elegant leading-relaxed">
                        Une approche responsable, respectueuse de votre corps et
                        de l’environnement.
                    </p>
                </div>

                <!-- Valeur -->
                <div class="text-center animate-fade-up delay-400">
                    <div class="mb-6 text-4xl opacity-80">✨</div>
                    <h3 class="font-luxury text-lg mb-3">
                        Élégance & sensorialité
                    </h3>
                    <p class="text-sm text-white/70 font-elegant leading-relaxed">
                        Des textures, des parfums et un design pensés pour une
                        expérience beauté raffinée.
                    </p>
                </div>

            </div>
        </div>
    </div>

    <!-- Découpe basse -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-16 sm:h-20 lg:h-24" viewBox="0 0 3840 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0,60 C1280,120 2560,0 3840,60 L3840,120 L0,120 Z" fill="white"/>
        </svg>
    </div>

</section>
<!-- Section Témoignages -->
<section class="relative bg-white py-28 overflow-hidden">

    <!-- Découpe haute (rappel visuel élégant) -->
    <div class="absolute top-0 left-0 right-0">
        <svg class="w-full h-16 sm:h-20 lg:h-24" viewBox="0 0 3840 120" fill="none"
             xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0,60 C1280,0 2560,120 3840,60 L3840,0 L0,0 Z" fill="#0f0f0f"/>
        </svg>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Titre -->
        <div class="text-center mb-20 animate-fade-up">
            <h2 class="text-3xl sm:text-4xl font-luxury text-gray-900 mb-5">
                Elles nous font confiance
            </h2>
            <p class="text-gray-600 font-elegant max-w-3xl mx-auto leading-relaxed">
                Des expériences authentiques qui reflètent la qualité et la douceur
                de nos soins.
            </p>
        </div>

        <!-- Grille des témoignages -->
        <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3">

            <!-- Témoignage -->
            <div class="bg-gray-50 p-8 border border-gray-100 shadow-sm transition-all duration-500 hover:shadow-xl hover:-translate-y-2 animate-fade-up delay-100">
                <p class="text-gray-700 font-elegant text-base leading-relaxed mb-6">
                    “Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ma peau
                    est visiblement plus douce et lumineuse après quelques utilisations.”
                </p>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="font-luxury text-gray-900 text-sm">
                            Aïcha D.
                        </p>
                        <p class="text-xs text-gray-500 font-elegant">
                            Routine visage
                        </p>
                    </div>
                    <div class="text-yellow-400 text-sm">
                        ★★★★★
                    </div>
                </div>
            </div>

            <!-- Témoignage -->
            <div class="bg-gray-50 p-8 border border-gray-100 shadow-sm transition-all duration-500 hover:shadow-xl hover:-translate-y-2 animate-fade-up delay-200">
                <p class="text-gray-700 font-elegant text-base leading-relaxed mb-6">
                    “Lorem ipsum dolor sit amet. Les produits capillaires ont transformé
                    mes cheveux : plus brillants, plus forts.”
                </p>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="font-luxury text-gray-900 text-sm">
                            Mariam K.
                        </p>
                        <p class="text-xs text-gray-500 font-elegant">
                            Produits capillaires
                        </p>
                    </div>
                    <div class="text-yellow-400 text-sm">
                        ★★★★★
                    </div>
                </div>
            </div>

            <!-- Témoignage -->
            <div class="bg-gray-50 p-8 border border-gray-100 shadow-sm transition-all duration-500 hover:shadow-xl hover:-translate-y-2 animate-fade-up delay-300">
                <p class="text-gray-700 font-elegant text-base leading-relaxed mb-6">
                    “Lorem ipsum dolor sit amet, consectetur. Les savons sont doux,
                    agréables et respectent parfaitement ma peau sensible.”
                </p>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="font-luxury text-gray-900 text-sm">
                            Fatou S.
                        </p>
                        <p class="text-xs text-gray-500 font-elegant">
                            Savons surgras
                        </p>
                    </div>
                    <div class="text-yellow-400 text-sm">
                        ★★★★★
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>
<!-- Section Notre Histoire -->
<section class="relative bg-white py-32 overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid gap-16 lg:grid-cols-2 items-center">

            <!-- Texte -->
            <div class="animate-fade-up">
                <h2 class="text-3xl sm:text-4xl font-luxury text-gray-900 mb-6">
                    Notre histoire
                </h2>
                <p class="text-gray-700 font-elegant text-base leading-relaxed mb-6">
                    MOYATT by ZIM est née d’une volonté simple : créer des soins naturels,
                    efficaces et respectueux, pensés pour accompagner chaque routine beauté
                    avec douceur et exigence.
                </p>
                <p class="text-gray-700 font-elegant text-base leading-relaxed mb-8">
                    Inspirée par la richesse des ingrédients naturels et par une approche
                    authentique de la cosmétique, la marque valorise des formules équilibrées,
                    sensorielles et accessibles.
                </p>
                <a href="#"
                   class="inline-block font-elegant text-sm tracking-wide text-gray-900 relative group">
                    En savoir plus
                    <span class="absolute left-0 -bottom-1 w-0 h-px bg-gray-900 transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>

            <!-- Images -->
            <div class="grid grid-cols-2 gap-6 animate-fade-up delay-200">

                <!-- Image grande -->
                <div class="col-span-2 overflow-hidden shadow-lg">
                    <img src="{{ asset('image/num2.png') }}"
                         alt="Inspiration naturelle"
                         class="w-full h-72 object-cover transition-transform duration-700 hover:scale-105">
                </div>

                <!-- Image 2 -->
                <div class="overflow-hidden shadow-lg">
                    <img src="{{ asset('image/num1.png') }}"
                         alt="Fabrication artisanale"
                         class="w-full h-56 object-cover transition-transform duration-700 hover:scale-105">
                </div>

                <!-- Image 3 -->
                <div class="overflow-hidden shadow-lg">
                    <img src="{{ asset('image/num3.png') }}"
                         alt="Textures & ingrédients"
                         class="w-full h-56 object-cover transition-transform duration-700 hover:scale-105">
                </div>

            </div>
        </div>
    </div>

    <!-- Découpe basse -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-16 sm:h-20 lg:h-24" viewBox="0 0 3840 120" fill="none"
             xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0,60 C1280,120 2560,0 3840,60 L3840,120 L0,120 Z" fill="#0f0f0f"/>
        </svg>
    </div>

</section>
<!-- Section Engagements - Style Business -->
<section class="bg-[#faf7f3] py-28">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- En-tête -->
        <div class="max-w-3xl mb-20 animate-fade-up">
            <h2 class="text-3xl sm:text-4xl font-luxury text-gray-900 mb-6">
                Nos engagements
            </h2>
            <p class="text-gray-700 font-elegant leading-relaxed">
                Chaque détail de MOYATT by ZIM est pensé pour offrir une expérience
                fiable, qualitative et transparente.
            </p>
        </div>

        <!-- Liste engagements -->
        <div class="space-y-10">

            <!-- Item -->
            <div class="group bg-white p-8 lg:p-10 shadow-sm hover:shadow-md transition animate-slide-right">
                <div class="flex items-start gap-8">

                    <span class="text-4xl font-luxury text-gray-300">
                        01
                    </span>

                    <div>
                        <h3 class="font-luxury text-lg text-gray-900 mb-3">
                            Livraison maîtrisée
                        </h3>
                        <p class="text-gray-700 font-elegant leading-relaxed text-sm max-w-2xl">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Les commandes sont préparées avec soin afin de garantir
                            une réception optimale.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="group bg-white p-8 lg:p-10 shadow-sm hover:shadow-md transition animate-slide-right delay-100">
                <div class="flex items-start gap-8">

                    <span class="text-4xl font-luxury text-gray-300">
                        02
                    </span>

                    <div>
                        <h3 class="font-luxury text-lg text-gray-900 mb-3">
                            Paiement sécurisé
                        </h3>
                        <p class="text-gray-700 font-elegant leading-relaxed text-sm max-w-2xl">
                            Lorem ipsum dolor sit amet. Les transactions sont protégées
                            grâce à des systèmes de sécurité fiables et reconnus.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="group bg-white p-8 lg:p-10 shadow-sm hover:shadow-md transition animate-slide-right delay-200">
                <div class="flex items-start gap-8">

                    <span class="text-4xl font-luxury text-gray-300">
                        03
                    </span>

                    <div>
                        <h3 class="font-luxury text-lg text-gray-900 mb-3">
                            Accompagnement client
                        </h3>
                        <p class="text-gray-700 font-elegant leading-relaxed text-sm max-w-2xl">
                            Lorem ipsum dolor sit amet, consectetur. Une équipe
                            disponible pour conseiller et accompagner chaque client.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="group bg-white p-8 lg:p-10 shadow-sm hover:shadow-md transition animate-slide-right delay-300">
                <div class="flex items-start gap-8">

                    <span class="text-4xl font-luxury text-gray-300">
                        04
                    </span>

                    <div>
                        <h3 class="font-luxury text-lg text-gray-900 mb-3">
                            Qualité & éthique
                        </h3>
                        <p class="text-gray-700 font-elegant leading-relaxed text-sm max-w-2xl">
                            Lorem ipsum dolor sit amet. Des choix responsables,
                            des ingrédients sélectionnés avec exigence.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- Footer -->
@endsection

@section('js')
<!-- JavaScript pour interactions -->
<script>
    document.addEventListener("DOMContentLoaded", () => {

        // Animation au scroll pour la navbar (optionnel)
        let lastScroll = 0;
        const navbar = document.querySelector('nav');



        // Animation au scroll (Intersection Observer)
        const animatedElements = document.querySelectorAll(
            ".animate-fade-up, .animate-slide-right, .animate-zoom-soft"
        );

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
                {
                    threshold: 0.15
                }
            );

            animatedElements.forEach(el => {
                observer.observe(el);
            });
        }
    });
</script>
@endsection
