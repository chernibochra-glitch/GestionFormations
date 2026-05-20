-- ============================================
-- Script de création de la base de données
-- Projet : GestionFormations
-- ============================================

CREATE DATABASE IF NOT EXISTS gestion_formations
    CHARACTER SET utf8
    COLLATE utf8_general_ci;

USE gestion_formations;

-- ── Table formations ──────────────────────
CREATE TABLE IF NOT EXISTS formations (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    titre       VARCHAR(255)    NOT NULL,
    description TEXT            NOT NULL,
    duree       VARCHAR(50)     NOT NULL,
    niveau      ENUM('Débutant','Intermédiaire','Avancé') NOT NULL,
    prix        DECIMAL(10,2)   NOT NULL,
    created_at  DATETIME        DEFAULT NOW()
);

-- ── Table inscriptions ────────────────────
CREATE TABLE IF NOT EXISTS inscriptions (
    id                INT AUTO_INCREMENT PRIMARY KEY,
    nom               VARCHAR(100)  NOT NULL,
    prenom            VARCHAR(100)  NOT NULL,
    email             VARCHAR(150)  NOT NULL,
    formation_id      INT           NOT NULL,
    statut_paiement   ENUM('en_attente','payé') DEFAULT 'en_attente',
    date_inscription  DATETIME      DEFAULT NOW(),
    FOREIGN KEY (formation_id) REFERENCES formations(id) ON DELETE CASCADE
);

-- ── Données de test ───────────────────────
INSERT INTO formations (titre, description, duree, niveau, prix) VALUES
('Intelligence Artificielle',
 'Maîtrisez les fondamentaux de l''IA : machine learning, réseaux de neurones et applications pratiques.',
 '40h', 'Intermédiaire', 299.00),

('Data Science avec Python',
 'Analysez et visualisez des données complexes avec Python, Pandas et Matplotlib.',
 '35h', 'Débutant', 249.00),

('Développement Web Full Stack',
 'Créez des applications web complètes avec HTML, CSS, JavaScript et PHP.',
 '50h', 'Débutant', 199.00),

('Cybersécurité & Ethical Hacking',
 'Apprenez à sécuriser les systèmes et découvrez les techniques des hackers éthiques.',
 '45h', 'Avancé', 349.00),

('Bases de données MySQL',
 'Conception, requêtes SQL avancées, optimisation et administration de bases de données.',
 '30h', 'Intermédiaire', 179.00);
