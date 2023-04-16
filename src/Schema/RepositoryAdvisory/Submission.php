<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\RepositoryAdvisory;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class Submission
{
    public const SCHEMA_JSON = '{"required":["accepted"],"type":["object","null"],"properties":{"accepted":{"type":"boolean","description":"Whether a private vulnerability report was accepted by the repository\'s administrators.","readOnly":true}},"readOnly":true}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"accepted":false}';
    /**
     * accepted: Whether a private vulnerability report was accepted by the repository's administrators.
     */
    public function __construct(public bool $accepted)
    {
    }
}
