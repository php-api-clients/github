<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class ValidationErrorSimple
{
    public const SCHEMA_TITLE = 'Validation Error Simple';
    public const SPL_HASH = '0000000018145b11000000005f691719';
    public const SCHEMA_DESCRIPTION = 'Validation Error Simple';
    private string $message;
    private string $documentation_url;
    private array $errors;
    public function message() : string
    {
        return $this->message;
    }
    public function documentation_url() : string
    {
        return $this->documentation_url;
    }
    public function errors() : array
    {
        return $this->errors;
    }
}
