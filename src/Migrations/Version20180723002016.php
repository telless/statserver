<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180723002016 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE jivo_action CHANGE event_name event_name VARCHAR(255) DEFAULT NULL, CHANGE chat_id chat_id INT DEFAULT NULL, CHANGE widget_id widget_id VARCHAR(255) DEFAULT NULL, CHANGE visitor_number visitor_number VARCHAR(255) DEFAULT NULL, CHANGE visitor_description visitor_description VARCHAR(255) DEFAULT NULL, CHANGE visitor_chats_count visitor_chats_count INT DEFAULT NULL, CHANGE agent_id agent_id VARCHAR(255) DEFAULT NULL, CHANGE agent_name agent_name VARCHAR(255) DEFAULT NULL, CHANGE agent_email agent_email VARCHAR(255) DEFAULT NULL, CHANGE session_utm session_utm VARCHAR(255) DEFAULT NULL, CHANGE session_utm_json session_utm_json JSON DEFAULT NULL, CHANGE session_ip_addr session_ip_addr VARCHAR(255) DEFAULT NULL, CHANGE session_user_agent session_user_agent VARCHAR(255) DEFAULT NULL, CHANGE session_geoip_region_code session_geoip_region_code VARCHAR(255) DEFAULT NULL, CHANGE session_geoip_country session_geoip_country VARCHAR(255) DEFAULT NULL, CHANGE session_geoip_country_code session_geoip_country_code VARCHAR(255) DEFAULT NULL, CHANGE session_geoip_region session_geoip_region VARCHAR(255) DEFAULT NULL, CHANGE session_geoip_city session_geoip_city VARCHAR(255) DEFAULT NULL, CHANGE session_geoip_latitude session_geoip_latitude VARCHAR(255) DEFAULT NULL, CHANGE session_geoip_longitude session_geoip_longitude VARCHAR(255) DEFAULT NULL, CHANGE session_geoip_organization session_geoip_organization VARCHAR(255) DEFAULT NULL, CHANGE page_url page_url VARCHAR(255) DEFAULT NULL, CHANGE call_type call_type VARCHAR(255) DEFAULT NULL, CHANGE call_phone call_phone VARCHAR(255) DEFAULT NULL, CHANGE call_status call_status VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE jivo_action CHANGE event_name event_name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE chat_id chat_id INT NOT NULL, CHANGE widget_id widget_id VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE visitor_number visitor_number VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE visitor_description visitor_description VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE visitor_chats_count visitor_chats_count INT NOT NULL, CHANGE agent_id agent_id VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE agent_name agent_name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE agent_email agent_email VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE session_utm session_utm VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE session_utm_json session_utm_json JSON NOT NULL, CHANGE session_ip_addr session_ip_addr VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE session_user_agent session_user_agent VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE session_geoip_region_code session_geoip_region_code VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE session_geoip_country session_geoip_country VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE session_geoip_country_code session_geoip_country_code VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE session_geoip_region session_geoip_region VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE session_geoip_city session_geoip_city VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE session_geoip_latitude session_geoip_latitude VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE session_geoip_longitude session_geoip_longitude VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE session_geoip_organization session_geoip_organization VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE page_url page_url VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE call_type call_type VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE call_phone call_phone VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE call_status call_status VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
