<?php

namespace ApiClients\Client\Github\OpenAPI\Schema;

final class CommunityProfile
{
    public const SCHEMA_TITLE = 'Community Profile';
    public const SCHEMA_DESCRIPTION = 'Community Profile';
    private int $health_percentage;
    private string $description;
    private string $documentation;
    private object $files;
    private string $updated_at;
    private boolean $content_reports_enabled;
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
    public function content_reports_enabled() : boolean
    {
        return $this->content_reports_enabled;
    }
}
