<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class ActionsSecret
{
    public const SCHEMA_TITLE = 'Actions Secret';
    public const SPL_HASH = '0000000031ee5ea300000000484d7fbe';
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
