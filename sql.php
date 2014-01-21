
    /**
     * Дефолтовая таблица пользователей
    ---------------------------------------   
    */  
    CREATE TABLE `users` (
      `uid` int(11) NOT NULL AUTO_INCREMENT,
      `login` varchar(50) NOT NULL,
      `password` varchar(41) NOT NULL,
      `email` varchar(25) NOT NULL,
      `isadmin` int(1) DEFAULT 3,
      PRIMARY KEY (`uid`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
    
    login:test  password::test
    
    INSERT INTO `users` VALUES (1,'test','2b4f484d0e0948f39990843053d67406848a3d46',1);
    --------------------------------------- 

     
    /**
     * Дефалтовая таблица разделов (страниц)
    ---------------------------------------  
    */
    CREATE TABLE `section` (
      `sid` int(11) NOT NULL AUTO_INCREMENT,
      `sindex` varchar(255) DEFAULT NULL,
      `sname` varchar(255) NOT NULL,
      `sdescription` text,
      PRIMARY KEY (`sid`)
    ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;  
    
    INSERT INTO `section` VALUES (1,'main','основной','Основной раздел');
    ---------------------------------------  
     */ 
     
    /**
     * Дефолтовая таблица страниц
    ---------------------------------------     
    */
    CREATE TABLE `pages` (
      `pid` int(11) NOT NULL AUTO_INCREMENT,
      `name` varchar(30) NOT NULL,
      `title` varchar(255) DEFAULT NULL,
      `description` varchar(255) DEFAULT NULL,
      `keywords` varchar(255) DEFAULT NULL,
      `created` datetime DEFAULT NULL,
      `content` text,
      `display` int(1) DEFAULT '1',
      `sid` int(11) DEFAULT '1',
      `acid` int(4) DEFAULT '0',
      PRIMARY KEY (`pid`)
    ) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
    
    INSERT INTO `pages` VALUES (1,'index','Главная страница','Описание главной страницы','Ключевые слова главной страницы','2013-12-09 09:12:21','Текст главной страницы',1,1);
        --------------------------------------- 
     */
     
    /**
     * Дефолтовая таблица с правами доступа
    ---------------------------------------   
    */       
    CREATE TABLE `access` (
      `acid` int(11) NOT NULL AUTO_INCREMENT,
      `aname` varchar(100) DEFAULT NULL,
      PRIMARY KEY (`acid`)
    ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;  
    
    INSERT INTO `access` VALUES (1,'Администратор'),(2,'Гость'),(3,'Посетитель');   
    --------------------------------------- 
    /**
     * Дефолтовая таблица с HTML сниппетов
    ---------------------------------------  
    */    
    CREATE TABLE `htmlsnippets` (
      `hsid` int(11) NOT NULL AUTO_INCREMENT,
      `hsname` varchar(255) DEFAULT NULL,
      `hsdescription` text,
      `code` text,
      PRIMARY KEY (`hsid`)
    ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;  
    ---------------------------------------   
    
    /** 
     * Дефолтовая таблица галерей
    ---------------------------------------  
    */     
    CREATE TABLE `galery` (
      `glid` int(11) NOT NULL AUTO_INCREMENT,
      `gname` varchar(255) DEFAULT NULL,
      `gindex` varchar(255) DEFAULT NULL,
      `gdescription` text,
      `image` varchar(255) DEFAULT NULL,
      PRIMARY KEY (`glid`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;    
    --------------------------------------- 
    
    /** 
     * Дефолтовая таблица картинок галерей
    ---------------------------------------  
    */     
    CREATE TABLE `gimages` (
      `giid` int(11) NOT NULL AUTO_INCREMENT,
      `glid` int(11) DEFAULT NULL,
      `pic` varchar(255) DEFAULT NULL,
      `thumb` varchar(255) DEFAULT NULL,
      `giname` varchar(255) DEFAULT NULL,
      `gidescription` text,
      PRIMARY KEY (`giid`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;    
    ---------------------------------------     
)         
