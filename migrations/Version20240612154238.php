<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240612154238 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE cart_products DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE cart_products ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY FIRST');
    }

    public function down(Schema $schema): void
    {
    }
}
