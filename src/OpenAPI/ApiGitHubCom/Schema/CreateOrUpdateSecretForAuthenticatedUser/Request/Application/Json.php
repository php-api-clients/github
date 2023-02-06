<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateOrUpdateSecretForAuthenticatedUser\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["key_id"],"type":"object","properties":{"encrypted_value":{"pattern":"^(?:[A-Za-z0-9+\\/]{4})*(?:[A-Za-z0-9+\\/]{2}==|[A-Za-z0-9+\\/]{3}=|[A-Za-z0-9+\\/]{4})$","type":"string","description":"Value for your secret, encrypted with [LibSodium](https:\\/\\/libsodium.gitbook.io\\/doc\\/bindings_for_other_languages) using the public key retrieved from the [Get the public key for the authenticated user](https:\\/\\/docs.github.com\\/rest\\/reference\\/codespaces#get-the-public-key-for-the-authenticated-user) endpoint."},"key_id":{"type":"string","description":"ID of the key you used to encrypt the secret."},"selected_repository_ids":{"type":"array","items":{"anyOf":[{"type":"integer"},{"type":"string"}]},"description":"An array of repository ids that can access the user secret. You can manage the list of selected repositories using the [List selected repositories for a user secret](https:\\/\\/docs.github.com\\/rest\\/reference\\/codespaces#list-selected-repositories-for-a-user-secret), [Set selected repositories for a user secret](https:\\/\\/docs.github.com\\/rest\\/reference\\/codespaces#set-selected-repositories-for-a-user-secret), and [Remove a selected repository from a user secret](https:\\/\\/docs.github.com\\/rest\\/reference\\/codespaces#remove-a-selected-repository-from-a-user-secret) endpoints."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'CreateOrUpdateSecretForAuthenticatedUser\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Value for your secret, encrypted with [LibSodium](https://libsodium.gitbook.io/doc/bindings_for_other_languages) using the public key retrieved from the [Get the public key for the authenticated user](https://docs.github.com/rest/reference/codespaces#get-the-public-key-for-the-authenticated-user) endpoint.
     */
    public readonly ?string $encrypted_value;
    /**
     * ID of the key you used to encrypt the secret.
     */
    public readonly string $key_id;
    /**
     * An array of repository ids that can access the user secret. You can manage the list of selected repositories using the [List selected repositories for a user secret](https://docs.github.com/rest/reference/codespaces#list-selected-repositories-for-a-user-secret), [Set selected repositories for a user secret](https://docs.github.com/rest/reference/codespaces#set-selected-repositories-for-a-user-secret), and [Remove a selected repository from a user secret](https://docs.github.com/rest/reference/codespaces#remove-a-selected-repository-from-a-user-secret) endpoints.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\SelectedRepositoryIds>
     */
    public readonly array $selected_repository_ids;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\SelectedRepositoryIds> $selected_repository_ids
     */
    public function __construct(string $encrypted_value, string $key_id, array $selected_repository_ids)
    {
        $this->encrypted_value = $encrypted_value;
        $this->key_id = $key_id;
        $this->selected_repository_ids = $selected_repository_ids;
    }
}
