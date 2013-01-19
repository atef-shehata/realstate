CREATE TABLE category (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, name_ar VARCHAR(255) NOT NULL, category_icon VARCHAR(255) NOT NULL, category_icon_ar VARCHAR(255) NOT NULL, status VARCHAR(8) NOT NULL, featured TINYINT(1), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE city (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, name_ar VARCHAR(255) NOT NULL, country_id BIGINT NOT NULL, INDEX country_id_idx (country_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE country (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, name_ar VARCHAR(255) NOT NULL, active TINYINT(1), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE currency (id BIGINT AUTO_INCREMENT, name VARCHAR(50), name_ar VARCHAR(50), code VARCHAR(10), code_ar VARCHAR(10), symbol VARCHAR(3), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE district (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, name_ar VARCHAR(255) NOT NULL, city_id BIGINT NOT NULL, INDEX city_id_idx (city_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE newsletters (id BIGINT AUTO_INCREMENT, email TEXT, subscribe TINYINT(1) DEFAULT '1', created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE cms_pages (id BIGINT AUTO_INCREMENT, title VARCHAR(255) NOT NULL, body text, menu_item TINYINT(1), num_of_hits BIGINT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE state (id BIGINT AUTO_INCREMENT, title VARCHAR(255) NOT NULL, title_ar VARCHAR(255) NOT NULL, summary text, price BIGINT NOT NULL, currency_id BIGINT, start_time DATETIME, end_time DATETIME, published TINYINT(1) DEFAULT '0', keywords VARCHAR(255), video VARCHAR(255), images text, user_id BIGINT NOT NULL, category_id BIGINT NOT NULL, payment_options VARCHAR(1), area FLOAT(18, 2), website VARCHAR(255), sale_type VARCHAR(1), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX currency_id_idx (currency_id), INDEX user_id_idx (user_id), INDEX category_id_idx (category_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE state_slug (id BIGINT AUTO_INCREMENT, state_id BIGINT NOT NULL, slug VARCHAR(255) NOT NULL, main TINYINT(1) DEFAULT '0', disabled TINYINT(1) DEFAULT '0', INDEX slug_index_idx (id, slug), INDEX state_id_idx (state_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_forgot_password (id BIGINT AUTO_INCREMENT, user_id BIGINT NOT NULL, unique_key VARCHAR(255), expires_at DATETIME NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group_permission (group_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(group_id, permission_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_permission (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_remember_key (id BIGINT AUTO_INCREMENT, user_id BIGINT, remember_key VARCHAR(32), ip_address VARCHAR(50), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user (id BIGINT AUTO_INCREMENT, first_name VARCHAR(255), last_name VARCHAR(255), email_address VARCHAR(255) NOT NULL UNIQUE, username VARCHAR(128) NOT NULL UNIQUE, algorithm VARCHAR(128) DEFAULT 'user::generate_password' NOT NULL, salt VARCHAR(255), password VARCHAR(255), is_active TINYINT(1) DEFAULT '1', is_super_admin TINYINT(1) DEFAULT '0', last_login DATETIME, old_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX is_active_idx_idx (is_active), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_email_tokens (id BIGINT AUTO_INCREMENT, sf_guard_user_id BIGINT NOT NULL, email_address VARCHAR(100) NOT NULL, email_token VARCHAR(255) NOT NULL, token_expire_date DATETIME NOT NULL, INDEX sf_guard_user_id_idx (sf_guard_user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_group (user_id BIGINT, group_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, group_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_permission (user_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, permission_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_profile (id BIGINT AUTO_INCREMENT, sf_guard_user_id BIGINT NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, email_verified TINYINT(1) DEFAULT '0' NOT NULL, mobile VARCHAR(45) NOT NULL, mobile_verified TINYINT(1) DEFAULT '0' NOT NULL, address VARCHAR(255), birth_date DATE, gender VARCHAR(6), total_points BIGINT, referral_code VARCHAR(255), checkins text, interests text, last_login DATETIME, last_ip VARCHAR(15), profile_picture VARCHAR(255), percentage_complete BIGINT, fb_id VARCHAR(255), fb_name VARCHAR(255), fb_serialize text, twitter_id VARCHAR(255), twitter_name VARCHAR(255), social_accounts text, source VARCHAR(255), uses_mobile text, newsletter TINYINT(1), user_settings text, district_id BIGINT, city_id BIGINT, country_id BIGINT, refered_by BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX sf_guard_user_id_idx (sf_guard_user_id), PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE city ADD CONSTRAINT city_country_id_country_id FOREIGN KEY (country_id) REFERENCES country(id);
ALTER TABLE district ADD CONSTRAINT district_city_id_city_id FOREIGN KEY (city_id) REFERENCES city(id);
ALTER TABLE state ADD CONSTRAINT state_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id);
ALTER TABLE state ADD CONSTRAINT state_currency_id_currency_id FOREIGN KEY (currency_id) REFERENCES currency(id);
ALTER TABLE state ADD CONSTRAINT state_category_id_category_id FOREIGN KEY (category_id) REFERENCES category(id);
ALTER TABLE state_slug ADD CONSTRAINT state_slug_state_id_state_id FOREIGN KEY (state_id) REFERENCES state(id);
ALTER TABLE sf_guard_forgot_password ADD CONSTRAINT sf_guard_forgot_password_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_remember_key ADD CONSTRAINT sf_guard_remember_key_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_email_tokens ADD CONSTRAINT sf_guard_user_email_tokens_sf_guard_user_id_sf_guard_user_id FOREIGN KEY (sf_guard_user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_profile ADD CONSTRAINT sf_guard_user_profile_sf_guard_user_id_sf_guard_user_id FOREIGN KEY (sf_guard_user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
