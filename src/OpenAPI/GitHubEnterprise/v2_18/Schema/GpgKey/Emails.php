<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\GpgKey;

final class Emails
{
    public const SCHEMA_TITLE = 'gpg-key::emails';
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
