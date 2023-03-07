<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Codespaces\CreateOrUpdateSecretForAuthenticatedUser\Request;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["key_id"],"type":"object","properties":{"encrypted_value":{"pattern":"^(?:[A-Za-z0-9+\\/]{4})*(?:[A-Za-z0-9+\\/]{2}==|[A-Za-z0-9+\\/]{3}=|[A-Za-z0-9+\\/]{4})$","type":"string","description":"Value for your secret, encrypted with [LibSodium](https:\\/\\/libsodium.gitbook.io\\/doc\\/bindings_for_other_languages) using the public key retrieved from the [Get the public key for the authenticated user](https:\\/\\/docs.github.com\\/rest\\/reference\\/codespaces#get-the-public-key-for-the-authenticated-user) endpoint."},"key_id":{"type":"string","description":"ID of the key you used to encrypt the secret."},"selected_repository_ids":{"type":"array","items":{"anyOf":[{"type":"integer"},{"type":"string"}]},"description":"An array of repository ids that can access the user secret. You can manage the list of selected repositories using the [List selected repositories for a user secret](https:\\/\\/docs.github.com\\/rest\\/reference\\/codespaces#list-selected-repositories-for-a-user-secret), [Set selected repositories for a user secret](https:\\/\\/docs.github.com\\/rest\\/reference\\/codespaces#set-selected-repositories-for-a-user-secret), and [Remove a selected repository from a user secret](https:\\/\\/docs.github.com\\/rest\\/reference\\/codespaces#remove-a-selected-repository-from-a-user-secret) endpoints."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"encrypted_value":"generated_encrypted_value","key_id":"generated_key_id","selected_repository_ids":[13]}';
    /**
     * encrypted_value: Value for your secret, encrypted with [LibSodium](https://libsodium.gitbook.io/doc/bindings_for_other_languages) using the public key retrieved from the [Get the public key for the authenticated user](https://docs.github.com/rest/reference/codespaces#get-the-public-key-for-the-authenticated-user) endpoint.
     * key_id: ID of the key you used to encrypt the secret.
     * selected_repository_ids: An array of repository ids that can access the user secret. You can manage the list of selected repositories using the [List selected repositories for a user secret](https://docs.github.com/rest/reference/codespaces#list-selected-repositories-for-a-user-secret), [Set selected repositories for a user secret](https://docs.github.com/rest/reference/codespaces#set-selected-repositories-for-a-user-secret), and [Remove a selected repository from a user secret](https://docs.github.com/rest/reference/codespaces#remove-a-selected-repository-from-a-user-secret) endpoints.
     * @param array<int> $selected_repository_ids
     */
    public function __construct(public string $encrypted_value, public ?string $key_id, public array $selected_repository_ids)
    {
    }
}
