<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Migrations\SetLfsPreference\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["use_lfs"],"type":"object","properties":{"use_lfs":{"enum":["opt_in","opt_out"],"type":"string","description":"Whether to store large files during the import. `opt_in` means large files will be stored using Git LFS. `opt_out` means large files will be removed during the import."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"use_lfs":"opt_in"}';
    /**
     * useLfs: Whether to store large files during the import. `opt_in` means large files will be stored using Git LFS. `opt_out` means large files will be removed during the import.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('use_lfs')] public string $useLfs)
    {
    }
}
