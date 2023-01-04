<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Thread;

final class Subject
{
    public const SCHEMA_JSON = '{"required":["title","url","latest_comment_url","type"],"type":"object","properties":{"title":{"type":"string"},"url":{"type":"string"},"latest_comment_url":{"type":"string"},"type":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Thread\\Subject';
    public const SCHEMA_DESCRIPTION = '';
    private string $title;
    private string $url;
    private string $latest_comment_url;
    private string $type;
    public function title() : string
    {
        return $this->title;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function latest_comment_url() : string
    {
        return $this->latest_comment_url;
    }
    public function type() : string
    {
        return $this->type;
    }
}
