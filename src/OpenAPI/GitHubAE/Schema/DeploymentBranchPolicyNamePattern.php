<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class DeploymentBranchPolicyNamePattern
{
    public const SCHEMA_TITLE = 'Deployment branch policy name pattern';
    public const SCHEMA_DESCRIPTION = '';
    /**
    * The name pattern that branches must match in order to deploy to the environment.
    
    Wildcard characters will not match `/`. For example, to match branches that begin with `release/` and contain an additional single slash, use `release/*/*`.
    For more information about pattern matching syntax, see the [Ruby File.fnmatch documentation](https://ruby-doc.org/core-2.5.1/File.html#method-c-fnmatch).
    */
    private string $name;
    /**
    * The name pattern that branches must match in order to deploy to the environment.
    
    Wildcard characters will not match `/`. For example, to match branches that begin with `release/` and contain an additional single slash, use `release/*/*`.
    For more information about pattern matching syntax, see the [Ruby File.fnmatch documentation](https://ruby-doc.org/core-2.5.1/File.html#method-c-fnmatch).
    */
    public function name() : string
    {
        return $this->name;
    }
}
