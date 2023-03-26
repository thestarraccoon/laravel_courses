<?php

namespace App\Console\Commands;

use App\Components\ImportDataClient;
use App\Models\Post;
use Illuminate\Console\Command;

class ImportJsonPlaceholderCommand extends Command
{

    protected $signature = 'import:jsonplaceholder';

    protected $description = 'Get data from jsonplaceholder';

    public function handle(): void
    {
        $import = new ImportDataClient();

        $response = $import->client->request('GET', 'posts');

        $data = json_decode($response->getBody()->getContents());

        foreach ($data as $item) {
            Post::firstOrCreate([
                'title' => $item->title,
                'content'  => $item->body,
                'category_id' => 2,
            ]);
        }
    }
}
