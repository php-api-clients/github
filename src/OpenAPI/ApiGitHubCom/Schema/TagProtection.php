<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class TagProtection
{
    public const SCHEMA_JSON = '{"title":"Tag protection","required":["pattern"],"type":"object","properties":{"id":{"type":"integer","examples":[2]},"created_at":{"type":"string","examples":["2011-01-26T19:01:12Z"]},"updated_at":{"type":"string","examples":["2011-01-26T19:01:12Z"]},"enabled":{"type":"boolean","examples":[true]},"pattern":{"type":"string","examples":["v1.*"]}},"description":"Tag protection"}';
    public const SCHEMA_TITLE = 'Tag protection';
    public const SCHEMA_DESCRIPTION = 'Tag protection';
    private ?int $id = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    private ?bool $enabled = null;
    private string $pattern;
    public function id() : ?int
    {
        return $this->id;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function enabled() : ?bool
    {
        return $this->enabled;
    }
    public function pattern() : string
    {
        return $this->pattern;
    }
}
