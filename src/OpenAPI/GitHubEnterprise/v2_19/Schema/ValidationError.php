<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class ValidationError
{
    public const SCHEMA_TITLE = 'Validation Error';
    public const SPL_HASH = '000000005bc98315000000002dbcf303';
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
