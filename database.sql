
CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passse_word` varchar(8) NOT NULL,
  `phone_number` int(11) NOT NULL,
  PRIMARY KEY (client_id)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `products` (
  `product_name` varchar(200) NOT NULL,
  `category` varchar(20) NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  PRIMARY KEY (product_name)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





CREATE TABLE `commandes` (
  `commande_id` int(11) NOT NULL,
  `fk_client_id` int(11) NOT NULL,
  `fk_product_name` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (commande_id),
   FOREIGN KEY (fk_product_name) REFERENCES products(product_name),
    FOREIGN KEY (fk_client_id) REFERENCES clients(client_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


