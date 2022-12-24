<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C7Cd73Cefb28D28C904A063250578A3Ad
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"encrypted_value":{"pattern":"^(?:[A-Za-z0-9+\\/]{4})*(?:[A-Za-z0-9+\\/]{2}==|[A-Za-z0-9+\\/]{3}=|[A-Za-z0-9+\\/]{4})$","type":"string","description":"Value for your secret, encrypted with [LibSodium](https:\\/\\/libsodium.gitbook.io\\/doc\\/bindings_for_other_languages) using the public key retrieved from the [Get a repository public key](https:\\/\\/docs.github.com\\/rest\\/reference\\/codespaces#get-a-repository-public-key) endpoint."},"key_id":{"type":"string","description":"ID of the key you used to encrypt the secret."}}}';
    public const SCHEMA_TITLE = 'c_7cd73cefb28d28c904a063250578a3ad';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Value for your secret, encrypted with [LibSodium](https://libsodium.gitbook.io/doc/bindings_for_other_languages) using the public key retrieved from the [Get a repository public key](https://docs.github.com/rest/reference/codespaces#get-a-repository-public-key) endpoint.
     */
    private string $encrypted_value;
    /**
     * ID of the key you used to encrypt the secret.
     */
    private string $key_id;
    /**
     * Value for your secret, encrypted with [LibSodium](https://libsodium.gitbook.io/doc/bindings_for_other_languages) using the public key retrieved from the [Get a repository public key](https://docs.github.com/rest/reference/codespaces#get-a-repository-public-key) endpoint.
     */
    public function encrypted_value() : string
    {
        return $this->encrypted_value;
    }
    /**
     * ID of the key you used to encrypt the secret.
     */
    public function key_id() : string
    {
        return $this->key_id;
    }
}
