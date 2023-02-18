<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Pulls\CreateReviewComment\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"required":["body","commit_id","path","line"],"type":"object","properties":{"body":{"type":"string","description":"The text of the review comment."},"commit_id":{"type":"string","description":"The SHA of the commit needing a comment. Not using the latest commit SHA may render your comment outdated if a subsequent commit modifies the line you specify as the `position`."},"path":{"type":"string","description":"The relative path to the file that necessitates a comment."},"position":{"type":"integer","description":"**This parameter is deprecated. Use `line` instead**. The position in the diff where you want to add a review comment. Note this value is not the same as the line number in the file. For help finding the position value, read the note above.","deprecated":true,"x-github":{"deprecationDate":"2022-11-01"}},"side":{"enum":["LEFT","RIGHT"],"type":"string","description":"In a split diff view, the side of the diff that the pull request\'s changes appear on. Can be `LEFT` or `RIGHT`. Use `LEFT` for deletions that appear in red. Use `RIGHT` for additions that appear in green or unchanged lines that appear in white and are shown for context. For a multi-line comment, side represents whether the last line of the comment range is a deletion or addition. For more information, see \\"[Diff view options](https:\\/\\/docs.github.com\\/articles\\/about-comparing-branches-in-pull-requests#diff-view-options)\\" in the GitHub Help documentation."},"line":{"type":"integer","description":"The line of the blob in the pull request diff that the comment applies to. For a multi-line comment, the last line of the range that your comment applies to."},"start_line":{"type":"integer","description":"**Required when using multi-line comments unless using `in_reply_to`**. The `start_line` is the first line in the pull request diff that your multi-line comment applies to. To learn more about multi-line comments, see \\"[Commenting on a pull request](https:\\/\\/docs.github.com\\/articles\\/commenting-on-a-pull-request#adding-line-comments-to-a-pull-request)\\" in the GitHub Help documentation."},"start_side":{"enum":["LEFT","RIGHT","side"],"type":"string","description":"**Required when using multi-line comments unless using `in_reply_to`**. The `start_side` is the starting side of the diff that the comment applies to. Can be `LEFT` or `RIGHT`. To learn more about multi-line comments, see \\"[Commenting on a pull request](https:\\/\\/docs.github.com\\/articles\\/commenting-on-a-pull-request#adding-line-comments-to-a-pull-request)\\" in the GitHub Help documentation. See `side` in this table for additional context."},"in_reply_to":{"type":"integer","description":"The ID of the review comment to reply to. To find the ID of a review comment with [\\"List review comments on a pull request\\"](#list-review-comments-on-a-pull-request). When specified, all parameters other than `body` in the request body are ignored.","examples":[2]}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The text of the review comment.
     */
    public ?string $body;
    /**
     * The SHA of the commit needing a comment. Not using the latest commit SHA may render your comment outdated if a subsequent commit modifies the line you specify as the `position`.
     */
    public ?string $commit_id;
    /**
     * The relative path to the file that necessitates a comment.
     */
    public ?string $path;
    /**
     * **This parameter is deprecated. Use `line` instead**. The position in the diff where you want to add a review comment. Note this value is not the same as the line number in the file. For help finding the position value, read the note above.
     */
    public int $position;
    /**
     * In a split diff view, the side of the diff that the pull request's changes appear on. Can be `LEFT` or `RIGHT`. Use `LEFT` for deletions that appear in red. Use `RIGHT` for additions that appear in green or unchanged lines that appear in white and are shown for context. For a multi-line comment, side represents whether the last line of the comment range is a deletion or addition. For more information, see "[Diff view options](https://docs.github.com/articles/about-comparing-branches-in-pull-requests#diff-view-options)" in the GitHub Help documentation.
     */
    public string $side;
    /**
     * The line of the blob in the pull request diff that the comment applies to. For a multi-line comment, the last line of the range that your comment applies to.
     */
    public ?int $line;
    /**
     * **Required when using multi-line comments unless using `in_reply_to`**. The `start_line` is the first line in the pull request diff that your multi-line comment applies to. To learn more about multi-line comments, see "[Commenting on a pull request](https://docs.github.com/articles/commenting-on-a-pull-request#adding-line-comments-to-a-pull-request)" in the GitHub Help documentation.
     */
    public int $start_line;
    /**
     * **Required when using multi-line comments unless using `in_reply_to`**. The `start_side` is the starting side of the diff that the comment applies to. Can be `LEFT` or `RIGHT`. To learn more about multi-line comments, see "[Commenting on a pull request](https://docs.github.com/articles/commenting-on-a-pull-request#adding-line-comments-to-a-pull-request)" in the GitHub Help documentation. See `side` in this table for additional context.
     */
    public string $start_side;
    /**
     * The ID of the review comment to reply to. To find the ID of a review comment with ["List review comments on a pull request"](#list-review-comments-on-a-pull-request). When specified, all parameters other than `body` in the request body are ignored.
     */
    public int $in_reply_to;

    public function __construct(string $body, string $commit_id, string $path, int $position, string $side, int $line, int $start_line, string $start_side, int $in_reply_to)
    {
        $this->body        = $body;
        $this->commit_id   = $commit_id;
        $this->path        = $path;
        $this->position    = $position;
        $this->side        = $side;
        $this->line        = $line;
        $this->start_line  = $start_line;
        $this->start_side  = $start_side;
        $this->in_reply_to = $in_reply_to;
    }
}
