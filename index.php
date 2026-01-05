<?php include 'partials/header.php'; ?>

<!-- HERO Section -->
<section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden" style="background-color: #1a1612;">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0 top-0 left-0 right-0 bottom-0" style="background-color: #1a1612;">
        <img src="assets/img/poseidon.png" alt="Restaurant Poseidon" class="w-full h-full object-cover object-center blur-[1px] scale-110" style="background-color: #1a1612;">
    </div>
    
    <!-- Overlay -->
    <div class="absolute inset-0 z-10 bg-gradient-to-b from-dark-900/75 via-dark-800/85 to-dark-900/95 top-0 left-0 right-0 bottom-0"></div>
    
    <!-- Content -->
    <div class="container mx-auto px-4 lg:px-8 max-w-7xl relative z-20 pt-32 pb-20 lg:pt-40 lg:py-32">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-start lg:items-center">
            <!-- Hero Text -->
            <div class="text-center lg:text-left space-y-6">
                <div class="space-y-4">
                    <p class="text-gold-light uppercase tracking-[0.2em] text-sm md:text-base font-medium letter-spacing-wider" data-translate="hero.subtitle">
                        Restaurant de evenimente
                    </p>
                    <h1 class="font-heading text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-light text-text-light leading-[1.1]">
                        <span class="block" data-translate="hero.title">Poseidon</span>
                        <span class="block text-gold-light font-normal mt-2" data-translate="hero.subtitle2">Restaurant de nunti</span>
                    </h1>
                </div>
                
                <div class="w-24 h-px bg-gradient-to-r from-transparent via-gold-light to-transparent mx-auto lg:mx-0"></div>
                
                <p class="text-lg md:text-xl text-text-muted leading-relaxed max-w-lg mx-auto lg:mx-0 font-light" data-translate="hero.description">
                    Transformăm momentele speciale ale vieții tale în evenimente memorabile, cu atenție la fiecare detaliu și servicii de excepție.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-4">
                    <a href="tel:+37369850503" class="px-8 py-4 bg-gold-light text-dark-900 font-semibold rounded-md hover:bg-gold-dark transition-all duration-300 uppercase tracking-wider text-sm shadow-lg hover:shadow-gold/40 transform hover:-translate-y-1 text-center" data-translate="hero.call">
                        Sună acum
                    </a>
                    <button onclick="scrollToSection('reservation'); return false;" class="px-8 py-4 bg-transparent border-2 border-gold-light text-gold-light font-semibold rounded-md hover:bg-gold-light hover:text-dark-900 transition-all duration-300 uppercase tracking-wider text-sm" data-translate="hero.reserve">
                        Rezervă data
                    </button>
                </div>
            </div>
            
            <!-- Reservation Form -->
            <div id="reservation" class="w-full mx-auto lg:mx-0">
                <?php include 'partials/reservation-form.php'; ?>
            </div>
        </div>
    </div>
</section>

<!-- Despre Restaurant -->
<?php include 'partials/about.php'; ?>

<!-- Galerie -->
<?php include 'partials/gallery.php'; ?>

<!-- Beneficii -->
<?php include 'partials/benefits.php'; ?>

<!-- Testimoniale -->
<?php include 'partials/testimonials.php'; ?>

<!-- Locație -->
<?php include 'partials/location.php'; ?>

<!-- CTA Final -->
<?php include 'partials/cta-final.php'; ?>

<?php include 'partials/footer.php'; ?>
