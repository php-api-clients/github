<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ContentTraffic
{
    public const SCHEMA_TITLE = 'Content Traffic';
    public const SPL_HASH = '00000000207014a30000000042193899';
    public const SCHEMA_DESCRIPTION = 'Content Traffic';
    private string $path;
    private string $title;
    private int $count;
    private int $uniques;
    public function path() : string
    {
        return $this->path;
    }
    public function title() : string
    {
        return $this->title;
    }
    public function count() : int
    {
        return $this->count;
    }
    public function uniques() : int
    {
        return $this->uniques;
    }
}
