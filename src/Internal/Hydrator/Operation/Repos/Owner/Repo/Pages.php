<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo;

use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\Page;
use ApiClients\Client\GitHub\Schema\PagesHttpsCertificate;
use ApiClients\Client\GitHub\Schema\PagesSourceHash;
use ApiClients\Client\GitHub\Schema\ScimError;
use ApiClients\Client\GitHub\Schema\ValidationError;
use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;
use LogicException;
use Throwable;

use function array_pop;
use function assert;
use function count;
use function is_a;
use function is_array;

class Pages implements ObjectMapper
{
    private array $hydrationStack = [];

    public function __construct()
    {
    }

    /**
     * @param class-string<T> $className
     *
     * @return T
     *
     * @template T of object
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match ($className) {
            'ApiClients\Client\GitHub\Schema\Page' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Page($payload),
                'ApiClients\Client\GitHub\Schema\PagesSourceHash' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesSourceHash($payload),
                'ApiClients\Client\GitHub\Schema\PagesHttpsCertificate' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesHttpsCertificate($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHub\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($payload),
                'ApiClients\Client\GitHub\Schema\ScimError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ScimError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Page(array $payload): Page
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['cname'] ?? null;

            if ($value === null) {
                $properties['cname'] = null;
                goto after_cname;
            }

            $properties['cname'] = $value;

            after_cname:

            $value = $payload['protected_domain_state'] ?? null;

            if ($value === null) {
                $properties['protectedDomainState'] = null;
                goto after_protectedDomainState;
            }

            $properties['protectedDomainState'] = $value;

            after_protectedDomainState:

            $value = $payload['pending_domain_unverified_at'] ?? null;

            if ($value === null) {
                $properties['pendingDomainUnverifiedAt'] = null;
                goto after_pendingDomainUnverifiedAt;
            }

            $properties['pendingDomainUnverifiedAt'] = $value;

            after_pendingDomainUnverifiedAt:

            $value = $payload['custom_404'] ?? null;

            if ($value === null) {
                $missingFields[] = 'custom_404';
                goto after_customFourHundredFour;
            }

            $properties['customFourHundredFour'] = $value;

            after_customFourHundredFour:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['build_type'] ?? null;

            if ($value === null) {
                $properties['buildType'] = null;
                goto after_buildType;
            }

            $properties['buildType'] = $value;

            after_buildType:

            $value = $payload['source'] ?? null;

            if ($value === null) {
                $properties['source'] = null;
                goto after_source;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'source';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesSourceHash($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['source'] = $value;

            after_source:

            $value = $payload['public'] ?? null;

            if ($value === null) {
                $missingFields[] = 'public';
                goto after_public;
            }

            $properties['public'] = $value;

            after_public:

            $value = $payload['https_certificate'] ?? null;

            if ($value === null) {
                $properties['httpsCertificate'] = null;
                goto after_httpsCertificate;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'httpsCertificate';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesHttpsCertificate($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['httpsCertificate'] = $value;

            after_httpsCertificate:

            $value = $payload['https_enforced'] ?? null;

            if ($value === null) {
                $properties['httpsEnforced'] = null;
                goto after_httpsEnforced;
            }

            $properties['httpsEnforced'] = $value;

            after_httpsEnforced:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Page', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Page::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Page(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Page', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesSourceHash(array $payload): PagesSourceHash
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['branch'] ?? null;

            if ($value === null) {
                $missingFields[] = 'branch';
                goto after_branch;
            }

            $properties['branch'] = $value;

            after_branch:

            $value = $payload['path'] ?? null;

            if ($value === null) {
                $missingFields[] = 'path';
                goto after_path;
            }

            $properties['path'] = $value;

            after_path:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PagesSourceHash', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(PagesSourceHash::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new PagesSourceHash(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PagesSourceHash', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesHttpsCertificate(array $payload): PagesHttpsCertificate
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['state'] ?? null;

            if ($value === null) {
                $missingFields[] = 'state';
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $missingFields[] = 'description';
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['domains'] ?? null;

            if ($value === null) {
                $missingFields[] = 'domains';
                goto after_domains;
            }

            $properties['domains'] = $value;

            after_domains:

            $value = $payload['expires_at'] ?? null;

            if ($value === null) {
                $properties['expiresAt'] = null;
                goto after_expiresAt;
            }

            $properties['expiresAt'] = $value;

            after_expiresAt:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PagesHttpsCertificate', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(PagesHttpsCertificate::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new PagesHttpsCertificate(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PagesHttpsCertificate', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(array $payload): BasicError
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BasicError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError(array $payload): ValidationError
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $missingFields[] = 'message';
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'documentation_url';
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['errors'] ?? null;

            if ($value === null) {
                $properties['errors'] = null;
                goto after_errors;
            }

            $properties['errors'] = $value;

            after_errors:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ValidationError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ValidationError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ScimError(array $payload): ScimError
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['detail'] ?? null;

            if ($value === null) {
                $properties['detail'] = null;
                goto after_detail;
            }

            $properties['detail'] = $value;

            after_detail:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['scim_type'] ?? null;

            if ($value === null) {
                $properties['scimType'] = null;
                goto after_scimType;
            }

            $properties['scimType'] = $value;

            after_scimType:

            $value = $payload['schemas'] ?? null;

            if ($value === null) {
                $properties['schemas'] = null;
                goto after_schemas;
            }

            $properties['schemas'] = $value;

            after_schemas:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ScimError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ScimError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ScimError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ScimError', $exception, stack: $this->hydrationStack);
        }
    }

    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new LogicException('No type mapped for object of class: ' . $object::class);
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, $object::class);
    }

    /**
     * @param T               $object
     * @param class-string<T> $className
     *
     * @template T
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match ($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHub\Schema\Page' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Page($object),
                'ApiClients\Client\GitHub\Schema\PagesSourceHash' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesSourceHash($object),
                'ApiClients\Client\GitHub\Schema\PagesHttpsCertificate' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesHttpsCertificate($object),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\GitHub\Schema\ValidationError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($object),
                'ApiClients\Client\GitHub\Schema\ScimError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ScimError($object),
                default => throw new LogicException('No serialization defined for $className'),
            };
        } catch (Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }

    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeArrayItems(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeUuidToString(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Page(mixed $object): mixed
    {
        assert($object instanceof Page);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }

        after_status:        $result['status'] = $status;

        $cname = $object->cname;

        if ($cname === null) {
            goto after_cname;
        }

        after_cname:        $result['cname'] = $cname;

        $protectedDomainState = $object->protectedDomainState;

        if ($protectedDomainState === null) {
            goto after_protectedDomainState;
        }

        after_protectedDomainState:        $result['protected_domain_state'] = $protectedDomainState;

        $pendingDomainUnverifiedAt = $object->pendingDomainUnverifiedAt;

        if ($pendingDomainUnverifiedAt === null) {
            goto after_pendingDomainUnverifiedAt;
        }

        after_pendingDomainUnverifiedAt:        $result['pending_domain_unverified_at'] = $pendingDomainUnverifiedAt;

        $customFourHundredFour                                    = $object->customFourHundredFour;
        after_customFourHundredFour:        $result['custom_404'] = $customFourHundredFour;

        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }

        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $buildType = $object->buildType;

        if ($buildType === null) {
            goto after_buildType;
        }

        after_buildType:        $result['build_type'] = $buildType;

        $source = $object->source;

        if ($source === null) {
            goto after_source;
        }

        $source                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesSourceHash($source);
        after_source:        $result['source'] = $source;

        $public                                = $object->public;
        after_public:        $result['public'] = $public;

        $httpsCertificate = $object->httpsCertificate;

        if ($httpsCertificate === null) {
            goto after_httpsCertificate;
        }

        $httpsCertificate                                           = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesHttpsCertificate($httpsCertificate);
        after_httpsCertificate:        $result['https_certificate'] = $httpsCertificate;

        $httpsEnforced = $object->httpsEnforced;

        if ($httpsEnforced === null) {
            goto after_httpsEnforced;
        }

        after_httpsEnforced:        $result['https_enforced'] = $httpsEnforced;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesSourceHash(mixed $object): mixed
    {
        assert($object instanceof PagesSourceHash);
        $result = [];

        $branch                                = $object->branch;
        after_branch:        $result['branch'] = $branch;

        $path                              = $object->path;
        after_path:        $result['path'] = $path;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PagesHttpsCertificate(mixed $object): mixed
    {
        assert($object instanceof PagesHttpsCertificate);
        $result = [];

        $state                               = $object->state;
        after_state:        $result['state'] = $state;

        $description                                     = $object->description;
        after_description:        $result['description'] = $description;

        $domains = $object->domains;
        static $domainsSerializer0;

        if ($domainsSerializer0 === null) {
            $domainsSerializer0 = new SerializeArrayItems(...[]);
        }

        $domains                                 = $domainsSerializer0->serialize($domains, $this);
        after_domains:        $result['domains'] = $domains;

        $expiresAt = $object->expiresAt;

        if ($expiresAt === null) {
            goto after_expiresAt;
        }

        after_expiresAt:        $result['expires_at'] = $expiresAt;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        assert($object instanceof BasicError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }

        after_message:        $result['message'] = $message;

        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }

        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }

        after_status:        $result['status'] = $status;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError(mixed $object): mixed
    {
        assert($object instanceof ValidationError);
        $result = [];

        $message                                 = $object->message;
        after_message:        $result['message'] = $message;

        $documentationUrl                                           = $object->documentationUrl;
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        $errors = $object->errors;

        if ($errors === null) {
            goto after_errors;
        }

        static $errorsSerializer0;

        if ($errorsSerializer0 === null) {
            $errorsSerializer0 = new SerializeArrayItems(...[]);
        }

        $errors                                = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ScimError(mixed $object): mixed
    {
        assert($object instanceof ScimError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }

        after_message:        $result['message'] = $message;

        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }

        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        $detail = $object->detail;

        if ($detail === null) {
            goto after_detail;
        }

        after_detail:        $result['detail'] = $detail;

        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }

        after_status:        $result['status'] = $status;

        $scimType = $object->scimType;

        if ($scimType === null) {
            goto after_scimType;
        }

        after_scimType:        $result['scim_type'] = $scimType;

        $schemas = $object->schemas;

        if ($schemas === null) {
            goto after_schemas;
        }

        static $schemasSerializer0;

        if ($schemasSerializer0 === null) {
            $schemasSerializer0 = new SerializeArrayItems(...[]);
        }

        $schemas                                 = $schemasSerializer0->serialize($schemas, $this);
        after_schemas:        $result['schemas'] = $schemas;

        return $result;
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     *
     * @template T
     */
    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            yield $index => $this->hydrateObject($className, $payload);
        }
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     *
     * @template T
     */
    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            yield $index => $this->serializeObject($object);
        }
    }
}
