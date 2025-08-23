@php
    $services = [
        [
            'title' => 'Développement Web & Mobile',
            'description' => "Création d'applications web et mobiles sur mesure.",
            'icon' => 'ti ti-device-desktop',
            'features' => ['Site e-commerce', 'Application mobile', 'Solution sur mesure', 'API RESTful'],
        ],
        [
            'title' => 'UX/UI Design & Expérience Utilisateur',
            'description' => "Conception d'interfaces utilisateur intuitives et attrayantes.",
            'icon' => 'ti ti-brush',
            'features' => ["Design d'application", 'Prototypage', 'Tests utilisateurs', 'Intégration UI/UX'],
        ],
        [
            'title' => 'Conseil & Accompagnement',
            'description' => 'Accompagnement stratégique pour la transformation digitale.',
            'icon' => 'ti ti-briefcase',
            'features' => [
                'Audit de vos besoins',
                'Conseils personnalisés',
                'Accompagnement au changement',
                'Formation et sensibilisation',
            ],
        ],
        [
            'title' => 'Maintenance & Support & Suivi',
            'description' => 'Services de maintenance et support technique pour vos applications.',
            'icon' => 'ti ti-lifebuoy',
            'features' => [
                'Support technique réactif',
                'Mises à jour régulières',
                'Surveillance de la performance',
                'Sauvegardes et restauration',
            ],
        ],
    ];
@endphp
<section class="py-20 bg-slate-50/60">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="flex items-end justify-between mb-12 gap-8">
            <h2 class="text-2xl md:text-3xl font-bold tracking-tight text-slate-900">
                {{ __('messages.sections.services') }}</h2>
            <a href="{{ route('services.index', app()->getLocale()) }}"
                class="hidden md:inline-flex items-center gap-2 text-sm font-medium text-brand-700 hover:text-brand-600">Tout
                voir →</a>
        </div>
        <div class="grid md:grid-cols-4 gap-8">
            @foreach ($services as $service)
                <div class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white/70 backdrop-blur-md  hover:border-brand-300 hover:shadow-soft transition flex flex-col  text-card-foreground shadow-sm group hover:shadow-premium  duration-500 hover:-translate-y-2   animate-fade-up"
                    style="animation-delay: 0ms;">
                    <div class="flex flex-col space-y-1.5 p-6  pb-4">
                        <div
                            class="absolute -right-6 -top-6 h-20 w-20 rounded-full bg-gradient-to-br from-brand-200 to-brand-100 opacity-0 group-hover:opacity-100 blur-xl transition">
                        </div>
                        <div
                            class="  rounded-xl  flex items-center justify-start text-gray-700    group-hover:text-brand-700 ">
                            <i class="bg-slate-200  rounded-lg p-2 {{ $service['icon'] }} text-4xl"></i>
                        </div>
                        <h3
                            class="tracking-tight text-xl font-bold text-foreground group-hover:text-primary transition-colors group-hover:text-brand-700 mt-3">
                            {{ $service['title'] }}</h3>
                        <p class="text-sm text-slate-600 pb-2">
                            {{ $service['description'] }}</p>
                        <hr class="">
                    </div>
                    <div class="p-6 pt-0">
                        <ul class="space-y-2 mb-6">
                            @foreach ($service['features'] as $f)
                                <li class="flex items-center text-sm text-muted-foreground">
                                    <i class="ti ti-check me-2 text-brand-500"></i> {{ $f }}
                                </li>
                            @endforeach

                        </ul>
                        <button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-full group-hover:bg-slate-800 group-hover:text-white transition-all duration-300">
                            En savoir plus
                            <i class="ti ti-arrow-right"></i>
                        </button>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="bg-white my-5 mt-12 shadow-soft backdrop-blur-sm rounded-2xl p-8 mb-12 animate-fade-up ">
            <h3 class="text-2xl font-bold text-foreground mb-8 text-center">Services Complémentaires</h3>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="flex items-start space-x-4 p-4 rounded-xl hover:bg-white/80 transition-all duration-300">
                    <div
                        class="w-12 h-12 bg-brand-200 rounded-lg flex items-center justify-center text-primary flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-code-xml h-6 w-6">
                            <path d="m18 16 4-4-4-4"></path>
                            <path d="m6 8-4 4 4 4"></path>
                            <path d="m14.5 4-5 16"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-foreground mb-1">Refonte &amp; Migration</h4>
                        <p class="text-sm text-muted-foreground">Modernisation de vos systèmes existants</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-4 rounded-xl hover:bg-white/80 transition-all duration-300">
                    <div
                        class="w-12 h-12 bg-brand-200 rounded-lg flex items-center justify-center text-primary flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-palette h-6 w-6">
                            <circle cx="13.5" cy="6.5" r=".5" fill="currentColor"></circle>
                            <circle cx="17.5" cy="10.5" r=".5" fill="currentColor"></circle>
                            <circle cx="8.5" cy="7.5" r=".5" fill="currentColor"></circle>
                            <circle cx="6.5" cy="12.5" r=".5" fill="currentColor"></circle>
                            <path
                                d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-foreground mb-1">Rédaction cahier des charges</h4>
                        <p class="text-sm text-muted-foreground">Analyse des besoins et rédaction des spécifications</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-4 rounded-xl hover:bg-white/80 transition-all duration-300">
                    <div
                        class="w-12 h-12 bg-brand-200 rounded-lg flex items-center justify-center text-primary flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-shield h-6 w-6">
                            <path
                                d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-foreground mb-1">Sécurité &amp; Performance</h4>
                        <p class="text-sm text-muted-foreground">Optimisation et sécurisation de vos applications</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
