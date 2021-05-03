<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ActionsSecret
{
    public const SCHEMA_TITLE = 'Actions Secret';
    public const SPL_HASH = '0000000054d5e4eb0000000071115dec';
    public const SCHEMA_DESCRIPTION = 'Set secrets for GitHub Actions.';
    /**
     * The name of the secret.
     */
    private string $name;
    private string $created_at;
    private string $updated_at;
    public function name() : string
    {
        return $this->name;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
}
