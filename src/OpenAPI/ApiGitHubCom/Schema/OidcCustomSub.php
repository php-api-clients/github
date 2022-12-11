<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class OidcCustomSub
{
    public const SCHEMA_TITLE = 'Actions OIDC Subject customization';
    public const SCHEMA_DESCRIPTION = 'Actions OIDC Subject customization';
    /**
     * Array of unique strings. Each claim key can only contain alphanumeric characters and underscores.
     */
    private array $include_claim_keys = array();
    /**
     * Array of unique strings. Each claim key can only contain alphanumeric characters and underscores.
     */
    public function include_claim_keys() : array
    {
        return $this->include_claim_keys;
    }
}
