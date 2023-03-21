<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class PackageFiles
{
    public const SCHEMA_JSON = '{"required":["download_url","id","name","sha256","sha1","md5","content_type","state","size","created_at","updated_at"],"type":"object","properties":{"content_type":{"type":"string"},"created_at":{"type":"string"},"download_url":{"type":"string"},"id":{"type":"integer"},"md5":{"type":["string","null"]},"name":{"type":"string"},"sha1":{"type":["string","null"]},"sha256":{"type":["string","null"]},"size":{"type":"integer"},"state":{"type":["string","null"]},"updated_at":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"content_type":"generated_content_type_null","created_at":"generated_created_at_null","download_url":"generated_download_url_null","id":13,"md5":"generated_md5_null","name":"generated_name_null","sha1":"generated_sha1_null","sha256":"generated_sha256_null","size":13,"state":"generated_state_null","updated_at":"generated_updated_at_null"}';
    public function __construct(public string $content_type, public string $created_at, public string $download_url, public int $id, public ?string $md5, public string $name, public ?string $sha1, public ?string $sha256, public int $size, public ?string $state, public string $updated_at)
    {
    }
}
