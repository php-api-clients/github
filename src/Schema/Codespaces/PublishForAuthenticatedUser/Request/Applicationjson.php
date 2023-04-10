<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Codespaces\PublishForAuthenticatedUser\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"A name for the new repository."},"private":{"type":"boolean","description":"Whether the new repository should be private.","default":false}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","private":false}';
    /**
     * name: A name for the new repository.
     * private: Whether the new repository should be private.
     */
    public function __construct(public ?string $name, public ?bool $private)
    {
    }
}
