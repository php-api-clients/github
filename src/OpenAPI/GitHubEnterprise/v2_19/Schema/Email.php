<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class Email
{
    public const SCHEMA_TITLE = 'Email';
    public const SPL_HASH = '00000000631285da0000000044ad25fc';
    public const SCHEMA_DESCRIPTION = 'Email';
    private string $email;
    private bool $primary;
    private bool $verified;
    private string $visibility;
    public function email() : string
    {
        return $this->email;
    }
    public function primary() : bool
    {
        return $this->primary;
    }
    public function verified() : bool
    {
        return $this->verified;
    }
    public function visibility() : string
    {
        return $this->visibility;
    }
}
