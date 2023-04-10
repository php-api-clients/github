<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Codespaces\CreateOrUpdateSecretForAuthenticatedUser\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["key_id"],"type":"object","properties":{"encrypted_value":{"pattern":"^(?:[A-Za-z0-9+\\/]{4})*(?:[A-Za-z0-9+\\/]{2}==|[A-Za-z0-9+\\/]{3}=|[A-Za-z0-9+\\/]{4})$","type":"string","description":"Value for your secret, encrypted with [LibSodium](https:\\/\\/libsodium.gitbook.io\\/doc\\/bindings_for_other_languages) using the public key retrieved from the [Get the public key for the authenticated user](https:\\/\\/docs.github.com\\/rest\\/reference\\/codespaces#get-the-public-key-for-the-authenticated-user) endpoint."},"key_id":{"type":"string","description":"ID of the key you used to encrypt the secret."},"selected_repository_ids":{"type":"array","items":{"anyOf":[{"type":"integer"},{"type":"string"}]},"description":"An array of repository ids that can access the user secret. You can manage the list of selected repositories using the [List selected repositories for a user secret](https:\\/\\/docs.github.com\\/rest\\/reference\\/codespaces#list-selected-repositories-for-a-user-secret), [Set selected repositories for a user secret](https:\\/\\/docs.github.com\\/rest\\/reference\\/codespaces#set-selected-repositories-for-a-user-secret), and [Remove a selected repository from a user secret](https:\\/\\/docs.github.com\\/rest\\/reference\\/codespaces#remove-a-selected-repository-from-a-user-secret) endpoints."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"encrypted_value":"generated_encrypted_value_null","key_id":"generated_key_id_null","selected_repository_ids":[13]}';
    /**
     * encryptedValue: Value for your secret, encrypted with [LibSodium](https://libsodium.gitbook.io/doc/bindings_for_other_languages) using the public key retrieved from the [Get the public key for the authenticated user](https://docs.github.com/rest/reference/codespaces#get-the-public-key-for-the-authenticated-user) endpoint.
     * keyId: ID of the key you used to encrypt the secret.
     * selectedRepositoryIds: An array of repository ids that can access the user secret. You can manage the list of selected repositories using the [List selected repositories for a user secret](https://docs.github.com/rest/reference/codespaces#list-selected-repositories-for-a-user-secret), [Set selected repositories for a user secret](https://docs.github.com/rest/reference/codespaces#set-selected-repositories-for-a-user-secret), and [Remove a selected repository from a user secret](https://docs.github.com/rest/reference/codespaces#remove-a-selected-repository-from-a-user-secret) endpoints.
     * @param ?array<int> $selectedRepositoryIds
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('encrypted_value')] public ?string $encryptedValue, #[\EventSauce\ObjectHydrator\MapFrom('key_id')] public string $keyId, #[\EventSauce\ObjectHydrator\MapFrom('selected_repository_ids')] public ?array $selectedRepositoryIds)
    {
    }
}
