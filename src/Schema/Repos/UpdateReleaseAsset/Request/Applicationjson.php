<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Repos\UpdateReleaseAsset\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The file name of the asset."},"label":{"type":"string","description":"An alternate short description of the asset. Used in place of the filename."},"state":{"type":"string","examples":["\\"uploaded\\""]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","label":"generated_label_null","state":"\\"uploaded\\""}';
    /**
     * name: The file name of the asset.
     * label: An alternate short description of the asset. Used in place of the filename.
     */
    public function __construct(public ?string $name, public ?string $label, public ?string $state)
    {
    }
}
