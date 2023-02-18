<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class ContentTraffic
{
    public const SCHEMA_JSON        = '{"title":"Content Traffic","required":["path","title","uniques","count"],"type":"object","properties":{"path":{"type":"string","examples":["\\/github\\/hubot"]},"title":{"type":"string","examples":["github\\/hubot: A customizable life embetterment robot."]},"count":{"type":"integer","examples":[3542]},"uniques":{"type":"integer","examples":[2225]}},"description":"Content Traffic"}';
    public const SCHEMA_TITLE       = 'Content Traffic';
    public const SCHEMA_DESCRIPTION = 'Content Traffic';
    public ?string $path;
    public ?string $title;
    public ?int $count;
    public ?int $uniques;

    public function __construct(string $path, string $title, int $count, int $uniques)
    {
        $this->path    = $path;
        $this->title   = $title;
        $this->count   = $count;
        $this->uniques = $uniques;
    }
}
