//PHP code for creating tables

$sql = "CREATE TABLE `items` (\n"

    . "`id` int(11) AUTO_INCREMENT PRIMARY KEY,\n"

    . "`name` varchar(100) NOT NULL,\n"

    . "`type` varchar(20) NOT NULL,\n"

    . "`brand` varchar(50) NOT NULL,\n"

    . "`price` double(5,2) NOT NULL\n"

    . ") ENGINE=InnoDB;";


 //php code for inserting into tables 

    $sql = "INSERT INTO `items` (`name`,`type`,`brand`,`price`) VALUES\n"

    . "(\'Samsung A40s\', \'Mobile\',\'Sansung\',300.00),\n"

    . "(\'Samsung 4523 40” inche\', \'TV\',\'Samsung\',250.00),\n"

    . "(\'Walton Large Fridge\', \'Fridge\',\'Walton\',400.00),\n"

    . "(\'LG 15” Monitor\', \'Monitor\',\'LG\',100.00),\n"

    . "(\'DELL gaming Laptop\', \'Laptop\',\'Dell\',450.00);";