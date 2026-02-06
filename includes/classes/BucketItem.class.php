<?php

class BucketItem
{
    // PDO-anslutningen mot databasen
    private PDO $db;

    // Tar emot PDO-objektet och sparar det i klassen
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    // Hämtar alla items och sorterar efter prioritet och datum
    public function getAll(): array
    {
        $stmt = $this->db->query("SELECT * FROM bucket_items ORDER BY priority ASC, created_at DESC");
        return $stmt->fetchAll();
    }

    // Lägger till ett nytt item i tabellen
    public function addItem(string $name, string $description, int $priority): bool
    {
        $stmt = $this->db->prepare("
            INSERT INTO bucket_items (name, description, priority, created_at)
            VALUES (?, ?, ?, NOW())
        ");
        return $stmt->execute([$name, $description, $priority]);
    }

    // Raderar ett item baserat på id
    public function deleteItem(int $id): bool
    {
        $stmt = $this->db->prepare("DELETE FROM bucket_items WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
