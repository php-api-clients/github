<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Pulls\CreateReview\Request\Applicationjson;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Comments
{
    public const SCHEMA_JSON = '{"required":["path","body"],"type":"object","properties":{"path":{"type":"string","description":"The relative path to the file that necessitates a review comment."},"position":{"type":"integer","description":"The position in the diff where you want to add a review comment. Note this value is not the same as the line number in the file. For help finding the position value, read the note below."},"body":{"type":"string","description":"Text of the review comment."},"line":{"type":"integer","examples":[28]},"side":{"type":"string","examples":["RIGHT"]},"start_line":{"type":"integer","examples":[26]},"start_side":{"type":"string","examples":["LEFT"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"path":"generated_path","position":13,"body":"generated_body","line":28,"side":"RIGHT","start_line":26,"start_side":"LEFT"}';
    /**
     * path: The relative path to the file that necessitates a review comment.
     * position: The position in the diff where you want to add a review comment. Note this value is not the same as the line number in the file. For help finding the position value, read the note below.
     * body: Text of the review comment.
     */
    public function __construct(public string $path, public ?int $position, public string $body, public ?int $line, public ?string $side, public ?int $start_line, public ?string $start_side)
    {
    }
}
