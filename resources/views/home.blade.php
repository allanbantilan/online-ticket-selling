<x-app-layout>

    <body class="font-sans antialiased">


        @section('hero')
            <div class="relative"
                style="height: 550px; background-image: url('/images/concert.jpg'); background-size: cover; background-position: center;">
                <!-- Lighter white overlay -->
                <div class="absolute inset-0 bg-black opacity-60"></div> <!-- Adjust opacity here -->
                <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
                    <div class="text-6xl font-semibold leading-tight">Your Ticket to Great Events</div>
                    <div class="mt-6 text-xl font-light">A better experience for your concerts and events and less stress for
                        finding tickets.</div>
                    <button
                        class="mt-6 px-8 py-4 rounded-full font-semibold tracking-wide bg-blue-600 text-white outline-none focus:outline-none hover:bg-blue-700 hover:shadow-xl transition duration-300 ease-in-out">
                        Browse Now
                    </button>
                </div>
            </div>
        @endsection

        @section('search')
            <div class="relative mt-4 px-10">
                <!-- Container for the search input and button -->
                <div class="flex justify-center bg-white rounded-lg shadow-md mx-auto p-4 border border-gray-300 w-1/2">
                    <input
                        class="flex-1 border-none bg-transparent px-4 py-2 text-gray-600 placeholder-gray-400 outline-none focus:ring-2 focus:ring-blue-600"
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

     
            <main class="container mx-auto px-5 flex flex-grow">
            </main>
    </body>
</x-app-layout>
