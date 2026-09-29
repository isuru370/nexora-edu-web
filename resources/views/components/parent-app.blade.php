{{-- =====================================================
    PARENT & TEACHER APPS
====================================================== --}}

<section id="parent" class="relative w-full overflow-hidden bg-white py-16 sm:py-20 lg:py-24">

    {{-- Background Decoration --}}
    <div class="pointer-events-none absolute -right-40 top-20 h-[420px] w-[420px] animate-float-slow rounded-full bg-blue-100/50 blur-3xl"></div>
    <div class="pointer-events-none absolute -left-40 bottom-20 h-[420px] w-[420px] animate-float-slow rounded-full bg-emerald-100/40 blur-3xl"></div>
    <div class="pointer-events-none absolute left-1/2 top-1/3 h-80 w-80 -translate-x-1/2 animate-float rounded-full bg-indigo-50/60 blur-3xl"></div>

    {{-- Grid Pattern --}}
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#e2e8f0_1px,transparent_1px),linear-gradient(to_bottom,#e2e8f0_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_50%,#000_70%,transparent_110%)] opacity-30"></div>


    <div class="relative w-full px-4 sm:px-6 lg:px-12 xl:px-16">

        {{-- =================================================
            SECTION HEADER
        ================================================== --}}
        <div class="mx-auto max-w-3xl text-center">

            <div class="mb-5 inline-flex items-center gap-2.5 rounded-full border border-blue-200/60 bg-white/80 px-4 py-2 shadow-sm backdrop-blur-sm">
                <span class="relative flex h-2.5 w-2.5">
                    <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-blue-400 opacity-75"></span>
                    <span class="relative inline-flex h-2.5 w-2.5 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600"></span>
                </span>
                <span class="bg-gradient-to-r from-blue-700 to-indigo-700 bg-clip-text text-xs font-bold uppercase tracking-wide text-transparent sm:text-sm">
                    Parent & Teacher Mobile Apps
                </span>
            </div>

            <h2 class="text-3xl font-extrabold leading-tight tracking-tight text-slate-950 sm:text-4xl lg:text-5xl">
                Education
                <span class="relative inline-block">
                    <span class="relative z-10 bg-gradient-to-r from-blue-600 via-indigo-600 to-blue-600 bg-clip-text text-transparent animate-gradient">
                        Institute එකෙන්
                    </span>
                    <span class="absolute inset-x-0 bottom-1 -z-0 h-3 bg-blue-200/50"></span>
                </span>
                <br class="hidden sm:block">
                Home එකට.
            </h2>

            <p class="mx-auto mt-6 max-w-2xl text-sm leading-8 text-slate-500 sm:text-base">
                nexoraEDU Web System එකට සම්බන්ධ Parent App සහ Teacher App
                හරහා Teachers සහ Parents දෙපාර්ශවයම education ecosystem
                එකකට connect කරන්න.
            </p>

        </div>


        {{-- =================================================
            PARENT APP
        ================================================== --}}
        <div class="mt-20 grid items-center gap-14 lg:grid-cols-12 lg:gap-16">


            {{-- APP IMAGE - Left --}}
            <div class="relative flex justify-center lg:col-span-5 lg:justify-start">

                {{-- Glow --}}
                <div class="absolute left-1/2 top-1/2 h-[420px] w-[420px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-emerald-100/60 blur-3xl"></div>

                <div class="relative w-full max-w-[480px]">

                    {{-- Phone Frame with Glow --}}
                    <div class="group relative">
                        <div class="absolute -inset-1 rounded-[2.5rem] bg-gradient-to-r from-emerald-500 via-teal-500 to-emerald-500 opacity-50 blur-lg transition-all duration-500 group-hover:opacity-75 group-hover:blur-xl animate-gradient"></div>

                        <div class="relative overflow-hidden rounded-[2.25rem] border-[7px] border-slate-900 bg-white shadow-[0_30px_80px_rgba(15,23,42,0.20)]">
                            <img
                                src="{{ asset('images/apps/parent-app.png') }}"
                                alt="nexoraEDU Parent App"
                                class="block h-auto w-full object-contain">
                        </div>
                    </div>

                    {{-- Floating Label --}}
                    <div class="absolute -bottom-5 left-1/2 -translate-x-1/2 whitespace-nowrap rounded-2xl border border-emerald-100 bg-white/95 px-6 py-3 shadow-xl backdrop-blur-sm">
                        <div class="flex items-center gap-2.5">
                            <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-gradient-to-br from-emerald-500 to-teal-500 text-white shadow-lg shadow-emerald-500/30">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19a4 4 0 00-8 0m4-8a3 3 0 100-6 3 3 0 000 6zm6 8v-1a3 3 0 00-2-2.83M17 5a3 3 0 010 6" />
                                </svg>
                            </span>
                            <span class="text-sm font-extrabold text-slate-900">
                                NEXORA CONNECT
                            </span>
                        </div>
                    </div>

                </div>

            </div>


            {{-- CONTENT - Right --}}
            <div class="lg:col-span-7">

                <div class="inline-flex items-center gap-2 rounded-full border border-emerald-200/60 bg-gradient-to-r from-emerald-50 to-teal-50 px-4 py-2">
                    <span class="flex h-2 w-2 rounded-full bg-emerald-500"></span>
                    <span class="text-xs font-bold text-emerald-700 sm:text-sm">
                        Parent Mobile App
                    </span>
                </div>


                <h3 class="mt-5 text-3xl font-extrabold leading-tight text-slate-950 sm:text-4xl">
                    Parentsටත් දරුවාගේ
                    <span class="relative inline-block">
                        <span class="relative z-10 text-emerald-600">Education Journey</span>
                        <span class="absolute inset-x-0 bottom-1 -z-0 h-3 bg-emerald-200/50"></span>
                    </span>
                    එකට සම්බන්ධ වෙන්න.
                </h3>


                <p class="mt-5 max-w-xl text-sm leading-7 text-slate-500 sm:text-base">
                    Institute එකෙන් ලබාදෙන දරුවාට අදාළ information සහ
                    updates Parentsට mobile phone එකෙන් පහසුවෙන් access
                    කරගැනීමට හැකි mobile application එකක්.
                </p>


                {{-- PARENT FEATURES --}}
                <div class="mt-8 grid gap-4 sm:grid-cols-2">

                    {{-- Student Information --}}
                    <div class="group relative rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-emerald-200 hover:shadow-xl hover:shadow-emerald-500/10">
                        <div class="absolute -right-2 -top-2 h-16 w-16 rounded-full bg-emerald-100/50 opacity-0 blur-2xl transition-opacity group-hover:opacity-100"></div>
                        <div class="relative">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gradient-to-br from-emerald-100 to-teal-100 text-emerald-600 shadow-sm ring-1 ring-emerald-200">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                        d="M15 19a4 4 0 00-8 0m4-8a3 3 0 100-6 3 3 0 000 6zm6 8v-1a3 3 0 00-2-2.83M17 5a3 3 0 010 6" />
                                </svg>
                            </div>
                            <h4 class="mt-4 text-sm font-bold text-slate-900">Student Information</h4>
                            <p class="mt-1.5 text-xs leading-5 text-slate-500">
                                දරුවාට අදාළ information පහසුවෙන් access කරන්න.
                            </p>
                        </div>
                    </div>

                    {{-- Institute Updates --}}
                    <div class="group relative rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-emerald-200 hover:shadow-xl hover:shadow-emerald-500/10">
                        <div class="absolute -right-2 -top-2 h-16 w-16 rounded-full bg-emerald-100/50 opacity-0 blur-2xl transition-opacity group-hover:opacity-100"></div>
                        <div class="relative">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gradient-to-br from-emerald-100 to-teal-100 text-emerald-600 shadow-sm ring-1 ring-emerald-200">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                        d="M12 6v6l4 2m5-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h4 class="mt-4 text-sm font-bold text-slate-900">Institute Updates</h4>
                            <p class="mt-1.5 text-xs leading-5 text-slate-500">
                                Institute එකේ වැදගත් updates ලබාගන්න.
                            </p>
                        </div>
                    </div>

                    {{-- Connected Information --}}
                    <div class="group relative rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-emerald-200 hover:shadow-xl hover:shadow-emerald-500/10">
                        <div class="absolute -right-2 -top-2 h-16 w-16 rounded-full bg-emerald-100/50 opacity-0 blur-2xl transition-opacity group-hover:opacity-100"></div>
                        <div class="relative">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gradient-to-br from-emerald-100 to-teal-100 text-emerald-600 shadow-sm ring-1 ring-emerald-200">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                        d="M9 12l2 2 4-4m5-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h4 class="mt-4 text-sm font-bold text-slate-900">Connected Information</h4>
                            <p class="mt-1.5 text-xs leading-5 text-slate-500">
                                Institute system එකෙන් information ලබාගන්න.
                            </p>
                        </div>
                    </div>

                    {{-- Mobile Access --}}
                    <div class="group relative rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-emerald-200 hover:shadow-xl hover:shadow-emerald-500/10">
                        <div class="absolute -right-2 -top-2 h-16 w-16 rounded-full bg-emerald-100/50 opacity-0 blur-2xl transition-opacity group-hover:opacity-100"></div>
                        <div class="relative">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gradient-to-br from-emerald-100 to-teal-100 text-emerald-600 shadow-sm ring-1 ring-emerald-200">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                        d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h4 class="mt-4 text-sm font-bold text-slate-900">Mobile Access</h4>
                            <p class="mt-1.5 text-xs leading-5 text-slate-500">
                                අවශ්‍ය information mobile එකෙන් access කරන්න.
                            </p>
                        </div>
                    </div>

                </div>


                {{-- GOOGLE PLAY --}}
                <div class="mt-8 flex flex-wrap items-center gap-3">

                    <a href="#" target="_blank" rel="noopener noreferrer"
                        class="group inline-flex items-center gap-3 rounded-xl bg-slate-950 px-5 py-3.5 text-white shadow-lg shadow-slate-900/20 transition-all duration-300 hover:-translate-y-1 hover:bg-slate-800 hover:shadow-2xl hover:shadow-slate-900/30">

                        <svg class="h-7 w-7 transition-transform group-hover:scale-110" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M3.6 2.1c-.4.4-.6 1-.6 1.8v16.2c0 .8.2 1.4.6 1.8l.1.1L13.1 12v-.2L3.6 2.1z" />
                            <path d="M16.4 8.7L5.1 2.3l-.2-.1L13.1 12l3.3-3.3z" />
                            <path d="M16.5 15.3L13.1 12 4.9 21.8l.2-.1 11.4-6.4z" />
                            <path d="M20.1 10.7l-3.7-2.1-3.3 3.3 3.3 3.3 3.7-2.1c.6-.4.9-.8.9-1.2s-.3-.8-.9-1.2z" />
                        </svg>

                        <div class="text-left">
                            <p class="text-[10px] font-medium text-slate-400">GET IT ON</p>
                            <p class="text-sm font-semibold">Google Play</p>
                        </div>

                    </a>

                </div>

            </div>

        </div>


        {{-- =================================================
            DIVIDER
        ================================================== --}}
        <div class="my-20 flex items-center justify-center gap-4">
            <div class="h-px flex-1 bg-gradient-to-r from-transparent via-slate-200 to-transparent"></div>
            <div class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-200 bg-white shadow-sm">
                <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </div>
            <div class="h-px flex-1 bg-gradient-to-r from-transparent via-slate-200 to-transparent"></div>
        </div>


        {{-- =================================================
            TEACHER APP
        ================================================== --}}
        <div id="teacher-app" class="grid items-center gap-14 lg:grid-cols-12 lg:gap-16">


            {{-- CONTENT - Left --}}
            <div class="order-2 lg:order-1 lg:col-span-7">

                <div class="inline-flex items-center gap-2 rounded-full border border-indigo-200/60 bg-gradient-to-r from-indigo-50 to-violet-50 px-4 py-2">
                    <span class="flex h-2 w-2 rounded-full bg-indigo-500"></span>
                    <span class="text-xs font-bold text-indigo-700 sm:text-sm">
                        Teacher Mobile App
                    </span>
                </div>


                <h3 class="mt-5 text-3xl font-extrabold leading-tight text-slate-950 sm:text-4xl">
                    Teachersට තම
                    <span class="relative inline-block">
                        <span class="relative z-10 text-indigo-600">Classes & Students</span>
                        <span class="absolute inset-x-0 bottom-1 -z-0 h-3 bg-indigo-200/50"></span>
                    </span>
                    mobile එකෙන් access කරන්න.
                </h3>


                <p class="mt-5 max-w-xl text-sm leading-7 text-slate-500 sm:text-base">
                    Teacher App එක හරහා Teachersට තමන්ට අදාළ
                    classes සහ students සම්බන්ධ information mobile
                    device එකෙන් පහසුවෙන් access කරගන්න පුළුවන්.
                </p>


                {{-- TEACHER FEATURES --}}
                <div class="mt-8 grid gap-4 sm:grid-cols-2">

                    {{-- My Classes --}}
                    <div class="group relative rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-indigo-200 hover:shadow-xl hover:shadow-indigo-500/10">
                        <div class="absolute -right-2 -top-2 h-16 w-16 rounded-full bg-indigo-100/50 opacity-0 blur-2xl transition-opacity group-hover:opacity-100"></div>
                        <div class="relative">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gradient-to-br from-indigo-100 to-violet-100 text-indigo-600 shadow-sm ring-1 ring-indigo-200">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                        d="M4 5h16v14H4zM8 9h8M8 13h5" />
                                </svg>
                            </div>
                            <h4 class="mt-4 text-sm font-bold text-slate-900">My Classes</h4>
                            <p class="mt-1.5 text-xs leading-5 text-slate-500">
                                තමන්ට අදාළ classes පහසුවෙන් බලන්න.
                            </p>
                        </div>
                    </div>

                    {{-- Students --}}
                    <div class="group relative rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-indigo-200 hover:shadow-xl hover:shadow-indigo-500/10">
                        <div class="absolute -right-2 -top-2 h-16 w-16 rounded-full bg-indigo-100/50 opacity-0 blur-2xl transition-opacity group-hover:opacity-100"></div>
                        <div class="relative">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gradient-to-br from-indigo-100 to-violet-100 text-indigo-600 shadow-sm ring-1 ring-indigo-200">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                        d="M17 20a4 4 0 00-8 0m4-8a3 3 0 100-6 3 3 0 000 6zm6 8v-1a3 3 0 00-2-2.83M17 5a3 3 0 010 6" />
                                </svg>
                            </div>
                            <h4 class="mt-4 text-sm font-bold text-slate-900">Students</h4>
                            <p class="mt-1.5 text-xs leading-5 text-slate-500">
                                Class studentsගේ information access කරන්න.
                            </p>
                        </div>
                    </div>

                    {{-- Class Information --}}
                    <div class="group relative rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-indigo-200 hover:shadow-xl hover:shadow-indigo-500/10">
                        <div class="absolute -right-2 -top-2 h-16 w-16 rounded-full bg-indigo-100/50 opacity-0 blur-2xl transition-opacity group-hover:opacity-100"></div>
                        <div class="relative">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gradient-to-br from-indigo-100 to-violet-100 text-indigo-600 shadow-sm ring-1 ring-indigo-200">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                        d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h4 class="mt-4 text-sm font-bold text-slate-900">Class Information</h4>
                            <p class="mt-1.5 text-xs leading-5 text-slate-500">
                                Class-related information එකම තැනකින්.
                            </p>
                        </div>
                    </div>

                    {{-- Mobile Access --}}
                    <div class="group relative rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-indigo-200 hover:shadow-xl hover:shadow-indigo-500/10">
                        <div class="absolute -right-2 -top-2 h-16 w-16 rounded-full bg-indigo-100/50 opacity-0 blur-2xl transition-opacity group-hover:opacity-100"></div>
                        <div class="relative">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gradient-to-br from-indigo-100 to-violet-100 text-indigo-600 shadow-sm ring-1 ring-indigo-200">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                        d="M12 6v6l4 2" />
                                </svg>
                            </div>
                            <h4 class="mt-4 text-sm font-bold text-slate-900">Mobile Access</h4>
                            <p class="mt-1.5 text-xs leading-5 text-slate-500">
                                Anywhere access with the Teacher App.
                            </p>
                        </div>
                    </div>

                </div>


                {{-- CTA --}}
                <div class="mt-8">

                    <a href="#contact"
                        class="group inline-flex items-center gap-2 rounded-xl bg-gradient-to-r from-indigo-600 to-violet-600 px-6 py-3.5 text-sm font-semibold text-white shadow-xl shadow-indigo-600/25 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl hover:shadow-indigo-600/40">

                        Teacher App ගැන දැනගන්න

                        <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>

                    </a>

                </div>

            </div>


            {{-- ANIMATED TEACHER APP VISUAL - Right --}}
            <div class="relative order-1 flex min-h-[430px] items-center justify-center lg:order-2 lg:col-span-5">
                <div class="absolute h-[360px] w-[360px] animate-float-slow rounded-full bg-indigo-100/60 blur-3xl"></div>
                <div class="absolute h-[250px] w-[250px] animate-pulse rounded-full border border-indigo-200/70"></div>

                <div class="relative w-full max-w-[480px]">
                    {{-- Main app-style panel --}}
                    <div class="group relative">
                        <div class="absolute -inset-1 rounded-[2.5rem] bg-gradient-to-r from-indigo-500 via-violet-500 to-indigo-500 opacity-50 blur-lg transition-all duration-500 group-hover:opacity-75 animate-gradient"></div>

                        <div class="relative overflow-hidden rounded-[2rem] border border-slate-200 bg-white p-5 shadow-[0_30px_80px_rgba(15,23,42,0.14)]">

                            <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                                <div class="flex items-center gap-3">
                                    <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-gradient-to-br from-indigo-100 to-violet-100 text-indigo-600 ring-1 ring-indigo-200">
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                                d="M4 5h16v14H4zM8 9h8M8 13h5" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-extrabold text-slate-950">Teacher Dashboard</p>
                                        <p class="text-xs text-slate-400">nexoraEDU Mobile App</p>
                                    </div>
                                </div>

                                <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-3 py-1 text-[10px] font-bold text-emerald-600 ring-1 ring-emerald-200">
                                    <span class="flex h-1.5 w-1.5 animate-pulse rounded-full bg-emerald-500"></span>
                                    ONLINE
                                </span>
                            </div>

                            <div class="mt-5 grid grid-cols-2 gap-3">
                                <div class="rounded-2xl bg-gradient-to-br from-indigo-50 to-violet-50 p-4 ring-1 ring-indigo-100">
                                    <div class="flex items-center justify-between">
                                        <span class="text-xs font-semibold text-slate-500">My Classes</span>
                                        <span class="flex h-7 w-7 items-center justify-center rounded-lg bg-white text-indigo-600 shadow-sm">
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                                    d="M4 5h16v14H4zM8 9h8M8 13h5" />
                                            </svg>
                                        </span>
                                    </div>
                                    <p class="mt-3 text-2xl font-extrabold text-slate-950">08</p>
                                    <div class="mt-3 h-1.5 overflow-hidden rounded-full bg-white">
                                        <div class="h-full w-3/4 animate-[teacherProgress_2.5s_ease-in-out_infinite] rounded-full bg-indigo-500"></div>
                                    </div>
                                </div>

                                <div class="rounded-2xl bg-gradient-to-br from-emerald-50 to-teal-50 p-4 ring-1 ring-emerald-100">
                                    <div class="flex items-center justify-between">
                                        <span class="text-xs font-semibold text-slate-500">Students</span>
                                        <span class="flex h-7 w-7 items-center justify-center rounded-lg bg-white text-emerald-600 shadow-sm">
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                                    d="M17 20a4 4 0 00-8 0m4-8a3 3 0 100-6 3 3 0 000 6zm6 8v-1a3 3 0 00-2-2.83M17 5a3 3 0 010 6" />
                                            </svg>
                                        </span>
                                    </div>
                                    <p class="mt-3 text-2xl font-extrabold text-slate-950">246</p>
                                    <div class="mt-3 h-1.5 overflow-hidden rounded-full bg-white">
                                        <div class="h-full w-4/5 animate-[teacherProgress_3s_ease-in-out_infinite] rounded-full bg-emerald-500"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 rounded-2xl border border-slate-100 bg-slate-50 p-4">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-xs font-bold text-slate-900">Today's Classes</p>
                                        <p class="mt-1 text-[11px] text-slate-400">Your upcoming schedule</p>
                                    </div>
                                    <span class="rounded-lg bg-white px-2.5 py-1 text-[10px] font-bold text-indigo-600 shadow-sm">
                                        View All
                                    </span>
                                </div>

                                <div class="mt-4 space-y-2.5">
                                    <div class="flex items-center gap-3 rounded-xl bg-white p-3 shadow-sm transition duration-500 hover:-translate-y-1">
                                        <span class="h-2.5 w-2.5 animate-ping rounded-full bg-indigo-500"></span>
                                        <div class="min-w-0 flex-1">
                                            <p class="truncate text-xs font-bold text-slate-900">Grade 12 • Theory</p>
                                            <p class="text-[10px] text-slate-400">08:00 AM • 42 Students</p>
                                        </div>
                                        <span class="text-[10px] font-semibold text-indigo-600">Today</span>
                                    </div>

                                    <div class="flex items-center gap-3 rounded-xl bg-white p-3 shadow-sm transition duration-500 hover:-translate-y-1">
                                        <span class="h-2.5 w-2.5 animate-pulse rounded-full bg-emerald-500"></span>
                                        <div class="min-w-0 flex-1">
                                            <p class="truncate text-xs font-bold text-slate-900">Grade 13 • Revision</p>
                                            <p class="text-[10px] text-slate-400">02:30 PM • 36 Students</p>
                                        </div>
                                        <span class="text-[10px] font-semibold text-emerald-600">Next</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Floating notification --}}
                    <div class="absolute -right-3 top-8 hidden animate-[teacherFloat_3s_ease-in-out_infinite] rounded-2xl border border-emerald-100 bg-white/95 px-4 py-3 shadow-xl backdrop-blur-sm sm:block">
                        <div class="flex items-center gap-3">
                            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-gradient-to-br from-emerald-500 to-teal-500 text-white shadow-lg shadow-emerald-500/30">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </span>
                            <div>
                                <p class="text-[10px] font-semibold text-slate-400">CONNECTED</p>
                                <p class="text-xs font-bold text-slate-900">Students Synced</p>
                            </div>
                        </div>
                    </div>

                    {{-- Floating class card --}}
                    <div class="absolute -bottom-5 -left-3 hidden animate-[teacherFloat_3.5s_ease-in-out_infinite] rounded-2xl border border-indigo-100 bg-white/95 px-4 py-3 shadow-xl backdrop-blur-sm sm:block">
                        <div class="flex items-center gap-3">
                            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-gradient-to-br from-indigo-500 to-violet-500 text-white shadow-lg shadow-indigo-500/30">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                            <div>
                                <p class="text-[10px] font-semibold text-slate-400">UPCOMING</p>
                                <p class="text-xs font-bold text-slate-900">Class Schedule</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            @keyframes teacherFloat {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-8px); }
            }

            @keyframes teacherProgress {
                0%, 100% { transform: scaleX(.72); transform-origin: left; }
                50% { transform: scaleX(1); transform-origin: left; }
            }
        </style>

        {{-- =================================================
            CONNECTED ECOSYSTEM
        ================================================== --}}

        <div class="relative mt-20 overflow-hidden rounded-3xl border border-blue-100 bg-gradient-to-r from-blue-50 via-white to-indigo-50 px-6 py-10 text-center shadow-sm">

            {{-- Background Decoration --}}
            <div class="pointer-events-none absolute -left-20 -top-20 h-64 w-64 rounded-full bg-blue-100/50 blur-3xl"></div>
            <div class="pointer-events-none absolute -bottom-20 -right-20 h-64 w-64 rounded-full bg-indigo-100/50 blur-3xl"></div>

            <div class="relative">

                <p class="text-xs font-bold uppercase tracking-[0.25em] text-slate-400">
                    One Connected Education Ecosystem
                </p>

                <div class="mt-6 flex flex-wrap items-center justify-center gap-3 text-sm font-bold sm:text-base">

                    <span class="inline-flex items-center gap-2 rounded-xl bg-white px-5 py-3 text-blue-700 shadow-sm ring-1 ring-blue-100 transition-all hover:-translate-y-0.5 hover:shadow-md">
                        <span class="flex h-2 w-2 rounded-full bg-blue-500"></span>
                        Institute
                    </span>

                    <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>

                    <span class="inline-flex items-center gap-2 rounded-xl bg-white px-5 py-3 text-indigo-700 shadow-sm ring-1 ring-indigo-100 transition-all hover:-translate-y-0.5 hover:shadow-md">
                        <span class="flex h-2 w-2 rounded-full bg-indigo-500"></span>
                        Teachers
                    </span>

                    <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>

                    <span class="inline-flex items-center gap-2 rounded-xl bg-white px-5 py-3 text-violet-700 shadow-sm ring-1 ring-violet-100 transition-all hover:-translate-y-0.5 hover:shadow-md">
                        <span class="flex h-2 w-2 rounded-full bg-violet-500"></span>
                        Students
                    </span>

                    <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>

                    <span class="inline-flex items-center gap-2 rounded-xl bg-white px-5 py-3 text-emerald-700 shadow-sm ring-1 ring-emerald-100 transition-all hover:-translate-y-0.5 hover:shadow-md">
                        <span class="flex h-2 w-2 rounded-full bg-emerald-500"></span>
                        Parents
                    </span>

                </div>

                <p class="mx-auto mt-5 max-w-2xl text-xs leading-6 text-slate-500 sm:text-sm">
                    Web System එකේ සිට mobile apps දක්වා සියලුම users එකම
                    connected education ecosystem එකක් තුළ manage කරන්න.
                </p>

            </div>

        </div>


    </div>

</section>