<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180722232349 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE jivo_action (id INT NOT NULL, event_name VARCHAR(255) NOT NULL, chat_id INT NOT NULL, widget_id VARCHAR(255) NOT NULL, visitor_name VARCHAR(255) DEFAULT NULL, visitor_email VARCHAR(255) DEFAULT NULL, visitor_phone VARCHAR(255) DEFAULT NULL, visitor_number VARCHAR(255) NOT NULL, visitor_description VARCHAR(255) NOT NULL, visitor_social JSON DEFAULT NULL, visitor_chats_count INT NOT NULL, agent_id VARCHAR(255) NOT NULL, agent_name VARCHAR(255) NOT NULL, agent_email VARCHAR(255) NOT NULL, agent_phone VARCHAR(255) DEFAULT NULL, department_id INT DEFAULT NULL, department_name VARCHAR(255) DEFAULT NULL, session_utm VARCHAR(255) NOT NULL, session_utm_json JSON NOT NULL, session_ip_addr VARCHAR(255) NOT NULL, session_user_agent VARCHAR(255) NOT NULL, session_geoip_region_code VARCHAR(255) NOT NULL, session_geoip_country VARCHAR(255) NOT NULL, session_geoip_country_code VARCHAR(255) NOT NULL, session_geoip_region VARCHAR(255) NOT NULL, session_geoip_city VARCHAR(255) NOT NULL, session_geoip_latitude VARCHAR(255) NOT NULL, session_geoip_longitude VARCHAR(255) NOT NULL, session_geoip_organization VARCHAR(255) NOT NULL, page_url VARCHAR(255) NOT NULL, page_title VARCHAR(255) DEFAULT NULL, call_type VARCHAR(255) NOT NULL, call_phone VARCHAR(255) NOT NULL, call_status VARCHAR(255) NOT NULL, call_reason VARCHAR(255) DEFAULT NULL, call_record_url VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE jivo_action');
    }
}
