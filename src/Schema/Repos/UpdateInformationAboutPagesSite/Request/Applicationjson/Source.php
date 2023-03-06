<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\UpdateInformationAboutPagesSite\Request\Applicationjson;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Source
{
    public const SCHEMA_JSON = '{"required":["branch","path"],"type":"object","properties":{"branch":{"type":"string","description":"The repository branch used to publish your site\'s source files."},"path":{"enum":["\\/","\\/docs"],"type":"string","description":"The repository directory that includes the source files for the Pages site. Allowed paths are `\\/` or `\\/docs`."}},"description":"Update the source for the repository. Must include the branch name and path."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Update the source for the repository. Must include the branch name and path.';
    public const SCHEMA_EXAMPLE_DATA = '{"branch":"generated_branch","path":"generated_path"}';
    /**
     * branch: The repository branch used to publish your site's source files.
     * path: The repository directory that includes the source files for the Pages site. Allowed paths are `/` or `/docs`.
     */
    public function __construct(public ?string $branch, public ?string $path)
    {
    }
}
