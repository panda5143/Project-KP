<x-app-layout>
    <!-- Hero Section -->
    <div class="relative h-[500px] overflow-hidden">
        <!-- Background Image -->
        <img 
            src="{{ asset('images/office-building.jpg') }}" 
            alt="DISDIKBUDPORA Office" 
            class="absolute w-full h-full object-cover"
        >
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black/50"></div>
        
        <!-- Hero Content -->
        <div class="relative container mx-auto px-4 h-full flex flex-col justify-center items-center text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">
                Data Inventaris Aset
            </h1>
            <h2 class="text-2xl md:text-4xl font-bold text-white">
                DISDIKBUDPORA
            </h2>
        </div>
    </div>

    <!-- Info Cards Section -->
    <div class="container mx-auto px-4 py-16">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- School Data Card -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden group hover:shadow-xl transition-shadow duration-300">
                <div class="relative h-48 overflow-hidden">
                    <img 
                        src="{{ asset('images/school-data.jpg') }}" 
                        alt="School Data Information" 
                        class="w-full h-full object-cover"
                    >
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-4">INFORMASI INVETARIS DATA SEKOLAH</h3>
                    <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam iaculis erat id dolor convallis viverra.</p>
                    <div class="bg-[#FFB930] h-12 flex items-center justify-end px-4 -mx-6 -mb-6 cursor-pointer group-hover:bg-[#FFE7C4] transition-colors duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Inventory Report Card -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden group hover:shadow-xl transition-shadow duration-300">
                <div class="relative h-48 overflow-hidden">
                    <img 
                        src="{{ asset('images/inventory-report.jpg') }}" 
                        alt="Inventory Report" 
                        class="w-full h-full object-cover"
                    >
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-4">LAPORAN INVENTARIS BARANG</h3>
                    <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam iaculis erat id dolor convallis viverra.</p>
                    <div class="bg-[#FFB930] h-12 flex items-center justify-end px-4 -mx-6 -mb-6 cursor-pointer group-hover:bg-[#FFE7C4] transition-colors duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>