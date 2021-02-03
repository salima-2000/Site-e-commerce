
CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL  AUTO_INCREMENT,
  `client_name` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone_number` varchar(11) NOT NULL,


  PRIMARY KEY (client_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `products` (
  `product_id` int(11) NOT NULL  AUTO_INCREMENT,
  `product_name` varchar(200) NOT NULL,
  `category` varchar(20) NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL ,
  `product_color` varchar(200) NOT NULL,
  `product_size` char(1) NOT NULL,
  


  PRIMARY KEY (product_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





CREATE TABLE `commandes` (
  `commande_id` int(11) NOT NULL  AUTO_INCREMENT,
  `fk_client_id` int(11) NOT NULL ,
  `fk_product_id` int(11) NOT NULL ,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `stat` varchar(50) DEFAULT 'non commander',
  `date` DATE ,



  PRIMARY KEY (commande_id),
  FOREIGN KEY (fk_product_id) REFERENCES products(product_id) ON DELETE CASCADE,
  FOREIGN KEY (fk_client_id) REFERENCES clients(client_id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL  AUTO_INCREMENT,
  `article_title` varchar(2000) NOT NULL,
  `article_body` varchar(20000) NOT NULL,
  `article_image` varchar(2000) ,

  PRIMARY KEY (article_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
