<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class Blob
{
    public const SCHEMA_TITLE = 'Blob';
    public const SPL_HASH = '0000000066e6c9de0000000066ded04e';
    public const SCHEMA_DESCRIPTION = 'Blob';
    private ?string $content = null;
    private ?string $encoding = null;
    private ?string $url = null;
    private ?string $sha = null;
    private ?int $size = null;
    private ?string $node_id = null;
    private ?string $highlighted_content = null;
    public function content() : ?string
    {
        return $this->content;
    }
    public function encoding() : ?string
    {
        return $this->encoding;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function sha() : ?string
    {
        return $this->sha;
    }
    public function size() : ?int
    {
        return $this->size;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function highlighted_content() : ?string
    {
        return $this->highlighted_content;
    }
}
