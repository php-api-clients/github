<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet2669D512\TietB3E1915C\TietA7A5B92E;

abstract readonly class Tiet0B91B77E
{
    public const SCHEMA_JSON         = '{"required":["label","description","identifier"],"type":"object","properties":{"label":{"maxLength":20,"type":"string","description":"The text to be displayed on a button in the web UI. The maximum size is 20 characters."},"description":{"maxLength":40,"type":"string","description":"A short explanation of what this action would do. The maximum size is 40 characters."},"identifier":{"maxLength":20,"type":"string","description":"A reference for the action on the integrator\'s system. The maximum size is 20 characters."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"label":"generated","description":"generated","identifier":"generated"}';

    /**
     * label: The text to be displayed on a button in the web UI. The maximum size is 20 characters.
     * description: A short explanation of what this action would do. The maximum size is 40 characters.
     * identifier: A reference for the action on the integrator's system. The maximum size is 20 characters.
     */
    public function __construct(public string $label, public string $description, public string $identifier)
    {
    }
}
