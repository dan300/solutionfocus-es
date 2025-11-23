@extends('layouts.app')

@section('title', $page->meta_title ?? $page->title)
@section('description', $page->meta_description ?? '')

@section('content')
    @if(app()->getLocale() === 'en')
        {{-- English Content --}}
        <x-hero title="Solution Focused Training" subtitle="Learn a simple, effective, and respectful coaching approach" />

        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="prose prose-lg max-w-none">
                    <p class="lead">Our training programs teach you a coaching approach that is simple, effective, and deeply respectful. You'll learn to help others build the future they desire, without needing to analyze the past or fix problems.</p>

                    <h2>What is Solution Focused Coaching?</h2>
                    <p>Solution-focused coaching is an approach based on three fundamental principles:</p>
                    <ul>
                        <li><strong>If it's not broken, don't fix it</strong>: We focus on what works</li>
                        <li><strong>If something works, do more of it</strong>: We build on existing successes</li>
                        <li><strong>If something doesn't work, stop doing it and try something else</strong>: We experiment with new actions</li>
                    </ul>

                    <h2>Our Training Programs</h2>

                    <div class="bg-teal-50 p-8 rounded-lg my-8">
                        <h3 class="mt-0">Fundamentals of Solution Focused Coaching</h3>
                        <p class="text-teal-800 font-semibold">Duration: 3 intensive days</p>
                        <p>This introductory program teaches you the fundamentals of the solution-focused approach. You'll learn:</p>
                        <ul>
                            <li>The philosophy and principles of the approach</li>
                            <li>Powerful questions that generate change</li>
                            <li>How to build on resources and exceptions</li>
                            <li>The scaling tool and its practical use</li>
                            <li>Supervised practice with feedback</li>
                        </ul>
                    </div>

                    <div class="bg-gray-50 p-8 rounded-lg my-8">
                        <h3 class="mt-0">Solution Focused Coaching Practitioner</h3>
                        <p class="text-gray-600 font-semibold">Duration: 6 months (monthly 2-day modules)</p>
                        <p>A comprehensive program that prepares you to work professionally as a solution-focused coach:</p>
                        <ul>
                            <li>Deepening in philosophy and theory</li>
                            <li>Advanced conversation techniques</li>
                            <li>Coaching in different contexts (personal, executive, teams)</li>
                            <li>Continuous group supervision</li>
                            <li>Practice between modules with follow-up</li>
                            <li>Working with real cases</li>
                        </ul>
                    </div>

                    <h2>Learning Methodology</h2>
                    <p>Our training is <strong>experiential and practical</strong>. We believe you learn by doing, so:</p>

                    <div class="grid md:grid-cols-2 gap-6 my-8">
                        <div class="text-center p-6">
                            <div class="text-4xl font-bold text-teal-600 mb-2">80%</div>
                            <p class="font-semibold">Practice</p>
                        </div>
                        <div class="text-center p-6">
                            <div class="text-4xl font-bold text-gray-400 mb-2">20%</div>
                            <p class="font-semibold">Theory</p>
                        </div>
                    </div>

                    <ul>
                        <li><strong>Small groups</strong>: Maximum 12 participants for personalized attention</li>
                        <li><strong>Constructive feedback</strong>: Feedback focused on what works</li>
                        <li><strong>Safe environment</strong>: Space to experiment and learn from mistakes</li>
                        <li><strong>Community of practice</strong>: Continuous connection with other learners</li>
                    </ul>

                    <blockquote class="border-l-4 border-teal-600 pl-6 my-8">
                        <p class="text-xl italic">"The best way to predict the future is to build it together."</p>
                    </blockquote>
                </div>
            </div>
        </section>
    @else
        {{-- Spanish Content --}}
        <x-hero title="Formación Centrada en Soluciones" subtitle="Aprende un enfoque de coaching simple, efectivo y respetuoso" />

        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="prose prose-lg max-w-none">
                    <p class="lead">Nuestros programas de formación te enseñan un enfoque de coaching que es simple, efectivo y profundamente respetuoso. Aprenderás a ayudar a otros a construir el futuro que desean, sin necesidad de analizar el pasado o arreglar problemas.</p>

                    <h2>¿Qué es el Coaching Centrado en Soluciones?</h2>
                    <p>El coaching centrado en soluciones es un enfoque que se basa en tres principios fundamentales:</p>
                    <ul>
                        <li><strong>Si algo no está roto, no lo arregles</strong>: Nos enfocamos en lo que funciona</li>
                        <li><strong>Si algo funciona, haz más de ello</strong>: Construimos sobre los éxitos existentes</li>
                        <li><strong>Si algo no funciona, deja de hacerlo e intenta otra cosa</strong>: Experimentamos con nuevas acciones</li>
                    </ul>

                    <h2>Nuestros Programas de Formación</h2>

                    <div class="bg-teal-50 p-8 rounded-lg my-8">
                        <h3 class="mt-0">Fundamentos del Coaching Centrado en Soluciones</h3>
                        <p class="text-teal-800 font-semibold">Duración: 3 días intensivos</p>
                        <p>Este programa introductorio te enseña los fundamentos del enfoque centrado en soluciones. Aprenderás:</p>
                        <ul>
                            <li>La filosofía y principios del enfoque</li>
                            <li>Preguntas poderosas que generan cambio</li>
                            <li>Cómo construir sobre recursos y excepciones</li>
                            <li>La escala de progreso y su uso práctico</li>
                            <li>Práctica supervisada con retroalimentación</li>
                        </ul>
                    </div>

                    <div class="bg-gray-50 p-8 rounded-lg my-8">
                        <h3 class="mt-0">Practitioner en Solution Focused Coaching</h3>
                        <p class="text-gray-600 font-semibold">Duración: 6 meses (módulos mensuales de 2 días)</p>
                        <p>Un programa completo que te prepara para trabajar profesionalmente como coach centrado en soluciones:</p>
                        <ul>
                            <li>Profundización en la filosofía y teoría</li>
                            <li>Técnicas avanzadas de conversación</li>
                            <li>Coaching en diferentes contextos (personal, ejecutivo, equipos)</li>
                            <li>Supervisión grupal continua</li>
                            <li>Práctica entre módulos con seguimiento</li>
                            <li>Trabajo con casos reales</li>
                        </ul>
                    </div>

                    <h2>Metodología de Aprendizaje</h2>
                    <p>Nuestra formación es <strong>experiencial y práctica</strong>. Creemos que se aprende haciendo, por eso:</p>

                    <div class="grid md:grid-cols-2 gap-6 my-8">
                        <div class="text-center p-6">
                            <div class="text-4xl font-bold text-teal-600 mb-2">80%</div>
                            <p class="font-semibold">Práctica</p>
                        </div>
                        <div class="text-center p-6">
                            <div class="text-4xl font-bold text-gray-400 mb-2">20%</div>
                            <p class="font-semibold">Teoría</p>
                        </div>
                    </div>

                    <ul>
                        <li><strong>Grupos pequeños</strong>: Máximo 12 participantes para atención personalizada</li>
                        <li><strong>Retroalimentación constructiva</strong>: Feedback centrado en lo que funciona</li>
                        <li><strong>Ambiente seguro</strong>: Espacio para experimentar y aprender de los errores</li>
                        <li><strong>Comunidad de práctica</strong>: Conexión continua con otros aprendices</li>
                    </ul>

                    <blockquote class="border-l-4 border-teal-600 pl-6 my-8">
                        <p class="text-xl italic">"La mejor manera de predecir el futuro es construirlo juntos."</p>
                    </blockquote>
                </div>
            </div>
        </section>
    @endif

    <!-- CTA Section -->
    <section class="py-16 bg-teal-600 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                {{ app()->getLocale() === 'en' ? 'Interested in Our Training?' : '¿Interesado en Nuestra Formación?' }}
            </h2>
            <p class="text-xl mb-8 text-teal-100">
                {{ app()->getLocale() === 'en' ? 'Contact us for information about upcoming dates and programs.' : 'Contáctanos para información sobre próximas fechas y programas.' }}
            </p>
            <a href="{{ route('contact') }}" class="inline-block bg-white text-teal-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition shadow-lg">
                {{ app()->getLocale() === 'en' ? 'Get in Touch' : 'Ponte en Contacto' }}
            </a>
        </div>
    </section>
@endsection

