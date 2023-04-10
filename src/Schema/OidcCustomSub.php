<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class OidcCustomSub
{
    public const SCHEMA_JSON = '{"title":"Actions OIDC Subject customization","required":["include_claim_keys"],"type":"object","properties":{"include_claim_keys":{"type":"array","items":{"type":"string"},"description":"Array of unique strings. Each claim key can only contain alphanumeric characters and underscores."}},"description":"Actions OIDC Subject customization"}';
    public const SCHEMA_TITLE = 'Actions OIDC Subject customization';
    public const SCHEMA_DESCRIPTION = 'Actions OIDC Subject customization';
    public const SCHEMA_EXAMPLE_DATA = '{"include_claim_keys":["generated_include_claim_keys_null"]}';
    /**
     * includeClaimKeys: Array of unique strings. Each claim key can only contain alphanumeric characters and underscores.
     * @param array<string> $includeClaimKeys
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('include_claim_keys')] public array $includeClaimKeys)
    {
    }
}
