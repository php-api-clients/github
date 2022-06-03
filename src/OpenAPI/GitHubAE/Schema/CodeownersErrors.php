<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class CodeownersErrors
{
    public const SCHEMA_TITLE = 'CODEOWNERS errors';
    public const SCHEMA_DESCRIPTION = 'A list of errors found in a repo\'s CODEOWNERS file';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeownersErrors\Errors>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeownersErrors\Errors::class)
     */
    private array $errors = array();
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeownersErrors\Errors>
     */
    public function errors() : array
    {
        return $this->errors;
    }
}
