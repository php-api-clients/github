<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Blob
{
    public const SCHEMA_JSON = '{"title":"Blob","required":["sha","url","node_id","size","content","encoding"],"type":"object","properties":{"content":{"type":"string"},"encoding":{"type":"string"},"url":{"type":"string","format":"uri"},"sha":{"type":"string"},"size":{"type":["integer","null"]},"node_id":{"type":"string"},"highlighted_content":{"type":"string"}},"description":"Blob"}';
    public const SCHEMA_TITLE = 'Blob';
    public const SCHEMA_DESCRIPTION = 'Blob';
    private string $content;
    private string $encoding;
    private string $url;
    private string $sha;
    private ?int $size;
    private string $node_id;
    private ?string $highlighted_content = null;
    public function content() : string
    {
        return $this->content;
    }
    public function encoding() : string
    {
        return $this->encoding;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function sha() : string
    {
        return $this->sha;
    }
    public function size() : ?int
    {
        return $this->size;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function highlighted_content() : ?string
    {
        return $this->highlighted_content;
    }
}
