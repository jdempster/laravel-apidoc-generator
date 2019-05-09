```php
$client = new \GuzzleHttp\Client();
@php
    $options = array_filter([
        'headers' => $route['headers'] ?? null,
        'query'   => $route['cleanQueryParameters'] ?? null,
        'json'    => $route['cleanBodyParameters'] ?? null,
    ]);
@endphp
$response = $client->{{ strtolower($route['methods'][0]) }}("{{ $route['boundUri'] }}", {!! Symfony\Component\VarExporter\VarExporter::export($options) !!});
$body = $response->getBody();
print_r(json_decode((string) $body));
```
