<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class BasicError
{
    public const SCHEMA_TITLE = 'Basic Error';
    public const SPL_HASH = '000000001d5bd37900000000544e0d87';
    public const SCHEMA_DESCRIPTION = 'Basic Error';
    private ?string $message = null;
    private ?string $documentation_url = null;
    private ?string $url = null;
    private ?string $status = null;
    public function message() : ?string
    {
        return $this->message;
    }
    public function documentation_url() : ?string
    {
        return $this->documentation_url;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function status() : ?string
    {
        return $this->status;
    }
}
