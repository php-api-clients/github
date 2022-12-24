<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CDf389B1F81457D55Df907F4B3Ff8Fa85
{
    public const SCHEMA_JSON = '{"required":["id","correlator"],"type":"object","properties":{"id":{"type":"string","description":"The external ID of the job.","examples":["5622a2b0-63f6-4732-8c34-a1ab27e102a11"]},"correlator":{"type":"string","description":"Correlator provides a key that is used to group snapshots submitted over time. Only the \\"latest\\" submitted snapshot for a given combination of `job.correlator` and `detector.name` will be considered when calculating a repository\'s current dependencies. Correlator should be as unique as it takes to distinguish all detection runs for a given \\"wave\\" of CI workflow you run. If you\'re using GitHub Actions, a good default value for this could be the environment variables GITHUB_WORKFLOW and GITHUB_JOB concatenated together. If you\'re using a build matrix, then you\'ll also need to add additional key(s) to distinguish between each submission inside a matrix variation.","examples":["yourworkflowname_yourjobname"]},"html_url":{"type":"string","description":"The url for the job.","examples":["http:\\/\\/example.com\\/build"]}},"additionalProperties":false}';
    public const SCHEMA_TITLE = 'c_df389b1f81457d55df907f4b3ff8fa85';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The external ID of the job.
     */
    private string $id;
    /**
     * Correlator provides a key that is used to group snapshots submitted over time. Only the "latest" submitted snapshot for a given combination of `job.correlator` and `detector.name` will be considered when calculating a repository's current dependencies. Correlator should be as unique as it takes to distinguish all detection runs for a given "wave" of CI workflow you run. If you're using GitHub Actions, a good default value for this could be the environment variables GITHUB_WORKFLOW and GITHUB_JOB concatenated together. If you're using a build matrix, then you'll also need to add additional key(s) to distinguish between each submission inside a matrix variation.
     */
    private string $correlator;
    /**
     * The url for the job.
     */
    private ?string $html_url = null;
    /**
     * The external ID of the job.
     */
    public function id() : string
    {
        return $this->id;
    }
    /**
     * Correlator provides a key that is used to group snapshots submitted over time. Only the "latest" submitted snapshot for a given combination of `job.correlator` and `detector.name` will be considered when calculating a repository's current dependencies. Correlator should be as unique as it takes to distinguish all detection runs for a given "wave" of CI workflow you run. If you're using GitHub Actions, a good default value for this could be the environment variables GITHUB_WORKFLOW and GITHUB_JOB concatenated together. If you're using a build matrix, then you'll also need to add additional key(s) to distinguish between each submission inside a matrix variation.
     */
    public function correlator() : string
    {
        return $this->correlator;
    }
    /**
     * The url for the job.
     */
    public function html_url() : ?string
    {
        return $this->html_url;
    }
}
