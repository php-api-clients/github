<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\GetSarif\Response\Application\Json;

final class H503
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"},"documentation_url":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Operation\\GetSarif\\Response\\Application\\Json\\H503';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $code;
    public readonly string $message;
    public readonly string $documentation_url;
    public function __construct(string $code, string $message, string $documentation_url)
    {
        $this->code = $code;
        $this->message = $message;
        $this->documentation_url = $documentation_url;
    }
}
