<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Codespaces\CreateOrUpdateRepoSecret\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"encrypted_value":{"pattern":"^(?:[A-Za-z0-9+\\/]{4})*(?:[A-Za-z0-9+\\/]{2}==|[A-Za-z0-9+\\/]{3}=|[A-Za-z0-9+\\/]{4})$","type":"string","description":"Value for your secret, encrypted with [LibSodium](https:\\/\\/libsodium.gitbook.io\\/doc\\/bindings_for_other_languages) using the public key retrieved from the [Get a repository public key](https:\\/\\/docs.github.com\\/rest\\/reference\\/codespaces#get-a-repository-public-key) endpoint."},"key_id":{"type":"string","description":"ID of the key you used to encrypt the secret."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"encrypted_value":"generated_encrypted_value_null","key_id":"generated_key_id_null"}';
    /**
     * encryptedValue: Value for your secret, encrypted with [LibSodium](https://libsodium.gitbook.io/doc/bindings_for_other_languages) using the public key retrieved from the [Get a repository public key](https://docs.github.com/rest/reference/codespaces#get-a-repository-public-key) endpoint.
     * keyId: ID of the key you used to encrypt the secret.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('encrypted_value')] public ?string $encryptedValue, #[\EventSauce\ObjectHydrator\MapFrom('key_id')] public ?string $keyId)
    {
    }
}
