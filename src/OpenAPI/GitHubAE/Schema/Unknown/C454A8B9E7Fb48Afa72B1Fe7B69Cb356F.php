<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C454A8B9E7Fb48Afa72B1Fe7B69Cb356F
{
    public const SCHEMA_JSON = '{"type":"array","items":{"required":["type","details"],"type":"object","properties":{"type":{"enum":["commit","issue_title","issue_body","issue_comment"],"type":"string","description":"The location type. Because secrets may be found in different types of resources (ie. code, comments, issues), this field identifies the type of resource where the secret was found.","examples":["commit"]},"details":{"oneOf":[{"required":["path","start_line","end_line","start_column","end_column","blob_sha","blob_url","commit_sha","commit_url"],"type":"object","properties":{"path":{"type":"string","description":"The file path in the repository","examples":["\\/example\\/secrets.txt"]},"start_line":{"type":"number","description":"Line number at which the secret starts in the file"},"end_line":{"type":"number","description":"Line number at which the secret ends in the file"},"start_column":{"type":"number","description":"The column at which the secret starts within the start line when the file is interpreted as 8BIT ASCII"},"end_column":{"type":"number","description":"The column at which the secret ends within the end line when the file is interpreted as 8BIT ASCII"},"blob_sha":{"type":"string","description":"SHA-1 hash ID of the associated blob","examples":["af5626b4a114abcb82d63db7c8082c3c4756e51b"]},"blob_url":{"type":"string","description":"The API URL to get the associated blob resource"},"commit_sha":{"type":"string","description":"SHA-1 hash ID of the associated commit","examples":["af5626b4a114abcb82d63db7c8082c3c4756e51b"]},"commit_url":{"type":"string","description":"The API URL to get the associated commit resource"}},"description":"Represents a \'commit\' secret scanning location type. This location type shows that a secret was detected inside a commit to a repository."},{"required":["issue_title_url"],"type":"object","properties":{"issue_title_url":{"type":"string","description":"The API URL to get the issue where the secret was detected.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/1347"]}},"description":"Represents an \'issue_title\' secret scanning location type. This location type shows that a secret was detected in the title of an issue."},{"required":["issue_body_url"],"type":"object","properties":{"issue_body_url":{"type":"string","description":"The API URL to get the issue where the secret was detected.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/1347"]}},"description":"Represents an \'issue_body\' secret scanning location type. This location type shows that a secret was detected in the body of an issue."},{"required":["issue_comment_url"],"type":"object","properties":{"issue_comment_url":{"type":"string","description":"The API URL to get the issue comment where the secret was detected.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments\\/1081119451"]}},"description":"Represents an \'issue_comment\' secret scanning location type. This location type shows that a secret was detected in a comment on an issue."}]}}},"description":"List of locations where the secret was detected"}';
    public const SCHEMA_TITLE = 'c_454a8b9e7fb48afa72b1fe7b69cb356f';
    public const SCHEMA_DESCRIPTION = 'List of locations where the secret was detected';
}