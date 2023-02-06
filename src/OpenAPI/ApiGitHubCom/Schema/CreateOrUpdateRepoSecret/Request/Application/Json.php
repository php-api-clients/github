<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateOrUpdateRepoSecret\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"encrypted_value":{"pattern":"^(?:[A-Za-z0-9+\\/]{4})*(?:[A-Za-z0-9+\\/]{2}==|[A-Za-z0-9+\\/]{3}=|[A-Za-z0-9+\\/]{4})$","type":"string","description":"Value for your secret, encrypted with [LibSodium](https:\\/\\/libsodium.gitbook.io\\/doc\\/bindings_for_other_languages) using the public key retrieved from the [Get a repository public key](https:\\/\\/docs.github.com\\/rest\\/reference\\/dependabot#get-a-repository-public-key) endpoint."},"key_id":{"type":"string","description":"ID of the key you used to encrypt the secret."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'CreateOrUpdateRepoSecret\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Value for your secret, encrypted with [LibSodium](https://libsodium.gitbook.io/doc/bindings_for_other_languages) using the public key retrieved from the [Get a repository public key](https://docs.github.com/rest/reference/dependabot#get-a-repository-public-key) endpoint.
     */
    public readonly string $encrypted_value;
    /**
     * ID of the key you used to encrypt the secret.
     */
    public readonly string $key_id;
    public function __construct(string $encrypted_value, string $key_id)
    {
        $this->encrypted_value = $encrypted_value;
        $this->key_id = $key_id;
    }
}
