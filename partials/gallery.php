<!-- Galerie Foto -->
<section id="galerie" class="py-24 lg:py-32 bg-gradient-to-b from-dark-900 via-dark-800/50 to-dark-900 relative overflow-hidden">
    <!-- Animated background elements -->
    <div class="absolute top-0 left-0 w-full h-full opacity-[0.03]">
        <div class="absolute top-20 right-10 w-56 h-56 border border-gold-light rounded-full animate-pulse"></div>
        <div class="absolute bottom-20 left-10 w-40 h-40 border border-gold-light rounded-full animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/3 w-32 h-32 border border-gold-light/30 rounded-full animate-pulse" style="animation-delay: 2s;"></div>
    </div>
    
    <!-- Gradient orbs -->
    <div class="absolute top-1/3 right-0 w-96 h-96 bg-gold-light/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-1/3 left-0 w-96 h-96 bg-gold-light/5 rounded-full blur-3xl"></div>
    
    <div class="container mx-auto px-4 lg:px-8 max-w-7xl relative z-10">
        <!-- Header Section -->
        <div class="text-center mb-20 lg:mb-24">
            <div class="inline-block mb-6">
                <span class="text-gold-light/60 text-sm md:text-base uppercase tracking-[0.3em] font-medium" data-translate="gallery.label">Momentele Noastre</span>
            </div>
            <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl xl:text-7xl text-gold-light mb-6 relative">
                <span data-translate="gallery.title">Galerie – Nunți organizate la noi</span>
                <span class="absolute -bottom-3 left-1/2 transform -translate-x-1/2 w-32 h-0.5 bg-gradient-to-r from-transparent via-gold-light to-transparent"></span>
            </h2>
            <p class="text-text-muted text-lg md:text-xl mt-8 max-w-3xl mx-auto leading-relaxed" data-translate="gallery.description">
                Descoperă atmosfera magică a evenimentelor noastre și lasă-te inspirat pentru momentul tău special
            </p>
        </div>
        
        <!-- Gallery Grid - Masonry Style -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8" id="galleryGrid">
            <!-- Image 1 -->
            <div class="gallery-item relative overflow-hidden rounded-2xl aspect-[4/3] group cursor-pointer" data-image="assets/img/imagine1poseidon.jpg" data-alt="Nuntă la Restaurant Poseidon">
                <!-- Glow effect -->
                <div class="absolute -inset-1 bg-gradient-to-r from-gold-light/30 via-gold-dark/20 to-gold-light/30 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"></div>
                
                <!-- Image -->
                <div class="relative h-full overflow-hidden rounded-2xl border-2 border-gold/20 group-hover:border-gold-light/50 transition-all duration-500">
                    <img src="assets/img/imagine1poseidon.jpg" alt="Nuntă la Restaurant Poseidon" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-125" loading="lazy">
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-dark-900/90 via-dark-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <!-- Content Overlay -->
                    <div class="absolute inset-0 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">
                        <div class="relative mb-4">
                            <div class="absolute inset-0 bg-gold-light/20 rounded-full blur-xl"></div>
                            <div class="relative w-20 h-20 rounded-full bg-gradient-to-br from-gold-light/30 to-gold-dark/20 border-2 border-gold-light/50 flex items-center justify-center backdrop-blur-sm">
                                <svg class="w-10 h-10 text-gold-light transform group-hover:rotate-90 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="text-gold-light font-heading text-lg font-semibold" data-translate="gallery.view">Vezi imaginea</p>
                    </div>
                </div>
            </div>
            
            <!-- Image 2 -->
            <div class="gallery-item relative overflow-hidden rounded-2xl aspect-[4/3] group cursor-pointer" data-image="assets/img/imagine2poseidon.jpg" data-alt="Nuntă la Restaurant Poseidon">
                <div class="absolute -inset-1 bg-gradient-to-r from-gold-light/30 via-gold-dark/20 to-gold-light/30 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"></div>
                <div class="relative h-full overflow-hidden rounded-2xl border-2 border-gold/20 group-hover:border-gold-light/50 transition-all duration-500">
                    <img src="assets/img/imagine2poseidon.jpg" alt="Nuntă la Restaurant Poseidon" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-125" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-dark-900/90 via-dark-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute inset-0 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">
                        <div class="relative mb-4">
                            <div class="absolute inset-0 bg-gold-light/20 rounded-full blur-xl"></div>
                            <div class="relative w-20 h-20 rounded-full bg-gradient-to-br from-gold-light/30 to-gold-dark/20 border-2 border-gold-light/50 flex items-center justify-center backdrop-blur-sm">
                                <svg class="w-10 h-10 text-gold-light transform group-hover:rotate-90 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="text-gold-light font-heading text-lg font-semibold" data-translate="gallery.view">Vezi imaginea</p>
                    </div>
                </div>
            </div>
            
            <!-- Image 3 -->
            <div class="gallery-item relative overflow-hidden rounded-2xl aspect-[4/3] group cursor-pointer" data-image="assets/img/imagine3poseidon.png" data-alt="Nuntă la Restaurant Poseidon">
                <div class="absolute -inset-1 bg-gradient-to-r from-gold-light/30 via-gold-dark/20 to-gold-light/30 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"></div>
                <div class="relative h-full overflow-hidden rounded-2xl border-2 border-gold/20 group-hover:border-gold-light/50 transition-all duration-500">
                    <img src="assets/img/imagine3poseidon.png" alt="Nuntă la Restaurant Poseidon" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-125" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-dark-900/90 via-dark-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute inset-0 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">
                        <div class="relative mb-4">
                            <div class="absolute inset-0 bg-gold-light/20 rounded-full blur-xl"></div>
                            <div class="relative w-20 h-20 rounded-full bg-gradient-to-br from-gold-light/30 to-gold-dark/20 border-2 border-gold-light/50 flex items-center justify-center backdrop-blur-sm">
                                <svg class="w-10 h-10 text-gold-light transform group-hover:rotate-90 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="text-gold-light font-heading text-lg font-semibold" data-translate="gallery.view">Vezi imaginea</p>
                    </div>
                </div>
            </div>
            
            <!-- Image 4 -->
            <div class="gallery-item relative overflow-hidden rounded-2xl aspect-[4/3] group cursor-pointer" data-image="assets/img/imagine4poseidon.jpg" data-alt="Nuntă la Restaurant Poseidon">
                <div class="absolute -inset-1 bg-gradient-to-r from-gold-light/30 via-gold-dark/20 to-gold-light/30 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"></div>
                <div class="relative h-full overflow-hidden rounded-2xl border-2 border-gold/20 group-hover:border-gold-light/50 transition-all duration-500">
                    <img src="assets/img/imagine4poseidon.jpg" alt="Nuntă la Restaurant Poseidon" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-125" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-dark-900/90 via-dark-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute inset-0 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">
                        <div class="relative mb-4">
                            <div class="absolute inset-0 bg-gold-light/20 rounded-full blur-xl"></div>
                            <div class="relative w-20 h-20 rounded-full bg-gradient-to-br from-gold-light/30 to-gold-dark/20 border-2 border-gold-light/50 flex items-center justify-center backdrop-blur-sm">
                                <svg class="w-10 h-10 text-gold-light transform group-hover:rotate-90 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="text-gold-light font-heading text-lg font-semibold" data-translate="gallery.view">Vezi imaginea</p>
                    </div>
                </div>
            </div>
            
            <!-- Image 5 -->
            <div class="gallery-item relative overflow-hidden rounded-2xl aspect-[4/3] group cursor-pointer" data-image="assets/img/imagine5poseidon.jpg" data-alt="Nuntă la Restaurant Poseidon">
                <div class="absolute -inset-1 bg-gradient-to-r from-gold-light/30 via-gold-dark/20 to-gold-light/30 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"></div>
                <div class="relative h-full overflow-hidden rounded-2xl border-2 border-gold/20 group-hover:border-gold-light/50 transition-all duration-500">
                    <img src="assets/img/imagine5poseidon.jpg" alt="Nuntă la Restaurant Poseidon" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-125" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-dark-900/90 via-dark-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute inset-0 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">
                        <div class="relative mb-4">
                            <div class="absolute inset-0 bg-gold-light/20 rounded-full blur-xl"></div>
                            <div class="relative w-20 h-20 rounded-full bg-gradient-to-br from-gold-light/30 to-gold-dark/20 border-2 border-gold-light/50 flex items-center justify-center backdrop-blur-sm">
                                <svg class="w-10 h-10 text-gold-light transform group-hover:rotate-90 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="text-gold-light font-heading text-lg font-semibold" data-translate="gallery.view">Vezi imaginea</p>
                    </div>
                </div>
            </div>
            
            <!-- Image 6 -->
            <div class="gallery-item relative overflow-hidden rounded-2xl aspect-[4/3] group cursor-pointer" data-image="assets/img/imagine6poseidon.jpg" data-alt="Nuntă la Restaurant Poseidon">
                <div class="absolute -inset-1 bg-gradient-to-r from-gold-light/30 via-gold-dark/20 to-gold-light/30 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"></div>
                <div class="relative h-full overflow-hidden rounded-2xl border-2 border-gold/20 group-hover:border-gold-light/50 transition-all duration-500">
                    <img src="assets/img/imagine6poseidon.jpg" alt="Nuntă la Restaurant Poseidon" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-125" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-dark-900/90 via-dark-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute inset-0 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">
                        <div class="relative mb-4">
                            <div class="absolute inset-0 bg-gold-light/20 rounded-full blur-xl"></div>
                            <div class="relative w-20 h-20 rounded-full bg-gradient-to-br from-gold-light/30 to-gold-dark/20 border-2 border-gold-light/50 flex items-center justify-center backdrop-blur-sm">
                                <svg class="w-10 h-10 text-gold-light transform group-hover:rotate-90 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="text-gold-light font-heading text-lg font-semibold" data-translate="gallery.view">Vezi imaginea</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Lightbox Modal - Separate Section -->
