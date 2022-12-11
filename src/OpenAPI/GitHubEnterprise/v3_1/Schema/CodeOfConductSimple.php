<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class CodeOfConductSimple
{
    public const SCHEMA_TITLE = 'Code Of Conduct Simple';
    public const SCHEMA_DESCRIPTION = 'Code of Conduct Simple';
    private string $url;
    private string $key;
    private string $name;
    private $html_url;
    public function url() : string
    {
        return $this->url;
    }
    public function key() : string
    {
        return $this->key;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function html_url()
    {
        return $this->html_url;
    }
}
