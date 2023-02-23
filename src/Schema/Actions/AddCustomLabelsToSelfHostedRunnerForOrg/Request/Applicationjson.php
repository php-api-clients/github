<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Actions\AddCustomLabelsToSelfHostedRunnerForOrg\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["labels"],"type":"object","properties":{"labels":{"maxItems":100,"minItems":1,"type":"array","items":{"type":"string"},"description":"The names of the custom labels to add to the runner."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The names of the custom labels to add to the runner.
     */
    public ?array $labels;
    public function __construct(array $labels)
    {
        $this->labels = $labels;
    }
}
