<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referart - Your Art Consumption Journey</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-gradient-to-br from-slate-900 via-blue-800 to-indigo-900 min-h-screen">
    <nav class="relative z-10 px-6 py-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold text-white">
                <span class="bg-gradient-to-r from-purple-400 to-blue-400 bg-clip-text text-transparent">
                    Referart
                </span>
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="#" class="text-gray-200 hover:text-white transition-colors">Dashboard</a>
            </div>
        </div>
    </nav>

    <div class="relative px-6 py-20">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6">
                Document Your
                <span class="bg-gradient-to-r from-purple-400 via-pink-400 to-red-400 bg-clip-text text-transparent">
                    Art Journey
                </span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-12 max-w-3xl mx-auto leading-relaxed">
                Every book you read, movie you watch, game you play, and show you binge - 
                they all shape who you are. Keep track of your artistic adventures.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-gradient-to-r from-purple-500 to-blue-500 hover:from-purple-600 hover:to-blue-600 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all transform hover:scale-105 shadow-lg">
                    Start Your Journey
                </button>
                <button class="border-2 border-purple-400 text-purple-400 hover:bg-purple-400 hover:text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all">
                    Learn More
                </button>
            </div>
        </div>
    </div>

    <div class="px-6 py-20">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-white text-center mb-16">
                What Art Moves You?
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="group bg-gradient-to-br from-purple-800/50 to-blue-800/50 p-8 rounded-2xl border border-purple-500/30 hover:border-purple-400/60 transition-all hover:scale-105">
                    <div class="text-4xl mb-4">📚</div>
                    <h3 class="text-xl font-semibold text-white mb-3">Books</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Capture the worlds you've explored through literature, the characters who've changed you.
                    </p>
                </div>

                <div class="group bg-gradient-to-br from-red-800/50 to-pink-800/50 p-8 rounded-2xl border border-red-500/30 hover:border-red-400/60 transition-all hover:scale-105">
                    <div class="text-4xl mb-4">🎬</div>
                    <h3 class="text-xl font-semibold text-white mb-3">Movies</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Remember the stories that made you laugh, cry, and think differently about life.
                    </p>
                </div>

                <div class="group bg-gradient-to-br from-green-800/50 to-emerald-800/50 p-8 rounded-2xl border border-green-500/30 hover:border-green-400/60 transition-all hover:scale-105">
                    <div class="text-4xl mb-4">🎮</div>
                    <h3 class="text-xl font-semibold text-white mb-3">Games</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Document the interactive experiences that challenged your mind and reflexes.
                    </p>
                </div>

                <div class="group bg-gradient-to-br from-orange-800/50 to-yellow-800/50 p-8 rounded-2xl border border-orange-500/30 hover:border-orange-400/60 transition-all hover:scale-105">
                    <div class="text-4xl mb-4">📺</div>
                    <h3 class="text-xl font-semibold text-white mb-3">TV Shows</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Track the series that kept you coming back, episode after episode.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="px-6 py-20">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-white text-center mb-16">
                How It Works
            </h2>
            
            <div class="relative mb-20">
                <div class="flex flex-col lg:flex-row items-center mb-16 group">
                    <div class="lg:w-1/2 mb-8 lg:mb-0 lg:pr-12">
                        <div class="inline-flex items-center space-x-3 mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-all duration-300">
                                <span class="text-white text-lg font-bold">1</span>
                            </div>
                            <h3 class="text-2xl font-bold text-white">Create Your Review</h3>
                        </div>
                        <p class="text-gray-300 text-lg leading-relaxed mb-6">
                            Start by choosing what you want to review - whether it's a gripping novel, an epic movie, 
                            an immersive game, or a binge-worthy TV show. Add your thoughts, feelings, and insights.
                        </p>
                        <div class="flex items-center space-x-4 text-sm text-gray-400">
                            <span class="flex items-center space-x-2">
                                <span class="w-2 h-2 bg-purple-400 rounded-full"></span>
                                <span>Choose art form</span>
                            </span>
                            <span class="flex items-center space-x-2">
                                <span class="w-2 h-2 bg-pink-400 rounded-full"></span>
                                <span>Add thoughts</span>
                            </span>
                        </div>
                    </div>
                    <div class="lg:w-1/2 lg:pl-12">
                        <div class="bg-gradient-to-br from-purple-800/30 to-pink-800/30 p-8 rounded-2xl border border-purple-500/30 transform group-hover:scale-105 transition-all duration-300 hover:border-purple-400/60">
                            <div class="text-center">
                                <div class="text-5xl mb-4 group-hover:rotate-12 transition-transform duration-300">📝</div>
                                <h4 class="text-xl font-semibold text-white mb-3">Review Creation</h4>
                                <p class="text-gray-300">Document your artistic experience with rich text, ratings, and personal notes</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col lg:flex-row-reverse items-center mb-16 group">
                    <div class="lg:w-1/2 mb-8 lg:mb-0 lg:pl-12">
                        <div class="inline-flex items-center space-x-3 mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-all duration-300">
                                <span class="text-white text-lg font-bold">2</span>
                            </div>
                            <h3 class="text-2xl font-bold text-white">Track Your Progress</h3>
                        </div>
                        <p class="text-gray-300 text-lg leading-relaxed mb-6">
                            Set your status to know where you are: "Planning to consume," "Currently consuming," 
                            "Completed," or "Dropped." Keep track of your artistic journey and never lose your place.
                        </p>
                        <div class="flex items-center space-x-4 text-sm text-gray-400">
                            <span class="flex items-center space-x-2">
                                <span class="w-2 h-2 bg-blue-400 rounded-full"></span>
                                <span>Set status</span>
                            </span>
                            <span class="flex items-center space-x-2">
                                <span class="w-2 h-2 bg-cyan-400 rounded-full"></span>
                                <span>Monitor progress</span>
                            </span>
                        </div>
                    </div>
                    <div class="lg:w-1/2 lg:pr-12">
                        <div class="bg-gradient-to-br from-blue-800/30 to-cyan-800/30 p-8 rounded-2xl border border-blue-500/30 transform group-hover:scale-105 transition-all duration-300 hover:border-blue-400/60">
                            <div class="text-center">
                                <div class="text-5xl mb-4 group-hover:-rotate-12 transition-transform duration-300">📊</div>
                                <h4 class="text-xl font-semibold text-white mb-3">Progress Tracking</h4>
                                <p class="text-gray-300">Visual status indicators help you stay organized and motivated</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col lg:flex-row items-center mb-16 group">
                    <div class="lg:w-1/2 mb-8 lg:mb-0 lg:pr-12">
                        <div class="inline-flex items-center space-x-3 mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-green-500 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-all duration-300">
                                <span class="text-white text-lg font-bold">3</span>
                            </div>
                            <h3 class="text-2xl font-bold text-white">Express Yourself</h3>
                        </div>
                        <p class="text-gray-300 text-lg leading-relaxed mb-6">
                            Rate it, write detailed reviews, add personal notes, upload images, and share 
                            what made it special (or not so special) for you. Your voice matters.
                        </p>
                        <div class="flex items-center space-x-4 text-sm text-gray-400">
                            <span class="flex items-center space-x-2">
                                <span class="w-2 h-2 bg-emerald-400 rounded-full"></span>
                                <span>Rate & review</span>
                            </span>
                            <span class="flex items-center space-x-2">
                                <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                                <span>Add media</span>
                            </span>
                        </div>
                    </div>
                    <div class="lg:w-1/2 lg:pl-12">
                        <div class="bg-gradient-to-br from-emerald-800/30 to-green-800/30 p-8 rounded-2xl border border-emerald-500/30 transform group-hover:scale-105 transition-all duration-300 hover:border-emerald-400/60">
                            <div class="text-center">
                                <div class="text-5xl mb-4 group-hover:rotate-12 transition-transform duration-300">💭</div>
                                <h4 class="text-xl font-semibold text-white mb-3">Personal Expression</h4>
                                <p class="text-gray-300">Share your unique perspective and connect with your feelings</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col lg:flex-row-reverse items-center group">
                    <div class="lg:w-1/2 mb-8 lg:mb-0 lg:pl-12">
                        <div class="inline-flex items-center space-x-3 mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-500 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-all duration-300">
                                <span class="text-white text-lg font-bold">4</span>
                            </div>
                            <h3 class="text-2xl font-bold text-white">Join the Community</h3>
                        </div>
                        <p class="text-gray-300 text-lg leading-relaxed mb-6">
                            Create or join clubs with friends to discover new art, share opinions, and see 
                            what others are passionate about. Your taste in art is unique - find your tribe!
                        </p>
                        <div class="flex items-center space-x-4 text-sm text-gray-400">
                            <span class="flex items-center space-x-2">
                                <span class="w-2 h-2 bg-orange-400 rounded-full"></span>
                                <span>Join clubs</span>
                            </span>
                            <span class="flex items-center space-x-2">
                                <span class="w-2 h-2 bg-red-400 rounded-full"></span>
                                <span>Share discoveries</span>
                            </span>
                        </div>
                    </div>
                    <div class="lg:w-1/2 lg:pr-12">
                        <div class="bg-gradient-to-br from-orange-800/30 to-red-800/30 p-8 rounded-2xl border border-orange-500/30 transform group-hover:scale-105 transition-all duration-300 hover:border-orange-400/60">
                            <div class="text-center">
                                <div class="text-5xl mb-4 group-hover:-rotate-12 transition-transform duration-300">🤝</div>
                                <h4 class="text-xl font-semibold text-white mb-3">Social Connection</h4>
                                <p class="text-gray-300">Build meaningful connections through shared artistic experiences</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <div class="inline-block group">
                    <button class="bg-gradient-to-r from-purple-500 via-blue-500 to-indigo-500 hover:from-purple-600 hover:via-blue-600 hover:to-indigo-600 text-white px-10 py-5 rounded-2xl text-xl font-semibold transition-all duration-300 transform group-hover:scale-105 group-hover:-translate-y-1 shadow-lg hover:shadow-xl hover:shadow-purple-500/25">
                        <span class="flex items-center space-x-4">
                            <span class="text-2xl group-hover:rotate-12 transition-transform duration-300">🚀</span>
                            <span>Begin Your Artistic Journey</span>
                            <span class="text-2xl group-hover:-rotate-12 transition-transform duration-300">✨</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="px-6 py-20">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-8">
                        Why Document Your Art Consumption?
                    </h2>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-white text-sm font-bold">1</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-white mb-2">Memory Preservation</h3>
                                <p class="text-gray-300">Never forget the art that moved you, shaped you, or simply entertained you.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-white text-sm font-bold">2</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-white mb-2">Personal Growth</h3>
                                <p class="text-gray-300">See how your tastes evolve and discover patterns in what resonates with you.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-pink-500 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-white text-sm font-bold">3</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-white mb-2">Share & Connect</h3>
                                <p class="text-gray-300">Connect with others who share your passion for the same art forms.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-gradient-to-br from-purple-600/20 to-blue-600/20 p-8 rounded-2xl border border-purple-500/30">
                        <div class="text-6xl mb-4 text-center">✨</div>
                        <p class="text-gray-300 text-center text-lg italic">
                            "Art is not what you see, but what you make others see."<br>
                            <span class="text-purple-400">- Edgar Degas</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="px-6 py-20">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Ready to Start Your Artistic Journey?
            </h2>
            <p class="text-xl text-gray-300 mb-8">
                Join thousands of art enthusiasts who are documenting their creative consumption journey.
            </p>
            <button class="bg-gradient-to-r from-purple-500 via-pink-500 to-red-500 hover:from-purple-600 hover:via-pink-600 hover:to-red-600 text-white px-10 py-4 rounded-lg text-xl font-semibold transition-all transform hover:scale-105 shadow-lg">
                Get Started Today
            </button>
        </div>
    </div>

    <footer class="px-6 py-12 border-t border-purple-500/30">
        <div class="max-w-7xl mx-auto text-center">
            <div class="text-2xl font-bold text-white mb-4">
                <span class="bg-gradient-to-r from-purple-400 to-blue-400 bg-clip-text text-transparent">
                    Referart
                </span>
            </div>
            <p class="text-gray-400 mb-6">
                Documenting the art that moves us, one piece at a time.
            </p>
            <div class="flex justify-center space-x-6 text-gray-400">
                <a href="#" class="hover:text-white transition-colors">Privacy</a>
                <a href="#" class="hover:text-white transition-colors">Terms</a>
                <a href="#" class="hover:text-white transition-colors">Support</a>
            </div>
        </div>
    </footer>
</body>
</html>
