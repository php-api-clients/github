<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GpgKey;

final class Emails
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"email":{"type":"string"},"verified":{"type":"boolean"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'GpgKey\\Emails';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $email;
    public readonly bool $verified;
    public function __construct(string $email, bool $verified)
    {
        $this->email = $email;
        $this->verified = $verified;
    }
}
