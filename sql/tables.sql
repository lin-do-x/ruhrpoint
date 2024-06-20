DROP TABLE IF EXISTS shopping_cart;
DROP TABLE IF EXISTS feedback;
DROP TABLE IF EXISTS prudact;
DROP TABLE IF EXISTS user;

CREATE TABLE user (
    u_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    pass VARCHAR(255) NOT NULL,
    birthday VARCHAR(255),
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    house_number VARCHAR(255),
    city VARCHAR(255),
    zipcode VARCHAR(255),
    residence VARCHAR(255),
    country VARCHAR(255),
    Active_Code VARCHAR(255),
    role VARCHAR(255) DEFAULT 'user',
    is_active BOOLEAN
);

CREATE TABLE prudact (
    p_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    titel VARCHAR(255) NOT NULL,
    sub_titel VARCHAR(255) NOT NULL,
    category VARCHAR(255) NOT NULL,
    `desc` VARCHAR(255) NOT NULL,
    img_path VARCHAR(255) NOT NULL,
    price DECIMAL(8, 2) NOT NULL,
    available int

);

CREATE TABLE shopping_cart (
    sc_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    u_id  INT NOT NULL,
    p_id  INT NOT NULL,
    crowd INT NOT NULL,
    checkout BOOLEAN DEFAULT 0,
    INDEX(u_id),
    FOREIGN KEY (u_id) REFERENCES user(u_id) ON DELETE RESTRICT ON UPDATE CASCADE,
    INDEX(p_id),
    FOREIGN KEY (p_id) REFERENCES prudact(p_id) ON DELETE RESTRICT ON UPDATE CASCADE
);

CREATE TABLE feedback (
    f_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    u_id INT NOT NULL,
    title VARCHAR(100) NOT NULL,
    contents TEXT NOT NULL,
    rating INT,
    INDEX(u_id),
    FOREIGN KEY (u_id) REFERENCES user(u_id) ON DELETE RESTRICT ON UPDATE CASCADE
);
