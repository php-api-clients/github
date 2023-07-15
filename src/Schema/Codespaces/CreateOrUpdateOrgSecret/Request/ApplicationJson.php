<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Codespaces\CreateOrUpdateOrgSecret\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["visibility"],"type":"object","properties":{"encrypted_value":{"pattern":"^(?:[A-Za-z0-9+\\/]{4})*(?:[A-Za-z0-9+\\/]{2}==|[A-Za-z0-9+\\/]{3}=|[A-Za-z0-9+\\/]{4})$","type":"string","description":"The value for your secret, encrypted with [LibSodium](https:\\/\\/libsodium.gitbook.io\\/doc\\/bindings_for_other_languages) using the public key retrieved from the [Get an organization public key](https:\\/\\/docs.github.com\\/rest\\/codespaces\\/organization-secrets#get-an-organization-public-key) endpoint."},"key_id":{"type":"string","description":"The ID of the key you used to encrypt the secret."},"visibility":{"enum":["all","private","selected"],"type":"string","description":"Which type of organization repositories have access to the organization secret. `selected` means only the repositories specified by `selected_repository_ids` can access the secret."},"selected_repository_ids":{"type":"array","items":{"type":"integer"},"description":"An array of repository IDs that can access the organization secret. You can only provide a list of repository IDs when the `visibility` is set to `selected`. You can manage the list of selected repositories using the [List selected repositories for an organization secret](https:\\/\\/docs.github.com\\/rest\\/codespaces\\/organization-secrets#list-selected-repositories-for-an-organization-secret), [Set selected repositories for an organization secret](https:\\/\\/docs.github.com\\/rest\\/codespaces\\/organization-secrets#set-selected-repositories-for-an-organization-secret), and [Remove selected repository from an organization secret](https:\\/\\/docs.github.com\\/rest\\/codespaces\\/organization-secrets#remove-selected-repository-from-an-organization-secret) endpoints."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"encrypted_value":":zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzzzzzz","key_id":"generated","visibility":"selected","selected_repository_ids":[24,25]}';

    /**
     * encryptedValue: The value for your secret, encrypted with [LibSodium](https://libsodium.gitbook.io/doc/bindings_for_other_languages) using the public key retrieved from the [Get an organization public key](https://docs.github.com/rest/codespaces/organization-secrets#get-an-organization-public-key) endpoint.
     * keyId: The ID of the key you used to encrypt the secret.
     * visibility: Which type of organization repositories have access to the organization secret. `selected` means only the repositories specified by `selected_repository_ids` can access the secret.
     * selectedRepositoryIds: An array of repository IDs that can access the organization secret. You can only provide a list of repository IDs when the `visibility` is set to `selected`. You can manage the list of selected repositories using the [List selected repositories for an organization secret](https://docs.github.com/rest/codespaces/organization-secrets#list-selected-repositories-for-an-organization-secret), [Set selected repositories for an organization secret](https://docs.github.com/rest/codespaces/organization-secrets#set-selected-repositories-for-an-organization-secret), and [Remove selected repository from an organization secret](https://docs.github.com/rest/codespaces/organization-secrets#remove-selected-repository-from-an-organization-secret) endpoints.
     */
    public function __construct(#[MapFrom('encrypted_value')]
    public string|null $encryptedValue, #[MapFrom('key_id')]
    public string|null $keyId, public string $visibility, #[MapFrom('selected_repository_ids')]
    public array|null $selectedRepositoryIds,)
    {
    }
}
