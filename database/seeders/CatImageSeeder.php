<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use GuzzleHttp\Client;
use App\Models\CatImage;

class CatImageSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $client = new Client(); // GuzzleHttp\Client

        try {
            // Hacer una petición a la API
            $response = $client->get('https://cataas.com/api/cats?&skip=0&limit=100000');
            $data = json_decode($response->getBody(), true);

            // Insertar en la base de datos
            foreach ($data as $cat) {
                CatImage::create([
                    '_id' => $cat['id'],
                    'mimetype' => 'image/jpeg', // Puedes obtenerlo de la API si está disponible
                    'size' => 0, // No disponible en la API, así que usa un valor por defecto
                    'tags' => json_encode($cat['tags'] ?? []),
                ]);
            }

            $this->command->info('¡Se han insertado imágenes de gatos correctamente!');
        } catch (\Exception $e) {
            $this->command->error('Error al obtener datos de la API: ' . $e->getMessage());
        }
    }
}

