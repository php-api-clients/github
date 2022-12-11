<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CommunityProfile
{
    public const SCHEMA_TITLE = 'Community Profile';
    public const SCHEMA_DESCRIPTION = 'Community Profile';
    private int $health_percentage;
    private $description;
    private $documentation;
    private array $files = array();
    private $updated_at;
    private ?bool $content_reports_enabled = null;
    public function health_percentage() : int
    {
        return $this->health_percentage;
    }
    public function description()
    {
        return $this->description;
    }
    public function documentation()
    {
        return $this->documentation;
    }
    public function files() : array
    {
        return $this->files;
    }
    public function updated_at()
    {
        return $this->updated_at;
    }
    public function content_reports_enabled() : ?bool
    {
        return $this->content_reports_enabled;
    }
}
