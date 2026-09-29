<!DOCTYPE html>
<html lang="si" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nexoraEDU - Smart Education Management System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        @keyframes float-slow {
            0%, 100% { transform: translateY(0px) scale(1); }
            50% { transform: translateY(-30px) scale(1.05); }
        }
        @keyframes fade-up {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes gradient-shift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }
        .animate-float-slow { animation: float-slow 8s ease-in-out infinite; }
        .animate-fade-up { animation: fade-up 0.8s ease-out forwards; }
        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient-shift 8s ease infinite;
        }
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
        
        /* Full width fix */
        .full-width-container {
            width: 100%;
            max-width: 100%;
        }
    </style>
</head>

<body class="bg-white text-slate-900 antialiased selection:bg-blue-600 selection:text-white">

    {{-- =====================================================
        NAVBAR - Full Width
    ====================================================== --}}
    <header x-data="{ scrolled: false, mobileOpen: false }"
            @scroll.window="scrolled = window.scrollY > 20"
            class="fixed inset-x-0 top-0 z-50 transition-all duration-300"
            :class="scrolled ? 'bg-white/90 backdrop-blur-lg shadow-lg shadow-slate-900/5' : 'bg-transparent'">
        
        {{-- Full width container - px-4 sm:px-6 lg:px-8 --}}
        <div class="w-full px-4 sm:px-6 lg:px-12 xl:px-16">
            <nav class="flex h-20 items-center justify-between">

                {{-- Logo --}}
                <a href="#" class="group flex items-center gap-3">
                    <img src="{{ asset('images/nexora-edu-logo.png') }}" alt="nexoraEDU"
                        class="h-12 w-auto object-contain transition-transform duration-300 group-hover:scale-105">
                </a>

                {{-- Desktop Navigation --}}
                <div class="hidden items-center gap-1 lg:flex">
                    <a href="#features" class="relative rounded-lg px-4 py-2 text-sm font-medium text-slate-600 transition hover:text-blue-600 group">
                        Features
                        <span class="absolute inset-x-4 -bottom-0.5 h-0.5 scale-x-0 bg-blue-600 transition-transform group-hover:scale-x-100"></span>
                    </a>
                    <a href="#parent" class="relative rounded-lg px-4 py-2 text-sm font-medium text-slate-600 transition hover:text-blue-600 group">
                        Parent
                        <span class="absolute inset-x-4 -bottom-0.5 h-0.5 scale-x-0 bg-blue-600 transition-transform group-hover:scale-x-100"></span>
                    </a>
                    <a href="#how-it-works" class="relative rounded-lg px-4 py-2 text-sm font-medium text-slate-600 transition hover:text-blue-600 group">
                        How It Works
                        <span class="absolute inset-x-4 -bottom-0.5 h-0.5 scale-x-0 bg-blue-600 transition-transform group-hover:scale-x-100"></span>
                    </a>
                    <a href="#solution" class="relative rounded-lg px-4 py-2 text-sm font-medium text-slate-600 transition hover:text-blue-600 group">
                        Solutions
                        <span class="absolute inset-x-4 -bottom-0.5 h-0.5 scale-x-0 bg-blue-600 transition-transform group-hover:scale-x-100"></span>
                    </a>
                    <a href="#contact" class="relative rounded-lg px-4 py-2 text-sm font-medium text-slate-600 transition hover:text-blue-600 group">
                        Contact
                        <span class="absolute inset-x-4 -bottom-0.5 h-0.5 scale-x-0 bg-blue-600 transition-transform group-hover:scale-x-100"></span>
                    </a>

                    <a href="#contact"
                        class="ml-4 inline-flex items-center gap-2 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 px-5 py-2.5 text-sm font-semibold text-white shadow-lg shadow-blue-600/25 transition-all duration-300 hover:shadow-xl hover:shadow-blue-600/40 hover:-translate-y-0.5">
                        Request a Demo
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>

                {{-- Mobile Menu Button --}}
                <button type="button" @click="mobileOpen = !mobileOpen"
                    class="rounded-xl border border-slate-200 bg-white p-2.5 text-slate-700 shadow-sm transition hover:bg-slate-50 lg:hidden">
                    <svg x-show="!mobileOpen" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileOpen" x-cloak class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </nav>
        </div>

        {{-- Mobile Menu --}}
        <div x-show="mobileOpen" x-cloak
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             class="border-t border-slate-100 bg-white/95 backdrop-blur-lg lg:hidden">
            <div class="space-y-1 px-6 py-4">
                <a href="#features" class="block rounded-lg px-4 py-3 text-sm font-medium text-slate-700 transition hover:bg-blue-50 hover:text-blue-600">Features</a>
                <a href="#parent" class="block rounded-lg px-4 py-3 text-sm font-medium text-slate-700 transition hover:bg-blue-50 hover:text-blue-600">Parent</a>
                <a href="#how-it-works" class="block rounded-lg px-4 py-3 text-sm font-medium text-slate-700 transition hover:bg-blue-50 hover:text-blue-600">How It Works</a>
                <a href="#solution" class="block rounded-lg px-4 py-3 text-sm font-medium text-slate-700 transition hover:bg-blue-50 hover:text-blue-600">Solutions</a>
                <a href="#contact" class="block rounded-lg px-4 py-3 text-sm font-medium text-slate-700 transition hover:bg-blue-50 hover:text-blue-600">Contact</a>
                <a href="#contact" class="mt-2 block rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 px-5 py-3 text-center text-sm font-semibold text-white shadow-lg shadow-blue-600/25">
                    Request a Demo
                </a>
            </div>
        </div>
    </header>

    <main>

        {{-- =====================================================
            HERO SECTION - Full Width & Fixed Overlap
        ====================================================== --}}
        <section class="relative w-full overflow-hidden bg-gradient-to-b from-slate-50 via-blue-50/30 to-white pt-40 pb-20 lg:pt-48 lg:pb-28">

            {{-- Animated Background Effects --}}
            <div class="absolute -left-40 top-20 h-96 w-96 animate-float-slow rounded-full bg-blue-300/30 blur-3xl"></div>
            <div class="absolute -right-40 top-10 h-[500px] w-[500px] animate-float rounded-full bg-indigo-300/30 blur-3xl"></div>
            <div class="absolute left-1/2 top-1/3 h-72 w-72 animate-float-slow rounded-full bg-purple-200/20 blur-3xl"></div>

            {{-- Grid Pattern --}}
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#e2e8f0_1px,transparent_1px),linear-gradient(to_bottom,#e2e8f0_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)] opacity-40"></div>

            {{-- Full width content container --}}
            <div class="relative w-full px-4 sm:px-6 lg:px-12 xl:px-16">
                <div class="grid items-center gap-14 lg:grid-cols-12 lg:gap-16">

                    {{-- HERO CONTENT - Left Side --}}
                    <div class="lg:col-span-6 xl:col-span-6 max-w-3xl">

                        {{-- Hero Badge --}}
                        <div class="animate-fade-up mb-6 inline-flex items-center gap-2.5 rounded-full border border-blue-200/60 bg-white/80 px-4 py-2 shadow-sm backdrop-blur-sm">
                            <span class="relative flex h-2.5 w-2.5">
                                <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-blue-400 opacity-75"></span>
                                <span class="relative inline-flex h-2.5 w-2.5 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600"></span>
                            </span>
                            <span class="bg-gradient-to-r from-blue-700 to-indigo-700 bg-clip-text text-xs font-bold uppercase tracking-wide text-transparent sm:text-sm">
                                Smart Education Management System
                            </span>
                        </div>

                        {{-- Main Heading --}}
                        <h1 class="animate-fade-up delay-100 text-4xl font-extrabold leading-[1.1] tracking-tight text-slate-950 sm:text-5xl lg:text-[3.5rem] xl:text-[4rem]">
                            ඔබේ අධ්‍යාපන ආයතනය
                            <span class="relative inline-block">
                                <span class="relative z-10 bg-gradient-to-r from-blue-600 via-indigo-600 to-blue-600 bg-clip-text text-transparent animate-gradient">
                                    වඩාත් Smart ලෙස
                                </span>
                                <span class="absolute inset-x-0 bottom-1 -z-0 h-3 bg-blue-200/50"></span>
                            </span>
                            කළමනාකරණය කරන්න.
                        </h1>

                        {{-- Description --}}
                        <p class="animate-fade-up delay-200 mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">
                            වසර 6කට වැඩි කාලයක් තිස්සේ සංවර්ධනය කර භාවිතයේ පවතින
                            <span class="font-semibold text-slate-900">nexoraEDU</span> සමඟ Students, Teachers, Classes, Attendance,
                            Payments සහ Financial Management එකම platform එකකින්
                            පහසුවෙන් කළමනාකරණය කරන්න.
                        </p>

                        {{-- Trust Badges --}}
                        <div class="animate-fade-up delay-300 mt-7 flex flex-wrap items-center gap-3">
                            <div class="group inline-flex items-center gap-2 rounded-full border border-blue-100 bg-gradient-to-r from-blue-50 to-indigo-50 px-4 py-2 transition-all hover:shadow-md hover:shadow-blue-100">
                                <svg class="h-4 w-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span class="text-xs font-bold text-blue-700 sm:text-sm">6+ Years Experience</span>
                            </div>

                            <div class="group inline-flex items-center gap-2 rounded-full border border-emerald-100 bg-gradient-to-r from-emerald-50 to-teal-50 px-4 py-2 transition-all hover:shadow-md hover:shadow-emerald-100">
                                <svg class="h-4 w-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <span class="text-xs font-bold text-emerald-700 sm:text-sm">Trusted by Institutes</span>
                            </div>
                        </div>

                        {{-- CTA Buttons --}}
                        <div class="animate-fade-up delay-400 mt-8 flex flex-col gap-3 sm:flex-row">
                            <a href="#contact"
                                class="group inline-flex items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 px-7 py-4 text-sm font-semibold text-white shadow-xl shadow-blue-600/25 transition-all duration-300 hover:shadow-2xl hover:shadow-blue-600/40 hover:-translate-y-1">
                                Request a Demo
                                <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </a>

                            <a href="#features"
                                class="group inline-flex items-center justify-center gap-2 rounded-xl border-2 border-slate-200 bg-white px-7 py-4 text-sm font-semibold text-slate-700 shadow-sm transition-all duration-300 hover:border-blue-300 hover:text-blue-600 hover:shadow-lg">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Features බලන්න
                            </a>
                        </div>

                        {{-- PRICING CARD --}}
                        <div class="animate-fade-up delay-400 mt-8 w-full max-w-2xl">
                            <div class="group relative overflow-hidden rounded-2xl border border-blue-100 bg-white shadow-xl shadow-blue-900/5 transition-all duration-300 hover:shadow-2xl hover:shadow-blue-900/10">
                                <div class="h-1 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600"></div>

                                <div class="flex flex-col gap-4 p-5 sm:flex-row sm:items-center sm:justify-between">
                                    <div class="flex items-start gap-3.5">
                                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-blue-600 to-indigo-600 text-white shadow-lg shadow-blue-600/30">
                                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v18m9-9H3" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-[10px] font-bold uppercase tracking-wider text-blue-600">Special Offer</p>
                                            <h3 class="mt-0.5 text-base font-extrabold text-slate-900 sm:text-lg">
                                                System Installation
                                                <span class="bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent">FREE</span>
                                            </h3>
                                            <p class="mt-0.5 text-xs leading-5 text-slate-500">No setup fee • No subscription fee</p>
                                        </div>
                                    </div>

                                    <div class="hidden h-14 w-px bg-slate-200 sm:block"></div>

                                    <div class="shrink-0 rounded-xl bg-gradient-to-br from-slate-50 to-blue-50/50 px-4 py-3 text-left ring-1 ring-slate-100 sm:text-right">
                                        <p class="text-[10px] font-semibold uppercase tracking-wider text-slate-400">Student ID Card</p>
                                        <p class="mt-0.5 text-xl font-extrabold text-slate-900">LKR 350</p>
                                        <p class="text-[10px] font-medium text-slate-500">One-time / student</p>
                                    </div>
                                </div>

                                <div class="border-t border-blue-100/60 bg-gradient-to-r from-blue-50/60 to-indigo-50/60 px-5 py-2.5">
                                    <p class="text-center text-[11px] font-semibold text-blue-700">
                                        ✨ Complete education management system for your institute
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{-- Customer Satisfaction --}}
                        <div class="animate-fade-up delay-400 mt-6 inline-flex items-center gap-3 rounded-xl border border-emerald-100 bg-gradient-to-r from-emerald-50/80 to-teal-50/80 px-4 py-3 shadow-sm">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-gradient-to-br from-emerald-500 to-teal-500 shadow-lg shadow-emerald-500/30">
                                <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-extrabold leading-tight text-slate-900 sm:text-base">100% Customer Satisfaction</p>
                                <p class="mt-0.5 text-[11px] font-medium text-slate-500">Trusted by education institutes</p>
                            </div>
                        </div>

                        {{-- Trust Points --}}
                        <div class="animate-fade-up delay-400 mt-6 flex flex-wrap gap-x-6 gap-y-3">
                            @foreach(['Web & Mobile', 'Easy to Use', 'Built for Education Institutes'] as $point)
                            <div class="flex items-center gap-2 text-xs font-semibold text-slate-600 sm:text-sm">
                                <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-gradient-to-br from-emerald-100 to-teal-100 text-[10px] font-bold text-emerald-600 ring-1 ring-emerald-200">✓</span>
                                {{ $point }}
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- PRODUCT SHOWCASE - Right Side --}}
                    <div class="animate-fade-up delay-300 relative lg:col-span-6 xl:col-span-6">
                        <div class="absolute -inset-8 rounded-[2.5rem] bg-gradient-to-r from-blue-500/20 via-indigo-500/20 to-purple-500/20 blur-3xl"></div>

                        <div class="relative overflow-hidden rounded-2xl border border-white/60 bg-white/80 shadow-2xl shadow-slate-900/20 backdrop-blur-sm">
                            <div class="flex items-center gap-2 border-b border-slate-100 bg-slate-50/80 px-4 py-3">
                                <div class="flex gap-1.5">
                                    <span class="h-3 w-3 rounded-full bg-red-400"></span>
                                    <span class="h-3 w-3 rounded-full bg-yellow-400"></span>
                                    <span class="h-3 w-3 rounded-full bg-green-400"></span>
                                </div>
                                <div class="ml-4 flex-1 rounded-md bg-white px-3 py-1 text-[10px] text-slate-400 shadow-sm">
                                    app.nexoraedu.com
                                </div>
                            </div>
                            <img src="{{ asset('images/nexora-edu-showcase.png') }}"
                                alt="nexoraEDU අධ්‍යාපන කළමනාකරණ පද්ධතිය"
                                class="h-auto w-full object-contain">
                        </div>

                        {{-- Floating Stats Card --}}
                        <div class="absolute -bottom-4 -left-4 hidden animate-float rounded-xl border border-white/60 bg-white/95 px-4 py-3 shadow-xl backdrop-blur-sm sm:block">
                            <div class="flex items-center gap-3">
                                <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-gradient-to-br from-blue-600 to-indigo-600 text-white">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-lg font-extrabold leading-none text-slate-900">1000+</p>
                                    <p class="mt-0.5 text-[10px] font-semibold text-slate-500">Active Users</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-white to-transparent"></div>
        </section>

        {{-- =====================================================
            NEXORA EDU BANNER - Full Width
        ====================================================== --}}
        <section class="w-full bg-white py-6 sm:py-10">
            <div class="w-full px-4 sm:px-6 lg:px-12 xl:px-16">
                <div class="group overflow-hidden rounded-3xl bg-white shadow-xl shadow-slate-900/5 ring-1 ring-slate-100 transition-all duration-300 hover:shadow-2xl hover:ring-blue-100">
                    <img src="{{ asset('images/banner/banner1.png') }}"
                        alt="nexoraEDU - Smart Education Management System"
                        class="block h-auto w-full object-contain transition-transform duration-500 group-hover:scale-[1.02]">
                </div>
            </div>
        </section>

        {{-- Other Components --}}
        <x-parent-app />
        <x-features />
        <x-how-it-works />
        <x-solution />
        <x-contact />
    </main>

    {{-- =====================================================
        FOOTER - Full Width
    ====================================================== --}}
    <footer class="relative w-full overflow-hidden border-t border-slate-800 bg-slate-950 py-10 text-slate-400">
        <div class="absolute left-1/2 top-0 h-32 w-96 -translate-x-1/2 rounded-full bg-blue-600/20 blur-3xl"></div>

        <div class="relative w-full px-4 sm:px-6 lg:px-12 xl:px-16">
            <div class="flex flex-col items-center justify-between gap-6 sm:flex-row">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/nexora-edu-logo.png') }}" alt="nexoraEDU"
                        class="h-10 w-auto object-contain brightness-0 invert">
                </div>

                <p class="text-sm">
                    © {{ date('Y') }} <span class="font-semibold text-white">nexoraEDU</span>. All Rights Reserved.
                </p>

                <div class="flex items-center gap-3">
                    @foreach(['facebook', 'twitter', 'linkedin'] as $social)
                    <a href="#" class="flex h-9 w-9 items-center justify-center rounded-lg bg-slate-800/50 text-slate-400 transition-all hover:bg-blue-600 hover:text-white hover:-translate-y-0.5">
                        <span class="sr-only">{{ $social }}</span>
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"/>
                        </svg>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </footer>

</body>
</html>