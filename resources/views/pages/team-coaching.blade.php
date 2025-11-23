@extends('layouts.app')

@section('title', $page->meta_title ?? $page->title)
@section('description', $page->meta_description ?? '')

@section('content')
    @if(app()->getLocale() === 'en')
        {{-- English Content --}}
        <x-hero title="Team Coaching Sessions" subtitle="Transform your team through solution-focused coaching" />

        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="prose prose-lg max-w-none">
                    <p class="lead">Solution-focused team coaching helps teams build the future they desire, working together from their collective strengths and resources.</p>

                    <div class="bg-teal-600 text-white p-8 rounded-lg my-8 text-center">
                        <p class="text-2xl font-bold mb-2">The focus is on the future, not on past problems.</p>
                    </div>

                    <h2>When is Team Coaching Useful?</h2>
                    <p>Team coaching is especially valuable when:</p>
                    <div class="grid md:grid-cols-2 gap-4 my-6">
                        <div class="flex items-start">
                            <span class="text-teal-600 text-2xl mr-3">✓</span>
                            <span>The team wants to improve their collaboration</span>
                        </div>
                        <div class="flex items-start">
                            <span class="text-teal-600 text-2xl mr-3">✓</span>
                            <span>Organizational changes are on the horizon</span>
                        </div>
                        <div class="flex items-start">
                            <span class="text-teal-600 text-2xl mr-3">✓</span>
                            <span>The team needs to clarify their direction</span>
                        </div>
                        <div class="flex items-start">
                            <span class="text-teal-600 text-2xl mr-3">✓</span>
                            <span>They want to increase their effectiveness</span>
                        </div>
                        <div class="flex items-start">
                            <span class="text-teal-600 text-2xl mr-3">✓</span>
                            <span>They seek to build a learning culture</span>
                        </div>
                        <div class="flex items-start">
                            <span class="text-teal-600 text-2xl mr-3">✓</span>
                            <span>They need to renew their energy and motivation</span>
                        </div>
                    </div>

                    <h2>Our Approach</h2>

                    <div class="bg-gray-50 p-8 rounded-lg my-8">
                        <h3 class="mt-0">Session 1: Building the Desired Future</h3>
                        <p class="text-gray-600 font-semibold">Duration: 3 hours</p>
                        <p>In the first session, the team:</p>
                        <ul>
                            <li>Defines how the team would be at its best</li>
                            <li>Identifies concrete signs of that future</li>
                            <li>Explores what is already working</li>
                            <li>Finds small exceptions to the problem</li>
                            <li>Co-creates first concrete actions</li>
                        </ul>
                    </div>

                    <div class="bg-teal-50 p-8 rounded-lg my-8">
                        <h3 class="mt-0">Follow-up Sessions</h3>
                        <p class="text-teal-800 font-semibold">Duration: 2 hours each (typically 3-5 sessions)</p>
                        <p>In subsequent sessions:</p>
                        <ul>
                            <li>The team reviews progress</li>
                            <li>We celebrate what is working</li>
                            <li>We amplify small successes</li>
                            <li>We adjust actions based on learning</li>
                            <li>We build on the momentum created</li>
                        </ul>
                    </div>

                    <h2>Our Methodology</h2>
                    <p>We use specific solution-focused tools:</p>

                    <div class="space-y-6 my-8">
                        <div class="border-l-4 border-teal-600 pl-6">
                            <h4 class="font-bold text-gray-900 mb-2">The Miracle Question for Teams</h4>
                            <p class="italic text-gray-700">"If a miracle occurred tonight and tomorrow this team was functioning exactly as you desire, what would be different?"</p>
                        </div>

                        <div class="border-l-4 border-gray-400 pl-6">
                            <h4 class="font-bold text-gray-900 mb-2">Progress Scales</h4>
                            <p class="text-gray-700">The team collectively evaluates where they are now and what would be a small step forward.</p>
                        </div>

                        <div class="border-l-4 border-teal-600 pl-6">
                            <h4 class="font-bold text-gray-900 mb-2">Exception Finding</h4>
                            <p class="italic text-gray-700">"When was the last time something you desire was already happening, even a little?"</p>
                        </div>
                    </div>

                    <h2>Expected Results</h2>
                    <p>Teams that participate in solution-focused coaching typically experience:</p>
                    <ul>
                        <li>Greater clarity about their direction and goals</li>
                        <li>Better communication and collaboration</li>
                        <li>More energy and motivation</li>
                        <li>Focus on strengths instead of deficiencies</li>
                        <li>Learning culture and continuous improvement</li>
                        <li>Concrete actions that generate results</li>
                    </ul>

                    <div class="bg-gradient-to-r from-teal-50 to-blue-50 p-8 rounded-lg my-8">
                        <h3 class="mt-0">Logistics</h3>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div><strong>Format:</strong> In-person or virtual</div>
                            <div><strong>Duration:</strong> 2-3 hours per session</div>
                            <div><strong>Frequency:</strong> Every 2-4 weeks</div>
                            <div><strong>Team size:</strong> 5-15 people (ideal)</div>
                        </div>
                    </div>

                    <blockquote class="border-l-4 border-teal-600 pl-6 my-8">
                        <p class="text-2xl italic font-semibold text-gray-800">"A team that knows what they want to build together is unstoppable."</p>
                    </blockquote>
                </div>
            </div>
        </section>
    @else
        {{-- Spanish Content --}}
        <x-hero title="Coaching de Equipos" subtitle="Transforma tu equipo a través del coaching centrado en soluciones" />

        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="prose prose-lg max-w-none">
                    <p class="lead">El coaching de equipos centrado en soluciones ayuda a los equipos a construir el futuro que desean, trabajando juntos desde sus fortalezas y recursos colectivos.</p>

                    <div class="bg-teal-600 text-white p-8 rounded-lg my-8 text-center">
                        <p class="text-2xl font-bold mb-2">El enfoque está en el futuro, no en los problemas del pasado.</p>
                    </div>

                    <h2>¿Cuándo es Útil el Coaching de Equipos?</h2>
                    <p>El coaching de equipos es especialmente valioso cuando:</p>
                    <div class="grid md:grid-cols-2 gap-4 my-6">
                        <div class="flex items-start">
                            <span class="text-teal-600 text-2xl mr-3">✓</span>
                            <span>El equipo quiere mejorar su colaboración</span>
                        </div>
                        <div class="flex items-start">
                            <span class="text-teal-600 text-2xl mr-3">✓</span>
                            <span>Hay cambios organizacionales en el horizonte</span>
                        </div>
                        <div class="flex items-start">
                            <span class="text-teal-600 text-2xl mr-3">✓</span>
                            <span>El equipo necesita clarificar su dirección</span>
                        </div>
                        <div class="flex items-start">
                            <span class="text-teal-600 text-2xl mr-3">✓</span>
                            <span>Quieren aumentar su efectividad</span>
                        </div>
                        <div class="flex items-start">
                            <span class="text-teal-600 text-2xl mr-3">✓</span>
                            <span>Buscan construir una cultura de aprendizaje</span>
                        </div>
                        <div class="flex items-start">
                            <span class="text-teal-600 text-2xl mr-3">✓</span>
                            <span>Necesitan renovar su energía y motivación</span>
                        </div>
                    </div>

                    <h2>Nuestro Enfoque</h2>

                    <div class="bg-gray-50 p-8 rounded-lg my-8">
                        <h3 class="mt-0">Sesión 1: Construyendo el Futuro Deseado</h3>
                        <p class="text-gray-600 font-semibold">Duración: 3 horas</p>
                        <p>En la primera sesión, el equipo:</p>
                        <ul>
                            <li>Define cómo sería el equipo en su mejor versión</li>
                            <li>Identifica señales concretas de ese futuro</li>
                            <li>Explora lo que ya está funcionando</li>
                            <li>Encuentra pequeñas excepciones al problema</li>
                            <li>Co-crea primeras acciones concretas</li>
                        </ul>
                    </div>

                    <div class="bg-teal-50 p-8 rounded-lg my-8">
                        <h3 class="mt-0">Sesiones de Seguimiento</h3>
                        <p class="text-teal-800 font-semibold">Duración: 2 horas cada una (típicamente 3-5 sesiones)</p>
                        <p>En las sesiones siguientes:</p>
                        <ul>
                            <li>El equipo revisa el progreso</li>
                            <li>Celebramos lo que está funcionando</li>
                            <li>Amplificamos los pequeños éxitos</li>
                            <li>Ajustamos las acciones según lo aprendido</li>
                            <li>Construimos sobre el momentum creado</li>
                        </ul>
                    </div>

                    <h2>Nuestra Metodología</h2>
                    <p>Utilizamos herramientas específicas del enfoque centrado en soluciones:</p>

                    <div class="space-y-6 my-8">
                        <div class="border-l-4 border-teal-600 pl-6">
                            <h4 class="font-bold text-gray-900 mb-2">La Pregunta Milagro para Equipos</h4>
                            <p class="italic text-gray-700">"Si un milagro ocurriera esta noche y mañana este equipo estuviera funcionando exactamente como ustedes desean, ¿qué sería diferente?"</p>
                        </div>

                        <div class="border-l-4 border-gray-400 pl-6">
                            <h4 class="font-bold text-gray-900 mb-2">Escalas de Progreso</h4>
                            <p class="text-gray-700">El equipo evalúa colectivamente dónde están ahora y qué sería un pequeño paso adelante.</p>
                        </div>

                        <div class="border-l-4 border-teal-600 pl-6">
                            <h4 class="font-bold text-gray-900 mb-2">Búsqueda de Excepciones</h4>
                            <p class="italic text-gray-700">"¿Cuándo fue la última vez que algo de lo que desean ya estaba pasando, aunque fuera un poco?"</p>
                        </div>
                    </div>

                    <h2>Resultados Esperados</h2>
                    <p>Los equipos que participan en coaching centrado en soluciones típicamente experimentan:</p>
                    <ul>
                        <li>Mayor claridad sobre su dirección y objetivos</li>
                        <li>Mejor comunicación y colaboración</li>
                        <li>Más energía y motivación</li>
                        <li>Enfoque en fortalezas en lugar de deficiencias</li>
                        <li>Cultura de aprendizaje y mejora continua</li>
                        <li>Acciones concretas que generan resultados</li>
                    </ul>

                    <div class="bg-gradient-to-r from-teal-50 to-blue-50 p-8 rounded-lg my-8">
                        <h3 class="mt-0">Logística</h3>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div><strong>Formato:</strong> Presencial o virtual</div>
                            <div><strong>Duración:</strong> 2-3 horas por sesión</div>
                            <div><strong>Frecuencia:</strong> Cada 2-4 semanas</div>
                            <div><strong>Tamaño del equipo:</strong> 5-15 personas (ideal)</div>
                        </div>
                    </div>

                    <blockquote class="border-l-4 border-teal-600 pl-6 my-8">
                        <p class="text-2xl italic font-semibold text-gray-800">"Un equipo que sabe lo que quiere construir juntos es imparable."</p>
                    </blockquote>
                </div>
            </div>
        </section>
    @endif

    <!-- CTA Section -->
    <section class="py-16 bg-teal-600 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                {{ app()->getLocale() === 'en' ? 'Ready to Transform Your Team?' : '¿Listo para Transformar tu Equipo?' }}
            </h2>
            <p class="text-xl mb-8 text-teal-100">
                {{ app()->getLocale() === 'en' ? 'The first step is a conversation. Let\'s talk about your team.' : 'El primer paso es una conversación. Hablemos sobre tu equipo.' }}
            </p>
            <a href="{{ route('contact') }}" class="inline-block bg-white text-teal-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition shadow-lg">
                {{ app()->getLocale() === 'en' ? 'Get in Touch' : 'Ponte en Contacto' }}
            </a>
        </div>
    </section>
@endsection

