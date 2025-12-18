<?php
/**
 * @file
 * Template for the Boxton layout - ATLAB Single Page (Optimized & Snappy)
 */
?>
<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"
    class="scroll-smooth bg-slate-950">

<head>
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        slate: { 800: '#1e293b', 900: '#0f172a', 950: '#020617' },
                        teal: { 400: '#2dd4bf', 500: '#14b8a6' },
                        cyan: { 400: '#22d3ee', 500: '#06b6d4' }
                    },
                    animation: {
                        pulse: 'pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    }
                }
            }
        }
    </script>
    <style>
        /* Modern Scrollbar */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* CRITICAL: Force Background to be Dark everywhere */
        html,
        body {
            background-color: #020617 !important;
            /* bg-slate-950 */
            overscroll-behavior-y: none;
            /* Disables elastic bounce on some browsers if desired, but color fix is better */
        }

        /* Fix Admin Menu Styling to match Dark Theme */
        #admin-menu,
        #admin-menu-wrapper {
            background-color: #020617 !important;
            border-bottom: 1px solid #1e293b !important;
            color: #fff !important;
            box-shadow: none !important;
        }

        #admin-menu li.admin-menu-icon a {
            background-color: #020617 !important;
        }

        /* REVEAL ANIMATIONS - Reference Style */
        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.7s ease-out;
            will-change: opacity, transform;
        }
        
        .reveal-visible {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }

        /* Stagger delays for grid items if needed, though usually handled inline or via loop index in JS */
        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }
        .delay-300 { transition-delay: 300ms; }

        /* Optimized Blobs */
        @keyframes blob {
            0% {
                transform: translate(0px, 0px) scale(1);
            }

            33% {
                transform: translate(30px, -50px) scale(1.1);
            }

            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }

            100% {
                transform: translate(0px, 0px) scale(1);
            }
        }

        .animate-blob {
            animation: blob 10s infinite;
        }
    </style>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <?php print $styles; ?>
    <?php print $scripts; ?>
</head>

