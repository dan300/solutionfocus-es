@extends('layouts.app')

@section('title', $page->meta_title ?? $page->title)
@section('description', $page->meta_description ?? '')

@section('content')
    @if(app()->getLocale() === 'en')
        {{-- English Content --}}
        <x-hero title="Meet Orsi Szabó" subtitle="Solution-Focused Psychologist & Coach" />

        <section class="py-16 bg-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Quote Section -->
                <div class="bg-gradient-to-r from-teal-500 to-teal-600 text-white p-12 rounded-2xl shadow-xl mb-16 text-center">
                    <blockquote class="text-3xl md:text-4xl font-light italic mb-4">
                        "If what you're doing works, do more of it!"
                    </blockquote>
                    <cite class="text-teal-100 text-lg">— Steve de Shazer</cite>
                </div>

                <!-- Intro -->
                <div class="prose prose-lg max-w-none mb-16">
                    <p class="text-xl text-gray-700 leading-relaxed text-center max-w-4xl mx-auto">
                        As a psychologist, coach, trainer, and mother, I love to admire the exciting discoveries and changes of my clients, friends, family, and any conversation partners: the useful differences between past and present.
                    </p>
                </div>

                <!-- When It Can Help -->
                <div class="mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Psychological consultation and coaching can be useful for you if...</h2>
                    
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-teal-50 p-6 rounded-xl border-l-4 border-teal-500 hover:shadow-lg transition">
                            <div class="flex items-start">
                                <span class="text-teal-600 text-2xl mr-3">✓</span>
                                <p class="text-gray-700">You want to live a happier, more satisfied, better life</p>
                            </div>
                        </div>
                        
                        <div class="bg-teal-50 p-6 rounded-xl border-l-4 border-teal-500 hover:shadow-lg transition">
                            <div class="flex items-start">
                                <span class="text-teal-600 text-2xl mr-3">✓</span>
                                <p class="text-gray-700">You are in a crisis</p>
                            </div>
                        </div>
                        
                        <div class="bg-teal-50 p-6 rounded-xl border-l-4 border-teal-500 hover:shadow-lg transition">
                            <div class="flex items-start">
                                <span class="text-teal-600 text-2xl mr-3">✓</span>
                                <p class="text-gray-700">As an autistic, ADHD, or neurotypical person, you want to (further) develop your abilities</p>
                            </div>
                        </div>
                        
                        <div class="bg-teal-50 p-6 rounded-xl border-l-4 border-teal-500 hover:shadow-lg transition">
                            <div class="flex items-start">
                                <span class="text-teal-600 text-2xl mr-3">✓</span>
                                <p class="text-gray-700">You want to get rid of a problem or unpleasant symptom</p>
                            </div>
                        </div>
                        
                        <div class="bg-teal-50 p-6 rounded-xl border-l-4 border-teal-500 hover:shadow-lg transition">
                            <div class="flex items-start">
                                <span class="text-teal-600 text-2xl mr-3">✓</span>
                                <p class="text-gray-700">You want to process childhood or adult trauma</p>
                            </div>
                        </div>
                        
                        <div class="bg-teal-50 p-6 rounded-xl border-l-4 border-teal-500 hover:shadow-lg transition">
                            <div class="flex items-start">
                                <span class="text-teal-600 text-2xl mr-3">✓</span>
                                <p class="text-gray-700">You want to see more clearly about life management or relationship difficulties</p>
                            </div>
                        </div>
                        
                        <div class="bg-teal-50 p-6 rounded-xl border-l-4 border-teal-500 hover:shadow-lg transition">
                            <div class="flex items-start">
                                <span class="text-teal-600 text-2xl mr-3">✓</span>
                                <p class="text-gray-700">You desire better self-esteem, confidence, or greater self-efficacy</p>
                            </div>
                        </div>
                        
                        <div class="bg-teal-50 p-6 rounded-xl border-l-4 border-teal-500 hover:shadow-lg transition">
                            <div class="flex items-start">
                                <span class="text-teal-600 text-2xl mr-3">✓</span>
                                <p class="text-gray-700">You're preparing to advance in your career</p>
                            </div>
                        </div>
                        
                        <div class="bg-teal-50 p-6 rounded-xl border-l-4 border-teal-500 hover:shadow-lg transition">
                            <div class="flex items-start">
                                <span class="text-teal-600 text-2xl mr-3">✓</span>
                                <p class="text-gray-700">You want to work on your self-awareness and mindfulness</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Client Experience -->
                <div class="bg-gray-50 p-12 rounded-2xl mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">My clients often experience that during sessions:</h2>
                    
                    <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold">1</div>
                            <p class="text-gray-700 pt-1">They have new thoughts and useful ideas about their possibilities</p>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold">2</div>
                            <p class="text-gray-700 pt-1">They become more hopeful about change</p>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold">3</div>
                            <p class="text-gray-700 pt-1">They feel better at the end of the session than at the beginning</p>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold">4</div>
                            <p class="text-gray-700 pt-1">They can trust me and themselves</p>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold">5</div>
                            <p class="text-gray-700 pt-1">They can be present in a relaxed atmosphere, able to speak easily, directly, and honestly</p>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold">6</div>
                            <p class="text-gray-700 pt-1">They can talk about even awkward, oppressive, or complicated things</p>
                        </div>
                    </div>
                </div>

                <!-- What You Can Count On -->
                <div class="mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">What you can definitely count on if you work with me:</h2>
                    
                    <div class="max-w-4xl mx-auto space-y-6">
                        <div class="bg-white p-8 rounded-xl shadow-md border-l-4 border-teal-600">
                            <p class="text-gray-700 text-lg">
                                <span class="font-semibold text-teal-600">→</span> I bring all my professional knowledge and goodwill to make our work together useful
                            </p>
                        </div>
                        
                        <div class="bg-white p-8 rounded-xl shadow-md border-l-4 border-teal-600">
                            <p class="text-gray-700 text-lg">
                                <span class="font-semibold text-teal-600">→</span> I expect you to do everything you can as well
                            </p>
                        </div>
                        
                        <div class="bg-white p-8 rounded-xl shadow-md border-l-4 border-teal-600">
                            <p class="text-gray-700 text-lg">
                                <span class="font-semibold text-teal-600">→</span> I regularly ask for your feedback so we can do more of what works and change what isn't helpful: you can indicate without any awkwardness that you'd like something different
                            </p>
                        </div>
                        
                        <div class="bg-white p-8 rounded-xl shadow-md border-l-4 border-teal-600">
                            <p class="text-gray-700 text-lg">
                                <span class="font-semibold text-teal-600">→</span> Sessions available in English
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Methods -->
                <div class="bg-gradient-to-br from-teal-50 to-blue-50 p-12 rounded-2xl mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Methods I Work With:</h2>
                    
                    <div class="grid md:grid-cols-3 gap-8 max-w-3xl mx-auto">
                        <div class="text-center">
                            <div class="bg-white w-24 h-24 mx-auto rounded-full flex items-center justify-center shadow-lg mb-4">
                                <span class="text-4xl">🎯</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Solution Focus</h3>
                        </div>
                        
                        <div class="text-center">
                            <div class="bg-white w-24 h-24 mx-auto rounded-full flex items-center justify-center shadow-lg mb-4">
                                <span class="text-4xl">❤️</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Person-Centered Approach</h3>
                        </div>
                        
                        <div class="text-center">
                            <div class="bg-white w-24 h-24 mx-auto rounded-full flex items-center justify-center shadow-lg mb-4">
                                <span class="text-4xl">🌊</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Hypnosis</h3>
                        </div>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="bg-white shadow-xl rounded-2xl p-12 border-t-4 border-teal-500">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Get in Touch</h2>
                    
                    <div class="grid md:grid-cols-2 gap-8 mb-8">
                        <div class="text-center p-6 bg-gray-50 rounded-lg">
                            <div class="text-4xl mb-4">📧</div>
                            <h3 class="font-semibold text-gray-900 mb-2">Email</h3>
                            <a href="mailto:szaboorsoly@gmail.com" class="text-teal-600 hover:text-teal-700">szaboorsoly@gmail.com</a>
                        </div>
                        
                        <div class="text-center p-6 bg-gray-50 rounded-lg">
                            <div class="text-4xl mb-4">📱</div>
                            <h3 class="font-semibold text-gray-900 mb-2">Phone / WhatsApp</h3>
                            <a href="tel:+34624256708" class="text-teal-600 hover:text-teal-700">+34 624 256 708</a>
                        </div>
                    </div>

                    <div class="border-t border-gray-200 pt-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Session Fees</h3>
                        
                        <div class="grid md:grid-cols-2 gap-6 max-w-3xl mx-auto">
                            <div class="bg-teal-50 p-6 rounded-lg">
                                <h4 class="font-semibold text-teal-900 mb-3">Online Sessions</h4>
                                <ul class="space-y-2 text-gray-700">
                                    <li>50 minutes: <span class="font-semibold">€65</span></li>
                                    <li>75 minutes: <span class="font-semibold">€85</span></li>
                                </ul>
                            </div>
                            
                            <div class="bg-teal-50 p-6 rounded-lg">
                                <h4 class="font-semibold text-teal-900 mb-3">In-Person (Barcelona)</h4>
                                <ul class="space-y-2 text-gray-700">
                                    <li>50 minutes: <span class="font-semibold">€80</span></li>
                                    <li>75 minutes: <span class="font-semibold">€110</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-6 text-center">
                            <p class="text-sm text-gray-600 italic">Cancellation policy: Sessions cancelled within 48 hours before the consultation are payable.</p>
                        </div>

                        <div class="mt-8 text-center">
                            <p class="text-gray-700 mb-2"><strong>Location:</strong></p>
                            <p class="text-gray-600">Espai Arjé: Barcelona, Ronda de Sant Pere, 11 1º-1ª, 08010 Barcelona</p>
                            <p class="text-gray-600">Online (Google Meet)</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    @else
        {{-- Spanish Content --}}
        <x-hero title="Conoce a Orsi Szabó" subtitle="Psicóloga y Coach Centrada en Soluciones" />

        <section class="py-16 bg-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Quote Section -->
                <div class="bg-gradient-to-r from-teal-500 to-teal-600 text-white p-12 rounded-2xl shadow-xl mb-16 text-center">
                    <blockquote class="text-3xl md:text-4xl font-light italic mb-4">
                        "¡Si lo que haces funciona, haz más de ello!"
                    </blockquote>
                    <cite class="text-teal-100 text-lg">— Steve de Shazer</cite>
                </div>

                <!-- Intro -->
                <div class="prose prose-lg max-w-none mb-16">
                    <p class="text-xl text-gray-700 leading-relaxed text-center max-w-4xl mx-auto">
                        Como psicóloga, coach, formadora y madre, me encanta admirar los emocionantes descubrimientos y cambios de mis clientes, amigos, familia y cualquier interlocutor: las diferencias útiles entre el pasado y el presente.
                    </p>
                </div>

                <!-- When It Can Help -->
                <div class="mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">La consulta psicológica y el coaching pueden ser útiles si...</h2>
                    
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-teal-50 p-6 rounded-xl border-l-4 border-teal-500 hover:shadow-lg transition">
                            <div class="flex items-start">
                                <span class="text-teal-600 text-2xl mr-3">✓</span>
                                <p class="text-gray-700">Quieres vivir una vida más feliz, satisfactoria y mejor</p>
                            </div>
                        </div>
                        
                        <div class="bg-teal-50 p-6 rounded-xl border-l-4 border-teal-500 hover:shadow-lg transition">
                            <div class="flex items-start">
                                <span class="text-teal-600 text-2xl mr-3">✓</span>
                                <p class="text-gray-700">Estás en crisis</p>
                            </div>
                        </div>
                        
                        <div class="bg-teal-50 p-6 rounded-xl border-l-4 border-teal-500 hover:shadow-lg transition">
                            <div class="flex items-start">
                                <span class="text-teal-600 text-2xl mr-3">✓</span>
                                <p class="text-gray-700">Como persona autista, con TDAH o neurotípica, quieres desarrollar (más) tus habilidades</p>
                            </div>
                        </div>
                        
                        <div class="bg-teal-50 p-6 rounded-xl border-l-4 border-teal-500 hover:shadow-lg transition">
                            <div class="flex items-start">
                                <span class="text-teal-600 text-2xl mr-3">✓</span>
                                <p class="text-gray-700">Quieres liberarte de un problema o síntoma desagradable</p>
                            </div>
                        </div>
                        
                        <div class="bg-teal-50 p-6 rounded-xl border-l-4 border-teal-500 hover:shadow-lg transition">
                            <div class="flex items-start">
                                <span class="text-teal-600 text-2xl mr-3">✓</span>
                                <p class="text-gray-700">Quieres procesar traumas de la infancia o de adulto</p>
                            </div>
                        </div>
                        
                        <div class="bg-teal-50 p-6 rounded-xl border-l-4 border-teal-500 hover:shadow-lg transition">
                            <div class="flex items-start">
                                <span class="text-teal-600 text-2xl mr-3">✓</span>
                                <p class="text-gray-700">Quieres ver más claro sobre dificultades de gestión de vida o relaciones</p>
                            </div>
                        </div>
                        
                        <div class="bg-teal-50 p-6 rounded-xl border-l-4 border-teal-500 hover:shadow-lg transition">
                            <div class="flex items-start">
                                <span class="text-teal-600 text-2xl mr-3">✓</span>
                                <p class="text-gray-700">Deseas mejor autoestima, confianza o mayor autoeficacia</p>
                            </div>
                        </div>
                        
                        <div class="bg-teal-50 p-6 rounded-xl border-l-4 border-teal-500 hover:shadow-lg transition">
                            <div class="flex items-start">
                                <span class="text-teal-600 text-2xl mr-3">✓</span>
                                <p class="text-gray-700">Te estás preparando para avanzar en tu carrera</p>
                            </div>
                        </div>
                        
                        <div class="bg-teal-50 p-6 rounded-xl border-l-4 border-teal-500 hover:shadow-lg transition">
                            <div class="flex items-start">
                                <span class="text-teal-600 text-2xl mr-3">✓</span>
                                <p class="text-gray-700">Quieres trabajar en tu autoconciencia y atención plena</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Client Experience -->
                <div class="bg-gray-50 p-12 rounded-2xl mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Mis clientes experimentan a menudo que durante las sesiones:</h2>
                    
                    <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold">1</div>
                            <p class="text-gray-700 pt-1">Tienen nuevos pensamientos e ideas útiles sobre sus posibilidades</p>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold">2</div>
                            <p class="text-gray-700 pt-1">Se vuelven más esperanzados sobre el cambio</p>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold">3</div>
                            <p class="text-gray-700 pt-1">Se sienten mejor al final de la sesión que al principio</p>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold">4</div>
                            <p class="text-gray-700 pt-1">Pueden confiar en mí y en sí mismos</p>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold">5</div>
                            <p class="text-gray-700 pt-1">Pueden estar presentes en un ambiente relajado, capaces de hablar fácilmente, directamente y honestamente</p>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold">6</div>
                            <p class="text-gray-700 pt-1">Pueden hablar incluso de cosas incómodas, opresivas o complicadas</p>
                        </div>
                    </div>
                </div>

                <!-- What You Can Count On -->
                <div class="mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Con lo que puedes contar definitivamente si trabajas conmigo:</h2>
                    
                    <div class="max-w-4xl mx-auto space-y-6">
                        <div class="bg-white p-8 rounded-xl shadow-md border-l-4 border-teal-600">
                            <p class="text-gray-700 text-lg">
                                <span class="font-semibold text-teal-600">→</span> Aporto todo mi conocimiento profesional y buena voluntad para hacer útil nuestro trabajo conjunto
                            </p>
                        </div>
                        
                        <div class="bg-white p-8 rounded-xl shadow-md border-l-4 border-teal-600">
                            <p class="text-gray-700 text-lg">
                                <span class="font-semibold text-teal-600">→</span> Espero que tú también hagas todo lo que puedas
                            </p>
                        </div>
                        
                        <div class="bg-white p-8 rounded-xl shadow-md border-l-4 border-teal-600">
                            <p class="text-gray-700 text-lg">
                                <span class="font-semibold text-teal-600">→</span> Pido regularmente tu retroalimentación para que podamos hacer más de lo que funciona y cambiar lo que no es útil: puedes indicar sin incomodidad que te gustaría algo diferente
                            </p>
                        </div>
                        
                        <div class="bg-white p-8 rounded-xl shadow-md border-l-4 border-teal-600">
                            <p class="text-gray-700 text-lg">
                                <span class="font-semibold text-teal-600">→</span> Sesiones disponibles en inglés
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Methods -->
                <div class="bg-gradient-to-br from-teal-50 to-blue-50 p-12 rounded-2xl mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Métodos con los que Trabajo:</h2>
                    
                    <div class="grid md:grid-cols-3 gap-8 max-w-3xl mx-auto">
                        <div class="text-center">
                            <div class="bg-white w-24 h-24 mx-auto rounded-full flex items-center justify-center shadow-lg mb-4">
                                <span class="text-4xl">🎯</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Enfoque en Soluciones</h3>
                        </div>
                        
                        <div class="text-center">
                            <div class="bg-white w-24 h-24 mx-auto rounded-full flex items-center justify-center shadow-lg mb-4">
                                <span class="text-4xl">❤️</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Enfoque Centrado en la Persona</h3>
                        </div>
                        
                        <div class="text-center">
                            <div class="bg-white w-24 h-24 mx-auto rounded-full flex items-center justify-center shadow-lg mb-4">
                                <span class="text-4xl">🌊</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Hipnosis</h3>
                        </div>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="bg-white shadow-xl rounded-2xl p-12 border-t-4 border-teal-500">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Contacto</h2>
                    
                    <div class="grid md:grid-cols-2 gap-8 mb-8">
                        <div class="text-center p-6 bg-gray-50 rounded-lg">
                            <div class="text-4xl mb-4">📧</div>
                            <h3 class="font-semibold text-gray-900 mb-2">Email</h3>
                            <a href="mailto:szaboorsoly@gmail.com" class="text-teal-600 hover:text-teal-700">szaboorsoly@gmail.com</a>
                        </div>
                        
                        <div class="text-center p-6 bg-gray-50 rounded-lg">
                            <div class="text-4xl mb-4">📱</div>
                            <h3 class="font-semibold text-gray-900 mb-2">Teléfono / WhatsApp</h3>
                            <a href="tel:+34624256708" class="text-teal-600 hover:text-teal-700">+34 624 256 708</a>
                        </div>
                    </div>

                    <div class="border-t border-gray-200 pt-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Tarifas de Sesión</h3>
                        
                        <div class="grid md:grid-cols-2 gap-6 max-w-3xl mx-auto">
                            <div class="bg-teal-50 p-6 rounded-lg">
                                <h4 class="font-semibold text-teal-900 mb-3">Sesiones Online</h4>
                                <ul class="space-y-2 text-gray-700">
                                    <li>50 minutos: <span class="font-semibold">€65</span></li>
                                    <li>75 minutos: <span class="font-semibold">€85</span></li>
                                </ul>
                            </div>
                            
                            <div class="bg-teal-50 p-6 rounded-lg">
                                <h4 class="font-semibold text-teal-900 mb-3">Presencial (Barcelona)</h4>
                                <ul class="space-y-2 text-gray-700">
                                    <li>50 minutos: <span class="font-semibold">€80</span></li>
                                    <li>75 minutos: <span class="font-semibold">€110</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-6 text-center">
                            <p class="text-sm text-gray-600 italic">Política de cancelación: Las sesiones canceladas dentro de las 48 horas anteriores a la consulta son de pago.</p>
                        </div>

                        <div class="mt-8 text-center">
                            <p class="text-gray-700 mb-2"><strong>Ubicación:</strong></p>
                            <p class="text-gray-600">Espai Arjé: Barcelona, Ronda de Sant Pere, 11 1º-1ª, 08010 Barcelona</p>
                            <p class="text-gray-600">Online (Google Meet)</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    @endif

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-teal-600 to-teal-700 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                {{ app()->getLocale() === 'en' ? 'Ready to Start Your Journey?' : '¿Listo para Comenzar tu Viaje?' }}
            </h2>
            <p class="text-xl mb-8 text-teal-100">
                {{ app()->getLocale() === 'en' ? 'Reach out for a consultation and discover how solution-focused coaching can help you.' : 'Ponte en contacto para una consulta y descubre cómo el coaching centrado en soluciones puede ayudarte.' }}
            </p>
            <a href="{{ route('contact') }}" class="inline-block bg-white text-teal-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition shadow-lg">
                {{ app()->getLocale() === 'en' ? 'Contact Me' : 'Contáctame' }}
            </a>
        </div>
    </section>
@endsection
