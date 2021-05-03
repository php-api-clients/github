<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ActionsSecret
{
    public const SCHEMA_TITLE = 'Actions Secret';
    public const SPL_HASH = '00000000252f43950000000029de5079';
    public const SCHEMA_DESCRIPTION = 'Set secrets for GitHub Actions.';
    /**
     * The name of the secret.
     */
    private ?string $name = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    public function name() : ?string
    {
        return $this->name;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
}
