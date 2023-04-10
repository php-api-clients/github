<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class PorterAuthor
{
    public const SCHEMA_JSON = '{"title":"Porter Author","required":["id","remote_id","remote_name","email","name","url","import_url"],"type":"object","properties":{"id":{"type":"integer"},"remote_id":{"type":"string"},"remote_name":{"type":"string"},"email":{"type":"string"},"name":{"type":"string"},"url":{"type":"string","format":"uri"},"import_url":{"type":"string","format":"uri"}},"description":"Porter Author"}';
    public const SCHEMA_TITLE = 'Porter Author';
    public const SCHEMA_DESCRIPTION = 'Porter Author';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"remote_id":"generated_remote_id_null","remote_name":"generated_remote_name_null","email":"generated_email_null","name":"generated_name_null","url":"https:\\/\\/example.com\\/","import_url":"https:\\/\\/example.com\\/"}';
    public function __construct(public int $id, #[\EventSauce\ObjectHydrator\MapFrom('remote_id')] public string $remoteId, #[\EventSauce\ObjectHydrator\MapFrom('remote_name')] public string $remoteName, public string $email, public string $name, public string $url, #[\EventSauce\ObjectHydrator\MapFrom('import_url')] public string $importUrl)
    {
    }
}
