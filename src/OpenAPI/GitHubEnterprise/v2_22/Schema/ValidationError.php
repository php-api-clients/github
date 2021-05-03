<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class ValidationError
{
    public const SCHEMA_TITLE = 'Validation Error';
    public const SPL_HASH = '00000000269f2b4e00000000005e85e5';
    public const SCHEMA_DESCRIPTION = 'Validation Error';
    private ?string $message = null;
    private ?string $documentation_url = null;
    private array $errors = array();
    public function message() : ?string
    {
        return $this->message;
    }
    public function documentation_url() : ?string
    {
        return $this->documentation_url;
    }
    public function errors() : array
    {
        return $this->errors;
    }
}
