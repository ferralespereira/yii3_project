<?php

declare(strict_types=1);

namespace App\Web\Page;

use DateTimeImmutable;
use Yiisoft\Db\Connection\ConnectionInterface;

final readonly class PageRepository
{
    public function __construct(
        private ConnectionInterface $connection,
    ) {}

    public function save(Page $page): void
    {
        $row = [
            'id' => $page->id,
            'title' => $page->title,
            'slug' => $page->slug,
            'text' => $page->text,
            'created_at' => $page->createdAt,
            'updated_at' => $page->updatedAt,
        ];

        if ($this->exists($page->id)) {
            $this->connection->createCommand()->update('{{%page}}', $row, ['id' => $page->id])->execute();
        } else {
            $this->connection->createCommand()->insert('{{%page}}', $row)->execute();
        }
    }

    public function findOneBySlug(string $slug): ?Page
    {
        $query = $this->connection
            ->select()
            ->from('{{%page}}')
            ->where('slug = :slug', ['slug' => $slug]);

        return $this->createPage($query->one());
    }

    /**
     * @return iterable<Page>
     */
    public function findAll(int $limit = 10, int $offset = 0): iterable
    {
        $rows = $this->connection
            ->select()
            ->from('{{%page}}')
            ->limit($limit)
            ->offset($offset)
            ->all();

        foreach ($rows as $row) {
            yield $this->createPage($row);
        }
    }

    public function count(): int
    {
        return (int) $this->connection
            ->createQuery()
            ->from('{{%page}}')
            ->count();
    }

    private function createPage(?array $row): ?Page
    {
        if ($row === null) {
            return null;
        }

        return Page::create(
            id: $row['id'],
            title: $row['title'],
            text: $row['text'],
            slug: $row['slug'],
            createdAt: new DateTimeImmutable($row['created_at']),
            updatedAt: new DateTimeImmutable($row['updated_at']),
        );
    }

    public function deleteBySlug(string $slug): void
    {
        $this->connection->createCommand()->delete(
            '{{%page}}',
            ['slug' => $slug],
        )->execute();
    }

    public function exists(string $id): bool
    {
        return $this->connection->createQuery()
            ->from('{{%page}}')
            ->where(['id' => $id])
            ->exists();
    }
}