<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
</head>

<body style="background: rgb(11,29,38);
             background: linear-gradient(91deg, rgba(11,29,38,1) 0%, rgba(11,29,38,1) 21%, rgba(11,29,38,1) 39%, rgba(11, 29, 38, 0.842) 58%, rgba(139, 100, 62, 0.658) 100%),
             url('{{ asset('Img/museu-nacional-de-historia-da-romenia.jpg') }}');
             background-size: cover; background-repeat: no-repeat; background-position: center; height: 30vh; overflow-y: hidden;">

    {{-- Estrutura básica blade e bootstrap --}}
    <div class="container-fluid d-flex">
        @yield('conteudo')
                         <!-- MAPA -->
      <div id="map" style="width: 550px; height: 430px; margin-top: 30vh; border-radius:3%;"></div>

<script>
    const map = L.map('map').setView([-14.235004, -51.92528], 4);
    let marker = null;
    let markerAdded = false;

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    map.on('click', async function (e) {
        const clickedLatLng = e.latlng;
        console.log('Latitude:', clickedLatLng.lat, 'Longitude:', clickedLatLng.lng);

        if (markerAdded) {
            map.removeLayer(marker);
        }

        marker = L.marker(clickedLatLng).addTo(map);
        markerAdded = true;

        document.getElementById('latitude').value = clickedLatLng.lat;
        document.getElementById('longitude').value = clickedLatLng.lng;


        try {
            const response = await fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${clickedLatLng.lat}&lon=${clickedLatLng.lng}`);
            const data = await response.json();

            // Verifica se o nome do país contém "Brasil"
            if (data.address && data.address.country.includes('Brasil')) {
                console.log('Localização:', data.display_name);
                const city = data.address.city || data.address.town || data.address.village || '';
                 // Mapeamento de nomes completos dos estados para siglas
          const stateMappings = {
            "Acre": "AC",
            "Alagoas": "AL",
            "Amapá": "AP",
            "Amazonas": "AM",
            "Bahia": "BA",
            "Ceará": "CE",
            "Distrito Federal": "DF",
            "Espírito Santo": "ES",
            "Goiás": "GO",
            "Maranhão": "MA",
            "Mato Grosso": "MT",
            "Mato Grosso do Sul": "MS",
            "Minas Gerais": "MG",
            "Pará": "PA",
            "Paraíba": "PB",
            "Paraná": "PR",
            "Pernambuco": "PE",
            "Piauí": "PI",
            "Rio de Janeiro": "RJ",
            "Rio Grande do Norte": "RN",
            "Rio Grande do Sul": "RS",
            "Rondônia": "RO",
            "Roraima": "RR",
            "Santa Catarina": "SC",
            "São Paulo": "SP",
            "Sergipe": "SE",
            "Tocantins": "TO"
        };

        const regionMappings = {
                    "Acre": 1,                 // Norte
                    "Alagoas": 2,              // Nordeste
                    "Amapá": 1,                // Norte
                    "Amazonas": 1,             // Norte
                    "Bahia": 2,                // Nordeste
                    "Ceará": 2,                // Nordeste
                    "Distrito Federal": 3,     // Centro-Oeste
                    "Espírito Santo": 4,       // Sudeste
                    "Goiás": 3,                // Centro-Oeste
                    "Maranhão": 2,             // Nordeste
                    "Mato Grosso": 3,          // Centro-Oeste
                    "Mato Grosso do Sul": 3,   // Centro-Oeste
                    "Minas Gerais": 4,         // Sudeste
                    "Pará": 1,                 // Norte
                    "Paraíba": 2,              // Nordeste
                    "Paraná": 5,               // Sul
                    "Pernambuco": 2,           // Nordeste
                    "Piauí": 2,                // Nordeste
                    "Rio de Janeiro": 4,       // Sudeste
                    "Rio Grande do Norte": 2,  // Nordeste
                    "Rio Grande do Sul": 5,    // Sul
                    "Rondônia": 1,             // Norte
                    "Roraima": 1,              // Norte
                    "Santa Catarina": 5,       // Sul
                    "São Paulo": 4,            // Sudeste
                    "Sergipe": 2,              // Nordeste
                    "Tocantins": 1            // Norte
                };
                const stateFullName = data.address.state || '';
                const state = stateMappings[stateFullName] || stateFullName;
                const regionId = regionMappings[stateFullName] || null;

                const street = data.address.road || '';
                const neighborhood = data.address.neighbourhood || data.address.suburb || data.address.suburb_district || data.address.hamlet || data.address.village || data.address.locality || data.address.quarter || '';
                const postalCode = data.address.postcode || '';
                const region = data.address.region || '';
                       
                

                

                console.log('Cidade:', city);
                console.log('Estado:', state);
                console.log('Rua:', street);
                console.log('Bairro:', neighborhood);
                console.log('CEP:', postalCode);
                console.log('Região:', region);
                console.log('Região ID:', regionId);

                //atribui aos inputs
                document.getElementById('inputCidade').value = city;
                document.getElementById('inputEstado').value = state;
                document.getElementById('inputRua').value = street;
                document.getElementById('inputBairro').value = neighborhood;
                document.getElementById('inputCep').value = postalCode;
                document.getElementById('regiao').value = regionId;
                
                

            } else {
                console.log('Selecione apenas locais brasileiros.');
                alert('Selecione apenas locais brasileiros.');
            }
        } catch (error) {
            console.error('Erro ao obter informações de localização:', error);
        }
    });



</script>


</div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>

</html>
