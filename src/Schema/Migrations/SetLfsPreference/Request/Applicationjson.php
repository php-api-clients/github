<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Migrations\SetLfsPreference\Request;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["use_lfs"],"type":"object","properties":{"use_lfs":{"enum":["opt_in","opt_out"],"type":"string","description":"Whether to store large files during the import. `opt_in` means large files will be stored using Git LFS. `opt_out` means large files will be removed during the import."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"use_lfs":"generated_use_lfs"}';
    /**
     * use_lfs: Whether to store large files during the import. `opt_in` means large files will be stored using Git LFS. `opt_out` means large files will be removed during the import.
     */
    public function __construct(public ?string $use_lfs)
    {
    }
}
