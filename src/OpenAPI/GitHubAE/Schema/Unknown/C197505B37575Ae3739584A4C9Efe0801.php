<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C197505B37575Ae3739584A4C9Efe0801
{
    public const SCHEMA_JSON = '{"oneOf":[{"title":"Validation Error","required":["message","documentation_url"],"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"required":["code"],"type":"object","properties":{"resource":{"type":"string"},"field":{"type":"string"},"message":{"type":"string"},"code":{"type":"string"},"index":{"type":"integer"},"value":{"oneOf":[{"type":["string","null"]},{"type":["integer","null"]},{"type":["array","null"],"items":{"type":"string"}}]}}}}},"description":"Validation Error"},{"title":"Validation Error Simple","required":["message","documentation_url"],"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"type":"string"}}},"description":"Validation Error Simple"}]}';
    public const SCHEMA_TITLE = 'c_197505b37575ae3739584a4c9efe0801';
    public const SCHEMA_DESCRIPTION = '';
    private string $message;
    private string $documentation_url;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\C197505B37575Ae3739584A4C9Efe0801\Errors>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\C197505B37575Ae3739584A4C9Efe0801\Errors::class)
     */
    private array $errors = array();
    public function message() : string
    {
        return $this->message;
    }
    public function documentation_url() : string
    {
        return $this->documentation_url;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\C197505B37575Ae3739584A4C9Efe0801\Errors>
     */
    public function errors() : array
    {
        return $this->errors;
    }
}
