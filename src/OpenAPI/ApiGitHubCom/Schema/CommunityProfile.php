<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CommunityProfile
{
    public const SCHEMA_TITLE = 'Community Profile';
    public const SPL_HASH = '0000000020701ba90000000042193899';
    public const SCHEMA_DESCRIPTION = 'Community Profile';
    private int $health_percentage;
    private string $description;
    private string $documentation;
    private object $files;
    private string $updated_at;
    private bool $content_reports_enabled;
    public function health_percentage() : int
    {
        return $this->health_percentage;
    }
    public function description() : string
    {
        return $this->description;
    }
    public function documentation() : string
    {
        return $this->documentation;
    }
    public function files() : object
    {
        return $this->files;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function content_reports_enabled() : bool
    {
        return $this->content_reports_enabled;
    }
}
