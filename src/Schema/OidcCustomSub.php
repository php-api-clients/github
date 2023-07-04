<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class OidcCustomSub
{
    public const SCHEMA_JSON         = '{"title":"Actions OIDC Subject customization","required":["include_claim_keys"],"type":"object","properties":{"include_claim_keys":{"type":"array","items":{"type":"string"},"description":"Array of unique strings. Each claim key can only contain alphanumeric characters and underscores."}},"description":"Actions OIDC Subject customization"}';
    public const SCHEMA_TITLE        = 'Actions OIDC Subject customization';
    public const SCHEMA_DESCRIPTION  = 'Actions OIDC Subject customization';
    public const SCHEMA_EXAMPLE_DATA = '{"include_claim_keys":["generated","generated"]}';

    /**
     * includeClaimKeys: Array of unique strings. Each claim key can only contain alphanumeric characters and underscores.
     */
    public function __construct(#[MapFrom('include_claim_keys')]
    public array $includeClaimKeys,)
    {
    }
}
