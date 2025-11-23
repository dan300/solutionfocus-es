@extends('layouts.app')

@section('title', $page->meta_title ?? $page->title)
@section('description', $page->meta_description ?? '')

@section('content')
    @if(app()->getLocale() === 'en')
        {{-- English Content --}}
        <x-hero title="Coach Certification" subtitle="Become a certified solution-focused coach" />

        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="prose prose-lg max-w-none">
                    <p class="lead">Our certification program prepares you to work professionally with individuals, couples, families, and teams using this powerful approach.</p>

                    <h2>Why Get Certified?</h2>
                    <div class="grid md:grid-cols-2 gap-6 my-8">
                        <div class="bg-teal-50 p-6 rounded-lg">
                            <h4 class="text-teal-800 font-bold mb-2">🎓 Professional Credibility</h4>
                            <p class="text-gray-700 mb-0">International recognition of your competence</p>
                        </div>
                        <div class="bg-teal-50 p-6 rounded-lg">
                            <h4 class="text-teal-800 font-bold mb-2">🌍 Global Community</h4>
                            <p class="text-gray-700 mb-0">Access to a network of solution-focused coaches</p>
                        </div>
                        <div class="bg-teal-50 p-6 rounded-lg">
                            <h4 class="text-teal-800 font-bold mb-2">📈 Continuous Development</h4>
                            <p class="text-gray-700 mb-0">Ongoing supervision and training</p>
                        </div>
                        <div class="bg-teal-50 p-6 rounded-lg">
                            <h4 class="text-teal-800 font-bold mb-2">💼 Professional Opportunities</h4>
                            <p class="text-gray-700 mb-0">Greater access to clients and organizations</p>
                        </div>
                    </div>

                    <h2>Certification Path</h2>

                    <div class="space-y-8 my-12">
                        <div class="border-l-4 border-teal-400 pl-6">
                            <h3 class="mt-0">Level 1: Foundation Certificate</h3>
                            <p class="font-semibold text-gray-700">Requirements:</p>
                            <ul>
                                <li>Complete the "Fundamentals" program (3 days)</li>
                                <li>25 hours of supervised practice</li>
                                <li>Demonstration of basic competencies</li>
                            </ul>
                        </div>

                        <div class="border-l-4 border-teal-600 pl-6">
                            <h3 class="mt-0">Level 2: Practitioner Certificate</h3>
                            <p class="font-semibold text-gray-700">Requirements:</p>
                            <ul>
                                <li>Have Foundation Certificate</li>
                                <li>Complete the "Practitioner" program (6 months)</li>
                                <li>100 hours of documented coaching practice</li>
                                <li>20 hours of supervision</li>
                            </ul>
                        </div>

                        <div class="border-l-4 border-teal-800 pl-6">
                            <h3 class="mt-0">Level 3: Advanced Practitioner Certificate</h3>
                            <p class="font-semibold text-gray-700">Requirements:</p>
                            <ul>
                                <li>Have Practitioner Certificate</li>
                                <li>2 years of professional experience</li>
                                <li>300 additional hours of practice</li>
                                <li>40 hours of ongoing supervision</li>
                                <li>Specialization in an area</li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-gray-100 p-8 rounded-lg my-8">
                        <h3 class="mt-0">Core Competencies</h3>
                        <p>To obtain certification, you will demonstrate competence in:</p>
                        <ol>
                            <li><strong>Building the relationship</strong> - Creating safety and trust</li>
                            <li><strong>Co-constructing goals</strong> - Clarifying what clients really want</li>
                            <li><strong>Exploring resources</strong> - Identifying strengths and exceptions</li>
                            <li><strong>Generating small actions</strong> - Co-creating concrete steps</li>
                            <li><strong>Evaluating progress</strong> - Using scales and amplifying changes</li>
                        </ol>
                    </div>

                    <blockquote class="border-l-4 border-teal-600 pl-6 my-8">
                        <p class="text-xl italic">"Certification is not the end of the road, it's the beginning of your professional practice."</p>
                    </blockquote>
                </div>
            </div>
        </section>
    @else
        {{-- Spanish Content --}}
        <x-hero title="Certificación de Coach" subtitle="Conviértete en un coach certificado centrado en soluciones" />

        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="prose prose-lg max-w-none">
                    <p class="lead">Nuestro programa de certificación te prepara para trabajar profesionalmente con individuos, parejas, familias y equipos utilizando este poderoso enfoque.</p>

                    <h2>¿Por Qué Certificarte?</h2>
                    <div class="grid md:grid-cols-2 gap-6 my-8">
                        <div class="bg-teal-50 p-6 rounded-lg">
                            <h4 class="text-teal-800 font-bold mb-2">🎓 Credibilidad Profesional</h4>
                            <p class="text-gray-700 mb-0">Reconocimiento internacional de tu competencia</p>
                        </div>
                        <div class="bg-teal-50 p-6 rounded-lg">
                            <h4 class="text-teal-800 font-bold mb-2">🌍 Comunidad Global</h4>
                            <p class="text-gray-700 mb-0">Acceso a una red de coaches centrados en soluciones</p>
                        </div>
                        <div class="bg-teal-50 p-6 rounded-lg">
                            <h4 class="text-teal-800 font-bold mb-2">📈 Desarrollo Continuo</h4>
                            <p class="text-gray-700 mb-0">Supervisión y formación continua</p>
                        </div>
                        <div class="bg-teal-50 p-6 rounded-lg">
                            <h4 class="text-teal-800 font-bold mb-2">💼 Oportunidades Profesionales</h4>
                            <p class="text-gray-700 mb-0">Mayor acceso a clientes y organizaciones</p>
                        </div>
                    </div>

                    <h2>Ruta de Certificación</h2>

                    <div class="space-y-8 my-12">
                        <div class="border-l-4 border-teal-400 pl-6">
                            <h3 class="mt-0">Nivel 1: Foundation Certificate</h3>
                            <p class="font-semibold text-gray-700">Requisitos:</p>
                            <ul>
                                <li>Completar el programa "Fundamentos" (3 días)</li>
                                <li>25 horas de práctica supervisada</li>
                                <li>Demostración de competencias básicas</li>
                            </ul>
                        </div>

                        <div class="border-l-4 border-teal-600 pl-6">
                            <h3 class="mt-0">Nivel 2: Practitioner Certificate</h3>
                            <p class="font-semibold text-gray-700">Requisitos:</p>
                            <ul>
                                <li>Tener Foundation Certificate</li>
                                <li>Completar el programa "Practitioner" (6 meses)</li>
                                <li>100 horas de práctica de coaching documentadas</li>
                                <li>20 horas de supervisión</li>
                            </ul>
                        </div>

                        <div class="border-l-4 border-teal-800 pl-6">
                            <h3 class="mt-0">Nivel 3: Advanced Practitioner Certificate</h3>
                            <p class="font-semibold text-gray-700">Requisitos:</p>
                            <ul>
                                <li>Tener Practitioner Certificate</li>
                                <li>2 años de experiencia profesional</li>
                                <li>300 horas adicionales de práctica</li>
                                <li>40 horas de supervisión continua</li>
                                <li>Especialización en un área</li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-gray-100 p-8 rounded-lg my-8">
                        <h3 class="mt-0">Competencias Clave</h3>
                        <p>Para obtener la certificación, demostrarás competencia en:</p>
                        <ol>
                            <li><strong>Construcción de la relación</strong> - Crear seguridad y confianza</li>
                            <li><strong>Co-construcción de objetivos</strong> - Clarificar lo que los clientes realmente quieren</li>
                            <li><strong>Exploración de recursos</strong> - Identificar fortalezas y excepciones</li>
                            <li><strong>Generación de pequeñas acciones</strong> - Co-crear pasos concretos</li>
                            <li><strong>Evaluación de progreso</strong> - Usar escalas y amplificar cambios</li>
                        </ol>
                    </div>

                    <blockquote class="border-l-4 border-teal-600 pl-6 my-8">
                        <p class="text-xl italic">"La certificación no es el final del camino, es el comienzo de tu práctica profesional."</p>
                    </blockquote>
                </div>
            </div>
        </section>
    @endif

    <!-- CTA Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">
                {{ app()->getLocale() === 'en' ? 'Ready to Start Your Certification Journey?' : '¿Listo para Iniciar tu Camino de Certificación?' }}
            </h2>
            <a href="{{ route('contact') }}" class="inline-block bg-teal-600 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-teal-700 transition">
                {{ app()->getLocale() === 'en' ? 'Learn More' : 'Saber Más' }}
            </a>
        </div>
    </section>
@endsection

