<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json;

final class Tree
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"path":{"type":"string","description":"The file referenced in the tree."},"mode":{"enum":["100644","100755","040000","160000","120000"],"type":"string","description":"The file mode; one of `100644` for file (blob), `100755` for executable (blob), `040000` for subdirectory (tree), `160000` for submodule (commit), or `120000` for a blob that specifies the path of a symlink."},"type":{"enum":["blob","tree","commit"],"type":"string","description":"Either `blob`, `tree`, or `commit`."},"sha":{"type":["string","null"],"description":"The SHA1 checksum ID of the object in the tree. Also called `tree.sha`. If the value is `null` then the file will be deleted.  \\n  \\n**Note:** Use either `tree.sha` or `content` to specify the contents of the entry. Using both `tree.sha` and `content` will return an error."},"content":{"type":"string","description":"The content you want this file to have. GitHub will write this blob out and use that SHA for this entry. Use either this, or `tree.sha`.  \\n  \\n**Note:** Use either `tree.sha` or `content` to specify the contents of the entry. Using both `tree.sha` and `content` will return an error."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Json\\Tree';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The file referenced in the tree.
     */
    public readonly string $path;
    /**
     * The file mode; one of `100644` for file (blob), `100755` for executable (blob), `040000` for subdirectory (tree), `160000` for submodule (commit), or `120000` for a blob that specifies the path of a symlink.
     */
    public readonly string $mode;
    /**
     * Either `blob`, `tree`, or `commit`.
     */
    public readonly string $type;
    /**
     * The SHA1 checksum ID of the object in the tree. Also called `tree.sha`. If the value is `null` then the file will be deleted.  
     **Note:** Use either `tree.sha` or `content` to specify the contents of the entry. Using both `tree.sha` and `content` will return an error.
     */
    public readonly ?string $sha;
    /**
     * The content you want this file to have. GitHub will write this blob out and use that SHA for this entry. Use either this, or `tree.sha`.  
     **Note:** Use either `tree.sha` or `content` to specify the contents of the entry. Using both `tree.sha` and `content` will return an error.
     */
    public readonly string $content;
    public function __construct(string $path, string $mode, string $type, string $sha, string $content)
    {
        $this->path = $path;
        $this->mode = $mode;
        $this->type = $type;
        $this->sha = $sha;
        $this->content = $content;
    }
}
