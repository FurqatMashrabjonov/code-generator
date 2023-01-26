<?php

namespace Furqat\CodeGenerator\Api;
use OpenAI;
class Client
{
    public function completions($prompt)
    {
        $client = OpenAI::client(config('code-generator.token'));

        $result = $client->completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => <<<EOF
create laravel model;
table name: products.
fields: id, name, image, category_id, price.
relations: categories.
scope: latest
EOF,
            'max_tokens' => 2000
            ]);

        return $result['choices'][0]['text'];
    }

}
