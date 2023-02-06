<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class TagProtection
{
    public const SCHEMA_JSON = '{"title":"Tag protection","required":["pattern"],"type":"object","properties":{"id":{"type":"integer","examples":[2]},"created_at":{"type":"string","examples":["2011-01-26T19:01:12Z"]},"updated_at":{"type":"string","examples":["2011-01-26T19:01:12Z"]},"enabled":{"type":"boolean","examples":[true]},"pattern":{"type":"string","examples":["v1.*"]}},"description":"Tag protection"}';
    public const SCHEMA_EXAMPLE = '{"id":2,"created_at":"2011-01-26T19:01:12Z","updated_at":"2011-01-26T19:01:12Z","enabled":true,"pattern":"v1.*"}';
    public const SCHEMA_TITLE = 'Tag protection';
    public const SCHEMA_DESCRIPTION = 'Tag protection';
    public readonly ?int $id;
    public readonly ?string $created_at;
    public readonly ?string $updated_at;
    public readonly ?bool $enabled;
    public readonly string $pattern;
    public function __construct(int $id, string $created_at, string $updated_at, bool $enabled, string $pattern)
    {
        $this->id = $id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->enabled = $enabled;
        $this->pattern = $pattern;
    }
}
