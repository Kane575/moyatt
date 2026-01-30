<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar MOYATT</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'luxury': ['Playfair Display', 'serif'],
                        'elegant': ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@300;400;500;600;700&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- CSS Animations -->
    @yield('css')
    <style>
        .dropdown-menu {
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s ease-in-out;
        }

        .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-menu-mobile {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
        }

        .dropdown-menu-mobile.open {
            max-height: 300px;
        }
    </style>
</head>
<body class="bg-gray-100">

<!-- Navbar principale -->
<nav class="bg-[#40270d] sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">

            <!-- Logo -->
            <div class="flex-shrink-0">
                <div class="text-white font-luxury text-xl lg:text-2xl font-semibold tracking-wider opacity-95">
                    MOYATT by ZIM
                </div>
            </div>

            <!-- Menu Desktop -->
            <div class="hidden lg:flex items-center space-x-8 xl:space-x-10">
                <a href="/accueil" class="flex items-center gap-2 text-white font-elegant font-light text-base tracking-wide hover:opacity-70 transition-all duration-300 ease-out relative group">
                    <svg class="w-4 h-4 opacity-80" fill="none" stroke="currentColor" stroke-width="1.5"
                         viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l9-9 9 9M4 10v10h5v-6h6v6h5V10"/></svg>
                    Accueil
                    <span class="absolute -bottom-1 left-0 w-0 h-px bg-white/80 transition-all duration-300 group-hover:w-full"></span>
                </a>

                <!-- Menu déroulant Collections -->
                <div class="relative dropdown">
                    <button class="flex items-center gap-2 text-white font-elegant font-light text-base tracking-wide hover:opacity-70 transition-all duration-300 ease-out group">
                        <svg class="w-4 h-4 opacity-80" fill="none" stroke="currentColor" stroke-width="1.5"
                             viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h7v7H3zM14 3h7v7h-7zM3 14h7v7H3zM14 14h7v7h-7z"/></svg>
                        Collections
                        <svg class="w-3 h-3 ml-1 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <!-- Sous-menu déroulant -->
                    <div class="dropdown-menu absolute top-full left-0 mt-2 w-56 bg-white rounded-lg shadow-2xl py-2 z-50 border border-gray-100">
                        <a href="/gommage" class="block px-4 py-3 text-gray-700 font-elegant text-sm hover:bg-amber-50 hover:text-[#b88b55] transition-all duration-200 first:rounded-t-lg">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-amber-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <span class="font-medium">Gommages Gourmands</span>
                                    <p class="text-xs text-gray-500 mt-0.5">Exfoliation douce aux textures gourmandes</p>
                                </div>
                            </div>
                        </a>

                        <a href="/capillaire" class="block px-4 py-3 text-gray-700 font-elegant text-sm hover:bg-blue-50 hover:text-blue-600 transition-all duration-200">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                    </svg>
                                </div>
                                <div>
                                    <span class="font-medium">Produits Capillaires</span>
                                    <p class="text-xs text-gray-500 mt-0.5">Soins naturels pour cheveux brillants</p>
                                </div>
                            </div>
                        </a>

                        <a href="/routine" class="block px-4 py-3 text-gray-700 font-elegant text-sm hover:bg-pink-50 hover:text-pink-600 transition-all duration-200">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-pink-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <span class="font-medium">Routine Visage</span>
                                    <p class="text-xs text-gray-500 mt-0.5">Soins complets pour peau lumineuse</p>
                                </div>
                            </div>
                        </a>

                        <a href="/savon" class="block px-4 py-3 text-gray-700 font-elegant text-sm hover:bg-purple-50 hover:text-purple-600 transition-all duration-200">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                                    </svg>
                                </div>
                                <div>
                                    <span class="font-medium">Savons Surgras</span>
                                    <p class="text-xs text-gray-500 mt-0.5">Savons doux et nourrissants</p>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="block px-4 py-3 text-gray-700 font-elegant text-sm hover:bg-green-50 hover:text-green-600 transition-all duration-200 last:rounded-b-lg">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                </div>
                                <div>
                                    <span class="font-medium">Nouveautés</span>
                                    <p class="text-xs text-gray-500 mt-0.5">Découvrez nos dernières créations</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <a href="/propos" class="flex items-center gap-2 text-white font-elegant font-light text-base tracking-wide hover:opacity-70 transition-all duration-300 ease-out relative group">
                    <svg class="w-4 h-4 opacity-80" fill="none" stroke="currentColor" stroke-width="1.5"
                         viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z"/></svg>
                    À propos
                    <span class="absolute -bottom-1 left-0 w-0 h-px bg-white/80 transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="/contact" class="flex items-center gap-2 text-white font-elegant font-light text-base tracking-wide hover:opacity-70 transition-all duration-300 ease-out relative group">
                    <svg class="w-4 h-4 opacity-80" fill="none" stroke="currentColor" stroke-width="1.5"
                         viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l9 6 9-6M4 6h16a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2z"/></svg>
                    Contact
                    <span class="absolute -bottom-1 left-0 w-0 h-px bg-white/80 transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="/panier" class="flex items-center gap-2 text-white font-elegant font-light text-base tracking-wide hover:opacity-70 transition-all duration-300 ease-out relative group">
                    <svg class="w-4 h-4 opacity-80" fill="none" stroke="currentColor" stroke-width="1.5"
                         viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.5 6h13M9 21a1 1 0 100-2 1 1 0 000 2zm8 0a1 1 0 100-2 1 1 0 000 2z"/></svg>
                    Panier
                    <span class="absolute -bottom-1 left-0 w-0 h-px bg-white/80 transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="/compte" class="flex items-center gap-2 text-white font-elegant font-light text-base tracking-wide hover:opacity-70 transition-all duration-300 ease-out relative group">
                    <svg class="w-4 h-4 opacity-80" fill="none" stroke="currentColor" stroke-width="1.5"
                         viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 7.5a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.5 20.25a7.5 7.5 0 0115 0"/></svg>
                    Compte
                    <span class="absolute -bottom-1 left-0 w-0 h-px bg-white/80 transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>

            <!-- Menu Burger Mobile -->
            <div class="lg:hidden">
                <button id="mobile-menu-button" class="text-white hover:opacity-70 transition-all duration-300 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path id="line1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16"/>
                        <path id="line2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16"/>
                        <path id="line3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Menu Mobile Overlay -->
