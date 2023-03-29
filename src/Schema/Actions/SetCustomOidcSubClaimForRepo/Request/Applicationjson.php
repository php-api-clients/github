<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Actions\SetCustomOidcSubClaimForRepo\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"title":"Actions OIDC subject customization for a repository","required":["use_default"],"type":"object","properties":{"use_default":{"type":"boolean","description":"Whether to use the default template or not. If `true`, the `include_claim_keys` field is ignored."},"include_claim_keys":{"type":"array","items":{"type":"string"},"description":"Array of unique strings. Each claim key can only contain alphanumeric characters and underscores."}},"description":"Actions OIDC subject customization for a repository"}';
    public const SCHEMA_TITLE = 'Actions OIDC subject customization for a repository';
    public const SCHEMA_DESCRIPTION = 'Actions OIDC subject customization for a repository';
    public const SCHEMA_EXAMPLE_DATA = '{"use_default":false,"include_claim_keys":["generated_include_claim_keys_null"]}';
    /**
     * useDefault: Whether to use the default template or not. If `true`, the `include_claim_keys` field is ignored.
     * includeClaimKeys: Array of unique strings. Each claim key can only contain alphanumeric characters and underscores.
     * @param ?array<string> $includeClaimKeys
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('use_default')] public bool $useDefault, #[\EventSauce\ObjectHydrator\MapFrom('include_claim_keys')] public ?array $includeClaimKeys)
    {
    }
}
