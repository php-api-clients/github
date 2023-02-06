<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Blob
{
    public const SCHEMA_JSON = '{"title":"Blob","required":["sha","url","node_id","size","content","encoding"],"type":"object","properties":{"content":{"type":"string"},"encoding":{"type":"string"},"url":{"type":"string","format":"uri"},"sha":{"type":"string"},"size":{"type":["integer","null"]},"node_id":{"type":"string"},"highlighted_content":{"type":"string"}},"description":"Blob"}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Blob';
    public const SCHEMA_DESCRIPTION = 'Blob';
    public readonly string $content;
    public readonly string $encoding;
    public readonly string $url;
    public readonly string $sha;
    public readonly ?int $size;
    public readonly string $node_id;
    public readonly ?string $highlighted_content;
    public function __construct(string $content, string $encoding, string $url, string $sha, int $size, string $node_id, string $highlighted_content)
    {
        $this->content = $content;
        $this->encoding = $encoding;
        $this->url = $url;
        $this->sha = $sha;
        $this->size = $size;
        $this->node_id = $node_id;
        $this->highlighted_content = $highlighted_content;
    }
}
