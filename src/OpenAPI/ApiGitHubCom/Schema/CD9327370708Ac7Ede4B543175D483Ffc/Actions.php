<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CD9327370708Ac7Ede4B543175D483Ffc;

final class Actions
{
    public const SCHEMA_JSON = '{"required":["label","description","identifier"],"type":"object","properties":{"label":{"maxLength":20,"type":"string","description":"The text to be displayed on a button in the web UI. The maximum size is 20 characters."},"description":{"maxLength":40,"type":"string","description":"A short explanation of what this action would do. The maximum size is 40 characters."},"identifier":{"maxLength":20,"type":"string","description":"A reference for the action on the integrator\'s system. The maximum size is 20 characters."}}}';
    public const SCHEMA_TITLE = 'CD9327370708Ac7Ede4B543175D483Ffc\\Actions';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The text to be displayed on a button in the web UI. The maximum size is 20 characters.
     */
    private string $label;
    /**
     * A short explanation of what this action would do. The maximum size is 40 characters.
     */
    private string $description;
    /**
     * A reference for the action on the integrator's system. The maximum size is 20 characters.
     */
    private string $identifier;
    /**
     * The text to be displayed on a button in the web UI. The maximum size is 20 characters.
     */
    public function label() : string
    {
        return $this->label;
    }
    /**
     * A short explanation of what this action would do. The maximum size is 40 characters.
     */
    public function description() : string
    {
        return $this->description;
    }
    /**
     * A reference for the action on the integrator's system. The maximum size is 20 characters.
     */
    public function identifier() : string
    {
        return $this->identifier;
    }
}
