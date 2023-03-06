<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class PackageFiles
{
    public const SCHEMA_JSON = '{"required":["download_url","id","name","sha256","sha1","md5","content_type","state","size","created_at","updated_at"],"type":"object","properties":{"content_type":{"type":"string"},"created_at":{"type":"string"},"download_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"md5":{"type":["string","null"]},"name":{"type":"string"},"sha1":{"type":["string","null"]},"sha256":{"type":"string"},"size":{"type":"integer"},"state":{"type":"string"},"updated_at":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"content_type":"generated_content_type","created_at":"generated_created_at","download_url":"generated_download_url","id":13,"md5":"generated_md5","name":"generated_name","sha1":"generated_sha1","sha256":"generated_sha256","size":13,"state":"generated_state","updated_at":"generated_updated_at"}';
    public function __construct(public ?string $content_type, public ?string $created_at, public ?string $download_url, public ?int $id, public ?string $md5, public ?string $name, public ?string $sha1, public ?string $sha256, public ?int $size, public ?string $state, public ?string $updated_at)
    {
    }
}
