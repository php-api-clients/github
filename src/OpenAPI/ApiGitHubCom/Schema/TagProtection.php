<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class TagProtection
{
    public const SCHEMA_JSON = '{"title":"Tag protection","required":["pattern"],"type":"object","properties":{"id":{"type":"integer","examples":[2]},"created_at":{"type":"string","examples":["2011-01-26T19:01:12Z"]},"updated_at":{"type":"string","examples":["2011-01-26T19:01:12Z"]},"enabled":{"type":"boolean","examples":[true]},"pattern":{"type":"string","examples":["v1.*"]}},"description":"Tag protection"}';
    public const SCHEMA_TITLE = 'Tag protection';
    public const SCHEMA_DESCRIPTION = 'Tag protection';
    public int $id;
    public string $created_at;
    public string $updated_at;
    public bool $enabled;
    public ?string $pattern;
    public function __construct(int $id, string $created_at, string $updated_at, bool $enabled, string $pattern)
    {
        $this->id = $id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->enabled = $enabled;
        $this->pattern = $pattern;
    }
}