<div id="mobile-menu" class="lg:hidden fixed inset-0 bg-black/95 backdrop-blur-md transform translate-y-full transition-transform duration-500 ease-in-out z-50">
    <div class="flex flex-col h-full">

        <!-- Header du menu mobile -->
        <div class="flex items-center justify-between p-4 pt-6 border-b border-white/10">
            <div class="text-white font-luxury text-xl font-semibold tracking-wider">
                MOYATT by ZIM
            </div>
            <button id="mobile-menu-close" class="text-white hover:opacity-70 transition-opacity duration-300 focus:outline-none p-2">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Navigation mobile -->
        <nav class="flex-1 px-6 py-12 overflow-y-auto space-y-4">
            <a href="/accueil" class="flex items-center gap-3 text-white text-xl font-elegant font-light tracking-wide hover:opacity-70 hover:translate-x-2 transition-all duration-300 ease-out py-3">
                Accueil
            </a>

            <!-- Menu déroulant mobile Collections -->
            <div class="py-3">
                <button id="mobile-collections-toggle" class="flex items-center justify-between w-full text-white text-xl font-elegant font-light tracking-wide hover:opacity-70 transition-all duration-300 ease-out">
                    <span>Collections</span>
                    <svg id="mobile-collections-arrow" class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <!-- Sous-menu mobile Collections -->
                <div id="mobile-collections-menu" class="dropdown-menu-mobile mt-2 ml-4 space-y-2">
                    <a href="/gommage" class="block py-2 pl-4 text-white/80 font-elegant text-lg hover:text-white hover:pl-6 transition-all duration-300 ease-out border-l-2 border-transparent hover:border-amber-400">
                        Gommages Gourmands
                    </a>
                    <a href="/capillaire" class="block py-2 pl-4 text-white/80 font-elegant text-lg hover:text-white hover:pl-6 transition-all duration-300 ease-out border-l-2 border-transparent hover:border-blue-400">
                        Produits Capillaires
                    </a>
                    <a href="/routine" class="block py-2 pl-4 text-white/80 font-elegant text-lg hover:text-white hover:pl-6 transition-all duration-300 ease-out border-l-2 border-transparent hover:border-pink-400">
                        Routine Visage
                    </a>
                    <a href="/savon" class="block py-2 pl-4 text-white/80 font-elegant text-lg hover:text-white hover:pl-6 transition-all duration-300 ease-out border-l-2 border-transparent hover:border-purple-400">
                        Savons Surgras
                    </a>
                    <a href="#" class="block py-2 pl-4 text-white/80 font-elegant text-lg hover:text-white hover:pl-6 transition-all duration-300 ease-out border-l-2 border-transparent hover:border-green-400">
                        Nouveautés
                    </a>
                </div>
            </div>

            <a href="/propos" class="flex items-center gap-3 text-white text-xl font-elegant font-light tracking-wide hover:opacity-70 hover:translate-x-2 transition-all duration-300 ease-out py-3">
                À propos
            </a>
            <a href="/contact" class="flex items-center gap-3 text-white text-xl font-elegant font-light tracking-wide hover:opacity-70 hover:translate-x-2 transition-all duration-300 ease-out py-3">
                Contact
            </a>
            <a href="/panier" class="flex items-center gap-3 text-white text-xl font-elegant font-light tracking-wide hover:opacity-70 hover:translate-x-2 transition-all duration-300 ease-out py-3">
                Panier
            </a>
            <a href="/compte" class="flex items-center gap-3 text-white text-xl font-elegant font-light tracking-wide hover:opacity-70 hover:translate-x-2 transition-all duration-300 ease-out py-3">
                Compte
            </a>
        </nav>
    </div>
