<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Thread;

final readonly class Subject
{
    public const SCHEMA_JSON = '{"required":["title","url","latest_comment_url","type"],"type":"object","properties":{"title":{"type":"string"},"url":{"type":"string"},"latest_comment_url":{"type":"string"},"type":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $title;
    public ?string $url;
    public ?string $latest_comment_url;
    public ?string $type;
    public function __construct(string $title, string $url, string $latest_comment_url, string $type)
    {
        $this->title = $title;
        $this->url = $url;
        $this->latest_comment_url = $latest_comment_url;
        $this->type = $type;
    }
}
