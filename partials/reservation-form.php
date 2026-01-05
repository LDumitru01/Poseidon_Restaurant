<!-- Formular rapid de rezervare -->
<form id="reservationForm" class="bg-gradient-to-br from-dark-800/95 via-dark-700/40 to-dark-800/95 backdrop-blur-md border border-gold/30 rounded-xl p-6 md:p-8 shadow-2xl space-y-5" novalidate>
    <h3 class="font-heading text-2xl md:text-3xl text-gold-light text-center mb-6" data-translate="form.title">Verifică disponibilitatea</h3>
    
    <div class="space-y-2">
        <label for="nume" class="block text-sm font-medium text-text-muted" data-translate="form.name.label">Nume complet *</label>
        <input 
            type="text" 
            id="nume" 
            name="nume" 
            required 
            data-translate="form.name.placeholder"
            data-placeholder="true"
            placeholder="Introdu numele tău"
            class="w-full px-4 py-3 bg-dark-700/50 border border-gold/20 rounded-md text-text-light placeholder-text-subtle focus:outline-none focus:border-gold-light focus:ring-1 focus:ring-gold-light transition-all duration-300"
        >
    </div>
    
    <div class="space-y-2">
        <label for="telefon" class="block text-sm font-medium text-text-muted" data-translate="form.phone.label">Telefon *</label>
        <input 
            type="tel" 
            id="telefon" 
            name="telefon" 
            required 
            data-translate="form.phone.placeholder"
            data-placeholder="true"
            placeholder="+373 XXXX XXXX"
            class="w-full px-4 py-3 bg-dark-700/50 border border-gold/20 rounded-md text-text-light placeholder-text-subtle focus:outline-none focus:border-gold-light focus:ring-1 focus:ring-gold-light transition-all duration-300"
        >
    </div>
    
    <div class="space-y-2">
        <label for="tip-eveniment" class="block text-sm font-medium text-text-muted" data-translate="form.event.label">Tip eveniment *</label>
        <select 
            id="tip-eveniment" 
            name="tip-eveniment" 
            required
            class="w-full px-4 py-3 bg-dark-700/50 border border-gold/20 rounded-md text-text-light focus:outline-none focus:border-gold-light focus:ring-1 focus:ring-gold-light transition-all duration-300"
        >
            <option value="" data-translate="form.event.placeholder">Selectează tipul evenimentului</option>
            <option value="nunta" data-translate="form.event.wedding">Nuntă</option>
            <option value="cununie" data-translate="form.event.civil">Cununie</option>
            <option value="botez" data-translate="form.event.baptism">Botez</option>
            <option value="alt" data-translate="form.event.other">Alt eveniment</option>
        </select>
    </div>
    
    <div class="space-y-2">
        <label for="data-eveniment" class="block text-sm font-medium text-text-muted" data-translate="form.date.label">Data evenimentului *</label>
        <input 
            type="date" 
            id="data-eveniment" 
            name="data-eveniment" 
            required
            class="w-full px-4 py-3 bg-dark-700/50 border border-gold/20 rounded-md text-text-light focus:outline-none focus:border-gold-light focus:ring-1 focus:ring-gold-light transition-all duration-300"
        >
    </div>
    
    <div class="flex items-center space-x-2">
        <input 
            type="checkbox" 
            id="data-flexibila" 
            name="data-flexibila"
            class="w-4 h-4 text-gold-light bg-dark-700 border-gold/30 rounded focus:ring-gold-light focus:ring-2"
        >
        <label for="data-flexibila" class="text-sm text-text-muted cursor-pointer" data-translate="form.flexible">Data este flexibilă</label>
    </div>
    
    <button 
        type="submit" 
        class="w-full px-6 py-3 bg-gold-light text-dark-900 font-semibold rounded-md hover:bg-gold-dark transition-all duration-300 uppercase tracking-wider text-sm shadow-lg hover:shadow-gold/40 transform hover:-translate-y-0.5"
        data-translate="form.submit"
    >
        Verifică disponibilitatea
    </button>
    
    <p class="text-xs text-center text-text-subtle italic pt-2" data-translate="form.note">
        Te contactăm rapid pentru confirmare și ofertă personalizată.
    </p>
    
    <div id="formMessage" class="hidden mt-4 p-4 rounded-md text-sm text-center"></div>
</form>
