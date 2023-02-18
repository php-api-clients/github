<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repos\CreateDeployKey\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"required":["key"],"type":"object","properties":{"title":{"type":"string","description":"A name for the key."},"key":{"type":"string","description":"The contents of the key."},"read_only":{"type":"boolean","description":"If `true`, the key will only be able to read repository contents. Otherwise, the key will be able to read and write.  \\n  \\nDeploy keys with write access can perform the same actions as an organization member with admin access, or a collaborator on a personal repository. For more information, see \\"[Repository permission levels for an organization](https:\\/\\/docs.github.com\\/articles\\/repository-permission-levels-for-an-organization\\/)\\" and \\"[Permission levels for a user account repository](https:\\/\\/docs.github.com\\/articles\\/permission-levels-for-a-user-account-repository\\/).\\""}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A name for the key.
     */
    public string $title;
    /**
     * The contents of the key.
     */
    public ?string $key;
    /**
     * If `true`, the key will only be able to read repository contents. Otherwise, the key will be able to read and write.

    Deploy keys with write access can perform the same actions as an organization member with admin access, or a collaborator on a personal repository. For more information, see "[Repository permission levels for an organization](https://docs.github.com/articles/repository-permission-levels-for-an-organization/)" and "[Permission levels for a user account repository](https://docs.github.com/articles/permission-levels-for-a-user-account-repository/)."
     */
    public bool $read_only;

    public function __construct(string $title, string $key, bool $read_only)
    {
        $this->title     = $title;
        $this->key       = $key;
        $this->read_only = $read_only;
    }
}
