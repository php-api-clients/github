<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class BasicError
{
    public const SCHEMA_JSON        = '{"title":"Basic Error","type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"url":{"type":"string"},"status":{"type":"string"}},"description":"Basic Error"}';
    public const SCHEMA_TITLE       = 'Basic Error';
    public const SCHEMA_DESCRIPTION = 'Basic Error';
    public ?string $message;
    public ?string $documentation_url;
    public ?string $url;
    public ?string $status;

    public function __construct(string $message, string $documentation_url, string $url, string $status)
    {
        $this->message           = $message;
        $this->documentation_url = $documentation_url;
        $this->url               = $url;
        $this->status            = $status;
    }
}
