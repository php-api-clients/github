<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C8Cceb7088Bacd2Cdb017Fbdebe3Cfc25
{
    public const SCHEMA_JSON = '{"required":["tree"],"type":"object","properties":{"tree":{"type":"array","items":{"type":"object","properties":{"path":{"type":"string","description":"The file referenced in the tree."},"mode":{"enum":["100644","100755","040000","160000","120000"],"type":"string","description":"The file mode; one of `100644` for file (blob), `100755` for executable (blob), `040000` for subdirectory (tree), `160000` for submodule (commit), or `120000` for a blob that specifies the path of a symlink."},"type":{"enum":["blob","tree","commit"],"type":"string","description":"Either `blob`, `tree`, or `commit`."},"sha":{"type":["string","null"],"description":"The SHA1 checksum ID of the object in the tree. Also called `tree.sha`. If the value is `null` then the file will be deleted.  \\n  \\n**Note:** Use either `tree.sha` or `content` to specify the contents of the entry. Using both `tree.sha` and `content` will return an error."},"content":{"type":"string","description":"The content you want this file to have. GitHub will write this blob out and use that SHA for this entry. Use either this, or `tree.sha`.  \\n  \\n**Note:** Use either `tree.sha` or `content` to specify the contents of the entry. Using both `tree.sha` and `content` will return an error."}}},"description":"Objects (of `path`, `mode`, `type`, and `sha`) specifying a tree structure."},"base_tree":{"type":"string","description":"The SHA1 of an existing Git tree object which will be used as the base for the new tree. If provided, a new Git tree object will be created from entries in the Git tree object pointed to by `base_tree` and entries defined in the `tree` parameter. Entries defined in the `tree` parameter will overwrite items from `base_tree` with the same `path`. If you\'re creating new changes on a branch, then normally you\'d set `base_tree` to the SHA1 of the Git tree object of the current latest commit on the branch you\'re working on.\\nIf not provided, GitHub will create a new Git tree object from only the entries defined in the `tree` parameter. If you create a new commit pointing to such a tree, then all files which were a part of the parent commit\'s tree and were not defined in the `tree` parameter will be listed as deleted by the new commit.\\n"}}}';
    public const SCHEMA_TITLE = 'c_8cceb7088bacd2cdb017fbdebe3cfc25';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Objects (of `path`, `mode`, `type`, and `sha`) specifying a tree structure.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C8Cceb7088Bacd2Cdb017Fbdebe3Cfc25\Tree>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C8Cceb7088Bacd2Cdb017Fbdebe3Cfc25\Tree::class)
     */
    private array $tree = array();
    /**
     * The SHA1 of an existing Git tree object which will be used as the base for the new tree. If provided, a new Git tree object will be created from entries in the Git tree object pointed to by `base_tree` and entries defined in the `tree` parameter. Entries defined in the `tree` parameter will overwrite items from `base_tree` with the same `path`. If you're creating new changes on a branch, then normally you'd set `base_tree` to the SHA1 of the Git tree object of the current latest commit on the branch you're working on.
    If not provided, GitHub will create a new Git tree object from only the entries defined in the `tree` parameter. If you create a new commit pointing to such a tree, then all files which were a part of the parent commit's tree and were not defined in the `tree` parameter will be listed as deleted by the new commit.
    */
    private ?string $base_tree = null;
    /**
     * Objects (of `path`, `mode`, `type`, and `sha`) specifying a tree structure.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C8Cceb7088Bacd2Cdb017Fbdebe3Cfc25\Tree>
     */
    public function tree() : array
    {
        return $this->tree;
    }
    /**
     * The SHA1 of an existing Git tree object which will be used as the base for the new tree. If provided, a new Git tree object will be created from entries in the Git tree object pointed to by `base_tree` and entries defined in the `tree` parameter. Entries defined in the `tree` parameter will overwrite items from `base_tree` with the same `path`. If you're creating new changes on a branch, then normally you'd set `base_tree` to the SHA1 of the Git tree object of the current latest commit on the branch you're working on.
    If not provided, GitHub will create a new Git tree object from only the entries defined in the `tree` parameter. If you create a new commit pointing to such a tree, then all files which were a part of the parent commit's tree and were not defined in the `tree` parameter will be listed as deleted by the new commit.
    */
    public function base_tree() : ?string
    {
        return $this->base_tree;
    }
}