</div>

@yield('content')

<!-- Footer -->
<footer class="bg-[#0f0f0f] text-white pt-20 pb-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4 mb-16">
            <!-- Brand -->
            <div>
                <h3 class="font-luxury text-xl mb-4 tracking-wide">
                    MOYATT by ZIM
                </h3>
                <p class="text-sm text-white/70 font-elegant leading-relaxed">
                    Cosmétique naturelle dédiée au soin de la peau et des cheveux,
                    alliant élégance, douceur et authenticité.
                </p>
            </div>

            <!-- Navigation -->
            <div>
                <h4 class="font-luxury text-sm mb-4 uppercase tracking-widest">
                    Navigation
                </h4>
                <ul class="space-y-3 text-sm font-elegant text-white/70">
                    <li><a href="/accueil" class="hover:text-white transition">Accueil</a></li>
                    <li class="relative group">
                        <span class="hover:text-white transition cursor-default">Collections</span>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10">
                            <a href="/gommage" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 text-sm">Gommages Gourmands</a>
                            <a href="/capillaire" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 text-sm">Produits Capillaires</a>
                            <a href="/routine" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 text-sm">Routine Visage</a>
                            <a href="/savon" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 text-sm">Savons Surgras</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 text-sm">Nouveautés</a>
                        </div>
                    </li>
                    <li><a href="/propos" class="hover:text-white transition">À propos</a></li>
                    <li><a href="/contact" class="hover:text-white transition">Contact</a></li>
                </ul>
            </div>

            <!-- Informations -->
            <div>
                <h4 class="font-luxury text-sm mb-4 uppercase tracking-widest">
                    Informations
                </h4>
                <ul class="space-y-3 text-sm font-elegant text-white/70">
                    <li><a href="#" class="hover:text-white transition">Livraison</a></li>
                    <li><a href="#" class="hover:text-white transition">Mentions légales</a></li>
                    <li><a href="#" class="hover:text-white transition">Confidentialité</a></li>
                </ul>
            </div>

            <!-- Réseaux -->
            <div>
                <h4 class="font-luxury text-sm mb-4 uppercase tracking-widest">
                    Suivez-nous
                </h4>
                <div class="flex space-x-4 text-white/70 text-lg">
                    <a href="#" class="hover:text-white transition">Instagram</a>
                    <a href="#" class="hover:text-white transition">Facebook</a>
                </div>
            </div>
        </div>

        <!-- Bas footer -->
        <div class="border-t border-white/10 pt-8 text-center">
            <p class="text-xs text-white/50 font-elegant">
                © {{ date('Y') }} MOYATT by ZIM — Tous droits réservés
            </p>
        </div>
    </div>
