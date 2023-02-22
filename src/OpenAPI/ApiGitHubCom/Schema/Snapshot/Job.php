<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Snapshot;

final readonly class Job
{
    public const SCHEMA_JSON = '{"required":["id","correlator"],"type":"object","properties":{"id":{"type":"string","description":"The external ID of the job.","examples":["5622a2b0-63f6-4732-8c34-a1ab27e102a11"]},"correlator":{"type":"string","description":"Correlator provides a key that is used to group snapshots submitted over time. Only the \\"latest\\" submitted snapshot for a given combination of `job.correlator` and `detector.name` will be considered when calculating a repository\'s current dependencies. Correlator should be as unique as it takes to distinguish all detection runs for a given \\"wave\\" of CI workflow you run. If you\'re using GitHub Actions, a good default value for this could be the environment variables GITHUB_WORKFLOW and GITHUB_JOB concatenated together. If you\'re using a build matrix, then you\'ll also need to add additional key(s) to distinguish between each submission inside a matrix variation.","examples":["yourworkflowname_yourjobname"]},"html_url":{"type":"string","description":"The url for the job.","examples":["http:\\/\\/example.com\\/build"]}},"additionalProperties":false}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The external ID of the job.
     */
    public ?string $id;
    /**
     * Correlator provides a key that is used to group snapshots submitted over time. Only the "latest" submitted snapshot for a given combination of `job.correlator` and `detector.name` will be considered when calculating a repository's current dependencies. Correlator should be as unique as it takes to distinguish all detection runs for a given "wave" of CI workflow you run. If you're using GitHub Actions, a good default value for this could be the environment variables GITHUB_WORKFLOW and GITHUB_JOB concatenated together. If you're using a build matrix, then you'll also need to add additional key(s) to distinguish between each submission inside a matrix variation.
     */
    public ?string $correlator;
    /**
     * The url for the job.
     */
    public string $html_url;
    public function __construct(string $id, string $correlator, string $html_url)
    {
        $this->id = $id;
        $this->correlator = $correlator;
        $this->html_url = $html_url;
    }
}
