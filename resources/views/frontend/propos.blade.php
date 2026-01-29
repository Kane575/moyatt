@extends('frontend.nav')

@section('css')
<style>
    /* Animations de base */
    @keyframes fade-up {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fade-left {
        from { opacity: 0; transform: translateX(-40px); }
        to { opacity: 1; transform: translateX(0); }
    }

    @keyframes fade-right {
        from { opacity: 0; transform: translateX(40px); }
        to { opacity: 1; transform: translateX(0); }
    }

    @keyframes zoom-soft {
        from { opacity: 0; transform: scale(0.96); }
        to { opacity: 1; transform: scale(1); }
    }

    /* Classes utilitaires */
    .animate-fade-up { opacity: 0; animation: fade-up 1s ease-out forwards; }
    .animate-fade-left { opacity: 0; animation: fade-left 1s ease-out forwards; }
    .animate-fade-right { opacity: 0; animation: fade-right 1s ease-out forwards; }
    .animate-zoom-soft { opacity: 0; animation: zoom-soft 1.2s ease-out forwards; }

    /* Délais */
    .delay-100 { animation-delay: 0.1s; }
    .delay-200 { animation-delay: 0.2s; }
    .delay-300 { animation-delay: 0.3s; }
    .delay-400 { animation-delay: 0.4s; }
    .delay-500 { animation-delay: 0.5s; }

    /* Découpe de section */
    .section-cut {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 80px;
    }

    .section-cut svg {
        width: 100%;
        height: 100%;
    }
</style>
@endsection

@section('content')
<!-- Hero Section - À propos -->
<section class="relative min-h-[80vh] flex items-center justify-center bg-gradient-to-br from-[#f9f5f0] to-[#fffaf5] overflow-hidden">

    <!-- Découpe en bas -->
    <div class="section-cut">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0,40 C480,0 960,80 1440,40 L1440,80 L0,80 Z" fill="white"/>
        </svg>
    </div>

    <!-- Contenu principal -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <!-- Image de présentation -->
            <div class="relative animate-fade-right">
                <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                    <img src="{{ asset('image/about-hero.jpg') }}"
                         alt="MOYATT by ZIM - Inspiration naturelle"
                         class="w-full h-[400px] object-cover transform transition-transform duration-700 hover:scale-110"
                         onerror="this.src='{{ asset('image/num1.png') }}'">

                    <!-- Overlay décoratif -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent"></div>

                    <!-- Badge d'authenticité -->
                    <div class="absolute top-6 right-6 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full shadow-lg animate-fade-up delay-300">
                        <span class="font-elegant text-sm text-gray-900">Depuis 2023</span>
                    </div>
                </div>

                <!-- Élément décoratif -->
                <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-[#b88b55]/10 rounded-full -z-10"></div>
                <div class="absolute -top-6 -right-6 w-40 h-40 bg-[#40270d]/5 rounded-full -z-10"></div>
            </div>

            <!-- Texte de présentation -->
            <div class="animate-fade-left">
                <div class="mb-6">
                    <span class="inline-block font-elegant text-[#b88b55] text-sm tracking-wider mb-3 animate-fade-up delay-200">
                        NOTRE HISTOIRE
                    </span>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-luxury text-gray-900 mb-6 leading-tight">
                        L'art du soin<br>
                        <span class="text-[#b88b55]">naturel & raffiné</span>
                    </h1>
                </div>

                <div class="space-y-6">
                    <p class="text-gray-700 font-elegant text-lg leading-relaxed animate-fade-up delay-300">
                        MOYATT by ZIM est née d'une passion sincère pour la beauté naturelle
                        et d'une conviction profonde : prendre soin de soi devrait être
                        un moment de douceur, de sensorialité et de reconnexion à l'essentiel.
                    </p>

                    <p class="text-gray-700 font-elegant text-lg leading-relaxed animate-fade-up delay-400">
                        Inspirée par la richesse des ingrédients naturels et guidée par
                        une exigence qualitative, la marque s'engage à créer des soins
                        qui respectent votre peau, vos cheveux et notre environnement.
                    </p>

                    <div class="pt-4 animate-fade-up delay-500">
                        <div class="flex items-center space-x-6">
                            <div class="text-center">
                                <div class="text-3xl font-luxury text-[#b88b55] mb-1">50+</div>
                                <div class="text-sm font-elegant text-gray-600">Clients satisfaits</div>
                            </div>
                            <div class="h-8 w-px bg-gray-300"></div>
                            <div class="text-center">
                                <div class="text-3xl font-luxury text-[#b88b55] mb-1">100%</div>
                                <div class="text-sm font-elegant text-gray-600">Naturel</div>
                            </div>
                            <div class="h-8 w-px bg-gray-300"></div>
                            <div class="text-center">
                                <div class="text-3xl font-luxury text-[#b88b55] mb-1">🌟</div>
                                <div class="text-sm font-elegant text-gray-600">Éthique</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Section Nos Valeurs -->
<section class="relative py-28 bg-white">

    <!-- Découpe haute -->
    <div class="absolute top-0 left-0 right-0 transform rotate-180">
        <div class="section-cut">
            <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path d="M0,40 C480,0 960,80 1440,40 L1440,80 L0,80 Z" fill="#f9f5f0"/>
            </svg>
        </div>
    </div>

    <!-- Contenu -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- En-tête -->
        <div class="text-center mb-20 animate-fade-up">
            <span class="inline-block font-elegant text-[#b88b55] text-sm tracking-wider mb-3">
                NOTRE PHILOSOPHIE
            </span>
            <h2 class="text-4xl sm:text-5xl font-luxury text-gray-900 mb-6">
                Au cœur de notre démarche
            </h2>
            <p class="text-gray-600 font-elegant text-lg max-w-3xl mx-auto leading-relaxed">
                Des valeurs qui guident chaque étape de création de nos soins
            </p>
        </div>

        <!-- Grille des valeurs -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-20">

            <!-- Valeur 1 -->
            <div class="group text-center p-8 rounded-2xl transition-all duration-500 hover:bg-[#f9f5f0] hover:shadow-xl animate-fade-up delay-100">
                <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-[#b88b55]/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                    <span class="text-3xl">🌿</span>
                </div>
                <h3 class="font-luxury text-xl text-gray-900 mb-4">
                    Nature & authenticité
                </h3>
                <p class="text-gray-600 font-elegant text-sm leading-relaxed">
                    Des ingrédients sélectionnés pour leur pureté et leur efficacité naturelle.
                </p>
            </div>

            <!-- Valeur 2 -->
            <div class="group text-center p-8 rounded-2xl transition-all duration-500 hover:bg-[#f9f5f0] hover:shadow-xl animate-fade-up delay-200">
                <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-[#b88b55]/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                    <span class="text-3xl">✨</span>
                </div>
                <h3 class="font-luxury text-xl text-gray-900 mb-4">
                    Excellence sensorielle
                </h3>
                <p class="text-gray-600 font-elegant text-sm leading-relaxed">
                    Des textures, parfums et sensations pensés pour une expérience beauté unique.
                </p>
            </div>

            <!-- Valeur 3 -->
            <div class="group text-center p-8 rounded-2xl transition-all duration-500 hover:bg-[#f9f5f0] hover:shadow-xl animate-fade-up delay-300">
                <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-[#b88b55]/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                    <span class="text-3xl">🤍</span>
                </div>
                <h3 class="font-luxury text-xl text-gray-900 mb-4">
                    Respect & éthique
                </h3>
                <p class="text-gray-600 font-elegant text-sm leading-relaxed">
                    Une démarche responsable envers votre peau, votre bien-être et la planète.
                </p>
            </div>

            <!-- Valeur 4 -->
            <div class="group text-center p-8 rounded-2xl transition-all duration-500 hover:bg-[#f9f5f0] hover:shadow-xl animate-fade-up delay-400">
                <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-[#b88b55]/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                    <span class="text-3xl">🎯</span>
                </div>
                <h3 class="font-luxury text-xl text-gray-900 mb-4">
                    Accessibilité & conseil
                </h3>
                <p class="text-gray-600 font-elegant text-sm leading-relaxed">
                    Des soins adaptés à tous, accompagnés d'un conseil personnalisé et bienveillant.
                </p>
            </div>

        </div>

        <!-- Section Processus -->
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center mt-32">

            <!-- Texte processus -->
            <div class="animate-fade-left">
                <div class="mb-8">
                    <span class="inline-block font-elegant text-[#b88b55] text-sm tracking-wider mb-3">
                        NOTRE PROCESSUS
                    </span>
                    <h2 class="text-4xl sm:text-5xl font-luxury text-gray-900 mb-6">
                        De l'idée à<br>
                        <span class="text-[#b88b55]">votre peau</span>
                    </h2>
                </div>

                <div class="space-y-8">
                    <!-- Étape 1 -->
                    <div class="flex gap-6 animate-fade-up delay-100">
                        <div class="flex-shrink-0 w-12 h-12 bg-[#b88b55]/10 rounded-full flex items-center justify-center">
                            <span class="font-luxury text-[#b88b55] text-xl">1</span>
                        </div>
                        <div>
                            <h4 class="font-luxury text-lg text-gray-900 mb-2">Recherche & inspiration</h4>
                            <p class="text-gray-600 font-elegant text-sm leading-relaxed">
                                Exploration des ingrédients naturels et des besoins spécifiques de la peau et des cheveux.
                            </p>
                        </div>
                    </div>

                    <!-- Étape 2 -->
                    <div class="flex gap-6 animate-fade-up delay-200">
                        <div class="flex-shrink-0 w-12 h-12 bg-[#b88b55]/10 rounded-full flex items-center justify-center">
                            <span class="font-luxury text-[#b88b55] text-xl">2</span>
                        </div>
                        <div>
                            <h4 class="font-luxury text-lg text-gray-900 mb-2">Formulation & tests</h4>
                            <p class="text-gray-600 font-elegant text-sm leading-relaxed">
                                Création des formules et tests rigoureux pour garantir efficacité et tolérance.
                            </p>
                        </div>
                    </div>

                    <!-- Étape 3 -->
                    <div class="flex gap-6 animate-fade-up delay-300">
                        <div class="flex-shrink-0 w-12 h-12 bg-[#b88b55]/10 rounded-full flex items-center justify-center">
                            <span class="font-luxury text-[#b88b55] text-xl">3</span>
                        </div>
                        <div>
                            <h4 class="font-luxury text-lg text-gray-900 mb-2">Production artisanale</h4>
                            <p class="text-gray-600 font-elegant text-sm leading-relaxed">
                                Fabrication en petites séries avec soin et attention aux détails.
                            </p>
                        </div>
                    </div>

                    <!-- Étape 4 -->
                    <div class="flex gap-6 animate-fade-up delay-400">
                        <div class="flex-shrink-0 w-12 h-12 bg-[#b88b55]/10 rounded-full flex items-center justify-center">
                            <span class="font-luxury text-[#b88b55] text-xl">4</span>
                        </div>
                        <div>
                            <h4 class="font-luxury text-lg text-gray-900 mb-2">Expédition & accompagnement</h4>
                            <p class="text-gray-600 font-elegant text-sm leading-relaxed">
                                Livraison soignée et conseils personnalisés pour une expérience complète.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image processus -->
            <div class="relative animate-fade-right">
                <!-- Image principale -->
                <div class="relative overflow-hidden rounded-2xl shadow-2xl mb-8">
                    <img src="{{ asset('image/process.jpg') }}"
                         alt="Processus de création MOYATT by ZIM"
                         class="w-full h-[300px] object-cover transform transition-transform duration-700 hover:scale-110"
                         onerror="this.src='{{ asset('image/num2.png') }}'">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>

                    <!-- Légende -->
                    <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/60 to-transparent">
                        <p class="font-elegant text-white text-sm">
                            Création de nos gommages naturels
                        </p>
                    </div>
                </div>

                <!-- Mini galerie -->
                <div class="grid grid-cols-3 gap-4">
                    <div class="overflow-hidden rounded-xl shadow-lg">
                        <img src="{{ asset('image/ingredients.jpg') }}"
                             alt="Ingrédients naturels"
                             class="w-full h-32 object-cover transform transition-transform duration-500 hover:scale-110"
                             onerror="this.src='{{ asset('image/num1.png') }}'">
                    </div>
                    <div class="overflow-hidden rounded-xl shadow-lg">
                        <img src="{{ asset('image/laboratory.jpg') }}"
                             alt="Laboratoire de formulation"
                             class="w-full h-32 object-cover transform transition-transform duration-500 hover:scale-110"
                             onerror="this.src='{{ asset('image/num3.png') }}'">
                    </div>
                    <div class="overflow-hidden rounded-xl shadow-lg">
                        <img src="{{ asset('image/packaging.jpg') }}"
                             alt="Emballage durable"
                             class="w-full h-32 object-cover transform transition-transform duration-500 hover:scale-110"
                             onerror="this.src='{{ asset('image/routine.png') }}'">
                    </div>
                </div>

                <!-- Élément décoratif -->
                <div class="absolute -z-10 -bottom-6 -right-6 w-48 h-48 bg-[#40270d]/5 rounded-full"></div>
            </div>

        </div>

        <!-- Citation finale -->
        <div class="mt-32 text-center animate-fade-up delay-500">
            <div class="relative max-w-3xl mx-auto">
                <!-- Guillemets décoratifs -->
                <div class="text-[#b88b55]/20 text-8xl font-luxury absolute -top-4 -left-8">"</div>
                <div class="text-[#b88b55]/20 text-8xl font-luxury absolute -bottom-12 -right-8">"</div>

                <!-- Citation -->
                <div class="relative z-10">
                    <p class="text-2xl sm:text-3xl font-luxury text-gray-900 mb-8 leading-relaxed">
                        Créer des soins, c'est bien plus que formuler.
                        C'est tisser un lien de confiance, de douceur et
                        d'authenticité avec chaque personne qui nous fait confiance.
                    </p>

                    <div class="flex items-center justify-center space-x-4">
                        <div class="w-12 h-px bg-[#b88b55]"></div>
                        <span class="font-elegant text-gray-600 text-sm">
                            ZIM, Fondatrice de MOYATT
                        </span>
                        <div class="w-12 h-px bg-[#b88b55]"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Découpe basse -->
    <div class="absolute bottom-0 left-0 right-0">
        <div class="section-cut">
            <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path d="M0,40 C480,0 960,80 1440,40 L1440,80 L0,80 Z" fill="#fefcf7"/>
            </svg>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Animation au scroll avec Intersection Observer
        const animatedElements = document.querySelectorAll(
            ".animate-fade-up, .animate-fade-left, .animate-fade-right, .animate-zoom-soft"
        );

        if (animatedElements.length > 0) {
            const observer = new IntersectionObserver(
                entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            // Démarrer l'animation
                            entry.target.style.animationPlayState = "running";

                            // Pour les délais multiples, on pourrait aussi ajouter une classe
                            if (entry.target.classList.contains('delay-100')) {
                                entry.target.style.animationDelay = "0.1s";
                            } else if (entry.target.classList.contains('delay-200')) {
                                entry.target.style.animationDelay = "0.2s";
                            } else if (entry.target.classList.contains('delay-300')) {
                                entry.target.style.animationDelay = "0.3s";
                            } else if (entry.target.classList.contains('delay-400')) {
                                entry.target.style.animationDelay = "0.4s";
                            } else if (entry.target.classList.contains('delay-500')) {
                                entry.target.style.animationDelay = "0.5s";
                            }

                            observer.unobserve(entry.target);
                        }
                    });
                },
                {
                    threshold: 0.15,
                    rootMargin: "0px 0px -100px 0px"
                }
            );

            animatedElements.forEach(el => {
                observer.observe(el);
            });
        }

        // Animation des images au survol
        const hoverImages = document.querySelectorAll('img[class*="hover:scale-"]');
        hoverImages.forEach(img => {
            img.addEventListener('mouseenter', () => {
                img.style.transform = 'scale(1.05)';
            });
            img.addEventListener('mouseleave', () => {
                img.style.transform = 'scale(1)';
            });
        });

        // Animation des valeurs au survol
        const valueCards = document.querySelectorAll('.group');
        valueCards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                const icon = card.querySelector('.group-hover\\:scale-110');
                if (icon) {
                    icon.style.transform = 'scale(1.1)';
                }
            });

            card.addEventListener('mouseleave', () => {
                const icon = card.querySelector('.group-hover\\:scale-110');
                if (icon) {
                    icon.style.transform = 'scale(1)';
                }
            });
        });

        // Gestion des images manquantes
        document.querySelectorAll('img').forEach(img => {
            img.addEventListener('error', function() {
                // Fallback pour les images manquantes
                const fallbacks = {
                    'about-hero.jpg': '{{ asset("image/num1.png") }}',
                    'process.jpg': '{{ asset("image/num2.png") }}',
                    'ingredients.jpg': '{{ asset("image/num1.png") }}',
                    'laboratory.jpg': '{{ asset("image/num3.png") }}',
                    'packaging.jpg': '{{ asset("image/routine.png") }}'
                };

                const src = this.getAttribute('src');
                const filename = src.split('/').pop();

                if (fallbacks[filename]) {
                    this.src = fallbacks[filename];
                } else {
                    // Fallback général
                    this.src = '{{ asset("image/num1.png") }}';
                    this.alt = 'Image non disponible';
                    this.classList.add('opacity-50');
                }
            });
        });

        // Smooth scroll pour les ancres
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
</script>
@endsection

@extends('frontend.footer')