</footer>

@yield('js')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Variables pour le menu mobile
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuClose = document.getElementById('mobile-menu-close');
        const line1 = document.getElementById('line1');
        const line2 = document.getElementById('line2');
        const line3 = document.getElementById('line3');

        // Variables pour le sous-menu mobile Collections
        const mobileCollectionsToggle = document.getElementById('mobile-collections-toggle');
        const mobileCollectionsMenu = document.getElementById('mobile-collections-menu');
        const mobileCollectionsArrow = document.getElementById('mobile-collections-arrow');

        // Animation du burger
        function toggleBurger(isOpen) {
            if (!line1 || !line2 || !line3) return;

            if (isOpen) {
                line1.setAttribute('d', 'M6 18L18 6');
                line2.style.opacity = '0';
                line3.setAttribute('d', 'M6 6L18 18');
            } else {
                line1.setAttribute('d', 'M4 6h16');
                line2.style.opacity = '1';
                line3.setAttribute('d', 'M4 18h16');
            }
        }

        // Ouvrir le menu mobile
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.remove('translate-y-full');
            mobileMenu.classList.add('translate-y-0');
            document.body.style.overflow = 'hidden';
            toggleBurger(true);
        });

        // Fermer le menu mobile
        function closeMobileMenu() {
            mobileMenu.classList.remove('translate-y-0');
            mobileMenu.classList.add('translate-y-full');
            document.body.style.overflow = 'auto';
            toggleBurger(false);

            // Fermer aussi le sous-menu Collections
            if (mobileCollectionsMenu && mobileCollectionsMenu.classList.contains('open')) {
                mobileCollectionsMenu.classList.remove('open');
                mobileCollectionsArrow.style.transform = 'rotate(0deg)';
            }
        }

        // Événements de fermeture
        mobileMenuClose.addEventListener('click', closeMobileMenu);

        // Fermer le menu en cliquant sur un lien (sauf Collections)
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', closeMobileMenu);
        });

        // Gestion du sous-menu mobile Collections
        if (mobileCollectionsToggle && mobileCollectionsMenu) {
            mobileCollectionsToggle.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();

                mobileCollectionsMenu.classList.toggle('open');
                const isOpen = mobileCollectionsMenu.classList.contains('open');
                mobileCollectionsArrow.style.transform = isOpen ? 'rotate(180deg)' : 'rotate(0deg)';

                // Empêcher la fermeture du menu principal
                e.stopPropagation();
            });
        }

        // Fermer avec Escape
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeMobileMenu();
            }
        });

        // Fermer en cliquant à l'extérieur
        mobileMenu.addEventListener('click', (e) => {
            if (e.target === mobileMenu) {
                closeMobileMenu();
            }
        });

        // Animation du dropdown desktop
        const dropdown = document.querySelector('.dropdown');
        if (dropdown) {
            const dropdownMenu = dropdown.querySelector('.dropdown-menu');

            // Ouvrir au hover
            dropdown.addEventListener('mouseenter', () => {
                dropdownMenu.style.opacity = '1';
                dropdownMenu.style.visibility = 'visible';
                dropdownMenu.style.transform = 'translateY(0)';
            });

            dropdown.addEventListener('mouseleave', () => {
                dropdownMenu.style.opacity = '0';
                dropdownMenu.style.visibility = 'hidden';
                dropdownMenu.style.transform = 'translateY(-10px)';
            });

            // Garder ouvert quand on est sur le menu déroulant
            dropdownMenu.addEventListener('mouseenter', () => {
                dropdownMenu.style.opacity = '1';
                dropdownMenu.style.visibility = 'visible';
                dropdownMenu.style.transform = 'translateY(0)';
            });

            dropdownMenu.addEventListener('mouseleave', () => {
                dropdownMenu.style.opacity = '0';
                dropdownMenu.style.visibility = 'hidden';
                dropdownMenu.style.transform = 'translateY(-10px)';
            });
        }
    });
</script>

</body>
</html>
