<x-app-layout>

    <body class="font-sans antialiased">


        @section('hero')
            <div class="relative"
                style="height: 500px; background-image: url('/images/concert.jpg'); background-size: cover; background-position: center;">
                <!-- Lighter white overlay -->
                <div class="absolute inset-0 bg-black opacity-60"></div> <!-- Adjust opacity here -->
                <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
                    <div class="text-6xl font-semibold leading-tight">Your Ticket to Great Events</div>
                    <div class="mt-6 text-xl font-light">A better experience for your concerts and events and less stress for
                        finding tickets.</div>
                    <button
                        class="mt-6 px-8 py-4 rounded-full font-semibold tracking-wide bg-blue-600 text-white outline-none focus:outline-none hover:bg-blue-700 hover:shadow-xl transition duration-300 ease-in-out">
                        Search Now
                    </button>
                </div>
            </div>
        @endsection

        @section('search')
            <div class="relative mt-12 px-10">
                <!-- Container for the search input and button -->
                <div class="flex justify-center bg-white rounded-lg shadow-md mx-auto p-4 border border-gray-300 w-1/2">
                    <input
                        class="flex-1 border-none bg-transparent px-4 py-2 text-gray-600 placeholder-gray-400 outline-none focus:ring-2 focus:ring-blue-500"
                        type="search" name="search" placeholder="Search..." />
                    <button type="submit"
                        class="ml-2 bg-blue-600 text-white rounded-lg px-4 py-2 flex items-center justify-center hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                            viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                            xml:space="preserve" width="24px" height="24px">
                            <path
                                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                        </svg>
                    </button>
                </div>
            </div>
        @endsection

        @section('upcoming')
            <!-- component -->
            <!-- This is an example component -->

             <!-- component -->
    <!-- This is an example component -->
    <div class="container mx-auto px-4 py-8">
        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
                <img src="https://m.media-amazon.com/images/M/MV5BMzI0NmVkMjEtYmY4MS00ZDMxLTlkZmEtMzU4MDQxYTMzMjU2XkEyXkFqcGdeQXVyMzQ0MzA0NTM@._V1_QL75_UX380_CR0,1,380,562_.jpg"
                    class="w-full h-48 object-cover" alt="movie.title" />
                <div class="p-6">
                    <a href="#" class="block text-lg font-bold text-gray-800 hover:text-cyan-700">
                        Spider-Man: Across the Spider-Verse
                    </a>
                    <span class="text-slate-400 font-semibold">(2023)</span>
                    <div class="mt-2 h-20">
                        <span class="line-clamp-3 text-sm font-light text-gray-600">
                            Miles Morales catapults across the Multiverse, where he encounters a team of Spider-People charged with protecting its very existence. When the heroes clash on how to handle a new threat, Miles must redefine what it means to be a hero.
                        </span>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <div class="flex flex-col">
                            <span class="text-yellow-500 text-lg font-bold">IMDB SCORE</span>
                            <span class="text-2xl flex items-center gap-x-1 text-yellow-500">
                                8.8
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z"
                                        fill="#eab308" />
                                </svg>
                            </span>
                        </div>
                        <div class="text-right">
                            <span class="text-xl font-bold text-slate-500">#8</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
                <img src="https://m.media-amazon.com/images/M/MV5BMzI0NmVkMjEtYmY4MS00ZDMxLTlkZmEtMzU4MDQxYTMzMjU2XkEyXkFqcGdeQXVyMzQ0MzA0NTM@._V1_QL75_UX380_CR0,1,380,562_.jpg"
                    class="w-full h-48 object-cover" alt="movie.title" />
                <div class="p-6">
                    <a href="#" class="block text-lg font-bold text-gray-800 hover:text-cyan-700">
                        Spider-Man: Across the Spider-Verse
                    </a>
                    <span class="text-slate-400 font-semibold">(2023)</span>
                    <div class="mt-2 h-20">
                        <span class="line-clamp-3 text-sm font-light text-gray-600">
                            Miles Morales catapults across the Multiverse, where he encounters a team of Spider-People charged with protecting its very existence. When the heroes clash on how to handle a new threat, Miles must redefine what it means to be a hero.
                        </span>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <div class="flex flex-col">
                            <span class="text-yellow-500 text-lg font-bold">IMDB SCORE</span>
                            <span class="text-2xl flex items-center gap-x-1 text-yellow-500">
                                8.8
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z"
                                        fill="#eab308" />
                                </svg>
                            </span>
                        </div>
                        <div class="text-right">
                            <span class="text-xl font-bold text-slate-500">#8</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
                <img src="https://m.media-amazon.com/images/M/MV5BMzI0NmVkMjEtYmY4MS00ZDMxLTlkZmEtMzU4MDQxYTMzMjU2XkEyXkFqcGdeQXVyMzQ0MzA0NTM@._V1_QL75_UX380_CR0,1,380,562_.jpg"
                    class="w-full h-48 object-cover" alt="movie.title" />
                <div class="p-6">
                    <a href="#" class="block text-lg font-bold text-gray-800 hover:text-cyan-700">
                        Spider-Man: Across the Spider-Verse
                    </a>
                    <span class="text-slate-400 font-semibold">(2023)</span>
                    <div class="mt-2 h-20">
                        <span class="line-clamp-3 text-sm font-light text-gray-600">
                            Miles Morales catapults across the Multiverse, where he encounters a team of Spider-People charged with protecting its very existence. When the heroes clash on how to handle a new threat, Miles must redefine what it means to be a hero.
                        </span>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <div class="flex flex-col">
                            <span class="text-yellow-500 text-lg font-bold">IMDB SCORE</span>
                            <span class="text-2xl flex items-center gap-x-1 text-yellow-500">
                                8.8
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z"
                                        fill="#eab308" />
                                </svg>
                            </span>
                        </div>
                        <div class="text-right">
                            <span class="text-xl font-bold text-slate-500">#8</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
                <img src="https://m.media-amazon.com/images/M/MV5BMzI0NmVkMjEtYmY4MS00ZDMxLTlkZmEtMzU4MDQxYTMzMjU2XkEyXkFqcGdeQXVyMzQ0MzA0NTM@._V1_QL75_UX380_CR0,1,380,562_.jpg"
                    class="w-full h-48 object-cover" alt="movie.title" />
                <div class="p-6">
                    <a href="#" class="block text-lg font-bold text-gray-800 hover:text-cyan-700">
                        Spider-Man: Across the Spider-Verse
                    </a>
                    <span class="text-slate-400 font-semibold">(2023)</span>
                    <div class="mt-2 h-20">
                        <span class="line-clamp-3 text-sm font-light text-gray-600">
                            Miles Morales catapults across the Multiverse, where he encounters a team of Spider-People charged with protecting its very existence. When the heroes clash on how to handle a new threat, Miles must redefine what it means to be a hero.
                        </span>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <div class="flex flex-col">
                            <span class="text-yellow-500 text-lg font-bold">IMDB SCORE</span>
                            <span class="text-2xl flex items-center gap-x-1 text-yellow-500">
                                8.8
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z"
                                        fill="#eab308" />
                                </svg>
                            </span>
                        </div>
                        <div class="text-right">
                            <span class="text-xl font-bold text-slate-500">#8</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
                <img src="https://m.media-amazon.com/images/M/MV5BMzI0NmVkMjEtYmY4MS00ZDMxLTlkZmEtMzU4MDQxYTMzMjU2XkEyXkFqcGdeQXVyMzQ0MzA0NTM@._V1_QL75_UX380_CR0,1,380,562_.jpg"
                    class="w-full h-48 object-cover" alt="movie.title" />
                <div class="p-6">
                    <a href="#" class="block text-lg font-bold text-gray-800 hover:text-cyan-700">
                        Spider-Man: Across the Spider-Verse
                    </a>
                    <span class="text-slate-400 font-semibold">(2023)</span>
                    <div class="mt-2 h-20">
                        <span class="line-clamp-3 text-sm font-light text-gray-600">
                            Miles Morales catapults across the Multiverse, where he encounters a team of Spider-People charged with protecting its very existence. When the heroes clash on how to handle a new threat, Miles must redefine what it means to be a hero.
                        </span>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <div class="flex flex-col">
                            <span class="text-yellow-500 text-lg font-bold">IMDB SCORE</span>
                            <span class="text-2xl flex items-center gap-x-1 text-yellow-500">
                                8.8
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z"
                                        fill="#eab308" />
                                </svg>
                            </span>
                        </div>
                        <div class="text-right">
                            <span class="text-xl font-bold text-slate-500">#8</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
                <img src="https://m.media-amazon.com/images/M/MV5BMzI0NmVkMjEtYmY4MS00ZDMxLTlkZmEtMzU4MDQxYTMzMjU2XkEyXkFqcGdeQXVyMzQ0MzA0NTM@._V1_QL75_UX380_CR0,1,380,562_.jpg"
                    class="w-full h-48 object-cover" alt="movie.title" />
                <div class="p-6">
                    <a href="#" class="block text-lg font-bold text-gray-800 hover:text-cyan-700">
                        Spider-Man: Across the Spider-Verse
                    </a>
                    <span class="text-slate-400 font-semibold">(2023)</span>
                    <div class="mt-2 h-20">
                        <span class="line-clamp-3 text-sm font-light text-gray-600">
                            Miles Morales catapults across the Multiverse, where he encounters a team of Spider-People charged with protecting its very existence. When the heroes clash on how to handle a new threat, Miles must redefine what it means to be a hero.
                        </span>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <div class="flex flex-col">
                            <span class="text-yellow-500 text-lg font-bold">IMDB SCORE</span>
                            <span class="text-2xl flex items-center gap-x-1 text-yellow-500">
                                8.8
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z"
                                        fill="#eab308" />
                                </svg>
                            </span>
                        </div>
                        <div class="text-right">
                            <span class="text-xl font-bold text-slate-500">#8</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repeat the card above for other movies -->
        </div>
    </div>
            @endsection


            <main class="container mx-auto px-5 flex flex-grow">
            </main>
    </body>
</x-app-layout>
