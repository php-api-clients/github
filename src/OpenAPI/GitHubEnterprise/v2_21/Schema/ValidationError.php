<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class ValidationError
{
    public const SCHEMA_TITLE = 'Validation Error';
    public const SPL_HASH = '0000000045a0e85b0000000057b08344';
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
