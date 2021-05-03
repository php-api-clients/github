<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class Email
{
    public const SCHEMA_TITLE = 'Email';
    public const SPL_HASH = '0000000065dd741b000000006352672d';
    public const SCHEMA_DESCRIPTION = 'Email';
    private string $email;
    private boolean $primary;
    private boolean $verified;
    private string $visibility;
    public function email() : string
    {
        return $this->email;
    }
    public function primary() : boolean
    {
        return $this->primary;
    }
    public function verified() : boolean
    {
        return $this->verified;
    }
    public function visibility() : string
    {
        return $this->visibility;
    }
}
