<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class TagProtection
{
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
