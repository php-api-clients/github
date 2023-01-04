<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class OidcCustomSubRepo
{
    public const SCHEMA_JSON = '{"title":"Actions OIDC subject customization for a repository","required":["use_default"],"type":"object","properties":{"use_default":{"type":"boolean","description":"Whether to use the default template or not. If `true`, the `include_claim_keys` field is ignored."},"include_claim_keys":{"type":"array","items":{"type":"string"},"description":"Array of unique strings. Each claim key can only contain alphanumeric characters and underscores."}},"description":"Actions OIDC subject customization for a repository"}';
    public const SCHEMA_TITLE = 'Actions OIDC subject customization for a repository';
    public const SCHEMA_DESCRIPTION = 'Actions OIDC subject customization for a repository';
    /**
     * Whether to use the default template or not. If `true`, the `include_claim_keys` field is ignored.
     */
    private bool $use_default;
    /**
     * Array of unique strings. Each claim key can only contain alphanumeric characters and underscores.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OidcCustomSubRepo\IncludeClaimKeys>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OidcCustomSubRepo\IncludeClaimKeys::class)
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
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OidcCustomSubRepo\IncludeClaimKeys>
     */
    public function include_claim_keys() : array
    {
        return $this->include_claim_keys;
    }
}
