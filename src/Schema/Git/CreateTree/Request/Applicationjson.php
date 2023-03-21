<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Git\CreateTree\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["tree"],"type":"object","properties":{"tree":{"type":"array","items":{"type":"object","properties":{"path":{"type":"string","description":"The file referenced in the tree."},"mode":{"enum":["100644","100755","040000","160000","120000"],"type":"string","description":"The file mode; one of `100644` for file (blob), `100755` for executable (blob), `040000` for subdirectory (tree), `160000` for submodule (commit), or `120000` for a blob that specifies the path of a symlink."},"type":{"enum":["blob","tree","commit"],"type":"string","description":"Either `blob`, `tree`, or `commit`."},"sha":{"type":["string","null"],"description":"The SHA1 checksum ID of the object in the tree. Also called `tree.sha`. If the value is `null` then the file will be deleted.  \\n  \\n**Note:** Use either `tree.sha` or `content` to specify the contents of the entry. Using both `tree.sha` and `content` will return an error."},"content":{"type":"string","description":"The content you want this file to have. GitHub will write this blob out and use that SHA for this entry. Use either this, or `tree.sha`.  \\n  \\n**Note:** Use either `tree.sha` or `content` to specify the contents of the entry. Using both `tree.sha` and `content` will return an error."}}},"description":"Objects (of `path`, `mode`, `type`, and `sha`) specifying a tree structure."},"base_tree":{"type":"string","description":"The SHA1 of an existing Git tree object which will be used as the base for the new tree. If provided, a new Git tree object will be created from entries in the Git tree object pointed to by `base_tree` and entries defined in the `tree` parameter. Entries defined in the `tree` parameter will overwrite items from `base_tree` with the same `path`. If you\'re creating new changes on a branch, then normally you\'d set `base_tree` to the SHA1 of the Git tree object of the current latest commit on the branch you\'re working on.\\nIf not provided, GitHub will create a new Git tree object from only the entries defined in the `tree` parameter. If you create a new commit pointing to such a tree, then all files which were a part of the parent commit\'s tree and were not defined in the `tree` parameter will be listed as deleted by the new commit.\\n"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"tree":[{"path":"generated_path_null","mode":"generated_mode_null","type":"generated_type_null","sha":"generated_sha_null","content":"generated_content_null"}],"base_tree":"generated_base_tree_null"}';
    /**
     * tree: Objects (of `path`, `mode`, `type`, and `sha`) specifying a tree structure.
     * @param array<\ApiClients\Client\GitHub\Schema\Git\CreateTree\Request\Applicationjson\Tree> $tree
     * base_tree: The SHA1 of an existing Git tree object which will be used as the base for the new tree. If provided, a new Git tree object will be created from entries in the Git tree object pointed to by `base_tree` and entries defined in the `tree` parameter. Entries defined in the `tree` parameter will overwrite items from `base_tree` with the same `path`. If you're creating new changes on a branch, then normally you'd set `base_tree` to the SHA1 of the Git tree object of the current latest commit on the branch you're working on.
    If not provided, GitHub will create a new Git tree object from only the entries defined in the `tree` parameter. If you create a new commit pointing to such a tree, then all files which were a part of the parent commit's tree and were not defined in the `tree` parameter will be listed as deleted by the new commit.
    */
    public function __construct(#[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Git\CreateTree\Request\Applicationjson\Tree::class)] public array $tree, public ?string $base_tree)
    {
    }
}
