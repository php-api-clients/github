<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class SimpleInstallation
{
    public const SCHEMA_JSON = '{"title":"Simple Installation","required":["id","node_id"],"type":"object","properties":{"id":{"type":"integer","description":"The ID of the installation.","examples":[1]},"node_id":{"type":"string","description":"The global node ID of the installation.","examples":["MDQ6VXNlcjU4MzIzMQ=="]}},"description":"The GitHub App installation. This property is included when the event is configured for and sent to a GitHub App."}';
    public const SCHEMA_TITLE = 'Simple Installation';
    public const SCHEMA_DESCRIPTION = 'The GitHub App installation. This property is included when the event is configured for and sent to a GitHub App.';
    public const SCHEMA_EXAMPLE_DATA = '{"id":1,"node_id":"MDQ6VXNlcjU4MzIzMQ=="}';
    /**
     * id: The ID of the installation.
     * node_id: The global node ID of the installation.
     */
    public function __construct(public ?int $id, public ?string $node_id)
    {
    }
}
