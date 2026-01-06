<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta-description', 'Luxury travel destinations and exclusive deals')">
    <meta name="keywords" content="@yield('meta-keywords', 'travel, luxury, destinations, hotels, resorts')">

    <!-- Preload critical resources -->
    <link rel="preconnect" href="https://cdn.tailwindcss.com">
    <link rel="preconnect" href="https://code.jquery.com">
    <link rel="preconnect" href="https://image.pollinations.ai">

    <!-- Critical CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Enhanced Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.6s ease-out',
                        'bounce-gentle': 'bounceGentle 2s infinite'
                    },
                    backdropBlur: {
                        'xs': '2px'
                    }
                }
            }
        }
    </script>

    <title>@yield('title', 'Luxury Travel Destinations')</title>
</head>
<body class="font-sans antialiased bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white/80 backdrop-blur-md border-b border-gray-200/50 shadow-sm fixed w-full z-50" role="navigation" aria-label="Main navigation">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="flex items-center text-2xl font-bold text-blue-800" aria-label="Home">
                        <svg class="w-8 h-8 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M9.243 3.03a1 1 0 01.727 1.213l-4 5a1 1 0 01-1.414 0l-2-2.5a1 1 0 111.414-1.414L7 10.586 9.757 7.793a1 1 0 011.49.088l4 5a1 1 0 11-1.414 1.414l-3.75-5-1.75 2.25a1 1 0 01-1.54.088l-2-2a1 1 0 01-.091-1.407z" clip-rule="evenodd"/>
                        </svg>
                        <span>LuxuryTravel</span>
                    </a>
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-gray-900 hover:text-blue-600 px-3 py-2 font-medium transition-colors duration-200" role="menuitem" aria-current="page">Home</a>
                    <a href="{{ route('tourist.index') }}" class="text-gray-900 hover:text-blue-600 px-3 py-2 font-medium transition-colors duration-200" role="menuitem">Destinations</a>
                    <a href="#" onclick="alert('Coming Soon!')" class="text-gray-900 hover:text-blue-600 px-3 py-2 font-medium transition-colors duration-200" role="menuitem">Deals</a>
                    <a href="#" onclick="alert('Coming Soon!')" class="text-gray-900 hover:text-blue-600 px-3 py-2 font-medium transition-colors duration-200" role="menuitem">About</a>
                    <a href="#" onclick="alert('Coming Soon!')" class="text-gray-900 hover:text-blue-600 px-3 py-2 font-medium transition-colors duration-200" role="menuitem">Contact</a>
                    <a href="{{ route('admin.login') }}" class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-4 py-2 rounded-xl font-semibold hover:from-blue-700 hover:to-indigo-700 transition-all duration-300">
                        Admin Panel
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex items-center md:hidden">
                    <button class="text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-md p-2" aria-expanded="false" aria-controls="mobile-menu" aria-label="Toggle navigation menu">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="/" class="text-gray-900 hover:text-blue-600 block px-3 py-2 rounded-md font-medium">Home</a>
                <a href="{{ route('tourist.index') }}" class="text-gray-900 hover:text-blue-600 block px-3 py-2 rounded-md font-medium">Destinations</a>
                <a href="#" onclick="alert('Coming Soon!')" class="text-gray-900 hover:text-blue-600 block px-3 py-2 rounded-md font-medium">Deals</a>
                <a href="#" onclick="alert('Coming Soon!')" class="text-gray-900 hover:text-blue-600 block px-3 py-2 rounded-md font-medium">About</a>
                <a href="#" onclick="alert('Coming Soon!')" class="text-gray-900 hover:text-blue-600 block px-3 py-2 rounded-md font-medium">Contact</a>
                <a href="{{ route('admin.login') }}" class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-4 py-2 rounded-xl font-semibold hover:from-blue-700 hover:to-indigo-700 transition-all duration-300 block mt-2">
                    Admin Panel
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-blue-900 to-indigo-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <h3 class="text-xl font-bold mb-6">LuxuryTravel</h3>
                    <p class="text-blue-100 mb-6">Discover the world's most luxurious destinations and create unforgettable memories with our exclusive travel experiences.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-white hover:text-blue-300 transition-colors duration-200" aria-label="Facebook">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                        <a href="#" class="text-white hover:text-blue-300 transition-colors duration-200" aria-label="Twitter">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                            </svg>
                        </a>
                        <a href="#" class="text-white hover:text-blue-300 transition-colors duration-200" aria-label="Instagram">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a44.248 44.248 0 012.162 1.01c.487.248.99.617 1.336 1.057.378.475.663.813.875 1.033.212.22.435.488.578.783.143.295.228.625.288.973.108.75.09 1.131-.162 1.743-.253.613-.628 1.111-1.191 1.544-.563.433-.967.817-1.524 1.118-.556.302-1.013.52-1.627.616-.613.1-.93.044-1.347-.102a10.16 10.16 0 00-2.677-.65c-.68-.296-1.28-.7-1.793-1.22-.513-.52-.918-1.136-1.183-1.858-.266-.722-.336-1.18-.248-1.62.088-.44.383-.777.85-1.08.467-.303.816-.525 1.446-.67a24.17 24.17 0 001.44-.22c.477-.05 1.006-.073 1.508-.073zm-.315 5.153a6.144 6.144 0 100 12.288 6.144 6.144 0 000-12.288zm0 1.5a4.644 4.644 0 110 9.288 4.644 4.644 0 010-9.288z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="/" class="text-blue-100 hover:text-white transition-colors duration-200">Home</a></li>
                        <li><a href="{{ route('tourist.index') }}" class="text-blue-100 hover:text-white transition-colors duration-200">Destinations</a></li>
                        <li><a href="#" onclick="alert('Coming Soon!')" class="text-blue-100 hover:text-white transition-colors duration-200">Deals</a></li>
                        <li><a href="#" onclick="alert('Coming Soon!')" class="text-blue-100 hover:text-white transition-colors duration-200">About Us</a></li>
                        <li><a href="#" onclick="alert('Coming Soon!')" class="text-blue-100 hover:text-white transition-colors duration-200">Contact</a></li>
                        <li><a href="{{ route('admin.login') }}" class="text-blue-100 hover:text-white transition-colors duration-200">Admin Panel</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="text-lg font-semibold mb-6">Services</h4>
                    <ul class="space-y-3">
                        <li><a href="#" onclick="alert('Coming Soon!')" class="text-blue-100 hover:text-white transition-colors duration-200">Luxury Hotels</a></li>
                        <li><a href="#" onclick="alert('Coming Soon!')" class="text-blue-100 hover:text-white transition-colors duration-200">Resort Bookings</a></li>
                        <li><a href="#" onclick="alert('Coming Soon!')" class="text-blue-100 hover:text-white transition-colors duration-200">Travel Packages</a></li>
                        <li><a href="#" onclick="alert('Coming Soon!')" class="text-blue-100 hover:text-white transition-colors duration-200">VIP Services</a></li>
                        <li><a href="#" onclick="alert('Coming Soon!')" class="text-blue-100 hover:text-white transition-colors duration-200">Custom Tours</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold mb-6">Contact Us</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-300 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-blue-100">123 Luxury Lane, Paradise City</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-300 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                            <span class="text-blue-100">+1 (555) 123-4567</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-300 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                            <span class="text-blue-100">info@luxurytravel.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-blue-800/30 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-blue-200 text-sm mb-4 md:mb-0">© {{ date('Y') }} LuxuryTravel. All rights reserved.</p>
                <div class="flex space-x-6">
                    <a href="#" onclick="alert('Coming Soon!')" class="text-blue-200 hover:text-white text-sm transition-colors duration-200">Privacy Policy</a>
                    <a href="#" onclick="alert('Coming Soon!')" class="text-blue-200 hover:text-white text-sm transition-colors duration-200">Terms of Service</a>
                    <a href="#" onclick="alert('Coming Soon!')" class="text-blue-200 hover:text-white text-sm transition-colors duration-200">Cookie Policy</a>
                </div>
            </div>

            <div class="mt-8 text-center text-blue-200 text-sm">
                Made with ❤️ by LaraCopilot
            </div>
        </div>
    </footer>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Mobile Menu Toggle -->
    <script>
        $(document).ready(function() {
            $('#mobile-menu').hide();

            $('button[aria-controls="mobile-menu"]').click(function() {
                const expanded = $(this).attr('aria-expanded') === 'true';
                $(this).attr('aria-expanded', !expanded);
                $('#mobile-menu').slideToggle();
            });
        });
    </script>
</body>
</html>