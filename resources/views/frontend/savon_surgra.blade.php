@extends('frontend.nav')

@section('content')
<section class="bg-white py-12 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Titre -->
        <div class="text-center mb-12 md:mb-16 animate-fade-up">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-luxury text-gray-900 mb-4">
                Nos Collections
            </h2>
            <p class="text-gray-600 font-elegant max-w-2xl mx-auto leading-relaxed text-base md:text-lg">
                Découvrez nos catégories de soins naturelles et raffinées, pensées pour sublimer votre peau et vos cheveux.
            </p>
        </div>

        <!-- Catégories -->
        <div class="flex flex-wrap justify-center gap-4 md:gap-8 px-2">



            <!-- Savons surgras -->
            <a href="#savons" onclick="showCollection('savons')" class="group relative bg-[#f9f5f0] rounded-xl md:rounded-2xl p-4 md:p-8 w-full sm:w-64 md:w-72 text-center shadow-md md:shadow-lg hover:shadow-xl md:hover:shadow-2xl hover:-translate-y-1 md:hover:-translate-y-3 transition-all duration-300 md:duration-500 ease-out overflow-hidden">
                <h3 class="text-lg md:text-xl font-luxury text-gray-900 mb-2 md:mb-3 group-hover:text-[#b88b55] transition-colors duration-300">
                    Savons surgras
                </h3>
                <p class="text-gray-600 font-elegant text-xs md:text-sm leading-relaxed">
                    Des savons doux, nourrissants et délicatement parfumés.
                </p>
                <div class="absolute inset-0 border border-transparent group-hover:border-[#b88b55]/20 rounded-xl md:rounded-2xl transition-all duration-300 md:duration-500"></div>
            </a>

        </div>
    </div>
</section>

<!-- Section Produits par Collection -->
<section id="produits-section" class="bg-[#fefcf7] py-12 md:py-20 min-h-screen">
    <div class="max-w-7xl mx-auto px-3 sm:px-4 md:px-6 lg:px-8">

        <!-- Titre de la collection active -->
        <div class="text-center mb-12 md:mb-20 animate-fade-up px-2">
            <h2 id="collection-title" class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-luxury text-gray-900 mb-4 md:mb-6">
                Gommages Gourmands
            </h2>
            <p id="collection-description" class="text-gray-600 font-elegant max-w-2xl mx-auto leading-relaxed text-sm md:text-base lg:text-lg px-2">
                Découvrez nos gommages aux textures gourmandes et aux parfums naturels.
            </p>
        </div>

        <!-- Grille Produits - Version Mobile Horizontale / Desktop Grid -->
        <div id="produits-container" class="flex flex-col md:grid md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 lg:gap-10 px-2">
            <!-- Les produits seront générés par JavaScript -->
        </div>
    </div>
</section>

<!-- Panier flottant - Mobile Drawer & Desktop Float -->
<div id="panier-mobile-trigger" class="fixed left-1/2 -translate-x-1/2 bottom-4 md:hidden bg-[#b88b55] text-white px-6 py-3 rounded-full shadow-2xl font-elegant text-lg z-40 flex items-center space-x-2">
    <span>Panier</span>
    <span id="cart-count-mobile" class="bg-white text-[#b88b55] text-sm rounded-full w-6 h-6 flex items-center justify-center">0</span>
</div>

<!-- Mobile Drawer -->
<div id="panier-mobile" class="fixed inset-0 bg-black/50 z-50 hidden transition-opacity duration-300">
    <div class="absolute bottom-0 left-0 right-0 bg-white rounded-t-3xl shadow-2xl transform transition-transform duration-300 translate-y-full" id="mobile-drawer">
        <div class="p-6">
            <!-- Header avec bouton fermer -->
            <div class="flex justify-between items-center mb-6">
                <h4 class="font-luxury text-xl text-gray-900">Votre Panier</h4>
                <button onclick="closeMobileCart()" class="text-gray-500 p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Contenu du panier -->
            <div id="cart-items-mobile" class="flex flex-col space-y-4 max-h-[60vh] overflow-y-auto scrollbar-thin pr-2 py-2">
                <div class="text-center text-gray-400 font-elegant py-8 text-lg">
                    Votre panier est vide
                </div>
            </div>

            <!-- Total et boutons -->
            <div id="cart-total-mobile" class="border-t border-gray-200 pt-4 flex justify-between items-center font-luxury text-gray-900 text-lg hidden">
                <span>Total</span>
                <span id="total-price-mobile">0,00fcfa</span>
            </div>

            <button id="checkout-btn-mobile" class="mt-6 w-full bg-[#b88b55] text-white py-4 rounded-xl font-elegant text-lg hover:bg-[#a37445] transition-colors duration-300 shadow-lg hidden" onclick="checkout()">
                Passer à la caisse
            </button>

            <button id="clear-cart-btn-mobile" class="mt-3 w-full border-2 border-gray-300 text-gray-700 py-3 rounded-xl font-elegant text-lg hover:bg-gray-50 transition-colors duration-300 hidden" onclick="clearCart()">
                Vider le panier
            </button>
        </div>
    </div>
