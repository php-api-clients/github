<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class OidcCustomSubRepo
{
    public const SCHEMA_TITLE = 'Actions OIDC subject customization for a repository';
    public const SCHEMA_DESCRIPTION = 'Actions OIDC subject customization for a repository';
    /**
     * Whether to use the default template or not. If `true`, the `include_claim_keys` field is ignored.
     */
    private bool $use_default;
    /**
     * Array of unique strings. Each claim key can only contain alphanumeric characters and underscores.
     */
    private array $include_claim_keys = array();
    /**
     * Whether to use the default template or not. If `true`, the `include_claim_keys` field is ignored.
     */
    public function use_default() : bool
    {
        return $this->use_default;
    }
    /**
     * Array of unique strings. Each claim key can only contain alphanumeric characters and underscores.
     */
    public function include_claim_keys() : array
    {
        return $this->include_claim_keys;
    }
}
