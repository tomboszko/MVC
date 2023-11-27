CREATE DATABASE IF NOT EXISTS MVC;
USE MVC;

CREATE TABLE IF NOT EXISTS articles (
    title VARCHAR(255),
    description TEXT,
    publish_date DATETIME
);

USE MVC;

INSERT INTO articles (title, description, publish_date) VALUES
('Introduction to Blockchain Technology', 'An overview of blockchain technology, its fundamental principles, and its role in powering Web3 applications.', '2023-11-01 10:00:00'),
('Smart Contracts and Their Applications', 'Exploring how smart contracts work on blockchain platforms like Ethereum and their applications in Web3.', '2023-11-02 09:30:00'),
('The Rise of Decentralized Finance (DeFi)', 'A deep dive into DeFi, explaining how it s reshaping financial services using blockchain technology.', '2023-11-03 08:45:00'),
('Understanding Decentralized Applications (dApps)', 'This article covers what decentralized applications are and how they differ from traditional web applications.', '2023-11-04 11:15:00'),
('The Future of Cryptocurrencies', 'Discussing the potential future developments and the evolving landscape of cryptocurrencies in the Web3 era.', '2023-11-05 13:00:00'),
('Blockchain and Data Security', 'An analysis of how blockchain technology enhances data security and privacy in Web3 applications.', '2023-11-06 14:30:00'),
('NFTs: Beyond Just Art and Collectibles', 'Exploring the diverse use cases of Non-Fungible Tokens (NFTs) in the Web3 space beyond art and collectibles.', '2023-11-07 16:00:00'),
('The Role of DAOs in Web3', 'Understanding Decentralized Autonomous Organizations (DAOs) and their significance in the governance of Web3 projects.', '2023-11-08 10:20:00'),
('Interoperability in Blockchain Networks', 'Discussing the challenges and solutions around blockchain interoperability and its importance for Web3.', '2023-11-09 12:00:00'),
('Web3 and the Future of Privacy', 'Analyzing how Web3 technologies are addressing privacy concerns in the digital world.', '2023-11-10 09:50:00');