<body class="<?php print implode(' ', $classes); ?> bg-slate-950 text-white font-sans antialiased" <?php print backdrop_attributes($attributes); ?>>

    <!-- Sentinel for IntersectionObserver Header Logic (Zero Paint Cost) -->
    <div id="top-sentinel" class="absolute top-0 left-0 w-full h-4 z-[-1]"></div>

    <!-- React Root Structure Replica -->
    <div id="root">
        <div class="min-h-screen bg-slate-950 text-white overflow-x-hidden relative">

            <!-- Animated Background Blobs -->
            <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
                <div
                    class="absolute top-1/4 left-1/4 w-[600px] h-[600px] bg-gradient-to-br from-teal-500 to-cyan-500 rounded-full blur-3xl opacity-10 animate-blob">
                </div>
                <div
                    class="absolute bottom-1/4 right-1/4 w-[700px] h-[700px] bg-gradient-to-br from-orange-500 to-pink-500 rounded-full blur-3xl opacity-10 animate-blob animation-delay-2000">
                </div>
                <div
                    class="absolute top-1/2 left-1/2 w-[500px] h-[500px] bg-gradient-to-br from-blue-500 to-indigo-500 rounded-full blur-3xl opacity-10 animate-blob animation-delay-4000">
                </div>
            </div>

            <!-- Header -->
            <header id="main-header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between h-16 sm:h-20">
                        <div class="flex-shrink-0">
                            <a href="<?php print $front_page; ?>"
                                class="text-2xl sm:text-3xl font-bold tracking-tight text-white hover:opacity-90 transition-opacity"
                                aria-label="ATLAB Home">
                                <span
                                    class="bg-gradient-to-r from-teal-400 to-cyan-400 bg-clip-text text-transparent">AT</span><span
                                    class="text-white ml-1">LAB</span>
                            </a>
                        </div>
                        <nav class="hidden lg:flex items-center space-x-8" aria-label="Main Navigation">
                            <a href="#portfolio"
                                class="text-sm font-medium text-gray-300 hover:text-teal-400 transition-colors duration-200 relative group">Our
                                Work<span
                                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-teal-400 to-cyan-400 group-hover:w-full transition-all duration-300"></span></a>
                            <a href="#about"
                                class="text-sm font-medium text-gray-300 hover:text-teal-400 transition-colors duration-200 relative group">About
                                Us<span
                                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-teal-400 to-cyan-400 group-hover:w-full transition-all duration-300"></span></a>
                            <a href="#services"
                                class="text-sm font-medium text-gray-300 hover:text-teal-400 transition-colors duration-200 relative group">Our
                                Services<span
                                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-teal-400 to-cyan-400 group-hover:w-full transition-all duration-300"></span></a>
                            <a href="#sectors"
                                class="text-sm font-medium text-gray-300 hover:text-teal-400 transition-colors duration-200 relative group">Sectors<span
                                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-teal-400 to-cyan-400 group-hover:w-full transition-all duration-300"></span></a>
                            <a href="#contact"
                                class="text-sm font-medium text-gray-300 hover:text-teal-400 transition-colors duration-200 relative group">Contact<span
                                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-teal-400 to-cyan-400 group-hover:w-full transition-all duration-300"></span></a>
                        </nav>
                        <div class="hidden lg:flex items-center space-x-4">
                            <button class="p-2 text-gray-300 hover:text-teal-400 transition-colors duration-200"
                                aria-label="Call Us"><i data-lucide="phone" class="w-5 h-5 pointer-events-none"
                                    aria-hidden="true"></i></button>
                            <a href="#contact"
                                class="inline-flex items-center justify-center text-sm ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary hover:bg-primary/90 h-10 bg-gradient-to-r from-teal-500 to-cyan-500 hover:from-teal-600 hover:to-cyan-600 text-white font-semibold px-6 py-2 rounded-full shadow-lg hover:shadow-teal-500/50 transition-all duration-300">Let's
                                Talk</a>
                        </div>
                        <button
                            class="lg:hidden p-2 text-gray-300 hover:text-teal-400 transition-colors duration-200 mobile-menu-toggle"
                            aria-label="Open Mobile Menu">
                            <i data-lucide="menu" class="w-6 h-6 pointer-events-none" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </header>

            <main>
                <!-- Hero Section - Immediate Load Priority -->
                <section
                    class="relative min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8 pt-20 overflow-hidden">
                    <div class="text-center relative z-10 max-w-6xl mx-auto">
                        <div class="mb-6 reveal-on-scroll">
                            <div class="inline-block">
                                <span
                                    class="inline-flex items-center px-4 py-2 rounded-full bg-gradient-to-r from-teal-500/10 to-cyan-500/10 border border-teal-500/20 text-teal-400 text-sm font-medium mb-8">
                                    <span
                                        class="w-2 h-2 bg-teal-400 rounded-full mr-2 animate-pulse"></span>Mobile-First
                                    Design Studio
                                </span>
                            </div>
                        </div>
                        <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold leading-tight mb-6 tracking-tight reveal-on-scroll"
                            style="transition-delay: 100ms">
                            <span class="block mb-2">Designing mobile-first</span>
                            <span
                                class="bg-gradient-to-r from-teal-400 via-cyan-400 to-blue-400 bg-clip-text text-transparent">digital
                                experiences</span>
                            <span class="block mt-2">that scale</span>
                        </h1>
                        <p class="text-lg sm:text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto mb-10 leading-relaxed reveal-on-scroll"
                            style="transition-delay: 200ms">
                            We craft intelligent, performance-driven digital products that connect globally.
                            Technology-led design for the modern web.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center reveal-on-scroll"
                            style="transition-delay: 300ms">
                            <a href="#portfolio"
                                class="inline-flex items-center justify-center bg-gradient-to-r from-teal-500 to-cyan-500 hover:from-teal-600 hover:to-cyan-600 text-white font-semibold px-8 py-6 text-lg rounded-full shadow-xl hover:shadow-teal-500/50 transition-all duration-300 transform hover:scale-105">Our
                                Work</a>
                            <a href="#services"
                                class="inline-flex items-center justify-center border-2 border-teal-500/50 text-white hover:bg-teal-500/10 hover:border-teal-400 font-semibold px-8 py-6 text-lg rounded-full transition-all duration-300 transform hover:scale-105">Our
                                Services</a>
                        </div>

                        <div class="mt-20 reveal-on-scroll" style="transition-delay: 400ms">
                            <div class="flex justify-center space-x-8 text-sm text-gray-400">
                                <div class="transition-colors duration-200">
                                    <div class="font-bold text-2xl text-teal-400">100+</div>
                                    <div>Projects Delivered</div>
                                </div>
                                <div class="transition-colors duration-200">
                                    <div class="font-bold text-2xl text-teal-400">15+</div>
                                    <div>Countries Served</div>
                                </div>
                                <div class="transition-colors duration-200">
                                    <div class="font-bold text-2xl text-teal-400">98%</div>
                                    <div>Client Satisfaction</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Services Section -->
                <section id="services" class="relative py-20 sm:py-32 px-4 sm:px-6 lg:px-8">
                    <div class="max-w-7xl mx-auto">
                        <div class="text-center mb-16 reveal-on-scroll">
                            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-6">What We <span
                                    class="bg-gradient-to-r from-teal-400 to-cyan-400 bg-clip-text text-transparent">Do
                                    Best</span></h2>
                            <p class="text-lg sm:text-xl text-gray-300 max-w-3xl mx-auto">We combine strategic thinking
                                with technical excellence to deliver digital solutions that drive real business results.
                            </p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Cards with Aria hidden icons -->
                            <div
                                class="group relative bg-gradient-to-br from-slate-900/50 to-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50 hover:border-teal-500/50 transition-all duration-300 overflow-hidden reveal-on-scroll">
                                <div class="absolute inset-0 bg-gradient-to-br opacity-0 group-hover:opacity-10 transition-opacity duration-300"
                                    style="background-image: linear-gradient(to bottom right, var(--tw-gradient-stops));">
                                </div>
                                <div class="relative z-10">
                                    <div
                                        class="inline-flex p-4 rounded-xl bg-gradient-to-br from-teal-500 to-cyan-500 mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <i data-lucide="smartphone" class="w-8 h-8 text-white" aria-hidden="true"></i>
                                    </div>
                                    <h3
                                        class="text-2xl font-bold mb-4 group-hover:text-teal-400 transition-colors duration-300">
                                        Mobile Design</h3>
                                    <p class="text-gray-300 leading-relaxed">Native-feeling mobile experiences that
                                        prioritize performance, accessibility, and user delight across all devices.</p>
                                </div>
                            </div>
                            <div class="group relative bg-gradient-to-br from-slate-900/50 to-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50 hover:border-teal-500/50 transition-all duration-300 overflow-hidden reveal-on-scroll"
                                style="transition-delay: 100ms">
                                <div class="relative z-10">
                                    <div
                                        class="inline-flex p-4 rounded-xl bg-gradient-to-br from-cyan-500 to-blue-500 mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <i data-lucide="globe" class="w-8 h-8 text-white" aria-hidden="true"></i>
                                    </div>
                                    <h3
                                        class="text-2xl font-bold mb-4 group-hover:text-teal-400 transition-colors duration-300">
                                        Web Platforms</h3>
                                    <p class="text-gray-300 leading-relaxed">Scalable web applications built with modern
                                        frameworks, designed to grow with your business needs.</p>
                                </div>
                            </div>
                            <div class="group relative bg-gradient-to-br from-slate-900/50 to-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50 hover:border-teal-500/50 transition-all duration-300 overflow-hidden reveal-on-scroll"
                                style="transition-delay: 200ms">
                                <div class="relative z-10">
                                    <div
                                        class="inline-flex p-4 rounded-xl bg-gradient-to-br from-blue-500 to-indigo-500 mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <i data-lucide="palette" class="w-8 h-8 text-white" aria-hidden="true"></i>
                                    </div>
                                    <h3
                                        class="text-2xl font-bold mb-4 group-hover:text-teal-400 transition-colors duration-300">
                                        UX/UI Design</h3>
                                    <p class="text-gray-300 leading-relaxed">User-centered design systems that balance
                                        aesthetics with functionality, creating intuitive digital products.</p>
                                </div>
                            </div>
                            <div class="group relative bg-gradient-to-br from-slate-900/50 to-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50 hover:border-teal-500/50 transition-all duration-300 overflow-hidden reveal-on-scroll"
                                style="transition-delay: 300ms">
                                <div class="relative z-10">
                                    <div
                                        class="inline-flex p-4 rounded-xl bg-gradient-to-br from-orange-500 to-red-500 mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <i data-lucide="zap" class="w-8 h-8 text-white" aria-hidden="true"></i>
                                    </div>
                                    <h3
                                        class="text-2xl font-bold mb-4 group-hover:text-teal-400 transition-colors duration-300">
                                        Performance Optimization</h3>
                                    <p class="text-gray-300 leading-relaxed">Lightning-fast load times and smooth
                                        interactions through advanced optimization techniques.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Portfolio Section -->
                <section id="portfolio"
                    class="relative py-20 sm:py-32 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-transparent via-slate-900/30 to-transparent">
                    <div class="max-w-7xl mx-auto">
                        <div class="text-center mb-16 reveal-on-scroll">
                            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-6">Featured <span
                                    class="bg-gradient-to-r from-teal-400 to-cyan-400 bg-clip-text text-transparent">Work</span>
                            </h2>
                            <p class="text-lg sm:text-xl text-gray-300 max-w-3xl mx-auto">Selected projects that
                                showcase our commitment to excellence in mobile-first design and development.</p>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
                            <!-- Project 1 -->
                            <div
                                class="group relative bg-gradient-to-br from-slate-900/80 to-slate-800/80 backdrop-blur-sm rounded-2xl overflow-hidden border border-slate-700/50 hover:border-teal-500/50 transition-all duration-500 reveal-on-scroll">
                                <div
                                    class="aspect-video bg-gradient-to-br from-slate-800 to-slate-900 relative overflow-hidden">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-teal-500 to-cyan-500 opacity-20">
                                    </div>
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <span class="text-6xl font-bold text-white opacity-20" role="img"
                                            aria-label="X12 Logo Placeholder">X</span>
                                    </div>
                                </div>
                                <div class="p-8">
                                    <div class="mb-3"><span
                                            class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-gradient-to-r from-teal-500 to-cyan-500 bg-clip-text text-transparent border border-current">Financial
                                            Technology Platform</span></div>
                                    <h3
                                        class="text-2xl sm:text-3xl font-bold mb-4 group-hover:text-teal-400 transition-colors duration-300">
                                        X12.org</h3>
                                    <p class="text-gray-300 mb-6 leading-relaxed">A comprehensive mobile-first financial
                                        technology platform designed for seamless cross-border transactions.</p>
                                    <div class="flex flex-wrap gap-2 mb-6">
                                        <span
                                            class="px-3 py-1 bg-slate-800/50 text-gray-300 rounded-full text-sm border border-slate-700/50">Mobile
                                            App</span>
                                        <span
                                            class="px-3 py-1 bg-slate-800/50 text-gray-300 rounded-full text-sm border border-slate-700/50">FinTech</span>
                                    </div>
                                    <button
                                        class="inline-flex items-center text-teal-400 hover:text-teal-300 group/btn transition-all duration-300 font-semibold"
                                        aria-label="View X12 Project">View Project <i data-lucide="external-link"
                                            class="ml-2 w-4 h-4 group-hover/btn:translate-x-1"
                                            aria-hidden="true"></i></button>
                                </div>
                            </div>
                            <!-- Project 2 -->
                            <div class="group relative bg-gradient-to-br from-slate-900/80 to-slate-800/80 backdrop-blur-sm rounded-2xl overflow-hidden border border-slate-700/50 hover:border-teal-500/50 transition-all duration-500 reveal-on-scroll"
                                style="transition-delay: 200ms">
                                <div
                                    class="aspect-video bg-gradient-to-br from-slate-800 to-slate-900 relative overflow-hidden">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-blue-500 to-indigo-500 opacity-20">
                                    </div>
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <span class="text-6xl font-bold text-white opacity-20" role="img"
                                            aria-label="Project Drawdown Logo Placeholder">P</span>
                                    </div>
                                </div>
                                <div class="p-8">
                                    <div class="mb-3"><span
                                            class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-gradient-to-r from-blue-500 to-indigo-500 bg-clip-text text-transparent border border-current">Climate
                                            Action Platform</span></div>
                                    <h3
                                        class="text-2xl sm:text-3xl font-bold mb-4 group-hover:text-teal-400 transition-colors duration-300">
                                        Project Drawdown</h3>
                                    <p class="text-gray-300 mb-6 leading-relaxed">An interactive digital platform
                                        showcasing climate solutions through compelling data visualization.</p>
                                    <div class="flex flex-wrap gap-2 mb-6">
                                        <span
                                            class="px-3 py-1 bg-slate-800/50 text-gray-300 rounded-full text-sm border border-slate-700/50">Web
                                            Design</span>
                                        <span
                                            class="px-3 py-1 bg-slate-800/50 text-gray-300 rounded-full text-sm border border-slate-700/50">Impact</span>
                                    </div>
                                    <button
                                        class="inline-flex items-center text-teal-400 hover:text-teal-300 group/btn transition-all duration-300 font-semibold"
                                        aria-label="View Project Drawdown">View Project <i data-lucide="external-link"
                                            class="ml-2 w-4 h-4 group-hover/btn:translate-x-1"
                                            aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="text-center reveal-on-scroll">
                            <a href="#"
                                class="inline-flex items-center justify-center bg-gradient-to-r from-teal-500 to-cyan-500 hover:from-teal-600 hover:to-cyan-600 text-white font-semibold px-8 py-6 text-lg rounded-full shadow-xl hover:shadow-teal-500/50 transition-all duration-300 transform hover:scale-105">View
                                All Projects</a>
                        </div>
                    </div>
                </section>

                <!-- Sectors -->
                <section id="sectors" class="relative py-20 sm:py-32 px-4 sm:px-6 lg:px-8">
                    <div class="max-w-7xl mx-auto">
                        <div class="text-center mb-16 reveal-on-scroll">
                            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-6">Industries We <span
                                    class="bg-gradient-to-r from-teal-400 to-cyan-400 bg-clip-text text-transparent">Serve</span>
                            </h2>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div
                                class="group relative bg-gradient-to-br from-slate-900/50 to-slate-800/50 backdrop-blur-sm rounded-xl p-6 border border-slate-700/50 hover:border-teal-500/50 transition-all duration-300 reveal-on-scroll">
                                <div
                                    class="inline-flex p-3 rounded-lg bg-gradient-to-br from-teal-500/10 to-cyan-500/10 mb-4 group-hover:scale-110 transition-transform duration-300">
                                    <i data-lucide="building-2" class="w-6 h-6 text-teal-400" aria-hidden="true"></i>
                                </div>
                                <h3
                                    class="text-xl font-bold mb-2 group-hover:text-teal-400 transition-colors duration-300">
                                    Financial Services</h3>
                                <p class="text-gray-400 text-sm leading-relaxed">Secure, scalable platforms for modern
                                    banking.</p>
                            </div>
                            <div class="group relative bg-gradient-to-br from-slate-900/50 to-slate-800/50 backdrop-blur-sm rounded-xl p-6 border border-slate-700/50 hover:border-teal-500/50 transition-all duration-300 reveal-on-scroll"
                                style="transition-delay: 100ms">
                                <div
                                    class="inline-flex p-3 rounded-lg bg-gradient-to-br from-teal-500/10 to-cyan-500/10 mb-4 group-hover:scale-110 transition-transform duration-300">
                                    <i data-lucide="heart" class="w-6 h-6 text-teal-400" aria-hidden="true"></i>
                                </div>
                                <h3
                                    class="text-xl font-bold mb-2 group-hover:text-teal-400 transition-colors duration-300">
                                    Healthcare</h3>
                                <p class="text-gray-400 text-sm leading-relaxed">Patient-centered digital experiences.
                                </p>
                            </div>
                            <div class="group relative bg-gradient-to-br from-slate-900/50 to-slate-800/50 backdrop-blur-sm rounded-xl p-6 border border-slate-700/50 hover:border-teal-500/50 transition-all duration-300 reveal-on-scroll"
                                style="transition-delay: 200ms">
                                <div
                                    class="inline-flex p-3 rounded-lg bg-gradient-to-br from-teal-500/10 to-cyan-500/10 mb-4 group-hover:scale-110 transition-transform duration-300">
                                    <i data-lucide="leaf" class="w-6 h-6 text-teal-400" aria-hidden="true"></i>
                                </div>
                                <h3
                                    class="text-xl font-bold mb-2 group-hover:text-teal-400 transition-colors duration-300">
                                    Sustainability</h3>
                                <p class="text-gray-400 text-sm leading-relaxed">Impact-driven platforms.</p>
                            </div>
                            <div
                                class="group relative bg-gradient-to-br from-slate-900/50 to-slate-800/50 backdrop-blur-sm rounded-xl p-6 border border-slate-700/50 hover:border-teal-500/50 transition-all duration-300 reveal-on-scroll">
                                <div
                                    class="inline-flex p-3 rounded-lg bg-gradient-to-br from-teal-500/10 to-cyan-500/10 mb-4 group-hover:scale-110 transition-transform duration-300">
                                    <i data-lucide="shopping-bag" class="w-6 h-6 text-teal-400" aria-hidden="true"></i>
                                </div>
                                <h3
                                    class="text-xl font-bold mb-2 group-hover:text-teal-400 transition-colors duration-300">
                                    E-Commerce</h3>
                                <p class="text-gray-400 text-sm leading-relaxed">Mobile-first shopping.</p>
                            </div>
                            <div class="group relative bg-gradient-to-br from-slate-900/50 to-slate-800/50 backdrop-blur-sm rounded-xl p-6 border border-slate-700/50 hover:border-teal-500/50 transition-all duration-300 reveal-on-scroll"
                                style="transition-delay: 100ms">
                                <div
                                    class="inline-flex p-3 rounded-lg bg-gradient-to-br from-teal-500/10 to-cyan-500/10 mb-4 group-hover:scale-110 transition-transform duration-300">
                                    <i data-lucide="graduation-cap" class="w-6 h-6 text-teal-400"
                                        aria-hidden="true"></i>
                                </div>
                                <h3
                                    class="text-xl font-bold mb-2 group-hover:text-teal-400 transition-colors duration-300">
                                    Education</h3>
                                <p class="text-gray-400 text-sm leading-relaxed">Engaging learning platforms.</p>
                            </div>
                            <div class="group relative bg-gradient-to-br from-slate-900/50 to-slate-800/50 backdrop-blur-sm rounded-xl p-6 border border-slate-700/50 hover:border-teal-500/50 transition-all duration-300 reveal-on-scroll"
                                style="transition-delay: 200ms">
                                <div
                                    class="inline-flex p-3 rounded-lg bg-gradient-to-br from-teal-500/10 to-cyan-500/10 mb-4 group-hover:scale-110 transition-transform duration-300">
                                    <i data-lucide="laptop" class="w-6 h-6 text-teal-400" aria-hidden="true"></i>
                                </div>
                                <h3
                                    class="text-xl font-bold mb-2 group-hover:text-teal-400 transition-colors duration-300">
                                    Technology</h3>
                                <p class="text-gray-400 text-sm leading-relaxed">Cutting-edge solutions.</p>
                            </div>
                        </div>
                        <div
                            class="mt-16 text-center bg-gradient-to-br from-slate-900/80 to-slate-800/80 backdrop-blur-sm rounded-2xl p-8 sm:p-12 border border-slate-700/50 reveal-on-scroll">
                            <h3 class="text-2xl sm:text-3xl font-bold mb-4">Don't see your industry?</h3>
                            <p class="text-gray-300 text-lg mb-6 max-w-2xl mx-auto">Our mobile-first methodology adapts
                                to any sector. Let's discuss how we can help transform your digital presence.</p>
                            <a href="#contact"
                                class="inline-block text-teal-400 hover:text-teal-300 font-semibold transition-colors duration-200">Get
                                in touch →</a>
                        </div>
                    </div>
                </section>

                <!-- Contact Section -->
                <section id="contact"
                    class="relative py-20 sm:py-32 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-transparent via-slate-900/30 to-transparent">
                    <div class="max-w-7xl mx-auto">
                        <div class="text-center mb-16 reveal-on-scroll">
                            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-6">Let's Build Something <span
                                    class="bg-gradient-to-r from-teal-400 to-cyan-400 bg-clip-text text-transparent">Amazing</span>
                            </h2>
                            <p class="text-lg sm:text-xl text-gray-300 max-w-3xl mx-auto">Ready to transform your
                                digital presence? Reach out and let's start a conversation.</p>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                            <div class="reveal-on-scroll">
                                <div
                                    class="bg-gradient-to-br from-slate-900/80 to-slate-800/80 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50 h-full">
                                    <h3 class="text-2xl font-bold mb-8">Get in Touch</h3>
                                    <div class="space-y-6">
                                        <div class="flex items-start space-x-4 group">
                                            <div
                                                class="p-3 rounded-lg bg-gradient-to-br from-teal-500/10 to-cyan-500/10 group-hover:from-teal-500/20 group-hover:to-cyan-500/20 transition-all duration-300">
                                                <i data-lucide="mail" class="w-6 h-6 text-teal-400"
                                                    aria-hidden="true"></i>
                                            </div>
                                            <div>
                                                <div class="font-semibold mb-1">Email</div><a
                                                    href="mailto:hello@atlab.mx"
                                                    class="text-gray-300 hover:text-teal-400 transition-colors duration-200">hello@atlab.mx</a>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-4 group">
                                            <div
                                                class="p-3 rounded-lg bg-gradient-to-br from-teal-500/10 to-cyan-500/10 group-hover:from-teal-500/20 group-hover:to-cyan-500/20 transition-all duration-300">
                                                <i data-lucide="globe" class="w-6 h-6 text-teal-400"
                                                    aria-hidden="true"></i>
                                            </div>
                                            <div>
                                                <div class="font-semibold mb-1">Website</div><a href="https://atlab.mx"
                                                    class="text-gray-300 hover:text-teal-400 transition-colors duration-200">atlab.mx</a>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-4 group">
                                            <div
                                                class="p-3 rounded-lg bg-gradient-to-br from-teal-500/10 to-cyan-500/10 group-hover:from-teal-500/20 group-hover:to-cyan-500/20 transition-all duration-300">
                                                <i data-lucide="map-pin" class="w-6 h-6 text-teal-400"
                                                    aria-hidden="true"></i>
                                            </div>
                                            <div>
                                                <div class="font-semibold mb-1">Location</div>
                                                <p class="text-gray-300">Working globally, based in Mexico</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="reveal-on-scroll" style="transition-delay: 200ms">
                                <form
                                    class="bg-gradient-to-br from-slate-900/80 to-slate-800/80 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50"
                                    onclick="event.preventDefault()">
                                    <div class="space-y-6">
                                        <div><label class="block text-sm font-semibold mb-2"
                                                for="frm-name">Name</label><input type="text" id="frm-name"
                                                class="w-full px-4 py-3 bg-slate-900/50 border border-slate-700/50 rounded-lg focus:outline-none focus:border-teal-500 transition-colors duration-200 text-white"
                                                placeholder="Your name"></div>
                                        <div><label class="block text-sm font-semibold mb-2"
                                                for="frm-email">Email</label><input type="email" id="frm-email"
                                                class="w-full px-4 py-3 bg-slate-900/50 border border-slate-700/50 rounded-lg focus:outline-none focus:border-teal-500 transition-colors duration-200 text-white"
                                                placeholder="your@email.com"></div>
                                        <div><label class="block text-sm font-semibold mb-2"
                                                for="frm-msg">Message</label><textarea id="frm-msg" rows="5"
                                                class="w-full px-4 py-3 bg-slate-900/50 border border-slate-700/50 rounded-lg focus:outline-none focus:border-teal-500 transition-colors duration-200 text-white resize-none"
                                                placeholder="Tell us about your project..."></textarea></div>
                                        <button
                                            class="inline-flex items-center justify-center text-sm ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary hover:bg-primary/90 h-10 px-4 w-full bg-gradient-to-r from-teal-500 to-cyan-500 hover:from-teal-600 hover:to-cyan-600 text-white font-semibold py-4 rounded-lg shadow-xl hover:shadow-teal-500/50 transition-all duration-300 transform hover:scale-105">Send
                                            Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <!-- Footer -->
            <footer class="relative border-t border-slate-800/50 bg-slate-950/50 backdrop-blur-sm reveal-on-scroll">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                        <div>
                            <div class="mb-4"><span class="text-2xl font-bold"><span
                                        class="bg-gradient-to-r from-teal-400 to-cyan-400 bg-clip-text text-transparent">AT</span><span
                                        class="text-white ml-1">LAB</span></span></div>
                            <p class="text-gray-400 text-sm leading-relaxed">Mobile-first digital design studio crafting
                                exceptional experiences that scale globally.</p>
                        </div>
                        <div>
                            <p class="font-semibold mb-4">Quick Links</p>
                            <nav class="space-y-2">
                                <a href="#portfolio"
                                    class="block text-gray-400 hover:text-teal-400 transition-colors duration-200 text-sm">Our
                                    Work</a>
                                <a href="#services"
                                    class="block text-gray-400 hover:text-teal-400 transition-colors duration-200 text-sm">Services</a>
                                <a href="#sectors"
                                    class="block text-gray-400 hover:text-teal-400 transition-colors duration-200 text-sm">Sectors</a>
                                <a href="#about"
                                    class="block text-gray-400 hover:text-teal-400 transition-colors duration-200 text-sm">About</a>
                                <a href="#contact"
                                    class="block text-gray-400 hover:text-teal-400 transition-colors duration-200 text-sm">Contact</a>
                            </nav>
                        </div>
                        <div>
                            <p class="font-semibold mb-4">Connect With Us</p>
                            <div class="flex space-x-4">
                                <button
                                    class="p-2 rounded-lg bg-slate-800/50 hover:bg-teal-500/10 border border-slate-700/50 hover:border-teal-500/50 transition-all duration-300"
                                    aria-label="Twitter"><i data-lucide="twitter"
                                        class="w-5 h-5 text-gray-400 hover:text-teal-400"
                                        aria-hidden="true"></i></button>
                                <button
                                    class="p-2 rounded-lg bg-slate-800/50 hover:bg-teal-500/10 border border-slate-700/50 hover:border-teal-500/50 transition-all duration-300"
                                    aria-label="LinkedIn"><i data-lucide="linkedin"
                                        class="w-5 h-5 text-gray-400 hover:text-teal-400"
                                        aria-hidden="true"></i></button>
                                <button
                                    class="p-2 rounded-lg bg-slate-800/50 hover:bg-teal-500/10 border border-slate-700/50 hover:border-teal-500/50 transition-all duration-300"
                                    aria-label="GitHub"><i data-lucide="github"
                                        class="w-5 h-5 text-gray-400 hover:text-teal-400"
                                        aria-hidden="true"></i></button>
                                <button
                                    class="p-2 rounded-lg bg-slate-800/50 hover:bg-teal-500/10 border border-slate-700/50 hover:border-teal-500/50 transition-all duration-300"
                                    aria-label="Instagram"><i data-lucide="instagram"
                                        class="w-5 h-5 text-gray-400 hover:text-teal-400"
                                        aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="pt-8 border-t border-slate-800/50">
                        <div class="flex flex-col sm:flex-row justify-between items-center space-y-4 sm:space-y-0">
                            <p class="text-gray-400 text-sm">© <?php print date('Y'); ?> ATLAB. All rights reserved.</p>
                            <div class="flex space-x-6 text-sm">
                                <a href="#"
                                    class="text-gray-400 hover:text-teal-400 transition-colors duration-200">Privacy
                                    Policy</a>
                                <a href="#"
                                    class="text-gray-400 hover:text-teal-400 transition-colors duration-200">Terms of
                                    Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Optimization Script -->
    <script>
        // Init Icons
        lucide.createIcons();

        document.addEventListener('DOMContentLoaded', function () {
            // ANIMATION OBSERVER: Reference Implementation
            // Matches the standard feel: triggers slightly before element enters view (50px buffer)
            const revealObserver = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('reveal-visible');
                        obs.unobserve(entry.target);
                    }
                });
            }, {
                root: null,
                threshold: 0.1, 
                rootMargin: '0px 0px -50px 0px' /* Triggers just as it enters or slightly before */
            });

            document.querySelectorAll('.reveal-on-scroll').forEach(el => revealObserver.observe(el));

            // OPTIMIZATION 2: Efficient Header Scroll with Sentinel
            // Instead of a scroll event listener firing every pixel, we listen for a 0-height sentinel at top
            const header = document.getElementById('main-header');
            const sentinel = document.getElementById('top-sentinel');

            if (header && sentinel) {
                const headerObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        // If sentinel is NOT intersecting, it means we scrolled past the top
                        if (!entry.isIntersecting) {
                            header.classList.add('bg-slate-950/80', 'backdrop-blur-md');
                            header.classList.remove('bg-transparent');
                        } else {
                            // We are at the top
                            header.classList.remove('bg-slate-950/80', 'backdrop-blur-md');
                            header.classList.add('bg-transparent');
                        }
                    });
                });

                headerObserver.observe(sentinel);
            }
        });
    </script>

    <?php print $closure; ?>
</body>

</html>