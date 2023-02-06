<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Projects\Response\Application\Json;

final class H422
{
    public const SCHEMA_JSON = '{"oneOf":[{"title":"Validation Error","required":["message","documentation_url"],"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"required":["code"],"type":"object","properties":{"resource":{"type":"string"},"field":{"type":"string"},"message":{"type":"string"},"code":{"type":"string"},"index":{"type":"integer"},"value":{"oneOf":[{"type":["string","null"]},{"type":["integer","null"]},{"type":["array","null"],"items":{"type":"string"}}]}}}}},"description":"Validation Error"},{"title":"Validation Error Simple","required":["message","documentation_url"],"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"type":"string"}}},"description":"Validation Error Simple"}]}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Operation\\Projects\\Response\\Application\\Json\\H422';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $message;
    public readonly string $documentation_url;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\H422\Errors>
     */
    public readonly array $errors;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\H422\Errors> $errors
     */
    public function __construct(string $message, string $documentation_url, array $errors)
    {
        $this->message = $message;
        $this->documentation_url = $documentation_url;
        $this->errors = $errors;
    }
}
