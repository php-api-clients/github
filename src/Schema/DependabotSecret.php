<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class DependabotSecret
{
    public const SCHEMA_JSON = '{"title":"Dependabot Secret","required":["name","created_at","updated_at"],"type":"object","properties":{"name":{"type":"string","description":"The name of the secret.","examples":["MY_ARTIFACTORY_PASSWORD"]},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"}},"description":"Set secrets for Dependabot."}';
    public const SCHEMA_TITLE = 'Dependabot Secret';
    public const SCHEMA_DESCRIPTION = 'Set secrets for Dependabot.';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"MY_ARTIFACTORY_PASSWORD","created_at":"1970-01-01T00:00:00+00:00","updated_at":"1970-01-01T00:00:00+00:00"}';
    /**
     * name: The name of the secret.
     */
    public function __construct(public string $name, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public string $updatedAt)
    {
    }
}