<section id="galleryLightboxSection" class="fixed inset-0 z-[9999] hidden" style="pointer-events: none;">
    <div id="galleryLightbox" class="w-full h-full bg-dark-900/98 backdrop-blur-xl flex items-center justify-center" style="pointer-events: auto;">
        <!-- Background overlay with pattern - Clickable to close -->
        <div id="lightboxOverlay" class="absolute inset-0 bg-gradient-to-br from-dark-900/95 via-dark-800/95 to-dark-900/95 cursor-pointer"></div>
        
        <!-- Close button -->
        <button id="closeLightbox" class="absolute top-6 right-6 z-50 text-gold-light hover:text-gold-dark transition-all duration-300 p-3 bg-dark-800/80 backdrop-blur-md rounded-full border border-gold/30 hover:border-gold-light/50 hover:bg-dark-700/90" style="pointer-events: auto;">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        
        <!-- Previous button -->
        <button id="prevImage" class="absolute left-6 top-1/2 transform -translate-y-1/2 z-50 text-gold-light hover:text-gold-dark transition-all duration-300 p-4 bg-dark-800/80 backdrop-blur-md rounded-full border border-gold/30 hover:border-gold-light/50 hover:bg-dark-700/90 hover:scale-110" style="pointer-events: auto;">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        
        <!-- Next button -->
        <button id="nextImage" class="absolute right-6 top-1/2 transform -translate-y-1/2 z-50 text-gold-light hover:text-gold-dark transition-all duration-300 p-4 bg-dark-800/80 backdrop-blur-md rounded-full border border-gold/30 hover:border-gold-light/50 hover:bg-dark-700/90 hover:scale-110" style="pointer-events: auto;">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
        
        <!-- Image container -->
        <div class="relative max-w-7xl mx-auto px-4 py-20 z-50" style="pointer-events: none;">
            <div class="relative" style="pointer-events: auto;">
                <div class="absolute -inset-4 bg-gradient-to-r from-gold-light/20 via-gold-dark/10 to-gold-light/20 rounded-3xl blur-2xl opacity-50"></div>
                <img id="lightboxImage" src="" alt="" class="relative max-w-full max-h-[85vh] mx-auto rounded-2xl shadow-2xl object-contain border-2 border-gold/20" style="pointer-events: auto;">
            </div>
        </div>
    </div>
</section>
