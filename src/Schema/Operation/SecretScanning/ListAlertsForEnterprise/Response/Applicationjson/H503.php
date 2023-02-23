<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson;

final readonly class H503
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"},"documentation_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $code;
    public ?string $message;
    public ?string $documentation_url;
    public function __construct(string $code, string $message, string $documentation_url)
    {
        $this->code = $code;
        $this->message = $message;
        $this->documentation_url = $documentation_url;
    }
}
