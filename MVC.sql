CREATE DATABASE IF NOT EXISTS MVC;
USE MVC;

CREATE TABLE IF NOT EXISTS articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
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

-- Introduction to Blockchain Technology
UPDATE articles 
SET content = 'Blockchain technology, a foundational innovation, has transformed digital transactions. It operates on a decentralized network, offering unparalleled security and transparency. This technology underpins cryptocurrencies like Bitcoin, providing a trustless environment for financial exchanges. Its core feature, the distributed ledger, records transactions across multiple computers, ensuring that data is immutable and resistant to tampering. Smart contracts, self-executing contracts with the terms directly written into code, are a key element of blockchain, enabling automated, secure transactions without intermediaries. Blockchain\'s impact extends beyond finance. It\'s pivotal in supply chain management, enhancing traceability and reducing fraud. In healthcare, blockchain secures patient data and improves record management. The technology also empowers individuals through decentralized identities, offering control over personal data. As blockchain evolves, it faces challenges like scalability, energy consumption, and regulatory compliance. However, ongoing innovations like layer-2 solutions and energy-efficient consensus mechanisms are addressing these issues, paving the way for broader adoption. Blockchain\'s potential in creating a more transparent, secure digital world is immense, making it a cornerstone of modern technological advancements.' 
WHERE title = 'Introduction to Blockchain Technology';

UPDATE articles 
SET content = 'Smart contracts revolutionize contractual dealings. These digital contracts automatically execute and enforce terms. Built on blockchain, they eliminate intermediaries, reduce costs, and increase transaction speed. Ethereum popularized smart contracts, but other platforms like Cardano and Tezos are also significant. Use cases include automating insurance claims, real estate transactions, and supply chain management. Smart contracts ensure transparency and tamper-proof records, fostering trust among parties. They face challenges in legal recognition and technical complexities, but their potential in automating and securing digital agreements is unparalleled. As technology evolves, smart contracts are expected to become integral in various sectors, driving efficiency and innovation.' 
WHERE title = 'Smart Contracts and Their Applications';


UPDATE articles 
SET content = 'Decentralized Finance (DeFi) is a radical shift in the financial sector, leveraging blockchain technology to democratize finance. It removes control from traditional financial institutions, offering open access to financial services like lending, borrowing, and trading through decentralized platforms. DeFi applications run on smart contracts, ensuring transactions are executed automatically without intermediaries. This sector has seen exponential growth, with billions of dollars locked in DeFi protocols. Key DeFi platforms include MakerDAO, Compound, and Aave. DeFi challenges include security risks, regulatory uncertainty, and market volatility. However, its potential in creating an inclusive financial system is significant, offering opportunities for innovation and financial empowerment.' 
WHERE title = 'The Rise of Decentralized Finance (DeFi)';

-- Understanding Decentralized Applications (dApps)
UPDATE articles 
SET content = 'Decentralized applications (dApps) represent a shift from traditional, centralized software models. Running on a blockchain network, dApps offer increased security, transparency, and resistance to censorship. Unlike conventional apps, they operate on a peer-to-peer network, removing central points of control and failure. dApps are integral to the Ethereum ecosystem but also thrive on other blockchains like EOS and Tron. They are used in various domains, including gaming, social media, and decentralized finance (DeFi). dApps face challenges in user experience and scalability, but advancements in blockchain technology are addressing these issues. The growth of dApps is a testament to the evolving landscape of the internet, heralding a new era of decentralized digital services.' 
WHERE title = 'Understanding Decentralized Applications (dApps)';

-- The Future of Cryptocurrencies
UPDATE articles 
SET content = 'The future of cryptocurrencies is a subject of much speculation and excitement. These digital currencies, led by Bitcoin, offer a new form of money that is decentralized and operates on blockchain technology. Cryptocurrencies promise lower transaction fees, improved access to financial services, and a reduction in traditional banking inefficiencies. The rise of altcoins like Ethereum, Ripple, and Litecoin diversifies the cryptocurrency landscape. Challenges facing cryptocurrencies include regulatory scrutiny, market volatility, and concerns over energy consumption for mining operations. However, advancements like the integration of privacy features, scalability solutions, and the development of central bank digital currencies (CBDCs) are shaping a promising future for cryptocurrencies, potentially transforming the global financial system.' 
WHERE title = 'The Future of Cryptocurrencies';

-- Blockchain and Data Security
UPDATE articles 
SET content = 'Blockchain technology significantly enhances data security and privacy in digital transactions. Its decentralized nature means that data is not stored in a single location, making it less susceptible to hacking and data breaches. Blockchain employs cryptographic techniques to secure data, ensuring its integrity and confidentiality. This technology is particularly beneficial in industries like healthcare and finance, where data security is paramount.
