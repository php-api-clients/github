<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
abstract readonly class Abstract2669d512b3e1915ca7a5b92e0b91b77e
{
    public const SCHEMA_JSON = '{"required":["label","description","identifier"],"type":"object","properties":{"label":{"maxLength":20,"type":"string","description":"The text to be displayed on a button in the web UI. The maximum size is 20 characters."},"description":{"maxLength":40,"type":"string","description":"A short explanation of what this action would do. The maximum size is 40 characters."},"identifier":{"maxLength":20,"type":"string","description":"A reference for the action on the integrator\'s system. The maximum size is 20 characters."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"label":"generated_label_null","description":"generated_description_null","identifier":"generated_identifier_null"}';
    /**
     * label: The text to be displayed on a button in the web UI. The maximum size is 20 characters.
     * description: A short explanation of what this action would do. The maximum size is 40 characters.
     * identifier: A reference for the action on the integrator's system. The maximum size is 20 characters.
     */
    public function __construct(public string $label, public string $description, public string $identifier)
    {
    }
}