</div>

<!-- Panier Desktop -->
<div id="panier-desktop" class="hidden md:block fixed right-4 bottom-4 xl:right-6 xl:bottom-6 w-80 xl:w-96 bg-white shadow-2xl rounded-2xl p-4 xl:p-6 flex flex-col space-y-4 animate-fade-up border border-gray-100 z-40">
    <div class="flex justify-between items-center pb-2 xl:pb-3 border-b border-gray-100">
        <h4 class="font-luxury text-lg xl:text-xl text-gray-900">Votre Panier</h4>
        <span id="cart-count-desktop" class="bg-[#b88b55] text-white text-xs xl:text-sm rounded-full w-6 h-6 xl:w-8 xl:h-8 flex items-center justify-center">0</span>
    </div>

    <div id="cart-items-desktop" class="flex flex-col space-y-3 xl:space-y-4 max-h-60 xl:max-h-72 overflow-y-auto scrollbar-thin pr-2 xl:pr-3 py-2">
        <div class="text-center text-gray-400 font-elegant py-4 xl:py-8 text-base xl:text-lg">
            Votre panier est vide
        </div>
    </div>

    <div id="cart-total-desktop" class="border-t border-gray-200 pt-3 xl:pt-4 flex justify-between items-center font-luxury text-gray-900 text-lg xl:text-xl hidden">
        <span>Total</span>
        <span id="total-price-desktop">0,00fcfa</span>
    </div>

    <button id="checkout-btn-desktop" class="mt-2 xl:mt-4 w-full bg-[#b88b55] text-white py-3 xl:py-4 rounded-xl font-elegant text-base xl:text-lg hover:bg-[#a37445] transition-colors duration-300 shadow-lg hover:shadow-xl hidden" onclick="checkout()">
        Passer à la caisse
    </button>

    <button id="clear-cart-btn-desktop" class="w-full border border-gray-300 text-gray-700 py-2 xl:py-3 rounded-xl font-elegant text-base xl:text-lg hover:bg-gray-50 transition-colors duration-300 hidden" onclick="clearCart()">
        Vider le panier
    </button>
</div>

