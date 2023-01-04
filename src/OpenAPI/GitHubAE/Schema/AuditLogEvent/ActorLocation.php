<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\AuditLogEvent;

final class ActorLocation
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"country_name":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'AuditLogEvent\\ActorLocation';
    public const SCHEMA_DESCRIPTION = '';
    private string $country_name;
    public function country_name() : string
    {
        return $this->country_name;
    }
}
