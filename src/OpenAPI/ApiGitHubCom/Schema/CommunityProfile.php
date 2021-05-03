<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CommunityProfile
{
    public const SCHEMA_TITLE = 'Community Profile';
    public const SCHEMA_DESCRIPTION = 'Community Profile';
    private ?int $health_percentage = null;
    private ?string $description = null;
    private ?string $documentation = null;
    private ?object $files = null;
    private ?string $updated_at = null;
    private ?bool $content_reports_enabled = null;
    public function health_percentage() : ?int
    {
        return $this->health_percentage;
    }
    public function description() : ?string
    {
        return $this->description;
    }
    public function documentation() : ?string
    {
        return $this->documentation;
    }
    public function files() : ?object
    {
        return $this->files;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function content_reports_enabled() : ?bool
    {
        return $this->content_reports_enabled;
    }
}
