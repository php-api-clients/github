<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class ValidationErrorSimple
{
    public const SCHEMA_TITLE = 'Validation Error Simple';
    public const SPL_HASH = '000000005d4c9095000000005494ca51';
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
