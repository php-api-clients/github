<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class ValidationErrorSimple
{
    public const SCHEMA_TITLE = 'Validation Error Simple';
    public const SPL_HASH = '000000005bc980ee000000002dbcf303';
    public const SCHEMA_DESCRIPTION = 'Validation Error Simple';
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
