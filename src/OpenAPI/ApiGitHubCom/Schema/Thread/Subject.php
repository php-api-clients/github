<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Thread;

final class Subject
{
    public const SCHEMA_JSON = '{"required":["title","url","latest_comment_url","type"],"type":"object","properties":{"title":{"type":"string"},"url":{"type":"string"},"latest_comment_url":{"type":"string"},"type":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Thread\\Subject';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $title;
    public readonly string $url;
    public readonly string $latest_comment_url;
    public readonly string $type;
    public function __construct(string $title, string $url, string $latest_comment_url, string $type)
    {
        $this->title = $title;
        $this->url = $url;
        $this->latest_comment_url = $latest_comment_url;
        $this->type = $type;
    }
}
