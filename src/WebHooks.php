<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub;

use ApiClients\Contracts\OpenAPI\WebHooksInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use RuntimeException;

use function strtolower;

final class WebHooks implements WebHooksInterface
{
    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly Internal\Hydrators $hydrator)
    {
    }

    /**
     * @param class-string<H> $className
     *
     * @return H
     *
     * @template H
     */
    public function hydrateWebHook(string $className, array $data): object
    {
        return $this->hydrator->hydrateObject($className, $data);
    }

    /** @return array{className: class-string, data: mixed} */
    public function serializeWebHook(object $object): array
    {
        return ['className' => $object::class, 'data' => $this->hydrator->serializeObject($object)];
    }

    /** @return */
    public function resolve(array $headers, array $data): object
    {
        $headers = (static function ($headers): array {
            $flatHeaders = [];
            foreach ($headers as $key => $value) {
                $flatHeaders[strtolower($key)] = $value;
            }

            return $flatHeaders;
        })($headers);
        $error   = new RuntimeException('No event matching given headers and data');

        throw $error;
    }
}
