<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class PorterAuthor
{
    public const SCHEMA_JSON = '{"title":"Porter Author","required":["id","remote_id","remote_name","email","name","url","import_url"],"type":"object","properties":{"id":{"type":"integer"},"remote_id":{"type":"string"},"remote_name":{"type":"string"},"email":{"type":"string"},"name":{"type":"string"},"url":{"type":"string","format":"uri"},"import_url":{"type":"string","format":"uri"}},"description":"Porter Author"}';
    public const SCHEMA_TITLE = 'Porter Author';
    public const SCHEMA_DESCRIPTION = 'Porter Author';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"remote_id":"generated_remote_id","remote_name":"generated_remote_name","email":"generated_email","name":"generated_name","url":"generated_url","import_url":"generated_import_url"}';
    public function __construct(public int $id, public string $remote_id, public string $remote_name, public string $email, public string $name, public string $url, public string $import_url)
    {
    }
}
