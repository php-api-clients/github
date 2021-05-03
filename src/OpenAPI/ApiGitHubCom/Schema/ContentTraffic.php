<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ContentTraffic
{
    public const SCHEMA_TITLE = 'Content Traffic';
    public const SPL_HASH = '000000000cd5352b0000000040effa88';
    public const SCHEMA_DESCRIPTION = 'Content Traffic';
    private ?string $path = null;
    private ?string $title = null;
    private ?int $count = null;
    private ?int $uniques = null;
    public function path() : ?string
    {
        return $this->path;
    }
    public function title() : ?string
    {
        return $this->title;
    }
    public function count() : ?int
    {
        return $this->count;
    }
    public function uniques() : ?int
    {
        return $this->uniques;
    }
}
