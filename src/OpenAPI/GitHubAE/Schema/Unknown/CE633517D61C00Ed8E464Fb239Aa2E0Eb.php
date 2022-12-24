<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CE633517D61C00Ed8E464Fb239Aa2E0Eb
{
    public const SCHEMA_JSON = '{"required":["key"],"type":"object","properties":{"title":{"type":"string","description":"A name for the key."},"key":{"type":"string","description":"The contents of the key."},"read_only":{"type":"boolean","description":"If `true`, the key will only be able to read repository contents. Otherwise, the key will be able to read and write.  \\n  \\nDeploy keys with write access can perform the same actions as an organization member with admin access, or a collaborator on a personal repository. For more information, see \\"[Repository permission levels for an organization](https:\\/\\/docs.github.com\\/github-ae@latest\\/articles\\/repository-permission-levels-for-an-organization\\/)\\" and \\"[Permission levels for a user account repository](https:\\/\\/docs.github.com\\/github-ae@latest\\/articles\\/permission-levels-for-a-user-account-repository\\/).\\""}}}';
    public const SCHEMA_TITLE = 'c_e633517d61c00ed8e464fb239aa2e0eb';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A name for the key.
     */
    private ?string $title = null;
    /**
     * The contents of the key.
     */
    private string $key;
    /**
    * If `true`, the key will only be able to read repository contents. Otherwise, the key will be able to read and write.  
     
    Deploy keys with write access can perform the same actions as an organization member with admin access, or a collaborator on a personal repository. For more information, see "[Repository permission levels for an organization](https://docs.github.com/github-ae@latest/articles/repository-permission-levels-for-an-organization/)" and "[Permission levels for a user account repository](https://docs.github.com/github-ae@latest/articles/permission-levels-for-a-user-account-repository/)."
    */
    private ?bool $read_only = null;
    /**
     * A name for the key.
     */
    public function title() : ?string
    {
        return $this->title;
    }
    /**
     * The contents of the key.
     */
    public function key() : string
    {
        return $this->key;
    }
    /**
    * If `true`, the key will only be able to read repository contents. Otherwise, the key will be able to read and write.  
     
    Deploy keys with write access can perform the same actions as an organization member with admin access, or a collaborator on a personal repository. For more information, see "[Repository permission levels for an organization](https://docs.github.com/github-ae@latest/articles/repository-permission-levels-for-an-organization/)" and "[Permission levels for a user account repository](https://docs.github.com/github-ae@latest/articles/permission-levels-for-a-user-account-repository/)."
    */
    public function read_only() : ?bool
    {
        return $this->read_only;
    }
}
