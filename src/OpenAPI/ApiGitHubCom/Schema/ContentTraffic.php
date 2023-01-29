<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ContentTraffic
{
    public const SCHEMA_JSON = '{"title":"Content Traffic","required":["path","title","uniques","count"],"type":"object","properties":{"path":{"type":"string","examples":["\\/github\\/hubot"]},"title":{"type":"string","examples":["github\\/hubot: A customizable life embetterment robot."]},"count":{"type":"integer","examples":[3542]},"uniques":{"type":"integer","examples":[2225]}},"description":"Content Traffic"}';
    public const SCHEMA_TITLE = 'Content Traffic';
    public const SCHEMA_DESCRIPTION = 'Content Traffic';
    public readonly string $path;
    public readonly string $title;
    public readonly int $count;
    public readonly int $uniques;
    public function __construct(string $path, string $title, int $count, int $uniques)
    {
        $this->path = $path;
        $this->title = $title;
        $this->count = $count;
        $this->uniques = $uniques;
    }
}
