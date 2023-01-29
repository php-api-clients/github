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
    public readonly bool $use_default;
    /**
     * Array of unique strings. Each claim key can only contain alphanumeric characters and underscores.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OidcCustomSubRepo\IncludeClaimKeys>
     */
    public readonly array $include_claim_keys;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OidcCustomSubRepo\IncludeClaimKeys> $include_claim_keys
     */
    public function __construct(bool $use_default, array $include_claim_keys)
    {
        $this->use_default = $use_default;
        $this->include_claim_keys = $include_claim_keys;
    }
}
