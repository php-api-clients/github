<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GpgKey;

final class Emails
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"email":{"type":"string"},"verified":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'GpgKey\\Emails';
    public const SCHEMA_DESCRIPTION = '';
    private string $email;
    private bool $verified;
    public function email() : string
    {
        return $this->email;
    }
    public function verified() : bool
    {
        return $this->verified;
    }
}
