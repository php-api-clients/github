<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ContentTraffic
{
    public const SCHEMA_JSON = '{"title":"Content Traffic","required":["path","title","uniques","count"],"type":"object","properties":{"path":{"type":"string","examples":["\\/github\\/hubot"]},"title":{"type":"string","examples":["github\\/hubot: A customizable life embetterment robot."]},"count":{"type":"integer","examples":[3542]},"uniques":{"type":"integer","examples":[2225]}},"description":"Content Traffic"}';
    public const SCHEMA_TITLE = 'Content Traffic';
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
