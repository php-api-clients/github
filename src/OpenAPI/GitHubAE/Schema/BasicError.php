<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class BasicError
{
    public const SCHEMA_TITLE = 'Basic Error';
    public const SPL_HASH = '000000000c1c982c0000000065732ccc';
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
