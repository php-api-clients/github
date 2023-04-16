<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Git\CreateTree\Request\Applicationjson;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class Tree
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"path":{"type":"string","description":"The file referenced in the tree."},"mode":{"enum":["100644","100755","040000","160000","120000"],"type":"string","description":"The file mode; one of `100644` for file (blob), `100755` for executable (blob), `040000` for subdirectory (tree), `160000` for submodule (commit), or `120000` for a blob that specifies the path of a symlink."},"type":{"enum":["blob","tree","commit"],"type":"string","description":"Either `blob`, `tree`, or `commit`."},"sha":{"type":["string","null"],"description":"The SHA1 checksum ID of the object in the tree. Also called `tree.sha`. If the value is `null` then the file will be deleted.  \\n  \\n**Note:** Use either `tree.sha` or `content` to specify the contents of the entry. Using both `tree.sha` and `content` will return an error."},"content":{"type":"string","description":"The content you want this file to have. GitHub will write this blob out and use that SHA for this entry. Use either this, or `tree.sha`.  \\n  \\n**Note:** Use either `tree.sha` or `content` to specify the contents of the entry. Using both `tree.sha` and `content` will return an error."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"path":"generated_path_null","mode":"100644","type":"blob","sha":"generated_sha_null","content":"generated_content_null"}';
    /**
     * path: The file referenced in the tree.
     * mode: The file mode; one of `100644` for file (blob), `100755` for executable (blob), `040000` for subdirectory (tree), `160000` for submodule (commit), or `120000` for a blob that specifies the path of a symlink.
     * type: Either `blob`, `tree`, or `commit`.
     * sha: The SHA1 checksum ID of the object in the tree. Also called `tree.sha`. If the value is `null` then the file will be deleted.  
     **Note:** Use either `tree.sha` or `content` to specify the contents of the entry. Using both `tree.sha` and `content` will return an error.
     * content: The content you want this file to have. GitHub will write this blob out and use that SHA for this entry. Use either this, or `tree.sha`.  
     **Note:** Use either `tree.sha` or `content` to specify the contents of the entry. Using both `tree.sha` and `content` will return an error.
     */
    public function __construct(public ?string $path, public ?string $mode, public ?string $type, public ?string $sha, public ?string $content)
    {
    }
}
