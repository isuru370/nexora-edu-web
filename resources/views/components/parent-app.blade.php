{{-- =====================================================
    PARENT & TEACHER APPS
====================================================== --}}

<section id="parent" class="relative overflow-hidden bg-white py-14 sm:py-16 lg:py-20">

    {{-- Background Decoration --}}
    <div class="pointer-events-none absolute -right-40 top-20 h-[420px] w-[420px] rounded-full bg-blue-100/50 blur-3xl"></div>
    <div class="pointer-events-none absolute -left-40 bottom-20 h-[420px] w-[420px] rounded-full bg-emerald-100/40 blur-3xl"></div>
    <div class="pointer-events-none absolute left-1/2 top-1/3 h-80 w-80 -translate-x-1/2 rounded-full bg-indigo-50/60 blur-3xl"></div>


    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">


        {{-- =================================================
            SECTION HEADER
        ================================================== --}}
        <div class="mx-auto max-w-3xl text-center">

            <div class="mb-4 inline-flex items-center gap-2 rounded-full border border-blue-100 bg-blue-50 px-4 py-2">
                <span class="flex h-2 w-2 rounded-full bg-blue-500"></span>

                <span class="text-xs font-bold tracking-wide text-blue-600 sm:text-sm">
                    Parent & Teacher Mobile Apps
                </span>
            </div>

            <h2 class="text-3xl font-extrabold leading-tight tracking-tight text-slate-950 sm:text-4xl lg:text-5xl">
                Education
                <span class="text-blue-600">Institute එකෙන්</span>
                <br class="hidden sm:block">
                Home එකට.
            </h2>

            <p class="mx-auto mt-5 max-w-2xl text-sm leading-7 text-slate-500 sm:text-base">
                nexoraEDU Web System එකට සම්බන්ධ Parent App සහ Teacher App
                හරහා Teachers සහ Parents දෙපාර්ශවයම education ecosystem
                එකකට connect කරන්න.
            </p>

        </div>


        {{-- =================================================
            PARENT APP
        ================================================== --}}
        <div class="mt-14 grid items-center gap-12 lg:grid-cols-[0.95fr_1.05fr] lg:gap-16">


            {{-- APP IMAGE --}}
            <div class="relative flex justify-center lg:justify-start">

                {{-- Glow --}}
                <div class="absolute left-1/2 top-1/2 h-[420px] w-[420px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-emerald-100/60 blur-3xl"></div>

                <div class="relative w-full max-w-[520px]">

                    <div class="overflow-hidden rounded-[2.25rem] border-[7px] border-slate-900 bg-white shadow-[0_30px_80px_rgba(15,23,42,0.16)]">

                        <img
                            src="{{ asset('images/apps/parent-app.png') }}"
                            alt="nexoraEDU Parent App"
                            class="block h-auto w-full object-contain">

                    </div>

                    {{-- Floating Label --}}
                    <div class="absolute -bottom-5 left-1/2 -translate-x-1/2 whitespace-nowrap rounded-2xl border border-emerald-100 bg-white px-6 py-3 shadow-xl">

                        <div class="flex items-center gap-2">

                            <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-emerald-100 text-emerald-600">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1.8"
                                        d="M15 19a4 4 0 00-8 0m4-8a3 3 0 100-6 3 3 0 000 6zm6 8v-1a3 3 0 00-2-2.83M17 5a3 3 0 010 6" />
                                </svg>
                            </span>

                            <span class="text-sm font-bold text-slate-900">
                                NEXORA CONNECT
                            </span>

                        </div>

                    </div>

                </div>

            </div>


            {{-- CONTENT --}}
            <div>

                <div class="inline-flex items-center gap-2 rounded-full border border-emerald-100 bg-emerald-50 px-4 py-2">

                    <span class="flex h-2 w-2 rounded-full bg-emerald-500"></span>

                    <span class="text-xs font-bold text-emerald-600 sm:text-sm">
                        Parent Mobile App
                    </span>

                </div>


                <h3 class="mt-5 text-3xl font-extrabold leading-tight text-slate-950 sm:text-4xl">

                    Parentsටත් දරුවාගේ

                    <span class="text-emerald-600">
                        Education Journey
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
                    <div class="group rounded-2xl border border-slate-200 bg-slate-50 p-5 transition hover:-translate-y-1 hover:bg-white hover:shadow-lg">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600">

                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M15 19a4 4 0 00-8 0m4-8a3 3 0 100-6 3 3 0 000 6zm6 8v-1a3 3 0 00-2-2.83M17 5a3 3 0 010 6" />
                            </svg>

                        </div>

                        <h4 class="mt-4 text-sm font-bold text-slate-900">
                            Student Information
                        </h4>

                        <p class="mt-1.5 text-xs leading-5 text-slate-500">
                            දරුවාට අදාළ information පහසුවෙන් access කරන්න.
                        </p>

                    </div>


                    {{-- Institute Updates --}}
                    <div class="group rounded-2xl border border-slate-200 bg-slate-50 p-5 transition hover:-translate-y-1 hover:bg-white hover:shadow-lg">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600">

                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M12 6v6l4 2m5-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                        </div>

                        <h4 class="mt-4 text-sm font-bold text-slate-900">
                            Institute Updates
                        </h4>

                        <p class="mt-1.5 text-xs leading-5 text-slate-500">
                            Institute එකේ වැදගත් updates ලබාගන්න.
                        </p>

                    </div>


                    {{-- Connected Information --}}
                    <div class="group rounded-2xl border border-slate-200 bg-slate-50 p-5 transition hover:-translate-y-1 hover:bg-white hover:shadow-lg">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600">

                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M9 12l2 2 4-4m5-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                        </div>

                        <h4 class="mt-4 text-sm font-bold text-slate-900">
                            Connected Information
                        </h4>

                        <p class="mt-1.5 text-xs leading-5 text-slate-500">
                            Institute system එකෙන් information ලබාගන්න.
                        </p>

                    </div>


                    {{-- Mobile Access --}}
                    <div class="group rounded-2xl border border-slate-200 bg-slate-50 p-5 transition hover:-translate-y-1 hover:bg-white hover:shadow-lg">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600">

                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>

                        </div>

                        <h4 class="mt-4 text-sm font-bold text-slate-900">
                            Mobile Access
                        </h4>

                        <p class="mt-1.5 text-xs leading-5 text-slate-500">
                            අවශ්‍ය information mobile එකෙන් access කරන්න.
                        </p>

                    </div>

                </div>


                {{-- GOOGLE PLAY --}}
                <div class="mt-7">

                    <a
                        href="#"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center gap-3 rounded-xl bg-slate-950 px-5 py-3.5 text-white shadow-lg transition hover:-translate-y-0.5 hover:bg-slate-800">

                        <svg
                            class="h-7 w-7"
                            viewBox="0 0 24 24"
                            fill="currentColor">

                            <path d="M3.6 2.1c-.4.4-.6 1-.6 1.8v16.2c0 .8.2 1.4.6 1.8l.1.1L13.1 12v-.2L3.6 2.1z" />
                            <path d="M16.4 8.7L5.1 2.3l-.2-.1L13.1 12l3.3-3.3z" />
                            <path d="M16.5 15.3L13.1 12 4.9 21.8l.2-.1 11.4-6.4z" />
                            <path d="M20.1 10.7l-3.7-2.1-3.3 3.3 3.3 3.3 3.7-2.1c.6-.4.9-.8.9-1.2s-.3-.8-.9-1.2z" />

                        </svg>

                        <div class="text-left">

                            <p class="text-[10px] font-medium text-slate-400">
                                GET IT ON
                            </p>

                            <p class="text-sm font-semibold">
                                Google Play
                            </p>

                        </div>

                    </a>

                </div>

            </div>

        </div>


        {{-- =================================================
            DIVIDER
        ================================================== --}}
        <div class="my-16 h-px bg-gradient-to-r from-transparent via-slate-200 to-transparent"></div>


        {{-- =================================================
            TEACHER APP
        ================================================== --}}
        <div
            id="teacher-app"
            class="grid items-center gap-14 lg:grid-cols-[1.05fr_0.95fr] lg:gap-20">


            {{-- CONTENT --}}
            <div class="order-2 lg:order-1">

                <div class="inline-flex items-center gap-2 rounded-full border border-indigo-100 bg-indigo-50 px-4 py-2">

                    <span class="flex h-2 w-2 rounded-full bg-indigo-500"></span>

                    <span class="text-xs font-bold text-indigo-600 sm:text-sm">
                        Teacher Mobile App
                    </span>

                </div>


                <h3 class="mt-5 text-3xl font-extrabold leading-tight text-slate-950 sm:text-4xl">

                    Teachersට තම

                    <span class="text-indigo-600">
                        Classes & Students
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
                    <div class="group rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-100 text-indigo-600">

                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M4 5h16v14H4zM8 9h8M8 13h5" />
                            </svg>

                        </div>

                        <h4 class="mt-4 text-sm font-bold text-slate-900">
                            My Classes
                        </h4>

                        <p class="mt-1.5 text-xs leading-5 text-slate-500">
                            තමන්ට අදාළ classes පහසුවෙන් බලන්න.
                        </p>

                    </div>


                    {{-- Students --}}
                    <div class="group rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-100 text-indigo-600">

                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M17 20a4 4 0 00-8 0m4-8a3 3 0 100-6 3 3 0 000 6zm6 8v-1a3 3 0 00-2-2.83M17 5a3 3 0 010 6" />
                            </svg>

                        </div>

                        <h4 class="mt-4 text-sm font-bold text-slate-900">
                            Students
                        </h4>

                        <p class="mt-1.5 text-xs leading-5 text-slate-500">
                            Class studentsගේ information access කරන්න.
                        </p>

                    </div>


                    {{-- Class Information --}}
                    <div class="group rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-100 text-indigo-600">

                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                        </div>

                        <h4 class="mt-4 text-sm font-bold text-slate-900">
                            Class Information
                        </h4>

                        <p class="mt-1.5 text-xs leading-5 text-slate-500">
                            Class-related information එකම තැනකින්.
                        </p>

                    </div>


                    {{-- Mobile Access --}}
                    <div class="group rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-100 text-indigo-600">

                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M12 6v6l4 2" />
                            </svg>

                        </div>

                        <h4 class="mt-4 text-sm font-bold text-slate-900">
                            Mobile Access
                        </h4>

                        <p class="mt-1.5 text-xs leading-5 text-slate-500">
                            Anywhere access with the Teacher App.
                        </p>

                    </div>

                </div>


                {{-- CTA --}}
                <div class="mt-7">

                    <a
                        href="#contact"
                        class="inline-flex items-center gap-2 rounded-xl bg-indigo-600 px-5 py-3.5 text-sm font-semibold text-white shadow-lg shadow-indigo-600/20 transition hover:-translate-y-0.5 hover:bg-indigo-700">

                        Teacher App ගැන දැනගන්න

                        <svg
                            class="h-4 w-4"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />

                        </svg>

                    </a>

                </div>

            </div>


            {{-- ANIMATED TEACHER APP VISUAL --}}
            <div class="relative order-1 flex min-h-[430px] items-center justify-center lg:order-2">
                <div class="absolute h-[360px] w-[360px] rounded-full bg-indigo-100/60 blur-3xl"></div>
                <div class="absolute h-[250px] w-[250px] animate-pulse rounded-full border border-indigo-200/70"></div>

                <div class="relative w-full max-w-[500px]">
                    {{-- Main app-style panel --}}
                    <div class="relative overflow-hidden rounded-[2rem] border border-slate-200 bg-white p-5 shadow-[0_30px_80px_rgba(15,23,42,0.14)]">

                        <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                            <div class="flex items-center gap-3">
                                <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-indigo-100 text-indigo-600">
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

                            <span class="rounded-full bg-emerald-50 px-3 py-1 text-[10px] font-bold text-emerald-600">
                                ONLINE
                            </span>
                        </div>

                        <div class="mt-5 grid grid-cols-2 gap-3">
                            <div class="rounded-2xl bg-indigo-50 p-4">
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

                            <div class="rounded-2xl bg-emerald-50 p-4">
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

                    {{-- Floating notification --}}
                    <div class="absolute -right-3 top-8 hidden animate-[teacherFloat_3s_ease-in-out_infinite] rounded-2xl border border-emerald-100 bg-white px-4 py-3 shadow-xl sm:block">
                        <div class="flex items-center gap-3">
                            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
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
                    <div class="absolute -bottom-5 -left-3 hidden animate-[teacherFloat_3.5s_ease-in-out_infinite] rounded-2xl border border-indigo-100 bg-white px-4 py-3 shadow-xl sm:block">
                        <div class="flex items-center gap-3">
                            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-indigo-100 text-indigo-600">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
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

        <div class="mt-16 rounded-3xl border border-blue-100 bg-gradient-to-r from-blue-50 via-white to-indigo-50 px-6 py-8 text-center shadow-sm">

            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-400">
                One Connected Education Ecosystem
            </p>

            <div class="mt-5 flex flex-wrap items-center justify-center gap-3 text-sm font-bold sm:text-base">

                <span class="rounded-xl bg-white px-5 py-3 text-blue-700 shadow-sm ring-1 ring-slate-100">
                    Institute
                </span>

                <span class="text-blue-400">
                    →
                </span>

                <span class="rounded-xl bg-white px-5 py-3 text-indigo-700 shadow-sm ring-1 ring-slate-100">
                    Teachers
                </span>

                <span class="text-blue-400">
                    →
                </span>

                <span class="rounded-xl bg-white px-5 py-3 text-violet-700 shadow-sm ring-1 ring-slate-100">
                    Students
                </span>

                <span class="text-blue-400">
                    →
                </span>

                <span class="rounded-xl bg-white px-5 py-3 text-emerald-700 shadow-sm ring-1 ring-slate-100">
                    Parents
                </span>

            </div>

            <p class="mx-auto mt-4 max-w-xl text-xs leading-6 text-slate-500 sm:text-sm">
                Web System එකේ සිට mobile apps දක්වා සියලුම users එකම
                connected education ecosystem එකක් තුළ manage කරන්න.
            </p>

        </div>


    </div>

</section>