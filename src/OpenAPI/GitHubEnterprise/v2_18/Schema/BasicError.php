<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class BasicError
{
    public const SCHEMA_TITLE = 'Basic Error';
    public const SPL_HASH = '000000002eab69e000000000697c5254';
    public const SCHEMA_DESCRIPTION = 'Basic Error';
    private string $message;
    private string $documentation_url;
    private string $url;
    private string $status;
    public function message() : string
    {
        return $this->message;
    }
    public function documentation_url() : string
    {
        return $this->documentation_url;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function status() : string
    {
        return $this->status;
    }
}
