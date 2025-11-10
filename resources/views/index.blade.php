<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aloflux - Technology solutions for African markets. Offline-first architectures, enterprise automation, and AI solutions for SMEs in low-connectivity environments.">
    <title>Aloflux - Technology Solutions for African Markets</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-gray-900 antialiased">
    <!-- Navigation -->
    <nav class="sticky top-0 bg-white shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-[#FF6D00] rounded flex items-center justify-center">
                        <span class="text-white font-bold text-xl">A</span>
                    </div>
                    <a href="/" class="text-2xl font-bold text-gray-900">Aloflux</a>
                </div>
                <div class="hidden lg:flex items-center gap-8">
                    <a href="#home" class="text-gray-700 hover:text-[#1A1A1A] font-medium transition-colors">Home</a>
                    <a href="#about" class="text-gray-700 hover:text-[#1A1A1A] font-medium transition-colors">About Us</a>
                    <a href="#services" class="text-gray-700 hover:text-[#1A1A1A] font-medium transition-colors">Services</a>
                    <a href="#projects" class="text-gray-700 hover:text-[#1A1A1A] font-medium transition-colors">Projects</a>
                    <a href="#contact" class="text-gray-700 hover:text-[#1A1A1A] font-medium transition-colors">Contact</a>
                    <a href="#contact" class="px-6 py-2.5 bg-[#FF6D00] text-white rounded-full font-semibold hover:bg-[#E55A00] transition-colors">
                        Get A Quote
                    </a>
                </div>
                <button id="mobile-menu-button" class="lg:hidden text-gray-700 p-2">
                    <i class='bx bx-menu text-2xl'></i>
                </button>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden lg:hidden bg-white border-t">
            <div class="px-4 py-4 space-y-2">
                <a href="#home" class="block px-4 py-2 text-gray-700 hover:bg-gray-50 rounded-lg">Home</a>
                <a href="#about" class="block px-4 py-2 text-gray-700 hover:bg-gray-50 rounded-lg">About Us</a>
                <a href="#services" class="block px-4 py-2 text-gray-700 hover:bg-gray-50 rounded-lg">Services</a>
                <a href="#projects" class="block px-4 py-2 text-gray-700 hover:bg-gray-50 rounded-lg">Projects</a>
                <a href="#contact" class="block px-4 py-2 text-gray-700 hover:bg-gray-50 rounded-lg">Contact</a>
                <a href="#contact" class="block px-4 py-2 bg-[#FF6D00] text-white rounded-lg font-semibold text-center">Get A Quote</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 text-[#FF6D00] text-sm font-semibold mb-4">
                        <i class='bx bx-check-circle text-lg'></i>
                        <span>Elevate Your Business With Us</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                        Empowering Your Success with Digital Expertise
                    </h1>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        We design, develop, and commercialize software with cleaner, offline-first architectures for African markets. Our solutions work seamlessly even in low-connectivity environments, helping SMEs thrive with custom enterprise automation and AI-powered tools.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#services" class="inline-flex items-center justify-center gap-2 px-8 py-3.5 bg-[#1A1A1A] text-white rounded-lg font-semibold hover:bg-[#E55A00] transition-colors">
                            Explore More
                            <i class='bx bx-right-arrow-alt text-xl'></i>
                        </a>
                        <a href="#services" class="inline-flex items-center justify-center gap-2 px-8 py-3.5 bg-white text-gray-900 border-2 border-gray-300 rounded-lg font-semibold hover:border-[#1A1A1A] hover:text-[#1A1A1A] transition-colors">
                            View All Services
                            <i class='bx bx-right-arrow-alt text-xl'></i>
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-4">
                            <div class="bg-gray-200 rounded-lg aspect-square"></div>
                            <div class="bg-gray-200 rounded-lg aspect-square"></div>
                        </div>
                        <div class="space-y-4 pt-8">
                            <div class="bg-gray-200 rounded-lg aspect-square"></div>
                            <div class="bg-gray-200 rounded-lg aspect-square"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Keywords Bar -->
    <section class="bg-[#1A1A1A] py-4 px-4 overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-4 text-white text-sm md:text-base font-medium whitespace-nowrap">
                <div class="flex items-center gap-4 animate-scroll">
                    <span>Marketing</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>Content Marketing</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>Social Media Marketing</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>Search Engine Optimization</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>Enterprise Automation</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>AI Solutions</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>Offline-First Development</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>Systems Integration</span>
                    <span class="text-[#FF6D00]">*</span>
                    <!-- Duplicate for seamless loop -->
                    <span>Marketing</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>Content Marketing</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>Social Media Marketing</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>Search Engine Optimization</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>Enterprise Automation</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>AI Solutions</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>Offline-First Development</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>Systems Integration</span>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="mb-12">
                <div class="inline-flex items-center gap-2 text-[#FF6D00] text-sm font-semibold mb-4">
                    <i class='bx bx-check-circle text-lg'></i>
                    <span>About Us</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Empowering Your Success with Digital Expertise
                </h2>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-start">
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-4">
                        <div class="bg-gray-200 rounded-lg aspect-[4/3] w-full"></div>
                        <div class="bg-gray-200 rounded-lg aspect-square w-full"></div>
                    </div>
                    <div class="space-y-4 pt-8">
                        <div class="bg-gray-200 rounded-lg aspect-square w-full"></div>
                        <div class="bg-gray-200 rounded-lg aspect-[4/3] w-full"></div>
                    </div>
                </div>

                <div>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Aloflux is a technology company dedicated to creating innovative software solutions that address the unique challenges faced by businesses in African markets. We understand that connectivity can be unreliable, and we build our solutions with this reality in mind.
                    </p>

                    <!-- Progress Bars -->
                    <div class="space-y-6 mb-8">
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-700 font-semibold">Offline-First Architecture</span>
                                <span class="text-gray-600 font-semibold">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-[#FF6D00] h-3 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-700 font-semibold">AI & Automation Solutions</span>
                                <span class="text-gray-600 font-semibold">85%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-[#FF6D00] h-3 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-700 font-semibold">Market-Specific Customization</span>
                                <span class="text-gray-600 font-semibold">88%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-[#FF6D00] h-3 rounded-full" style="width: 88%"></div>
                            </div>
                        </div>
                    </div>

                    <a href="#about" class="inline-flex items-center gap-2 px-8 py-3.5 bg-[#1A1A1A] text-white rounded-lg font-semibold hover:bg-[#E55A00] transition-colors">
                        About Us
                        <i class='bx bx-right-arrow-alt text-xl'></i>
                    </a>
                </div>
            </div>

            <!-- Statistics -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-16 pt-16 border-t border-gray-200">
                <div class="text-center">
                    <div class="w-16 h-16 bg-[#FF6D00]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class='bx bx-check-circle text-4xl text-[#FF6D00]'></i>
                    </div>
                    <div class="text-4xl font-bold text-[#1A1A1A] mb-2">500+</div>
                    <div class="text-gray-600 font-medium">Successful Projects</div>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-[#FF6D00]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class='bx bx-group text-4xl text-[#FF6D00]'></i>
                    </div>
                    <div class="text-4xl font-bold text-[#1A1A1A] mb-2">50+</div>
                    <div class="text-gray-600 font-medium">Expert Team</div>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-[#FF6D00]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class='bx bx-happy text-4xl text-[#FF6D00]'></i>
                    </div>
                    <div class="text-4xl font-bold text-[#1A1A1A] mb-2">300+</div>
                    <div class="text-gray-600 font-medium">Happy Customers</div>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-[#FF6D00]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class='bx bx-time text-4xl text-[#FF6D00]'></i>
                    </div>
                    <div class="text-4xl font-bold text-[#1A1A1A] mb-2">8+</div>
                    <div class="text-gray-600 font-medium">Years of Experience</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-[#1A1A1A]">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12">
                <div>
                    <div class="inline-flex items-center gap-2 text-[#FF6D00] text-sm font-semibold mb-4">
                        <i class='bx bx-check-circle text-lg'></i>
                        <span>Our Services</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                        Boost Your Brand with Our Expertise
                    </h2>
                </div>
                <a href="#services" class="inline-flex items-center gap-2 px-6 py-3 bg-white text-gray-900 rounded-lg font-semibold hover:bg-gray-100 transition-colors mt-4 md:mt-0">
                    View All Services
                    <i class='bx bx-right-arrow-alt text-xl'></i>
                </a>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Service 1 -->
                <div class="bg-white rounded-lg p-8 shadow-lg hover:shadow-xl transition-all hover:-translate-y-1">
                    <div class="w-14 h-14 bg-[#FF6D00]/10 rounded-lg flex items-center justify-center mb-6">
                        <i class='bx bx-shield text-4xl text-[#FF6D00]'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Offline-First Development</h3>
                    <p class="text-gray-600 mb-6 text-sm leading-relaxed">
                        We design and develop software with cleaner, offline-first architectures specifically tailored for African markets.
                    </p>
                    <a href="#" class="text-[#1A1A1A] font-semibold text-sm inline-flex items-center gap-1 hover:text-[#FF6D00] transition-colors">
                        Learn more
                        <i class='bx bx-right-arrow-alt text-lg'></i>
                    </a>
                </div>

                <!-- Service 2 -->
                <div class="bg-[#FF6D00] rounded-lg p-8 shadow-lg hover:shadow-xl transition-all hover:-translate-y-1">
                    <div class="w-14 h-14 bg-white/20 rounded-lg flex items-center justify-center mb-6">
                        <i class='bx bx-bolt text-4xl text-white'></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Enterprise Automation</h3>
                    <p class="mb-6 text-sm leading-relaxed text-white/90">
                        Custom enterprise workflow automation and AI solutions for SMEs in low-connectivity environments.
                    </p>
                    <a href="#" class="font-semibold text-sm text-white inline-flex items-center gap-1 hover:underline">
                        Learn more
                        <i class='bx bx-right-arrow-alt text-lg'></i>
                    </a>
                </div>

                <!-- Service 3 -->
                <div class="bg-white rounded-lg p-8 shadow-lg hover:shadow-xl transition-all hover:-translate-y-1">
                    <div class="w-14 h-14 bg-[#FF6D00]/10 rounded-lg flex items-center justify-center mb-6">
                        <i class='bx bx-brain text-4xl text-[#FF6D00]'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">AI Solutions</h3>
                    <p class="text-gray-600 mb-6 text-sm leading-relaxed">
                        AI-powered solutions designed to help businesses streamline operations and boost productivity.
                    </p>
                    <a href="#" class="text-[#1A1A1A] font-semibold text-sm inline-flex items-center gap-1 hover:text-[#FF6D00] transition-colors">
                        Learn more
                        <i class='bx bx-right-arrow-alt text-lg'></i>
                    </a>
                </div>

                <!-- Service 4 -->
                <div class="bg-white rounded-lg p-8 shadow-lg hover:shadow-xl transition-all hover:-translate-y-1">
                    <div class="w-14 h-14 bg-[#FF6D00]/10 rounded-lg flex items-center justify-center mb-6">
                        <i class='bx bx-file-blank text-4xl text-[#FF6D00]'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Technology Consulting</h3>
                    <p class="text-gray-600 mb-6 text-sm leading-relaxed">
                        Comprehensive software engineering, systems integration, and technology consulting services.
                    </p>
                    <a href="#" class="text-[#1A1A1A] font-semibold text-sm inline-flex items-center gap-1 hover:text-[#FF6D00] transition-colors">
                        Learn more
                        <i class='bx bx-right-arrow-alt text-lg'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12">
                <div>
                    <div class="inline-flex items-center gap-2 text-[#FF6D00] text-sm font-semibold mb-4">
                        <i class='bx bx-check-circle text-lg'></i>
                        <span>Our Projects</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                        Showcasing Our Success Stories
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl">
                        Explore some of our recent projects that have transformed businesses across African markets with innovative technology solutions.
                    </p>
                </div>
            </div>

            @php
                $projects = [
                    [
                        'icon' => 'bx-book-reader',
                        'title' => 'School Management System',
                        'description' => 'A comprehensive school management system designed to streamline administrative tasks, student records, academic performance tracking, and communication between teachers, students, and parents.',
                        'tags' => [
                            ['label' => 'Education', 'highlight' => true],
                            ['label' => 'Management System', 'highlight' => false],
                        ],
                        'link' => '#',
                    ],
                    [
                        'icon' => 'bx-pen',
                        'title' => 'Versefountain',
                        'description' => 'A vibrant platform for creatives, writers, readers, and poets to share their work, discover new content, and connect with a community of literary enthusiasts. Features include publishing tools, reading lists, and interactive engagement.',
                        'tags' => [
                            ['label' => 'Creative Platform', 'highlight' => true],
                            ['label' => 'Social Network', 'highlight' => false],
                        ],
                        'link' => 'https://versefountain.com',
                    ],
                ];
            @endphp

            <div class="grid md:grid-cols-2 gap-8">
                @foreach ($projects as $project)
                    <div class="bg-white rounded-lg border border-gray-200 overflow-hidden shadow-lg hover:shadow-xl transition-all hover:-translate-y-1 group">
                        <div class="p-6">
                            <div class="w-12 h-12 bg-[#FF6D00]/10 rounded-lg flex items-center justify-center mb-4">
                                <i class='bx {{ $project['icon'] }} text-3xl text-[#FF6D00]'></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $project['title'] }}</h3>
                            <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                                {{ $project['description'] }}
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                @foreach ($project['tags'] as $tag)
                                    @if ($tag['highlight'])
                                        <span class="px-3 py-1 bg-[#FF6D00]/10 text-[#FF6D00] text-xs font-semibold rounded-full">{{ $tag['label'] }}</span>
                                    @else
                                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-semibold rounded-full">{{ $tag['label'] }}</span>
                                    @endif
                                @endforeach
                            </div>
                            <a href="{{ $project['link'] }}" target="_blank" class="text-[#1A1A1A] font-semibold text-sm inline-flex items-center gap-1 hover:text-[#FF6D00] transition-colors">
                                View Project
                                <i class='bx bx-right-arrow-alt text-lg'></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 text-[#FF6D00] text-sm font-semibold mb-4">
                    <i class='bx bx-check-circle text-lg'></i>
                    <span>Get in Touch</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Ready to Transform Your Business?
                </h2>
                <p class="text-lg text-gray-600">
                    Let's discuss how our innovative technology solutions can help your business thrive
                </p>
            </div>

            <div class="bg-gray-50 rounded-lg p-8 md:p-12 shadow-lg">
                <form action="{{ route('contact.send') }}" method="POST" class="space-y-6" id="contact-form">
                    @csrf
                    
                    @if(session('success'))
                        <div class="bg-green-50 border-l-4 border-green-500 text-green-800 px-4 py-3 rounded-lg mb-6 shadow-sm">
                            <div class="flex items-center">
                                <i class='bx bx-check-circle text-2xl mr-2'></i>
                                <div>
                                    <p class="font-semibold">Success!</p>
                                    <p class="text-sm">{{ session('success') }}</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="bg-red-50 border-l-4 border-red-500 text-red-800 px-4 py-3 rounded-lg mb-6 shadow-sm">
                            <div class="flex items-center">
                                <i class='bx bx-error-circle text-2xl mr-2'></i>
                                <div>
                                    <p class="font-semibold">Error</p>
                                    <p class="text-sm">{{ session('error') }}</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="bg-red-50 border-l-4 border-red-500 text-red-800 px-4 py-3 rounded-lg mb-6 shadow-sm">
                            <div class="flex items-start">
                                <i class='bx bx-error-circle text-2xl mr-2 mt-1'></i>
                                <div class="flex-1">
                                    <p class="font-semibold mb-2">Validation Error</p>
                                    <ul class="list-disc list-inside space-y-1 text-sm">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-white text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-[#FF6D00]/50 transition-all duration-200">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-white text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-[#FF6D00]/50 transition-all duration-200">
                        </div>
                    </div>
                    <div>
                        <label for="company" class="block text-sm font-semibold text-gray-700 mb-2">Company</label>
                        <input type="text" id="company" name="company" value="{{ old('company') }}"
                            class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-white text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-[#FF6D00]/50 transition-all duration-200">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" required
                            class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-white text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-[#FF6D00]/50 transition-all duration-200 resize-none">{{ old('message') }}</textarea>
                    </div>
                    <button type="submit"
                        class="w-full px-8 py-4 bg-[#1A1A1A] text-white rounded-lg font-semibold hover:bg-[#E55A00] transition-colors shadow-lg">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#1A1A1A] text-white py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-3 gap-12 mb-8">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-[#FF6D00] rounded flex items-center justify-center">
                            <span class="text-white font-bold text-xl">A</span>
                        </div>
                        <span class="text-2xl font-bold">Aloflux</span>
                    </div>
                    <p class="text-gray-300 leading-relaxed">
                        Technology solutions designed for African markets. Building the future of offline-first software.
                    </p>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-4">Services</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#services" class="hover:text-[#FF6D00] transition-colors">Offline-First Development</a></li>
                        <li><a href="#services" class="hover:text-[#FF6D00] transition-colors">Enterprise Automation</a></li>
                        <li><a href="#services" class="hover:text-[#FF6D00] transition-colors">Technology Consulting</a></li>
                        <li><a href="#services" class="hover:text-[#FF6D00] transition-colors">AI Solutions</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li class="flex items-center gap-2">
                            <i class='bx bx-envelope text-lg'></i>
                            info@aloflux.com
                        </li>
                        <li class="flex items-center gap-2">
                            <i class='bx bx-phone text-lg'></i>
                            <a href="tel:+256758831249" class="hover:text-[#FF6D00] transition-colors">+256 758 831249</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 pt-8 text-center text-gray-300">
                <p>&copy; {{ date('Y') }} Aloflux. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button')?.addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    document.getElementById('mobile-menu')?.classList.add('hidden');
                }
            });
        });

        // Auto-reset form on successful submission
        @if(session('success'))
            document.getElementById('contact-form')?.reset();
        @endif
    </script>
</body>

</html>