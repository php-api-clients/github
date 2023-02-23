<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Actions\CreateOrUpdateOrgSecret\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["visibility"],"type":"object","properties":{"encrypted_value":{"pattern":"^(?:[A-Za-z0-9+\\/]{4})*(?:[A-Za-z0-9+\\/]{2}==|[A-Za-z0-9+\\/]{3}=|[A-Za-z0-9+\\/]{4})$","type":"string","description":"Value for your secret, encrypted with [LibSodium](https:\\/\\/libsodium.gitbook.io\\/doc\\/bindings_for_other_languages) using the public key retrieved from the [Get an organization public key](https:\\/\\/docs.github.com\\/rest\\/reference\\/actions#get-an-organization-public-key) endpoint."},"key_id":{"type":"string","description":"ID of the key you used to encrypt the secret."},"visibility":{"enum":["all","private","selected"],"type":"string","description":"Which type of organization repositories have access to the organization secret. `selected` means only the repositories specified by `selected_repository_ids` can access the secret."},"selected_repository_ids":{"type":"array","items":{"type":"integer"},"description":"An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can manage the list of selected repositories using the [List selected repositories for an organization secret](https:\\/\\/docs.github.com\\/rest\\/reference\\/actions#list-selected-repositories-for-an-organization-secret), [Set selected repositories for an organization secret](https:\\/\\/docs.github.com\\/rest\\/reference\\/actions#set-selected-repositories-for-an-organization-secret), and [Remove selected repository from an organization secret](https:\\/\\/docs.github.com\\/rest\\/reference\\/actions#remove-selected-repository-from-an-organization-secret) endpoints."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Value for your secret, encrypted with [LibSodium](https://libsodium.gitbook.io/doc/bindings_for_other_languages) using the public key retrieved from the [Get an organization public key](https://docs.github.com/rest/reference/actions#get-an-organization-public-key) endpoint.
     */
    public string $encrypted_value;
    /**
     * ID of the key you used to encrypt the secret.
     */
    public string $key_id;
    /**
     * Which type of organization repositories have access to the organization secret. `selected` means only the repositories specified by `selected_repository_ids` can access the secret.
     */
    public ?string $visibility;
    /**
     * An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can manage the list of selected repositories using the [List selected repositories for an organization secret](https://docs.github.com/rest/reference/actions#list-selected-repositories-for-an-organization-secret), [Set selected repositories for an organization secret](https://docs.github.com/rest/reference/actions#set-selected-repositories-for-an-organization-secret), and [Remove selected repository from an organization secret](https://docs.github.com/rest/reference/actions#remove-selected-repository-from-an-organization-secret) endpoints.
     */
    public array $selected_repository_ids;
    public function __construct(string $encrypted_value, string $key_id, string $visibility, array $selected_repository_ids)
    {
        $this->encrypted_value = $encrypted_value;
        $this->key_id = $key_id;
        $this->visibility = $visibility;
        $this->selected_repository_ids = $selected_repository_ids;
    }
}
