<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class AdvancedSecurityActiveCommittersUser
{
    public const SCHEMA_TITLE = 'advanced-security-active-committers-user';
    public const SCHEMA_DESCRIPTION = '';
    private string $user_login;
    private string $last_pushed_date;
    public function user_login() : string
    {
        return $this->user_login;
    }
    public function last_pushed_date() : string
    {
        return $this->last_pushed_date;
    }
}
