<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class BasicError
{
    public const SCHEMA_TITLE = 'Basic Error';
    public const SPL_HASH = '00000000159351df000000001856c88e';
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
