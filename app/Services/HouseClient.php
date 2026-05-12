<?php

namespace App\Services;

use App\Enums\House\HouseErrorEnum;
use App\Exceptions\HouseException;
use Illuminate\Support\Facades\Http;
use Exception;
use Illuminate\Support\Facades\Log;

class HouseClient
{
    private $typesLogs = ['info', 'error'];

    private $channels = [
        'info' => 'daily_houses_info',
        'error' => 'daily_houses_error'
    ];
    /**
     * Create a new class instance.
     */
    public function __construct() {}

    public function get(string $path, string $query): array
    {
        $url = config('house.url') . '/' . $path;
        try {
            $response = Http::acceptJson()->get($url, $query);
            $this->trace('info', $response->transferStats->getEffectiveUri());
            if ($response->failed()) {
                $this->trace('error', HouseErrorEnum::RESPONSE->value, $response->body());
                throw new HouseException(HouseErrorEnum::RESPONSE->value);
            }
            return $response->json();
        } catch (Exception $e) {
            $this->trace('error', HouseErrorEnum::SERVICE->value, $e->getMessage());
            throw new HouseException(HouseErrorEnum::SERVICE->value);
        }
    }

    public function trace(string $type, string $message, ?string $debug = null): void
    {
        if (in_array($type, $this->typesLogs) && !empty($this->channels[$type])) {
            Log::channel($this->channels[$type])
                ->$type(print_r([
                    'date' => date('d M Y H:i:s'),
                    'message' => $message,
                    'debug' => $debug
                ], true));
        }
    }
}
