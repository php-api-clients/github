<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class DependabotSecret
{
    public const SCHEMA_JSON = '{"title":"Dependabot Secret","required":["name","created_at","updated_at"],"type":"object","properties":{"name":{"type":"string","description":"The name of the secret.","examples":["MY_ARTIFACTORY_PASSWORD"]},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"}},"description":"Set secrets for Dependabot."}';
    public const SCHEMA_TITLE = 'Dependabot Secret';
    public const SCHEMA_DESCRIPTION = 'Set secrets for Dependabot.';
    /**
     * The name of the secret.
     */
    public ?string $name;
    public ?string $created_at;
    public ?string $updated_at;
    public function __construct(string $name, string $created_at, string $updated_at)
    {
        $this->name = $name;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }
}
