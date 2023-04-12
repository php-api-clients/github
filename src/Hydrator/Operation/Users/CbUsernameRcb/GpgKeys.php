<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Users\CbUsernameRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class GpgKeys implements ObjectMapper
{
    private array $hydrationStack = [];
    public function __construct() {}

    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match($className) {
            'ApiClients\Client\GitHub\Schema\GpgKey' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey($payload),
                'ApiClients\Client\GitHub\Schema\GpgKey\Emails' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey⚡️Emails($payload),
                'ApiClients\Client\GitHub\Schema\GpgKey\Subkeys' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey⚡️Subkeys($payload),
                'ApiClients\Client\GitHub\Schema\GpgKey\Subkeys\Emails' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey⚡️Subkeys⚡️Emails($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey(array $payload): \ApiClients\Client\GitHub\Schema\GpgKey
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['primary_key_id'] ?? null;

            if ($value === null) {
                $properties['primaryKeyId'] = null;
                goto after_primaryKeyId;
            }

            $properties['primaryKeyId'] = $value;

            after_primaryKeyId:

            $value = $payload['key_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'key_id';
                goto after_keyId;
            }

            $properties['keyId'] = $value;

            after_keyId:

            $value = $payload['public_key'] ?? null;

            if ($value === null) {
                $missingFields[] = 'public_key';
                goto after_publicKey;
            }

            $properties['publicKey'] = $value;

            after_publicKey:

            $value = $payload['emails'] ?? null;

            if ($value === null) {
                $missingFields[] = 'emails';
                goto after_emails;
            }

            static $emailsCaster1;

            if ($emailsCaster1 === null) {
                $emailsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\GpgKey\\Emails',
));
            }

            $value = $emailsCaster1->cast($value, $this);

            $properties['emails'] = $value;

            after_emails:

            $value = $payload['subkeys'] ?? null;

            if ($value === null) {
                $missingFields[] = 'subkeys';
                goto after_subkeys;
            }

            static $subkeysCaster1;

            if ($subkeysCaster1 === null) {
                $subkeysCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\GpgKey\\Subkeys',
));
            }

            $value = $subkeysCaster1->cast($value, $this);

            $properties['subkeys'] = $value;

            after_subkeys:

            $value = $payload['can_sign'] ?? null;

            if ($value === null) {
                $missingFields[] = 'can_sign';
                goto after_canSign;
            }

            $properties['canSign'] = $value;

            after_canSign:

            $value = $payload['can_encrypt_comms'] ?? null;

            if ($value === null) {
                $missingFields[] = 'can_encrypt_comms';
                goto after_canEncryptComms;
            }

            $properties['canEncryptComms'] = $value;

            after_canEncryptComms:

            $value = $payload['can_encrypt_storage'] ?? null;

            if ($value === null) {
                $missingFields[] = 'can_encrypt_storage';
                goto after_canEncryptStorage;
            }

            $properties['canEncryptStorage'] = $value;

            after_canEncryptStorage:

            $value = $payload['can_certify'] ?? null;

            if ($value === null) {
                $missingFields[] = 'can_certify';
                goto after_canCertify;
            }

            $properties['canCertify'] = $value;

            after_canCertify:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['expires_at'] ?? null;

            if ($value === null) {
                $properties['expiresAt'] = null;
                goto after_expiresAt;
            }

            $properties['expiresAt'] = $value;

            after_expiresAt:

            $value = $payload['revoked'] ?? null;

            if ($value === null) {
                $missingFields[] = 'revoked';
                goto after_revoked;
            }

            $properties['revoked'] = $value;

            after_revoked:

            $value = $payload['raw_key'] ?? null;

            if ($value === null) {
                $properties['rawKey'] = null;
                goto after_rawKey;
            }

            $properties['rawKey'] = $value;

            after_rawKey:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GpgKey', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\GpgKey::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\GpgKey(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GpgKey', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey⚡️Emails(array $payload): \ApiClients\Client\GitHub\Schema\GpgKey\Emails
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['verified'] ?? null;

            if ($value === null) {
                $properties['verified'] = null;
                goto after_verified;
            }

            $properties['verified'] = $value;

            after_verified:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GpgKey\Emails', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\GpgKey\Emails::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\GpgKey\Emails(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GpgKey\Emails', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey⚡️Subkeys(array $payload): \ApiClients\Client\GitHub\Schema\GpgKey\Subkeys
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $properties['id'] = null;
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['primary_key_id'] ?? null;

            if ($value === null) {
                $properties['primaryKeyId'] = null;
                goto after_primaryKeyId;
            }

            $properties['primaryKeyId'] = $value;

            after_primaryKeyId:

            $value = $payload['key_id'] ?? null;

            if ($value === null) {
                $properties['keyId'] = null;
                goto after_keyId;
            }

            $properties['keyId'] = $value;

            after_keyId:

            $value = $payload['public_key'] ?? null;

            if ($value === null) {
                $properties['publicKey'] = null;
                goto after_publicKey;
            }

            $properties['publicKey'] = $value;

            after_publicKey:

            $value = $payload['emails'] ?? null;

            if ($value === null) {
                $properties['emails'] = null;
                goto after_emails;
            }

            static $emailsCaster1;

            if ($emailsCaster1 === null) {
                $emailsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\GpgKey\\Subkeys\\Emails',
));
            }

            $value = $emailsCaster1->cast($value, $this);

            $properties['emails'] = $value;

            after_emails:

            $value = $payload['subkeys'] ?? null;

            if ($value === null) {
                $properties['subkeys'] = null;
                goto after_subkeys;
            }

            $properties['subkeys'] = $value;

            after_subkeys:

            $value = $payload['can_sign'] ?? null;

            if ($value === null) {
                $properties['canSign'] = null;
                goto after_canSign;
            }

            $properties['canSign'] = $value;

            after_canSign:

            $value = $payload['can_encrypt_comms'] ?? null;

            if ($value === null) {
                $properties['canEncryptComms'] = null;
                goto after_canEncryptComms;
            }

            $properties['canEncryptComms'] = $value;

            after_canEncryptComms:

            $value = $payload['can_encrypt_storage'] ?? null;

            if ($value === null) {
                $properties['canEncryptStorage'] = null;
                goto after_canEncryptStorage;
            }

            $properties['canEncryptStorage'] = $value;

            after_canEncryptStorage:

            $value = $payload['can_certify'] ?? null;

            if ($value === null) {
                $properties['canCertify'] = null;
                goto after_canCertify;
            }

            $properties['canCertify'] = $value;

            after_canCertify:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['expires_at'] ?? null;

            if ($value === null) {
                $properties['expiresAt'] = null;
                goto after_expiresAt;
            }

            $properties['expiresAt'] = $value;

            after_expiresAt:

            $value = $payload['raw_key'] ?? null;

            if ($value === null) {
                $properties['rawKey'] = null;
                goto after_rawKey;
            }

            $properties['rawKey'] = $value;

            after_rawKey:

            $value = $payload['revoked'] ?? null;

            if ($value === null) {
                $properties['revoked'] = null;
                goto after_revoked;
            }

            $properties['revoked'] = $value;

            after_revoked:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GpgKey\Subkeys', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\GpgKey\Subkeys::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\GpgKey\Subkeys(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GpgKey\Subkeys', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey⚡️Subkeys⚡️Emails(array $payload): \ApiClients\Client\GitHub\Schema\GpgKey\Subkeys\Emails
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['verified'] ?? null;

            if ($value === null) {
                $properties['verified'] = null;
                goto after_verified;
            }

            $properties['verified'] = $value;

            after_verified:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GpgKey\Subkeys\Emails', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\GpgKey\Subkeys\Emails::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\GpgKey\Subkeys\Emails(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GpgKey\Subkeys\Emails', $exception, stack: $this->hydrationStack);
        }
    }
    
    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new \LogicException('No type mapped for object of class: ' . get_class($object));
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, get_class($object));
    }

    /**
     * @template T
     *
     * @param T               $object
     * @param class-string<T> $className
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match($className) {
                'array' => $this->serializeValuearray($object),
            'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
            'DateTime' => $this->serializeValueDateTime($object),
            'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
            'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
            'ApiClients\Client\GitHub\Schema\GpgKey' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey($object),
            'ApiClients\Client\GitHub\Schema\GpgKey\Emails' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey⚡️Emails($object),
            'ApiClients\Client\GitHub\Schema\GpgKey\Subkeys' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey⚡️Subkeys($object),
            'ApiClients\Client\GitHub\Schema\GpgKey\Subkeys\Emails' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey⚡️Subkeys⚡️Emails($object),
                default => throw new \LogicException('No serialization defined for $className'),
            };
        } catch (\Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }
    
    
    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\GpgKey);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $primaryKeyId = $object->primaryKeyId;

        if ($primaryKeyId === null) {
            goto after_primaryKeyId;
        }
        after_primaryKeyId:        $result['primary_key_id'] = $primaryKeyId;

        
        $keyId = $object->keyId;
        after_keyId:        $result['key_id'] = $keyId;

        
        $publicKey = $object->publicKey;
        after_publicKey:        $result['public_key'] = $publicKey;

        
        $emails = $object->emails;
        static $emailsSerializer0;

        if ($emailsSerializer0 === null) {
            $emailsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\GpgKey\\Emails',
));
        }
        
        $emails = $emailsSerializer0->serialize($emails, $this);
        after_emails:        $result['emails'] = $emails;

        
        $subkeys = $object->subkeys;
        static $subkeysSerializer0;

        if ($subkeysSerializer0 === null) {
            $subkeysSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\GpgKey\\Subkeys',
));
        }
        
        $subkeys = $subkeysSerializer0->serialize($subkeys, $this);
        after_subkeys:        $result['subkeys'] = $subkeys;

        
        $canSign = $object->canSign;
        after_canSign:        $result['can_sign'] = $canSign;

        
        $canEncryptComms = $object->canEncryptComms;
        after_canEncryptComms:        $result['can_encrypt_comms'] = $canEncryptComms;

        
        $canEncryptStorage = $object->canEncryptStorage;
        after_canEncryptStorage:        $result['can_encrypt_storage'] = $canEncryptStorage;

        
        $canCertify = $object->canCertify;
        after_canCertify:        $result['can_certify'] = $canCertify;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $expiresAt = $object->expiresAt;

        if ($expiresAt === null) {
            goto after_expiresAt;
        }
        after_expiresAt:        $result['expires_at'] = $expiresAt;

        
        $revoked = $object->revoked;
        after_revoked:        $result['revoked'] = $revoked;

        
        $rawKey = $object->rawKey;

        if ($rawKey === null) {
            goto after_rawKey;
        }
        after_rawKey:        $result['raw_key'] = $rawKey;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey⚡️Emails(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\GpgKey\Emails);
        $result = [];

        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }
        after_email:        $result['email'] = $email;

        
        $verified = $object->verified;

        if ($verified === null) {
            goto after_verified;
        }
        after_verified:        $result['verified'] = $verified;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey⚡️Subkeys(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\GpgKey\Subkeys);
        $result = [];

        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $primaryKeyId = $object->primaryKeyId;

        if ($primaryKeyId === null) {
            goto after_primaryKeyId;
        }
        after_primaryKeyId:        $result['primary_key_id'] = $primaryKeyId;

        
        $keyId = $object->keyId;

        if ($keyId === null) {
            goto after_keyId;
        }
        after_keyId:        $result['key_id'] = $keyId;

        
        $publicKey = $object->publicKey;

        if ($publicKey === null) {
            goto after_publicKey;
        }
        after_publicKey:        $result['public_key'] = $publicKey;

        
        $emails = $object->emails;

        if ($emails === null) {
            goto after_emails;
        }
        static $emailsSerializer0;

        if ($emailsSerializer0 === null) {
            $emailsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\GpgKey\\Subkeys\\Emails',
));
        }
        
        $emails = $emailsSerializer0->serialize($emails, $this);
        after_emails:        $result['emails'] = $emails;

        
        $subkeys = $object->subkeys;

        if ($subkeys === null) {
            goto after_subkeys;
        }
        static $subkeysSerializer0;

        if ($subkeysSerializer0 === null) {
            $subkeysSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $subkeys = $subkeysSerializer0->serialize($subkeys, $this);
        after_subkeys:        $result['subkeys'] = $subkeys;

        
        $canSign = $object->canSign;

        if ($canSign === null) {
            goto after_canSign;
        }
        after_canSign:        $result['can_sign'] = $canSign;

        
        $canEncryptComms = $object->canEncryptComms;

        if ($canEncryptComms === null) {
            goto after_canEncryptComms;
        }
        after_canEncryptComms:        $result['can_encrypt_comms'] = $canEncryptComms;

        
        $canEncryptStorage = $object->canEncryptStorage;

        if ($canEncryptStorage === null) {
            goto after_canEncryptStorage;
        }
        after_canEncryptStorage:        $result['can_encrypt_storage'] = $canEncryptStorage;

        
        $canCertify = $object->canCertify;

        if ($canCertify === null) {
            goto after_canCertify;
        }
        after_canCertify:        $result['can_certify'] = $canCertify;

        
        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $expiresAt = $object->expiresAt;

        if ($expiresAt === null) {
            goto after_expiresAt;
        }
        after_expiresAt:        $result['expires_at'] = $expiresAt;

        
        $rawKey = $object->rawKey;

        if ($rawKey === null) {
            goto after_rawKey;
        }
        after_rawKey:        $result['raw_key'] = $rawKey;

        
        $revoked = $object->revoked;

        if ($revoked === null) {
            goto after_revoked;
        }
        after_revoked:        $result['revoked'] = $revoked;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey⚡️Subkeys⚡️Emails(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\GpgKey\Subkeys\Emails);
        $result = [];

        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }
        after_email:        $result['email'] = $email;

        
        $verified = $object->verified;

        if ($verified === null) {
            goto after_verified;
        }
        after_verified:        $result['verified'] = $verified;


        return $result;
    }
    
    

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
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
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
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
