<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class SimpleInstallation
{
    public const SCHEMA_JSON = '{"title":"Simple Installation","required":["id","node_id"],"type":"object","properties":{"id":{"type":"integer","description":"The ID of the installation.","examples":[1]},"node_id":{"type":"string","description":"The global node ID of the installation.","examples":["MDQ6VXNlcjU4MzIzMQ=="]}},"description":"The GitHub App installation. This property is included when the event is configured for and sent to a GitHub App."}';
    public const SCHEMA_TITLE = 'Simple Installation';
    public const SCHEMA_DESCRIPTION = 'The GitHub App installation. This property is included when the event is configured for and sent to a GitHub App.';
    public const SCHEMA_EXAMPLE_DATA = '{"id":1,"node_id":"MDQ6VXNlcjU4MzIzMQ=="}';
    /**
     * id: The ID of the installation.
     * nodeId: The global node ID of the installation.
     */
    public function __construct(public int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId)
    {
    }
}
