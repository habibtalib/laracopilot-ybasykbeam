<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tourism Guide')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#10B981',
                        accent: '#F59E0B',
                        dark: '#1E293B',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 font-sans leading-normal tracking-normal">
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <a href="#" class="flex items-center py-4 px-2">
                            <span class="font-semibold text-gray-500 text-lg">Tourism Guide</span>
                        </a>
                    </div>
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="/" class="py-4 px-2 text-green-500 border-b-4 border-green-500 font-semibold">Home</a>
                        <a href="/guides" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Tourist Guides</a>
                        <a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Destinations</a>
                        <a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">About</a>
                        <a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8">
        @yield('content')
    </div>

    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-1/4 mb-6 md:mb-0">
                    <h3 class="text-xl font-bold mb-4">Tourism Guide</h3>
                    <p>Discover the world's most beautiful destinations with our expert guides.</p>
                </div>
                <div class="w-full md:w-1/4 mb-6 md:mb-0">
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul>
                        <li class="mb-2"><a href="/" class="hover:text-green-400 transition duration-300">Home</a></li>
                        <li class="mb-2"><a href="/guides" class="hover:text-green-400 transition duration-300">Tourist Guides</a></li>
                        <li class="mb-2"><a href="#" class="hover:text-green-400 transition duration-300">Destinations</a></li>
                        <li class="mb-2"><a href="#" class="hover:text-green-400 transition duration-300">About</a></li>
                        <li class="mb-2"><a href="#" class="hover:text-green-400 transition duration-300">Contact</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/4 mb-6 md:mb-0">
                    <h4 class="text-lg font-semibold mb-4">Contact Us</h4>
                    <p class="mb-2">Email: info@tourismguide.com</p>
                    <p class="mb-2">Phone: +1 (555) 123-4567</p>
                    <p>Address: 123 Travel Lane, Adventure City</p>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p>&copy; {{ date('Y') }} Tourism Guide. All rights reserved.</p>
                <p class="mt-2">Made with ❤️ by LaraCopilot</p>
            </div>
        </div>
    </footer>
</body>
</html>