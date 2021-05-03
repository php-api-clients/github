<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class CodeOfConduct
{
    public const SCHEMA_TITLE = 'Code Of Conduct';
    public const SPL_HASH = '000000001f7787f6000000002b0b9da2';
    public const SCHEMA_DESCRIPTION = 'Code Of Conduct';
    private ?string $key = null;
    private ?string $name = null;
    private ?string $url = null;
    private ?string $body = null;
    private ?string $html_url = null;
    public function key() : ?string
    {
        return $this->key;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function body() : ?string
    {
        return $this->body;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
}
