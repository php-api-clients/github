<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\UpdateReleaseAsset\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The file name of the asset."},"label":{"type":"string","description":"An alternate short description of the asset. Used in place of the filename."},"state":{"type":"string","examples":["\\"uploaded\\""]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","label":"generated_label","state":"\\"uploaded\\""}';
    /**
     * name: The file name of the asset.
     * label: An alternate short description of the asset. Used in place of the filename.
     */
    public function __construct(public ?string $name, public ?string $label, public ?string $state)
    {
    }
}
