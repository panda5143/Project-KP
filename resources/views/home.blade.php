<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIASTRA - Data Inventaris Aset</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <x-navbar />
    <x-hero />
    
    <div class="container mx-auto px-6 py-12">
        <div class="grid md:grid-cols-2 gap-8">
            <x-info-card 
                title="INFORMASI INVETARIS DATA SEKOLAH"
                description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sectat erat id dolor commodo viverra."
                image="/path-to-school-data-image.jpg"
            />
            <x-info-card 
                title="LAPORAN INVENTARIS BARANG"
                description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sectat erat id dolor commodo viverra."
                image="/path-to-inventory-image.jpg"
            />
        </div>
    </div>
    
    <x-footer />
</body>
</html>