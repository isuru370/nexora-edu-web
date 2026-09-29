<!DOCTYPE html>
<html lang="si">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>nexoraEDU - Smart Education Management System</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-slate-900 antialiased">

    {{-- =====================================================
        NAVBAR
    ====================================================== --}}
    <header class="absolute inset-x-0 top-0 z-50">

        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <nav class="flex h-20 items-center justify-between">

                {{-- Logo --}}
                <a href="#" class="flex items-center">
                    <img src="{{ asset('images/nexora-edu-logo.png') }}" alt="nexoraEDU"
                        class="h-12 w-auto object-contain">
                </a>

                {{-- Desktop Navigation --}}
                <div class="hidden items-center gap-8 md:flex">

                    <a href="#features" class="text-sm font-medium text-slate-600 transition hover:text-blue-600">
                        Features
                    </a>

                    <a href="#parent" class="text-sm font-medium text-slate-600 transition hover:text-blue-600">
                        Parent
                    </a>

                    <a href="#how-it-works" class="text-sm font-medium text-slate-600 transition hover:text-blue-600">
                        How It Works
                    </a>

                    <a href="#solution" class="text-sm font-medium text-slate-600 transition hover:text-blue-600">
                        Solutions
                    </a>

                    <a href="#contact" class="text-sm font-medium text-slate-600 transition hover:text-blue-600">
                        Contact
                    </a>

                    <a href="#contact"
                        class="rounded-xl bg-blue-600 px-5 py-2.5 text-sm font-semibold text-white shadow-lg shadow-blue-600/20 transition hover:bg-blue-700">
                        Request a Demo
                    </a>

                </div>

                {{-- Mobile Menu Button --}}
                <button type="button"
                    class="rounded-xl border border-slate-200 bg-white p-2.5 text-slate-700 shadow-sm md:hidden">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

            </nav>

        </div>
    </header>


    {{-- =====================================================
        HERO SECTION
    ====================================================== --}}
    <main>

        <section class="relative overflow-hidden bg-slate-50 py-20 sm:py-5">

            {{-- Background Effects --}}
            <div class="absolute -left-40 top-20 h-96 w-96 rounded-full bg-blue-200/30 blur-3xl"></div>

            <div class="absolute -right-40 top-10 h-[500px] w-[500px] rounded-full bg-indigo-200/30 blur-3xl"></div>

            <div
                class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(37,99,235,0.08),transparent_35%)]">
            </div>


            {{-- Hero Container --}}
            <div class="relative mx-auto max-w-7xl px-6 pb-20 pt-32 lg:px-8 lg:pb-24 lg:pt-36">

                <div class="grid items-center gap-14 lg:grid-cols-2 lg:gap-16">

                    {{-- HERO CONTENT --}}
                    <div class="max-w-2xl">

                        {{-- =====================================================
        HERO BADGE
    ====================================================== --}}
                        <div
                            class="mb-5 inline-flex items-center gap-2 rounded-full border border-blue-100 bg-white px-3.5 py-1.5 shadow-sm">

                            <span class="relative flex h-2.5 w-2.5">
                                <span
                                    class="absolute inline-flex h-full w-full animate-ping rounded-full bg-blue-400 opacity-75">
                                </span>

                                <span class="relative inline-flex h-2.5 w-2.5 rounded-full bg-blue-600"></span>
                            </span>

                            <span class="text-xs font-semibold text-blue-700 sm:text-sm">
                                Smart Education Management System
                            </span>

                        </div>


                        {{-- =====================================================
        MAIN HEADING
    ====================================================== --}}
                        <h1
                            class="max-w-2xl text-3xl font-extrabold leading-[1.12] tracking-tight text-slate-950 sm:text-4xl lg:text-[3.15rem]">

                            ඔබේ අධ්‍යාපන ආයතනය

                            <span class="text-blue-600">
                                වඩාත් Smart ලෙස
                            </span>

                            කළමනාකරණය කරන්න.

                        </h1>


                        {{-- =====================================================
    DESCRIPTION
====================================================== --}}
                        <p class="mt-5 max-w-xl text-base leading-7 text-slate-600 sm:text-lg">

                            වසර 6කට වැඩි කාලයක් තිස්සේ සංවර්ධනය කර භාවිතයේ පවතින
                            nexoraEDU සමඟ Students, Teachers, Classes, Attendance,
                            Payments සහ Financial Management එකම platform එකකින්
                            පහසුවෙන් කළමනාකරණය කරන්න.

                        </p>


                        {{-- =====================================================
    TRUST / EXPERIENCE
====================================================== --}}
                        <div class="mt-6 flex flex-wrap items-center gap-3">

                            <div
                                class="inline-flex items-center gap-2 rounded-full border border-blue-100 bg-blue-50 px-4 py-2">
                                <span class="flex h-2 w-2 rounded-full bg-blue-600"></span>

                                <span class="text-xs font-bold text-blue-700 sm:text-sm">
                                    6+ Years of Experience
                                </span>
                            </div>

                            <div
                                class="inline-flex items-center gap-2 rounded-full border border-emerald-100 bg-emerald-50 px-4 py-2">
                                <span class="flex h-2 w-2 rounded-full bg-emerald-500"></span>

                                <span class="text-xs font-bold text-emerald-700 sm:text-sm">
                                    Trusted by Educational Institutions
                                </span>
                            </div>

                        </div>


                        {{-- =====================================================
        CTA BUTTONS
    ====================================================== --}}
                        <div class="mt-7 flex flex-col gap-3 sm:flex-row">

                            {{-- Primary --}}
                            <a href="#contact"
                                class="inline-flex items-center justify-center gap-2 rounded-xl
                   bg-blue-600 px-6 py-3.5 text-sm font-semibold text-white
                   shadow-lg shadow-blue-600/20
                   transition duration-200
                   hover:-translate-y-0.5 hover:bg-blue-700">

                                Request a Demo

                                <svg class="h-4.5 w-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7l5 5m0 0l-5 5m5-5H6" />

                                </svg>

                            </a>


                            {{-- Secondary --}}
                            <a href="#features"
                                class="inline-flex items-center justify-center
                   rounded-xl border border-slate-200 bg-white
                   px-6 py-3.5 text-sm font-semibold text-slate-700
                   shadow-sm transition
                   hover:border-blue-200 hover:text-blue-600">

                                Features බලන්න

                            </a>

                        </div>


                        {{-- =====================================================
        CUSTOMER SATISFACTION
    ====================================================== --}}
                        <div
                            class="mt-6 inline-flex items-center gap-3 rounded-xl
               border border-emerald-100 bg-emerald-50/70
               px-3.5 py-2.5 shadow-sm">

                            {{-- Icon --}}
                            <div
                                class="flex h-9 w-9 shrink-0 items-center justify-center
                   rounded-lg bg-emerald-100">

                                <svg class="h-5 w-5 text-emerald-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />

                                </svg>

                            </div>


                            {{-- Text --}}
                            <div>

                                <p class="text-sm font-extrabold leading-tight text-slate-900 sm:text-base">
                                    100% Customer Satisfaction
                                </p>

                                <p class="mt-0.5 text-[11px] font-medium text-slate-500 sm:text-xs">
                                    Trusted by education institutes
                                </p>

                            </div>

                        </div>


                        {{-- =====================================================
        TRUST POINTS
    ====================================================== --}}
                        <div class="mt-6 flex flex-wrap gap-x-5 gap-y-2.5">

                            {{-- Web & Mobile --}}
                            <div class="flex items-center gap-1.5 text-xs font-medium text-slate-500 sm:text-sm">

                                <span
                                    class="flex h-5 w-5 shrink-0 items-center justify-center
                       rounded-full bg-emerald-100
                       text-[10px] font-bold text-emerald-600">

                                    ✓

                                </span>

                                Web & Mobile

                            </div>


                            {{-- Easy to Use --}}
                            <div class="flex items-center gap-1.5 text-xs font-medium text-slate-500 sm:text-sm">

                                <span
                                    class="flex h-5 w-5 shrink-0 items-center justify-center
                       rounded-full bg-emerald-100
                       text-[10px] font-bold text-emerald-600">

                                    ✓

                                </span>

                                Easy to Use

                            </div>


                            {{-- Built for Education --}}
                            <div class="flex items-center gap-1.5 text-xs font-medium text-slate-500 sm:text-sm">

                                <span
                                    class="flex h-5 w-5 shrink-0 items-center justify-center
                       rounded-full bg-emerald-100
                       text-[10px] font-bold text-emerald-600">

                                    ✓

                                </span>

                                Built for Education Institutes

                            </div>

                        </div>

                    </div>


                    {{-- PRODUCT SHOWCASE --}}
                    <div class="relative">

                        {{-- Soft Glow --}}
                        <div class="absolute -inset-6 rounded-[2rem] bg-blue-500/10 blur-3xl"></div>


                        {{-- Image --}}
                        <div
                            class="relative overflow-hidden rounded-[1.75rem] border border-white/80 bg-white/70 p-2 shadow-2xl shadow-slate-900/15 backdrop-blur">

                            <img src="{{ asset('images/nexora-edu-showcase.png') }}"
                                alt="nexoraEDU අධ්‍යාපන කළමනාකරණ පද්ධතිය"
                                class="h-auto w-full rounded-[1.25rem] object-contain">

                        </div>

                    </div>

                </div>

            </div>


            {{-- Bottom Fade --}}
            <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-white to-transparent"></div>

        </section>


        {{-- =====================================================
    NEXORA EDU BANNER
====================================================== --}}
        <section class="bg-slate-50 py-4 sm:py-6">

            <div class="mx-auto max-w-[1600px] px-4 sm:px-6 lg:px-8">

                <div class="overflow-hidden rounded-2xl bg-white shadow-sm">

                    <img src="{{ asset('images/banner/banner1.png') }}"
                        alt="nexoraEDU - Smart Education Management System" class="block h-auto w-full object-contain">

                </div>

            </div>

        </section>

        {{-- =====================================================
            parent
        ====================================================== --}}


        <x-parent-app />

        {{-- =====================================================
            FEATURES
        ====================================================== --}}

        <x-features />



        {{-- =====================================================
            HOW IT WORKS
        ====================================================== --}}

        <x-how-it-works />


        {{-- =====================================================
            SOLUTION
        ====================================================== --}}

        <x-solution />


        {{-- =====================================================
            CONTACT
        ====================================================== --}}

        <x-contact />

    </main>


    {{-- =====================================================
        FOOTER
    ====================================================== --}}

    <footer class="border-t border-slate-800 bg-slate-950 py-8 text-slate-400">

        <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-4 px-6 sm:flex-row lg:px-8">

            <div class="flex items-center gap-3">
                <img src="{{ asset('images/nexora-edu-logo.png') }}" alt="nexoraEDU"
                    class="h-9 w-auto object-contain">
            </div>

            <p class="text-sm">
                © {{ date('Y') }} nexoraEDU. All Rights Reserved.
            </p>

        </div>

    </footer>

</body>

</html>
