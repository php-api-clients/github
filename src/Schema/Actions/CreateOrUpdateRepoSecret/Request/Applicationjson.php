<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Actions\CreateOrUpdateRepoSecret\Request;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"encrypted_value":{"pattern":"^(?:[A-Za-z0-9+\\/]{4})*(?:[A-Za-z0-9+\\/]{2}==|[A-Za-z0-9+\\/]{3}=|[A-Za-z0-9+\\/]{4})$","type":"string","description":"Value for your secret, encrypted with [LibSodium](https:\\/\\/libsodium.gitbook.io\\/doc\\/bindings_for_other_languages) using the public key retrieved from the [Get a repository public key](https:\\/\\/docs.github.com\\/rest\\/reference\\/actions#get-a-repository-public-key) endpoint."},"key_id":{"type":"string","description":"ID of the key you used to encrypt the secret."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"encrypted_value":"generated_encrypted_value","key_id":"generated_key_id"}';
    /**
     * encrypted_value: Value for your secret, encrypted with [LibSodium](https://libsodium.gitbook.io/doc/bindings_for_other_languages) using the public key retrieved from the [Get a repository public key](https://docs.github.com/rest/reference/actions#get-a-repository-public-key) endpoint.
     * key_id: ID of the key you used to encrypt the secret.
     */
    public function __construct(public ?string $encrypted_value, public ?string $key_id)
    {
    }
}
