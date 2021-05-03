<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class Email
{
    public const SCHEMA_TITLE = 'Email';
    public const SPL_HASH = '000000002eab1e1300000000697c5254';
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
