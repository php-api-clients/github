<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Codespaces\CreateOrUpdateSecretForAuthenticatedUser\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["key_id"],"type":"object","properties":{"encrypted_value":{"pattern":"^(?:[A-Za-z0-9+\\/]{4})*(?:[A-Za-z0-9+\\/]{2}==|[A-Za-z0-9+\\/]{3}=|[A-Za-z0-9+\\/]{4})$","type":"string","description":"Value for your secret, encrypted with [LibSodium](https:\\/\\/libsodium.gitbook.io\\/doc\\/bindings_for_other_languages) using the public key retrieved from the [Get the public key for the authenticated user](https:\\/\\/docs.github.com\\/rest\\/codespaces\\/secrets#get-public-key-for-the-authenticated-user) endpoint."},"key_id":{"type":"string","description":"ID of the key you used to encrypt the secret."},"selected_repository_ids":{"type":"array","items":{"anyOf":[{"type":"integer"},{"type":"string"}]},"description":"An array of repository ids that can access the user secret. You can manage the list of selected repositories using the [List selected repositories for a user secret](https:\\/\\/docs.github.com\\/rest\\/codespaces\\/secrets#list-selected-repositories-for-a-user-secret), [Set selected repositories for a user secret](https:\\/\\/docs.github.com\\/rest\\/codespaces\\/secrets#set-selected-repositories-for-a-user-secret), and [Remove a selected repository from a user secret](https:\\/\\/docs.github.com\\/rest\\/codespaces\\/secrets#remove-a-selected-repository-from-a-user-secret) endpoints."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"encrypted_value":":zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzzzzzz","key_id":"generated","selected_repository_ids":[null,null]}';

    /**
     * encryptedValue: Value for your secret, encrypted with [LibSodium](https://libsodium.gitbook.io/doc/bindings_for_other_languages) using the public key retrieved from the [Get the public key for the authenticated user](https://docs.github.com/rest/codespaces/secrets#get-public-key-for-the-authenticated-user) endpoint.
     * keyId: ID of the key you used to encrypt the secret.
     * selectedRepositoryIds: An array of repository ids that can access the user secret. You can manage the list of selected repositories using the [List selected repositories for a user secret](https://docs.github.com/rest/codespaces/secrets#list-selected-repositories-for-a-user-secret), [Set selected repositories for a user secret](https://docs.github.com/rest/codespaces/secrets#set-selected-repositories-for-a-user-secret), and [Remove a selected repository from a user secret](https://docs.github.com/rest/codespaces/secrets#remove-a-selected-repository-from-a-user-secret) endpoints.
     */
    public function __construct(#[MapFrom('encrypted_value')]
    public string|null $encryptedValue, #[MapFrom('key_id')]
    public string $keyId, #[MapFrom('selected_repository_ids')]
    public array|null $selectedRepositoryIds,)
    {
    }
}
