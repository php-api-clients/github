<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\PrivateRegistries\UpdateOrgPrivateRegistry\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "registry_type": {
            "enum": [
                "maven_repository"
            ],
            "type": "string",
            "description": "The registry type."
        },
        "username": {
            "type": [
                "string",
                "null"
            ],
            "description": "The username to use when authenticating with the private registry. This field should be omitted if the private registry does not require a username for authentication."
        },
        "encrypted_value": {
            "pattern": "^(?:[A-Za-z0-9+\\/]{4})*(?:[A-Za-z0-9+\\/]{2}==|[A-Za-z0-9+\\/]{3}=|[A-Za-z0-9+\\/]{4})$",
            "type": "string",
            "description": "The value for your secret, encrypted with [LibSodium](https:\\/\\/libsodium.gitbook.io\\/doc\\/bindings_for_other_languages) using the public key retrieved from the [Get private registries public key for an organization](https:\\/\\/docs.github.com\\/rest\\/private-registries\\/organization-configurations#get-private-registries-public-key-for-an-organization) endpoint."
        },
        "key_id": {
            "type": "string",
            "description": "The ID of the key you used to encrypt the secret."
        },
        "visibility": {
            "enum": [
                "all",
                "private",
                "selected"
            ],
            "type": "string",
            "description": "Which type of organization repositories have access to the private registry. `selected` means only the repositories specified by `selected_repository_ids` can access the private registry."
        },
        "selected_repository_ids": {
            "type": "array",
            "items": {
                "type": "integer"
            },
            "description": "An array of repository IDs that can access the organization private registry. You can only provide a list of repository IDs when `visibility` is set to `selected`. This field should be omitted if `visibility` is set to `all` or `private`."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "registry_type": "maven_repository",
    "username": "generated",
    "encrypted_value": ":zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzz:zzzzzzzz",
    "key_id": "generated",
    "visibility": "selected",
    "selected_repository_ids": [
        24,
        25
    ]
}';

    /**
     * registryType: The registry type.
     * username: The username to use when authenticating with the private registry. This field should be omitted if the private registry does not require a username for authentication.
     * encryptedValue: The value for your secret, encrypted with [LibSodium](https://libsodium.gitbook.io/doc/bindings_for_other_languages) using the public key retrieved from the [Get private registries public key for an organization](https://docs.github.com/rest/private-registries/organization-configurations#get-private-registries-public-key-for-an-organization) endpoint.
     * keyId: The ID of the key you used to encrypt the secret.
     * visibility: Which type of organization repositories have access to the private registry. `selected` means only the repositories specified by `selected_repository_ids` can access the private registry.
     * selectedRepositoryIds: An array of repository IDs that can access the organization private registry. You can only provide a list of repository IDs when `visibility` is set to `selected`. This field should be omitted if `visibility` is set to `all` or `private`.
     */
    public function __construct(#[MapFrom('registry_type')]
    public string|null $registryType, public string|null $username, #[MapFrom('encrypted_value')]
    public string|null $encryptedValue, #[MapFrom('key_id')]
    public string|null $keyId, public string|null $visibility, #[MapFrom('selected_repository_ids')]
    public array|null $selectedRepositoryIds,)
    {
    }
}
