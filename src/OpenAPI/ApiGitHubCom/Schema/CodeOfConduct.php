<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeOfConduct
{
    public const SCHEMA_TITLE = 'Code Of Conduct';
    public const SCHEMA_DESCRIPTION = 'Code Of Conduct';
    private string $key;
    private string $name;
    private string $url;
    private ?string $body = null;
    private $html_url;
    public function key() : string
    {
        return $this->key;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function body() : ?string
    {
        return $this->body;
    }
    public function html_url()
    {
        return $this->html_url;
    }
}
