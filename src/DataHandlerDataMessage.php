<?php

declare(strict_types=1);

namespace Netlogix\DataHandlerQueueMessages;

final class DataHandlerDataMessage
{
    protected string $tableName;
    protected string $uid;
    protected array $record;

    public function __construct(
        string $tableName,
        string $uid,
        array $record
    ) {
        $this->tableName = $tableName;
        $this->uid = $uid;
        $this->record = $record;
    }

    public function getTableName(): string
    {
        return $this->tableName;
    }

    public function getUid(): string
    {
        return $this->uid;
    }

    public function getRecord(): array
    {
        return $this->record;
    }
}
