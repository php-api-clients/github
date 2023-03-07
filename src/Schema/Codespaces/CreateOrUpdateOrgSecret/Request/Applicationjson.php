<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Codespaces\CreateOrUpdateOrgSecret\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["visibility"],"type":"object","properties":{"encrypted_value":{"pattern":"^(?:[A-Za-z0-9+\\/]{4})*(?:[A-Za-z0-9+\\/]{2}==|[A-Za-z0-9+\\/]{3}=|[A-Za-z0-9+\\/]{4})$","type":"string","description":"The value for your secret, encrypted with [LibSodium](https:\\/\\/libsodium.gitbook.io\\/doc\\/bindings_for_other_languages) using the public key retrieved from the [Get an organization public key](https:\\/\\/docs.github.com\\/rest\\/reference\\/codespaces#get-an-organization-public-key) endpoint."},"key_id":{"type":"string","description":"The ID of the key you used to encrypt the secret."},"visibility":{"enum":["all","private","selected"],"type":"string","description":"Which type of organization repositories have access to the organization secret. `selected` means only the repositories specified by `selected_repository_ids` can access the secret."},"selected_repository_ids":{"type":"array","items":{"type":"integer"},"description":"An array of repository IDs that can access the organization secret. You can only provide a list of repository IDs when the `visibility` is set to `selected`. You can manage the list of selected repositories using the [List selected repositories for an organization secret](https:\\/\\/docs.github.com\\/rest\\/reference\\/codespaces#list-selected-repositories-for-an-organization-secret), [Set selected repositories for an organization secret](https:\\/\\/docs.github.com\\/rest\\/reference\\/codespaces#set-selected-repositories-for-an-organization-secret), and [Remove selected repository from an organization secret](https:\\/\\/docs.github.com\\/rest\\/reference\\/codespaces#remove-selected-repository-from-an-organization-secret) endpoints."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"encrypted_value":"generated_encrypted_value","key_id":"generated_key_id","visibility":"generated_visibility","selected_repository_ids":[13]}';
    /**
     * encrypted_value: The value for your secret, encrypted with [LibSodium](https://libsodium.gitbook.io/doc/bindings_for_other_languages) using the public key retrieved from the [Get an organization public key](https://docs.github.com/rest/reference/codespaces#get-an-organization-public-key) endpoint.
     * key_id: The ID of the key you used to encrypt the secret.
     * visibility: Which type of organization repositories have access to the organization secret. `selected` means only the repositories specified by `selected_repository_ids` can access the secret.
     * selected_repository_ids: An array of repository IDs that can access the organization secret. You can only provide a list of repository IDs when the `visibility` is set to `selected`. You can manage the list of selected repositories using the [List selected repositories for an organization secret](https://docs.github.com/rest/reference/codespaces#list-selected-repositories-for-an-organization-secret), [Set selected repositories for an organization secret](https://docs.github.com/rest/reference/codespaces#set-selected-repositories-for-an-organization-secret), and [Remove selected repository from an organization secret](https://docs.github.com/rest/reference/codespaces#remove-selected-repository-from-an-organization-secret) endpoints.
     * @param array<int> $selected_repository_ids
     */
    public function __construct(public string $encrypted_value, public string $key_id, public ?string $visibility, public array $selected_repository_ids)
    {
    }
}