<!-- Scripts JavaScript -->
<script>
    // Données des produits par collection avec images
    const collections = {
        savons: {
            title: "Savons Surgras",
            description: "Savons doux et nourrissants, délicatement parfumés aux essences naturelles.",
            products: [
                { id: 19, name: "Savon Lavande de Provence", description: "Savon surgras à la lavande de Provence pour une relaxation totale.", price: 8.99, image: "{{ asset('image/surgras.png') }}", color: "bg-purple-50" },
                { id: 20, name: "Savon Citron Menthe", description: "Savon tonifiant au citron et menthe pour un réveil énergisant.", price: 8.50, image: "{{ asset('image/surgras.png') }}", color: "bg-yellow-50" },
                { id: 21, name: "Savon Lait d'Ânesse Bio", description: "Savon nourrissant au lait d'ânesse pour une peau douce et veloutée.", price: 12.99, image: "{{ asset('image/surgras.png') }}", color: "bg-white" },
                { id: 22, name: "Savon Chocolat Vanille", description: "Savon gourmand au cacao et vanille pour un moment de douceur.", price: 9.99, image: "{{ asset('image/surgras.png') }}", color: "bg-amber-50" },
                { id: 23, name: "Savon Thé Vert Matcha", description: "Savon purifiant au thé vert matcha pour une peau nette et pure.", price: 10.50, image: "{{ asset('image/surgras.png') }}", color: "bg-green-50" },
                { id: 24, name: "Savon Fleur de Cerisier", description: "Savon délicat parfum fleur de cerisier pour une peau parfumée.", price: 11.99, image: "{{ asset('image/surgras.png') }}", color: "bg-pink-50" }
            ]
        }
    };

    // Panier
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Afficher une collection
    function showCollection(collectionId) {
        const collection = collections[collectionId];
        if (!collection) return;

        // Mettre à jour le titre et la description
        document.getElementById('collection-title').textContent = collection.title;
        document.getElementById('collection-description').textContent = collection.description;

        // Générer les produits
        const container = document.getElementById('produits-container');
        container.innerHTML = '';

        collection.products.forEach((product, index) => {
            const isEven = index % 2 === 0;

            // Version Mobile: Layout horizontal alterné avec lien vers page détail
            const mobileLayout = `
                <div class="md:hidden group bg-white rounded-2xl shadow-lg overflow-hidden transform transition-all duration-500 hover:scale-[1.02] hover:shadow-xl animate-zoom-soft delay-${(index+1)*100} mb-8">
                    <div class="flex ${isEven ? 'flex-row' : 'flex-row-reverse'}">
                        <!-- Lien vers page détail - Image -->
                        <a href="/detail" class="w-2/5 ${product.color} flex items-center justify-center p-6">
                            <img src="${product.image}" alt="${product.name}"
                                 class="h-40 w-full object-contain transform group-hover:scale-110 transition-transform duration-500">
                        </a>

                        <!-- Contenu -->
                        <div class="w-3/5 p-5 flex flex-col justify-between">
                            <div>
                                <!-- Lien vers page détail - Titre -->
                                <a href="/detail" class="block">
                                    <h3 class="font-luxury text-lg text-gray-900 mb-3 group-hover:text-[#b88b55] transition-colors duration-300">
                                        ${product.name}
                                    </h3>
                                </a>
                                <p class="text-gray-600 font-elegant text-sm mb-4 leading-relaxed line-clamp-3">
                                    ${product.description}
                                </p>
                            </div>

                            <div class="flex items-center justify-between">
                                <span class="font-luxury text-lg text-gray-900">${product.price.toFixed(2)}fcfa</span>
                                <div class="flex space-x-2">
                                    <!-- Lien vers page détail - Bouton -->
                                    <a href="/detail"
                                       class="border border-[#b88b55] text-[#b88b55] px-4 py-2 rounded-lg font-elegant text-sm hover:bg-[#f9f5f0] transition-colors duration-300">
                                        Voir
                                    </a>
                                    <button onclick="addToCart(${product.id}, '${product.name}', ${product.price})"
                                            class="bg-[#b88b55] text-white px-4 py-2 rounded-lg font-elegant text-sm hover:bg-[#a37445] transition-colors duration-300 shadow-md">
                                        +
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;

            // Version Desktop: Layout grid classique avec lien vers page détail
            const desktopLayout = `
                <div class="hidden md:block group bg-white rounded-2xl md:rounded-3xl shadow-lg md:shadow-xl overflow-hidden transform transition-all duration-500 md:duration-700 hover:scale-105 hover:shadow-xl md:hover:shadow-2xl animate-zoom-soft delay-${(index+1)*100}">
                    <!-- Lien vers page détail - Image -->
                    <a href="/detail" class="block h-48 sm:h-56 md:h-80 ${product.color} relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center p-4 md:p-8">
                            <img src="${product.image}" alt="${product.name}"
                                 class="h-full w-full object-contain transform group-hover:scale-105 md:group-hover:scale-110 transition-transform duration-500 md:duration-700">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 md:duration-700"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="bg-white/90 backdrop-blur-sm text-[#b88b55] font-elegant px-6 py-3 rounded-full text-lg shadow-lg transform -translate-y-2">
                                Voir détails
                            </span>
                        </div>
                    </a>
                    <div class="p-4 md:p-6 lg:p-8 text-center">
                        <!-- Lien vers page détail - Titre -->
                        <a href="/detail" class="block">
                            <h3 class="font-luxury text-lg md:text-xl lg:text-2xl text-gray-900 mb-2 md:mb-4 group-hover:text-[#b88b55] transition-colors duration-300">
                                ${product.name}
                            </h3>
                        </a>
                        <p class="text-gray-600 font-elegant text-sm md:text-base lg:text-lg mb-4 md:mb-6 leading-relaxed line-clamp-2">
                            ${product.description}
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="font-luxury text-lg md:text-xl text-gray-900">${product.price.toFixed(2)}fcfa</span>
                            <div class="flex space-x-2">
                                <!-- Lien vers page détail - Bouton -->
                                <a href="/detail"
                                   class="border border-[#b88b55] text-[#b88b55] px-4 md:px-6 py-2 md:py-3 rounded-lg md:rounded-xl font-elegant text-sm md:text-lg hover:bg-[#f9f5f0] transition-colors duration-300">
                                    Détails
                                </a>
                                <button onclick="addToCart(${product.id}, '${product.name}', ${product.price})"
                                        class="bg-[#b88b55] text-white px-4 md:px-6 py-2 md:py-3 rounded-lg md:rounded-xl font-elegant text-sm md:text-lg hover:bg-[#a37445] transition-all duration-300 shadow-md md:shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                    Ajouter
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            `;

            const productElement = document.createElement('div');
            productElement.innerHTML = mobileLayout + desktopLayout;
            container.appendChild(productElement);
        });

        // Scroll vers la section produits (sauf mobile)
        if (window.innerWidth > 768) {
            document.getElementById('produits-section').scrollIntoView({ behavior: 'smooth' });
        }
    }

    // Ajouter au panier
    function addToCart(productId, productName, price, event) {
        if (event) event.stopPropagation();

        // Vérifier si le produit est déjà dans le panier
        const existingItem = cart.find(item => item.id === productId);

        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cart.push({
                id: productId,
                name: productName,
                price: price,
                quantity: 1
            });
        }

        // Sauvegarder dans localStorage
        localStorage.setItem('cart', JSON.stringify(cart));

        // Mettre à jour l'affichage du panier
        updateCartDisplay();

        // Animation de feedback
        const cartCount = window.innerWidth < 768 ?
            document.getElementById('cart-count-mobile') :
            document.getElementById('cart-count-desktop');

        cartCount.classList.add('scale-150', 'animate-pulse');
        setTimeout(() => {
            cartCount.classList.remove('scale-150', 'animate-pulse');
        }, 300);

        // Ouvrir le panier sur mobile
        if (window.innerWidth < 768) {
            openMobileCart();
        }

        // Notification
        showNotification(`${productName} ajouté au panier`);
    }

    // Mettre à jour l'affichage du panier
    function updateCartDisplay() {
        const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);

        // Mettre à jour tous les compteurs
        document.getElementById('cart-count-mobile').textContent = totalItems;
        document.getElementById('cart-count-desktop').textContent = totalItems;

        // Gestion Desktop
        const cartItemsDesktop = document.getElementById('cart-items-desktop');
        const cartTotalDesktop = document.getElementById('cart-total-desktop');
        const totalPriceDesktop = document.getElementById('total-price-desktop');
        const checkoutBtnDesktop = document.getElementById('checkout-btn-desktop');
        const clearCartBtnDesktop = document.getElementById('clear-cart-btn-desktop');

        // Gestion Mobile
        const cartItemsMobile = document.getElementById('cart-items-mobile');
        const cartTotalMobile = document.getElementById('cart-total-mobile');
        const totalPriceMobile = document.getElementById('total-price-mobile');
        const checkoutBtnMobile = document.getElementById('checkout-btn-mobile');
        const clearCartBtnMobile = document.getElementById('clear-cart-btn-mobile');

        if (cart.length === 0) {
            // Desktop
            cartItemsDesktop.innerHTML = '<div class="text-center text-gray-400 font-elegant py-4 xl:py-8 text-base xl:text-lg">Votre panier est vide</div>';
            cartTotalDesktop.classList.add('hidden');
            checkoutBtnDesktop.classList.add('hidden');
            clearCartBtnDesktop.classList.add('hidden');

            // Mobile
            cartItemsMobile.innerHTML = '<div class="text-center text-gray-400 font-elegant py-8 text-lg">Votre panier est vide</div>';
            cartTotalMobile.classList.add('hidden');
            checkoutBtnMobile.classList.add('hidden');
            clearCartBtnMobile.classList.add('hidden');
            return;
        }

        // Calculer le total
        let total = 0;

        // Mettre à jour Desktop
        cartItemsDesktop.innerHTML = '';
        cart.forEach(item => {
            const itemTotal = item.price * item.quantity;
            total += itemTotal;

            const itemElement = document.createElement('div');
            itemElement.className = 'flex justify-between items-center text-gray-700 font-elegant text-sm xl:text-base py-2 xl:py-3 px-1 xl:px-2 hover:bg-gray-50 rounded-lg transition-colors duration-300';
            itemElement.innerHTML = `
                <div class="flex-1">
                    <div class="font-medium truncate">${item.name}</div>
                    <div class="text-xs xl:text-sm text-gray-500 mt-1">${item.quantity} × ${item.price.toFixed(2)}fcfa</div>
                </div>
                <div class="flex items-center space-x-2 xl:space-x-3 ml-2">
                    <button onclick="updateQuantity(${item.id}, -1)" class="text-gray-400 hover:text-[#b88b55] text-lg xl:text-xl w-6 h-6 xl:w-8 xl:h-8 flex items-center justify-center hover:bg-gray-100 rounded-full">−</button>
                    <span class="font-luxury text-base xl:text-lg whitespace-nowrap">${itemTotal.toFixed(2)}fcfa</span>
                    <button onclick="updateQuantity(${item.id}, 1)" class="text-gray-400 hover:text-[#b88b55] text-lg xl:text-xl w-6 h-6 xl:w-8 xl:h-8 flex items-center justify-center hover:bg-gray-100 rounded-full">+</button>
                </div>
            `;
            cartItemsDesktop.appendChild(itemElement);
        });

        totalPriceDesktop.textContent = `${total.toFixed(2)}fcfa`;
        cartTotalDesktop.classList.remove('hidden');
        checkoutBtnDesktop.classList.remove('hidden');
        clearCartBtnDesktop.classList.remove('hidden');

        // Mettre à jour Mobile
        cartItemsMobile.innerHTML = '';
        total = 0; // Réinitialiser pour recalculer
        cart.forEach(item => {
            const itemTotal = item.price * item.quantity;
            total += itemTotal;

            const itemElement = document.createElement('div');
            itemElement.className = 'flex justify-between items-center text-gray-700 font-elegant text-base py-4 px-2 hover:bg-gray-50 rounded-lg transition-colors duration-300';
            itemElement.innerHTML = `
                <div class="flex-1">
                    <div class="font-medium">${item.name}</div>
                    <div class="text-sm text-gray-500 mt-1">${item.quantity} × ${item.price.toFixed(2)}fcfa</div>
                </div>
                <div class="flex items-center space-x-3 ml-2">
                    <button onclick="updateQuantity(${item.id}, -1)" class="text-gray-400 hover:text-[#b88b55] text-xl w-8 h-8 flex items-center justify-center hover:bg-gray-100 rounded-full">−</button>
                    <span class="font-luxury text-lg whitespace-nowrap">${itemTotal.toFixed(2)}fcfa</span>
                    <button onclick="updateQuantity(${item.id}, 1)" class="text-gray-400 hover:text-[#b88b55] text-xl w-8 h-8 flex items-center justify-center hover:bg-gray-100 rounded-full">+</button>
                </div>
            `;
            cartItemsMobile.appendChild(itemElement);
        });

        totalPriceMobile.textContent = `${total.toFixed(2)}fcfa`;
        cartTotalMobile.classList.remove('hidden');
        checkoutBtnMobile.classList.remove('hidden');
        clearCartBtnMobile.classList.remove('hidden');
    }

    // Mettre à jour la quantité
    function updateQuantity(productId, change) {
        const item = cart.find(item => item.id === productId);
        if (!item) return;

        item.quantity += change;

        // Supprimer si quantité <= 0
        if (item.quantity <= 0) {
            cart = cart.filter(item => item.id !== productId);
        }

        // Sauvegarder et mettre à jour
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartDisplay();
    }

    // Ouvrir le panier mobile
    function openMobileCart() {
        const mobileCart = document.getElementById('panier-mobile');
        const drawer = document.getElementById('mobile-drawer');
        mobileCart.classList.remove('hidden');
        setTimeout(() => {
            drawer.classList.remove('translate-y-full');
            mobileCart.classList.remove('opacity-0');
        }, 10);

        // Bloquer le scroll
        document.body.style.overflow = 'hidden';
    }

    // Fermer le panier mobile
    function closeMobileCart() {
        const mobileCart = document.getElementById('panier-mobile');
        const drawer = document.getElementById('mobile-drawer');
        drawer.classList.add('translate-y-full');
        mobileCart.classList.add('opacity-0');
        setTimeout(() => {
            mobileCart.classList.add('hidden');
        }, 300);

        // Rétablir le scroll
        document.body.style.overflow = '';
    }

    // Vider le panier
    function clearCart() {
        if (confirm('Voulez-vous vraiment vider votre panier ?')) {
            cart = [];
            localStorage.removeItem('cart');
            updateCartDisplay();
            showNotification('Panier vidé');

            // Fermer le panier mobile si ouvert
            if (window.innerWidth < 768) {
                closeMobileCart();
            }
        }
    }

    // Commander
    function checkout() {
        if (cart.length === 0) return;

        const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        alert(`Commande confirmée !\n\nTotal: ${total.toFixed(2)}fcfa\n\nMerci pour votre achat !`);

        // Vider le panier après commande
        cart = [];
        localStorage.removeItem('cart');
        updateCartDisplay();

        // Fermer le panier mobile si ouvert
        if (window.innerWidth < 768) {
            closeMobileCart();
        }
    }

    // Notification
    function showNotification(message) {
        // Créer la notification
        const notification = document.createElement('div');
        notification.className = 'fixed top-4 right-4 bg-[#b88b55] text-white px-4 md:px-6 py-3 md:py-4 rounded-lg md:rounded-xl shadow-2xl font-elegant text-sm md:text-lg animate-fade-up z-50 flex items-center space-x-2 md:space-x-3 max-w-[90%] md:max-w-md';
        notification.innerHTML = `
            <span>${message}</span>
            <span class="text-xl md:text-2xl">🎉</span>
        `;

        // Ajouter au body
        document.body.appendChild(notification);

        // Supprimer après 3 secondes
        setTimeout(() => {
            notification.classList.add('opacity-0', 'translate-x-4');
            setTimeout(() => notification.remove(), 300);
        }, 3000);
    }

    // Initialiser
    document.addEventListener('DOMContentLoaded', function() {
        // Afficher la première collection par défaut
        showCollection('savons');

        // Mettre à jour le panier
        updateCartDisplay();

        // Événements pour le panier mobile
        document.getElementById('panier-mobile-trigger').addEventListener('click', openMobileCart);

        // Fermer le panier mobile en cliquant sur l'arrière-plan
        document.getElementById('panier-mobile').addEventListener('click', function(e) {
            if (e.target.id === 'panier-mobile') {
                closeMobileCart();
            }
        });

        // Empêcher la fermeture en cliquant sur le contenu
        document.getElementById('mobile-drawer').addEventListener('click', function(e) {
            e.stopPropagation();
        });
    });
</script>

<style>
    .font-luxury { font-family: 'Playfair Display', serif; }
    .font-elegant { font-family: 'Cormorant Garamond', serif; }

    @keyframes fade-up {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes zoom-soft {
        from { opacity: 0; transform: scale(0.95); }
        to { opacity: 1; transform: scale(1); }
    }

    .animate-fade-up { animation: fade-up 0.6s ease-out; }
    .animate-zoom-soft { animation: zoom-soft 0.4s ease-out; }

    .delay-100 { animation-delay: 100ms; }
    .delay-200 { animation-delay: 200ms; }
    .delay-300 { animation-delay: 300ms; }
    .delay-400 { animation-delay: 400ms; }
    .delay-500 { animation-delay: 500ms; }
    .delay-600 { animation-delay: 600ms; }

    /* Scroll personnalisé */
    .scrollbar-thin::-webkit-scrollbar {
        width: 4px;
    }

    .scrollbar-thin::-webkit-scrollbar-track {
        background: #f5f5f5;
        border-radius: 10px;
    }

    .scrollbar-thin::-webkit-scrollbar-thumb {
        background: #b88b55;
        border-radius: 10px;
    }

    /* Animation pour les images */
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-5px); }
    }

    .group:hover img {
        animation: float 3s ease-in-out infinite;
    }

    /* Animation drawer mobile */
    #mobile-drawer {
        transition: transform 0.3s ease-out;
    }

    #panier-mobile {
        transition: opacity 0.3s ease-out;
    }

    /* Pour les petits hover sur mobile */
    @media (max-width: 768px) {
        .hover\:scale-102:hover {
            transform: scale(1.02);
        }

        /* Empêcher les animations intenses sur mobile */
        .group:hover img {
            animation: none;
        }

        /* Limiter le nombre de lignes */
        .line-clamp-2 {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
        }

        .line-clamp-3 {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
        }
    }
</style>
@endsection

@extends('frontend.footer')
