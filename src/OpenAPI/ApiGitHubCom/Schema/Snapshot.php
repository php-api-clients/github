<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Snapshot
{
    public const SCHEMA_TITLE = 'snapshot';
    public const SCHEMA_DESCRIPTION = 'Create a new snapshot of a repository\'s dependencies.';
    /**
     * The version of the repository snapshot submission.
     */
    private int $version;
    private array $job = array();
    /**
     * The commit SHA associated with this dependency snapshot. Maximum length: 40 characters.
     */
    private string $sha;
    /**
     * The repository branch that triggered this snapshot.
     */
    private string $ref;
    /**
     * A description of the detector used.
     */
    private array $detector = array();
    /**
     * User-defined metadata to store domain-specific information limited to 8 keys with scalar values.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Metadata::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Metadata $metadata = null;
    /**
     * A collection of package manifests, which are a collection of related dependencies declared in a file or representing a logical group of dependencies.
     */
    private array $manifests = array();
    /**
     * The time at which the snapshot was scanned.
     */
    private string $scanned;
    /**
     * The version of the repository snapshot submission.
     */
    public function version() : int
    {
        return $this->version;
    }
    public function job() : array
    {
        return $this->job;
    }
    /**
     * The commit SHA associated with this dependency snapshot. Maximum length: 40 characters.
     */
    public function sha() : string
    {
        return $this->sha;
    }
    /**
     * The repository branch that triggered this snapshot.
     */
    public function ref() : string
    {
        return $this->ref;
    }
    /**
     * A description of the detector used.
     */
    public function detector() : array
    {
        return $this->detector;
    }
    /**
     * User-defined metadata to store domain-specific information limited to 8 keys with scalar values.
     */
    public function metadata() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Metadata
    {
        return $this->metadata;
    }
    /**
     * A collection of package manifests, which are a collection of related dependencies declared in a file or representing a logical group of dependencies.
     */
    public function manifests() : array
    {
        return $this->manifests;
    }
    /**
     * The time at which the snapshot was scanned.
     */
    public function scanned() : string
    {
        return $this->scanned;
    }
}
